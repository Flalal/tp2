<?php



namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{
    /**
     *  @Route("/user", name="app_usercontroller_index")
     */
    public function index()
    {
        return $this->render('user.html.twig');
    }

}