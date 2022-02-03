<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ServeurController extends AbstractController
{
    /**
     * @Route("/serveur", name="serveur")
     */
    public function index(): Response
    {
        return $this->render('serveur/index.html.twig', [
            'controller_name' => 'ServeurController',
        ]);
    }

    /**
     * @Route("/traitement", name="traitement")
     */
    public function traitement(Request $request): Response
    {
        $pseudo = $request -> request -> get("pseudo") ;
        $pass = $request -> request -> get("pass") ;
        $message="coucou";

    
        return $this->render('serveur/traitement.html.twig', [
            'controller_name' => $message,
            'pseudo' => $pseudo,
               
        ]);
    }
}
