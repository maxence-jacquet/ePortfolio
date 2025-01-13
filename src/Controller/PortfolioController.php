<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PortfolioController extends AbstractController
{

    #[Route('/accueil', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('portfolio/accueil.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/pour_en_savoir_plus', name: 'app_savoir_plus')]
    public function index(): Response
    {
        return $this->render('portfolio/savoir_plus.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('portfolio/cv.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/eportfolio', name: 'app_eportfolio')]
    public function eportfolio(): Response
    {
        return $this->render('portfolio/eportfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
