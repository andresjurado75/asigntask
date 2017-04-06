<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c413173839a13d32630309ed050bfabdcfa7ce1fd0749f7cfa3c297cd12659b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb81d4397447079377bd30cce37062cfd5c7cb7cb9241bea080568317407f884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb81d4397447079377bd30cce37062cfd5c7cb7cb9241bea080568317407f884->enter($__internal_cb81d4397447079377bd30cce37062cfd5c7cb7cb9241bea080568317407f884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cb81d4397447079377bd30cce37062cfd5c7cb7cb9241bea080568317407f884->leave($__internal_cb81d4397447079377bd30cce37062cfd5c7cb7cb9241bea080568317407f884_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_64137d0f49c93876a8790a39e5101dd466afb779f9ec2261fc711e9d7ae34f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64137d0f49c93876a8790a39e5101dd466afb779f9ec2261fc711e9d7ae34f17->enter($__internal_64137d0f49c93876a8790a39e5101dd466afb779f9ec2261fc711e9d7ae34f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64137d0f49c93876a8790a39e5101dd466afb779f9ec2261fc711e9d7ae34f17->leave($__internal_64137d0f49c93876a8790a39e5101dd466afb779f9ec2261fc711e9d7ae34f17_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
