<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bee461f2d413bfa7575e7b86aecc21b7b3e2688846524662758b8ad4bf1be3ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e703a15c34d45fcad5a2a6f12ba92e1d06a4fe3826884ae0cce2bcb2a17ae580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e703a15c34d45fcad5a2a6f12ba92e1d06a4fe3826884ae0cce2bcb2a17ae580->enter($__internal_e703a15c34d45fcad5a2a6f12ba92e1d06a4fe3826884ae0cce2bcb2a17ae580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e703a15c34d45fcad5a2a6f12ba92e1d06a4fe3826884ae0cce2bcb2a17ae580->leave($__internal_e703a15c34d45fcad5a2a6f12ba92e1d06a4fe3826884ae0cce2bcb2a17ae580_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ecd2be1e7587ddc9f25c76481385110bbcbfb0e3c9d440d02ae6d5581a0643c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecd2be1e7587ddc9f25c76481385110bbcbfb0e3c9d440d02ae6d5581a0643c->enter($__internal_9ecd2be1e7587ddc9f25c76481385110bbcbfb0e3c9d440d02ae6d5581a0643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9ecd2be1e7587ddc9f25c76481385110bbcbfb0e3c9d440d02ae6d5581a0643c->leave($__internal_9ecd2be1e7587ddc9f25c76481385110bbcbfb0e3c9d440d02ae6d5581a0643c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1051eff39262692fa93268f286c1f573ac08e06c0d61a0a307a59abfb230d3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1051eff39262692fa93268f286c1f573ac08e06c0d61a0a307a59abfb230d3d7->enter($__internal_1051eff39262692fa93268f286c1f573ac08e06c0d61a0a307a59abfb230d3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1051eff39262692fa93268f286c1f573ac08e06c0d61a0a307a59abfb230d3d7->leave($__internal_1051eff39262692fa93268f286c1f573ac08e06c0d61a0a307a59abfb230d3d7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee1f3861a8aa5a83f75a0dfb41cf2e5696eec98b85331d32705d80ce86121509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1f3861a8aa5a83f75a0dfb41cf2e5696eec98b85331d32705d80ce86121509->enter($__internal_ee1f3861a8aa5a83f75a0dfb41cf2e5696eec98b85331d32705d80ce86121509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ee1f3861a8aa5a83f75a0dfb41cf2e5696eec98b85331d32705d80ce86121509->leave($__internal_ee1f3861a8aa5a83f75a0dfb41cf2e5696eec98b85331d32705d80ce86121509_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
