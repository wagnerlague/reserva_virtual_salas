<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_427783c876d5a2e92d7877ea58119237d17f3e7c2a526ca474630e668179d366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29a8dd6f66c7d2dec6f7164adeadc4c78334fcc4037e9c55b4cfb3bde6c044c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a8dd6f66c7d2dec6f7164adeadc4c78334fcc4037e9c55b4cfb3bde6c044c4->enter($__internal_29a8dd6f66c7d2dec6f7164adeadc4c78334fcc4037e9c55b4cfb3bde6c044c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2048990766b06d9587bcf5e02da41158dc68aec237e2685d207deacc92820aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2048990766b06d9587bcf5e02da41158dc68aec237e2685d207deacc92820aa2->enter($__internal_2048990766b06d9587bcf5e02da41158dc68aec237e2685d207deacc92820aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_29a8dd6f66c7d2dec6f7164adeadc4c78334fcc4037e9c55b4cfb3bde6c044c4->leave($__internal_29a8dd6f66c7d2dec6f7164adeadc4c78334fcc4037e9c55b4cfb3bde6c044c4_prof);

        
        $__internal_2048990766b06d9587bcf5e02da41158dc68aec237e2685d207deacc92820aa2->leave($__internal_2048990766b06d9587bcf5e02da41158dc68aec237e2685d207deacc92820aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
