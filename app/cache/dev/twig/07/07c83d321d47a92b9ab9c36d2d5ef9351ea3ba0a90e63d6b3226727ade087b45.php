<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9a9ff1cad05c91445183df4a546a5f0d037f1de835cc2f0edaaec8d08dd5c42f extends Twig_Template
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
        $__internal_17a5d0fd937ce67c1dedf06324f20fd80a1154bbba784a9e74ae6b42f132a36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a5d0fd937ce67c1dedf06324f20fd80a1154bbba784a9e74ae6b42f132a36d->enter($__internal_17a5d0fd937ce67c1dedf06324f20fd80a1154bbba784a9e74ae6b42f132a36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_17a5d0fd937ce67c1dedf06324f20fd80a1154bbba784a9e74ae6b42f132a36d->leave($__internal_17a5d0fd937ce67c1dedf06324f20fd80a1154bbba784a9e74ae6b42f132a36d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
