<?php

/* EntityBundle:Default:index.html.twig */
class __TwigTemplate_c13ab6c9050082c8c292ff8e469f01c8bb4cb6d75965d7aa5828cd3e5603cba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EntityBundle:Default:index.html.twig", 1);
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
        $__internal_652016718fc275f0a23dd8e88f581186d565a8907d3b0f3b3800c6622063f394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652016718fc275f0a23dd8e88f581186d565a8907d3b0f3b3800c6622063f394->enter($__internal_652016718fc275f0a23dd8e88f581186d565a8907d3b0f3b3800c6622063f394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EntityBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_652016718fc275f0a23dd8e88f581186d565a8907d3b0f3b3800c6622063f394->leave($__internal_652016718fc275f0a23dd8e88f581186d565a8907d3b0f3b3800c6622063f394_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b6aca14e669580afbc8ab64a292ab71808e30bed2f71461f6dae05662dfb752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6aca14e669580afbc8ab64a292ab71808e30bed2f71461f6dae05662dfb752->enter($__internal_7b6aca14e669580afbc8ab64a292ab71808e30bed2f71461f6dae05662dfb752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
";
        
        $__internal_7b6aca14e669580afbc8ab64a292ab71808e30bed2f71461f6dae05662dfb752->leave($__internal_7b6aca14e669580afbc8ab64a292ab71808e30bed2f71461f6dae05662dfb752_prof);

    }

    public function getTemplateName()
    {
        return "EntityBundle:Default:index.html.twig";
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
", "EntityBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\asignTask\\src\\EntityBundle/Resources/views/Default/index.html.twig");
    }
}
