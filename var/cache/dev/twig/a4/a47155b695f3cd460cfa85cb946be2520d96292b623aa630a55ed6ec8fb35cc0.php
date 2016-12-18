<?php

/* usuario/new.html.twig */
class __TwigTemplate_55c5d206c095ff3f519f4206a91c8e4d7e89740ab4a823a6547498cf8f287f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47f02d9aa67222d422d6c57c37d59f1f8936866fed831ceee3418905ca230e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f02d9aa67222d422d6c57c37d59f1f8936866fed831ceee3418905ca230e2c->enter($__internal_47f02d9aa67222d422d6c57c37d59f1f8936866fed831ceee3418905ca230e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_778e0728f8933b46d5def0df18a27d4d7f2ee2b45517aa0797fb68ca471d0b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778e0728f8933b46d5def0df18a27d4d7f2ee2b45517aa0797fb68ca471d0b00->enter($__internal_778e0728f8933b46d5def0df18a27d4d7f2ee2b45517aa0797fb68ca471d0b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f02d9aa67222d422d6c57c37d59f1f8936866fed831ceee3418905ca230e2c->leave($__internal_47f02d9aa67222d422d6c57c37d59f1f8936866fed831ceee3418905ca230e2c_prof);

        
        $__internal_778e0728f8933b46d5def0df18a27d4d7f2ee2b45517aa0797fb68ca471d0b00->leave($__internal_778e0728f8933b46d5def0df18a27d4d7f2ee2b45517aa0797fb68ca471d0b00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5d90aee715bb4f242d7586c428a8370e7f2a21982ada4e8fc32f1b916d7568b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d90aee715bb4f242d7586c428a8370e7f2a21982ada4e8fc32f1b916d7568b->enter($__internal_d5d90aee715bb4f242d7586c428a8370e7f2a21982ada4e8fc32f1b916d7568b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79c0cfda6d4dd54a96501edf77decaed262201081bc85cf1eb1b59ecdd5c1677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c0cfda6d4dd54a96501edf77decaed262201081bc85cf1eb1b59ecdd5c1677->enter($__internal_79c0cfda6d4dd54a96501edf77decaed262201081bc85cf1eb1b59ecdd5c1677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Voltar para a Lista</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_79c0cfda6d4dd54a96501edf77decaed262201081bc85cf1eb1b59ecdd5c1677->leave($__internal_79c0cfda6d4dd54a96501edf77decaed262201081bc85cf1eb1b59ecdd5c1677_prof);

        
        $__internal_d5d90aee715bb4f242d7586c428a8370e7f2a21982ada4e8fc32f1b916d7568b->leave($__internal_d5d90aee715bb4f242d7586c428a8370e7f2a21982ada4e8fc32f1b916d7568b_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
                <a href=\"{{ path('usuario_index') }}\">Voltar para a Lista</a>
            </li>
        </ul>
    </div>
{% endblock %}", "usuario/new.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\usuario\\new.html.twig");
    }
}
