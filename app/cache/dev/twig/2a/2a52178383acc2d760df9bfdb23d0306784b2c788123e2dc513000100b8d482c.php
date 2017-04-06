<?php

/* ::base.html.twig */
class __TwigTemplate_520679f462e02da455c6ab336b518753eb4247e2d75e74e855e5a80b18945df4 extends Twig_Template
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
        $__internal_1c652305902caad85d78cea919602705cfdcd41b2baf96bb1b30efc5b07a5a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c652305902caad85d78cea919602705cfdcd41b2baf96bb1b30efc5b07a5a3b->enter($__internal_1c652305902caad85d78cea919602705cfdcd41b2baf96bb1b30efc5b07a5a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1c652305902caad85d78cea919602705cfdcd41b2baf96bb1b30efc5b07a5a3b->leave($__internal_1c652305902caad85d78cea919602705cfdcd41b2baf96bb1b30efc5b07a5a3b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f06ea0732ac1a9544c88e3eac7dc7b3aa0648fca9dffa819ab88419df7a0b4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06ea0732ac1a9544c88e3eac7dc7b3aa0648fca9dffa819ab88419df7a0b4c2->enter($__internal_f06ea0732ac1a9544c88e3eac7dc7b3aa0648fca9dffa819ab88419df7a0b4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Task Company";
        
        $__internal_f06ea0732ac1a9544c88e3eac7dc7b3aa0648fca9dffa819ab88419df7a0b4c2->leave($__internal_f06ea0732ac1a9544c88e3eac7dc7b3aa0648fca9dffa819ab88419df7a0b4c2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37f3df3afa01dc78ece6b03334a2a1b1e66229b373f835accd7b52ec30a40541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f3df3afa01dc78ece6b03334a2a1b1e66229b373f835accd7b52ec30a40541->enter($__internal_37f3df3afa01dc78ece6b03334a2a1b1e66229b373f835accd7b52ec30a40541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_37f3df3afa01dc78ece6b03334a2a1b1e66229b373f835accd7b52ec30a40541->leave($__internal_37f3df3afa01dc78ece6b03334a2a1b1e66229b373f835accd7b52ec30a40541_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_949dfdebda4833bdac2ce39dc4efb923362cac17d1a4aeb2d4e112e87822d214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949dfdebda4833bdac2ce39dc4efb923362cac17d1a4aeb2d4e112e87822d214->enter($__internal_949dfdebda4833bdac2ce39dc4efb923362cac17d1a4aeb2d4e112e87822d214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_949dfdebda4833bdac2ce39dc4efb923362cac17d1a4aeb2d4e112e87822d214->leave($__internal_949dfdebda4833bdac2ce39dc4efb923362cac17d1a4aeb2d4e112e87822d214_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5738b1042892ebcad49a5d7f7adc17df947bb9426a8370f7086e418fbe58dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5738b1042892ebcad49a5d7f7adc17df947bb9426a8370f7086e418fbe58dcb->enter($__internal_e5738b1042892ebcad49a5d7f7adc17df947bb9426a8370f7086e418fbe58dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5738b1042892ebcad49a5d7f7adc17df947bb9426a8370f7086e418fbe58dcb->leave($__internal_e5738b1042892ebcad49a5d7f7adc17df947bb9426a8370f7086e418fbe58dcb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\asignTask\\app/Resources\\views/base.html.twig");
    }
}
