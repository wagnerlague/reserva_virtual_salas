<?php

/* base.login.html.twig */
class __TwigTemplate_97655554aba06420d6e32014f6cecd77cec79569ad43f8736e8300e2c49f1d42 extends Twig_Template
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
        $__internal_9c00ff158f935df9a67a40760ad2d736bd9ce193dce3fb63ea68e0ab2a06e52a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c00ff158f935df9a67a40760ad2d736bd9ce193dce3fb63ea68e0ab2a06e52a->enter($__internal_9c00ff158f935df9a67a40760ad2d736bd9ce193dce3fb63ea68e0ab2a06e52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.login.html.twig"));

        $__internal_d96c61bef9c053ea05d996450a9a34e22c4c5f42c77d2005a498d45f39584ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96c61bef9c053ea05d996450a9a34e22c4c5f42c77d2005a498d45f39584ceb->enter($__internal_d96c61bef9c053ea05d996450a9a34e22c4c5f42c77d2005a498d45f39584ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.login.html.twig"));

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

                    <li class=\"#\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_new");
        echo "\">Novo Usuário</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class=\"jumbotron bg-white pading-container\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "    </div>

</div> <!-- /container -->
";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/generic.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/home.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_9c00ff158f935df9a67a40760ad2d736bd9ce193dce3fb63ea68e0ab2a06e52a->leave($__internal_9c00ff158f935df9a67a40760ad2d736bd9ce193dce3fb63ea68e0ab2a06e52a_prof);

        
        $__internal_d96c61bef9c053ea05d996450a9a34e22c4c5f42c77d2005a498d45f39584ceb->leave($__internal_d96c61bef9c053ea05d996450a9a34e22c4c5f42c77d2005a498d45f39584ceb_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_db8aba84ba1fdfb0c2e0182b9830032bea74cbc739c8e6ce76df9669e574b2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8aba84ba1fdfb0c2e0182b9830032bea74cbc739c8e6ce76df9669e574b2b6->enter($__internal_db8aba84ba1fdfb0c2e0182b9830032bea74cbc739c8e6ce76df9669e574b2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9cf95700404397f02031b5a42dba8574860c1f5b912f713ae28853636f22b707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf95700404397f02031b5a42dba8574860c1f5b912f713ae28853636f22b707->enter($__internal_9cf95700404397f02031b5a42dba8574860c1f5b912f713ae28853636f22b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reserva de Salas";
        
        $__internal_9cf95700404397f02031b5a42dba8574860c1f5b912f713ae28853636f22b707->leave($__internal_9cf95700404397f02031b5a42dba8574860c1f5b912f713ae28853636f22b707_prof);

        
        $__internal_db8aba84ba1fdfb0c2e0182b9830032bea74cbc739c8e6ce76df9669e574b2b6->leave($__internal_db8aba84ba1fdfb0c2e0182b9830032bea74cbc739c8e6ce76df9669e574b2b6_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e04247e357c4d51e9c8cdfffad2518ec077d38226291e98f0f6d95107ea6708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e04247e357c4d51e9c8cdfffad2518ec077d38226291e98f0f6d95107ea6708->enter($__internal_3e04247e357c4d51e9c8cdfffad2518ec077d38226291e98f0f6d95107ea6708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e010528683a28cbcf96a75a39dd8c9de80c64d713d60de065644b289ba5501d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e010528683a28cbcf96a75a39dd8c9de80c64d713d60de065644b289ba5501d6->enter($__internal_e010528683a28cbcf96a75a39dd8c9de80c64d713d60de065644b289ba5501d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e010528683a28cbcf96a75a39dd8c9de80c64d713d60de065644b289ba5501d6->leave($__internal_e010528683a28cbcf96a75a39dd8c9de80c64d713d60de065644b289ba5501d6_prof);

        
        $__internal_3e04247e357c4d51e9c8cdfffad2518ec077d38226291e98f0f6d95107ea6708->leave($__internal_3e04247e357c4d51e9c8cdfffad2518ec077d38226291e98f0f6d95107ea6708_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_b67ca760316c7c0f354257722afcb834003536541a215542607f9ed77f853131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67ca760316c7c0f354257722afcb834003536541a215542607f9ed77f853131->enter($__internal_b67ca760316c7c0f354257722afcb834003536541a215542607f9ed77f853131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f51820f131bfc72ed124ee2202182e3677d160af6c7a281ce1e6e802c8a5dcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51820f131bfc72ed124ee2202182e3677d160af6c7a281ce1e6e802c8a5dcb4->enter($__internal_f51820f131bfc72ed124ee2202182e3677d160af6c7a281ce1e6e802c8a5dcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " <h2 class=\"titulo-pagina\">Home</h2>";
        
        $__internal_f51820f131bfc72ed124ee2202182e3677d160af6c7a281ce1e6e802c8a5dcb4->leave($__internal_f51820f131bfc72ed124ee2202182e3677d160af6c7a281ce1e6e802c8a5dcb4_prof);

        
        $__internal_b67ca760316c7c0f354257722afcb834003536541a215542607f9ed77f853131->leave($__internal_b67ca760316c7c0f354257722afcb834003536541a215542607f9ed77f853131_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ef7ce48dc74940818a8548489b9bb77fe8f412f4d68047565de3d53329dad41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef7ce48dc74940818a8548489b9bb77fe8f412f4d68047565de3d53329dad41->enter($__internal_2ef7ce48dc74940818a8548489b9bb77fe8f412f4d68047565de3d53329dad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d445d837d00af9b9733374d6b3ae8693eb184ad417a1eceeacfb7ca21330f15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d445d837d00af9b9733374d6b3ae8693eb184ad417a1eceeacfb7ca21330f15a->enter($__internal_d445d837d00af9b9733374d6b3ae8693eb184ad417a1eceeacfb7ca21330f15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d445d837d00af9b9733374d6b3ae8693eb184ad417a1eceeacfb7ca21330f15a->leave($__internal_d445d837d00af9b9733374d6b3ae8693eb184ad417a1eceeacfb7ca21330f15a_prof);

        
        $__internal_2ef7ce48dc74940818a8548489b9bb77fe8f412f4d68047565de3d53329dad41->leave($__internal_2ef7ce48dc74940818a8548489b9bb77fe8f412f4d68047565de3d53329dad41_prof);

    }

    public function getTemplateName()
    {
        return "base.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 47,  165 => 43,  148 => 14,  130 => 9,  116 => 51,  112 => 50,  108 => 49,  103 => 48,  101 => 47,  96 => 44,  94 => 43,  83 => 35,  61 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  42 => 9,  37 => 7,  29 => 1,);
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

                    <li class=\"#\"><a href=\"{{ path('login_new')}}\">Novo Usuário</a></li>
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
</html>", "base.login.html.twig", "C:\\xampp\\htdocs\\Teste_Ditech\\sistema_reserva_salas\\reserva_salas\\app\\Resources\\views\\base.login.html.twig");
    }
}
