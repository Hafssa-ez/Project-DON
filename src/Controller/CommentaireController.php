<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentaireController extends AbstractController
{
  
    #[Route('/article/{id}/commentaires', name: 'commentaire_liste', methods: ['GET'])]
    public function listeCommentaires(Article $article): Response
    {
        // Récupération des commentaires liés à l’article
        $commentaires = $article->getCommentaires();

        // Render d’une page Twig “commentaire/liste.html.twig”
        return $this->render('commentaire/liste.html.twig', [
            'article' => $article,
            'commentaires' => $commentaires,
        ]);
    }


    #[Route('/article/{id}/commentaire/ajouter', name: 'commentaire_ajouter_render')]
    public function ajouterCommentaireRender(
        Article $article,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        // 1) Vérifier l’utilisateur connecté
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('danger', 'Vous devez être connecté pour commenter.');
            return $this->redirectToRoute('app_login');
        }
        if (!in_array('ROLE_RECEVEUR', $user->getRoles())) {
            $this->addFlash('danger', 'Seuls les receveurs peuvent poster un commentaire.');
            return $this->redirectToRoute('details', ['id' => $article->getId()]);
        }

        // 2) Créer l’objet Commentaire et le FormType
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);

        // 3) Handle Request
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Compléter l’entité
            $commentaire->setDate(new \DateTime());
            $commentaire->setUtilisateur($user);
            $commentaire->setArticle($article);

            $em->persist($commentaire);
            $em->flush();

            $this->addFlash('success', 'Commentaire ajouté avec succès.');

            // Redirection vers la page de détail ou autre
            return $this->redirectToRoute('details', ['id' => $article->getId()]);
        }

        // 4) Afficher le formulaire Twig si pas en POST ou pas valide
        return $this->render('commentaire/ajouter.html.twig', [
            'article' => $article,
            'formCommentaire' => $form->createView(),
        ]);
    }

    #[Route('/commentaire/{id}/modifier', name: 'commentaire_modifier_render')]
    public function modifierCommentaireRender(
        Commentaire $commentaire,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('danger', 'Vous devez être connecté.');
            return $this->redirectToRoute('accueil');
        }
        // Vérif auteur ou admin
        if (!in_array('ROLE_ADMIN', $user->getRoles()) &&
            $commentaire->getUtilisateur() !== $user
        ) {
            $this->addFlash('danger', 'Vous ne pouvez pas modifier ce commentaire.');
            return $this->redirectToRoute('accueil');
        }

        // Création form pour modifier (on réutilise le même FormType)
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Commentaire modifié avec succès.');
            return $this->redirectToRoute('details', [
                'id' => $commentaire->getArticle()->getId()
            ]);
        }

        return $this->render('commentaire/modifier.html.twig', [
            'commentaire' => $commentaire,
            'formCommentaire' => $form->createView(),
        ]);
    }

    /**
     * Supprimer un commentaire depuis un formulaire Twig (POST).
     * - L’auteur ou l’admin peut supprimer
     */
    #[Route('/commentaire/{id}/supprimer', name: 'commentaire_supprimer_render', methods: ['POST'])]
    public function supprimerCommentaireRender(
        Commentaire $commentaire,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('danger', 'Vous devez être connecté pour supprimer.');
            return $this->redirectToRoute('accueil');
        }
        // Vérif droit
        if (!in_array('ROLE_ADMIN', $user->getRoles()) &&
            $commentaire->getUtilisateur() !== $user
        ) {
            $this->addFlash('danger', 'Accès interdit.');
            return $this->redirectToRoute('accueil');
        }

        $articleId = $commentaire->getArticle()->getId();

        $em->remove($commentaire);
        $em->flush();

        $this->addFlash('success', 'Commentaire supprimé.');
        return $this->redirectToRoute('details', ['id' => $articleId]);
    }

    /* =========================================================
     *                 PARTIE API (JSON)
     * ========================================================= */

    /**
     * Lister tous les commentaires d’un article (JSON)
     */
    #[Route('/api/articles/{id}/commentaires', name: 'api_commentaires_lister', methods: ['GET'])]
    public function listerCommentairesApi(Article $article): JsonResponse
    {
        $commentaires = $article->getCommentaires();
        $data = [];

        foreach ($commentaires as $comm) {
            $data[] = [
                'id' => $comm->getId(),
                'message' => $comm->getMessage(),
                'date' => $comm->getDate()->format('Y-m-d H:i:s'),
                'utilisateur' => [
                    'id' => $comm->getUtilisateur()->getId(),
                    'nom' => $comm->getUtilisateur()->getNom(),
                ],
            ];
        }

        return $this->json($data, 200);
    }

    /**
     * Ajouter un commentaire (POST JSON)
     * - role receveur
     */
    #[Route('/api/articles/{id}/commentaires', name: 'api_commentaires_ajouter', methods: ['POST'])]
    public function ajouterCommentaireApi(
        Article $article,
        Request $request,
        EntityManagerInterface $em
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Non connecté'], 401);
        }
        if (!in_array('ROLE_RECEVEUR', $user->getRoles())) {
            return $this->json(['error' => 'Seuls les receveurs peuvent commenter'], 403);
        }

        $message = $request->request->get('message');
        if (!$message) {
            return $this->json(['error' => 'message manquant'], 400);
        }

        $commentaire = new Commentaire();
        $commentaire->setMessage($message);
        $commentaire->setDate(new \DateTime());
        $commentaire->setArticle($article);
        $commentaire->setUtilisateur($user);

        $em->persist($commentaire);
        $em->flush();

        return $this->json([
            'status' => 'success',
            'commentaire' => [
                'id' => $commentaire->getId(),
                'message' => $commentaire->getMessage(),
            ]
        ], 201);
    }

    /**
     * Modifier un commentaire (PUT/PATCH JSON)
     * - l’auteur ou admin
     */
    #[Route('/api/commentaires/{id}', name: 'api_commentaires_modifier', methods: ['PUT','PATCH'])]
    public function modifierCommentaireApi(
        Commentaire $commentaire,
        Request $request,
        EntityManagerInterface $em
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Non connecté'], 401);
        }
        if (!in_array('ROLE_ADMIN', $user->getRoles()) &&
            $commentaire->getUtilisateur() !== $user
        ) {
            return $this->json(['error' => 'Accès interdit'], 403);
        }

        $nouveau = $request->request->get('message');
        if ($nouveau) {
            $commentaire->setMessage($nouveau);
        }
        $em->flush();

        return $this->json([
            'status' => 'success',
            'commentaire' => [
                'id' => $commentaire->getId(),
                'message' => $commentaire->getMessage(),
            ]
        ]);
    }

    /**
     * Supprimer un commentaire (DELETE JSON)
     * - auteur ou admin
     */
    #[Route('/api/commentaires/{id}', name: 'api_commentaires_supprimer', methods: ['DELETE'])]
    public function supprimerCommentaireApi(
        Commentaire $commentaire,
        EntityManagerInterface $em
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Non connecté'], 401);
        }
        if (!in_array('ROLE_ADMIN', $user->getRoles()) &&
            $commentaire->getUtilisateur() !== $user
        ) {
            return $this->json(['error' => 'Accès interdit'], 403);
        }

        $em->remove($commentaire);
        $em->flush();

        return $this->json(['status' => 'success', 'message' => 'Commentaire supprimé.'], 200);
    }
}
