<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function HomePage(): Response
    {
        $starshipCount = 457;
        $myShip = [
            'name' => 'X-Wing',
            'class' => 'Starfighter',
            'captain' => 'Jean Luc Pickles',
            'status' => 'active',
        ];

        return $this->render('main/homepage.html.twig', ['numberOfStarships' => $starshipCount, 'myShip' => $myShip]);
    }
}
