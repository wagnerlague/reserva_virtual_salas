<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_be965a5ac3c0f7397eec9d32ccae62342b6cfeb3f26139442d0e99c8fe55fa46 extends Twig_Template
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
        $__internal_e4dd44efa210a051b476b56d08843785bd7b50a0418e4d53b49fb3b28cb94d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dd44efa210a051b476b56d08843785bd7b50a0418e4d53b49fb3b28cb94d7c->enter($__internal_e4dd44efa210a051b476b56d08843785bd7b50a0418e4d53b49fb3b28cb94d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4097b3436a160995296afe36e59cbdfc01928c25368cd399f9de937fde482947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4097b3436a160995296afe36e59cbdfc01928c25368cd399f9de937fde482947->enter($__internal_4097b3436a160995296afe36e59cbdfc01928c25368cd399f9de937fde482947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4dd44efa210a051b476b56d08843785bd7b50a0418e4d53b49fb3b28cb94d7c->leave($__internal_e4dd44efa210a051b476b56d08843785bd7b50a0418e4d53b49fb3b28cb94d7c_prof);

        
        $__internal_4097b3436a160995296afe36e59cbdfc01928c25368cd399f9de937fde482947->leave($__internal_4097b3436a160995296afe36e59cbdfc01928c25368cd399f9de937fde482947_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89bb4dbbcfab66c2b08794d6d0835b197f18c6c543d7fc7ed40eb530d6ea2575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89bb4dbbcfab66c2b08794d6d0835b197f18c6c543d7fc7ed40eb530d6ea2575->enter($__internal_89bb4dbbcfab66c2b08794d6d0835b197f18c6c543d7fc7ed40eb530d6ea2575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b97b8bf871e89b45a21c614d8516f7b0b49c8ed5afe649886a0a564dc6c102e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b97b8bf871e89b45a21c614d8516f7b0b49c8ed5afe649886a0a564dc6c102e->enter($__internal_8b97b8bf871e89b45a21c614d8516f7b0b49c8ed5afe649886a0a564dc6c102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8b97b8bf871e89b45a21c614d8516f7b0b49c8ed5afe649886a0a564dc6c102e->leave($__internal_8b97b8bf871e89b45a21c614d8516f7b0b49c8ed5afe649886a0a564dc6c102e_prof);

        
        $__internal_89bb4dbbcfab66c2b08794d6d0835b197f18c6c543d7fc7ed40eb530d6ea2575->leave($__internal_89bb4dbbcfab66c2b08794d6d0835b197f18c6c543d7fc7ed40eb530d6ea2575_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23f630307fe38b0a53fbf0b8d654eb7c348bd37da1d3c044df9b0e55f3d422c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f630307fe38b0a53fbf0b8d654eb7c348bd37da1d3c044df9b0e55f3d422c5->enter($__internal_23f630307fe38b0a53fbf0b8d654eb7c348bd37da1d3c044df9b0e55f3d422c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_72f8a85fcae736311dd9e4ea46aade79acc9498d62eb9f78d483eb941771270f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f8a85fcae736311dd9e4ea46aade79acc9498d62eb9f78d483eb941771270f->enter($__internal_72f8a85fcae736311dd9e4ea46aade79acc9498d62eb9f78d483eb941771270f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_72f8a85fcae736311dd9e4ea46aade79acc9498d62eb9f78d483eb941771270f->leave($__internal_72f8a85fcae736311dd9e4ea46aade79acc9498d62eb9f78d483eb941771270f_prof);

        
        $__internal_23f630307fe38b0a53fbf0b8d654eb7c348bd37da1d3c044df9b0e55f3d422c5->leave($__internal_23f630307fe38b0a53fbf0b8d654eb7c348bd37da1d3c044df9b0e55f3d422c5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bcc8d878e6a56b44e5d46e15b2f81b0be58ebaf150769ec46c02e5e903e65fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc8d878e6a56b44e5d46e15b2f81b0be58ebaf150769ec46c02e5e903e65fda->enter($__internal_bcc8d878e6a56b44e5d46e15b2f81b0be58ebaf150769ec46c02e5e903e65fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad8abd6c64cd24a37fc0b7b3ba87eb8ed75bde3119e9f536f010e02443388564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8abd6c64cd24a37fc0b7b3ba87eb8ed75bde3119e9f536f010e02443388564->enter($__internal_ad8abd6c64cd24a37fc0b7b3ba87eb8ed75bde3119e9f536f010e02443388564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ad8abd6c64cd24a37fc0b7b3ba87eb8ed75bde3119e9f536f010e02443388564->leave($__internal_ad8abd6c64cd24a37fc0b7b3ba87eb8ed75bde3119e9f536f010e02443388564_prof);

        
        $__internal_bcc8d878e6a56b44e5d46e15b2f81b0be58ebaf150769ec46c02e5e903e65fda->leave($__internal_bcc8d878e6a56b44e5d46e15b2f81b0be58ebaf150769ec46c02e5e903e65fda_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
