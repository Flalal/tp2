<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{
    /**
     *  @Route("/admin", name="app_admincontroller_index")
     */
    public function index()
    {
        return new Response('Admin');
    }

}