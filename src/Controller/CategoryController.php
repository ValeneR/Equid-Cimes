<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use App\Repository\ArticleRepository;

#[Route('/blog', name: 'blog_')]

class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]

    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('category/index.html.twig', 
            ['categories' => $categories]
        );
    }
    
    #[Route('/{categoryName}', name: 'categorie')]

    public function show(CategoryRepository $categoryRepository, ArticleRepository $articleRepository, string $categoryName): Response
    {
        $category = $categoryRepository->findOneBy(['name' => $categoryName]);
        $articles = $articleRepository->findBy(['category' => $category],['id'=>'DESC'],3);

        if (!$category) {
            throw $this->createNotFoundException(
                'Aucune catégorie n\'a été trouvée.'
            );
        }

        return $this->render('category/show.html.twig', [
            'category' => $category,
            'articles' => $articles,
        ]);
    }
}
