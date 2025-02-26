<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProgramController extends AbstractController
{
    #[Route('/program/', name: 'program_index')]
    public function index(): Response
    {
        return new Response(
            '<!doctype html><html lang="en"><title>Donkey Series</title><body>Donkey Series Index</body></html>'
        );
    }
}