<?php

/* base.html.twig */
class __TwigTemplate_fe3c7ef38374168aa593e7be59ccb47a962ac89e1f7310214e893e7cc571d577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12be3ab337e14680f8e5a71581e261cd95f4ab53ffb29e40be897651c3237e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12be3ab337e14680f8e5a71581e261cd95f4ab53ffb29e40be897651c3237e48->enter($__internal_12be3ab337e14680f8e5a71581e261cd95f4ab53ffb29e40be897651c3237e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1d1793b117480d696ac6763a2bb57921a47f3c80ad40e236ebc606c577429aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1793b117480d696ac6763a2bb57921a47f3c80ad40e236ebc606c577429aa0->enter($__internal_1d1793b117480d696ac6763a2bb57921a47f3c80ad40e236ebc606c577429aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://getbootstrap.com/favicon.ico"), "html", null, true);
        echo "\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/navbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style_generic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
</head>

<body>
<div class=\"container\">
    <!-- Static navbar -->
    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Reserva de Salas</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"/home\">Home</a></li>
                    <li class=\"#\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index")), "html", null, true);
        echo "\">Usuários</a></li>
                    <li class=\"#\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sala_index")), "html", null, true);
        echo "\">Salas</a></li>
                    <li class=\"#\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserva_index")), "html", null, true);
        echo "\">Reservas</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class=\"jumbotron bg-white pading-container\">
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    </div>

