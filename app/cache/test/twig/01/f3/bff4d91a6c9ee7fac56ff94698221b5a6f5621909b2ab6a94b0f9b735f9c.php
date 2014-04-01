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
        echo "\t<div class=\"news_list\">
\t\t<h2>Liste des news</h2>
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news_list"]) ? $context["news_list"] : $this->getContext($context, "news_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 9
            echo "\t\t<div class=\"news\">
\t\t\t<h3><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_get", array("id" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "titre"), "html", null, true);
            echo "</a></h3>
\t\t\t<p><em>date : <span class=\"color_news\">";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "date"), "d/m/Y"), "html", null, true);
            echo "</span><br/>
\t\t\tauteur : <span class=\"color_news\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "auteur"), "html", null, true);
            echo "</span></em></p>
\t\t\t<p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "texte"), "html", null, true);
            echo "</p>
\t\t\t";
            // line 14
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 15
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_update", array("id" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"))), "html", null, true);
                echo "\">modifier</a>
\t\t\t<a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_delete", array("id" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"))), "html", null, true);
                echo "\">supprimer</a>
\t\t\t";
            }
            // line 18
            echo "\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "\t<div class=\"news ajout\">
\t\t<a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("troiswa_test_create");
            echo "\">ajouter news</a>
\t</div>
\t";
        }
        // line 25
        echo "\t</div>
";
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
        return array (  98 => 25,  92 => 22,  89 => 21,  86 => 20,  79 => 18,  74 => 16,  69 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  49 => 10,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
