<?php

/* reserva/index.html.twig */
class __TwigTemplate_d9c8757530fd58cbb9d43de87cfec6b67b06d470d25568cb85d643e60b5ed378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reserva/index.html.twig", 1);
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
        $__internal_09d57c62c15cc3592d98cb5f911b86063a92da415689c187a579b138c73e752d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d57c62c15cc3592d98cb5f911b86063a92da415689c187a579b138c73e752d->enter($__internal_09d57c62c15cc3592d98cb5f911b86063a92da415689c187a579b138c73e752d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reserva/index.html.twig"));

        $__internal_504564fef212bec3121cca10e8270b6f9fb28c589c43ffdc0b9fce6d8b318ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504564fef212bec3121cca10e8270b6f9fb28c589c43ffdc0b9fce6d8b318ebf->enter($__internal_504564fef212bec3121cca10e8270b6f9fb28c589c43ffdc0b9fce6d8b318ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reserva/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d57c62c15cc3592d98cb5f911b86063a92da415689c187a579b138c73e752d->leave($__internal_09d57c62c15cc3592d98cb5f911b86063a92da415689c187a579b138c73e752d_prof);

        
        $__internal_504564fef212bec3121cca10e8270b6f9fb28c589c43ffdc0b9fce6d8b318ebf->leave($__internal_504564fef212bec3121cca10e8270b6f9fb28c589c43ffdc0b9fce6d8b318ebf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1f51270a921cea4ab8da495214119eaf464cd74b1463826256635829e876368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f51270a921cea4ab8da495214119eaf464cd74b1463826256635829e876368->enter($__internal_f1f51270a921cea4ab8da495214119eaf464cd74b1463826256635829e876368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b40d337c0e1fdaab22e88d237a81204f467ba4e72d82cb1e24e5671d5e8a332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b40d337c0e1fdaab22e88d237a81204f467ba4e72d82cb1e24e5671d5e8a332->enter($__internal_0b40d337c0e1fdaab22e88d237a81204f467ba4e72d82cb1e24e5671d5e8a332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_0b40d337c0e1fdaab22e88d237a81204f467ba4e72d82cb1e24e5671d5e8a332->leave($__internal_0b40d337c0e1fdaab22e88d237a81204f467ba4e72d82cb1e24e5671d5e8a332_prof);

        
        $__internal_f1f51270a921cea4ab8da495214119eaf464cd74b1463826256635829e876368->leave($__internal_f1f51270a921cea4ab8da495214119eaf464cd74b1463826256635829e876368_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5caeb6ae8c7991812bd953933e0236f2fe815a2c0b29cba5429461bfd9964ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5caeb6ae8c7991812bd953933e0236f2fe815a2c0b29cba5429461bfd9964ea->enter($__internal_e5caeb6ae8c7991812bd953933e0236f2fe815a2c0b29cba5429461bfd9964ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_862533c8d271b0b0cd1623c6d2ef50aaba9f75caf3b4c38db5e7136adbf7f5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862533c8d271b0b0cd1623c6d2ef50aaba9f75caf3b4c38db5e7136adbf7f5de->enter($__internal_862533c8d271b0b0cd1623c6d2ef50aaba9f75caf3b4c38db5e7136adbf7f5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        <div class=\"jumbotron bg-white pading-container\">
            <h2 class=\"titulo-pagina\">Lista de Reservas</h2>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 overflow\">
                    <table class=\"table table-striped table-hover\">
                        <thead class=\"thead-inverse\">
                        <tr>
                            <th>#</th>
                            <th>Usuário</th>
                            <th class=\"text-center\">Sala</th>
                            <th class=\"text-center\">Data</th>
                            <th class=\"text-center\">Hora</th>
                            <th class=\"text-center\">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
            // line 22
            echo "                        <tr>
                            <th scope=\"row\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserva_show", array("id" => $this->getAttribute($context["reserva"], "idReserva", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "idReserva", array()), "html", null, true);
            echo "</a></th>
                            <td>";
            // line 24
            echo "</td>
                            <td class=\"text-center pointer\">";
            // line 25
            echo "</td>
                            <td class=\"text-center pointer\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "dataHora", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td class=\"text-center pointer\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "hora", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center pointer\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "status", array()), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 overflow\">
                <ul>
                    <li>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserva_new");
        echo "\">Criar nova reserva</a>
                    </li>
                </ul>
            </div>
        </div>

    ";
        
        $__internal_862533c8d271b0b0cd1623c6d2ef50aaba9f75caf3b4c38db5e7136adbf7f5de->leave($__internal_862533c8d271b0b0cd1623c6d2ef50aaba9f75caf3b4c38db5e7136adbf7f5de_prof);

        
        $__internal_e5caeb6ae8c7991812bd953933e0236f2fe815a2c0b29cba5429461bfd9964ea->leave($__internal_e5caeb6ae8c7991812bd953933e0236f2fe815a2c0b29cba5429461bfd9964ea_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b79a9554da7069b5273958cc6763a3c3876c6e7f070f7f872661d4248622e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b79a9554da7069b5273958cc6763a3c3876c6e7f070f7f872661d4248622e3e->enter($__internal_3b79a9554da7069b5273958cc6763a3c3876c6e7f070f7f872661d4248622e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ff21dd17ef123ac567ca9f3cdb46d6988af0bc19daafee04d70939de31117008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff21dd17ef123ac567ca9f3cdb46d6988af0bc19daafee04d70939de31117008->enter($__internal_ff21dd17ef123ac567ca9f3cdb46d6988af0bc19daafee04d70939de31117008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ff21dd17ef123ac567ca9f3cdb46d6988af0bc19daafee04d70939de31117008->leave($__internal_ff21dd17ef123ac567ca9f3cdb46d6988af0bc19daafee04d70939de31117008_prof);

        
        $__internal_3b79a9554da7069b5273958cc6763a3c3876c6e7f070f7f872661d4248622e3e->leave($__internal_3b79a9554da7069b5273958cc6763a3c3876c6e7f070f7f872661d4248622e3e_prof);

    }

    public function getTemplateName()
    {
        return "reserva/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  134 => 40,  123 => 31,  114 => 28,  110 => 27,  106 => 26,  103 => 25,  100 => 24,  94 => 23,  91 => 22,  87 => 21,  69 => 5,  60 => 4,  42 => 2,  11 => 1,);
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
    {% block title %}Home{% endblock %}

    {% block body %}
        <div class=\"jumbotron bg-white pading-container\">
            <h2 class=\"titulo-pagina\">Lista de Reservas</h2>
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 overflow\">
                    <table class=\"table table-striped table-hover\">
                        <thead class=\"thead-inverse\">
                        <tr>
                            <th>#</th>
                            <th>Usuário</th>
                            <th class=\"text-center\">Sala</th>
                            <th class=\"text-center\">Data</th>
                            <th class=\"text-center\">Hora</th>
                            <th class=\"text-center\">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        {%  for reserva in reservas %}
                        <tr>
                            <th scope=\"row\"><a href=\"{{ path('reserva_show', { 'id': reserva.idReserva }) }}\">{{ reserva.idReserva }}</a></th>
                            <td>{# reserva.usuario #}</td>
                            <td class=\"text-center pointer\">{# reserva.sala #}</td>
                            <td class=\"text-center pointer\">{{ reserva.dataHora | date('d-m-Y') }}</td>
                            <td class=\"text-center pointer\">{{ reserva.hora }}</td>
                            <td class=\"text-center pointer\">{{ reserva.status }}</td>
                        </tr>
                        {%  endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 overflow\">
                <ul>
                    <li>
                        <a href=\"{{ path('reserva_new') }}\">Criar nova reserva</a>
                    </li>
                </ul>
            </div>
        </div>

    {% endblock %}
    {% block javascripts %}{% endblock %}

", "reserva/index.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\reserva\\index.html.twig");
    }
}
