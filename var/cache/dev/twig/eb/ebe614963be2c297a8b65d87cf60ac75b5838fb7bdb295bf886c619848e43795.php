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
        $__internal_58196789b9b02cc8ea7d27daf13a242d3ae55e85cf92bf17b368e82ca068cbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58196789b9b02cc8ea7d27daf13a242d3ae55e85cf92bf17b368e82ca068cbd0->enter($__internal_58196789b9b02cc8ea7d27daf13a242d3ae55e85cf92bf17b368e82ca068cbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_28af7b8a0bbaabe79904174c3bb9f9a32a43dedd685cfaeeba5a5ec9e74db9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28af7b8a0bbaabe79904174c3bb9f9a32a43dedd685cfaeeba5a5ec9e74db9b1->enter($__internal_28af7b8a0bbaabe79904174c3bb9f9a32a43dedd685cfaeeba5a5ec9e74db9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Reservas<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserva_index")), "html", null, true);
        echo "\">Reservas</a></li>
                            <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserva_new")), "html", null, true);
        echo "\">Nova Reserva</a></li>
                            <li><a href=\"";
        // line 42
        echo "\">Excluir Reserva</a></li>

                        </ul>
                    </li>
                    <li class=\"#\"><a href=\"#\">Logout</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class=\"jumbotron bg-white pading-container\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    </div>

</div> <!-- /container -->
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/generic.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/home.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_58196789b9b02cc8ea7d27daf13a242d3ae55e85cf92bf17b368e82ca068cbd0->leave($__internal_58196789b9b02cc8ea7d27daf13a242d3ae55e85cf92bf17b368e82ca068cbd0_prof);

        
        $__internal_28af7b8a0bbaabe79904174c3bb9f9a32a43dedd685cfaeeba5a5ec9e74db9b1->leave($__internal_28af7b8a0bbaabe79904174c3bb9f9a32a43dedd685cfaeeba5a5ec9e74db9b1_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b639330262db2c21c016ee44859b53ea3cc50ab8967bb3237b003d6c41c1ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b639330262db2c21c016ee44859b53ea3cc50ab8967bb3237b003d6c41c1ca8->enter($__internal_9b639330262db2c21c016ee44859b53ea3cc50ab8967bb3237b003d6c41c1ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab76c47c76918f95ca2f1d394ca8c384bf4021933f19941ae9c8566b8de832ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab76c47c76918f95ca2f1d394ca8c384bf4021933f19941ae9c8566b8de832ba->enter($__internal_ab76c47c76918f95ca2f1d394ca8c384bf4021933f19941ae9c8566b8de832ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reserva de Salas";
        
        $__internal_ab76c47c76918f95ca2f1d394ca8c384bf4021933f19941ae9c8566b8de832ba->leave($__internal_ab76c47c76918f95ca2f1d394ca8c384bf4021933f19941ae9c8566b8de832ba_prof);

        
        $__internal_9b639330262db2c21c016ee44859b53ea3cc50ab8967bb3237b003d6c41c1ca8->leave($__internal_9b639330262db2c21c016ee44859b53ea3cc50ab8967bb3237b003d6c41c1ca8_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf917e31962adb237370e82fd965da4e35e8b2a079d277a48fdb10431d27d1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf917e31962adb237370e82fd965da4e35e8b2a079d277a48fdb10431d27d1e7->enter($__internal_cf917e31962adb237370e82fd965da4e35e8b2a079d277a48fdb10431d27d1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6cd8d2a07a738ad221bc7e728c0f05760de27981b96a2bd55028b8813fe36149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd8d2a07a738ad221bc7e728c0f05760de27981b96a2bd55028b8813fe36149->enter($__internal_6cd8d2a07a738ad221bc7e728c0f05760de27981b96a2bd55028b8813fe36149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6cd8d2a07a738ad221bc7e728c0f05760de27981b96a2bd55028b8813fe36149->leave($__internal_6cd8d2a07a738ad221bc7e728c0f05760de27981b96a2bd55028b8813fe36149_prof);

        
        $__internal_cf917e31962adb237370e82fd965da4e35e8b2a079d277a48fdb10431d27d1e7->leave($__internal_cf917e31962adb237370e82fd965da4e35e8b2a079d277a48fdb10431d27d1e7_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_79d5c6d3efbc41779efdb7d630497d65341a198f999a23f7269975c21242162a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d5c6d3efbc41779efdb7d630497d65341a198f999a23f7269975c21242162a->enter($__internal_79d5c6d3efbc41779efdb7d630497d65341a198f999a23f7269975c21242162a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13e887bd2486d70fbb9d4d2cfa06307195102bab1d5cd6b0efd53ad5ad08b091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e887bd2486d70fbb9d4d2cfa06307195102bab1d5cd6b0efd53ad5ad08b091->enter($__internal_13e887bd2486d70fbb9d4d2cfa06307195102bab1d5cd6b0efd53ad5ad08b091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " <h2 class=\"titulo-pagina\">Home</h2>";
        
        $__internal_13e887bd2486d70fbb9d4d2cfa06307195102bab1d5cd6b0efd53ad5ad08b091->leave($__internal_13e887bd2486d70fbb9d4d2cfa06307195102bab1d5cd6b0efd53ad5ad08b091_prof);

        
        $__internal_79d5c6d3efbc41779efdb7d630497d65341a198f999a23f7269975c21242162a->leave($__internal_79d5c6d3efbc41779efdb7d630497d65341a198f999a23f7269975c21242162a_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e158c58d3d8d0d700d23bf8b088257703294e5d377ae6063634ff8ad9293d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e158c58d3d8d0d700d23bf8b088257703294e5d377ae6063634ff8ad9293d6a->enter($__internal_9e158c58d3d8d0d700d23bf8b088257703294e5d377ae6063634ff8ad9293d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f11de749db050c73252680f7d94f529a128e50a91eb90b64365a0c88adf0de07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11de749db050c73252680f7d94f529a128e50a91eb90b64365a0c88adf0de07->enter($__internal_f11de749db050c73252680f7d94f529a128e50a91eb90b64365a0c88adf0de07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f11de749db050c73252680f7d94f529a128e50a91eb90b64365a0c88adf0de07->leave($__internal_f11de749db050c73252680f7d94f529a128e50a91eb90b64365a0c88adf0de07_prof);

        
        $__internal_9e158c58d3d8d0d700d23bf8b088257703294e5d377ae6063634ff8ad9293d6a->leave($__internal_9e158c58d3d8d0d700d23bf8b088257703294e5d377ae6063634ff8ad9293d6a_prof);

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
        return array (  205 => 58,  187 => 54,  170 => 14,  152 => 9,  138 => 62,  134 => 61,  130 => 60,  125 => 59,  123 => 58,  118 => 55,  116 => 54,  102 => 42,  98 => 41,  94 => 40,  87 => 36,  83 => 35,  61 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  42 => 9,  37 => 7,  29 => 1,);
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
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Reservas<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ asset(path('reserva_index')) }}\">Reservas</a></li>
                            <li><a href=\"{{ asset(path('reserva_new')) }}\">Nova Reserva</a></li>
                            <li><a href=\"{# asset(path('reserva_delete')) #}\">Excluir Reserva</a></li>

                        </ul>
                    </li>
                    <li class=\"#\"><a href=\"#\">Logout</a></li>
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
