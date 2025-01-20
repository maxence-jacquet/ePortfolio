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

    #[Route('/administrer/maitriser_loi_fondamentale_electricite', name: 'app_administrer_loi_elect')]
    public function maitrise_loi_fondamentale_electrcite(): Response
    {
        return $this->render('portfolio/maitriser_loi_fondamentales_electricite.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/administrer/configurer_fonction_base_reseau_local', name: 'app_administrer_conf')]
    public function conf_fonction_base(): Response
    {
        return $this->render('portfolio/confi_fonction_base_reseau_local.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/administrer/maitrise_systeme_exploitation', name: 'app_administrer_systeme_exploitation')]
    public function systeme_exploitation(): Response
    {
        return $this->render('portfolio/systeme_exploitation.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/connecter/deployer_support_transmission', name: 'app_connecter_support_transmission')]
    public function support_transmission(): Response
    {
        return $this->render('portfolio/deployer_support_transmission.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/connecter/communication', name: 'app_connecter_communication')]
    public function communication(): Response
    {
        return $this->render('portfolio/comunication.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/programmer/utilisation_systeme_informatique&outil', name: 'app_programmer_systeme_info_outil')]
    public function systeme_info_outil(): Response
    {
        return $this->render('portfolio/utilisation_systeme_info_outils.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/programmer/architecture_web', name: 'app_programmer_archi_web')]
    public function archi_web(): Response
    {
        return $this->render('portfolio/archi_web.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    
    #[Route('/download-pdf/{filename}', name: 'download_pdf')]
    public function downloadPdf(string $filename): Response
    {
        $pdfPath = $this->getParameter('kernel.project_dir') . '/public/uploads/' . $filename;

        if (!file_exists($pdfPath)) {
            throw $this->createNotFoundException('Le fichier demandé est introuvable.');
        }

        return $this->file($pdfPath);
    }
}