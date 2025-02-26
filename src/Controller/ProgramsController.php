<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProgramsController extends AbstractController
{
    #[Route(path:'/programs', name: 'programs_index')]
    public function index(): Response
    {
        return $this->render('programs/index.html.twig', [
            'website' => 'Donkey Séries',
         ]);
    }
}