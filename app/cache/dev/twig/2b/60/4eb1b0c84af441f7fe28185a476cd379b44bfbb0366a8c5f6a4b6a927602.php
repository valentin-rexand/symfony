<?php

/* TroiswaTestBundle:Default:accueil.html.twig */
class __TwigTemplate_2b604eb1b0c84af441f7fe28185a476cd379b44bfbb0366a8c5f6a4b6a927602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TroiswaTestBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1 class=\"title\">coucou</h1>
\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objets"]) ? $context["objets"] : $this->getContext($context, "objets")));
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 6
            echo "\t\t<p>id : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")), "id"), "html", null, true);
            echo "<br/>
\t\t   nom : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["obj"]) ? $context["obj"] : $this->getContext($context, "obj")), "nom"), "html", null, true);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
