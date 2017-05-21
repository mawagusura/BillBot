<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_d13a8c99c764cd83ed15ad72c44d4469d81e463f9a81d343969ac9adcf4b9d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7f0fbdea29eba24e0c4430113fbb7c103eefa4b8a8c05837d02ead41898770b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f0fbdea29eba24e0c4430113fbb7c103eefa4b8a8c05837d02ead41898770b->enter($__internal_a7f0fbdea29eba24e0c4430113fbb7c103eefa4b8a8c05837d02ead41898770b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_855fed586eddc3a23cadb0c9196ec3af4731c308fcee35ded9b9fdb7be555ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855fed586eddc3a23cadb0c9196ec3af4731c308fcee35ded9b9fdb7be555ba4->enter($__internal_855fed586eddc3a23cadb0c9196ec3af4731c308fcee35ded9b9fdb7be555ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_a7f0fbdea29eba24e0c4430113fbb7c103eefa4b8a8c05837d02ead41898770b->leave($__internal_a7f0fbdea29eba24e0c4430113fbb7c103eefa4b8a8c05837d02ead41898770b_prof);

        
        $__internal_855fed586eddc3a23cadb0c9196ec3af4731c308fcee35ded9b9fdb7be555ba4->leave($__internal_855fed586eddc3a23cadb0c9196ec3af4731c308fcee35ded9b9fdb7be555ba4_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_746968ccb473893734826be5012a7a2338189c2fc7a1eb87981939b3438bbc88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746968ccb473893734826be5012a7a2338189c2fc7a1eb87981939b3438bbc88->enter($__internal_746968ccb473893734826be5012a7a2338189c2fc7a1eb87981939b3438bbc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_806223b0a855f2e82b4f79eddcf4382b15abbf1187e0154e80de4a1a261a6d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806223b0a855f2e82b4f79eddcf4382b15abbf1187e0154e80de4a1a261a6d0e->enter($__internal_806223b0a855f2e82b4f79eddcf4382b15abbf1187e0154e80de4a1a261a6d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_806223b0a855f2e82b4f79eddcf4382b15abbf1187e0154e80de4a1a261a6d0e->leave($__internal_806223b0a855f2e82b4f79eddcf4382b15abbf1187e0154e80de4a1a261a6d0e_prof);

        
        $__internal_746968ccb473893734826be5012a7a2338189c2fc7a1eb87981939b3438bbc88->leave($__internal_746968ccb473893734826be5012a7a2338189c2fc7a1eb87981939b3438bbc88_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_156ec0648183fe9f75c62117d73768acd9c0a6b10d6b54588ef49b72711f83a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156ec0648183fe9f75c62117d73768acd9c0a6b10d6b54588ef49b72711f83a8->enter($__internal_156ec0648183fe9f75c62117d73768acd9c0a6b10d6b54588ef49b72711f83a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5c7bf12f0ba02b11a709827e1fb8b001e5931b209ecccd18874ec37f2ed9fde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7bf12f0ba02b11a709827e1fb8b001e5931b209ecccd18874ec37f2ed9fde4->enter($__internal_5c7bf12f0ba02b11a709827e1fb8b001e5931b209ecccd18874ec37f2ed9fde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5c7bf12f0ba02b11a709827e1fb8b001e5931b209ecccd18874ec37f2ed9fde4->leave($__internal_5c7bf12f0ba02b11a709827e1fb8b001e5931b209ecccd18874ec37f2ed9fde4_prof);

        
        $__internal_156ec0648183fe9f75c62117d73768acd9c0a6b10d6b54588ef49b72711f83a8->leave($__internal_156ec0648183fe9f75c62117d73768acd9c0a6b10d6b54588ef49b72711f83a8_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0e3a5def11f72055f08bccea1ceb6e30fe2668b0884e9ba85e60ea7e34c3cb9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3a5def11f72055f08bccea1ceb6e30fe2668b0884e9ba85e60ea7e34c3cb9f->enter($__internal_0e3a5def11f72055f08bccea1ceb6e30fe2668b0884e9ba85e60ea7e34c3cb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_5a14a4ab95fa4687e55b107b37a2198e17695f3e535239e88d3e6d04bd16def4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a14a4ab95fa4687e55b107b37a2198e17695f3e535239e88d3e6d04bd16def4->enter($__internal_5a14a4ab95fa4687e55b107b37a2198e17695f3e535239e88d3e6d04bd16def4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_5a14a4ab95fa4687e55b107b37a2198e17695f3e535239e88d3e6d04bd16def4->leave($__internal_5a14a4ab95fa4687e55b107b37a2198e17695f3e535239e88d3e6d04bd16def4_prof);

        
        $__internal_0e3a5def11f72055f08bccea1ceb6e30fe2668b0884e9ba85e60ea7e34c3cb9f->leave($__internal_0e3a5def11f72055f08bccea1ceb6e30fe2668b0884e9ba85e60ea7e34c3cb9f_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9db31033c9c59dfbb7c7a29620f7b1e4bb47ff0b4a08140ade1454acf84d61d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db31033c9c59dfbb7c7a29620f7b1e4bb47ff0b4a08140ade1454acf84d61d3->enter($__internal_9db31033c9c59dfbb7c7a29620f7b1e4bb47ff0b4a08140ade1454acf84d61d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_05fc26a22d1f5b367495e6949469ecaf1294f3ea1f7cd1d057b3838731d14b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fc26a22d1f5b367495e6949469ecaf1294f3ea1f7cd1d057b3838731d14b42->enter($__internal_05fc26a22d1f5b367495e6949469ecaf1294f3ea1f7cd1d057b3838731d14b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_05fc26a22d1f5b367495e6949469ecaf1294f3ea1f7cd1d057b3838731d14b42->leave($__internal_05fc26a22d1f5b367495e6949469ecaf1294f3ea1f7cd1d057b3838731d14b42_prof);

        
        $__internal_9db31033c9c59dfbb7c7a29620f7b1e4bb47ff0b4a08140ade1454acf84d61d3->leave($__internal_9db31033c9c59dfbb7c7a29620f7b1e4bb47ff0b4a08140ade1454acf84d61d3_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_43fefea3d0951012aa21c45abc8ae8a43ac7aba100c941834009c17ea2969a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fefea3d0951012aa21c45abc8ae8a43ac7aba100c941834009c17ea2969a5d->enter($__internal_43fefea3d0951012aa21c45abc8ae8a43ac7aba100c941834009c17ea2969a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c4e4e0aa84891da463e169238863c070b1778448edaba86ddaedbf94b595f96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e4e0aa84891da463e169238863c070b1778448edaba86ddaedbf94b595f96f->enter($__internal_c4e4e0aa84891da463e169238863c070b1778448edaba86ddaedbf94b595f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c4e4e0aa84891da463e169238863c070b1778448edaba86ddaedbf94b595f96f->leave($__internal_c4e4e0aa84891da463e169238863c070b1778448edaba86ddaedbf94b595f96f_prof);

        
        $__internal_43fefea3d0951012aa21c45abc8ae8a43ac7aba100c941834009c17ea2969a5d->leave($__internal_43fefea3d0951012aa21c45abc8ae8a43ac7aba100c941834009c17ea2969a5d_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e270ad09c87c987c866012ceb4314793b39ea3f7c339323b2de737bc3e85703a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e270ad09c87c987c866012ceb4314793b39ea3f7c339323b2de737bc3e85703a->enter($__internal_e270ad09c87c987c866012ceb4314793b39ea3f7c339323b2de737bc3e85703a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9c9e646084ade1304cea92ad67608018ffca1ccabea94b142008a2864aee342a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9e646084ade1304cea92ad67608018ffca1ccabea94b142008a2864aee342a->enter($__internal_9c9e646084ade1304cea92ad67608018ffca1ccabea94b142008a2864aee342a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_9c9e646084ade1304cea92ad67608018ffca1ccabea94b142008a2864aee342a->leave($__internal_9c9e646084ade1304cea92ad67608018ffca1ccabea94b142008a2864aee342a_prof);

        
        $__internal_e270ad09c87c987c866012ceb4314793b39ea3f7c339323b2de737bc3e85703a->leave($__internal_e270ad09c87c987c866012ceb4314793b39ea3f7c339323b2de737bc3e85703a_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_caabc67b4769d3deac0af22e43342dd91297f63af6a9ff24349011f1dcc6fe0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caabc67b4769d3deac0af22e43342dd91297f63af6a9ff24349011f1dcc6fe0d->enter($__internal_caabc67b4769d3deac0af22e43342dd91297f63af6a9ff24349011f1dcc6fe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_16a1085276e2974019ec55ac434715b3ea23081a23bbcad5dc546bb87e633968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a1085276e2974019ec55ac434715b3ea23081a23bbcad5dc546bb87e633968->enter($__internal_16a1085276e2974019ec55ac434715b3ea23081a23bbcad5dc546bb87e633968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_16a1085276e2974019ec55ac434715b3ea23081a23bbcad5dc546bb87e633968->leave($__internal_16a1085276e2974019ec55ac434715b3ea23081a23bbcad5dc546bb87e633968_prof);

        
        $__internal_caabc67b4769d3deac0af22e43342dd91297f63af6a9ff24349011f1dcc6fe0d->leave($__internal_caabc67b4769d3deac0af22e43342dd91297f63af6a9ff24349011f1dcc6fe0d_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0425629185d64d3725cb9cd8a535be6a67043bf16734e64a3c8f5b66015eddff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0425629185d64d3725cb9cd8a535be6a67043bf16734e64a3c8f5b66015eddff->enter($__internal_0425629185d64d3725cb9cd8a535be6a67043bf16734e64a3c8f5b66015eddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c0ec2d5f87a5010e2f964347346d805d6c14fb22efed7b7c27d59a3769a9f92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ec2d5f87a5010e2f964347346d805d6c14fb22efed7b7c27d59a3769a9f92b->enter($__internal_c0ec2d5f87a5010e2f964347346d805d6c14fb22efed7b7c27d59a3769a9f92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c0ec2d5f87a5010e2f964347346d805d6c14fb22efed7b7c27d59a3769a9f92b->leave($__internal_c0ec2d5f87a5010e2f964347346d805d6c14fb22efed7b7c27d59a3769a9f92b_prof);

        
        $__internal_0425629185d64d3725cb9cd8a535be6a67043bf16734e64a3c8f5b66015eddff->leave($__internal_0425629185d64d3725cb9cd8a535be6a67043bf16734e64a3c8f5b66015eddff_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_3ffa8d5bd40f814f3f9b1f9988242f36d4687f3b4283c3507283d27bc020d8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffa8d5bd40f814f3f9b1f9988242f36d4687f3b4283c3507283d27bc020d8c5->enter($__internal_3ffa8d5bd40f814f3f9b1f9988242f36d4687f3b4283c3507283d27bc020d8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_921383ec60a8ba1671cb39c8f74da56532ab30653befa4b43bdcf3c760562903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921383ec60a8ba1671cb39c8f74da56532ab30653befa4b43bdcf3c760562903->enter($__internal_921383ec60a8ba1671cb39c8f74da56532ab30653befa4b43bdcf3c760562903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_921383ec60a8ba1671cb39c8f74da56532ab30653befa4b43bdcf3c760562903->leave($__internal_921383ec60a8ba1671cb39c8f74da56532ab30653befa4b43bdcf3c760562903_prof);

        
        $__internal_3ffa8d5bd40f814f3f9b1f9988242f36d4687f3b4283c3507283d27bc020d8c5->leave($__internal_3ffa8d5bd40f814f3f9b1f9988242f36d4687f3b4283c3507283d27bc020d8c5_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3d547522e16856bdd4039441a80b1d09c32329ba8ec8cbd053ab1aa2ee3beaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d547522e16856bdd4039441a80b1d09c32329ba8ec8cbd053ab1aa2ee3beaf2->enter($__internal_3d547522e16856bdd4039441a80b1d09c32329ba8ec8cbd053ab1aa2ee3beaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_bd2b63a62cb383134d833a35f8ef9db7994a16378753d2b2f1b35293fea9a72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2b63a62cb383134d833a35f8ef9db7994a16378753d2b2f1b35293fea9a72e->enter($__internal_bd2b63a62cb383134d833a35f8ef9db7994a16378753d2b2f1b35293fea9a72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_bd2b63a62cb383134d833a35f8ef9db7994a16378753d2b2f1b35293fea9a72e->leave($__internal_bd2b63a62cb383134d833a35f8ef9db7994a16378753d2b2f1b35293fea9a72e_prof);

        
        $__internal_3d547522e16856bdd4039441a80b1d09c32329ba8ec8cbd053ab1aa2ee3beaf2->leave($__internal_3d547522e16856bdd4039441a80b1d09c32329ba8ec8cbd053ab1aa2ee3beaf2_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "D:\\GitHub\\BillBot\\billbot-projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
