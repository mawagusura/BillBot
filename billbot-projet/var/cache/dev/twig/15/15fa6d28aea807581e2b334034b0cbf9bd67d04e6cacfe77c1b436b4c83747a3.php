<?php

/* BillbotBundle:Billbot:bandeau.html.twig */
class __TwigTemplate_a1a606e5eb88c988db4d2464dd29d7d5d86eba739e85485ede673b42449dbd58 extends Twig_Template
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
        $__internal_fae122eec33ce25faa154a045aa4ead881cbb71c169ebceadf45b6bacc40b1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae122eec33ce25faa154a045aa4ead881cbb71c169ebceadf45b6bacc40b1e1->enter($__internal_fae122eec33ce25faa154a045aa4ead881cbb71c169ebceadf45b6bacc40b1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:bandeau.html.twig"));

        $__internal_5afd2e421338b361afa9c47ed4f5bff619ab5acb135ef107574502c1c34d7729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afd2e421338b361afa9c47ed4f5bff619ab5acb135ef107574502c1c34d7729->enter($__internal_5afd2e421338b361afa9c47ed4f5bff619ab5acb135ef107574502c1c34d7729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:bandeau.html.twig"));

        // line 1
        echo "\t<div class=\"bandeau\">
\t\t
\t\t<!-- Affichage deux logo-->
    \t\t<a href=\"index.html.twig\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/public/images/billbot.png"), "html", null, true);
        echo "\" id=\"blogo\" alt=\"Logo Billbot\" /></a>
    \t\t<a href=\"billbot.html.twig\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/public/images/logouniv.jpg"), "html", null, true);
        echo "\" id=\"univlogo\" alt=\"Logo Billbot\" /></a>
\t\t
\t\t<!-- Nav + DropDown -->
\t\t<nav>
\t\t\t<a href=\"index.html.twig\" class=\"active\">  <i class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></i> Accueil</a>
\t\t\t<a href=\"projet.html.twig\">Projet Biilbot</a>
\t\t\t<a href=#>Qui sommes-nous ?</a>
\t\t</nav>
\t\t
\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Menu <span class=\"caret\"></span></button>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t<li><a href=\"index.html.twig\" class=\"active\">Accueil</a></li>
\t\t\t\t<li><a href=\"projet.html.twig\">Projet Biilbot</a></li>
\t\t\t\t<li><a href=#>Qui sommes-nous ?</a></li>
\t\t\t</ul>
\t\t</div> 

\t</div>";
        
        $__internal_fae122eec33ce25faa154a045aa4ead881cbb71c169ebceadf45b6bacc40b1e1->leave($__internal_fae122eec33ce25faa154a045aa4ead881cbb71c169ebceadf45b6bacc40b1e1_prof);

        
        $__internal_5afd2e421338b361afa9c47ed4f5bff619ab5acb135ef107574502c1c34d7729->leave($__internal_5afd2e421338b361afa9c47ed4f5bff619ab5acb135ef107574502c1c34d7729_prof);

    }

    public function getTemplateName()
    {
        return "BillbotBundle:Billbot:bandeau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t<div class=\"bandeau\">
\t\t
\t\t<!-- Affichage deux logo-->
    \t\t<a href=\"index.html.twig\"><img src=\"{{ asset('bundles/public/images/billbot.png') }}\" id=\"blogo\" alt=\"Logo Billbot\" /></a>
    \t\t<a href=\"billbot.html.twig\"><img src=\"{{ asset('bundles/public/images/logouniv.jpg') }}\" id=\"univlogo\" alt=\"Logo Billbot\" /></a>
\t\t
\t\t<!-- Nav + DropDown -->
\t\t<nav>
\t\t\t<a href=\"index.html.twig\" class=\"active\">  <i class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></i> Accueil</a>
\t\t\t<a href=\"projet.html.twig\">Projet Biilbot</a>
\t\t\t<a href=#>Qui sommes-nous ?</a>
\t\t</nav>
\t\t
\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Menu <span class=\"caret\"></span></button>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t<li><a href=\"index.html.twig\" class=\"active\">Accueil</a></li>
\t\t\t\t<li><a href=\"projet.html.twig\">Projet Biilbot</a></li>
\t\t\t\t<li><a href=#>Qui sommes-nous ?</a></li>
\t\t\t</ul>
\t\t</div> 

\t</div>", "BillbotBundle:Billbot:bandeau.html.twig", "C:\\xampp\\htdocs\\billbot-projet\\src\\BillbotBundle/Resources/views/Billbot/bandeau.html.twig");
    }
}
