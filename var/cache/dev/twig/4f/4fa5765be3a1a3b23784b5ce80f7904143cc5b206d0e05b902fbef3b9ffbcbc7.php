<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b5f2d883ddbefdf3ce560a7c7e79d6aa78716d32dbccbee84f15401ed3fb8773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e4bfc19b0a0de56ebd189c9e307ea1867fa143943c80ef19803f3a5716dfbce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4bfc19b0a0de56ebd189c9e307ea1867fa143943c80ef19803f3a5716dfbce->enter($__internal_5e4bfc19b0a0de56ebd189c9e307ea1867fa143943c80ef19803f3a5716dfbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1c0fca7b6ea13262e625337f6bc89679432da6e99cbeebf27c689853d40c1f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0fca7b6ea13262e625337f6bc89679432da6e99cbeebf27c689853d40c1f61->enter($__internal_1c0fca7b6ea13262e625337f6bc89679432da6e99cbeebf27c689853d40c1f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e4bfc19b0a0de56ebd189c9e307ea1867fa143943c80ef19803f3a5716dfbce->leave($__internal_5e4bfc19b0a0de56ebd189c9e307ea1867fa143943c80ef19803f3a5716dfbce_prof);

        
        $__internal_1c0fca7b6ea13262e625337f6bc89679432da6e99cbeebf27c689853d40c1f61->leave($__internal_1c0fca7b6ea13262e625337f6bc89679432da6e99cbeebf27c689853d40c1f61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efe21c45a505e879cdc384e232a14c50077df6fd9019cb6755834d3e278520f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe21c45a505e879cdc384e232a14c50077df6fd9019cb6755834d3e278520f8->enter($__internal_efe21c45a505e879cdc384e232a14c50077df6fd9019cb6755834d3e278520f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a3a67997187bb64639908f49494325f26308dfa46fb620ea2c13e443a71ab75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3a67997187bb64639908f49494325f26308dfa46fb620ea2c13e443a71ab75->enter($__internal_1a3a67997187bb64639908f49494325f26308dfa46fb620ea2c13e443a71ab75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1a3a67997187bb64639908f49494325f26308dfa46fb620ea2c13e443a71ab75->leave($__internal_1a3a67997187bb64639908f49494325f26308dfa46fb620ea2c13e443a71ab75_prof);

        
        $__internal_efe21c45a505e879cdc384e232a14c50077df6fd9019cb6755834d3e278520f8->leave($__internal_efe21c45a505e879cdc384e232a14c50077df6fd9019cb6755834d3e278520f8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_03a0678c4f295ef2462045590fb80b1264b52a58db78173bc58fba1e58fe7d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a0678c4f295ef2462045590fb80b1264b52a58db78173bc58fba1e58fe7d2d->enter($__internal_03a0678c4f295ef2462045590fb80b1264b52a58db78173bc58fba1e58fe7d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79f106a0730a1ee403150cb774186cafbde4d1ae638d5dc002b708aaa4a0dc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f106a0730a1ee403150cb774186cafbde4d1ae638d5dc002b708aaa4a0dc29->enter($__internal_79f106a0730a1ee403150cb774186cafbde4d1ae638d5dc002b708aaa4a0dc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_79f106a0730a1ee403150cb774186cafbde4d1ae638d5dc002b708aaa4a0dc29->leave($__internal_79f106a0730a1ee403150cb774186cafbde4d1ae638d5dc002b708aaa4a0dc29_prof);

        
        $__internal_03a0678c4f295ef2462045590fb80b1264b52a58db78173bc58fba1e58fe7d2d->leave($__internal_03a0678c4f295ef2462045590fb80b1264b52a58db78173bc58fba1e58fe7d2d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
