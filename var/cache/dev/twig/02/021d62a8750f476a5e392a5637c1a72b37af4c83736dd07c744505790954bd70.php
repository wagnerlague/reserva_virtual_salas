<?php

/* usuario/edit.html.twig */
class __TwigTemplate_1ae0a2ce89dfd4f1f03ebc635ee6db10ddd25d05b6c930627a7a26e16b25f26b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/edit.html.twig", 1);
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
        $__internal_1d194a1f6047c1055dc9aa9da645439d0e56ba3dc81354094009850b6dcfcf8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d194a1f6047c1055dc9aa9da645439d0e56ba3dc81354094009850b6dcfcf8e->enter($__internal_1d194a1f6047c1055dc9aa9da645439d0e56ba3dc81354094009850b6dcfcf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/edit.html.twig"));

        $__internal_6b3d64808a5bfdb0e7f3da864c6d3e77c4c90d2ee359ec54524787eca2dcdc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3d64808a5bfdb0e7f3da864c6d3e77c4c90d2ee359ec54524787eca2dcdc13->enter($__internal_6b3d64808a5bfdb0e7f3da864c6d3e77c4c90d2ee359ec54524787eca2dcdc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d194a1f6047c1055dc9aa9da645439d0e56ba3dc81354094009850b6dcfcf8e->leave($__internal_1d194a1f6047c1055dc9aa9da645439d0e56ba3dc81354094009850b6dcfcf8e_prof);

        
        $__internal_6b3d64808a5bfdb0e7f3da864c6d3e77c4c90d2ee359ec54524787eca2dcdc13->leave($__internal_6b3d64808a5bfdb0e7f3da864c6d3e77c4c90d2ee359ec54524787eca2dcdc13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ae3dd728ef1746dd8f2a8c2fea6f2013f4cab7d6a7adb98a241c3713b16ef37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae3dd728ef1746dd8f2a8c2fea6f2013f4cab7d6a7adb98a241c3713b16ef37->enter($__internal_0ae3dd728ef1746dd8f2a8c2fea6f2013f4cab7d6a7adb98a241c3713b16ef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7853ccc1571a00abd4718c8a21ef573315df4f8fc2b003d2071b3478eb3a1529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7853ccc1571a00abd4718c8a21ef573315df4f8fc2b003d2071b3478eb3a1529->enter($__internal_7853ccc1571a00abd4718c8a21ef573315df4f8fc2b003d2071b3478eb3a1529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"titulo-pagina\">Editar Usu&aacute;rio</h2>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <div class=\"row margin15\">
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"nome\">
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nome", array()), 'label');
        echo "
                </label>
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nome", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'label');
        echo "
                </label>
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"senha\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "senha", array()), 'label');
        echo "
                </label>
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "senha", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>
    <div class=\"row margin15\">
        <div class=\"col-xs-12 col-md-9\">
            <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Editar\" />
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            <a class=\"btn btn-sm btn-default pull-left\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Voltar para a lista</a>
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-left\" value=\"Deletar\">
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_7853ccc1571a00abd4718c8a21ef573315df4f8fc2b003d2071b3478eb3a1529->leave($__internal_7853ccc1571a00abd4718c8a21ef573315df4f8fc2b003d2071b3478eb3a1529_prof);

        
        $__internal_0ae3dd728ef1746dd8f2a8c2fea6f2013f4cab7d6a7adb98a241c3713b16ef37->leave($__internal_0ae3dd728ef1746dd8f2a8c2fea6f2013f4cab7d6a7adb98a241c3713b16ef37_prof);

    }

    public function getTemplateName()
    {
        return "usuario/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  111 => 37,  107 => 36,  103 => 35,  93 => 28,  88 => 26,  79 => 20,  74 => 18,  65 => 12,  60 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h2 class=\"titulo-pagina\">Editar Usu&aacute;rio</h2>
    {{ form_start(edit_form) }}
    <div class=\"row margin15\">
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"nome\">
                    {{ form_label(edit_form.nome) }}
                </label>
                {{ form_widget(edit_form.nome, { 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"usuario\">
                    {{ form_label(edit_form.usuario) }}
                </label>
                {{ form_widget(edit_form.usuario, { 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"senha\">
                    {{ form_label(edit_form.senha) }}
                </label>
                {{ form_widget(edit_form.senha, { 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
    </div>
    <div class=\"row margin15\">
        <div class=\"col-xs-12 col-md-9\">
            <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Editar\" />
            {{ form_end(edit_form) }}
            <a class=\"btn btn-sm btn-default pull-left\" href=\"{{ path('usuario_index') }}\">Voltar para a lista</a>
            {{ form_start(delete_form) }}
            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-left\" value=\"Deletar\">
            {{ form_end(delete_form) }}
        </div>
    </div>
{% endblock %}
", "usuario/edit.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\usuario\\edit.html.twig");
    }
}
