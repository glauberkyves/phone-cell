<?php

namespace Super\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SuperUsuarioBundle:Default:index.html.twig', array('name' => $name));
    }
}
