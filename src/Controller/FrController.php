<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
    /**
     * @Route("/fr")
     */
class FrController extends AbstractController
{

    /**
     * @Route("/", name="fr_home")
     */
    public function index(): Response
    {
        return $this->render('fr/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/project", name="fr_project")
     */
    public function project(): Response
    {
        return $this->render('fr/project.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/carrer", name="fr_carrer")
     */
    public function carrer(): Response
    {
        return $this->render('fr/carrer.html.twig', [
            'controller_name' => 'CarrerController',
        ]);
    }
}
