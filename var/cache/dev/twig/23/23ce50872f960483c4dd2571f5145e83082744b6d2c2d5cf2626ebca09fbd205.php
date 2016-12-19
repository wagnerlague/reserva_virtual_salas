<?php

/* home/home.html.twig */
class __TwigTemplate_2ea373a1043458ce733fb9ab397bad5ec974c563d07c568842c7fa59471f003a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
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
        $__internal_4bffff6bb1089110ed000c47667c070fc3e755f98d481e848da99982a7311e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bffff6bb1089110ed000c47667c070fc3e755f98d481e848da99982a7311e5e->enter($__internal_4bffff6bb1089110ed000c47667c070fc3e755f98d481e848da99982a7311e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_ed55174b29ff6294e497a439846c52a69d2e1be2be9b8ef44827a16fd2782906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed55174b29ff6294e497a439846c52a69d2e1be2be9b8ef44827a16fd2782906->enter($__internal_ed55174b29ff6294e497a439846c52a69d2e1be2be9b8ef44827a16fd2782906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bffff6bb1089110ed000c47667c070fc3e755f98d481e848da99982a7311e5e->leave($__internal_4bffff6bb1089110ed000c47667c070fc3e755f98d481e848da99982a7311e5e_prof);

        
        $__internal_ed55174b29ff6294e497a439846c52a69d2e1be2be9b8ef44827a16fd2782906->leave($__internal_ed55174b29ff6294e497a439846c52a69d2e1be2be9b8ef44827a16fd2782906_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a81936df0079a4d8e7df444d4d432cbb3285f87e6e0a6a64b9b56a6a606155cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81936df0079a4d8e7df444d4d432cbb3285f87e6e0a6a64b9b56a6a606155cd->enter($__internal_a81936df0079a4d8e7df444d4d432cbb3285f87e6e0a6a64b9b56a6a606155cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9bad941896f4b90fe10cfee0bd5dc0769fccf05380de8b4e6e51be0554bd1638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bad941896f4b90fe10cfee0bd5dc0769fccf05380de8b4e6e51be0554bd1638->enter($__internal_9bad941896f4b90fe10cfee0bd5dc0769fccf05380de8b4e6e51be0554bd1638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_9bad941896f4b90fe10cfee0bd5dc0769fccf05380de8b4e6e51be0554bd1638->leave($__internal_9bad941896f4b90fe10cfee0bd5dc0769fccf05380de8b4e6e51be0554bd1638_prof);

        
        $__internal_a81936df0079a4d8e7df444d4d432cbb3285f87e6e0a6a64b9b56a6a606155cd->leave($__internal_a81936df0079a4d8e7df444d4d432cbb3285f87e6e0a6a64b9b56a6a606155cd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6179aac20695c9ef61bee24be323b33141062589a90a1f8b47a4f77bbb126961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6179aac20695c9ef61bee24be323b33141062589a90a1f8b47a4f77bbb126961->enter($__internal_6179aac20695c9ef61bee24be323b33141062589a90a1f8b47a4f77bbb126961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_217b827cfff7e961188fca6bbc90568d084a8c98990ebd6b1f8d0eb01131e18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217b827cfff7e961188fca6bbc90568d084a8c98990ebd6b1f8d0eb01131e18a->enter($__internal_217b827cfff7e961188fca6bbc90568d084a8c98990ebd6b1f8d0eb01131e18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        <div class=\"jumbotron bg-white pading-container\">
            <h2 class=\"titulo-pagina\">Lista de Reservas Ativas</h2>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 8
            echo "                (( usuario.nome }}
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            <div class=\"row\">
                <div class=\"col-xs-12 col-md-12 overflow\">
                    <table class=\"table table-striped table-hover\">
                        <thead class=\"thead-inverse\">
                        <tr>
                            <th>#</th>
                            <th>Usuário</th>
                            <th class=\"text-center\">Sala</th>
                            <th class=\"text-center\">Data</th>
                            <th class=\"text-center\">Hora</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
            // line 24
            echo "                        <tr>
                            <th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "idReserva", array()), "html", null, true);
            echo "</th>
                            <td>####</td>
                            <td class=\"text-center pointer\">####</td>
                            <td class=\"text-center pointer\">";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "dataHora", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td class=\"text-center pointer\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "hora", array()), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    ";
        
        $__internal_217b827cfff7e961188fca6bbc90568d084a8c98990ebd6b1f8d0eb01131e18a->leave($__internal_217b827cfff7e961188fca6bbc90568d084a8c98990ebd6b1f8d0eb01131e18a_prof);

        
        $__internal_6179aac20695c9ef61bee24be323b33141062589a90a1f8b47a4f77bbb126961->leave($__internal_6179aac20695c9ef61bee24be323b33141062589a90a1f8b47a4f77bbb126961_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f165f4310202f381998dc09f9f93b1d3a5d8abcd88c7f0929043d55f901265b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f165f4310202f381998dc09f9f93b1d3a5d8abcd88c7f0929043d55f901265b->enter($__internal_1f165f4310202f381998dc09f9f93b1d3a5d8abcd88c7f0929043d55f901265b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a427ebf6dfb509f031b9c4796293c770665d0d5ebd693d2efa617a3e1eb94375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a427ebf6dfb509f031b9c4796293c770665d0d5ebd693d2efa617a3e1eb94375->enter($__internal_a427ebf6dfb509f031b9c4796293c770665d0d5ebd693d2efa617a3e1eb94375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a427ebf6dfb509f031b9c4796293c770665d0d5ebd693d2efa617a3e1eb94375->leave($__internal_a427ebf6dfb509f031b9c4796293c770665d0d5ebd693d2efa617a3e1eb94375_prof);

        
        $__internal_1f165f4310202f381998dc09f9f93b1d3a5d8abcd88c7f0929043d55f901265b->leave($__internal_1f165f4310202f381998dc09f9f93b1d3a5d8abcd88c7f0929043d55f901265b_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  125 => 32,  116 => 29,  112 => 28,  106 => 25,  103 => 24,  99 => 23,  84 => 10,  77 => 8,  73 => 7,  69 => 5,  60 => 4,  42 => 2,  11 => 1,);
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
            <h2 class=\"titulo-pagina\">Lista de Reservas Ativas</h2>
            {%  for usuario in usuarios %}
                (( usuario.nome }}
            {%  endfor %}
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
                        </tr>
                        </thead>
                        <tbody>
                        {%  for reserva in reservas %}
                        <tr>
                            <th scope=\"row\">{{ reserva.idReserva }}</th>
                            <td>####</td>
                            <td class=\"text-center pointer\">####</td>
                            <td class=\"text-center pointer\">{{ reserva.dataHora | date('d-m-Y') }}</td>
                            <td class=\"text-center pointer\">{{ reserva.hora }}</td>
                        </tr>
                        {%  endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    {% endblock %}
    {% block javascripts %}{% endblock %}

", "home/home.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\home\\home.html.twig");
    }
}
