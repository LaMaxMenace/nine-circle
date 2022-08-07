<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
#[Route('/', name: 'index', methods: ['GET', 'POST'])]
class IndexAction
{
    public function __invoke(): Response
    {
        return new Response('Ok', 200);
    }

}