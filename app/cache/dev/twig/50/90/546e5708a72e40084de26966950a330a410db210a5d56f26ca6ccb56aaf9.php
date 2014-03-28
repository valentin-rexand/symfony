<?php

/* TroiswaTestBundle:User:get_user.html.twig */
class __TwigTemplate_5090546e5708a72e40084de26966950a330a410db210a5d56f26ca6ccb56aaf9 extends Twig_Template
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
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 2
            echo "<p>Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "</p>
<a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("troiswa_test_user_logout");
            echo "\">Déconnexion</a>
";
        } else {
            // line 5
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("troiswa_test_user_login");
            echo "\">Connexion</a>
";
        }
    }

    public function getTemplateName()
    {
        return "TroiswaTestBundle:User:get_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  21 => 2,  19 => 1,  87 => 16,  77 => 6,  71 => 5,  65 => 18,  62 => 17,  59 => 16,  50 => 14,  46 => 13,  42 => 12,  33 => 6,  23 => 1,  105 => 26,  102 => 25,  94 => 27,  92 => 17,  89 => 24,  83 => 22,  80 => 7,  75 => 19,  70 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 13,  53 => 12,  48 => 9,  39 => 5,  34 => 4,  31 => 5,  45 => 8,  41 => 7,  38 => 6,  35 => 9,  29 => 5,);
    }
}
