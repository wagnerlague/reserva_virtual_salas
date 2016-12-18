<?php

/* sala/show.html.twig */
class __TwigTemplate_809e6dd65170f2452215b8bba8e6482f89d6df7a0b3b0daf151bf6baeddd01a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sala/show.html.twig", 1);
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
        $__internal_4b18eccd8e4e87fcd04dbc5cbfab4ebc37f7070e7c3b2e219a5319a04d66c946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b18eccd8e4e87fcd04dbc5cbfab4ebc37f7070e7c3b2e219a5319a04d66c946->enter($__internal_4b18eccd8e4e87fcd04dbc5cbfab4ebc37f7070e7c3b2e219a5319a04d66c946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/show.html.twig"));

        $__internal_17af8d173a52730aa613329bb303ddfae44a1fb4ce56adfe00459373cac2e562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17af8d173a52730aa613329bb303ddfae44a1fb4ce56adfe00459373cac2e562->enter($__internal_17af8d173a52730aa613329bb303ddfae44a1fb4ce56adfe00459373cac2e562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b18eccd8e4e87fcd04dbc5cbfab4ebc37f7070e7c3b2e219a5319a04d66c946->leave($__internal_4b18eccd8e4e87fcd04dbc5cbfab4ebc37f7070e7c3b2e219a5319a04d66c946_prof);

        
        $__internal_17af8d173a52730aa613329bb303ddfae44a1fb4ce56adfe00459373cac2e562->leave($__internal_17af8d173a52730aa613329bb303ddfae44a1fb4ce56adfe00459373cac2e562_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fe88a773b5904c5122797d5eb5f4271f778fce1db21c5fc85fef26c4774376d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe88a773b5904c5122797d5eb5f4271f778fce1db21c5fc85fef26c4774376d->enter($__internal_0fe88a773b5904c5122797d5eb5f4271f778fce1db21c5fc85fef26c4774376d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_244fee947add3045d640364ac8c78d000a8dc5a3475ab566306ef37265a6ead1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244fee947add3045d640364ac8c78d000a8dc5a3475ab566306ef37265a6ead1->enter($__internal_244fee947add3045d640364ac8c78d000a8dc5a3475ab566306ef37265a6ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row row-cards\">
        <div class=\"col-md-6 pading-1 col-md-offset-1\">
            <div class=\"card card-inverse card-info text-xs-center\">
                <h3 class=\"card-header\">Sala<span class=\"pull-right glyphicon glyphicon-triangle-bottom invisible\"></span>
                    <div class=\"card-block\">
                        <blockquote class=\"card-blockquote\">
                            <p>
                                Identificacao:
                                <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sala"]) ? $context["sala"] : $this->getContext($context, "sala")), "identificacao", array()), "html", null, true);
        echo "</span><br>
                                Capacidade:
                                <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sala"]) ? $context["sala"] : $this->getContext($context, "sala")), "capacidade", array()), "html", null, true);
        echo "</span>
                                <br>
                            </p>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sala_index");
        echo "\">Voltar para a lista</a>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sala_edit", array("id" => $this->getAttribute((isset($context["sala"]) ? $context["sala"] : $this->getContext($context, "sala")), "idSala", array()))), "html", null, true);
        echo "\">Editar</a>
                            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-right\" value=\"Deletar\">
                            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </blockquote>
                    </div>
            </div>
        </div>
    </div>

";
        
        $__internal_244fee947add3045d640364ac8c78d000a8dc5a3475ab566306ef37265a6ead1->leave($__internal_244fee947add3045d640364ac8c78d000a8dc5a3475ab566306ef37265a6ead1_prof);

        
        $__internal_0fe88a773b5904c5122797d5eb5f4271f778fce1db21c5fc85fef26c4774376d->leave($__internal_0fe88a773b5904c5122797d5eb5f4271f778fce1db21c5fc85fef26c4774376d_prof);

    }

    public function getTemplateName()
    {
        return "sala/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  79 => 20,  75 => 19,  71 => 18,  65 => 15,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
                                Identificacao:
                                <span>{{ sala.identificacao }}</span><br>
                                Capacidade:
                                <span>{{ sala.capacidade }}</span>
                                <br>
                            </p>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"{{ path('sala_index') }}\">Voltar para a lista</a>
                            <a class=\"btn btn-sm btn-default pull-left\" href=\"{{ path('sala_edit', { 'id': sala.idSala }) }}\">Editar</a>
                            {{ form_start(delete_form) }}
                            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-right\" value=\"Deletar\">
                            {{ form_end(delete_form) }}
                        </blockquote>
                    </div>
            </div>
        </div>
    </div>

{% endblock %}
", "sala/show.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\sala\\show.html.twig");
    }
}
