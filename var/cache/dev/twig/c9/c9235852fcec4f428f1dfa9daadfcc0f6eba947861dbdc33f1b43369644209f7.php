<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8a08249d36aa13586a73ff6ae6413144d033b358021c8141a5f28f4b29758404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7c63bc90312362aebd6275e1e822cfdbf40a5272ad3c9bc827e3684ed9f5935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c63bc90312362aebd6275e1e822cfdbf40a5272ad3c9bc827e3684ed9f5935->enter($__internal_c7c63bc90312362aebd6275e1e822cfdbf40a5272ad3c9bc827e3684ed9f5935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e3182ce72eb6852c8b5e4d45889592c95e10920a54f6dcd0e3f9fe2fa6565d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3182ce72eb6852c8b5e4d45889592c95e10920a54f6dcd0e3f9fe2fa6565d1c->enter($__internal_e3182ce72eb6852c8b5e4d45889592c95e10920a54f6dcd0e3f9fe2fa6565d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c63bc90312362aebd6275e1e822cfdbf40a5272ad3c9bc827e3684ed9f5935->leave($__internal_c7c63bc90312362aebd6275e1e822cfdbf40a5272ad3c9bc827e3684ed9f5935_prof);

        
        $__internal_e3182ce72eb6852c8b5e4d45889592c95e10920a54f6dcd0e3f9fe2fa6565d1c->leave($__internal_e3182ce72eb6852c8b5e4d45889592c95e10920a54f6dcd0e3f9fe2fa6565d1c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b072efc0aa97894082ca3519b5968fabd00d36ce2b649ae233718f2f2eff5d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b072efc0aa97894082ca3519b5968fabd00d36ce2b649ae233718f2f2eff5d83->enter($__internal_b072efc0aa97894082ca3519b5968fabd00d36ce2b649ae233718f2f2eff5d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d19f461088ee6a6fb38b8d1f8b2851bad3facbcd6d67f402da9e8db33d7dda9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19f461088ee6a6fb38b8d1f8b2851bad3facbcd6d67f402da9e8db33d7dda9c->enter($__internal_d19f461088ee6a6fb38b8d1f8b2851bad3facbcd6d67f402da9e8db33d7dda9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d19f461088ee6a6fb38b8d1f8b2851bad3facbcd6d67f402da9e8db33d7dda9c->leave($__internal_d19f461088ee6a6fb38b8d1f8b2851bad3facbcd6d67f402da9e8db33d7dda9c_prof);

        
        $__internal_b072efc0aa97894082ca3519b5968fabd00d36ce2b649ae233718f2f2eff5d83->leave($__internal_b072efc0aa97894082ca3519b5968fabd00d36ce2b649ae233718f2f2eff5d83_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_71c2638d7c01dd2b4be2d34c2dd5767f59ddaffc03f86c9e3d2ed340ff9dd07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c2638d7c01dd2b4be2d34c2dd5767f59ddaffc03f86c9e3d2ed340ff9dd07b->enter($__internal_71c2638d7c01dd2b4be2d34c2dd5767f59ddaffc03f86c9e3d2ed340ff9dd07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dd8c822d47fcd8cf502e005fbadafa8349337508f05751a1037e5d4dd0ca5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd8c822d47fcd8cf502e005fbadafa8349337508f05751a1037e5d4dd0ca5b8->enter($__internal_8dd8c822d47fcd8cf502e005fbadafa8349337508f05751a1037e5d4dd0ca5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8dd8c822d47fcd8cf502e005fbadafa8349337508f05751a1037e5d4dd0ca5b8->leave($__internal_8dd8c822d47fcd8cf502e005fbadafa8349337508f05751a1037e5d4dd0ca5b8_prof);

        
        $__internal_71c2638d7c01dd2b4be2d34c2dd5767f59ddaffc03f86c9e3d2ed340ff9dd07b->leave($__internal_71c2638d7c01dd2b4be2d34c2dd5767f59ddaffc03f86c9e3d2ed340ff9dd07b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfe8c05cac88cc70ae8284f5719d48cd43ef9bd9b571a22365b1e213496716d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe8c05cac88cc70ae8284f5719d48cd43ef9bd9b571a22365b1e213496716d3->enter($__internal_cfe8c05cac88cc70ae8284f5719d48cd43ef9bd9b571a22365b1e213496716d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb81afa95c8366e7e520bb3350f3d18438119ee821f0bb8b7a8a23019041e8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb81afa95c8366e7e520bb3350f3d18438119ee821f0bb8b7a8a23019041e8a4->enter($__internal_cb81afa95c8366e7e520bb3350f3d18438119ee821f0bb8b7a8a23019041e8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cb81afa95c8366e7e520bb3350f3d18438119ee821f0bb8b7a8a23019041e8a4->leave($__internal_cb81afa95c8366e7e520bb3350f3d18438119ee821f0bb8b7a8a23019041e8a4_prof);

        
        $__internal_cfe8c05cac88cc70ae8284f5719d48cd43ef9bd9b571a22365b1e213496716d3->leave($__internal_cfe8c05cac88cc70ae8284f5719d48cd43ef9bd9b571a22365b1e213496716d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
