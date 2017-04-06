<?php

/* @Entity/Default/index.html.twig */
class __TwigTemplate_b29b2f4abb45cdfb2636440b9606f71c9c22139298306594711c3e505c4308aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Entity/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9388de51e8f23741e216c79714e2cfb53ca8ac7bd82674ca8a775645a4d4315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9388de51e8f23741e216c79714e2cfb53ca8ac7bd82674ca8a775645a4d4315->enter($__internal_f9388de51e8f23741e216c79714e2cfb53ca8ac7bd82674ca8a775645a4d4315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Entity/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9388de51e8f23741e216c79714e2cfb53ca8ac7bd82674ca8a775645a4d4315->leave($__internal_f9388de51e8f23741e216c79714e2cfb53ca8ac7bd82674ca8a775645a4d4315_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_297c14131a6159d453cab6ac1d766fd8a4938204d9c58c5af3d3aebc43c9abfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297c14131a6159d453cab6ac1d766fd8a4938204d9c58c5af3d3aebc43c9abfa->enter($__internal_297c14131a6159d453cab6ac1d766fd8a4938204d9c58c5af3d3aebc43c9abfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        
        $__internal_297c14131a6159d453cab6ac1d766fd8a4938204d9c58c5af3d3aebc43c9abfa->leave($__internal_297c14131a6159d453cab6ac1d766fd8a4938204d9c58c5af3d3aebc43c9abfa_prof);

    }

    public function getTemplateName()
    {
        return "@Entity/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}

{% endblock %}
", "@Entity/Default/index.html.twig", "C:\\xampp\\htdocs\\asignTask\\src\\EntityBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
