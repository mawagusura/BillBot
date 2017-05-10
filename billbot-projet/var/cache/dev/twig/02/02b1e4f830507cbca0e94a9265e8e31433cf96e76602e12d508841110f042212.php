<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cb27ba34ee8fad19bde9b64259d0471460b2571606f26e32a164c9b01153d2ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eba065b289dca9adc43d88b221f1625313c5a149f2d81622b1c63dded08b70af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba065b289dca9adc43d88b221f1625313c5a149f2d81622b1c63dded08b70af->enter($__internal_eba065b289dca9adc43d88b221f1625313c5a149f2d81622b1c63dded08b70af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e0c29f57cc4822f14c5ef8ff0b319215fcaf9bf17876c13ca8f0e32ec7ab0436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c29f57cc4822f14c5ef8ff0b319215fcaf9bf17876c13ca8f0e32ec7ab0436->enter($__internal_e0c29f57cc4822f14c5ef8ff0b319215fcaf9bf17876c13ca8f0e32ec7ab0436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eba065b289dca9adc43d88b221f1625313c5a149f2d81622b1c63dded08b70af->leave($__internal_eba065b289dca9adc43d88b221f1625313c5a149f2d81622b1c63dded08b70af_prof);

        
        $__internal_e0c29f57cc4822f14c5ef8ff0b319215fcaf9bf17876c13ca8f0e32ec7ab0436->leave($__internal_e0c29f57cc4822f14c5ef8ff0b319215fcaf9bf17876c13ca8f0e32ec7ab0436_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4233be0a005b53c71c61f806b99631f2af0ea9f70049d5937e5d2dfcc5fdaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4233be0a005b53c71c61f806b99631f2af0ea9f70049d5937e5d2dfcc5fdaee->enter($__internal_a4233be0a005b53c71c61f806b99631f2af0ea9f70049d5937e5d2dfcc5fdaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c5bfcb7a8a236a1746ba6a05d189762ec48d211bdecf6fc052a50f081e471658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bfcb7a8a236a1746ba6a05d189762ec48d211bdecf6fc052a50f081e471658->enter($__internal_c5bfcb7a8a236a1746ba6a05d189762ec48d211bdecf6fc052a50f081e471658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c5bfcb7a8a236a1746ba6a05d189762ec48d211bdecf6fc052a50f081e471658->leave($__internal_c5bfcb7a8a236a1746ba6a05d189762ec48d211bdecf6fc052a50f081e471658_prof);

        
        $__internal_a4233be0a005b53c71c61f806b99631f2af0ea9f70049d5937e5d2dfcc5fdaee->leave($__internal_a4233be0a005b53c71c61f806b99631f2af0ea9f70049d5937e5d2dfcc5fdaee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\billbot-projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
