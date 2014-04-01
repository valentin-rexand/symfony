<?php

/* TroiswaTestBundle:News:usernews.html.twig */
class __TwigTemplate_d2958d90f2069c8360afc5d84d71c29ea6953d66014c0692e1c02b365596833e extends Twig_Template
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
        echo "TroiswaTestBundle:News:usernews";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</h2>
\t<div class=\"news_list news\">
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "news"));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 9
            echo "\t\t<h3><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_get", array("id" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "titre"), "html", null, true);
            echo "</a></h3>
\t\t<p><em>Date : <span class=\"color_news\">";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "date"), "d/m/Y"), "html", null, true);
            echo "</span><br/>
\t\tAuteur : <span class=\"color_news news_auteur\"><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_user_list", array("username" => $this->getAttribute($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "auteur"), "username"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "auteur"), "html", null, true);
            echo "</a></span><br/>
\t\tCatégorie : <span class=\"color_news\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "category"), "html", null, true);
            echo "</span></em></p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</div>
\t\t
\t<div class=\"news commentaires_list\">
\t\t<h3>Commentaires</h3>
\t\t<ul>
\t\t\t<li>
\t\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "commentaires"));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 21
            echo "\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><em>Date : <span class=\"color_news\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "date"), "d/m/Y"), "html", null, true);
            echo "</span></em></p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><em>Auteur : <span class=\"color_news comm_auteur\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_user_list", array("username" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "news"), "auteur"), "username"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "auteur"), "html", null, true);
            echo "</a></span></em></p>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<p><em>News : <span class=\"color_news\"><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_test_news_get", array("id" => $this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "news"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "news"), "titre"), "html", null, true);
            echo "</a></span></em></p>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t</li>
\t\t</ul>
\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("troiswa_test_news_liste");
        echo "\">retour news</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle:News:usernews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  115 => 33,  103 => 29,  95 => 26,  89 => 23,  85 => 21,  81 => 20,  73 => 14,  65 => 12,  59 => 11,  55 => 10,  48 => 9,  44 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
