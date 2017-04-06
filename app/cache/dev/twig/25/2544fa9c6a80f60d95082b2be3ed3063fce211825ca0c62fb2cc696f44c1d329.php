<?php

/* base.html.twig */
class __TwigTemplate_52050822e7a99ad634f6a9a0b9bf5932ae39d3b1f33121744e17e9cf4247188f extends Twig_Template
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
        $__internal_e745151fcb21d4f20b1cf1eb01f8ff48daac0a64ba8e2dd9ae14a04ff5bb38a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e745151fcb21d4f20b1cf1eb01f8ff48daac0a64ba8e2dd9ae14a04ff5bb38a7->enter($__internal_e745151fcb21d4f20b1cf1eb01f8ff48daac0a64ba8e2dd9ae14a04ff5bb38a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e745151fcb21d4f20b1cf1eb01f8ff48daac0a64ba8e2dd9ae14a04ff5bb38a7->leave($__internal_e745151fcb21d4f20b1cf1eb01f8ff48daac0a64ba8e2dd9ae14a04ff5bb38a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5cfcd291b8f5d764b1b22edd19f1974ebaec6056943ccfab87e18b7f10af9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cfcd291b8f5d764b1b22edd19f1974ebaec6056943ccfab87e18b7f10af9dd->enter($__internal_f5cfcd291b8f5d764b1b22edd19f1974ebaec6056943ccfab87e18b7f10af9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Task Company";
        
        $__internal_f5cfcd291b8f5d764b1b22edd19f1974ebaec6056943ccfab87e18b7f10af9dd->leave($__internal_f5cfcd291b8f5d764b1b22edd19f1974ebaec6056943ccfab87e18b7f10af9dd_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98bf85e8c209f30770685841d353d56b47f0b991f9492b06857ef5439fc3905f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bf85e8c209f30770685841d353d56b47f0b991f9492b06857ef5439fc3905f->enter($__internal_98bf85e8c209f30770685841d353d56b47f0b991f9492b06857ef5439fc3905f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98bf85e8c209f30770685841d353d56b47f0b991f9492b06857ef5439fc3905f->leave($__internal_98bf85e8c209f30770685841d353d56b47f0b991f9492b06857ef5439fc3905f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_d527c0d6988f370294cef66376ae500805a90a9d3aa1cf5c8f15053f21f4b4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d527c0d6988f370294cef66376ae500805a90a9d3aa1cf5c8f15053f21f4b4a0->enter($__internal_d527c0d6988f370294cef66376ae500805a90a9d3aa1cf5c8f15053f21f4b4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d527c0d6988f370294cef66376ae500805a90a9d3aa1cf5c8f15053f21f4b4a0->leave($__internal_d527c0d6988f370294cef66376ae500805a90a9d3aa1cf5c8f15053f21f4b4a0_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_183fa00f90f805f6092b9d81f9d42478432e75eac09f7d86774608fcae9ccfd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183fa00f90f805f6092b9d81f9d42478432e75eac09f7d86774608fcae9ccfd4->enter($__internal_183fa00f90f805f6092b9d81f9d42478432e75eac09f7d86774608fcae9ccfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_183fa00f90f805f6092b9d81f9d42478432e75eac09f7d86774608fcae9ccfd4->leave($__internal_183fa00f90f805f6092b9d81f9d42478432e75eac09f7d86774608fcae9ccfd4_prof);

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
