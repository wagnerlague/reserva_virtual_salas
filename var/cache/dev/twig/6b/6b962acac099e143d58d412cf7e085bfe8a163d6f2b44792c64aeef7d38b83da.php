<?php

/* usuario/show.html.twig */
class __TwigTemplate_444afdbf38bd44f0005435f5b3aeb08b2ecd2f348d475d41e16f2cf6fc9c7df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/show.html.twig", 1);
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
        $__internal_fc660007a1ce6c565c6c3cb88b45ca9f367cbf2957f8e11d0f512138ee4b9b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc660007a1ce6c565c6c3cb88b45ca9f367cbf2957f8e11d0f512138ee4b9b52->enter($__internal_fc660007a1ce6c565c6c3cb88b45ca9f367cbf2957f8e11d0f512138ee4b9b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $__internal_d9f7084e133315c08597afbe1e45ce487c53b10b258de57713ce278d6ed3899f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f7084e133315c08597afbe1e45ce487c53b10b258de57713ce278d6ed3899f->enter($__internal_d9f7084e133315c08597afbe1e45ce487c53b10b258de57713ce278d6ed3899f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc660007a1ce6c565c6c3cb88b45ca9f367cbf2957f8e11d0f512138ee4b9b52->leave($__internal_fc660007a1ce6c565c6c3cb88b45ca9f367cbf2957f8e11d0f512138ee4b9b52_prof);

        
        $__internal_d9f7084e133315c08597afbe1e45ce487c53b10b258de57713ce278d6ed3899f->leave($__internal_d9f7084e133315c08597afbe1e45ce487c53b10b258de57713ce278d6ed3899f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a72ca5aafc2481a7c2fa2f782e33494d8565cb34396257333ba03e222fa6f8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72ca5aafc2481a7c2fa2f782e33494d8565cb34396257333ba03e222fa6f8d2->enter($__internal_a72ca5aafc2481a7c2fa2f782e33494d8565cb34396257333ba03e222fa6f8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9aa3840a01d1a9286c459329a50864842370489bd0bf862c5fb6528aa7fd7eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa3840a01d1a9286c459329a50864842370489bd0bf862c5fb6528aa7fd7eb1->enter($__internal_9aa3840a01d1a9286c459329a50864842370489bd0bf862c5fb6528aa7fd7eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row row-cards\">
        <div class=\"col-md-6 pading-1 col-md-offset-1\">
            <div class=\"card card-inverse card-info text-xs-center\">
                <h3 class=\"card-header\">Usuário<span class=\"pull-right glyphicon glyphicon-triangle-bottom invisible\"></span>
                    <div class=\"card-block\">
                        <blockquote class=\"card-blockquote\">
                            <p>
                                Nome:
                                <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nome", array()), "html", null, true);
        echo "</span><br>
                                Usuario:
                                <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuario", array()), "html", null, true);
        echo "</span>
                                <br>
                                Senha:
                                <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "senha", array()), "html", null, true);
        echo "</span>
                            </p>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Voltar para a lista</a>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "idUsuario", array()))), "html", null, true);
        echo "\">Editar</a>
                            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-right\" value=\"Deletar\">
                            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </blockquote>
                    </div>
            </div>
        </div>
    </div>

";
        
        $__internal_9aa3840a01d1a9286c459329a50864842370489bd0bf862c5fb6528aa7fd7eb1->leave($__internal_9aa3840a01d1a9286c459329a50864842370489bd0bf862c5fb6528aa7fd7eb1_prof);

        
        $__internal_a72ca5aafc2481a7c2fa2f782e33494d8565cb34396257333ba03e222fa6f8d2->leave($__internal_a72ca5aafc2481a7c2fa2f782e33494d8565cb34396257333ba03e222fa6f8d2_prof);

    }

    public function getTemplateName()
    {
        return "usuario/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  84 => 22,  80 => 21,  76 => 20,  71 => 18,  65 => 15,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"row row-cards\">
        <div class=\"col-md-6 pading-1 col-md-offset-1\">
            <div class=\"card card-inverse card-info text-xs-center\">
                <h3 class=\"card-header\">Usuário<span class=\"pull-right glyphicon glyphicon-triangle-bottom invisible\"></span>
                    <div class=\"card-block\">
                        <blockquote class=\"card-blockquote\">
                            <p>
                                Nome:
                                <span>{{ usuario.nome }}</span><br>
                                Usuario:
                                <span>{{ usuario.usuario }}</span>
                                <br>
                                Senha:
                                <span>{{ usuario.senha }}</span>
                            </p>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"{{ path('usuario_index') }}\">Voltar para a lista</a>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"{{ path('usuario_edit', { 'id': usuario.idUsuario }) }}\">Editar</a>
                            {{ form_start(delete_form) }}
                            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-right\" value=\"Deletar\">
                            {{ form_end(delete_form) }}
                        </blockquote>
                    </div>
            </div>
        </div>
    </div>

{% endblock %}
", "usuario/show.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\usuario\\show.html.twig");
    }
}
