<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a3bdd1ecf8efee8112b0102f7e2f87ee28e22d2422550f306b89f17210a92ef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43eea737d725ce36d39941b6e2a647ff1d60b9e9a0394753ace3a5d3e29bbcdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43eea737d725ce36d39941b6e2a647ff1d60b9e9a0394753ace3a5d3e29bbcdb->enter($__internal_43eea737d725ce36d39941b6e2a647ff1d60b9e9a0394753ace3a5d3e29bbcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_43eea737d725ce36d39941b6e2a647ff1d60b9e9a0394753ace3a5d3e29bbcdb->leave($__internal_43eea737d725ce36d39941b6e2a647ff1d60b9e9a0394753ace3a5d3e29bbcdb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
