<?php

/* BillbotBundle:Billbot:about.html.twig */
class __TwigTemplate_4423bebcfd923eb74a863dd39efbf462355c3c3e725ebedba5d4a0b8a372a5cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BillbotBundle:Billbot:layout.html.twig", "BillbotBundle:Billbot:about.html.twig", 1);
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
        $__internal_06ec4ea269b652dc409026193231803224253fe79dd664e0d8afce26bd23b858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ec4ea269b652dc409026193231803224253fe79dd664e0d8afce26bd23b858->enter($__internal_06ec4ea269b652dc409026193231803224253fe79dd664e0d8afce26bd23b858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:about.html.twig"));

        $__internal_f9a489f9d21211ce0b6d78c27f10ce4bd093364522eea21ea665ba1920cfd441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a489f9d21211ce0b6d78c27f10ce4bd093364522eea21ea665ba1920cfd441->enter($__internal_f9a489f9d21211ce0b6d78c27f10ce4bd093364522eea21ea665ba1920cfd441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06ec4ea269b652dc409026193231803224253fe79dd664e0d8afce26bd23b858->leave($__internal_06ec4ea269b652dc409026193231803224253fe79dd664e0d8afce26bd23b858_prof);

        
        $__internal_f9a489f9d21211ce0b6d78c27f10ce4bd093364522eea21ea665ba1920cfd441->leave($__internal_f9a489f9d21211ce0b6d78c27f10ce4bd093364522eea21ea665ba1920cfd441_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b295f38680810535026ed874fee5b8b4f9f2accb9874704357ec0a8347ce58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b295f38680810535026ed874fee5b8b4f9f2accb9874704357ec0a8347ce58b->enter($__internal_0b295f38680810535026ed874fee5b8b4f9f2accb9874704357ec0a8347ce58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4f11376bee7ac9d931cee3e5d3882a6a88c9554e6ca37d50f34f4adb9025e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f11376bee7ac9d931cee3e5d3882a6a88c9554e6ca37d50f34f4adb9025e6b->enter($__internal_f4f11376bee7ac9d931cee3e5d3882a6a88c9554e6ca37d50f34f4adb9025e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - About ";
        
        $__internal_f4f11376bee7ac9d931cee3e5d3882a6a88c9554e6ca37d50f34f4adb9025e6b->leave($__internal_f4f11376bee7ac9d931cee3e5d3882a6a88c9554e6ca37d50f34f4adb9025e6b_prof);

        
        $__internal_0b295f38680810535026ed874fee5b8b4f9f2accb9874704357ec0a8347ce58b->leave($__internal_0b295f38680810535026ed874fee5b8b4f9f2accb9874704357ec0a8347ce58b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e194f0ac149330de468bf3838e1271e30c0676893e526a59056349f119f9117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e194f0ac149330de468bf3838e1271e30c0676893e526a59056349f119f9117->enter($__internal_0e194f0ac149330de468bf3838e1271e30c0676893e526a59056349f119f9117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b97faabe42f0c0dc11b7e5a9d3b3228c110f177a5aa939cd0eddacabceb6452e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97faabe42f0c0dc11b7e5a9d3b3228c110f177a5aa939cd0eddacabceb6452e->enter($__internal_b97faabe42f0c0dc11b7e5a9d3b3228c110f177a5aa939cd0eddacabceb6452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, ($context["cd"] ?? $this->getContext($context, "cd")), "html", null, true);
        echo "
";
        
        $__internal_b97faabe42f0c0dc11b7e5a9d3b3228c110f177a5aa939cd0eddacabceb6452e->leave($__internal_b97faabe42f0c0dc11b7e5a9d3b3228c110f177a5aa939cd0eddacabceb6452e_prof);

        
        $__internal_0e194f0ac149330de468bf3838e1271e30c0676893e526a59056349f119f9117->leave($__internal_0e194f0ac149330de468bf3838e1271e30c0676893e526a59056349f119f9117_prof);

    }

    public function getTemplateName()
    {
        return "BillbotBundle:Billbot:about.html.twig";
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

{% block title %}{{ parent() }} - About {% endblock %}

{% block body %}

{{cd}}
{% endblock %}
", "BillbotBundle:Billbot:about.html.twig", "D:\\GitHub\\BillBot\\billbot-projet\\src\\BillbotBundle/Resources/views/Billbot/about.html.twig");
    }
}
