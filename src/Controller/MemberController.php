<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/membres', name: 'membres_index')]

class MemberController extends AbstractController
{
    #[Route('/', name: 'membres')]

    public function index(): Response
    {
        return $this->render('member/index.html.twig', [
            'membres' => 'membres',
         ]);
    }

    #[Route('/alana', name: 'alana')]

    public function alana(): Response
    {
        return $this->render('member/alana.html.twig', [
            'alana' => 'alana',
         ]);
    }

    #[Route('/blanche', name: 'blanche')]

    public function blanche(): Response
    {
        return $this->render('member/blanche.html.twig', [
            'blanche' => 'blanche',
         ]);
    }

    #[Route('/guigues', name: 'guigues')]

    public function guigues(): Response
    {
        return $this->render('member/guigues.html.twig', [
            'guigues' => 'guigues',
         ]);
    }

    #[Route('/theobald', name: 'theobald')]

    public function theobald(): Response
    {
        return $this->render('member/theobald.html.twig', [
            'theobald' => 'theobald',
         ]);
    }
}
