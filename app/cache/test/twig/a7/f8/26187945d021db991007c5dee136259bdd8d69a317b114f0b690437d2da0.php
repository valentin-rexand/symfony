<?php

/* TroiswaTestBundle:Default:categories_sidebar.html.twig */
class __TwigTemplate_a7f826187945d021db991007c5dee136259bdd8d69a317b114f0b690437d2da0 extends Twig_Template
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
        echo "<ul>
\t<li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("troiswa_test_categories");
        echo "\">Catégories</a></li>
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category_list"]) ? $context["category_list"] : $this->getContext($context, "category_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom"), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle:Default:categories_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  22 => 2,  26 => 3,  21 => 2,  19 => 1,  87 => 16,  77 => 6,  71 => 5,  65 => 18,  62 => 17,  50 => 14,  33 => 6,  23 => 1,  105 => 26,  102 => 25,  94 => 27,  83 => 22,  80 => 7,  75 => 19,  70 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 13,  53 => 12,  48 => 9,  45 => 8,  39 => 5,  34 => 4,  31 => 5,  98 => 25,  92 => 17,  89 => 24,  86 => 20,  79 => 18,  74 => 16,  69 => 15,  67 => 14,  63 => 13,  59 => 16,  55 => 11,  49 => 10,  46 => 13,  42 => 12,  38 => 6,  35 => 9,  29 => 5,);
    }
}
