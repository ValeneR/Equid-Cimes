<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/prestations', name: 'prestations_')]

class PrestationsController extends AbstractController
{
    #[Route('/', name: 'index')]

    public function index(): Response
    {
        return $this->render('prestations/index.html.twig', [
            'prestations' => 'prestations',
         ]);
    }

    #[Route('/campement', name: 'campement')]

    public function campement(): Response
    {
        return $this->render('prestations/campement.html.twig', [
            'campement' => 'campement',
         ]);
    }

    #[Route('/ateliers', name: 'ateliers')]

    public function ateliers(): Response
    {
        return $this->render('prestations/ateliers.html.twig', [
            'ateliers' => 'ateliers',
         ]);
    }

    #[Route('/animations', name: 'animations')]

    public function animations(): Response
    {
        return $this->render('prestations/animations.html.twig', [
            'animations' => 'animations',
         ]);
    }

}
