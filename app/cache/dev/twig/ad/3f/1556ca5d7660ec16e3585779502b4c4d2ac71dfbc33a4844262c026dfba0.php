<?php

/* TroiswaTestBundle:News:get.html.twig */
class __TwigTemplate_ad3f1556ca5d7660ec16e3585779502b4c4d2ac71dfbc33a4844262c026dfba0 extends Twig_Template
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
        echo "TroiswaTestBundle:News";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"news\">
\t\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "titre"), "html", null, true);
        echo "</h2>
\t\t<p><em>Date : <span class=\"color_news\">";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "date"), "d/m/Y"), "html", null, true);
        echo "</span><br/>
\t\tAuteur : <span class=\"color_news\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "auteur"), "html", null, true);
        echo "</span><br/>
\t\tCatégorie : <span class=\"color_news\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "category"), "html", null, true);
        echo "</span></em></p>
\t\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "texte"), "html", null, true);
        echo "</p>
\t\t";
        // line 12
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_MODO"))) {
            // line 13
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_update", array("id" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"))), "html", null, true);
            echo "\">Modifier</a> 
\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_delete", array("id" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id"))), "html", null, true);
            echo "\">Supprimer</a>
\t\t";
        }
        // line 16
        echo "\t\t<h3>Commentaires</h3>
\t\t<ul>
\t\t\t<li>
\t\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "commentaires"));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 20
            echo "\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><em>Date : <span class=\"color_news\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "date"), "d/m/Y"), "html", null, true);
            echo "</span></em></p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><em>Auteur : <span class=\"color_news\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "auteur"), "html", null, true);
            echo "</span></em></p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><span class=\"color_news\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "texte"), "html", null, true);
            echo "</span></p>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</li>
\t\t</ul>
\t\t";
        // line 34
        if ((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) {
            // line 35
            echo "\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
\t\t";
        } else {
            // line 37
            echo "\t\t<p>Vous devez être connecté(e) pour poster un commentaire.</p>
\t\t";
        }
        // line 39
        echo "\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("troiswa_test_news_liste");
        echo "\">retour news</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle:News:get.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  120 => 37,  114 => 35,  112 => 34,  108 => 32,  98 => 28,  92 => 25,  86 => 22,  82 => 20,  78 => 19,  73 => 16,  68 => 14,  63 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
