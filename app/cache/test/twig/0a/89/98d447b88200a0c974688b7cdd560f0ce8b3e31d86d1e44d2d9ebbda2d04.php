<?php

/* TroiswaTestBundle::layout.html.twig */
class __TwigTemplate_0a8998d447b88200a0c974688b7cdd560f0ce8b3e31d86d1e44d2d9ebbda2d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/troiswatest/css/style.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "\tMon bundle
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "\t<div class=\"troiswatestbundle\">
\t\t<div class=\"sidebar\">
\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("troiswa_test_user_inscript");
        echo "\">Inscription</a>
\t\t\t";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TroiswaTestBundle:User:get_user"));
        echo "
\t\t";
        // line 17
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("troiswa_test_role_liste");
            echo "\">Roles</a>
\t\t\t<a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("troiswa_test_user_liste");
            echo "\">Users</a>
\t\t";
        }
        // line 21
        echo "\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 22
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("troiswa_test_user_get");
            echo "\">Mon compte</a>
\t\t";
        }
        // line 24
        echo "\t\t</div>
\t\t";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "\t\t<div class=\"sidebar\">";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TroiswaTestBundle:Default:categories_sidebar"));
        echo "</div>
\t</div>
";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  102 => 25,  94 => 27,  83 => 22,  80 => 21,  75 => 19,  70 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 13,  53 => 12,  48 => 9,  45 => 8,  39 => 5,  34 => 4,  31 => 3,  98 => 25,  92 => 25,  89 => 24,  86 => 20,  79 => 18,  74 => 16,  69 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  49 => 10,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
