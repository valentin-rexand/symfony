<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_5a3420ff89713d27e477f9a591c5f51fcebf4d3306d392e82d74d32133305598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Erreur";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"error\">
\t\t<p><span class=\"error\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " :</span> <span class=\"error_p\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message"), "html", null, true);
        echo "</span></p>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 31,  69 => 25,  62 => 23,  49 => 19,  38 => 6,  87 => 20,  66 => 24,  55 => 13,  31 => 4,  25 => 3,  101 => 39,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  50 => 8,  29 => 3,  21 => 2,  35 => 5,  26 => 3,  43 => 8,  41 => 7,  28 => 3,  24 => 4,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 11,  44 => 7,  40 => 7,  32 => 12,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 12,  60 => 13,  57 => 12,  54 => 21,  51 => 9,  48 => 9,  45 => 8,  42 => 6,  39 => 16,  36 => 7,  33 => 4,  30 => 3,);
    }
}