</div> <!-- /container -->
";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/generic.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/home.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_12be3ab337e14680f8e5a71581e261cd95f4ab53ffb29e40be897651c3237e48->leave($__internal_12be3ab337e14680f8e5a71581e261cd95f4ab53ffb29e40be897651c3237e48_prof);

        
        $__internal_1d1793b117480d696ac6763a2bb57921a47f3c80ad40e236ebc606c577429aa0->leave($__internal_1d1793b117480d696ac6763a2bb57921a47f3c80ad40e236ebc606c577429aa0_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_14654dfa5ae1ea72cf5a1dd98b0bdf0a169121c771524e6ef3f9cfb691cf8e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14654dfa5ae1ea72cf5a1dd98b0bdf0a169121c771524e6ef3f9cfb691cf8e6d->enter($__internal_14654dfa5ae1ea72cf5a1dd98b0bdf0a169121c771524e6ef3f9cfb691cf8e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa13d8670aafc69d73cafe0fccaa6e94e991b7e31a539947bc21e12cb5acc158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa13d8670aafc69d73cafe0fccaa6e94e991b7e31a539947bc21e12cb5acc158->enter($__internal_fa13d8670aafc69d73cafe0fccaa6e94e991b7e31a539947bc21e12cb5acc158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reserva de Salas";
        
        $__internal_fa13d8670aafc69d73cafe0fccaa6e94e991b7e31a539947bc21e12cb5acc158->leave($__internal_fa13d8670aafc69d73cafe0fccaa6e94e991b7e31a539947bc21e12cb5acc158_prof);

        
        $__internal_14654dfa5ae1ea72cf5a1dd98b0bdf0a169121c771524e6ef3f9cfb691cf8e6d->leave($__internal_14654dfa5ae1ea72cf5a1dd98b0bdf0a169121c771524e6ef3f9cfb691cf8e6d_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad45b583086bde30f311addd6904289f0bcc617e5459e743993eff0e83959c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad45b583086bde30f311addd6904289f0bcc617e5459e743993eff0e83959c46->enter($__internal_ad45b583086bde30f311addd6904289f0bcc617e5459e743993eff0e83959c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f58f44205333546f8b059dfc33256649fac942073670b9c9d73fdac1f74a0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f58f44205333546f8b059dfc33256649fac942073670b9c9d73fdac1f74a0a3->enter($__internal_9f58f44205333546f8b059dfc33256649fac942073670b9c9d73fdac1f74a0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9f58f44205333546f8b059dfc33256649fac942073670b9c9d73fdac1f74a0a3->leave($__internal_9f58f44205333546f8b059dfc33256649fac942073670b9c9d73fdac1f74a0a3_prof);

        
        $__internal_ad45b583086bde30f311addd6904289f0bcc617e5459e743993eff0e83959c46->leave($__internal_ad45b583086bde30f311addd6904289f0bcc617e5459e743993eff0e83959c46_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ed9a4ff35f865a0ad7f87659d3c60f7fc0dda36babe98b73b894c65087f6a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed9a4ff35f865a0ad7f87659d3c60f7fc0dda36babe98b73b894c65087f6a08->enter($__internal_7ed9a4ff35f865a0ad7f87659d3c60f7fc0dda36babe98b73b894c65087f6a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ead5543646958052258a543803d3dfd167739bb9018fb13672f7b03d9686db0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead5543646958052258a543803d3dfd167739bb9018fb13672f7b03d9686db0e->enter($__internal_ead5543646958052258a543803d3dfd167739bb9018fb13672f7b03d9686db0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " <h2 class=\"titulo-pagina\">Home</h2>";
        
        $__internal_ead5543646958052258a543803d3dfd167739bb9018fb13672f7b03d9686db0e->leave($__internal_ead5543646958052258a543803d3dfd167739bb9018fb13672f7b03d9686db0e_prof);

        
        $__internal_7ed9a4ff35f865a0ad7f87659d3c60f7fc0dda36babe98b73b894c65087f6a08->leave($__internal_7ed9a4ff35f865a0ad7f87659d3c60f7fc0dda36babe98b73b894c65087f6a08_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c323b410a4da0cf514434b1cddff9c9b6f084e28c3b1a525fbfee90adcb9562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c323b410a4da0cf514434b1cddff9c9b6f084e28c3b1a525fbfee90adcb9562->enter($__internal_3c323b410a4da0cf514434b1cddff9c9b6f084e28c3b1a525fbfee90adcb9562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7ebc4fb7eb66edd629810c1d99c193bb18a51079fb14b90a675263f509ace485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebc4fb7eb66edd629810c1d99c193bb18a51079fb14b90a675263f509ace485->enter($__internal_7ebc4fb7eb66edd629810c1d99c193bb18a51079fb14b90a675263f509ace485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ebc4fb7eb66edd629810c1d99c193bb18a51079fb14b90a675263f509ace485->leave($__internal_7ebc4fb7eb66edd629810c1d99c193bb18a51079fb14b90a675263f509ace485_prof);

        
        $__internal_3c323b410a4da0cf514434b1cddff9c9b6f084e28c3b1a525fbfee90adcb9562->leave($__internal_3c323b410a4da0cf514434b1cddff9c9b6f084e28c3b1a525fbfee90adcb9562_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 49,  173 => 45,  156 => 14,  138 => 9,  124 => 53,  120 => 52,  116 => 51,  111 => 50,  109 => 49,  104 => 46,  102 => 45,  91 => 37,  87 => 36,  83 => 35,  61 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  42 => 9,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"{{ asset('https://getbootstrap.com/favicon.ico')}}\">

    <title>{% block title %}Reserva de Salas{% endblock %}</title>

    <link href=\"{{ asset('public/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('public/css/navbar.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('public/css/style_generic.css')}}\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}

</head>

<body>
<div class=\"container\">
    <!-- Static navbar -->
    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Reserva de Salas</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"active\"><a href=\"/home\">Home</a></li>
                    <li class=\"#\"><a href=\"{{ asset(path ('usuario_index'))}}\">Usuários</a></li>
                    <li class=\"#\"><a href=\"{{ asset(path('sala_index'))}}\">Salas</a></li>
                    <li class=\"#\"><a href=\"{{ asset(path('reserva_index')) }}\">Reservas</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class=\"jumbotron bg-white pading-container\">
        {% block body %} <h2 class=\"titulo-pagina\">Home</h2>{% endblock %}
    </div>

</div> <!-- /container -->
{% block javascripts %}{% endblock %}
<script src=\"{{ asset('public/js/jquery.min.js')}}\"></script>
<script src=\"{{ asset('public/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('public/js/generic.js')}}\"></script>
<script src=\"{{ asset('public/js/home.js')}}\"></script>

</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\base.html.twig");
    }
}
