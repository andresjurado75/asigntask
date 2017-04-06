<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f8acbfe6c87c4074bc11aad5baf01bfe090a2b7d3c19e1c76cc7694920abcf60 extends Twig_Template
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
        $__internal_588160af38fe32f372352de1e4807cf74079833277c183e2620aa5a7fd058a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588160af38fe32f372352de1e4807cf74079833277c183e2620aa5a7fd058a23->enter($__internal_588160af38fe32f372352de1e4807cf74079833277c183e2620aa5a7fd058a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_588160af38fe32f372352de1e4807cf74079833277c183e2620aa5a7fd058a23->leave($__internal_588160af38fe32f372352de1e4807cf74079833277c183e2620aa5a7fd058a23_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7cb980c6072d6b53953ab47abc09c28c64fe5040e1da83d6dd71475127cca37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb980c6072d6b53953ab47abc09c28c64fe5040e1da83d6dd71475127cca37d->enter($__internal_7cb980c6072d6b53953ab47abc09c28c64fe5040e1da83d6dd71475127cca37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7cb980c6072d6b53953ab47abc09c28c64fe5040e1da83d6dd71475127cca37d->leave($__internal_7cb980c6072d6b53953ab47abc09c28c64fe5040e1da83d6dd71475127cca37d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
