<?php

namespace Ingetis\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IngetisSiteBundle::layout.html.twig', array());
    }
    public  function adminAction()
    {
        return $this->render('IngetisSiteBundle::admin.html.twig', array());
    }
}
