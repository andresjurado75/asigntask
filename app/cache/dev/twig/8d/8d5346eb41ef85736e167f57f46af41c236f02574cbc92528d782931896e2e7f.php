<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3b18b8c19970e561613b74de66efcb3e87d0e2a50ed4e0ad5ad282a6577a0454 extends Twig_Template
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
        $__internal_c157e7e3bf9c02f42d88c8280a9ade0f2ad2fe34a66c3610dd9a244361f38eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c157e7e3bf9c02f42d88c8280a9ade0f2ad2fe34a66c3610dd9a244361f38eec->enter($__internal_c157e7e3bf9c02f42d88c8280a9ade0f2ad2fe34a66c3610dd9a244361f38eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c157e7e3bf9c02f42d88c8280a9ade0f2ad2fe34a66c3610dd9a244361f38eec->leave($__internal_c157e7e3bf9c02f42d88c8280a9ade0f2ad2fe34a66c3610dd9a244361f38eec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
