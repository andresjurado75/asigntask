<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e0c760c7c02f8d0771fa9e5c5ca2889d040632cf4cb7051f4fdb4f585d8a0cc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_ff3c585252983f31b923155edfd28e48062497bed6932676d55b4a16d25d5b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3c585252983f31b923155edfd28e48062497bed6932676d55b4a16d25d5b96->enter($__internal_ff3c585252983f31b923155edfd28e48062497bed6932676d55b4a16d25d5b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff3c585252983f31b923155edfd28e48062497bed6932676d55b4a16d25d5b96->leave($__internal_ff3c585252983f31b923155edfd28e48062497bed6932676d55b4a16d25d5b96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2603c164db778e41a31effc75152a7db805b8922f041bdc30d91b2bd507fa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2603c164db778e41a31effc75152a7db805b8922f041bdc30d91b2bd507fa63->enter($__internal_d2603c164db778e41a31effc75152a7db805b8922f041bdc30d91b2bd507fa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2603c164db778e41a31effc75152a7db805b8922f041bdc30d91b2bd507fa63->leave($__internal_d2603c164db778e41a31effc75152a7db805b8922f041bdc30d91b2bd507fa63_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1806782bc4691d5efe6d06b43d36f64bf8d9003b430089accaa1993e91423f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1806782bc4691d5efe6d06b43d36f64bf8d9003b430089accaa1993e91423f9->enter($__internal_a1806782bc4691d5efe6d06b43d36f64bf8d9003b430089accaa1993e91423f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a1806782bc4691d5efe6d06b43d36f64bf8d9003b430089accaa1993e91423f9->leave($__internal_a1806782bc4691d5efe6d06b43d36f64bf8d9003b430089accaa1993e91423f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9652242974a2f7bf4b37a336ecc3a3c1579764320b6464d85a7806136fd65445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9652242974a2f7bf4b37a336ecc3a3c1579764320b6464d85a7806136fd65445->enter($__internal_9652242974a2f7bf4b37a336ecc3a3c1579764320b6464d85a7806136fd65445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9652242974a2f7bf4b37a336ecc3a3c1579764320b6464d85a7806136fd65445->leave($__internal_9652242974a2f7bf4b37a336ecc3a3c1579764320b6464d85a7806136fd65445_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
