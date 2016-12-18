<?php

/* reserva/show.html.twig */
class __TwigTemplate_0d681d6eed3c5c27d8d07662997377e66addd53aa406c0e62c673c35c0fbea9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reserva/show.html.twig", 1);
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
        $__internal_aaec7fc0a003f0918bc12b8109fd5b407481134fc596f8c834eeca01e5b38679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaec7fc0a003f0918bc12b8109fd5b407481134fc596f8c834eeca01e5b38679->enter($__internal_aaec7fc0a003f0918bc12b8109fd5b407481134fc596f8c834eeca01e5b38679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reserva/show.html.twig"));

        $__internal_c77c198a1a52b335a70a0e5a8d3380341f7ea764570017298fb2aff0f30bff15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77c198a1a52b335a70a0e5a8d3380341f7ea764570017298fb2aff0f30bff15->enter($__internal_c77c198a1a52b335a70a0e5a8d3380341f7ea764570017298fb2aff0f30bff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reserva/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaec7fc0a003f0918bc12b8109fd5b407481134fc596f8c834eeca01e5b38679->leave($__internal_aaec7fc0a003f0918bc12b8109fd5b407481134fc596f8c834eeca01e5b38679_prof);

        
        $__internal_c77c198a1a52b335a70a0e5a8d3380341f7ea764570017298fb2aff0f30bff15->leave($__internal_c77c198a1a52b335a70a0e5a8d3380341f7ea764570017298fb2aff0f30bff15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a55ed11eda4527485c041dd22f0e6cadbf0baba1b1c742f83507049d209703b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a55ed11eda4527485c041dd22f0e6cadbf0baba1b1c742f83507049d209703b->enter($__internal_1a55ed11eda4527485c041dd22f0e6cadbf0baba1b1c742f83507049d209703b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61e569a7f49296df7cf2fbeace4c609e64ea64ee7011b0f8481660fe7634dfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e569a7f49296df7cf2fbeace4c609e64ea64ee7011b0f8481660fe7634dfcb->enter($__internal_61e569a7f49296df7cf2fbeace4c609e64ea64ee7011b0f8481660fe7634dfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row row-cards\">
        <div class=\"col-md-6 pading-1 col-md-offset-1\">
            <div class=\"card card-inverse card-info text-xs-center\">
                <h3 class=\"card-header\">Sala<span class=\"pull-right glyphicon glyphicon-triangle-bottom invisible\"></span>
                    <div class=\"card-block\">
                        <blockquote class=\"card-blockquote\">
                            <p>
                                Usuário:
                                <span>";
        // line 13
        echo "</span><br>
                                Sala:
                                <span>";
        // line 15
        echo "</span>
                                <br>
                                Data:
                                <span>";
        // line 18
        echo "</span>
                                <br>
                                Hora:
                                <span>";
        // line 21
        echo "</span>
                                <br>
                                Status:
                                <span>";
        // line 24
        echo "</span>
                            </p>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"";
        // line 26
        echo "\">Voltar para a lista</a>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"";
        // line 27
        echo "\">Editar</a>
                            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-right\" value=\"Deletar\">
                            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "


                        </blockquote>
                    </div>
            </div>
        </div>
    </div>

";
        
        $__internal_61e569a7f49296df7cf2fbeace4c609e64ea64ee7011b0f8481660fe7634dfcb->leave($__internal_61e569a7f49296df7cf2fbeace4c609e64ea64ee7011b0f8481660fe7634dfcb_prof);

        
        $__internal_1a55ed11eda4527485c041dd22f0e6cadbf0baba1b1c742f83507049d209703b->leave($__internal_1a55ed11eda4527485c041dd22f0e6cadbf0baba1b1c742f83507049d209703b_prof);

    }

    public function getTemplateName()
    {
        return "reserva/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  89 => 28,  86 => 27,  83 => 26,  79 => 24,  74 => 21,  69 => 18,  64 => 15,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
                <h3 class=\"card-header\">Sala<span class=\"pull-right glyphicon glyphicon-triangle-bottom invisible\"></span>
                    <div class=\"card-block\">
                        <blockquote class=\"card-blockquote\">
                            <p>
                                Usuário:
                                <span>{# reserva.usuario #}</span><br>
                                Sala:
                                <span>{# reserva.sala #}</span>
                                <br>
                                Data:
                                <span>{# reserva.data_hora #}</span>
                                <br>
                                Hora:
                                <span>{# reserva.hora #}</span>
                                <br>
                                Status:
                                <span>{# reserva.status #}</span>
                            </p>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"{# path('reserva_index') #}\">Voltar para a lista</a>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"{# path('reserva_edit', { 'id': reserva.idReserva }) #}\">Editar</a>
                            {{ form_start(delete_form) }}
                            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-right\" value=\"Deletar\">
                            {{ form_end(delete_form) }}


                        </blockquote>
                    </div>
            </div>
        </div>
    </div>

{% endblock %}
", "reserva/show.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\reserva\\show.html.twig");
    }
}
