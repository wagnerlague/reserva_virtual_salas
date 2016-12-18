<?php

/* usuario/new.login.html.twig */
class __TwigTemplate_825d9482dc520df5023ead661abda9c40ea2eef2367ca45b9b0b12be6a202867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.login.html.twig", "usuario/new.login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dffc9b47d1497415d186325020e1d00e9a1aa584f6b0cca93d639ce4b9c047d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dffc9b47d1497415d186325020e1d00e9a1aa584f6b0cca93d639ce4b9c047d7->enter($__internal_dffc9b47d1497415d186325020e1d00e9a1aa584f6b0cca93d639ce4b9c047d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.login.html.twig"));

        $__internal_642e482e64cf1e13c05eade74b9b363d5eb5e16da98acc87efbbae8e76c9c285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642e482e64cf1e13c05eade74b9b363d5eb5e16da98acc87efbbae8e76c9c285->enter($__internal_642e482e64cf1e13c05eade74b9b363d5eb5e16da98acc87efbbae8e76c9c285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dffc9b47d1497415d186325020e1d00e9a1aa584f6b0cca93d639ce4b9c047d7->leave($__internal_dffc9b47d1497415d186325020e1d00e9a1aa584f6b0cca93d639ce4b9c047d7_prof);

        
        $__internal_642e482e64cf1e13c05eade74b9b363d5eb5e16da98acc87efbbae8e76c9c285->leave($__internal_642e482e64cf1e13c05eade74b9b363d5eb5e16da98acc87efbbae8e76c9c285_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_482358cd797587216116ec86c695f3b274fed1b3d39fea1f24c34ad6499b2899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482358cd797587216116ec86c695f3b274fed1b3d39fea1f24c34ad6499b2899->enter($__internal_482358cd797587216116ec86c695f3b274fed1b3d39fea1f24c34ad6499b2899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0964b35f348aad2ef417c5b47f277bd3babd2a71cad7b7fe2e1c35c359fe0c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0964b35f348aad2ef417c5b47f277bd3babd2a71cad7b7fe2e1c35c359fe0c72->enter($__internal_0964b35f348aad2ef417c5b47f277bd3babd2a71cad7b7fe2e1c35c359fe0c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2 class=\"titulo-pagina\">Criar Usuário</h2>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"row margin15\">
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"nome\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome", array()), 'label');
        echo "
            </label>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'label');
        echo "
            </label>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"senha\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "senha", array()), 'label');
        echo "
            </label>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "senha", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
</div>
<div class=\"row margin15\">
    <div class=\"col-xs-12 col-md-9\">
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Criar\" />
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <ul>
            <li>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_index");
        echo "\">Voltar para o login</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_0964b35f348aad2ef417c5b47f277bd3babd2a71cad7b7fe2e1c35c359fe0c72->leave($__internal_0964b35f348aad2ef417c5b47f277bd3babd2a71cad7b7fe2e1c35c359fe0c72_prof);

        
        $__internal_482358cd797587216116ec86c695f3b274fed1b3d39fea1f24c34ad6499b2899->leave($__internal_482358cd797587216116ec86c695f3b274fed1b3d39fea1f24c34ad6499b2899_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  103 => 35,  93 => 28,  88 => 26,  79 => 20,  74 => 18,  65 => 12,  60 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.login.html.twig' %}

{% block body %}
<h2 class=\"titulo-pagina\">Criar Usuário</h2>
{{ form_start(form) }}
<div class=\"row margin15\">
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"nome\">
                {{ form_label(form.nome) }}
            </label>
            {{ form_widget(form.nome, { 'attr': {'class': 'form-control'} }) }}
        </div>
    </div>
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                {{ form_label(form.usuario) }}
            </label>
            {{ form_widget(form.usuario, { 'attr': {'class': 'form-control'} }) }}
        </div>
    </div>
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"senha\">
                {{ form_label(form.senha) }}
            </label>
            {{ form_widget(form.senha, { 'attr': {'class': 'form-control'} }) }}
        </div>
    </div>
</div>
<div class=\"row margin15\">
    <div class=\"col-xs-12 col-md-9\">
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Criar\" />
        {{ form_end(form) }}
        <ul>
            <li>
                <a href=\"{{ path('login_index') }}\">Voltar para o login</a>
            </li>
        </ul>
    </div>
{% endblock %}
", "usuario/new.login.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\usuario\\new.login.html.twig");
    }
}
