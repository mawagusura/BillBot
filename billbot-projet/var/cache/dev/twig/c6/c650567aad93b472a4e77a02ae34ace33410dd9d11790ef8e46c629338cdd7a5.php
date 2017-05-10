<?php

/* BillbotBundle:Billbot:layout.html.twig */
class __TwigTemplate_f287f6de11bda9fbd3b0c5d3be90d98be30d43b1e0bf09a885a7c7932d73564a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylessheets' => array($this, 'block_stylessheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7e1356d1d5bbb9d316f8abbad9b25e8f60f702004ebe11091e2049569eb65bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e1356d1d5bbb9d316f8abbad9b25e8f60f702004ebe11091e2049569eb65bb->enter($__internal_a7e1356d1d5bbb9d316f8abbad9b25e8f60f702004ebe11091e2049569eb65bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:layout.html.twig"));

        $__internal_f46f8b8bed50f36e1b672e6bc833f184e30f556a2dcd1035e33deac34106da27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46f8b8bed50f36e1b672e6bc833f184e30f556a2dcd1035e33deac34106da27->enter($__internal_f46f8b8bed50f36e1b672e6bc833f184e30f556a2dcd1035e33deac34106da27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BillbotBundle:Billbot:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 7
        $this->displayBlock('stylessheets', $context, $blocks);
        // line 11
        echo "</head>

<body>
\t
\t";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "

\t<!-- Script Bootsrap intégrer -->
\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "</body>

</html>\t";
        
        $__internal_a7e1356d1d5bbb9d316f8abbad9b25e8f60f702004ebe11091e2049569eb65bb->leave($__internal_a7e1356d1d5bbb9d316f8abbad9b25e8f60f702004ebe11091e2049569eb65bb_prof);

        
        $__internal_f46f8b8bed50f36e1b672e6bc833f184e30f556a2dcd1035e33deac34106da27->leave($__internal_f46f8b8bed50f36e1b672e6bc833f184e30f556a2dcd1035e33deac34106da27_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2491a0f6fc7b973ea911ee6eaae93ca36f1cc5a509bbcbbe9a7340b7be08ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2491a0f6fc7b973ea911ee6eaae93ca36f1cc5a509bbcbbe9a7340b7be08ee4->enter($__internal_c2491a0f6fc7b973ea911ee6eaae93ca36f1cc5a509bbcbbe9a7340b7be08ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92242eb08008210fc12a2623f44abadccf9808edf6ad459e934920ed801af013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92242eb08008210fc12a2623f44abadccf9808edf6ad459e934920ed801af013->enter($__internal_92242eb08008210fc12a2623f44abadccf9808edf6ad459e934920ed801af013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Billbot";
        
        $__internal_92242eb08008210fc12a2623f44abadccf9808edf6ad459e934920ed801af013->leave($__internal_92242eb08008210fc12a2623f44abadccf9808edf6ad459e934920ed801af013_prof);

        
        $__internal_c2491a0f6fc7b973ea911ee6eaae93ca36f1cc5a509bbcbbe9a7340b7be08ee4->leave($__internal_c2491a0f6fc7b973ea911ee6eaae93ca36f1cc5a509bbcbbe9a7340b7be08ee4_prof);

    }

    // line 7
    public function block_stylessheets($context, array $blocks = array())
    {
        $__internal_c0d8bc34596cd8c54abebff3f556590afc82bac9cb026d5c73e0a2a523ade4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d8bc34596cd8c54abebff3f556590afc82bac9cb026d5c73e0a2a523ade4c3->enter($__internal_c0d8bc34596cd8c54abebff3f556590afc82bac9cb026d5c73e0a2a523ade4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylessheets"));

        $__internal_066d91d154c70b474ead45bf7e461744d58e6a41e78db4b5e1efb3123feab310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066d91d154c70b474ead45bf7e461744d58e6a41e78db4b5e1efb3123feab310->enter($__internal_066d91d154c70b474ead45bf7e461744d58e6a41e78db4b5e1efb3123feab310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylessheets"));

        // line 8
        echo "\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\" type=\"text/css\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/public/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t";
        
        $__internal_066d91d154c70b474ead45bf7e461744d58e6a41e78db4b5e1efb3123feab310->leave($__internal_066d91d154c70b474ead45bf7e461744d58e6a41e78db4b5e1efb3123feab310_prof);

        
        $__internal_c0d8bc34596cd8c54abebff3f556590afc82bac9cb026d5c73e0a2a523ade4c3->leave($__internal_c0d8bc34596cd8c54abebff3f556590afc82bac9cb026d5c73e0a2a523ade4c3_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c50dca8413ad391e534033bb4910eef1d3053eb52d886a580b715af4a41ff70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50dca8413ad391e534033bb4910eef1d3053eb52d886a580b715af4a41ff70e->enter($__internal_c50dca8413ad391e534033bb4910eef1d3053eb52d886a580b715af4a41ff70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b97a972ac53bf18005bf5e1d92d36ec5b97a9a31a46fc3e200044bdc3adfc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b97a972ac53bf18005bf5e1d92d36ec5b97a9a31a46fc3e200044bdc3adfc4f->enter($__internal_6b97a972ac53bf18005bf5e1d92d36ec5b97a9a31a46fc3e200044bdc3adfc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
\t";
        
        $__internal_6b97a972ac53bf18005bf5e1d92d36ec5b97a9a31a46fc3e200044bdc3adfc4f->leave($__internal_6b97a972ac53bf18005bf5e1d92d36ec5b97a9a31a46fc3e200044bdc3adfc4f_prof);

        
        $__internal_c50dca8413ad391e534033bb4910eef1d3053eb52d886a580b715af4a41ff70e->leave($__internal_c50dca8413ad391e534033bb4910eef1d3053eb52d886a580b715af4a41ff70e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f17741b07f72ae22e433fa621fdda669048d160494fdeb305dcc7043a4868b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17741b07f72ae22e433fa621fdda669048d160494fdeb305dcc7043a4868b04->enter($__internal_f17741b07f72ae22e433fa621fdda669048d160494fdeb305dcc7043a4868b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_198bb010ac5262c18d3e90c11efdd453fa9dd5cf261155c5c10b77426a9081bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198bb010ac5262c18d3e90c11efdd453fa9dd5cf261155c5c10b77426a9081bc->enter($__internal_198bb010ac5262c18d3e90c11efdd453fa9dd5cf261155c5c10b77426a9081bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t<script src=\"http://code.jquery.com/jquery-2.1.1.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/public/js/perso.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_198bb010ac5262c18d3e90c11efdd453fa9dd5cf261155c5c10b77426a9081bc->leave($__internal_198bb010ac5262c18d3e90c11efdd453fa9dd5cf261155c5c10b77426a9081bc_prof);

        
        $__internal_f17741b07f72ae22e433fa621fdda669048d160494fdeb305dcc7043a4868b04->leave($__internal_f17741b07f72ae22e433fa621fdda669048d160494fdeb305dcc7043a4868b04_prof);

    }

    public function getTemplateName()
    {
        return "BillbotBundle:Billbot:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 24,  140 => 22,  131 => 21,  120 => 16,  111 => 15,  99 => 9,  96 => 8,  87 => 7,  69 => 6,  57 => 26,  55 => 21,  50 => 18,  48 => 15,  42 => 11,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>{% block title %}Billbot{% endblock %}</title>
\t{% block stylessheets %}
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\" type=\"text/css\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/public/css/main.css') }}\" type=\"text/css\"/>
\t{% endblock %}
</head>

<body>
\t
\t{% block body %}

\t{% endblock %}


\t<!-- Script Bootsrap intégrer -->
\t{% block javascripts %}
\t\t<script src=\"http://code.jquery.com/jquery-2.1.1.min.js\"></script>
\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"{{asset('bundles/public/js/perso.js')}}\"></script>
\t{% endblock %}
</body>

</html>\t", "BillbotBundle:Billbot:layout.html.twig", "C:\\xampp\\htdocs\\billbot-projet\\src\\BillbotBundle/Resources/views/Billbot/layout.html.twig");
    }
}
