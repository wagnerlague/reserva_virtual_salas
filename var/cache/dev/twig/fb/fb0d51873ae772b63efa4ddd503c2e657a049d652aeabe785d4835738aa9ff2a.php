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
        $__internal_ae1abfcf712bb0c2b55f3944f27a9ea6e8afa247612661e8573f2892804112b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1abfcf712bb0c2b55f3944f27a9ea6e8afa247612661e8573f2892804112b4->enter($__internal_ae1abfcf712bb0c2b55f3944f27a9ea6e8afa247612661e8573f2892804112b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.login.html.twig"));

        $__internal_11c386a7bc050e58759d69f5f2cb22744bc48c87e644b51f058de98452b75d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c386a7bc050e58759d69f5f2cb22744bc48c87e644b51f058de98452b75d8e->enter($__internal_11c386a7bc050e58759d69f5f2cb22744bc48c87e644b51f058de98452b75d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/new.login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae1abfcf712bb0c2b55f3944f27a9ea6e8afa247612661e8573f2892804112b4->leave($__internal_ae1abfcf712bb0c2b55f3944f27a9ea6e8afa247612661e8573f2892804112b4_prof);

        
        $__internal_11c386a7bc050e58759d69f5f2cb22744bc48c87e644b51f058de98452b75d8e->leave($__internal_11c386a7bc050e58759d69f5f2cb22744bc48c87e644b51f058de98452b75d8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dde33d3f2c268719ff29a499ca4049afdfc81044066ef854e0ce4b0a89292789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde33d3f2c268719ff29a499ca4049afdfc81044066ef854e0ce4b0a89292789->enter($__internal_dde33d3f2c268719ff29a499ca4049afdfc81044066ef854e0ce4b0a89292789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63594f1cdfa18d6ff52d121d1bb2015c51a0659023aa5d90ba7afc0f61773d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63594f1cdfa18d6ff52d121d1bb2015c51a0659023aa5d90ba7afc0f61773d32->enter($__internal_63594f1cdfa18d6ff52d121d1bb2015c51a0659023aa5d90ba7afc0f61773d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Criar Usuário</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div>
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idUsuario", array()), 'label');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idUsuario", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idUsuario", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome", array()), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome", array()), 'errors');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nome", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'label');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "senha", array()), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "senha", array()), 'errors');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "senha", array()), 'widget');
        echo "
    </div>

    <div>
        <input type=\"submit\" value=\"Criar\" />
    </div>

    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_index");
        echo "\">Voltar para o login</a>
        </li>
    </ul>
";
        
        $__internal_63594f1cdfa18d6ff52d121d1bb2015c51a0659023aa5d90ba7afc0f61773d32->leave($__internal_63594f1cdfa18d6ff52d121d1bb2015c51a0659023aa5d90ba7afc0f61773d32_prof);

        
        $__internal_dde33d3f2c268719ff29a499ca4049afdfc81044066ef854e0ce4b0a89292789->leave($__internal_dde33d3f2c268719ff29a499ca4049afdfc81044066ef854e0ce4b0a89292789_prof);

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
        return array (  133 => 41,  126 => 37,  116 => 30,  112 => 29,  108 => 28,  101 => 24,  97 => 23,  93 => 22,  86 => 18,  82 => 17,  78 => 16,  71 => 12,  67 => 11,  63 => 10,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Criar Usuário</h1>

    {{ form_start(form) }}
    {{ form_errors(form) }}

    <div>
        {{ form_label(form.idUsuario) }}
        {{ form_errors(form.idUsuario) }}
        {{ form_widget(form.idUsuario) }}
    </div>

    <div>
        {{ form_label(form.nome) }}
        {{ form_errors(form.nome) }}
        {{ form_widget(form.nome) }}
    </div>

    <div>
        {{ form_label(form.usuario) }}
        {{ form_errors(form.usuario) }}
        {{ form_widget(form.usuario) }}
    </div>

    <div>
        {{ form_label(form.senha) }}
        {{ form_errors(form.senha) }}
        {{ form_widget(form.senha) }}
    </div>

    <div>
        <input type=\"submit\" value=\"Criar\" />
    </div>

    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('login_index') }}\">Voltar para o login</a>
        </li>
    </ul>
{% endblock %}
", "usuario/new.login.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\usuario\\new.login.html.twig");
    }
}
