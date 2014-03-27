<?php

/* TroiswaTestBundle:Role:liste.html.twig */
class __TwigTemplate_8dcbed88a28c49501bcbfbca5b95d26e75ed21a976c8e6606ddae02e29a33582 extends Twig_Template
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
        echo "TroiswaTestBundle:Role:liste";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"news\">
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
        foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
            // line 8
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")), "role"), "html", null, true);
            echo "</p><p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_role_update", array("id" => $this->getAttribute((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")), "id"))), "html", null, true);
            echo "\">Modifier</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_role_delete", array("id" => $this->getAttribute((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")), "id"))), "html", null, true);
            echo "\">Supprimer</a></p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t<p><a href=\"";
        echo $this->env->getExtension('routing')->getPath("troiswa_test_role_create");
        echo "\">Créer un role</a></p>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle:Role:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
