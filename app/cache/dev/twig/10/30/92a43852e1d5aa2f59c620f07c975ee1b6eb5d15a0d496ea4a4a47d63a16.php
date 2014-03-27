<?php

/* TroiswaTestBundle:Category:liste.html.twig */
class __TwigTemplate_103092a43852e1d5aa2f59c620f07c975ee1b6eb5d15a0d496ea4a4a47d63a16 extends Twig_Template
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
        echo "TroiswaTestBundle:Category:liste";
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
\t\t\t<p><em>Catégorie : <span class=\"color_news\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "nom"), "html", null, true);
            echo "</span><br/>
\t\t\tDescription : <span class=\"color_news\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "description"), "html", null, true);
            echo "</span></em></p>
\t\t\t";
            // line 10
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 11
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_category_update", array("id" => $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "id"))), "html", null, true);
                echo "\">modifier</a>
\t\t\t<a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_category_delete", array("id" => $this->getAttribute((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "id"))), "html", null, true);
                echo "\">supprimer</a>
\t\t\t";
            }
            // line 14
            echo "\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "\t<div class=\"news ajout\">
\t\t<a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("troiswa_test_category_create");
            echo "\">ajouter une catégorie</a>
\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle:Category:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  76 => 17,  73 => 16,  66 => 14,  61 => 12,  56 => 11,  54 => 10,  50 => 9,  46 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
