<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_386561f01d87583febbdd7671a408964e1a23fd2060f35603653f733584c0d1d extends Twig_Template
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
        $__internal_83fa863f997d143d108d8f0120d91c8a4cec8f8f9f24340eba031d6e519f7235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fa863f997d143d108d8f0120d91c8a4cec8f8f9f24340eba031d6e519f7235->enter($__internal_83fa863f997d143d108d8f0120d91c8a4cec8f8f9f24340eba031d6e519f7235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8fda3f1a79525e650730b4e0b776556cfc30f842a0f653357f2d48cad3e51066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fda3f1a79525e650730b4e0b776556cfc30f842a0f653357f2d48cad3e51066->enter($__internal_8fda3f1a79525e650730b4e0b776556cfc30f842a0f653357f2d48cad3e51066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83fa863f997d143d108d8f0120d91c8a4cec8f8f9f24340eba031d6e519f7235->leave($__internal_83fa863f997d143d108d8f0120d91c8a4cec8f8f9f24340eba031d6e519f7235_prof);

        
        $__internal_8fda3f1a79525e650730b4e0b776556cfc30f842a0f653357f2d48cad3e51066->leave($__internal_8fda3f1a79525e650730b4e0b776556cfc30f842a0f653357f2d48cad3e51066_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7d3862e496ec3d1700581e3f81b6ba25f28610429f0e84047b321b66a4e9e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d3862e496ec3d1700581e3f81b6ba25f28610429f0e84047b321b66a4e9e82->enter($__internal_a7d3862e496ec3d1700581e3f81b6ba25f28610429f0e84047b321b66a4e9e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e3ecdd7ac7bb21ad19245395761e5cdf51a2a51c9f740f29724b10c9f228b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3ecdd7ac7bb21ad19245395761e5cdf51a2a51c9f740f29724b10c9f228b08->enter($__internal_7e3ecdd7ac7bb21ad19245395761e5cdf51a2a51c9f740f29724b10c9f228b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7e3ecdd7ac7bb21ad19245395761e5cdf51a2a51c9f740f29724b10c9f228b08->leave($__internal_7e3ecdd7ac7bb21ad19245395761e5cdf51a2a51c9f740f29724b10c9f228b08_prof);

        
        $__internal_a7d3862e496ec3d1700581e3f81b6ba25f28610429f0e84047b321b66a4e9e82->leave($__internal_a7d3862e496ec3d1700581e3f81b6ba25f28610429f0e84047b321b66a4e9e82_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
