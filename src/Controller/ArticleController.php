<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/blog', name: 'blog_index')]

class ArticleController extends AbstractController
{
    #[Route('/', name: 'blog')]

    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'blog' => 'blog',
         ]);
    }

    #[Route('/show', name: 'article')]

    public function show(): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => 'article',
         ]);
    }
}
