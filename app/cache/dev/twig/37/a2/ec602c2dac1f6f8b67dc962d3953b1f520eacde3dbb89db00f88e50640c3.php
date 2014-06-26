<?php

/* IngetisColdroiteBundle::coldroite.html.twig */
class __TwigTemplate_37a2ec602c2dac1f6f8b67dc962d3953b1f520eacde3dbb89db00f88e50640c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pages' => array($this, 'block_pages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2 id=\"candidature\">
    <a href=\"#\">Déposez votre candidature</a>
</h2>
<div class=\"block\">
    <div class=\"panel-body\" id=\"panelcoldroite\">
        <ul class=\"media-list\">
            <div class=\"media\" id=\"mediacoldroite\">
                <div class=\"pull-left\">
                    <img alt=\"\" src=\"http://cdn1.iconfinder.com/data/icons/dellipack/48/people.png\" class=\"img-responsive\">
                </div>
                <div class=\"media-body\">
                    <h2>Ingetis si vous êtes</h2>
                </div>
            </div>
        </ul>
    </div>
    <ul class=\"menu_deco\">
        <li><a href=\"#\">Candidat</a></li>
        <li><a href=\"#\">Étudiant</a></li>
        <li><a href=\"#\">Entreprise</a></li>
        <li><a href=\"#\">Enseignant</a></li>
        <li><a href=\"#\">Ancien élève</a></li>
    </ul>
</div>
<div class=\"block\">
    <div class=\"panel-body\" id=\"panelcoldroite\">
        <div class=\"media-list\">
            <div class=\"media\" id=\"mediacoldroite\">
                <div class=\"pull-left\">
                    <img alt=\"\" src=\"http://cdn1.iconfinder.com/data/icons/customicondesignoffice2/PNG/FAQ.png\" class=\"img-responsive\">
                </div>
                <div class=\"media-body\">
                    <a href=\"http://ingetis.com/23/pourquoi-ingetis\"><h2>Les Raisons de choisir Ingetis</h2></a>
                </div>
            </div>
        </div>
    </div>


    <div class=\"clear\"></div>
</div>
";
        // line 42
        $this->displayBlock('pages', $context, $blocks);
        // line 45
        echo "<div class=\"block\" style=\"text-align:center;\">
    <a href=\"http://ingetis.com/demande-doc.php\">
        <img src=\"http://www.ingetis.com/images/site/boutton_etudiants.jpg\" alt=\"Etudiant\">
    </a>
</div>
<div class=\"block\" style=\"text-align:center;\">
    <a href=\"http://ingetis.com/contact-entreprises.php\">
        <img src=\"http://itis-formation.com/images/site/boutton_entreprise.jpg\" alt=\"Etudiant\" >
    </a>
</div>";
    }

    // line 42
    public function block_pages($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("IngetisPagesBundle:Default:pages"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "IngetisColdroiteBundle::coldroite.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 43,  78 => 42,  65 => 45,  63 => 42,  20 => 1,  46 => 26,  54 => 20,  39 => 11,  35 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }
}
