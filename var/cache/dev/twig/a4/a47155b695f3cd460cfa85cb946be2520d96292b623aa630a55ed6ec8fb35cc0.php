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
        $__internal_6f295f50dd4b733b84dfe59a5b5ec9d55fa14053d13c5b6238934ff646b1d5cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f295f50dd4b733b84dfe59a5b5ec9d55fa14053d13c5b6238934ff646b1d5cf->enter($__internal_6f295f50dd4b733b84dfe59a5b5ec9d55fa14053d13c5b6238934ff646b1d5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_bad780777952706987c9daaac04fd228e5fdf2d5f5d9d6c0bb28533bdc3b79fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad780777952706987c9daaac04fd228e5fdf2d5f5d9d6c0bb28533bdc3b79fb->enter($__internal_bad780777952706987c9daaac04fd228e5fdf2d5f5d9d6c0bb28533bdc3b79fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f295f50dd4b733b84dfe59a5b5ec9d55fa14053d13c5b6238934ff646b1d5cf->leave($__internal_6f295f50dd4b733b84dfe59a5b5ec9d55fa14053d13c5b6238934ff646b1d5cf_prof);

        
        $__internal_bad780777952706987c9daaac04fd228e5fdf2d5f5d9d6c0bb28533bdc3b79fb->leave($__internal_bad780777952706987c9daaac04fd228e5fdf2d5f5d9d6c0bb28533bdc3b79fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00e24dc177608cef7ca17a122fb2405f8a1bd621a08713edc46b339d63802de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e24dc177608cef7ca17a122fb2405f8a1bd621a08713edc46b339d63802de0->enter($__internal_00e24dc177608cef7ca17a122fb2405f8a1bd621a08713edc46b339d63802de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52f833050cb0912394809100800d4c1a15b8f9dc50a3cec18148aa30af2dab6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f833050cb0912394809100800d4c1a15b8f9dc50a3cec18148aa30af2dab6c->enter($__internal_52f833050cb0912394809100800d4c1a15b8f9dc50a3cec18148aa30af2dab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52f833050cb0912394809100800d4c1a15b8f9dc50a3cec18148aa30af2dab6c->leave($__internal_52f833050cb0912394809100800d4c1a15b8f9dc50a3cec18148aa30af2dab6c_prof);

        
        $__internal_00e24dc177608cef7ca17a122fb2405f8a1bd621a08713edc46b339d63802de0->leave($__internal_00e24dc177608cef7ca17a122fb2405f8a1bd621a08713edc46b339d63802de0_prof);

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
