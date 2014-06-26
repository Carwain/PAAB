<?php

namespace Ingetis\AnnonceindexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function AnnonceAction()
    {
        return $this->render('IngetisAnnonceindexBundle::annonceindex.html.twig', array());
    }
}
