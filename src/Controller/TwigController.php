<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwigController extends AbstractController
{

    /**
     * @return Response
     *
     * @Route("/message")
     */
    public function message() :Response
    {
        $name = "Fulano";
        return $this->render("home/index.html.twig", ['name' => $name]);
    }
}