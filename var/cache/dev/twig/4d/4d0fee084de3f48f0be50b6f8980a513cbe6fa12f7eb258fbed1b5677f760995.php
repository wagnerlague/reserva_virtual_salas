<?php

/* usuario/index.html.twig */
class __TwigTemplate_b3afae42e531a3e9ddf3851e974df441cd2b757cec5d0955ccddf55e39fba4e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/index.html.twig", 1);
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
        $__internal_78b9cce84546d51a56812087e15345970a03cff1f4b723b43aafced4570dc365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b9cce84546d51a56812087e15345970a03cff1f4b723b43aafced4570dc365->enter($__internal_78b9cce84546d51a56812087e15345970a03cff1f4b723b43aafced4570dc365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $__internal_4cebff044bd4a6d4a12011be478f09b10fa09bcf5cc237089dda68dcbf481b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cebff044bd4a6d4a12011be478f09b10fa09bcf5cc237089dda68dcbf481b25->enter($__internal_4cebff044bd4a6d4a12011be478f09b10fa09bcf5cc237089dda68dcbf481b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78b9cce84546d51a56812087e15345970a03cff1f4b723b43aafced4570dc365->leave($__internal_78b9cce84546d51a56812087e15345970a03cff1f4b723b43aafced4570dc365_prof);

        
        $__internal_4cebff044bd4a6d4a12011be478f09b10fa09bcf5cc237089dda68dcbf481b25->leave($__internal_4cebff044bd4a6d4a12011be478f09b10fa09bcf5cc237089dda68dcbf481b25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d15e1b8570a065bf5695a9b5aa3c1500aabfdab9bc417631f37e8076014df47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d15e1b8570a065bf5695a9b5aa3c1500aabfdab9bc417631f37e8076014df47->enter($__internal_1d15e1b8570a065bf5695a9b5aa3c1500aabfdab9bc417631f37e8076014df47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efa0397ffc02707a071341612d83838a2014b783bca780c266627d491330c1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa0397ffc02707a071341612d83838a2014b783bca780c266627d491330c1d3->enter($__internal_efa0397ffc02707a071341612d83838a2014b783bca780c266627d491330c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron bg-white pading-container\">

        <h2 class=\"titulo-pagina\">Lista de Usuários</h2>

        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 overflow\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"thead-inverse\">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th class=\"text-center\">Usuário</th>
                        <th class=\"text-center\">Senha</th>
                        <th class=\"text-center\">Visalizar</th>
                        <th class=\"text-center\">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 23
            echo "                        <tr>
                            <th scope=\"row\"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "idUsuario", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "idUsuario", array()), "html", null, true);
            echo "</a></th>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nome", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center pointer\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "usuario", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center pointer\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "senha", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center pointer\"> <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "idUsuario", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-eye-open\"></span></a></td>
                            <td class=\"text-center pointer\"> <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_edit", array("id" => $this->getAttribute($context["usuario"], "idUsuario", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12 overflow\">
            <ul>
                <li>
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_new");
        echo "\">Criar novo usuário</a>
                </li>
            </ul>
        </div>
    </div>

";
        
        $__internal_efa0397ffc02707a071341612d83838a2014b783bca780c266627d491330c1d3->leave($__internal_efa0397ffc02707a071341612d83838a2014b783bca780c266627d491330c1d3_prof);

        
        $__internal_1d15e1b8570a065bf5695a9b5aa3c1500aabfdab9bc417631f37e8076014df47->leave($__internal_1d15e1b8570a065bf5695a9b5aa3c1500aabfdab9bc417631f37e8076014df47_prof);

    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  107 => 32,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  76 => 24,  73 => 23,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"jumbotron bg-white pading-container\">

        <h2 class=\"titulo-pagina\">Lista de Usuários</h2>

        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 overflow\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"thead-inverse\">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th class=\"text-center\">Usuário</th>
                        <th class=\"text-center\">Senha</th>
                        <th class=\"text-center\">Visalizar</th>
                        <th class=\"text-center\">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for usuario in usuarios %}
                        <tr>
                            <th scope=\"row\"><a href=\"{{ path('usuario_show', { 'id': usuario.idUsuario }) }}\">{{ usuario.idUsuario }}</a></th>
                            <td>{{ usuario.nome }}</td>
                            <td class=\"text-center pointer\">{{ usuario.usuario }}</td>
                            <td class=\"text-center pointer\">{{ usuario.senha }}</td>
                            <td class=\"text-center pointer\"> <a href=\"{{ path('usuario_show', { 'id': usuario.idUsuario }) }}\"><span class=\"glyphicon glyphicon-eye-open\"></span></a></td>
                            <td class=\"text-center pointer\"> <a href=\"{{ path('usuario_edit', { 'id': usuario.idUsuario }) }}\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12 overflow\">
            <ul>
                <li>
                    <a href=\"{{ path('usuario_new') }}\">Criar novo usuário</a>
                </li>
            </ul>
        </div>
    </div>

{% endblock %}
", "usuario/index.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\usuario\\index.html.twig");
    }
}
