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
    <img alt=\"\" src=\"http://cdn1.iconfinder.com/data/icons/dellipack/48/people.png\" class=\"alignleft\">
    <h2>Ingetis si vous êtes</h2>
    <div class=\"clear\"></div>
    <ul class=\"menu_deco\">
        <li><a href=\"#\">Candidat</a></li>
        <li><a href=\"#\">Étudiant</a></li>
        <li><a href=\"#\">Entreprise</a></li>
        <li><a href=\"#\">Enseignant</a></li>
        <li><a href=\"#\">Ancien élève</a></li>
    </ul>
</div>
<div class=\"block\">
    <img alt=\"\" src=\"http://cdn1.iconfinder.com/data/icons/customicondesignoffice2/PNG/FAQ.png\" class=\"alignleft\">
    <a href=\"http://ingetis.com/23/pourquoi-ingetis\"><h2>Les Raisons de choisir Ingetis</h2></a>
    <div class=\"clear\"></div>
</div>
";
        // line 21
        $this->displayBlock('pages', $context, $blocks);
        // line 24
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

    // line 21
    public function block_pages($context, array $blocks = array())
    {
        // line 22
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
        return array (  20 => 1,  76 => 20,  74 => 19,  53 => 11,  34 => 14,  174 => 42,  155 => 108,  152 => 107,  150 => 105,  37 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 36,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 105,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 18,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 17,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 19,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 42,  46 => 26,  27 => 4,  40 => 8,  44 => 24,  35 => 5,  31 => 3,  43 => 8,  41 => 11,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 9,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 84,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 13,  66 => 12,  62 => 23,  49 => 10,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 99,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 43,  73 => 19,  64 => 17,  60 => 22,  57 => 21,  54 => 10,  51 => 14,  48 => 14,  45 => 8,  42 => 21,  39 => 7,  36 => 6,  33 => 4,  30 => 3,);
    }
}
