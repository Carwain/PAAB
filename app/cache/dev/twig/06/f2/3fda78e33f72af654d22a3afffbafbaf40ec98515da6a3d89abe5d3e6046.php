<?php

/* IngetisIndexBundle::index.html.twig */
class __TwigTemplate_06f23fda78e33f72af654d22a3afffbafbaf40ec98515da6a3d89abe5d3e6046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IngetisContentBundle::content.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'colright' => array($this, 'block_colright'),
            'colleft' => array($this, 'block_colleft'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IngetisContentBundle::content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisNavbarBundle:Default:navbar"));
        echo "

";
    }

    // line 8
    public function block_colright($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisCarouselBundle:Default:carousel"));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisNewsBundle:Default:news"));
        echo "
    ";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisOffresBundle:Default:Offres"));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisAnnonceindexBundle:Default:Annonce"));
        echo "

";
    }

    // line 17
    public function block_colleft($context, array $blocks = array())
    {
        // line 18
        echo "
    ";
        // line 19
        $this->env->loadTemplate("IngetisColdroiteBundle::coldroite.html.twig")->display($context);
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "IngetisIndexBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  74 => 19,  71 => 18,  68 => 17,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  46 => 9,  43 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
