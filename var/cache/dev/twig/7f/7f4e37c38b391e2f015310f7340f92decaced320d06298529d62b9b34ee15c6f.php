<?php

/* login/index.html.twig */
class __TwigTemplate_3f3cd71ea447593870f467a8edc7330c75595c6fa3ee7dd0913b7efe102e5cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.login.html.twig", "login/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8233a1e29d6ef9b986ee5465327d349b90786c14981ac1b7a6e6705eec1ec331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8233a1e29d6ef9b986ee5465327d349b90786c14981ac1b7a6e6705eec1ec331->enter($__internal_8233a1e29d6ef9b986ee5465327d349b90786c14981ac1b7a6e6705eec1ec331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_b185cc29d4030bd7f25c635db974af67e8af4362b782e07ec320239e6a671640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b185cc29d4030bd7f25c635db974af67e8af4362b782e07ec320239e6a671640->enter($__internal_b185cc29d4030bd7f25c635db974af67e8af4362b782e07ec320239e6a671640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8233a1e29d6ef9b986ee5465327d349b90786c14981ac1b7a6e6705eec1ec331->leave($__internal_8233a1e29d6ef9b986ee5465327d349b90786c14981ac1b7a6e6705eec1ec331_prof);

        
        $__internal_b185cc29d4030bd7f25c635db974af67e8af4362b782e07ec320239e6a671640->leave($__internal_b185cc29d4030bd7f25c635db974af67e8af4362b782e07ec320239e6a671640_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52c084a0f39bca37c3f3dca2c3e988e916330e95b8d9fdfffa78cf0e8457cdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c084a0f39bca37c3f3dca2c3e988e916330e95b8d9fdfffa78cf0e8457cdd0->enter($__internal_52c084a0f39bca37c3f3dca2c3e988e916330e95b8d9fdfffa78cf0e8457cdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_12892c5face718f683813f2d775c58013366c3fead9c7ecba63841632ef51f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12892c5face718f683813f2d775c58013366c3fead9c7ecba63841632ef51f68->enter($__internal_12892c5face718f683813f2d775c58013366c3fead9c7ecba63841632ef51f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>
";
        
        $__internal_12892c5face718f683813f2d775c58013366c3fead9c7ecba63841632ef51f68->leave($__internal_12892c5face718f683813f2d775c58013366c3fead9c7ecba63841632ef51f68_prof);

        
        $__internal_52c084a0f39bca37c3f3dca2c3e988e916330e95b8d9fdfffa78cf0e8457cdd0->leave($__internal_52c084a0f39bca37c3f3dca2c3e988e916330e95b8d9fdfffa78cf0e8457cdd0_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ee6adb1ec99fa2af922ead7afec3b25e10aa541c8fc0b6da3bc3ea0ef475122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee6adb1ec99fa2af922ead7afec3b25e10aa541c8fc0b6da3bc3ea0ef475122->enter($__internal_7ee6adb1ec99fa2af922ead7afec3b25e10aa541c8fc0b6da3bc3ea0ef475122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ed3fd0464241cee516f4fe1c00eff0142146131ccaa28aed1ccf8f070d31096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed3fd0464241cee516f4fe1c00eff0142146131ccaa28aed1ccf8f070d31096->enter($__internal_8ed3fd0464241cee516f4fe1c00eff0142146131ccaa28aed1ccf8f070d31096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "
    <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_index");
        echo "\" data-validate=\"parsley\">
        <h2 class=\"form-signin-heading\">Faça seu login:</h2>
        <input type=\"text\" id=\"usuario\" class=\"input-block-level\" name=\"usuario\" placeholder=\"Usuario\" data-trigger=\"change\" data-required=\"true\" data-type=\"text\">
        <input type=\"password\" class=\"input-block-level\" name=\"senha\" placeholder=\"Senha\" data-trigger=\"change\" data-required=\"true\">
        <button class=\"btn btn-large btn-primary\" type=\"submit\">Entrar</button>
    </form>
";
        
        $__internal_8ed3fd0464241cee516f4fe1c00eff0142146131ccaa28aed1ccf8f070d31096->leave($__internal_8ed3fd0464241cee516f4fe1c00eff0142146131ccaa28aed1ccf8f070d31096_prof);

        
        $__internal_7ee6adb1ec99fa2af922ead7afec3b25e10aa541c8fc0b6da3bc3ea0ef475122->leave($__internal_7ee6adb1ec99fa2af922ead7afec3b25e10aa541c8fc0b6da3bc3ea0ef475122_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  102 => 38,  93 => 37,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"base.login.html.twig\"%}
{%block stylesheets %}
    <style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>
{%endblock%}
{%block body %}

    <form class=\"form-signin\" method =\"POST\" action=\"{{ path('login_index') }}\" data-validate=\"parsley\">
        <h2 class=\"form-signin-heading\">Faça seu login:</h2>
        <input type=\"text\" id=\"usuario\" class=\"input-block-level\" name=\"usuario\" placeholder=\"Usuario\" data-trigger=\"change\" data-required=\"true\" data-type=\"text\">
        <input type=\"password\" class=\"input-block-level\" name=\"senha\" placeholder=\"Senha\" data-trigger=\"change\" data-required=\"true\">
        <button class=\"btn btn-large btn-primary\" type=\"submit\">Entrar</button>
    </form>
{%endblock%}", "login/index.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\login\\index.html.twig");
    }
}
