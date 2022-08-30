<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]

    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'website' => 'Equid\'Cîmes',
         ]);
    }

    #[Route('/association', name: 'association')]

    public function association(): Response
    {
        return $this->render('association/index.html.twig', [
            'association' => 'L\'association',
         ]);
    }
}
