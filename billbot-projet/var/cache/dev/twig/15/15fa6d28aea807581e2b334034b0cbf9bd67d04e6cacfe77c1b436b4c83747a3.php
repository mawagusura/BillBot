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
        $__internal_d822fcbe0de4e89047048bcb18c3c410966f898cfc73d3efc18fda5b6596be30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d822fcbe0de4e89047048bcb18c3c410966f898cfc73d3efc18fda5b6596be30->enter($__internal_d822fcbe0de4e89047048bcb18c3c410966f898cfc73d3efc18fda5b6596be30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:bandeau.html.twig"));

        $__internal_1d90a4746a57961eca89bd7aa1a3516bfee2101627dda7646266733b1f9cec4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d90a4746a57961eca89bd7aa1a3516bfee2101627dda7646266733b1f9cec4b->enter($__internal_1d90a4746a57961eca89bd7aa1a3516bfee2101627dda7646266733b1f9cec4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:bandeau.html.twig"));

        // line 1
        echo "\t<div class=\"bandeau\">

\t\t<!-- Affichage deux logo-->
    \t\t<a href=\"index.html.twig\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/public/images/billbot.png"), "html", null, true);
        echo "\" id=\"blogo\" alt=\"Logo Billbot\" /></a>
    \t\t<a href=\"billbot.html.twig\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/public/images/logouniv.jpg"), "html", null, true);
        echo "\" id=\"univlogo\" alt=\"Logo Billbot\" /></a>

\t\t<!-- Nav + DropDown -->
\t\t<nav>
\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"active\">  <i class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></i> Accueil</a>
\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet");
        echo "\">Projet Biilbot</a>
\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">Qui sommes-nous ?</a>
\t\t</nav>

\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Menu <span class=\"caret\"></span></button>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t<li><a href=\"index.html.twig\" class=\"active\">Accueil</a></li>
\t\t\t\t<li><a href=\"projet.html.twig\">Projet Biilbot</a></li>
\t\t\t\t<li><a href=#>Qui sommes-nous ?</a></li>
\t\t\t</ul>
\t\t</div>

\t</div>
";
        
        $__internal_d822fcbe0de4e89047048bcb18c3c410966f898cfc73d3efc18fda5b6596be30->leave($__internal_d822fcbe0de4e89047048bcb18c3c410966f898cfc73d3efc18fda5b6596be30_prof);

        
        $__internal_1d90a4746a57961eca89bd7aa1a3516bfee2101627dda7646266733b1f9cec4b->leave($__internal_1d90a4746a57961eca89bd7aa1a3516bfee2101627dda7646266733b1f9cec4b_prof);

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
        return array (  49 => 11,  45 => 10,  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
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

\t\t<!-- Affichage deux logo-->
    \t\t<a href=\"index.html.twig\"><img src=\"{{ asset('bundles/public/images/billbot.png') }}\" id=\"blogo\" alt=\"Logo Billbot\" /></a>
    \t\t<a href=\"billbot.html.twig\"><img src=\"{{ asset('bundles/public/images/logouniv.jpg') }}\" id=\"univlogo\" alt=\"Logo Billbot\" /></a>

\t\t<!-- Nav + DropDown -->
\t\t<nav>
\t\t\t<a href=\"{{ path('home') }}\" class=\"active\">  <i class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></i> Accueil</a>
\t\t\t<a href=\"{{ path('projet') }}\">Projet Biilbot</a>
\t\t\t<a href=\"{{ path('about') }}\">Qui sommes-nous ?</a>
\t\t</nav>

\t\t<div class=\"dropdown\">
\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Menu <span class=\"caret\"></span></button>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t<li><a href=\"index.html.twig\" class=\"active\">Accueil</a></li>
\t\t\t\t<li><a href=\"projet.html.twig\">Projet Biilbot</a></li>
\t\t\t\t<li><a href=#>Qui sommes-nous ?</a></li>
\t\t\t</ul>
\t\t</div>

\t</div>
", "BillbotBundle:Billbot:bandeau.html.twig", "D:\\GitHub\\BillBot\\billbot-projet\\src\\BillbotBundle/Resources/views/Billbot/bandeau.html.twig");
    }
}
