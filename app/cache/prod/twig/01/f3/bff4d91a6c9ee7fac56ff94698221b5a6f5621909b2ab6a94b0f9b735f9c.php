<?php

/* TroiswaTestBundle:News:liste.html.twig */
class __TwigTemplate_01f3bff4d91a6c9ee7fac56ff94698221b5a6f5621909b2ab6a94b0f9b735f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TroiswaTestBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TroiswaTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "TroiswaTestBundle:News:liste";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news_list"]) ? $context["news_list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 7
            echo "\t\t<div class=\"news\">
\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_get", array("id" => $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "id"))), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "titre"), "html", null, true);
            echo "</h2></a>
\t\t\t<p><em>date : <span class=\"color_news\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "date"), "d/m/Y"), "html", null, true);
            echo "</span><br/>
\t\t\tauteur : <span class=\"color_news\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "auteur"), "html", null, true);
            echo "</span></em></p>
\t\t\t<p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "texte"), "html", null, true);
            echo "</p>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle:News:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  53 => 10,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 17,  67 => 14,  59 => 14,  47 => 9,  70 => 15,  63 => 15,  23 => 1,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 23,  49 => 9,  38 => 6,  87 => 25,  66 => 24,  55 => 15,  31 => 3,  25 => 3,  101 => 32,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 14,  72 => 16,  68 => 14,  56 => 10,  50 => 10,  29 => 3,  21 => 2,  35 => 5,  26 => 6,  43 => 7,  41 => 7,  28 => 3,  24 => 3,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 8,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 11,  57 => 11,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 4,  30 => 7,);
    }
}
