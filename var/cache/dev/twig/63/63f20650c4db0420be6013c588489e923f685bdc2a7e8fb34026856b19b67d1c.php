<?php

/* reserva/new.html.twig */
class __TwigTemplate_e8788573e10a9c14f55d665d516f82d4e0b60812dcfaa99a89e0d4931da12729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reserva/new.html.twig", 1);
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
        $__internal_f22738e4518adaf56fd6f1f6f5d546b08a7d3fabcd93fcbee9ce8b01cc5ad564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22738e4518adaf56fd6f1f6f5d546b08a7d3fabcd93fcbee9ce8b01cc5ad564->enter($__internal_f22738e4518adaf56fd6f1f6f5d546b08a7d3fabcd93fcbee9ce8b01cc5ad564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reserva/new.html.twig"));

        $__internal_dadd6a959ac7219478b64e1abc902f0bd80aac826011d5bf0019183c88a9e903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadd6a959ac7219478b64e1abc902f0bd80aac826011d5bf0019183c88a9e903->enter($__internal_dadd6a959ac7219478b64e1abc902f0bd80aac826011d5bf0019183c88a9e903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reserva/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f22738e4518adaf56fd6f1f6f5d546b08a7d3fabcd93fcbee9ce8b01cc5ad564->leave($__internal_f22738e4518adaf56fd6f1f6f5d546b08a7d3fabcd93fcbee9ce8b01cc5ad564_prof);

        
        $__internal_dadd6a959ac7219478b64e1abc902f0bd80aac826011d5bf0019183c88a9e903->leave($__internal_dadd6a959ac7219478b64e1abc902f0bd80aac826011d5bf0019183c88a9e903_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb79d44d5329e03001e1f7ac84e99ded1ec900fa76b094c4914c2a825ee1a46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb79d44d5329e03001e1f7ac84e99ded1ec900fa76b094c4914c2a825ee1a46d->enter($__internal_cb79d44d5329e03001e1f7ac84e99ded1ec900fa76b094c4914c2a825ee1a46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de4c4bfc548bbdc5f301e5dbcd0c37f05862ce73564c92fc194ed730502be588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4c4bfc548bbdc5f301e5dbcd0c37f05862ce73564c92fc194ed730502be588->enter($__internal_de4c4bfc548bbdc5f301e5dbcd0c37f05862ce73564c92fc194ed730502be588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2 class=\"titulo-pagina\">Criar Reserva</h2>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row margin15\">
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"id\">
                    idreserva
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"O Nome do Cliente deve conter no minimo 5 carateres.\"></span>
                </label>
                <input type=\"text\" placeholder=\"id\">
                <span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                    Usuario
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Data do cadastro, informado pelo sistema.\"></span>
                </label>
                <input type=\"text\" placeholder=\"usuario\">
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"sala\">
                    Sala
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>
                <input type=\"text\" placeholder=\"sala\">
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"data\">
                    Data
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>
                <input type=\"date\">
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"horario\">
                    Horário
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>
                <select id=\"hora\" class=\"form-control\" validated=\"true\">
                    <option value=\"00:00\">00:00</option>
                    <option value=\"01:00\">01:00</option>
                    <option value=\"02:00\">02:00</option>
                    <option value=\"03:00\">03:00</option>
                    <option value=\"04:00\">04:00</option>
                    <option value=\"05:00\">05:00</option>
                    <option value=\"06:00\">06:00</option>
                    <option value=\"07:00\">07:00</option>
                    <option value=\"08:00\">08:00</option>
                    <option value=\"09:00\">09:00</option>
                    <option value=\"10:00\">10:00</option>
                    <option value=\"11:00\">11:00</option>
                    <option value=\"12:00\">12:00</option>
                    <option value=\"13:00\">13:00</option>
                    <option value=\"14:00\">14:00</option>
                    <option value=\"15:00\">15:00</option>
                    <option value=\"16:00\">16:00</option>
                    <option value=\"17:00\">17:00</option>
                    <option value=\"18:00\">18:00</option>
                    <option value=\"19:00\">19:00</option>
                    <option value=\"20:00\">20:00</option>
                    <option value=\"21:00\">22:00</option>
                    <option value=\"23:00\">23:00</option>
                </select>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"status\">
                    Status
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>

                <select id=\"hora\" class=\"form-control\" validated=\"true\">
                    <option value=\"A\">Ativo</option>
                    <option value=\"I\">Inativo</option>
                </select>
            </div>
        </div>

    </div>
    <div class=\"col-xs-12 col-md-12\">
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Criar\" />
    </div>
    ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserva_index");
        echo "\">Voltar para a Lista</a>
        </li>
    </ul>

";
        
        $__internal_de4c4bfc548bbdc5f301e5dbcd0c37f05862ce73564c92fc194ed730502be588->leave($__internal_de4c4bfc548bbdc5f301e5dbcd0c37f05862ce73564c92fc194ed730502be588_prof);

        
        $__internal_cb79d44d5329e03001e1f7ac84e99ded1ec900fa76b094c4914c2a825ee1a46d->leave($__internal_cb79d44d5329e03001e1f7ac84e99ded1ec900fa76b094c4914c2a825ee1a46d_prof);

    }

    public function getTemplateName()
    {
        return "reserva/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 105,  151 => 101,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<h2 class=\"titulo-pagina\">Criar Reserva</h2>
    {{ form_start(form) }}
    <div class=\"row margin15\">
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"id\">
                    idreserva
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"O Nome do Cliente deve conter no minimo 5 carateres.\"></span>
                </label>
                <input type=\"text\" placeholder=\"id\">
                <span class=\"glyphicon form-control-feedback\" aria-hidden=\"true\"></span>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                    Usuario
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Data do cadastro, informado pelo sistema.\"></span>
                </label>
                <input type=\"text\" placeholder=\"usuario\">
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"sala\">
                    Sala
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>
                <input type=\"text\" placeholder=\"sala\">
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"data\">
                    Data
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>
                <input type=\"date\">
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"horario\">
                    Horário
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>
                <select id=\"hora\" class=\"form-control\" validated=\"true\">
                    <option value=\"00:00\">00:00</option>
                    <option value=\"01:00\">01:00</option>
                    <option value=\"02:00\">02:00</option>
                    <option value=\"03:00\">03:00</option>
                    <option value=\"04:00\">04:00</option>
                    <option value=\"05:00\">05:00</option>
                    <option value=\"06:00\">06:00</option>
                    <option value=\"07:00\">07:00</option>
                    <option value=\"08:00\">08:00</option>
                    <option value=\"09:00\">09:00</option>
                    <option value=\"10:00\">10:00</option>
                    <option value=\"11:00\">11:00</option>
                    <option value=\"12:00\">12:00</option>
                    <option value=\"13:00\">13:00</option>
                    <option value=\"14:00\">14:00</option>
                    <option value=\"15:00\">15:00</option>
                    <option value=\"16:00\">16:00</option>
                    <option value=\"17:00\">17:00</option>
                    <option value=\"18:00\">18:00</option>
                    <option value=\"19:00\">19:00</option>
                    <option value=\"20:00\">20:00</option>
                    <option value=\"21:00\">22:00</option>
                    <option value=\"23:00\">23:00</option>
                </select>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"status\">
                    Status
                    <span class=\"red\">* </span>
                    <span class=\"glyphicon glyphicon-info-sign pull-right pointer\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Automação a qual este lead será direcionado para receber emails.\"></span>
                </label>

                <select id=\"hora\" class=\"form-control\" validated=\"true\">
                    <option value=\"A\">Ativo</option>
                    <option value=\"I\">Inativo</option>
                </select>
            </div>
        </div>

    </div>
    <div class=\"col-xs-12 col-md-12\">
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Criar\" />
    </div>
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reserva_index') }}\">Voltar para a Lista</a>
        </li>
    </ul>

{% endblock %}", "reserva/new.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\reserva\\new.html.twig");
    }
}
