<?php

namespace Ingetis\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IngetisContentBundle::content.html.twig', array());
    }
}
