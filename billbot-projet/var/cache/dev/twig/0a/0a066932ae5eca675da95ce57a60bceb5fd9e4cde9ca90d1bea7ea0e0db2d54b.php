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
        $__internal_341f48b0434ada6b28834b6020ee3ede2d8af547390c8900aad7a4446cb8bdba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341f48b0434ada6b28834b6020ee3ede2d8af547390c8900aad7a4446cb8bdba->enter($__internal_341f48b0434ada6b28834b6020ee3ede2d8af547390c8900aad7a4446cb8bdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:projet.html.twig"));

        $__internal_e0c4ec3455f3bc1aea2d92df4571757d1673397b06c1cd3a08b0e2b05453cfd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c4ec3455f3bc1aea2d92df4571757d1673397b06c1cd3a08b0e2b05453cfd5->enter($__internal_e0c4ec3455f3bc1aea2d92df4571757d1673397b06c1cd3a08b0e2b05453cfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:projet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_341f48b0434ada6b28834b6020ee3ede2d8af547390c8900aad7a4446cb8bdba->leave($__internal_341f48b0434ada6b28834b6020ee3ede2d8af547390c8900aad7a4446cb8bdba_prof);

        
        $__internal_e0c4ec3455f3bc1aea2d92df4571757d1673397b06c1cd3a08b0e2b05453cfd5->leave($__internal_e0c4ec3455f3bc1aea2d92df4571757d1673397b06c1cd3a08b0e2b05453cfd5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65b219cbb5c9f7609cc2d4f20d6c71aba03d6b350cdcab41e8c2f8c803cbb33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b219cbb5c9f7609cc2d4f20d6c71aba03d6b350cdcab41e8c2f8c803cbb33e->enter($__internal_65b219cbb5c9f7609cc2d4f20d6c71aba03d6b350cdcab41e8c2f8c803cbb33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3242a12c0e3816d6d1ec4dd81752a77b8f3c15a0fc4e0a0136a7ecb163e7fb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3242a12c0e3816d6d1ec4dd81752a77b8f3c15a0fc4e0a0136a7ecb163e7fb34->enter($__internal_3242a12c0e3816d6d1ec4dd81752a77b8f3c15a0fc4e0a0136a7ecb163e7fb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Projet ";
        
        $__internal_3242a12c0e3816d6d1ec4dd81752a77b8f3c15a0fc4e0a0136a7ecb163e7fb34->leave($__internal_3242a12c0e3816d6d1ec4dd81752a77b8f3c15a0fc4e0a0136a7ecb163e7fb34_prof);

        
        $__internal_65b219cbb5c9f7609cc2d4f20d6c71aba03d6b350cdcab41e8c2f8c803cbb33e->leave($__internal_65b219cbb5c9f7609cc2d4f20d6c71aba03d6b350cdcab41e8c2f8c803cbb33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8731283b55095eb00c4696a7a3a7225f0f7f69ff1e0db95b62c98ca4ec6433e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8731283b55095eb00c4696a7a3a7225f0f7f69ff1e0db95b62c98ca4ec6433e->enter($__internal_b8731283b55095eb00c4696a7a3a7225f0f7f69ff1e0db95b62c98ca4ec6433e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2be4a0bcd787e0d062d6c9384861ff3394a0a85d411f8dbcfca588ffe4a679c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2be4a0bcd787e0d062d6c9384861ff3394a0a85d411f8dbcfca588ffe4a679c->enter($__internal_c2be4a0bcd787e0d062d6c9384861ff3394a0a85d411f8dbcfca588ffe4a679c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        echo twig_include($this->env, $context, "BillbotBundle:Billbot:bandeau.html.twig");
        echo "

  <div class=\"container\">
  \t<div class=\"row justify-content-md-center\">
  \t\t<div class=\"col-12\">
  \t\t\t<div class=\"well text-center\">
          <h1> Interface Billbot </h1>
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet"), "attr" => array("class" => "form-inline ")));
        echo "
                  ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                  <small id=\"fileHelp\" class=\"form-text text-muted\">Les formats autorisés sont png et jpg.</small>
                  <br>
                  <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
  \t\t</div>
  \t</div>
  </div>

";
        
        $__internal_c2be4a0bcd787e0d062d6c9384861ff3394a0a85d411f8dbcfca588ffe4a679c->leave($__internal_c2be4a0bcd787e0d062d6c9384861ff3394a0a85d411f8dbcfca588ffe4a679c_prof);

        
        $__internal_b8731283b55095eb00c4696a7a3a7225f0f7f69ff1e0db95b62c98ca4ec6433e->leave($__internal_b8731283b55095eb00c4696a7a3a7225f0f7f69ff1e0db95b62c98ca4ec6433e_prof);

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
        return array (  93 => 19,  86 => 15,  82 => 14,  72 => 7,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} - Projet {% endblock %}

{% block body %}

{{ include(\"BillbotBundle:Billbot:bandeau.html.twig\") }}

  <div class=\"container\">
  \t<div class=\"row justify-content-md-center\">
  \t\t<div class=\"col-12\">
  \t\t\t<div class=\"well text-center\">
          <h1> Interface Billbot </h1>
                {{ form_start(form, {'method': 'post', 'action': path('projet'), 'attr': {'class': 'form-inline '}}) }}
                  {{ form_widget(form) }}
                  <small id=\"fileHelp\" class=\"form-text text-muted\">Les formats autorisés sont png et jpg.</small>
                  <br>
                  <button type=\"submit\" class=\"btn btn-success\">Envoyer</button>
                {{ form_end(form) }}
        </div>
  \t\t</div>
  \t</div>
  </div>

{% endblock %}
", "BillbotBundle:Billbot:projet.html.twig", "D:\\GitHub\\BillBot\\billbot-projet\\src\\BillbotBundle/Resources/views/Billbot/projet.html.twig");
    }
}
