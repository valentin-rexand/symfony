<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_e35b58877c91da5d0e78714ab7e9a9ed2093d837854b39ddd4fd1f83fbf4979d extends Twig_Template
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
        echo "        <traces>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : null)));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  87 => 20,  66 => 15,  55 => 13,  31 => 5,  25 => 4,  101 => 24,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  50 => 8,  29 => 4,  21 => 2,  35 => 7,  26 => 3,  43 => 6,  41 => 9,  28 => 3,  24 => 4,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 11,  44 => 10,  40 => 8,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 19,  73 => 19,  64 => 12,  60 => 13,  57 => 16,  54 => 11,  51 => 15,  48 => 9,  45 => 8,  42 => 14,  39 => 8,  36 => 7,  33 => 10,  30 => 3,);
    }
}
