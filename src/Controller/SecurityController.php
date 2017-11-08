<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     *  @Route("/user/login", name="app_securitycontroller_login")
     */
    public function login(Request $request, AuthenticationUtils $authsUtils)
    {
        $error = $authsUtils->getLastAuthenticationError();
        $lastUsername = $authsUtils->getLastUsername();
        return $this->render('login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

}