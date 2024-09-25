<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VinylController extends AbstractController
{
 #[Route('/', name: 'vinyl-home')]
    public function homepage(): Response
    {
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'BlackPink',
        ]);
    }

    #[Route('/browse/{slug}', name: 'vinyl')]
    public function browse(string $slug): Response {

     return new Response('Genre:'. $slug);
    }
}