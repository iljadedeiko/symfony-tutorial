<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', 'app_movies')]
    public function index(): Response
    {
        $movies = ["Avengers: Endgame", "Inception", "Eagle eye"];

        return $this->render('layouts/index.html.twig', array(
            'movies' => $movies
        ));
    }
}
