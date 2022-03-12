<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {
    
    /**
     * @Route("/test", name="test", methods={"GET", "POST"})
     */
    public function test(){

        return new Response("Bonjour, je perfectionne en Sf5 !");
    }
}