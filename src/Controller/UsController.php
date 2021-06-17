<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/us")
     */
class UsController extends AbstractController
{
    /**
     * @Route("/", name="us_home")
     */
    public function index(): Response
    {
        return $this->render('us/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/project", name="project")
     */
    public function project(): Response
    {
        return $this->render('us/project.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    /**
     * @Route("/carrer", name="carrer")
     */
    public function carrer(): Response
    {
        return $this->render('us/carrer.html.twig', [
            'controller_name' => 'CarrerController',
        ]);
    }
}

