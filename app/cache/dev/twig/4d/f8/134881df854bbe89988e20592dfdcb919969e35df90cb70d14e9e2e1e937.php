<?php

/* TroiswaTestBundle:News:categories.html.twig */
class __TwigTemplate_4df8134881df854bbe89988e20592dfdcb919969e35df90cb70d14e9e2e1e937 extends Twig_Template
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
        echo "TroiswaTestBundle:News:categories";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category_list"]) ? $context["category_list"] : $this->getContext($context, "category_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 7
            echo "\t\t<div class=\"news\">
\t\t\t<p><em>catégorie : <span class=\"color_news\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "nom"), "html", null, true);
            echo "</span><br/>
\t\t\tdescription : <span class=\"color_news\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "description"), "html", null, true);
            echo "</span></em></p>
\t\t\t<p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "texte"), "html", null, true);
            echo "</p>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle:News:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  84 => 24,  70 => 15,  58 => 11,  81 => 28,  53 => 10,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 31,  67 => 14,  63 => 15,  77 => 33,  71 => 17,  65 => 18,  59 => 14,  23 => 1,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 17,  49 => 9,  38 => 6,  87 => 31,  31 => 5,  25 => 3,  94 => 28,  89 => 19,  85 => 38,  75 => 17,  68 => 13,  56 => 13,  21 => 2,  26 => 3,  28 => 3,  24 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 8,  44 => 12,  27 => 4,  79 => 18,  72 => 14,  69 => 25,  47 => 8,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 24,  66 => 24,  55 => 10,  52 => 21,  50 => 9,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 42,  103 => 32,  99 => 37,  95 => 28,  92 => 20,  86 => 28,  82 => 22,  80 => 16,  73 => 19,  64 => 12,  60 => 21,  57 => 11,  54 => 10,  51 => 9,  48 => 9,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 4,);
    }
}
