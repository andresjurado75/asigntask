<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a3b4be4a52a621d200e2b9b271535ae5b92cb3f16635e9ebdbdd2097e963462 extends Twig_Template
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
        $__internal_0b1d44c60b71ced7ab760b80f5c4a7800fd6c20712f3d7594e635077cf440aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1d44c60b71ced7ab760b80f5c4a7800fd6c20712f3d7594e635077cf440aef->enter($__internal_0b1d44c60b71ced7ab760b80f5c4a7800fd6c20712f3d7594e635077cf440aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b1d44c60b71ced7ab760b80f5c4a7800fd6c20712f3d7594e635077cf440aef->leave($__internal_0b1d44c60b71ced7ab760b80f5c4a7800fd6c20712f3d7594e635077cf440aef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c68a75e49d99ce919fd5e7de406ae1280c37d7218f068b79d010d1df3ab930f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68a75e49d99ce919fd5e7de406ae1280c37d7218f068b79d010d1df3ab930f7->enter($__internal_c68a75e49d99ce919fd5e7de406ae1280c37d7218f068b79d010d1df3ab930f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c68a75e49d99ce919fd5e7de406ae1280c37d7218f068b79d010d1df3ab930f7->leave($__internal_c68a75e49d99ce919fd5e7de406ae1280c37d7218f068b79d010d1df3ab930f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_30b34c9180ee9815ace7a66ab2e117cd121d516f7c2857579635a6edd2f73910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b34c9180ee9815ace7a66ab2e117cd121d516f7c2857579635a6edd2f73910->enter($__internal_30b34c9180ee9815ace7a66ab2e117cd121d516f7c2857579635a6edd2f73910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_30b34c9180ee9815ace7a66ab2e117cd121d516f7c2857579635a6edd2f73910->leave($__internal_30b34c9180ee9815ace7a66ab2e117cd121d516f7c2857579635a6edd2f73910_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7d9bbf780bb5c1a74ecb55790751d095707da46cfaacb6f89c654c04510eeee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d9bbf780bb5c1a74ecb55790751d095707da46cfaacb6f89c654c04510eeee->enter($__internal_f7d9bbf780bb5c1a74ecb55790751d095707da46cfaacb6f89c654c04510eeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f7d9bbf780bb5c1a74ecb55790751d095707da46cfaacb6f89c654c04510eeee->leave($__internal_f7d9bbf780bb5c1a74ecb55790751d095707da46cfaacb6f89c654c04510eeee_prof);

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
