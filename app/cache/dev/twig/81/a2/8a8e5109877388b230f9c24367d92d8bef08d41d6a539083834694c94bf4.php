<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_81a28a8e5109877388b230f9c24367d92d8bef08d41d6a539083834694c94bf4 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 4,  26 => 5,  87 => 20,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  64 => 12,  56 => 9,  50 => 8,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  62 => 23,  51 => 15,  98 => 40,  93 => 9,  88 => 6,  44 => 10,  32 => 12,  27 => 4,  22 => 2,  54 => 21,  40 => 8,  34 => 14,  19 => 1,  179 => 105,  174 => 42,  169 => 36,  163 => 70,  155 => 108,  152 => 107,  150 => 105,  141 => 99,  123 => 47,  80 => 19,  78 => 40,  41 => 9,  37 => 10,  23 => 1,  73 => 19,  69 => 25,  66 => 15,  55 => 13,  48 => 14,  39 => 6,  31 => 5,  76 => 20,  74 => 19,  71 => 37,  68 => 14,  61 => 13,  57 => 16,  53 => 11,  49 => 19,  46 => 7,  43 => 8,  36 => 7,  33 => 10,  30 => 3,);
    }
}
