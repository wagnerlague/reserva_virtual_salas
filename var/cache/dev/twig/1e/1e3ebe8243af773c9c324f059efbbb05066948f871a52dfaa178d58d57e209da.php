<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e3a1602407c8e2078e022c05c61699b8e7e4cda468bf96bbc5ab2f33d7aa5c17 extends Twig_Template
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
        $__internal_3f8d2ef9c33bd333b2c446bba79ab28d595c7b43056a322fdb68bf13722ac3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8d2ef9c33bd333b2c446bba79ab28d595c7b43056a322fdb68bf13722ac3f8->enter($__internal_3f8d2ef9c33bd333b2c446bba79ab28d595c7b43056a322fdb68bf13722ac3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0b3541ce23d6dac5840e7314fcad840a0ce15a886edd7203e24fcfc726c4c19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3541ce23d6dac5840e7314fcad840a0ce15a886edd7203e24fcfc726c4c19c->enter($__internal_0b3541ce23d6dac5840e7314fcad840a0ce15a886edd7203e24fcfc726c4c19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f8d2ef9c33bd333b2c446bba79ab28d595c7b43056a322fdb68bf13722ac3f8->leave($__internal_3f8d2ef9c33bd333b2c446bba79ab28d595c7b43056a322fdb68bf13722ac3f8_prof);

        
        $__internal_0b3541ce23d6dac5840e7314fcad840a0ce15a886edd7203e24fcfc726c4c19c->leave($__internal_0b3541ce23d6dac5840e7314fcad840a0ce15a886edd7203e24fcfc726c4c19c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2175a608a4fa5416ebd8f76f2790c8f11f7f23d283224fa528859b5d4825a539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2175a608a4fa5416ebd8f76f2790c8f11f7f23d283224fa528859b5d4825a539->enter($__internal_2175a608a4fa5416ebd8f76f2790c8f11f7f23d283224fa528859b5d4825a539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9aae3372bdd6015decce9a81c2cf4c241096b92cc7eee51292b01908ab203f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aae3372bdd6015decce9a81c2cf4c241096b92cc7eee51292b01908ab203f42->enter($__internal_9aae3372bdd6015decce9a81c2cf4c241096b92cc7eee51292b01908ab203f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9aae3372bdd6015decce9a81c2cf4c241096b92cc7eee51292b01908ab203f42->leave($__internal_9aae3372bdd6015decce9a81c2cf4c241096b92cc7eee51292b01908ab203f42_prof);

        
        $__internal_2175a608a4fa5416ebd8f76f2790c8f11f7f23d283224fa528859b5d4825a539->leave($__internal_2175a608a4fa5416ebd8f76f2790c8f11f7f23d283224fa528859b5d4825a539_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c5a38dba4736ffb5154dd0657b03661605fa9baf86ce284f44454ce4a696074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5a38dba4736ffb5154dd0657b03661605fa9baf86ce284f44454ce4a696074->enter($__internal_2c5a38dba4736ffb5154dd0657b03661605fa9baf86ce284f44454ce4a696074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fdf534226c581847a3092f4ba26fd2f136f3075aa557014167195c9b953515eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf534226c581847a3092f4ba26fd2f136f3075aa557014167195c9b953515eb->enter($__internal_fdf534226c581847a3092f4ba26fd2f136f3075aa557014167195c9b953515eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fdf534226c581847a3092f4ba26fd2f136f3075aa557014167195c9b953515eb->leave($__internal_fdf534226c581847a3092f4ba26fd2f136f3075aa557014167195c9b953515eb_prof);

        
        $__internal_2c5a38dba4736ffb5154dd0657b03661605fa9baf86ce284f44454ce4a696074->leave($__internal_2c5a38dba4736ffb5154dd0657b03661605fa9baf86ce284f44454ce4a696074_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_262fff80ccea15c60b699f6027b0bb9e823a7484a65264656f9565f5a9dea4b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262fff80ccea15c60b699f6027b0bb9e823a7484a65264656f9565f5a9dea4b0->enter($__internal_262fff80ccea15c60b699f6027b0bb9e823a7484a65264656f9565f5a9dea4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b36d53f08951037550d0226145cab00b854d02ec35bd26ca79aaa3133b33b697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36d53f08951037550d0226145cab00b854d02ec35bd26ca79aaa3133b33b697->enter($__internal_b36d53f08951037550d0226145cab00b854d02ec35bd26ca79aaa3133b33b697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b36d53f08951037550d0226145cab00b854d02ec35bd26ca79aaa3133b33b697->leave($__internal_b36d53f08951037550d0226145cab00b854d02ec35bd26ca79aaa3133b33b697_prof);

        
        $__internal_262fff80ccea15c60b699f6027b0bb9e823a7484a65264656f9565f5a9dea4b0->leave($__internal_262fff80ccea15c60b699f6027b0bb9e823a7484a65264656f9565f5a9dea4b0_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
