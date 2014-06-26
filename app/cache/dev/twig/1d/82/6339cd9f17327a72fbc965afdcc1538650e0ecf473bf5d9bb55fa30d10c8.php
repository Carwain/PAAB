<?php

/* IngetisOffresBundle::offres.html.twig */
class __TwigTemplate_1d826339cd9f17327a72fbc965afdcc1538650e0ecf473bf5d9bb55fa30d10c8 extends Twig_Template
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
        <h2>Nos Offres d'Emploie en Alternance</h2>
    </div>
    <div class=\"panel-body\" id=\"panelbody\">
        <ul class=\"media-list\">
            ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 8
            echo "                  <li class=\"media\">
                      <div class=\"media-body\">
                          <h3 class=\"media-heading\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "titreOffre"), "html", null, true);
            echo "</h3>
                          <p>";
            // line 11
            echo twig_escape_filter($this->env, strip_tags(twig_slice($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "descriptionOffre"), 0, 150)), "html", null, true);
            echo "</p>
                          <div>
                              <a class=\"pull-right\" href=\"\">
                                  <small class=\"entry-title\">lire la suite...</small>
                              </a>
                          </div>
                      </div>
                  </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </ul>
        <h3>
            <a class=\"pull-right\" href=\"\">
                + Voir toutes nos offres ...
            </a>
        </h3>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "IngetisOffresBundle::offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  39 => 11,  35 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }
}
