<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends Controller
{
    /**
     *  @Route("/", name="app_homepagecontroller_index")
     */
    public function index()
    {
        //return new Response('Homepage');
        return $this->render('homepage.html.twig');
    }
}