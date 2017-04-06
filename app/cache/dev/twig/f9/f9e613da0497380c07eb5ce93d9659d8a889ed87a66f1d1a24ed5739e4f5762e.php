<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3fa087f8d56101f3e390c71cdbad4cabfb759de18a8326fb6ad0682d04703fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1d704c1ba6f0712ae251bce0ff0c5a036fffab22e51de8bfcac2f00d10a7e321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d704c1ba6f0712ae251bce0ff0c5a036fffab22e51de8bfcac2f00d10a7e321->enter($__internal_1d704c1ba6f0712ae251bce0ff0c5a036fffab22e51de8bfcac2f00d10a7e321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d704c1ba6f0712ae251bce0ff0c5a036fffab22e51de8bfcac2f00d10a7e321->leave($__internal_1d704c1ba6f0712ae251bce0ff0c5a036fffab22e51de8bfcac2f00d10a7e321_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e341aca23e2543d0341787c06d06b4c6f0f6b5932882e2123ebf1a7ac7d6c055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e341aca23e2543d0341787c06d06b4c6f0f6b5932882e2123ebf1a7ac7d6c055->enter($__internal_e341aca23e2543d0341787c06d06b4c6f0f6b5932882e2123ebf1a7ac7d6c055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e341aca23e2543d0341787c06d06b4c6f0f6b5932882e2123ebf1a7ac7d6c055->leave($__internal_e341aca23e2543d0341787c06d06b4c6f0f6b5932882e2123ebf1a7ac7d6c055_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb2cf8d5dd20dc482cc8dbf597d3f1bc58549c2f8c2dedfc6a99110b48a3ef9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2cf8d5dd20dc482cc8dbf597d3f1bc58549c2f8c2dedfc6a99110b48a3ef9f->enter($__internal_cb2cf8d5dd20dc482cc8dbf597d3f1bc58549c2f8c2dedfc6a99110b48a3ef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb2cf8d5dd20dc482cc8dbf597d3f1bc58549c2f8c2dedfc6a99110b48a3ef9f->leave($__internal_cb2cf8d5dd20dc482cc8dbf597d3f1bc58549c2f8c2dedfc6a99110b48a3ef9f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6060fac97032c90630ac5daac734249d60bc55cd095dc310396d22732c3a8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6060fac97032c90630ac5daac734249d60bc55cd095dc310396d22732c3a8e0->enter($__internal_c6060fac97032c90630ac5daac734249d60bc55cd095dc310396d22732c3a8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c6060fac97032c90630ac5daac734249d60bc55cd095dc310396d22732c3a8e0->leave($__internal_c6060fac97032c90630ac5daac734249d60bc55cd095dc310396d22732c3a8e0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
