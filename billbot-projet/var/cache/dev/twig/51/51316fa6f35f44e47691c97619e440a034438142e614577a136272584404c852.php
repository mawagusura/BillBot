<?php

/* BillbotBundle:Billbot:index.html.twig */
class __TwigTemplate_c40d9486d40f299289c7a598047c5ca7b5c49bbbc41a88ea28835a8a86b60bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BillbotBundle:Billbot:layout.html.twig", "BillbotBundle:Billbot:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BillbotBundle:Billbot:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e58bf543416c8e12d2c1ba3e533c1b153b655d94a775c003920cd083252840ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58bf543416c8e12d2c1ba3e533c1b153b655d94a775c003920cd083252840ee->enter($__internal_e58bf543416c8e12d2c1ba3e533c1b153b655d94a775c003920cd083252840ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:index.html.twig"));

        $__internal_278e061d9a2f9300d5518d99b277824e1d1ddb9b30431b27f2e27085200a83ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278e061d9a2f9300d5518d99b277824e1d1ddb9b30431b27f2e27085200a83ce->enter($__internal_278e061d9a2f9300d5518d99b277824e1d1ddb9b30431b27f2e27085200a83ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e58bf543416c8e12d2c1ba3e533c1b153b655d94a775c003920cd083252840ee->leave($__internal_e58bf543416c8e12d2c1ba3e533c1b153b655d94a775c003920cd083252840ee_prof);

        
        $__internal_278e061d9a2f9300d5518d99b277824e1d1ddb9b30431b27f2e27085200a83ce->leave($__internal_278e061d9a2f9300d5518d99b277824e1d1ddb9b30431b27f2e27085200a83ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bdd612452e34c7144cb7497dde3826acc13425d7c92f58058f45a80a903a0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdd612452e34c7144cb7497dde3826acc13425d7c92f58058f45a80a903a0e3->enter($__internal_3bdd612452e34c7144cb7497dde3826acc13425d7c92f58058f45a80a903a0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c928b23913246103da6c1126cc100a1a81fc6a868966e6daaaa5f68f1ef4d909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c928b23913246103da6c1126cc100a1a81fc6a868966e6daaaa5f68f1ef4d909->enter($__internal_c928b23913246103da6c1126cc100a1a81fc6a868966e6daaaa5f68f1ef4d909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil ";
        
        $__internal_c928b23913246103da6c1126cc100a1a81fc6a868966e6daaaa5f68f1ef4d909->leave($__internal_c928b23913246103da6c1126cc100a1a81fc6a868966e6daaaa5f68f1ef4d909_prof);

        
        $__internal_3bdd612452e34c7144cb7497dde3826acc13425d7c92f58058f45a80a903a0e3->leave($__internal_3bdd612452e34c7144cb7497dde3826acc13425d7c92f58058f45a80a903a0e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35911c5f0ea9af7ed72b5c59a93ac0ad97034c0077a770f7a0dca4b3a332b526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35911c5f0ea9af7ed72b5c59a93ac0ad97034c0077a770f7a0dca4b3a332b526->enter($__internal_35911c5f0ea9af7ed72b5c59a93ac0ad97034c0077a770f7a0dca4b3a332b526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afa0974406a6b26f69cdcc36f1fbb4b17417ea5003d2e61f34be2770f2ac1e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa0974406a6b26f69cdcc36f1fbb4b17417ea5003d2e61f34be2770f2ac1e40->enter($__internal_afa0974406a6b26f69cdcc36f1fbb4b17417ea5003d2e61f34be2770f2ac1e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "BillbotBundle:Billbot:bandeau.html.twig");
        echo "

\t<div class=\"container\">
\t\t<div class=\"row justify-content-md-center\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1> Bienvenue sur le projet Billbot </h1>
\t\t\t\t<p>\tBillbot est un projet universitaire conçu par les étudiants 
\t\t\t\t\tdu DUT INFORMATIQUE Année Spéciale 2016-2017 de l'IUT ORSAY. <br/><br/>
\t\t\t\t\tMais au fait, que permet de faire Billbot ? 
\t\t\t\t\t<br/> C'est simple, donnez lui une image ou vidéo contenant des pièces de monnaies. Il se débrouillera pour detecter,reconnaitre,et suivre la/les pièce(s).<br/>
\t\t\t\t\tCurieux d'essayer ? <br/>
\t\t\t\t\tDémarrez l'expérience en cliquant ci-dessous:
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class= \"row justify-content-md-center\">
\t\t\t<span class=\"glyphicon glyphicon-arrow-down\"></span><br/>
\t\t\t<a class=\"btn btn-white btn-default\"  href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet");
        echo "\"> 
\t\t\t\tDécouvrir Billbot </a>
\t\t\t</div>

\t\t</div>
";
        
        $__internal_afa0974406a6b26f69cdcc36f1fbb4b17417ea5003d2e61f34be2770f2ac1e40->leave($__internal_afa0974406a6b26f69cdcc36f1fbb4b17417ea5003d2e61f34be2770f2ac1e40_prof);

        
        $__internal_35911c5f0ea9af7ed72b5c59a93ac0ad97034c0077a770f7a0dca4b3a332b526->leave($__internal_35911c5f0ea9af7ed72b5c59a93ac0ad97034c0077a770f7a0dca4b3a332b526_prof);

    }

    public function getTemplateName()
    {
        return "BillbotBundle:Billbot:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  72 => 7,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BillbotBundle:Billbot:layout.html.twig\" %}

{% block title %}{{ parent() }} - Accueil {% endblock %}

{% block body %}

{{ include(\"BillbotBundle:Billbot:bandeau.html.twig\") }}

\t<div class=\"container\">
\t\t<div class=\"row justify-content-md-center\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1> Bienvenue sur le projet Billbot </h1>
\t\t\t\t<p>\tBillbot est un projet universitaire conçu par les étudiants 
\t\t\t\t\tdu DUT INFORMATIQUE Année Spéciale 2016-2017 de l'IUT ORSAY. <br/><br/>
\t\t\t\t\tMais au fait, que permet de faire Billbot ? 
\t\t\t\t\t<br/> C'est simple, donnez lui une image ou vidéo contenant des pièces de monnaies. Il se débrouillera pour detecter,reconnaitre,et suivre la/les pièce(s).<br/>
\t\t\t\t\tCurieux d'essayer ? <br/>
\t\t\t\t\tDémarrez l'expérience en cliquant ci-dessous:
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t<div class= \"row justify-content-md-center\">
\t\t\t<span class=\"glyphicon glyphicon-arrow-down\"></span><br/>
\t\t\t<a class=\"btn btn-white btn-default\"  href=\"{{path('projet')}}\"> 
\t\t\t\tDécouvrir Billbot </a>
\t\t\t</div>

\t\t</div>
{% endblock %}
", "BillbotBundle:Billbot:index.html.twig", "C:\\xampp\\htdocs\\billbot-projet\\src\\BillbotBundle/Resources/views/Billbot/index.html.twig");
    }
}
