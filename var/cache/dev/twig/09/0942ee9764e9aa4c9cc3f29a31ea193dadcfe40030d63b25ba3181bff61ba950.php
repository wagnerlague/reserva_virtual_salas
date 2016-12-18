<?php

/* sala/new.html.twig */
class __TwigTemplate_cdfd3760e29b2e3a5b158460fc2872104a827b23ae667289739ad24c6d864749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sala/new.html.twig", 1);
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
        $__internal_0d507e0cc41361e1bc877b3068a1887eb01798f7eb828a76212fa2f41595eba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d507e0cc41361e1bc877b3068a1887eb01798f7eb828a76212fa2f41595eba0->enter($__internal_0d507e0cc41361e1bc877b3068a1887eb01798f7eb828a76212fa2f41595eba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/new.html.twig"));

        $__internal_3fd6e1115c35ee3175b9da64cc9126ad5aaeeadcc089de1b1ae92f2bde159107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd6e1115c35ee3175b9da64cc9126ad5aaeeadcc089de1b1ae92f2bde159107->enter($__internal_3fd6e1115c35ee3175b9da64cc9126ad5aaeeadcc089de1b1ae92f2bde159107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d507e0cc41361e1bc877b3068a1887eb01798f7eb828a76212fa2f41595eba0->leave($__internal_0d507e0cc41361e1bc877b3068a1887eb01798f7eb828a76212fa2f41595eba0_prof);

        
        $__internal_3fd6e1115c35ee3175b9da64cc9126ad5aaeeadcc089de1b1ae92f2bde159107->leave($__internal_3fd6e1115c35ee3175b9da64cc9126ad5aaeeadcc089de1b1ae92f2bde159107_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43bad684243f8455a9ea393a1a412e2cf4e17a3ba9331ab4dca4d76cca24be5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43bad684243f8455a9ea393a1a412e2cf4e17a3ba9331ab4dca4d76cca24be5d->enter($__internal_43bad684243f8455a9ea393a1a412e2cf4e17a3ba9331ab4dca4d76cca24be5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11ed26be3d8fcfd20842a2f3dcf8085de6b022b15fb1787813ff9ef3a1f522c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ed26be3d8fcfd20842a2f3dcf8085de6b022b15fb1787813ff9ef3a1f522c8->enter($__internal_11ed26be3d8fcfd20842a2f3dcf8085de6b022b15fb1787813ff9ef3a1f522c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2 class=\"titulo-pagina\">Criar Sala</h2>
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"row margin15\">
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"identificacao\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificacao", array()), 'label');
        echo "
            </label>
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identificacao", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacidade", array()), 'label');
        echo "
            </label>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capacidade", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
</div>
<div class=\"row margin15\">
    <div class=\"col-xs-12 col-md-6\">
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Criar\" />
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        <ul>
            <li>
                <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sala_index");
        echo "\">Voltar a lista</a>
            </li>
        </ul>
    </div>
</div>
";
        
        $__internal_11ed26be3d8fcfd20842a2f3dcf8085de6b022b15fb1787813ff9ef3a1f522c8->leave($__internal_11ed26be3d8fcfd20842a2f3dcf8085de6b022b15fb1787813ff9ef3a1f522c8_prof);

        
        $__internal_43bad684243f8455a9ea393a1a412e2cf4e17a3ba9331ab4dca4d76cca24be5d->leave($__internal_43bad684243f8455a9ea393a1a412e2cf4e17a3ba9331ab4dca4d76cca24be5d_prof);

    }

    public function getTemplateName()
    {
        return "sala/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  90 => 28,  80 => 21,  75 => 19,  66 => 13,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

<h2 class=\"titulo-pagina\">Criar Sala</h2>
{{ form_start(form) }}
<div class=\"row margin15\">
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"identificacao\">
                {{ form_label(form.identificacao) }}
            </label>
                {{ form_widget(form.identificacao, { 'attr': {'class': 'form-control'} }) }}
        </div>
    </div>
    <div class=\"col-xs-12 col-md-3\">
        <div class=\"form-group has-feedback\">
            <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                {{ form_label(form.capacidade) }}
            </label>
            {{ form_widget(form.capacidade, { 'attr': {'class': 'form-control'} }) }}
        </div>
    </div>
</div>
<div class=\"row margin15\">
    <div class=\"col-xs-12 col-md-6\">
        <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Criar\" />
        {{ form_end(form) }}
        <ul>
            <li>
                <a href=\"{{ path('sala_index') }}\">Voltar a lista</a>
            </li>
        </ul>
    </div>
</div>
{% endblock %}
", "sala/new.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\sala\\new.html.twig");
    }
}
