<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrelevementController extends AbstractController
{
    /**
     * @Route("/prelevement", name="app_prelevement")
     */
    public function index(): Response
    {
        return $this->render('prelevement/index.html.twig', [
            'controller_name' => 'PrelevementController',
        ]);
    }
}
