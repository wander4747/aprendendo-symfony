<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnotationRouteController
{
    /**
     * @return Response
     *
     * @Route("/annotation")
     */
    public function annotation() :Response
    {
        return new Response(
            '<html><body><h1>Route with annotation</h1></body></html>'
        );
    }

    #[Route('/attributes')]
    public function attributes() :Response
    {
        return new Response(
            '<html><body><h1>Route with attributes</h1></body></html>'
        );
    }
}