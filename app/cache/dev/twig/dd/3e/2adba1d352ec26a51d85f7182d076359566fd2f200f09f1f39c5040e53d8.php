<?php

/* ::base.html.twig */
class __TwigTemplate_dd3e2adba1d352ec26a51d85f7182d076359566fd2f200f09f1f39c5040e53d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <h1><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("troiswa_test_news_liste");
        echo "\">irasshaimase</a></h1>
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashmessage"]) {
            // line 14
            echo "            <div class=\"flash-notice\">";
            echo twig_escape_filter($this->env, (isset($context["flashmessage"]) ? $context["flashmessage"] : $this->getContext($context, "flashmessage")), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashmessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  77 => 6,  71 => 5,  65 => 18,  62 => 17,  59 => 16,  50 => 14,  46 => 13,  42 => 12,  33 => 6,  23 => 1,  105 => 26,  102 => 25,  94 => 27,  92 => 17,  89 => 24,  83 => 22,  80 => 7,  75 => 19,  70 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 13,  53 => 12,  48 => 9,  39 => 5,  34 => 4,  31 => 3,  45 => 8,  41 => 7,  38 => 6,  35 => 9,  29 => 5,);
    }
}
