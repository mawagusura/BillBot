<?php

/* BillbotBundle:Billbot:projet.html.twig */
class __TwigTemplate_a07d19ff9ff3476e0edb68261c88ed8449091738d76fa296f35cfdc58a490355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BillbotBundle:Billbot:layout.html.twig", "BillbotBundle:Billbot:projet.html.twig", 1);
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
        $__internal_e21b5245164d7025aa4ed54bd5386f172fd72248d7acae189df87114df08d0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21b5245164d7025aa4ed54bd5386f172fd72248d7acae189df87114df08d0eb->enter($__internal_e21b5245164d7025aa4ed54bd5386f172fd72248d7acae189df87114df08d0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:projet.html.twig"));

        $__internal_1946721121948c1086b2a441f8776cd357b302a27573b33769dd6740e9c96b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1946721121948c1086b2a441f8776cd357b302a27573b33769dd6740e9c96b5a->enter($__internal_1946721121948c1086b2a441f8776cd357b302a27573b33769dd6740e9c96b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e21b5245164d7025aa4ed54bd5386f172fd72248d7acae189df87114df08d0eb->leave($__internal_e21b5245164d7025aa4ed54bd5386f172fd72248d7acae189df87114df08d0eb_prof);

        
        $__internal_1946721121948c1086b2a441f8776cd357b302a27573b33769dd6740e9c96b5a->leave($__internal_1946721121948c1086b2a441f8776cd357b302a27573b33769dd6740e9c96b5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bad3bf0509678b94b6e08fc5ff2dc51c8d90e8d5974d9014de0adffb41d7563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bad3bf0509678b94b6e08fc5ff2dc51c8d90e8d5974d9014de0adffb41d7563->enter($__internal_1bad3bf0509678b94b6e08fc5ff2dc51c8d90e8d5974d9014de0adffb41d7563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ee9f6d26f96e7d897642189c00a346ffe01b75637bba91bcf565f997c5f2c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee9f6d26f96e7d897642189c00a346ffe01b75637bba91bcf565f997c5f2c30->enter($__internal_7ee9f6d26f96e7d897642189c00a346ffe01b75637bba91bcf565f997c5f2c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil ";
        
        $__internal_7ee9f6d26f96e7d897642189c00a346ffe01b75637bba91bcf565f997c5f2c30->leave($__internal_7ee9f6d26f96e7d897642189c00a346ffe01b75637bba91bcf565f997c5f2c30_prof);

        
        $__internal_1bad3bf0509678b94b6e08fc5ff2dc51c8d90e8d5974d9014de0adffb41d7563->leave($__internal_1bad3bf0509678b94b6e08fc5ff2dc51c8d90e8d5974d9014de0adffb41d7563_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de9539e1c13649bcdcbf68a9d2fb9db39b9e33d83c994db4fa9e8d0851a413d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9539e1c13649bcdcbf68a9d2fb9db39b9e33d83c994db4fa9e8d0851a413d4->enter($__internal_de9539e1c13649bcdcbf68a9d2fb9db39b9e33d83c994db4fa9e8d0851a413d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1524f9105a63c7cf80950443d052b3d7bbcc2120dd50932a68385de92684e6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1524f9105a63c7cf80950443d052b3d7bbcc2120dd50932a68385de92684e6aa->enter($__internal_1524f9105a63c7cf80950443d052b3d7bbcc2120dd50932a68385de92684e6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "BillbotBundle:Billbot:bandeau.html.twig");
        echo "

<div class=\"container\">
\t<div class=\"row justify-content-md-center\">
\t\t<div class=\"col-12\">
\t\t\t<h1> Interface Billbot </h1>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_1524f9105a63c7cf80950443d052b3d7bbcc2120dd50932a68385de92684e6aa->leave($__internal_1524f9105a63c7cf80950443d052b3d7bbcc2120dd50932a68385de92684e6aa_prof);

        
        $__internal_de9539e1c13649bcdcbf68a9d2fb9db39b9e33d83c994db4fa9e8d0851a413d4->leave($__internal_de9539e1c13649bcdcbf68a9d2fb9db39b9e33d83c994db4fa9e8d0851a413d4_prof);

    }

    public function getTemplateName()
    {
        return "BillbotBundle:Billbot:projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
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

<div class=\"container\">
\t<div class=\"row justify-content-md-center\">
\t\t<div class=\"col-12\">
\t\t\t<h1> Interface Billbot </h1>
\t\t</div>
\t</div>
</div>
{% endblock %}", "BillbotBundle:Billbot:projet.html.twig", "C:\\xampp\\htdocs\\billbot-projet\\src\\BillbotBundle/Resources/views/Billbot/projet.html.twig");
    }
}
