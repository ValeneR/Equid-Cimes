<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/blog', name: 'blog_')]

class ArticleController extends AbstractController
{
    #[Route('/index/{page}', requirements: ['page'=>'\d+'], name: 'index')]

    public function list(int $page = 1): Response
    {
        return $this->render('article/index.html.twig', [
            'page' => $page,
         ]);
    }

    /* #[Route('/show', name: 'article')]

    public function show(): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => 'article',
         ]);
    } */

    #[Route('/article/{id}', requirements: ['page'=>'\d+'], methods: ['GET'], name: 'article_{id}')]

    public function show(int $id): Response
    {
        return $this->render('article/show.html.twig', [
            'id' => $id,
        ]);
    }

    // Tu souhaites créer un nouvel article (affichage en GET et traitement du formulaire en POST).
    /* #[Route('/new', methods: ['GET', 'POST'], name: 'new')] */
        /* public function new(): Response
    { */
        // traitement d'un formulaire par exemple
    
        // redirection vers la page 'blog_show',
        // correspondant à l'url /blog/4
        /* return $this->redirectToRoute('blog_show', ['id' => 4]);
    } */

    // Tu souhaites afficher un article en fonction de son identifiant, cela se fera plutôt par un lien, donc en GET.
    /* #[Route('/{id}', methods: ['GET'], name: 'show')] */

    //Tu souhaites supprimer un article, tu pourrais limiter la méthode à DELETE uniquement.
    /* #[Route('/{id}', methods: ['DELETE'], name: 'delete')] */
}
