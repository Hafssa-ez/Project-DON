<?php
namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/accueil', name: 'app_home')]
    public function index(ArticleRepository $articleRepository): Response
    {
        // Récupérer tous les articles disponibles
        $articles = $articleRepository->findBy(['statut' => 'disponible']);
    
        // Récupérer tous les articles réservés
        $reservedArticles = $articleRepository->findBy(['statut' => 'reservé']);
    
        return $this->render('accueil/index.html.twig', [
            'articles' => $articles,
            'reserved_articles' => $reservedArticles,
        ]);
    }
}    

