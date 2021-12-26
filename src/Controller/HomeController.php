<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @Route("/", methods={"GET"}, name="home.index")
    */ 
    
    

    public function index() : Response {
        return $this->render('home/index.html.twig', [
            'number' => 12,
        ]);
    }
}