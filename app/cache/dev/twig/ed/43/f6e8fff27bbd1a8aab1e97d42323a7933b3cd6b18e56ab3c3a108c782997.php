<?php

/* IngetisContentBundle::content.html.twig */
class __TwigTemplate_ed43f6e8fff27bbd1a8aab1e97d42323a7933b3cd6b18e56ab3c3a108c782997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IngetisSiteBundle::layout.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'colright' => array($this, 'block_colright'),
            'colleft' => array($this, 'block_colleft'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IngetisSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"row\">

        <div class=\"col-sm-8\">

            ";
        // line 12
        $this->displayBlock('colright', $context, $blocks);
        // line 14
        echo "
        </div>

        <div class=\"col-sm-4\">

            ";
        // line 19
        $this->displayBlock('colleft', $context, $blocks);
        // line 21
        echo "
        </div>

    </div>

";
    }

    // line 12
    public function block_colright($context, array $blocks = array())
    {
        // line 13
        echo "            ";
    }

    // line 19
    public function block_colleft($context, array $blocks = array())
    {
        // line 20
        echo "            ";
    }

    public function getTemplateName()
    {
        return "IngetisContentBundle::content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  69 => 13,  66 => 12,  55 => 19,  48 => 14,  39 => 7,  31 => 3,  76 => 20,  74 => 19,  71 => 18,  68 => 17,  61 => 13,  57 => 21,  53 => 11,  49 => 10,  46 => 12,  43 => 8,  36 => 6,  33 => 4,  30 => 3,);
    }
}
