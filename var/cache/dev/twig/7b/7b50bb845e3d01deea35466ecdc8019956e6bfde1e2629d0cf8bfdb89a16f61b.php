<?php

/* usuario/usuarios.html.twig */
class __TwigTemplate_2981c5af28de15570cfff8a63f92305232a99ed0e3f3f455fb32aae266780d93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/usuarios.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05c4170b2bfb7b8f77e447d7010076ae4ccdece9e18a991d80a1e92286d6d2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c4170b2bfb7b8f77e447d7010076ae4ccdece9e18a991d80a1e92286d6d2ad->enter($__internal_05c4170b2bfb7b8f77e447d7010076ae4ccdece9e18a991d80a1e92286d6d2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/usuarios.html.twig"));

        $__internal_99ade231354a07f27e5484cf856890afa789c53f1f721ba4beb06c1710a5a0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ade231354a07f27e5484cf856890afa789c53f1f721ba4beb06c1710a5a0a7->enter($__internal_99ade231354a07f27e5484cf856890afa789c53f1f721ba4beb06c1710a5a0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/usuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c4170b2bfb7b8f77e447d7010076ae4ccdece9e18a991d80a1e92286d6d2ad->leave($__internal_05c4170b2bfb7b8f77e447d7010076ae4ccdece9e18a991d80a1e92286d6d2ad_prof);

        
        $__internal_99ade231354a07f27e5484cf856890afa789c53f1f721ba4beb06c1710a5a0a7->leave($__internal_99ade231354a07f27e5484cf856890afa789c53f1f721ba4beb06c1710a5a0a7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3737f3073a9ccf1fb45a1bb9e38c9c90be7e331daa55054f954763712e44e46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3737f3073a9ccf1fb45a1bb9e38c9c90be7e331daa55054f954763712e44e46c->enter($__internal_3737f3073a9ccf1fb45a1bb9e38c9c90be7e331daa55054f954763712e44e46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d78f6be91c8f8cfaedf8c40739bd0ce2826570963dfb8e83072542ba211bfd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78f6be91c8f8cfaedf8c40739bd0ce2826570963dfb8e83072542ba211bfd76->enter($__internal_d78f6be91c8f8cfaedf8c40739bd0ce2826570963dfb8e83072542ba211bfd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Usu&aacute;rio";
        
        $__internal_d78f6be91c8f8cfaedf8c40739bd0ce2826570963dfb8e83072542ba211bfd76->leave($__internal_d78f6be91c8f8cfaedf8c40739bd0ce2826570963dfb8e83072542ba211bfd76_prof);

        
        $__internal_3737f3073a9ccf1fb45a1bb9e38c9c90be7e331daa55054f954763712e44e46c->leave($__internal_3737f3073a9ccf1fb45a1bb9e38c9c90be7e331daa55054f954763712e44e46c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c14c44150262d556b84438bd5e796bfc6e6784027dbdac5746f1d4d07802b153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14c44150262d556b84438bd5e796bfc6e6784027dbdac5746f1d4d07802b153->enter($__internal_c14c44150262d556b84438bd5e796bfc6e6784027dbdac5746f1d4d07802b153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0511cb438ae562ab9a554e5e66d8378bd44a97e7b416531ecc56068d1e35dbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0511cb438ae562ab9a554e5e66d8378bd44a97e7b416531ecc56068d1e35dbff->enter($__internal_0511cb438ae562ab9a554e5e66d8378bd44a97e7b416531ecc56068d1e35dbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        <ul>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 8
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "idUsuario", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nome", array()), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </ul>

    ";
        
        $__internal_0511cb438ae562ab9a554e5e66d8378bd44a97e7b416531ecc56068d1e35dbff->leave($__internal_0511cb438ae562ab9a554e5e66d8378bd44a97e7b416531ecc56068d1e35dbff_prof);

        
        $__internal_c14c44150262d556b84438bd5e796bfc6e6784027dbdac5746f1d4d07802b153->leave($__internal_c14c44150262d556b84438bd5e796bfc6e6784027dbdac5746f1d4d07802b153_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dd6854c0a573e781347505d9de1cc10677f97cc3a3b0f6d2dbec202d2718444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd6854c0a573e781347505d9de1cc10677f97cc3a3b0f6d2dbec202d2718444->enter($__internal_0dd6854c0a573e781347505d9de1cc10677f97cc3a3b0f6d2dbec202d2718444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bbfb6aa65720d3b58d427d6b896364f8a46e2dd5761d9f44e6b64fa96821ffdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfb6aa65720d3b58d427d6b896364f8a46e2dd5761d9f44e6b64fa96821ffdf->enter($__internal_bbfb6aa65720d3b58d427d6b896364f8a46e2dd5761d9f44e6b64fa96821ffdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bbfb6aa65720d3b58d427d6b896364f8a46e2dd5761d9f44e6b64fa96821ffdf->leave($__internal_bbfb6aa65720d3b58d427d6b896364f8a46e2dd5761d9f44e6b64fa96821ffdf_prof);

        
        $__internal_0dd6854c0a573e781347505d9de1cc10677f97cc3a3b0f6d2dbec202d2718444->leave($__internal_0dd6854c0a573e781347505d9de1cc10677f97cc3a3b0f6d2dbec202d2718444_prof);

    }

    public function getTemplateName()
    {
        return "usuario/usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 13,  88 => 10,  77 => 8,  73 => 7,  69 => 5,  60 => 4,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends 'base.html.twig' %}
    {% block title %}Usu&aacute;rio{% endblock %}

    {% block body %}

        <ul>
            {%  for usuario in usuarios %}
                <li><a href=\"{{ usuario.idUsuario }}\">{{ usuario.nome }}</li>
            {%  endfor %}
        </ul>

    {% endblock %}
    {% block javascripts %}{% endblock %}

", "usuario/usuarios.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\usuario\\usuarios.html.twig");
    }
}
