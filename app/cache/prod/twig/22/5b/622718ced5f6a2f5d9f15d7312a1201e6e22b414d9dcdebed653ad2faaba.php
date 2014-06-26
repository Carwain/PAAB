<?php

/* IngetisSiteBundle::layout.html.twig */
class __TwigTemplate_225b622718ced5f6a2f5d9f15d7312a1201e6e22b414d9dcdebed653ad2faaba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>


</head>

<div class=\"container\" id=\"header\">
    <div class=\"container container-fixed-top\">
        <div class=\"row\">
            <div class=\"col-md-12 hidden-xs hid\">
                <div class=\"row\">
                    <div class=\"col-md-1\" id=\"logo\">
                        <img src=\"http://www.ingetis.com/images/site/logo.png\" alt=\"\">
                    </div><!-- end top-left -->
                    <div class=\"col-md-offset-1 col-md-8\" id=\"Titre\">
                        <h1>École d'ingénierie Informatique (Titre RNCP niveau I)</h1>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- end top-container -->
</div>

";
        // line 36
        $this->displayBlock('navbar', $context, $blocks);
        // line 37
        echo "
<div id=\"content\">

    <div class=\"container\">

        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
    </div>

</div>

<div class=\"footer\" id=\"footer1\">

        <div class=\"container\" id=\"footer2\">
            <div class=\"row\">
                <div class=\"col-md-4\">

                    <h2>Notre Brochure</h2>
                    <img src=\"http://www.ingetis.com/images/site/plaquette-ingetis.jpg\">


                </div>
                <div class=\"col-md-3\">

                    <h2>Vous êtes</h2>
                    <p>Candidat<br>
                    <p>Étudiant<br>
                    <p>Entreprise<br>
                    <p>Enseignant<br>
                    <p>Ancien élève<br>

                </div>
                <div class=\"col-md-offset-1 col-md-4\" id=\"sn\">

                    <h2>Contact</h2>
                    <p>01 60 79 18 81 </p>
                    <a href=\"mailto:contact@ingetis.com\"><p>contact@ingetis.com</p></a>
                    <p>128 allée des Champs Elysées <br>
                        91042 Evry Cedex</p>
                    <ul class=\"sn\">
                        <li>
                            <a href=\"http://www.twitter.com/ingetis\">
                                <span class=\"icon-img\" style=\"background-image:url(http://www.ingetis.com/images/site/twitter.png)\"></span>
                            </a>
                            <a href=\"http://www.facebook.com/ingetis\">
                                <span class=\"icon-img\" style=\"background-image:url(http://www.ingetis.com/images/site/facebook.png)\"></span>
                            </a>
                            <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("ingetis_index_homepage");
        echo "\">
                                <span class=\"icon-img\" style=\"background-image:url(http://www.ingetis.com/images/site/google.png)\"></span>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
</div>
<div class=\"footer2\" id=\"footer3\">
    <div class=\"container\" id=\"footer4\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("ingetis_index_homepage");
        echo "\"><h2>INGETIS.COM</h2></a>
            </div>
        </div>
    </div>
</div>

";
        // line 105
        $this->displayBlock('javascript', $context, $blocks);
        // line 107
        echo "<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</html>

";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Ingetis";
    }

    // line 36
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    // line 105
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "IngetisSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 42,  155 => 108,  152 => 107,  150 => 105,  37 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 36,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 105,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 37,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 42,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 8,  41 => 11,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 9,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 84,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 36,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 99,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 43,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 9,  30 => 7,);
    }
}
