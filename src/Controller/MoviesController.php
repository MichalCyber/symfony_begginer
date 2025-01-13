<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use \App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Movie;

class MoviesController extends AbstractController
{

    private $em;
    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }
  


    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        $repository = $this->em->getRepository(Movie::class);
        $movie = $repository->findBy([],['id' => 'DESC']);

        dd($movie);

        return $this->render('movies/index.html.twig', [
            'controller_name' => 'Controler',
            //'movies' => $movie, // Posielame pole do šablóny
        ]);
        
    }
}
