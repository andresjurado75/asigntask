<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0e05ad164093a45cd1ff253d79cffdf0c4a02110a64d50017f1c736c7bb09150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8716b03d52724461dea78d46fa4f9f6d542638629a88b0df39f37a9df638018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8716b03d52724461dea78d46fa4f9f6d542638629a88b0df39f37a9df638018->enter($__internal_c8716b03d52724461dea78d46fa4f9f6d542638629a88b0df39f37a9df638018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8716b03d52724461dea78d46fa4f9f6d542638629a88b0df39f37a9df638018->leave($__internal_c8716b03d52724461dea78d46fa4f9f6d542638629a88b0df39f37a9df638018_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b5b75e9977b92a52c3d2ae7fcffd4328fd2e84f1700b4c408c94d4c8d62dbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5b75e9977b92a52c3d2ae7fcffd4328fd2e84f1700b4c408c94d4c8d62dbb8->enter($__internal_8b5b75e9977b92a52c3d2ae7fcffd4328fd2e84f1700b4c408c94d4c8d62dbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8b5b75e9977b92a52c3d2ae7fcffd4328fd2e84f1700b4c408c94d4c8d62dbb8->leave($__internal_8b5b75e9977b92a52c3d2ae7fcffd4328fd2e84f1700b4c408c94d4c8d62dbb8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_673295f49e4de50385436ddae9eb426b0b2af11adc91cfeb811887df8ada3c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673295f49e4de50385436ddae9eb426b0b2af11adc91cfeb811887df8ada3c0b->enter($__internal_673295f49e4de50385436ddae9eb426b0b2af11adc91cfeb811887df8ada3c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_673295f49e4de50385436ddae9eb426b0b2af11adc91cfeb811887df8ada3c0b->leave($__internal_673295f49e4de50385436ddae9eb426b0b2af11adc91cfeb811887df8ada3c0b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
