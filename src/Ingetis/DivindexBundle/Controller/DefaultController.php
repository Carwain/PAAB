<?php

namespace Ingetis\DivindexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function divindexAction()
    {
        return $this->render('IngetisDivindexBundle::divindex.html.twig', array());
    }
}
