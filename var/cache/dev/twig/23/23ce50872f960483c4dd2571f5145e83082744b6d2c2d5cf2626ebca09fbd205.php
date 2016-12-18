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
        $__internal_6375636582e9a28a942a005c96984d266bcbec4c59fcef777450640dc65316b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6375636582e9a28a942a005c96984d266bcbec4c59fcef777450640dc65316b2->enter($__internal_6375636582e9a28a942a005c96984d266bcbec4c59fcef777450640dc65316b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_2febd88a88824d2bdba0ee0a1a0ec536069d669628b9a807edc4f7eb768a7da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2febd88a88824d2bdba0ee0a1a0ec536069d669628b9a807edc4f7eb768a7da2->enter($__internal_2febd88a88824d2bdba0ee0a1a0ec536069d669628b9a807edc4f7eb768a7da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6375636582e9a28a942a005c96984d266bcbec4c59fcef777450640dc65316b2->leave($__internal_6375636582e9a28a942a005c96984d266bcbec4c59fcef777450640dc65316b2_prof);

        
        $__internal_2febd88a88824d2bdba0ee0a1a0ec536069d669628b9a807edc4f7eb768a7da2->leave($__internal_2febd88a88824d2bdba0ee0a1a0ec536069d669628b9a807edc4f7eb768a7da2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_af984c4dd6131125ca5165dc1dffc3a11cd73041c6b919607c31af6fc98461a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af984c4dd6131125ca5165dc1dffc3a11cd73041c6b919607c31af6fc98461a2->enter($__internal_af984c4dd6131125ca5165dc1dffc3a11cd73041c6b919607c31af6fc98461a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e301208b9038d25f377672c7e46c3df5a3041146887ebb9b7303107d1ec0511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e301208b9038d25f377672c7e46c3df5a3041146887ebb9b7303107d1ec0511->enter($__internal_1e301208b9038d25f377672c7e46c3df5a3041146887ebb9b7303107d1ec0511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_1e301208b9038d25f377672c7e46c3df5a3041146887ebb9b7303107d1ec0511->leave($__internal_1e301208b9038d25f377672c7e46c3df5a3041146887ebb9b7303107d1ec0511_prof);

        
        $__internal_af984c4dd6131125ca5165dc1dffc3a11cd73041c6b919607c31af6fc98461a2->leave($__internal_af984c4dd6131125ca5165dc1dffc3a11cd73041c6b919607c31af6fc98461a2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_009cd6a3611d1ffa17a6854db0f0474ed38c6e186b8012cc2e4a2472027edcf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009cd6a3611d1ffa17a6854db0f0474ed38c6e186b8012cc2e4a2472027edcf6->enter($__internal_009cd6a3611d1ffa17a6854db0f0474ed38c6e186b8012cc2e4a2472027edcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_790c35389921b11d35f48792ddc3b45768d8cad64cd0fb8aa88e878299afe38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790c35389921b11d35f48792ddc3b45768d8cad64cd0fb8aa88e878299afe38f->enter($__internal_790c35389921b11d35f48792ddc3b45768d8cad64cd0fb8aa88e878299afe38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        <div class=\"jumbotron bg-white pading-container\">
            <h2 class=\"titulo-pagina\">Lista de Reservas Ativas</h2>
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
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
            // line 21
            echo "                        <tr>
                            <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "idReserva", array()), "html", null, true);
            echo "</th>
                            <td>####</td>
                            <td class=\"text-center pointer\">####</td>
                            <td class=\"text-center pointer\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reserva"], "dataHora", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td class=\"text-center pointer\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserva"], "hora", array()), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    ";
        
        $__internal_790c35389921b11d35f48792ddc3b45768d8cad64cd0fb8aa88e878299afe38f->leave($__internal_790c35389921b11d35f48792ddc3b45768d8cad64cd0fb8aa88e878299afe38f_prof);

        
        $__internal_009cd6a3611d1ffa17a6854db0f0474ed38c6e186b8012cc2e4a2472027edcf6->leave($__internal_009cd6a3611d1ffa17a6854db0f0474ed38c6e186b8012cc2e4a2472027edcf6_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d65367bf40f4b9f657e9eb4d5a296e5e0a89cdee47cbb7630b36eb42e5b7e7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65367bf40f4b9f657e9eb4d5a296e5e0a89cdee47cbb7630b36eb42e5b7e7a1->enter($__internal_d65367bf40f4b9f657e9eb4d5a296e5e0a89cdee47cbb7630b36eb42e5b7e7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0e2e9d2d7ab59f4b17710d5ece9181b61dd33e4955fd01ce6ee078edb76e283e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2e9d2d7ab59f4b17710d5ece9181b61dd33e4955fd01ce6ee078edb76e283e->enter($__internal_0e2e9d2d7ab59f4b17710d5ece9181b61dd33e4955fd01ce6ee078edb76e283e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0e2e9d2d7ab59f4b17710d5ece9181b61dd33e4955fd01ce6ee078edb76e283e->leave($__internal_0e2e9d2d7ab59f4b17710d5ece9181b61dd33e4955fd01ce6ee078edb76e283e_prof);

        
        $__internal_d65367bf40f4b9f657e9eb4d5a296e5e0a89cdee47cbb7630b36eb42e5b7e7a1->leave($__internal_d65367bf40f4b9f657e9eb4d5a296e5e0a89cdee47cbb7630b36eb42e5b7e7a1_prof);

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
        return array (  128 => 36,  112 => 29,  103 => 26,  99 => 25,  93 => 22,  90 => 21,  86 => 20,  69 => 5,  60 => 4,  42 => 2,  11 => 1,);
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
