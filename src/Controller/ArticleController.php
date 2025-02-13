<?php
namespace App\Controller;

use App\Entity\Article;
use App\Entity\UtilisateurArticle;
use App\Enum\StatutDemande;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ArticleController extends AbstractController
{
   
   
    #[Route('/accueil', name: 'accueil')]
    public function accueil(Request $request, ArticleRepository $articleRepository, CategorieRepository $categorieRepository): Response
    {
        $searchQuery = $request->query->get('q');
        $ville = $request->query->get('ville');
        $categorieId = $request->query->get('categorie');
    
        $filtre = ['statut' => 'disponible'];
    
        if ($ville) {
            $filtre['ville'] = $ville;
        }
    
        if ($categorieId) {
            $filtre['categorie'] = $categorieId;
        }
    
        // Requête avec ou sans recherche
        if ($searchQuery) {
            $articles = $articleRepository->createQueryBuilder('a')
                ->where('a.titre LIKE :query OR a.description LIKE :query')
                ->andWhere('a.statut = :statut')
                ->setParameter('query', '%' . $searchQuery . '%')
                ->setParameter('statut', 'disponible')
                ->getQuery()
                ->getResult();
        } else {
            $articles = $articleRepository->findBy($filtre);
        }
    
        $reservedArticles = $articleRepository->findBy(['statut' => 'reservé']);
        $categories = $categorieRepository->findAll();
    
        return $this->render('accueil/index.html.twig', [
            'articles' => $articles,
            'reserved_articles' => $reservedArticles,
            'categories' => $categories,
            'selectedVille' => $ville,
            'selectedCategorie' => $categorieId ? $categorieRepository->find($categorieId)?->getNom() : null,
        ]);
    }


public function liste(ArticleRepository $articleRepository): Response
{
    $articles = $articleRepository->findAll();
    
    return $this->render('article/liste.html.twig', [
        'articles' => $articles
    ]);
}

 
    
    // Ajouter un article (Admin & Donneur)
    public function ajouter(Request $request, EntityManagerInterface $entityManager, CategorieRepository $categorieRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez  s`inscrire ou connecter en tant que donneur pour ajouter un article.');
            return $this->redirectToRoute('utilisateur_create');
        }

        if (in_array('ROLE_RECEVEUR', $user->getRoles())) {
            $this->addFlash('error', 'Vous êtes receveur, vous n\'avez pas le droit d\'ajouter un article.');
            return $this->redirectToRoute('accueil');
        }

        if (in_array('ROLE_DONNEUR', $user->getRoles()) || in_array('ROLE_ADMIN', $user->getRoles())) {
            if ($request->isMethod('POST')) {
                $data = $request->request->all();
                $imageFile = $request->files->get('image');

                if (empty($data['titre']) || empty($data['description']) || empty($data['etat']) || empty($data['ville']) || empty($data['categorie']) || !$imageFile) {
                    $this->addFlash('error', 'Tous les champs sont obligatoires.');
                    return $this->redirectToRoute('ajouter_article');
                }

                $categorie = $categorieRepository->find($data['categorie']);
                if (!$categorie) {
                    $this->addFlash('error', 'Catégorie invalide.');
                    return $this->redirectToRoute('ajouter_article');
                }

                $article = new Article();
                $article->setTitre($data['titre'])
                    ->setDescription($data['description'])
                    ->setEtat($data['etat'])
                    ->setStatut('disponible')
                    ->setDateAjout(new \DateTime())
                    ->setVille($data['ville'])
                    ->setCategorie($categorie)
                    ->setUtilisateur($user);

                $fileName = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move($this->getParameter('images_directory'), $fileName);
                $article->setImages($fileName);

                $entityManager->persist($article);
                $entityManager->flush();

                $this->addFlash('success', 'Article ajouté avec succès.');
                return $this->redirectToRoute('article_liste');
            }

            $categories = $categorieRepository->findAll();

            return $this->render('article/ajoutarticle.html.twig', [
                'categories' => $categories
            ]);
        }

        $this->addFlash('error', 'Accès interdit.');
        return $this->redirectToRoute('accueil');
    }

    // Modifier un article (Admin & Donneur)
    public function modifier(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && $this->getUser() !== $article->getUtilisateur()) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas modifier cet article.");
        }

        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $article->setTitre($data['titre'] ?? $article->getTitre())
                ->setDescription($data['description'] ?? $article->getDescription())
                ->setEtat($data['etat'] ?? $article->getEtat());

            $entityManager->flush();
            $this->addFlash('success', 'Article modifié avec succès.');
            return $this->redirectToRoute('article_liste');
        }

        return $this->render('article/modifierarticle.html.twig', [
            'article' => $article,
        ]);
    }

    //  Supprimer un article 
  
    public function supprimer(Article $article, EntityManagerInterface $entityManager): Response
    {
        // Vérifications d’accès
        if (!$this->isGranted('ROLE_ADMIN') && $this->getUser() !== $article->getUtilisateur()) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas supprimer cet article.");
        }
    
        $entityManager->remove($article);
        $entityManager->flush();
    
        $this->addFlash('success', 'Article supprimé avec succès.');
        return $this->redirectToRoute('article_liste');
    }
    

    #[Route('/article/{id}', name: 'details', methods: ['GET'])]
    public function details(int $id, ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find($id);
    
        if (!$article) {
            throw $this->createNotFoundException("L'article avec l'ID $id n'existe pas.");
        }
    
        return $this->render('article/details.html.twig', [
            'article' => $article
        ]);
    }
    

    #[Route('/article/demander/{id}', name: 'article_demander')]
    public function demanderArticle(
        Article $article,
        MailerInterface $mailer,
        EntityManagerInterface $em
    ): RedirectResponse {
        $utilisateur = $this->getUser(); // L'utilisateur connecté
    
        // 1) Vérifie si l'utilisateur est connecté
        if (!$utilisateur) {
            $this->addFlash('danger', 'Vous devez être connecté pour demander un article.');
            return $this->redirectToRoute('app_login');
        }
    
        // 2) Vérifie si l'utilisateur a le rôle "DONNEUR"
        if (in_array('ROLE_DONNEUR', $utilisateur->getRoles())) {
            $this->addFlash('danger', 'En tant que donneur, vous ne pouvez pas demander un article.');
            return $this->redirectToRoute('accueil');
        }
    
        // 3) Vérifie si l'article est déjà réservé ou en cours
        if ($article->getStatut() !== 'disponible') {
            $this->addFlash('warning', 'Cet article n\'est plus disponible.');
            return $this->redirectToRoute('article_detail', ['id' => $article->getId()]);
        }
    
        // 4) Changer le statut de l'article en "en_cours"
        $article->setStatut('en_cours');
        $em->persist($article);
    
        // 5) Créer une demande dans la table utilisateur_article
        $demande = new UtilisateurArticle($utilisateur, $article);
        // Remplacez ici "changerStatut" par "setStatut"
        $demande->setStatut(StatutDemande::EN_COURS);
        $demande->setDateReservation(new \DateTimeImmutable());
        $em->persist($demande);
    
        // 6) Enregistrer en base
        $em->flush();
    
        // 7) Envoyer les emails au donneur et au receveur
        $emailDonneur = (new Email())
            ->from('noreplay.don@gmail.com')
            ->to($article->getUtilisateur()->getEmail())
            ->subject('Demande pour votre article')
            ->text(sprintf(
                "Bonjour %s,\n\nUn utilisateur souhaite demander votre article '%s'.\n\nCoordonnées du demandeur :\nNom : %s\nEmail : %s\nTéléphone : %s",
                $article->getUtilisateur()->getNom(),
                $article->getTitre(),
                $utilisateur->getNom(),
                $utilisateur->getEmail(),
                $utilisateur->getTelephone()
            ));
        $mailer->send($emailDonneur);
    
        $emailReceveur = (new Email())
            ->from('noreplay.don@gmail.com')
            ->to($utilisateur->getEmail())
            ->subject('Votre demande a été enregistrée')
            ->text(sprintf(
                "Bonjour %s,\n\nVotre demande pour l'article '%s' a été bien enregistrée. Le donneur vous contactera prochainement.\n\nCordialement,\nL'équipe de MonSite",
                $utilisateur->getNom(),
                $article->getTitre()
            ));
        $mailer->send($emailReceveur);
    
        // 8) Message flash et redirection
        $this->addFlash('success', 'Votre demande a été envoyée avec succès. Le donneur vous contactera bientôt.');
        return $this->redirectToRoute('accueil');
    }
    #[Route('/article/confirmer/{id}', name: 'article_confirmer', methods: ['POST'])]
    public function confirmerReservation(int $id, EntityManagerInterface $em): Response
    {
        // 1) Récupération de l'article
        $article = $em->getRepository(Article::class)->find($id);
        if (!$article) {
            throw $this->createNotFoundException('Article non trouvé.');
        }

        // 2) Vérification : l'utilisateur connecté est-il le donneur ?
        $utilisateur = $this->getUser();
        if ($article->getUtilisateur() !== $utilisateur) {
            $this->addFlash('danger', "Vous n'avez pas l'autorisation de confirmer cette demande.");
            return $this->redirectToRoute('utilisateur_profil');
        }

        // 3) Mettre l'article en "reserve" (champ string dans l'entité Article)
        $article->setStatut('reserve'); 

        // 4) Récupérer la demande (statut = EN_COURS) pour cet article
        $demande = $em->getRepository(UtilisateurArticle::class)->findOneBy([
            'article' => $article,
            'statut'  => StatutDemande::EN_COURS,
        ]);

        // Si on la trouve, on la passe à StatutDemande::RESERVE
        if ($demande) {
            $demande->setStatut(StatutDemande::RESERVE);
        }

        // 5) Flush (sauvegarde article + demande)
        $em->flush();

        $this->addFlash('success', 'La demande a été confirmée : l’article est maintenant réservé.');
        return $this->redirectToRoute('utilisateur_profil');
    }

    #[Route('/article/annuler/{id}', name: 'article_annuler', methods: ['POST'])]
    public function annuler(int $id, EntityManagerInterface $em): Response
    {
        // 1) Récupération de l'article
        $article = $em->getRepository(Article::class)->find($id);
        if (!$article) {
            throw $this->createNotFoundException('Article non trouvé.');
        }

        // 2) Vérification : l'utilisateur connecté est-il le donneur ?
        $utilisateur = $this->getUser();
        if ($article->getUtilisateur() !== $utilisateur) {
            $this->addFlash('danger', "Vous n'avez pas l'autorisation d'annuler cette demande.");
            return $this->redirectToRoute('utilisateur_profil');
        }

        // 3) L’article redevient 'disponible'
        $article->setStatut('disponible');

        // 4) Récupérer la demande en cours (EN_COURS)
        $demande = $em->getRepository(UtilisateurArticle::class)->findOneBy([
            'article' => $article,
            'statut'  => StatutDemande::EN_COURS,
        ]);

        // 5) Soit on la passe en DISPONIBLE, soit on la supprime
        if ($demande) {
            // Passer la demande en 'disponible' :
            $demande->setStatut(StatutDemande::DISPONIBLE);

            // OU : $em->remove($demande); // pour la supprimer complètement
        }

        // 6) Flush (sauvegarde article + demande)
        $em->flush();

        $this->addFlash('success', 'La demande a été annulée : l’article est de nouveau disponible.');
        return $this->redirectToRoute('utilisateur_profil');
    }

    
}
    



