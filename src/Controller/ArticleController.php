<?php
namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
        if (!$this->isGranted('ROLE_ADMIN') && $this->getUser() !== $article->getUtilisateur()) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas supprimer cet article.");
        }

        $entityManager->remove($article);
        $entityManager->flush();

        $this->addFlash('success', 'Article supprimé avec succès.');
        return $this->redirectToRoute('article_liste');
    }

    
        #[Route('/article/{id}', name: 'details', methods: ['GET'])]
        public function details(Article $article, CommentaireRepository $commentaireRepository): Response
        {
            // Récupérer les commentaires liés à l'article
            $commentaires = $commentaireRepository->findBy(['article' => $article]);
    
            return $this->render('article/details.html.twig', [
                'article' => $article,
                'commentaires' => $commentaires
            ]);
        }
    }



