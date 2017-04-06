<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7db6c51df47194ac63b056ed05566d6becc2ad63e18a6dd2879dfb2766230d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aca8da4bd3e99b424064aeb549f77cf9ab9f69ad40905908165d9af20253d3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca8da4bd3e99b424064aeb549f77cf9ab9f69ad40905908165d9af20253d3f8->enter($__internal_aca8da4bd3e99b424064aeb549f77cf9ab9f69ad40905908165d9af20253d3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aca8da4bd3e99b424064aeb549f77cf9ab9f69ad40905908165d9af20253d3f8->leave($__internal_aca8da4bd3e99b424064aeb549f77cf9ab9f69ad40905908165d9af20253d3f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2410c9ad12100e397ab65d8c458430c6f760906d5c430a77ebb3351ce0acf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2410c9ad12100e397ab65d8c458430c6f760906d5c430a77ebb3351ce0acf65->enter($__internal_d2410c9ad12100e397ab65d8c458430c6f760906d5c430a77ebb3351ce0acf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d2410c9ad12100e397ab65d8c458430c6f760906d5c430a77ebb3351ce0acf65->leave($__internal_d2410c9ad12100e397ab65d8c458430c6f760906d5c430a77ebb3351ce0acf65_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fcf8258e022d2f805696e814b5e656f2e505f39fbf847b83c9b452e00cf93ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcf8258e022d2f805696e814b5e656f2e505f39fbf847b83c9b452e00cf93ea->enter($__internal_1fcf8258e022d2f805696e814b5e656f2e505f39fbf847b83c9b452e00cf93ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1fcf8258e022d2f805696e814b5e656f2e505f39fbf847b83c9b452e00cf93ea->leave($__internal_1fcf8258e022d2f805696e814b5e656f2e505f39fbf847b83c9b452e00cf93ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b9519944608bcd67366e757bd166bba4f900ced021d23a7854e6fc5ce286d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9519944608bcd67366e757bd166bba4f900ced021d23a7854e6fc5ce286d29->enter($__internal_8b9519944608bcd67366e757bd166bba4f900ced021d23a7854e6fc5ce286d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8b9519944608bcd67366e757bd166bba4f900ced021d23a7854e6fc5ce286d29->leave($__internal_8b9519944608bcd67366e757bd166bba4f900ced021d23a7854e6fc5ce286d29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
