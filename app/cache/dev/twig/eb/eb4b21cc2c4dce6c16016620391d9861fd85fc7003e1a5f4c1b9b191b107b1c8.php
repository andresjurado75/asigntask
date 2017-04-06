<?php

/* base.html.twig */
class __TwigTemplate_8c9b6b2880c4a4a30a74e3297cf2812186ae5fdabf0e24b19c813c81d5ab07e6 extends Twig_Template
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
        $__internal_08dffec92d154184579c51a858e20f437cd59312379f82ae1be39c23a4ff4e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dffec92d154184579c51a858e20f437cd59312379f82ae1be39c23a4ff4e64->enter($__internal_08dffec92d154184579c51a858e20f437cd59312379f82ae1be39c23a4ff4e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        echo "    ";
        // line 8
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libsBootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libsBootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("notebook.png"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libsBootstrap/js/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("libsBootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "</body>
</html>
";
        
        $__internal_08dffec92d154184579c51a858e20f437cd59312379f82ae1be39c23a4ff4e64->leave($__internal_08dffec92d154184579c51a858e20f437cd59312379f82ae1be39c23a4ff4e64_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f52a39173e9e4c30358d546603d0fca86244ea37fabca67545588ed664ea83ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52a39173e9e4c30358d546603d0fca86244ea37fabca67545588ed664ea83ab->enter($__internal_f52a39173e9e4c30358d546603d0fca86244ea37fabca67545588ed664ea83ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Task Company";
        
        $__internal_f52a39173e9e4c30358d546603d0fca86244ea37fabca67545588ed664ea83ab->leave($__internal_f52a39173e9e4c30358d546603d0fca86244ea37fabca67545588ed664ea83ab_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30c6bc72632840fab4c47885419d8cf0a2273313c1b1d8988e75f3c30047f02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c6bc72632840fab4c47885419d8cf0a2273313c1b1d8988e75f3c30047f02b->enter($__internal_30c6bc72632840fab4c47885419d8cf0a2273313c1b1d8988e75f3c30047f02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_30c6bc72632840fab4c47885419d8cf0a2273313c1b1d8988e75f3c30047f02b->leave($__internal_30c6bc72632840fab4c47885419d8cf0a2273313c1b1d8988e75f3c30047f02b_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e5143657df30596b6438c65bda12857956327711a56e17da9892f02d983540d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5143657df30596b6438c65bda12857956327711a56e17da9892f02d983540d->enter($__internal_7e5143657df30596b6438c65bda12857956327711a56e17da9892f02d983540d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e5143657df30596b6438c65bda12857956327711a56e17da9892f02d983540d->leave($__internal_7e5143657df30596b6438c65bda12857956327711a56e17da9892f02d983540d_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97b0b7032a2911e7c474df5a3cef79f27cf7709f77d05798190480e73066486e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b0b7032a2911e7c474df5a3cef79f27cf7709f77d05798190480e73066486e->enter($__internal_97b0b7032a2911e7c474df5a3cef79f27cf7709f77d05798190480e73066486e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_97b0b7032a2911e7c474df5a3cef79f27cf7709f77d05798190480e73066486e->leave($__internal_97b0b7032a2911e7c474df5a3cef79f27cf7709f77d05798190480e73066486e_prof);

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
        return array (  112 => 19,  101 => 14,  90 => 10,  78 => 5,  69 => 20,  67 => 19,  63 => 18,  58 => 17,  56 => 14,  49 => 11,  47 => 10,  43 => 9,  38 => 8,  36 => 7,  32 => 5,  26 => 1,);
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
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Task Company{% endblock %}</title>
    {#<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('libsMaterialize/css/materialize.min.css\"') }}\"#}
    {#media=\"screen,projection\"/>#}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('libsBootstrap/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('libsBootstrap/css/bootstrap-theme.min.css') }}\">
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('notebook.png') }}\"/>
</head>
<body>
{% block body %}{% endblock %}
{#<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>#}
{#<script type=\"text/javascript\" src=\"{{ asset('libsMaterialize/js/materialize.min.js') }}\"></script>#}
<script type=\"text/javascript\" src=\"{{ asset('libsBootstrap/js/jquery-3.1.0.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('libsBootstrap/js/bootstrap.min.js') }}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\asignTask\\app\\Resources\\views\\base.html.twig");
    }
}
