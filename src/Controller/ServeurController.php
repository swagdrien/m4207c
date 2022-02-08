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
        $pseudo = $request -> request -> get("login") ;
        $pass = $request -> request -> get("pass") ;
        if (($pseudo == 'admin')&&($pass =='admin')){
            $message="valide";
        }

    
        else {
        $message="ERREUR";
        }
        return $this->render('serveur/traitement.html.twig', [
        'message' => $message,
        'login' => $pseudo,
        'pass' => $pass,
        ]);
    }
} 

