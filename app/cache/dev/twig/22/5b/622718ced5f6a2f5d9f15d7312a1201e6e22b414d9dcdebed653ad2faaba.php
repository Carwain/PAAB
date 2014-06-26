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
        return array (  179 => 105,  174 => 42,  169 => 36,  163 => 9,  155 => 108,  152 => 107,  150 => 105,  141 => 99,  123 => 84,  80 => 43,  78 => 42,  41 => 11,  37 => 10,  23 => 1,  73 => 19,  69 => 36,  66 => 12,  55 => 19,  48 => 14,  39 => 7,  31 => 3,  76 => 20,  74 => 19,  71 => 37,  68 => 17,  61 => 13,  57 => 21,  53 => 11,  49 => 10,  46 => 12,  43 => 8,  36 => 6,  33 => 9,  30 => 3,);
    }
}
