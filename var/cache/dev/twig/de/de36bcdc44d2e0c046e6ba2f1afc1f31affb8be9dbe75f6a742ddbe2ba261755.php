<?php

/* sala/salas.html.twig */
class __TwigTemplate_949bb15515bcf765c2cb9d58f3385727d0feb511de43db79a100f0eb1e8e3afd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sala/salas.html.twig", 1);
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
        $__internal_8596915bf2a11b9eb824a7a1ae3213ec4992baaefda02630c02fe0f703022b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8596915bf2a11b9eb824a7a1ae3213ec4992baaefda02630c02fe0f703022b4d->enter($__internal_8596915bf2a11b9eb824a7a1ae3213ec4992baaefda02630c02fe0f703022b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/salas.html.twig"));

        $__internal_efe88619cbc90aecd63bf80c753b09c8af622c1fc0534f489786ae1b17dc61a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe88619cbc90aecd63bf80c753b09c8af622c1fc0534f489786ae1b17dc61a4->enter($__internal_efe88619cbc90aecd63bf80c753b09c8af622c1fc0534f489786ae1b17dc61a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sala/salas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8596915bf2a11b9eb824a7a1ae3213ec4992baaefda02630c02fe0f703022b4d->leave($__internal_8596915bf2a11b9eb824a7a1ae3213ec4992baaefda02630c02fe0f703022b4d_prof);

        
        $__internal_efe88619cbc90aecd63bf80c753b09c8af622c1fc0534f489786ae1b17dc61a4->leave($__internal_efe88619cbc90aecd63bf80c753b09c8af622c1fc0534f489786ae1b17dc61a4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1133d9bb9394727def72cec39d8f048b47c728e33678a2d3d177276e3377b41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1133d9bb9394727def72cec39d8f048b47c728e33678a2d3d177276e3377b41f->enter($__internal_1133d9bb9394727def72cec39d8f048b47c728e33678a2d3d177276e3377b41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91834a24076e4920f30f33d3c767a27b7fbcb77566c6c5076c6e2b5a9f3d9aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91834a24076e4920f30f33d3c767a27b7fbcb77566c6c5076c6e2b5a9f3d9aa2->enter($__internal_91834a24076e4920f30f33d3c767a27b7fbcb77566c6c5076c6e2b5a9f3d9aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Salas";
        
        $__internal_91834a24076e4920f30f33d3c767a27b7fbcb77566c6c5076c6e2b5a9f3d9aa2->leave($__internal_91834a24076e4920f30f33d3c767a27b7fbcb77566c6c5076c6e2b5a9f3d9aa2_prof);

        
        $__internal_1133d9bb9394727def72cec39d8f048b47c728e33678a2d3d177276e3377b41f->leave($__internal_1133d9bb9394727def72cec39d8f048b47c728e33678a2d3d177276e3377b41f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3d108076640e0e700e62c4caae33cbc049e40b5820613d0d64765b8882a32c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d108076640e0e700e62c4caae33cbc049e40b5820613d0d64765b8882a32c8->enter($__internal_f3d108076640e0e700e62c4caae33cbc049e40b5820613d0d64765b8882a32c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4c4072074fd0528162f3c2b2b3f034e6a42c8be6145885da2b911397f8fc82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c4072074fd0528162f3c2b2b3f034e6a42c8be6145885da2b911397f8fc82f->enter($__internal_b4c4072074fd0528162f3c2b2b3f034e6a42c8be6145885da2b911397f8fc82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        <ul>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salas"]) ? $context["salas"] : $this->getContext($context, "salas")));
        foreach ($context['_seq'] as $context["_key"] => $context["sala"]) {
            // line 8
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sala"], "idSala", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sala"], "identificacao", array()), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sala'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </ul>

    ";
        
        $__internal_b4c4072074fd0528162f3c2b2b3f034e6a42c8be6145885da2b911397f8fc82f->leave($__internal_b4c4072074fd0528162f3c2b2b3f034e6a42c8be6145885da2b911397f8fc82f_prof);

        
        $__internal_f3d108076640e0e700e62c4caae33cbc049e40b5820613d0d64765b8882a32c8->leave($__internal_f3d108076640e0e700e62c4caae33cbc049e40b5820613d0d64765b8882a32c8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edf1cd72d91db71a6edb64bea54c20c76945bdbde64a7a76c9c43eefae09c918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf1cd72d91db71a6edb64bea54c20c76945bdbde64a7a76c9c43eefae09c918->enter($__internal_edf1cd72d91db71a6edb64bea54c20c76945bdbde64a7a76c9c43eefae09c918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_37ae7217488bc720769ba0421e81e03575d354409504a55836f2ba8030289814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ae7217488bc720769ba0421e81e03575d354409504a55836f2ba8030289814->enter($__internal_37ae7217488bc720769ba0421e81e03575d354409504a55836f2ba8030289814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_37ae7217488bc720769ba0421e81e03575d354409504a55836f2ba8030289814->leave($__internal_37ae7217488bc720769ba0421e81e03575d354409504a55836f2ba8030289814_prof);

        
        $__internal_edf1cd72d91db71a6edb64bea54c20c76945bdbde64a7a76c9c43eefae09c918->leave($__internal_edf1cd72d91db71a6edb64bea54c20c76945bdbde64a7a76c9c43eefae09c918_prof);

    }

    public function getTemplateName()
    {
        return "sala/salas.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}
    {% block title %}Salas{% endblock %}

    {% block body %}

        <ul>
            {%  for sala in salas %}
                <li><a href=\"{{ sala.idSala }}\">{{ sala.identificacao }}</li>
            {%  endfor %}
        </ul>

    {% endblock %}
    {% block javascripts %}{% endblock %}
", "sala/salas.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\sala\\salas.html.twig");
    }
}
