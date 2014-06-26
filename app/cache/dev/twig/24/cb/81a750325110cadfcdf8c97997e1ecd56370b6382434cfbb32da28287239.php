<?php

/* IngetisPagesBundle::pages.html.twig */
class __TwigTemplate_24cb81a750325110cadfcdf8c97997e1ecd56370b6382434cfbb32da28287239 extends Twig_Template
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
        echo "<div id=\"MenuPages\" class=\"panel panel-default\">
    <div class=\"panel-body\">
        <ul class=\"nav nav-pills nav-stacked\">
            ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 5
            echo "                <li>
                    <h2><a href=\"\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "titreCategorie"), "html", null, true);
            echo "</a></h2>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "IngetisPagesBundle::pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  28 => 5,  24 => 4,  81 => 43,  78 => 42,  65 => 45,  63 => 42,  20 => 1,  46 => 26,  54 => 20,  39 => 11,  35 => 10,  31 => 6,  27 => 7,  19 => 1,);
    }
}
