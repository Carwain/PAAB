<?php

namespace Ingetis\CarouselBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function carouselAction()
    {
        return $this->render('IngetisCarouselBundle::carousel.html.twig', array());
    }
}
