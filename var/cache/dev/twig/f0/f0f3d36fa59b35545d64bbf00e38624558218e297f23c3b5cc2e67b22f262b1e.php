<?php

/* reserva/reserva.html.twig */
class __TwigTemplate_fe112e5df0f2829a07ca6c33e34a7226643eb6e2b3a478f3608948b842332c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reserva/reserva.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9599e9c48dba28b98b434462f493942148c03054beaed17f67945c00e8382693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9599e9c48dba28b98b434462f493942148c03054beaed17f67945c00e8382693->enter($__internal_9599e9c48dba28b98b434462f493942148c03054beaed17f67945c00e8382693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reserva/reserva.html.twig"));

        $__internal_e0e0c5592f20f8eb1619e197fd41feeca7c9f26f8de5625224a2ec200e3dfb50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e0c5592f20f8eb1619e197fd41feeca7c9f26f8de5625224a2ec200e3dfb50->enter($__internal_e0e0c5592f20f8eb1619e197fd41feeca7c9f26f8de5625224a2ec200e3dfb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reserva/reserva.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9599e9c48dba28b98b434462f493942148c03054beaed17f67945c00e8382693->leave($__internal_9599e9c48dba28b98b434462f493942148c03054beaed17f67945c00e8382693_prof);

        
        $__internal_e0e0c5592f20f8eb1619e197fd41feeca7c9f26f8de5625224a2ec200e3dfb50->leave($__internal_e0e0c5592f20f8eb1619e197fd41feeca7c9f26f8de5625224a2ec200e3dfb50_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3fcac3c6545d9ff24920089e71625392b13028b318e8f54b5daa3d9b1789321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fcac3c6545d9ff24920089e71625392b13028b318e8f54b5daa3d9b1789321->enter($__internal_a3fcac3c6545d9ff24920089e71625392b13028b318e8f54b5daa3d9b1789321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_20e7c42194dfcffba62e59505a651d1c2c845423e1bf2018bbbc8fd34936d01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e7c42194dfcffba62e59505a651d1c2c845423e1bf2018bbbc8fd34936d01c->enter($__internal_20e7c42194dfcffba62e59505a651d1c2c845423e1bf2018bbbc8fd34936d01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reserva";
        
        $__internal_20e7c42194dfcffba62e59505a651d1c2c845423e1bf2018bbbc8fd34936d01c->leave($__internal_20e7c42194dfcffba62e59505a651d1c2c845423e1bf2018bbbc8fd34936d01c_prof);

        
        $__internal_a3fcac3c6545d9ff24920089e71625392b13028b318e8f54b5daa3d9b1789321->leave($__internal_a3fcac3c6545d9ff24920089e71625392b13028b318e8f54b5daa3d9b1789321_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e986d71022fe975b47778e43b2636e51a5bccc5dd5c4d774562fce07d15187fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e986d71022fe975b47778e43b2636e51a5bccc5dd5c4d774562fce07d15187fd->enter($__internal_e986d71022fe975b47778e43b2636e51a5bccc5dd5c4d774562fce07d15187fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_203e3c3c621184b3ca839c48e21092693f3d4b806dbd789980e98279ac7b96ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203e3c3c621184b3ca839c48e21092693f3d4b806dbd789980e98279ac7b96ce->enter($__internal_203e3c3c621184b3ca839c48e21092693f3d4b806dbd789980e98279ac7b96ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        <ul>
            <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_usuario", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nome", array()), "html", null, true);
        echo "</a></li>
            <!-- formato de data ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "date", array()), "Y-m-d"), "html", null, true);
        echo "-->
        </ul>

    ";
        
        $__internal_203e3c3c621184b3ca839c48e21092693f3d4b806dbd789980e98279ac7b96ce->leave($__internal_203e3c3c621184b3ca839c48e21092693f3d4b806dbd789980e98279ac7b96ce_prof);

        
        $__internal_e986d71022fe975b47778e43b2636e51a5bccc5dd5c4d774562fce07d15187fd->leave($__internal_e986d71022fe975b47778e43b2636e51a5bccc5dd5c4d774562fce07d15187fd_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2c8beb5c4362f17374d381ad30c5618e0708486a350675cf27d6970b083f5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c8beb5c4362f17374d381ad30c5618e0708486a350675cf27d6970b083f5eb->enter($__internal_e2c8beb5c4362f17374d381ad30c5618e0708486a350675cf27d6970b083f5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_caa5efc1a39921e04b098a3f21768d4eac1046af81c2c70a72483c76e5b4d564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa5efc1a39921e04b098a3f21768d4eac1046af81c2c70a72483c76e5b4d564->enter($__internal_caa5efc1a39921e04b098a3f21768d4eac1046af81c2c70a72483c76e5b4d564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_caa5efc1a39921e04b098a3f21768d4eac1046af81c2c70a72483c76e5b4d564->leave($__internal_caa5efc1a39921e04b098a3f21768d4eac1046af81c2c70a72483c76e5b4d564_prof);

        
        $__internal_e2c8beb5c4362f17374d381ad30c5618e0708486a350675cf27d6970b083f5eb->leave($__internal_e2c8beb5c4362f17374d381ad30c5618e0708486a350675cf27d6970b083f5eb_prof);

    }

    public function getTemplateName()
    {
        return "reserva/reserva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  79 => 8,  73 => 7,  69 => 5,  60 => 4,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
    {% block title %}Reserva{% endblock %}

    {% block body %}

        <ul>
            <li><a href=\"{{ path('mostrar_usuario',{'id':usuario.id}) }}\">{{ usuario.nome }}</a></li>
            <!-- formato de data {{ usuario.date | date('Y-m-d')}}-->
        </ul>

    {% endblock %}
    {% block javascripts %}{% endblock %}

", "reserva/reserva.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\reserva\\reserva.html.twig");
    }
}
