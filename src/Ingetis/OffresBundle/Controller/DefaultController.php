<?php

namespace Ingetis\OffresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $offres = $this->getDoctrine()->getManager();
        $offres = $offres->getRepository('IngetisOffresBundle:OffresEmplois')->findBy(
            array(),
            array('idOffre' => 'DESC'),
            10,
            0
        );
        return $this->render('IngetisOffresBundle::index.html.twig',array('offres' => $offres));
    }
    public function offresAction()
    {
        $offres = $this->getDoctrine()->getManager();
        $offres = $offres->getRepository('IngetisOffresBundle:OffresEmplois')->findBy(
            array(),
            array('idOffre' => 'DESC'),
            3,
            0
        );
        return $this->render('IngetisOffresBundle::offres.html.twig',array('offres' => $offres));
    }
}
