<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1df2e60f25b7d8a5b8bed81572cd8a49f85b9ae8efe0b0fc0d57735703dd6221 extends Twig_Template
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
        $__internal_efb25e84f7c616119d39960016bba8aea5443d57fdfd19d914673119f21beda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb25e84f7c616119d39960016bba8aea5443d57fdfd19d914673119f21beda8->enter($__internal_efb25e84f7c616119d39960016bba8aea5443d57fdfd19d914673119f21beda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb25e84f7c616119d39960016bba8aea5443d57fdfd19d914673119f21beda8->leave($__internal_efb25e84f7c616119d39960016bba8aea5443d57fdfd19d914673119f21beda8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9490737badfc8bccb9c2056fa93ce25187236c91aab261ad52507420a4a0a5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9490737badfc8bccb9c2056fa93ce25187236c91aab261ad52507420a4a0a5e0->enter($__internal_9490737badfc8bccb9c2056fa93ce25187236c91aab261ad52507420a4a0a5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9490737badfc8bccb9c2056fa93ce25187236c91aab261ad52507420a4a0a5e0->leave($__internal_9490737badfc8bccb9c2056fa93ce25187236c91aab261ad52507420a4a0a5e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95bd222df5dca24d7b7507e93321196c51654434d40092c9cd8a9847c7a1196d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bd222df5dca24d7b7507e93321196c51654434d40092c9cd8a9847c7a1196d->enter($__internal_95bd222df5dca24d7b7507e93321196c51654434d40092c9cd8a9847c7a1196d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_95bd222df5dca24d7b7507e93321196c51654434d40092c9cd8a9847c7a1196d->leave($__internal_95bd222df5dca24d7b7507e93321196c51654434d40092c9cd8a9847c7a1196d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abb3db82ef3ed02963c31d95ab5b5b6cbfda44fc5d762a622e71ccda6c0035f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb3db82ef3ed02963c31d95ab5b5b6cbfda44fc5d762a622e71ccda6c0035f7->enter($__internal_abb3db82ef3ed02963c31d95ab5b5b6cbfda44fc5d762a622e71ccda6c0035f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_abb3db82ef3ed02963c31d95ab5b5b6cbfda44fc5d762a622e71ccda6c0035f7->leave($__internal_abb3db82ef3ed02963c31d95ab5b5b6cbfda44fc5d762a622e71ccda6c0035f7_prof);

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
