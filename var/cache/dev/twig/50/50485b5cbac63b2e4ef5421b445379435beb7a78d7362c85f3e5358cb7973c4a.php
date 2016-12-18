<?php

/* sala/edit.html.twig */
class __TwigTemplate_41e300ab004bbe7a232a2ba4d063dc29fdece7ce203f24ec964461cae8cfeef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sala/edit.html.twig", 1);
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
        $__internal_32b1d5a2a631ec2e41383469e735ff338d66f0e6678d286c0bfb9da1c1ae549b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b1d5a2a631ec2e41383469e735ff338d66f0e6678d286c0bfb9da1c1ae549b->enter($__internal_32b1d5a2a631ec2e41383469e735ff338d66f0e6678d286c0bfb9da1c1ae549b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/edit.html.twig"));

        $__internal_89c12b12b29bf2e4cd7109b567f19c183c74a78483c5f55e32078d0f6a719b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c12b12b29bf2e4cd7109b567f19c183c74a78483c5f55e32078d0f6a719b3a->enter($__internal_89c12b12b29bf2e4cd7109b567f19c183c74a78483c5f55e32078d0f6a719b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b1d5a2a631ec2e41383469e735ff338d66f0e6678d286c0bfb9da1c1ae549b->leave($__internal_32b1d5a2a631ec2e41383469e735ff338d66f0e6678d286c0bfb9da1c1ae549b_prof);

        
        $__internal_89c12b12b29bf2e4cd7109b567f19c183c74a78483c5f55e32078d0f6a719b3a->leave($__internal_89c12b12b29bf2e4cd7109b567f19c183c74a78483c5f55e32078d0f6a719b3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d65d9feec3307a3919329d271db13928e58d53b9b9b5df4344695f7780ee2f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65d9feec3307a3919329d271db13928e58d53b9b9b5df4344695f7780ee2f4e->enter($__internal_d65d9feec3307a3919329d271db13928e58d53b9b9b5df4344695f7780ee2f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3998ff7998b22d183cc02050c98d0947ef56fdcd24e79a38f6c211e3e9b0eed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3998ff7998b22d183cc02050c98d0947ef56fdcd24e79a38f6c211e3e9b0eed0->enter($__internal_3998ff7998b22d183cc02050c98d0947ef56fdcd24e79a38f6c211e3e9b0eed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2 class=\"titulo-pagina\">Editar Usu&aacute;rio</h2>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <div class=\"row margin15\">
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"identificacao\">
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "identificacao", array()), 'label');
        echo "
                </label>
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "identificacao", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"capacidade\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "capacidade", array()), 'label');
        echo "
                </label>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "capacidade", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>
    <div class=\"row margin15\">
        <div class=\"col-xs-12 col-md-6\">
            <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Editar\" />
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            <a class=\"btn btn-sm btn-default pull-left\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sala_index");
        echo "\">Voltar para a lista</a>
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-left\" value=\"Deletar\">
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_3998ff7998b22d183cc02050c98d0947ef56fdcd24e79a38f6c211e3e9b0eed0->leave($__internal_3998ff7998b22d183cc02050c98d0947ef56fdcd24e79a38f6c211e3e9b0eed0_prof);

        
        $__internal_d65d9feec3307a3919329d271db13928e58d53b9b9b5df4344695f7780ee2f4e->leave($__internal_d65d9feec3307a3919329d271db13928e58d53b9b9b5df4344695f7780ee2f4e_prof);

    }

    public function getTemplateName()
    {
        return "sala/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  98 => 30,  94 => 29,  90 => 28,  80 => 21,  75 => 19,  66 => 13,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
                <label class=\"control-label col-xs-3 col-md-8\" for=\"identificacao\">
                    {{ form_label(edit_form.identificacao) }}
                </label>
                {{ form_widget(edit_form.identificacao, { 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        <div class=\"col-xs-12 col-md-3\">
            <div class=\"form-group has-feedback\">
                <label class=\"control-label col-xs-3 col-md-8\" for=\"capacidade\">
                    {{ form_label(edit_form.capacidade) }}
                </label>
                {{ form_widget(edit_form.capacidade, { 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
    </div>
    <div class=\"row margin15\">
        <div class=\"col-xs-12 col-md-6\">
            <input type=\"submit\" class=\"btn btn-primary pull-right\" value=\"Editar\" />
            {{ form_end(edit_form) }}
            <a class=\"btn btn-sm btn-default pull-left\" href=\"{{ path('sala_index') }}\">Voltar para a lista</a>
            {{ form_start(delete_form) }}
            <input type=\"submit\" class=\"btn btn-sm btn-danger pull-left\" value=\"Deletar\">
            {{ form_end(delete_form) }}
        </div>
    </div>
{% endblock %}
", "sala/edit.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\sala\\edit.html.twig");
    }
}
