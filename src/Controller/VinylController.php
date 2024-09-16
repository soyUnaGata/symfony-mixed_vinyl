<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VinylController
{
 #[Route('/', name: 'vinyl-home')]
    public function homepage(): Response
    {
        return new Response('Here');
    }

    #[Route('/browse/{slug}', name: 'vinyl')]
    public function browse(string $slug): Response {

     return new Response('Genre:'. $slug);
    }
}