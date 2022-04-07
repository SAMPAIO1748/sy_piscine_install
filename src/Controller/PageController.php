<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return new Response("Hello");
    }

    /**
     * @Route("/contact", name="contact")
     */
    public  function contact()
    {
        return new Response('Bonjour');
    }
}
