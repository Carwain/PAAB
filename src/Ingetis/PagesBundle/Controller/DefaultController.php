<?php

namespace Ingetis\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function pagesAction()
    {
        $categories = $this->getDoctrine()->getManager();
        $categories = $categories->getRepository('IngetisPagesBundle:Categories')->findBy(
            array(),
            array('position' => 'ASC'),
            10,
            0
        );
        return $this->render('IngetisPagesBundle::pages.html.twig', array('categories' => $categories));
    }
}
