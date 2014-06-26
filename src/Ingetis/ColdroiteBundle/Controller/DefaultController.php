<?php

namespace Ingetis\ColdroiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IngetisColdroiteBundle::coldroite.html.twig', array());
    }
}
