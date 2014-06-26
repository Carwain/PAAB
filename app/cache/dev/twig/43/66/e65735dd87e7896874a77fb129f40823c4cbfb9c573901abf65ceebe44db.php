<?php

/* IngetisAnnonceindexBundle::annonceindex.html.twig */
class __TwigTemplate_4366e65735dd87e7896874a77fb129f40823c4cbfb9c573901abf65ceebe44db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\" id=\"panelhead\">
        <h2>INGETIS</h2>
    </div>
    <div class=\"panel-body\" id=\"panelbody\">
        <p>Soyez Ambitieux,</p>
    </div>
    <div class=\"panel-body\" id=\"panelbody\">
        <p>Fort d’une dizaine d’années d’expérience dans la formation informatique, l’école Ingetis est devenue en 2013 un centre de préparation pour le titre de niveau I d’Expert en Système Informatique.</p>
    </div>
    <div class=\"panel-body\" id=\"panelbody\">
        <p>Intégrer Ingetis, c’est d’abord et avant tout faire le choix d’une formation à forte plus-value, professionnalisante, une formation tournée vers les métiers de l’ingénierie informatique, dans un secteur porteur et très dynamique.</p>
    </div>
    <div class=\"panel-body\" id=\"panelbody\">
        <a href=\"../29/presentation-ingetis\"><p>En savoir plus...</p></a>
    </div>
    <div class=\"panel-body\" id=\"panelbody\">
        <p>&nbsp;</p>
    </div>
    <div class=\"panel-body\" id=\"panelbody\">
        <img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://www.ingetis.com/images/media/nous-rencontrer-10.jpg\" alt=\"\" class=\"img-responsive\">
    </div>
    <div class=\"panel-body\">
        <div class=\"col-md-12\" id=\"col\">

            ";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisDivindexBundle:Default:divindex"));
        echo "

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "IngetisAnnonceindexBundle::annonceindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 26,  54 => 20,  39 => 11,  35 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }
}
