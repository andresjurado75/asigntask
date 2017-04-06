<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4471b25c7c8647fac70d592ec3f9d68076e7a3b45cb8ed07d324a7ded46facd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_62c108911f5edb3e9e545f056a9ae1de53d961bb9308c491ebd8e66d65cfa593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c108911f5edb3e9e545f056a9ae1de53d961bb9308c491ebd8e66d65cfa593->enter($__internal_62c108911f5edb3e9e545f056a9ae1de53d961bb9308c491ebd8e66d65cfa593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c108911f5edb3e9e545f056a9ae1de53d961bb9308c491ebd8e66d65cfa593->leave($__internal_62c108911f5edb3e9e545f056a9ae1de53d961bb9308c491ebd8e66d65cfa593_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec7c0172ba2e64773e2ff8d92ad854e1a92a562aa63bfe3de52ffc361d10f594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7c0172ba2e64773e2ff8d92ad854e1a92a562aa63bfe3de52ffc361d10f594->enter($__internal_ec7c0172ba2e64773e2ff8d92ad854e1a92a562aa63bfe3de52ffc361d10f594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ec7c0172ba2e64773e2ff8d92ad854e1a92a562aa63bfe3de52ffc361d10f594->leave($__internal_ec7c0172ba2e64773e2ff8d92ad854e1a92a562aa63bfe3de52ffc361d10f594_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1b5af96b2980205c04aea3c3617099a0518fdc944d4738260b1bc855677b2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b5af96b2980205c04aea3c3617099a0518fdc944d4738260b1bc855677b2c6->enter($__internal_b1b5af96b2980205c04aea3c3617099a0518fdc944d4738260b1bc855677b2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1b5af96b2980205c04aea3c3617099a0518fdc944d4738260b1bc855677b2c6->leave($__internal_b1b5af96b2980205c04aea3c3617099a0518fdc944d4738260b1bc855677b2c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
