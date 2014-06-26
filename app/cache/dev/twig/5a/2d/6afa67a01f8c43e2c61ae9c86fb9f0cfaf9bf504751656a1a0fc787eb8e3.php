<?php

/* IngetisDemandeDocBundle:Default:index.html.twig */
class __TwigTemplate_5a2d6afa67a01f8c43e2c61ae9c86fb9f0cfaf9bf504751656a1a0fc787eb8e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IngetisContentBundle::content.html.twig");

        $this->blocks = array(
            'colright' => array($this, 'block_colright'),
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
    public function block_colright($context, array $blocks = array())
    {
        // line 4
        echo "
    <h3>Demande de Documentation</h3>
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("ingetis_demande_doc_DDD");
        echo "\" method=\"post\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <input type=\"submit\">

    </form>



";
    }

    public function getTemplateName()
    {
        return "IngetisDemandeDocBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
