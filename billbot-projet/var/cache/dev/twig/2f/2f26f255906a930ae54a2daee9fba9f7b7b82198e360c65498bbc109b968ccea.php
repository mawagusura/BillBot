<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bc986aaac5035fdb46e4469a7c26d94eb0a76c6d22643d6554e812fff43401b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14222b3005f61086aea3eed203c270b2dd64e82b280d2ba6b86ae6954da8139d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14222b3005f61086aea3eed203c270b2dd64e82b280d2ba6b86ae6954da8139d->enter($__internal_14222b3005f61086aea3eed203c270b2dd64e82b280d2ba6b86ae6954da8139d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cb719e89403e257080ab74788bbbc03e0ec61b7bbebb6cd809ceca7e3e76cb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb719e89403e257080ab74788bbbc03e0ec61b7bbebb6cd809ceca7e3e76cb51->enter($__internal_cb719e89403e257080ab74788bbbc03e0ec61b7bbebb6cd809ceca7e3e76cb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14222b3005f61086aea3eed203c270b2dd64e82b280d2ba6b86ae6954da8139d->leave($__internal_14222b3005f61086aea3eed203c270b2dd64e82b280d2ba6b86ae6954da8139d_prof);

        
        $__internal_cb719e89403e257080ab74788bbbc03e0ec61b7bbebb6cd809ceca7e3e76cb51->leave($__internal_cb719e89403e257080ab74788bbbc03e0ec61b7bbebb6cd809ceca7e3e76cb51_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_900f1aa86beaa85f0d38e4f2304135ede858fd2f7e083a053fe955130df7faf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900f1aa86beaa85f0d38e4f2304135ede858fd2f7e083a053fe955130df7faf9->enter($__internal_900f1aa86beaa85f0d38e4f2304135ede858fd2f7e083a053fe955130df7faf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d5fe246110e5baa420ea059b79477a65d7d709388ee9ffed9d480f4bd6aff75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5fe246110e5baa420ea059b79477a65d7d709388ee9ffed9d480f4bd6aff75->enter($__internal_0d5fe246110e5baa420ea059b79477a65d7d709388ee9ffed9d480f4bd6aff75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0d5fe246110e5baa420ea059b79477a65d7d709388ee9ffed9d480f4bd6aff75->leave($__internal_0d5fe246110e5baa420ea059b79477a65d7d709388ee9ffed9d480f4bd6aff75_prof);

        
        $__internal_900f1aa86beaa85f0d38e4f2304135ede858fd2f7e083a053fe955130df7faf9->leave($__internal_900f1aa86beaa85f0d38e4f2304135ede858fd2f7e083a053fe955130df7faf9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a4bccbea6b3907d6ced02ba89e88947d9fb9a927fd481307bf5980df43cc20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4bccbea6b3907d6ced02ba89e88947d9fb9a927fd481307bf5980df43cc20c->enter($__internal_6a4bccbea6b3907d6ced02ba89e88947d9fb9a927fd481307bf5980df43cc20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4ac9ee6277b6fb4d47222f27486bbf607af38c02de2d647896abd4628775baf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac9ee6277b6fb4d47222f27486bbf607af38c02de2d647896abd4628775baf8->enter($__internal_4ac9ee6277b6fb4d47222f27486bbf607af38c02de2d647896abd4628775baf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4ac9ee6277b6fb4d47222f27486bbf607af38c02de2d647896abd4628775baf8->leave($__internal_4ac9ee6277b6fb4d47222f27486bbf607af38c02de2d647896abd4628775baf8_prof);

        
        $__internal_6a4bccbea6b3907d6ced02ba89e88947d9fb9a927fd481307bf5980df43cc20c->leave($__internal_6a4bccbea6b3907d6ced02ba89e88947d9fb9a927fd481307bf5980df43cc20c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de7f292cf5bdbedccfdf0efd22e0230c4f5948e9bb33126c11d07ae07a6e0d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7f292cf5bdbedccfdf0efd22e0230c4f5948e9bb33126c11d07ae07a6e0d1f->enter($__internal_de7f292cf5bdbedccfdf0efd22e0230c4f5948e9bb33126c11d07ae07a6e0d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5cb561d2f4afebc750eed5ae4ed56ca85ca3477a3fd9e7d4e7b1c8377d58ac58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb561d2f4afebc750eed5ae4ed56ca85ca3477a3fd9e7d4e7b1c8377d58ac58->enter($__internal_5cb561d2f4afebc750eed5ae4ed56ca85ca3477a3fd9e7d4e7b1c8377d58ac58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5cb561d2f4afebc750eed5ae4ed56ca85ca3477a3fd9e7d4e7b1c8377d58ac58->leave($__internal_5cb561d2f4afebc750eed5ae4ed56ca85ca3477a3fd9e7d4e7b1c8377d58ac58_prof);

        
        $__internal_de7f292cf5bdbedccfdf0efd22e0230c4f5948e9bb33126c11d07ae07a6e0d1f->leave($__internal_de7f292cf5bdbedccfdf0efd22e0230c4f5948e9bb33126c11d07ae07a6e0d1f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\billbot-projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
