<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6a04de7a2eec914cace3cb6ac74273387fe388f8b0b127899e1c0acc013c198e extends Twig_Template
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
        $__internal_0ea49a0a5e0e1462b11ba27064ffee10dd496399fbf97c865e2ffe45837cbbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea49a0a5e0e1462b11ba27064ffee10dd496399fbf97c865e2ffe45837cbbc9->enter($__internal_0ea49a0a5e0e1462b11ba27064ffee10dd496399fbf97c865e2ffe45837cbbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0ea49a0a5e0e1462b11ba27064ffee10dd496399fbf97c865e2ffe45837cbbc9->leave($__internal_0ea49a0a5e0e1462b11ba27064ffee10dd496399fbf97c865e2ffe45837cbbc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
