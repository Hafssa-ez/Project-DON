<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Service\MongoDBService;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(
        MongoDBService $mongoDBService,
        ArticleRepository $articleRepository,
        CategorieRepository $categorieRepository
    ): Response {
       
        $mongoDBService->insertVisit('home');
        $articles = $articleRepository->findAll();
        $categories = $categorieRepository->findAll();
        $reservedArticles = $articleRepository->findBy([
            'statut' => 'reserve'
        ]);

        return $this->render('accueil/index.html.twig', [
            'articles'          => $articles,
            'categories'        => $categories,
            'reserved_articles' => $reservedArticles,
        ]);
    }
}
