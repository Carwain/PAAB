<?php

namespace Ingetis\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ingetis\NewsBundle\Form\ActualitesType;
use Ingetis\NewsBundle\Entity\Actualites;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('IngetisNewsBundle:Actualites')->findBy(
            array(),
            array('idActualite' => 'DESC'),
            10,
            0
        );
        return $this->render('IngetisNewsBundle:Default:index.html.twig',array('news' => $news));
    }
    public function NewsAction()
    {
        return $this->render('IngetisNewsBundle::news.html.twig',array());
    }
    public function ListIndexAction()
    {
        $news = $this->getDoctrine()->getManager();
        $news = $news->getRepository('IngetisNewsBundle:Actualites')->findBy(
            array(),
            array('idActualite' => 'DESC'),
            3,
            0
        );
        return $this->render('IngetisNewsBundle::news-panel.html.twig',array('news' => $news));
    }
}
