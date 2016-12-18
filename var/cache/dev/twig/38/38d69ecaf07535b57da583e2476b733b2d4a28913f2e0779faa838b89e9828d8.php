<?php

/* sala/index.html.twig */
class __TwigTemplate_333393ed3c60f79cc988c7992c5d1be506f410b6b5a2def1464f0fa2c49dd1b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sala/index.html.twig", 1);
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
        $__internal_2c658d09ac917ae20cbc6e1eba4a7628ff13e285b77b056bf326a165fa96b841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c658d09ac917ae20cbc6e1eba4a7628ff13e285b77b056bf326a165fa96b841->enter($__internal_2c658d09ac917ae20cbc6e1eba4a7628ff13e285b77b056bf326a165fa96b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/index.html.twig"));

        $__internal_c477b333d99415a629fef1e205ebd93b9bdc24d7ac3c60aad290fc57cc20d0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c477b333d99415a629fef1e205ebd93b9bdc24d7ac3c60aad290fc57cc20d0d1->enter($__internal_c477b333d99415a629fef1e205ebd93b9bdc24d7ac3c60aad290fc57cc20d0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c658d09ac917ae20cbc6e1eba4a7628ff13e285b77b056bf326a165fa96b841->leave($__internal_2c658d09ac917ae20cbc6e1eba4a7628ff13e285b77b056bf326a165fa96b841_prof);

        
        $__internal_c477b333d99415a629fef1e205ebd93b9bdc24d7ac3c60aad290fc57cc20d0d1->leave($__internal_c477b333d99415a629fef1e205ebd93b9bdc24d7ac3c60aad290fc57cc20d0d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36c328dd66152f572d38a6e3f5ccdc6984f9b12d25f98efb9ec76b8207e7dba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c328dd66152f572d38a6e3f5ccdc6984f9b12d25f98efb9ec76b8207e7dba8->enter($__internal_36c328dd66152f572d38a6e3f5ccdc6984f9b12d25f98efb9ec76b8207e7dba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1e18ffd8fb83a107c94155fd7126355488a3a7d95e6161f2e55679679cc8e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e18ffd8fb83a107c94155fd7126355488a3a7d95e6161f2e55679679cc8e7c->enter($__internal_f1e18ffd8fb83a107c94155fd7126355488a3a7d95e6161f2e55679679cc8e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"jumbotron bg-white pading-container\">
        <h2 class=\"titulo-pagina\">Lista de Salas</h2>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 overflow\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"thead-inverse\">
                    <tr>
                        <th>#</th>
                        <th>Identificação</th>
                        <th class=\"text-center\">Capacidade</th>
                        <th class=\"text-center\">Visalizar</th>
                        <th class=\"text-center\">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salas"]) ? $context["salas"] : $this->getContext($context, "salas")));
        foreach ($context['_seq'] as $context["_key"] => $context["sala"]) {
            // line 21
            echo "                        <tr>
                            <th scope=\"row\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sala_show", array("id" => $this->getAttribute($context["sala"], "idSala", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sala"], "idSala", array()), "html", null, true);
            echo "</a></th>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["sala"], "identificacao", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center pointer\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["sala"], "capacidade", array()), "html", null, true);
            echo "</td>
                            <td class=\"text-center pointer\"> <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sala_show", array("id" => $this->getAttribute($context["sala"], "idSala", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-eye-open\"></span></a></td>
                            <td class=\"text-center pointer\"> <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sala_edit", array("id" => $this->getAttribute($context["sala"], "idSala", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sala'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sala_new");
        echo "\">Criar nova sala</a>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_f1e18ffd8fb83a107c94155fd7126355488a3a7d95e6161f2e55679679cc8e7c->leave($__internal_f1e18ffd8fb83a107c94155fd7126355488a3a7d95e6161f2e55679679cc8e7c_prof);

        
        $__internal_36c328dd66152f572d38a6e3f5ccdc6984f9b12d25f98efb9ec76b8207e7dba8->leave($__internal_36c328dd66152f572d38a6e3f5ccdc6984f9b12d25f98efb9ec76b8207e7dba8_prof);

    }

    public function getTemplateName()
    {
        return "sala/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  101 => 29,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
        <h2 class=\"titulo-pagina\">Lista de Salas</h2>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12 overflow\">
                <table class=\"table table-striped table-hover\">
                    <thead class=\"thead-inverse\">
                    <tr>
                        <th>#</th>
                        <th>Identificação</th>
                        <th class=\"text-center\">Capacidade</th>
                        <th class=\"text-center\">Visalizar</th>
                        <th class=\"text-center\">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for sala in salas %}
                        <tr>
                            <th scope=\"row\"><a href=\"{{ path('sala_show', { 'id': sala.idSala }) }}\">{{ sala.idSala }}</a></th>
                            <td>{{ sala.identificacao }}</td>
                            <td class=\"text-center pointer\">{{ sala.capacidade }}</td>
                            <td class=\"text-center pointer\"> <a href=\"{{ path('sala_show', { 'id': sala.idSala }) }}\"><span class=\"glyphicon glyphicon-eye-open\"></span></a></td>
                            <td class=\"text-center pointer\"> <a href=\"{{ path('sala_edit', { 'id': sala.idSala }) }}\"><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
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
                    <a href=\"{{ path('sala_new') }}\">Criar nova sala</a>
                </li>
            </ul>
        </div>
    </div>
{% endblock %}
", "sala/index.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\sala\\index.html.twig");
    }
}
