<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ffa59a38a878067eda1352e73744977467ff39637a2523b2b04afb488836990c extends Twig_Template
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
        $__internal_d2955d2341e798fd025a8e1bf95e4e3429430ae51c878ebcb4a43cc96f9a9af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2955d2341e798fd025a8e1bf95e4e3429430ae51c878ebcb4a43cc96f9a9af8->enter($__internal_d2955d2341e798fd025a8e1bf95e4e3429430ae51c878ebcb4a43cc96f9a9af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d2955d2341e798fd025a8e1bf95e4e3429430ae51c878ebcb4a43cc96f9a9af8->leave($__internal_d2955d2341e798fd025a8e1bf95e4e3429430ae51c878ebcb4a43cc96f9a9af8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
