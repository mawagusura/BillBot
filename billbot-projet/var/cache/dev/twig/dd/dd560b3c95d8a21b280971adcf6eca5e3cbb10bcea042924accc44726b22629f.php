<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_40cb991ea6b929a4456ff64bd8118ad6ebb4f831fd67f90ab4c0b9bfbab1864a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9ceda80e659e856603414ad4edfb3c1eb64ab63e4bb83d8ec8fc5001d357281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ceda80e659e856603414ad4edfb3c1eb64ab63e4bb83d8ec8fc5001d357281->enter($__internal_f9ceda80e659e856603414ad4edfb3c1eb64ab63e4bb83d8ec8fc5001d357281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c7a6f52f2a68c3f633ae783c696c161761eafb5372a6ebedbd99b27bdbdb9e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a6f52f2a68c3f633ae783c696c161761eafb5372a6ebedbd99b27bdbdb9e3a->enter($__internal_c7a6f52f2a68c3f633ae783c696c161761eafb5372a6ebedbd99b27bdbdb9e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_f9ceda80e659e856603414ad4edfb3c1eb64ab63e4bb83d8ec8fc5001d357281->leave($__internal_f9ceda80e659e856603414ad4edfb3c1eb64ab63e4bb83d8ec8fc5001d357281_prof);

        
        $__internal_c7a6f52f2a68c3f633ae783c696c161761eafb5372a6ebedbd99b27bdbdb9e3a->leave($__internal_c7a6f52f2a68c3f633ae783c696c161761eafb5372a6ebedbd99b27bdbdb9e3a_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_24f40235082af9ea7cd857d6bc486f53d56189e378f20f9d4ef433b5f519f6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f40235082af9ea7cd857d6bc486f53d56189e378f20f9d4ef433b5f519f6e7->enter($__internal_24f40235082af9ea7cd857d6bc486f53d56189e378f20f9d4ef433b5f519f6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2c23846f9de82676c1769889857cc1746f581f3d88fadb34641a60e5830b29a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c23846f9de82676c1769889857cc1746f581f3d88fadb34641a60e5830b29a8->enter($__internal_2c23846f9de82676c1769889857cc1746f581f3d88fadb34641a60e5830b29a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2c23846f9de82676c1769889857cc1746f581f3d88fadb34641a60e5830b29a8->leave($__internal_2c23846f9de82676c1769889857cc1746f581f3d88fadb34641a60e5830b29a8_prof);

        
        $__internal_24f40235082af9ea7cd857d6bc486f53d56189e378f20f9d4ef433b5f519f6e7->leave($__internal_24f40235082af9ea7cd857d6bc486f53d56189e378f20f9d4ef433b5f519f6e7_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f705fc20e2d3159264e1103ec343c64dfbfa87d3d58144a319dd3de9e66fdf7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f705fc20e2d3159264e1103ec343c64dfbfa87d3d58144a319dd3de9e66fdf7e->enter($__internal_f705fc20e2d3159264e1103ec343c64dfbfa87d3d58144a319dd3de9e66fdf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_10e32a993ec818cb47d105f3033570e1e7f0d33c055329a3a0ec9b8863f0a41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e32a993ec818cb47d105f3033570e1e7f0d33c055329a3a0ec9b8863f0a41d->enter($__internal_10e32a993ec818cb47d105f3033570e1e7f0d33c055329a3a0ec9b8863f0a41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_10e32a993ec818cb47d105f3033570e1e7f0d33c055329a3a0ec9b8863f0a41d->leave($__internal_10e32a993ec818cb47d105f3033570e1e7f0d33c055329a3a0ec9b8863f0a41d_prof);

        
        $__internal_f705fc20e2d3159264e1103ec343c64dfbfa87d3d58144a319dd3de9e66fdf7e->leave($__internal_f705fc20e2d3159264e1103ec343c64dfbfa87d3d58144a319dd3de9e66fdf7e_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_161b071d487109b07f2a353dfc2cdf2e967df508c9f43cc71b744af393548a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161b071d487109b07f2a353dfc2cdf2e967df508c9f43cc71b744af393548a4d->enter($__internal_161b071d487109b07f2a353dfc2cdf2e967df508c9f43cc71b744af393548a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f3dcddd044b3ed158ce7494aa89876ed0b6aae2943bf873f88d06ed2d00994c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dcddd044b3ed158ce7494aa89876ed0b6aae2943bf873f88d06ed2d00994c2->enter($__internal_f3dcddd044b3ed158ce7494aa89876ed0b6aae2943bf873f88d06ed2d00994c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f3dcddd044b3ed158ce7494aa89876ed0b6aae2943bf873f88d06ed2d00994c2->leave($__internal_f3dcddd044b3ed158ce7494aa89876ed0b6aae2943bf873f88d06ed2d00994c2_prof);

        
        $__internal_161b071d487109b07f2a353dfc2cdf2e967df508c9f43cc71b744af393548a4d->leave($__internal_161b071d487109b07f2a353dfc2cdf2e967df508c9f43cc71b744af393548a4d_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_aa734ce11dbe8256afd20bb3ca9efbd67475f556092c7e3224ab6a1d5443a729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa734ce11dbe8256afd20bb3ca9efbd67475f556092c7e3224ab6a1d5443a729->enter($__internal_aa734ce11dbe8256afd20bb3ca9efbd67475f556092c7e3224ab6a1d5443a729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9131640850179518a44d2857b16d4225dc9394c25e24756b7d19c8b06a48df45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9131640850179518a44d2857b16d4225dc9394c25e24756b7d19c8b06a48df45->enter($__internal_9131640850179518a44d2857b16d4225dc9394c25e24756b7d19c8b06a48df45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_adedf2f62553b4b59379f9688f5179e5ee3a60fb3e6542e471494cc89ff017d6 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_dd54c4bcbd548a8e71b3bdf9f363666cba1827b0674f42ba5390195017320f6a = "{{") && ('' === $__internal_dd54c4bcbd548a8e71b3bdf9f363666cba1827b0674f42ba5390195017320f6a || 0 === strpos($__internal_adedf2f62553b4b59379f9688f5179e5ee3a60fb3e6542e471494cc89ff017d6, $__internal_dd54c4bcbd548a8e71b3bdf9f363666cba1827b0674f42ba5390195017320f6a)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_9131640850179518a44d2857b16d4225dc9394c25e24756b7d19c8b06a48df45->leave($__internal_9131640850179518a44d2857b16d4225dc9394c25e24756b7d19c8b06a48df45_prof);

        
        $__internal_aa734ce11dbe8256afd20bb3ca9efbd67475f556092c7e3224ab6a1d5443a729->leave($__internal_aa734ce11dbe8256afd20bb3ca9efbd67475f556092c7e3224ab6a1d5443a729_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1f7b4b0b449527bdf00fccc8df1d9c761c49b829415d9d58ff2e968f07d9c165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7b4b0b449527bdf00fccc8df1d9c761c49b829415d9d58ff2e968f07d9c165->enter($__internal_1f7b4b0b449527bdf00fccc8df1d9c761c49b829415d9d58ff2e968f07d9c165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e76b1d1f47538f01d936aba40f76e2e264ada7bbebf501cafaff55b58d9dd2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76b1d1f47538f01d936aba40f76e2e264ada7bbebf501cafaff55b58d9dd2ee->enter($__internal_e76b1d1f47538f01d936aba40f76e2e264ada7bbebf501cafaff55b58d9dd2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_e76b1d1f47538f01d936aba40f76e2e264ada7bbebf501cafaff55b58d9dd2ee->leave($__internal_e76b1d1f47538f01d936aba40f76e2e264ada7bbebf501cafaff55b58d9dd2ee_prof);

        
        $__internal_1f7b4b0b449527bdf00fccc8df1d9c761c49b829415d9d58ff2e968f07d9c165->leave($__internal_1f7b4b0b449527bdf00fccc8df1d9c761c49b829415d9d58ff2e968f07d9c165_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f13ff621f37c6360e4197b4ed4f3a151cf07b1304c4070d862b7789afad4fa67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13ff621f37c6360e4197b4ed4f3a151cf07b1304c4070d862b7789afad4fa67->enter($__internal_f13ff621f37c6360e4197b4ed4f3a151cf07b1304c4070d862b7789afad4fa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8d0a9e7fd620ac1e3b11cce70dd6f49061a94b1b92b42b498b9975bae4c129cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0a9e7fd620ac1e3b11cce70dd6f49061a94b1b92b42b498b9975bae4c129cd->enter($__internal_8d0a9e7fd620ac1e3b11cce70dd6f49061a94b1b92b42b498b9975bae4c129cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_8d0a9e7fd620ac1e3b11cce70dd6f49061a94b1b92b42b498b9975bae4c129cd->leave($__internal_8d0a9e7fd620ac1e3b11cce70dd6f49061a94b1b92b42b498b9975bae4c129cd_prof);

        
        $__internal_f13ff621f37c6360e4197b4ed4f3a151cf07b1304c4070d862b7789afad4fa67->leave($__internal_f13ff621f37c6360e4197b4ed4f3a151cf07b1304c4070d862b7789afad4fa67_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_1d18e705b2be45cb9753ab060b199e5e86daf057ab5541d33dfe22ebc2c74a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d18e705b2be45cb9753ab060b199e5e86daf057ab5541d33dfe22ebc2c74a9d->enter($__internal_1d18e705b2be45cb9753ab060b199e5e86daf057ab5541d33dfe22ebc2c74a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_82daf4648806382b9730e5677e81302daeda0742f806609b5f336253e81d4d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82daf4648806382b9730e5677e81302daeda0742f806609b5f336253e81d4d43->enter($__internal_82daf4648806382b9730e5677e81302daeda0742f806609b5f336253e81d4d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_82daf4648806382b9730e5677e81302daeda0742f806609b5f336253e81d4d43->leave($__internal_82daf4648806382b9730e5677e81302daeda0742f806609b5f336253e81d4d43_prof);

        
        $__internal_1d18e705b2be45cb9753ab060b199e5e86daf057ab5541d33dfe22ebc2c74a9d->leave($__internal_1d18e705b2be45cb9753ab060b199e5e86daf057ab5541d33dfe22ebc2c74a9d_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b1d11bdce6d1cf16bd9fc217e45fa12c9387ef2c5593681ced934f83b6bc2992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d11bdce6d1cf16bd9fc217e45fa12c9387ef2c5593681ced934f83b6bc2992->enter($__internal_b1d11bdce6d1cf16bd9fc217e45fa12c9387ef2c5593681ced934f83b6bc2992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f0d613b601e9810fce7b9dba3b40a07f8c2a0ce8250a9e02a41b7591e83baa1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d613b601e9810fce7b9dba3b40a07f8c2a0ce8250a9e02a41b7591e83baa1e->enter($__internal_f0d613b601e9810fce7b9dba3b40a07f8c2a0ce8250a9e02a41b7591e83baa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_f0d613b601e9810fce7b9dba3b40a07f8c2a0ce8250a9e02a41b7591e83baa1e->leave($__internal_f0d613b601e9810fce7b9dba3b40a07f8c2a0ce8250a9e02a41b7591e83baa1e_prof);

        
        $__internal_b1d11bdce6d1cf16bd9fc217e45fa12c9387ef2c5593681ced934f83b6bc2992->leave($__internal_b1d11bdce6d1cf16bd9fc217e45fa12c9387ef2c5593681ced934f83b6bc2992_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_74921d6a6067a9c48b72d81227016561a41d02c13da1ade683917392bb408b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74921d6a6067a9c48b72d81227016561a41d02c13da1ade683917392bb408b3b->enter($__internal_74921d6a6067a9c48b72d81227016561a41d02c13da1ade683917392bb408b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_45443408836174eee617d2788e788bfed8e9b422d7cee740561ddb10006c1728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45443408836174eee617d2788e788bfed8e9b422d7cee740561ddb10006c1728->enter($__internal_45443408836174eee617d2788e788bfed8e9b422d7cee740561ddb10006c1728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_45443408836174eee617d2788e788bfed8e9b422d7cee740561ddb10006c1728->leave($__internal_45443408836174eee617d2788e788bfed8e9b422d7cee740561ddb10006c1728_prof);

        
        $__internal_74921d6a6067a9c48b72d81227016561a41d02c13da1ade683917392bb408b3b->leave($__internal_74921d6a6067a9c48b72d81227016561a41d02c13da1ade683917392bb408b3b_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_52240448bc1025fcd18df9ead4a53d0f10f9fec267d5ecd5c04dd450ec3f5630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52240448bc1025fcd18df9ead4a53d0f10f9fec267d5ecd5c04dd450ec3f5630->enter($__internal_52240448bc1025fcd18df9ead4a53d0f10f9fec267d5ecd5c04dd450ec3f5630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_19e53611255e3e5e930609cd48a56d7e2d5a9f241602ad01a233cf7f31c24dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e53611255e3e5e930609cd48a56d7e2d5a9f241602ad01a233cf7f31c24dff->enter($__internal_19e53611255e3e5e930609cd48a56d7e2d5a9f241602ad01a233cf7f31c24dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_19e53611255e3e5e930609cd48a56d7e2d5a9f241602ad01a233cf7f31c24dff->leave($__internal_19e53611255e3e5e930609cd48a56d7e2d5a9f241602ad01a233cf7f31c24dff_prof);

        
        $__internal_52240448bc1025fcd18df9ead4a53d0f10f9fec267d5ecd5c04dd450ec3f5630->leave($__internal_52240448bc1025fcd18df9ead4a53d0f10f9fec267d5ecd5c04dd450ec3f5630_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c7de2c623674c42c47d8dd921c797f9fdbad85e19063c28c907d6129f85b07da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7de2c623674c42c47d8dd921c797f9fdbad85e19063c28c907d6129f85b07da->enter($__internal_c7de2c623674c42c47d8dd921c797f9fdbad85e19063c28c907d6129f85b07da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_035934f994d0e26bd4020261d7f42a1dd4bf3ab312742c177b4deadf96eafdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035934f994d0e26bd4020261d7f42a1dd4bf3ab312742c177b4deadf96eafdde->enter($__internal_035934f994d0e26bd4020261d7f42a1dd4bf3ab312742c177b4deadf96eafdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_035934f994d0e26bd4020261d7f42a1dd4bf3ab312742c177b4deadf96eafdde->leave($__internal_035934f994d0e26bd4020261d7f42a1dd4bf3ab312742c177b4deadf96eafdde_prof);

        
        $__internal_c7de2c623674c42c47d8dd921c797f9fdbad85e19063c28c907d6129f85b07da->leave($__internal_c7de2c623674c42c47d8dd921c797f9fdbad85e19063c28c907d6129f85b07da_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8c1f25f3e6058f6344c01ec07db7dc5ba2e24df6d65e7d41209ae0454a611847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1f25f3e6058f6344c01ec07db7dc5ba2e24df6d65e7d41209ae0454a611847->enter($__internal_8c1f25f3e6058f6344c01ec07db7dc5ba2e24df6d65e7d41209ae0454a611847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5b5d7ead3d3ab38af2fc319d8d7befbee4c10ad3f13bb984e986010685b9fe23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5d7ead3d3ab38af2fc319d8d7befbee4c10ad3f13bb984e986010685b9fe23->enter($__internal_5b5d7ead3d3ab38af2fc319d8d7befbee4c10ad3f13bb984e986010685b9fe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_5b5d7ead3d3ab38af2fc319d8d7befbee4c10ad3f13bb984e986010685b9fe23->leave($__internal_5b5d7ead3d3ab38af2fc319d8d7befbee4c10ad3f13bb984e986010685b9fe23_prof);

        
        $__internal_8c1f25f3e6058f6344c01ec07db7dc5ba2e24df6d65e7d41209ae0454a611847->leave($__internal_8c1f25f3e6058f6344c01ec07db7dc5ba2e24df6d65e7d41209ae0454a611847_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_3e236dc6f3734cdf3f242a57fec0adf5ce036f6d69b2577b82839ee9248fc1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e236dc6f3734cdf3f242a57fec0adf5ce036f6d69b2577b82839ee9248fc1ab->enter($__internal_3e236dc6f3734cdf3f242a57fec0adf5ce036f6d69b2577b82839ee9248fc1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_608e52aa59bb4ae08ab5ee501ef842e409282564b9da1564f777f6cce9eea3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608e52aa59bb4ae08ab5ee501ef842e409282564b9da1564f777f6cce9eea3a9->enter($__internal_608e52aa59bb4ae08ab5ee501ef842e409282564b9da1564f777f6cce9eea3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_608e52aa59bb4ae08ab5ee501ef842e409282564b9da1564f777f6cce9eea3a9->leave($__internal_608e52aa59bb4ae08ab5ee501ef842e409282564b9da1564f777f6cce9eea3a9_prof);

        
        $__internal_3e236dc6f3734cdf3f242a57fec0adf5ce036f6d69b2577b82839ee9248fc1ab->leave($__internal_3e236dc6f3734cdf3f242a57fec0adf5ce036f6d69b2577b82839ee9248fc1ab_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_434911d3724bfe9407893e8d3f1142d4db589cd766921f85a7bd70e7e8074c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434911d3724bfe9407893e8d3f1142d4db589cd766921f85a7bd70e7e8074c7a->enter($__internal_434911d3724bfe9407893e8d3f1142d4db589cd766921f85a7bd70e7e8074c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5a890c14bfaae23e709037487f8b1cbf45028bce778ea4e3d28ac79bbef0c2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a890c14bfaae23e709037487f8b1cbf45028bce778ea4e3d28ac79bbef0c2f8->enter($__internal_5a890c14bfaae23e709037487f8b1cbf45028bce778ea4e3d28ac79bbef0c2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5a890c14bfaae23e709037487f8b1cbf45028bce778ea4e3d28ac79bbef0c2f8->leave($__internal_5a890c14bfaae23e709037487f8b1cbf45028bce778ea4e3d28ac79bbef0c2f8_prof);

        
        $__internal_434911d3724bfe9407893e8d3f1142d4db589cd766921f85a7bd70e7e8074c7a->leave($__internal_434911d3724bfe9407893e8d3f1142d4db589cd766921f85a7bd70e7e8074c7a_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_819ca6985017ec179298bd590e0710003eac48b48b0ec967107e3a92b438632c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819ca6985017ec179298bd590e0710003eac48b48b0ec967107e3a92b438632c->enter($__internal_819ca6985017ec179298bd590e0710003eac48b48b0ec967107e3a92b438632c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_400002fce7694ca0cfc66dbe54bee177ec1eb64ef1f244c9b2b839e1b23e1b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400002fce7694ca0cfc66dbe54bee177ec1eb64ef1f244c9b2b839e1b23e1b5a->enter($__internal_400002fce7694ca0cfc66dbe54bee177ec1eb64ef1f244c9b2b839e1b23e1b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_400002fce7694ca0cfc66dbe54bee177ec1eb64ef1f244c9b2b839e1b23e1b5a->leave($__internal_400002fce7694ca0cfc66dbe54bee177ec1eb64ef1f244c9b2b839e1b23e1b5a_prof);

        
        $__internal_819ca6985017ec179298bd590e0710003eac48b48b0ec967107e3a92b438632c->leave($__internal_819ca6985017ec179298bd590e0710003eac48b48b0ec967107e3a92b438632c_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4842cab4e1c3996d22786ccdec6c455e74088ffc9b01d30b3f7c6c65179d4a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4842cab4e1c3996d22786ccdec6c455e74088ffc9b01d30b3f7c6c65179d4a5c->enter($__internal_4842cab4e1c3996d22786ccdec6c455e74088ffc9b01d30b3f7c6c65179d4a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_60f4248416bbdacc95775facf37f545ed6e73e2cca0dccd6386f6b012d84ef24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f4248416bbdacc95775facf37f545ed6e73e2cca0dccd6386f6b012d84ef24->enter($__internal_60f4248416bbdacc95775facf37f545ed6e73e2cca0dccd6386f6b012d84ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_60f4248416bbdacc95775facf37f545ed6e73e2cca0dccd6386f6b012d84ef24->leave($__internal_60f4248416bbdacc95775facf37f545ed6e73e2cca0dccd6386f6b012d84ef24_prof);

        
        $__internal_4842cab4e1c3996d22786ccdec6c455e74088ffc9b01d30b3f7c6c65179d4a5c->leave($__internal_4842cab4e1c3996d22786ccdec6c455e74088ffc9b01d30b3f7c6c65179d4a5c_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_08780482fa5c0fd6f8615a11194cad71e538d399dea13af74bde74a173f3cc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08780482fa5c0fd6f8615a11194cad71e538d399dea13af74bde74a173f3cc42->enter($__internal_08780482fa5c0fd6f8615a11194cad71e538d399dea13af74bde74a173f3cc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_92f66ff5cd418bbf654634e57287fca32eda91acf1a6fe6daef5810abbc46f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f66ff5cd418bbf654634e57287fca32eda91acf1a6fe6daef5810abbc46f0e->enter($__internal_92f66ff5cd418bbf654634e57287fca32eda91acf1a6fe6daef5810abbc46f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_92f66ff5cd418bbf654634e57287fca32eda91acf1a6fe6daef5810abbc46f0e->leave($__internal_92f66ff5cd418bbf654634e57287fca32eda91acf1a6fe6daef5810abbc46f0e_prof);

        
        $__internal_08780482fa5c0fd6f8615a11194cad71e538d399dea13af74bde74a173f3cc42->leave($__internal_08780482fa5c0fd6f8615a11194cad71e538d399dea13af74bde74a173f3cc42_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1098b3d7481956659182f74f8dbc593fcbd8840d24a0aaddfdf959ddbf122ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1098b3d7481956659182f74f8dbc593fcbd8840d24a0aaddfdf959ddbf122ff4->enter($__internal_1098b3d7481956659182f74f8dbc593fcbd8840d24a0aaddfdf959ddbf122ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1dad754db72b1ea9e64a0e69a3e17f2738600301342be1c4ec959b58e5ad3a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dad754db72b1ea9e64a0e69a3e17f2738600301342be1c4ec959b58e5ad3a7b->enter($__internal_1dad754db72b1ea9e64a0e69a3e17f2738600301342be1c4ec959b58e5ad3a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 190
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 196
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 197
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_1dad754db72b1ea9e64a0e69a3e17f2738600301342be1c4ec959b58e5ad3a7b->leave($__internal_1dad754db72b1ea9e64a0e69a3e17f2738600301342be1c4ec959b58e5ad3a7b_prof);

        
        $__internal_1098b3d7481956659182f74f8dbc593fcbd8840d24a0aaddfdf959ddbf122ff4->leave($__internal_1098b3d7481956659182f74f8dbc593fcbd8840d24a0aaddfdf959ddbf122ff4_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3d30464087e26c38622403368d8a1cfe009037de99bdc909c79d979f1495dbe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d30464087e26c38622403368d8a1cfe009037de99bdc909c79d979f1495dbe4->enter($__internal_3d30464087e26c38622403368d8a1cfe009037de99bdc909c79d979f1495dbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_23850747929494f240ea796fbfbfc18e0b2e575a7630c79f2a806b4ee72f9cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23850747929494f240ea796fbfbfc18e0b2e575a7630c79f2a806b4ee72f9cac->enter($__internal_23850747929494f240ea796fbfbfc18e0b2e575a7630c79f2a806b4ee72f9cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_23850747929494f240ea796fbfbfc18e0b2e575a7630c79f2a806b4ee72f9cac->leave($__internal_23850747929494f240ea796fbfbfc18e0b2e575a7630c79f2a806b4ee72f9cac_prof);

        
        $__internal_3d30464087e26c38622403368d8a1cfe009037de99bdc909c79d979f1495dbe4->leave($__internal_3d30464087e26c38622403368d8a1cfe009037de99bdc909c79d979f1495dbe4_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_894e21f9e3f8f8e0324a870642b68a195e24478d486afdcb9bfb63bf82596978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894e21f9e3f8f8e0324a870642b68a195e24478d486afdcb9bfb63bf82596978->enter($__internal_894e21f9e3f8f8e0324a870642b68a195e24478d486afdcb9bfb63bf82596978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_3888d42327acd4f31a878068d8958e3283becb4573d24e4f15a4d7720dcfeb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3888d42327acd4f31a878068d8958e3283becb4573d24e4f15a4d7720dcfeb51->enter($__internal_3888d42327acd4f31a878068d8958e3283becb4573d24e4f15a4d7720dcfeb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_3888d42327acd4f31a878068d8958e3283becb4573d24e4f15a4d7720dcfeb51->leave($__internal_3888d42327acd4f31a878068d8958e3283becb4573d24e4f15a4d7720dcfeb51_prof);

        
        $__internal_894e21f9e3f8f8e0324a870642b68a195e24478d486afdcb9bfb63bf82596978->leave($__internal_894e21f9e3f8f8e0324a870642b68a195e24478d486afdcb9bfb63bf82596978_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_69cc5f701b3cbfa3adfd1fd1f86bb46affaba6de413a1b2bc259d8b8a309ed98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cc5f701b3cbfa3adfd1fd1f86bb46affaba6de413a1b2bc259d8b8a309ed98->enter($__internal_69cc5f701b3cbfa3adfd1fd1f86bb46affaba6de413a1b2bc259d8b8a309ed98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_3b7c59838200b3122bfc85df3297dec05e3fd1883a27ada137d8a9292fb03fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7c59838200b3122bfc85df3297dec05e3fd1883a27ada137d8a9292fb03fd9->enter($__internal_3b7c59838200b3122bfc85df3297dec05e3fd1883a27ada137d8a9292fb03fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3b7c59838200b3122bfc85df3297dec05e3fd1883a27ada137d8a9292fb03fd9->leave($__internal_3b7c59838200b3122bfc85df3297dec05e3fd1883a27ada137d8a9292fb03fd9_prof);

        
        $__internal_69cc5f701b3cbfa3adfd1fd1f86bb46affaba6de413a1b2bc259d8b8a309ed98->leave($__internal_69cc5f701b3cbfa3adfd1fd1f86bb46affaba6de413a1b2bc259d8b8a309ed98_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_19fa433349bf5c380121dbf6dee0ad9507f86bfb14b8216c1554c3c0e20ec883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19fa433349bf5c380121dbf6dee0ad9507f86bfb14b8216c1554c3c0e20ec883->enter($__internal_19fa433349bf5c380121dbf6dee0ad9507f86bfb14b8216c1554c3c0e20ec883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e4c895e7b4c34d15e4b94e363cb999d5d9d9d12cb28cbd97cafa224def326c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c895e7b4c34d15e4b94e363cb999d5d9d9d12cb28cbd97cafa224def326c70->enter($__internal_e4c895e7b4c34d15e4b94e363cb999d5d9d9d12cb28cbd97cafa224def326c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e4c895e7b4c34d15e4b94e363cb999d5d9d9d12cb28cbd97cafa224def326c70->leave($__internal_e4c895e7b4c34d15e4b94e363cb999d5d9d9d12cb28cbd97cafa224def326c70_prof);

        
        $__internal_19fa433349bf5c380121dbf6dee0ad9507f86bfb14b8216c1554c3c0e20ec883->leave($__internal_19fa433349bf5c380121dbf6dee0ad9507f86bfb14b8216c1554c3c0e20ec883_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_5022d4b56765d4ee671e0b9648ea7b3a74c755b9cb64d3216b1e63f8d1e351d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5022d4b56765d4ee671e0b9648ea7b3a74c755b9cb64d3216b1e63f8d1e351d7->enter($__internal_5022d4b56765d4ee671e0b9648ea7b3a74c755b9cb64d3216b1e63f8d1e351d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b16d19e2f0a5e120de1b68e6188b4f1e2f3de037af66695dd984903f20164509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16d19e2f0a5e120de1b68e6188b4f1e2f3de037af66695dd984903f20164509->enter($__internal_b16d19e2f0a5e120de1b68e6188b4f1e2f3de037af66695dd984903f20164509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b16d19e2f0a5e120de1b68e6188b4f1e2f3de037af66695dd984903f20164509->leave($__internal_b16d19e2f0a5e120de1b68e6188b4f1e2f3de037af66695dd984903f20164509_prof);

        
        $__internal_5022d4b56765d4ee671e0b9648ea7b3a74c755b9cb64d3216b1e63f8d1e351d7->leave($__internal_5022d4b56765d4ee671e0b9648ea7b3a74c755b9cb64d3216b1e63f8d1e351d7_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1bc1a26d2e39ee49707f658fb8608f9bcabea0511d73c37a8897bf810961b793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc1a26d2e39ee49707f658fb8608f9bcabea0511d73c37a8897bf810961b793->enter($__internal_1bc1a26d2e39ee49707f658fb8608f9bcabea0511d73c37a8897bf810961b793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e84ed75ff2476926dfb0887516c22833d20a541f6474a69c348b27b1c45bc7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84ed75ff2476926dfb0887516c22833d20a541f6474a69c348b27b1c45bc7df->enter($__internal_e84ed75ff2476926dfb0887516c22833d20a541f6474a69c348b27b1c45bc7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e84ed75ff2476926dfb0887516c22833d20a541f6474a69c348b27b1c45bc7df->leave($__internal_e84ed75ff2476926dfb0887516c22833d20a541f6474a69c348b27b1c45bc7df_prof);

        
        $__internal_1bc1a26d2e39ee49707f658fb8608f9bcabea0511d73c37a8897bf810961b793->leave($__internal_1bc1a26d2e39ee49707f658fb8608f9bcabea0511d73c37a8897bf810961b793_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2bbad5ebd5208fa26abac7cc83a87a05f58fd59f14204e40d309fc06ff5a7ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbad5ebd5208fa26abac7cc83a87a05f58fd59f14204e40d309fc06ff5a7ec5->enter($__internal_2bbad5ebd5208fa26abac7cc83a87a05f58fd59f14204e40d309fc06ff5a7ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_00b5e5db022e8ca457ae09c0aaf68751ae5c63a3bbb78e9f7bf387f3adf4ec44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b5e5db022e8ca457ae09c0aaf68751ae5c63a3bbb78e9f7bf387f3adf4ec44->enter($__internal_00b5e5db022e8ca457ae09c0aaf68751ae5c63a3bbb78e9f7bf387f3adf4ec44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_00b5e5db022e8ca457ae09c0aaf68751ae5c63a3bbb78e9f7bf387f3adf4ec44->leave($__internal_00b5e5db022e8ca457ae09c0aaf68751ae5c63a3bbb78e9f7bf387f3adf4ec44_prof);

        
        $__internal_2bbad5ebd5208fa26abac7cc83a87a05f58fd59f14204e40d309fc06ff5a7ec5->leave($__internal_2bbad5ebd5208fa26abac7cc83a87a05f58fd59f14204e40d309fc06ff5a7ec5_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8d0bc8959516c4d4e93bedf75f2f330c402e7716e94f7d6ba0edea387c5bc628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0bc8959516c4d4e93bedf75f2f330c402e7716e94f7d6ba0edea387c5bc628->enter($__internal_8d0bc8959516c4d4e93bedf75f2f330c402e7716e94f7d6ba0edea387c5bc628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7f6b3a21fc66ef1a80fe9e7d87c9fe89c09a0f87a93e1b88dd5945079790b805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6b3a21fc66ef1a80fe9e7d87c9fe89c09a0f87a93e1b88dd5945079790b805->enter($__internal_7f6b3a21fc66ef1a80fe9e7d87c9fe89c09a0f87a93e1b88dd5945079790b805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_7f6b3a21fc66ef1a80fe9e7d87c9fe89c09a0f87a93e1b88dd5945079790b805->leave($__internal_7f6b3a21fc66ef1a80fe9e7d87c9fe89c09a0f87a93e1b88dd5945079790b805_prof);

        
        $__internal_8d0bc8959516c4d4e93bedf75f2f330c402e7716e94f7d6ba0edea387c5bc628->leave($__internal_8d0bc8959516c4d4e93bedf75f2f330c402e7716e94f7d6ba0edea387c5bc628_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f02a01e736548375be46b04722bf25275e1e1d914a6d364493803657d4fe1704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02a01e736548375be46b04722bf25275e1e1d914a6d364493803657d4fe1704->enter($__internal_f02a01e736548375be46b04722bf25275e1e1d914a6d364493803657d4fe1704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_200d554886610a57bbc7b9175f06b1fdb75e89000497c38060d13590b46465b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200d554886610a57bbc7b9175f06b1fdb75e89000497c38060d13590b46465b1->enter($__internal_200d554886610a57bbc7b9175f06b1fdb75e89000497c38060d13590b46465b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_200d554886610a57bbc7b9175f06b1fdb75e89000497c38060d13590b46465b1->leave($__internal_200d554886610a57bbc7b9175f06b1fdb75e89000497c38060d13590b46465b1_prof);

        
        $__internal_f02a01e736548375be46b04722bf25275e1e1d914a6d364493803657d4fe1704->leave($__internal_f02a01e736548375be46b04722bf25275e1e1d914a6d364493803657d4fe1704_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "D:\\GitHub\\BillBot\\billbot-projet\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
