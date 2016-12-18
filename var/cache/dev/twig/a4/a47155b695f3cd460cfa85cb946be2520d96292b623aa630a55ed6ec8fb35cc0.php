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
        $__internal_8e1e1bbffbcc0e054d1198e406e310db91c50d6dc0254d3cdecf517bab2e9f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1e1bbffbcc0e054d1198e406e310db91c50d6dc0254d3cdecf517bab2e9f60->enter($__internal_8e1e1bbffbcc0e054d1198e406e310db91c50d6dc0254d3cdecf517bab2e9f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_971784cf6ca13be78e43a88caf33ac3703c9617bebb13fa89223903e71cd27d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971784cf6ca13be78e43a88caf33ac3703c9617bebb13fa89223903e71cd27d8->enter($__internal_971784cf6ca13be78e43a88caf33ac3703c9617bebb13fa89223903e71cd27d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e1e1bbffbcc0e054d1198e406e310db91c50d6dc0254d3cdecf517bab2e9f60->leave($__internal_8e1e1bbffbcc0e054d1198e406e310db91c50d6dc0254d3cdecf517bab2e9f60_prof);

        
        $__internal_971784cf6ca13be78e43a88caf33ac3703c9617bebb13fa89223903e71cd27d8->leave($__internal_971784cf6ca13be78e43a88caf33ac3703c9617bebb13fa89223903e71cd27d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96530e681da95dcba41ac39c8923b66b0fefbc9d3884a896667239ec1d280bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96530e681da95dcba41ac39c8923b66b0fefbc9d3884a896667239ec1d280bdb->enter($__internal_96530e681da95dcba41ac39c8923b66b0fefbc9d3884a896667239ec1d280bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c371512c1225bddb1572615f1fdfbf53a34d8505e01376f20083b7beb799d05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c371512c1225bddb1572615f1fdfbf53a34d8505e01376f20083b7beb799d05f->enter($__internal_c371512c1225bddb1572615f1fdfbf53a34d8505e01376f20083b7beb799d05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Data do cadastro, informado pelo sistema.\"></span>
                </label>
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'label');
        echo "
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"senha\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "senha", array()), 'label');
        echo "
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "senha", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>
    <div class=\"row margin15\">
    <div class=\"col-xs-12 col-md-9\">
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Criar\" />
        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
         <ul>
            <li>
                <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Voltar para a Lista</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_c371512c1225bddb1572615f1fdfbf53a34d8505e01376f20083b7beb799d05f->leave($__internal_c371512c1225bddb1572615f1fdfbf53a34d8505e01376f20083b7beb799d05f_prof);

        
        $__internal_96530e681da95dcba41ac39c8923b66b0fefbc9d3884a896667239ec1d280bdb->leave($__internal_96530e681da95dcba41ac39c8923b66b0fefbc9d3884a896667239ec1d280bdb_prof);

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
        return array (  115 => 44,  109 => 41,  99 => 34,  92 => 30,  83 => 24,  76 => 20,  67 => 14,  60 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Data do cadastro, informado pelo sistema.\"></span>
                </label>
                {{ form_widget(form.nome, { 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                    {{ form_label(form.usuario) }}
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>
                {{ form_widget(form.usuario, { 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"senha\">
                    {{ form_label(form.senha) }}
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
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
