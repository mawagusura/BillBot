<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d1b1366034bbb21ae068b63aa0980f98d48b3e9fa416a297295a0fdc77208685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e5600f2ae7c82c45912fb49aa653619961fe2cbae5a6e64a3f9ec6cf09541957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5600f2ae7c82c45912fb49aa653619961fe2cbae5a6e64a3f9ec6cf09541957->enter($__internal_e5600f2ae7c82c45912fb49aa653619961fe2cbae5a6e64a3f9ec6cf09541957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cbc77c87a56582c993b9a59f9ee52ae15609403983d64dc16213a0e5b7182e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc77c87a56582c993b9a59f9ee52ae15609403983d64dc16213a0e5b7182e4a->enter($__internal_cbc77c87a56582c993b9a59f9ee52ae15609403983d64dc16213a0e5b7182e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5600f2ae7c82c45912fb49aa653619961fe2cbae5a6e64a3f9ec6cf09541957->leave($__internal_e5600f2ae7c82c45912fb49aa653619961fe2cbae5a6e64a3f9ec6cf09541957_prof);

        
        $__internal_cbc77c87a56582c993b9a59f9ee52ae15609403983d64dc16213a0e5b7182e4a->leave($__internal_cbc77c87a56582c993b9a59f9ee52ae15609403983d64dc16213a0e5b7182e4a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3fcda1fa254cf2c648a428a8c162891436e96d4b2b1cbf952c36c8475b49253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3fcda1fa254cf2c648a428a8c162891436e96d4b2b1cbf952c36c8475b49253->enter($__internal_f3fcda1fa254cf2c648a428a8c162891436e96d4b2b1cbf952c36c8475b49253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_36467aca3324897ae392bfaa73ba6a021a622490208eae9d7bc2b5a55fc8d1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36467aca3324897ae392bfaa73ba6a021a622490208eae9d7bc2b5a55fc8d1d6->enter($__internal_36467aca3324897ae392bfaa73ba6a021a622490208eae9d7bc2b5a55fc8d1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36467aca3324897ae392bfaa73ba6a021a622490208eae9d7bc2b5a55fc8d1d6->leave($__internal_36467aca3324897ae392bfaa73ba6a021a622490208eae9d7bc2b5a55fc8d1d6_prof);

        
        $__internal_f3fcda1fa254cf2c648a428a8c162891436e96d4b2b1cbf952c36c8475b49253->leave($__internal_f3fcda1fa254cf2c648a428a8c162891436e96d4b2b1cbf952c36c8475b49253_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f98b7705356ef1751ec73e03cd053d9816276dc8c7bdedd16abb314c2663e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f98b7705356ef1751ec73e03cd053d9816276dc8c7bdedd16abb314c2663e37->enter($__internal_2f98b7705356ef1751ec73e03cd053d9816276dc8c7bdedd16abb314c2663e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_46e5286dac2b1ee17574d565feeeeec4b939904673bac8fc316ca944963a6c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e5286dac2b1ee17574d565feeeeec4b939904673bac8fc316ca944963a6c44->enter($__internal_46e5286dac2b1ee17574d565feeeeec4b939904673bac8fc316ca944963a6c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46e5286dac2b1ee17574d565feeeeec4b939904673bac8fc316ca944963a6c44->leave($__internal_46e5286dac2b1ee17574d565feeeeec4b939904673bac8fc316ca944963a6c44_prof);

        
        $__internal_2f98b7705356ef1751ec73e03cd053d9816276dc8c7bdedd16abb314c2663e37->leave($__internal_2f98b7705356ef1751ec73e03cd053d9816276dc8c7bdedd16abb314c2663e37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f8a6af53ee864104b6acf4c1d58f065ae57d86ed9efa5d2e6e7058ec1e53dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8a6af53ee864104b6acf4c1d58f065ae57d86ed9efa5d2e6e7058ec1e53dd8->enter($__internal_5f8a6af53ee864104b6acf4c1d58f065ae57d86ed9efa5d2e6e7058ec1e53dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_61ea3bd883b87424cb812c262338b11ed71a9252ea63ffc49dc6ea0e60e94ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ea3bd883b87424cb812c262338b11ed71a9252ea63ffc49dc6ea0e60e94ace->enter($__internal_61ea3bd883b87424cb812c262338b11ed71a9252ea63ffc49dc6ea0e60e94ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_61ea3bd883b87424cb812c262338b11ed71a9252ea63ffc49dc6ea0e60e94ace->leave($__internal_61ea3bd883b87424cb812c262338b11ed71a9252ea63ffc49dc6ea0e60e94ace_prof);

        
        $__internal_5f8a6af53ee864104b6acf4c1d58f065ae57d86ed9efa5d2e6e7058ec1e53dd8->leave($__internal_5f8a6af53ee864104b6acf4c1d58f065ae57d86ed9efa5d2e6e7058ec1e53dd8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\billbot-projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
