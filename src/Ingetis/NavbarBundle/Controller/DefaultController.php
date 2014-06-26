<?php

namespace Ingetis\NavbarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function navbarAction()
    {
        return $this->render('IngetisNavbarBundle::navbar.html.twig', array());
    }
}
