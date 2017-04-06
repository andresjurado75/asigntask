<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4321466265f9fbee27406b3299fa8a416d0fa3181137c37ef144d987127aaaea extends Twig_Template
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
        $__internal_ece8094b1177cf921e98a99e45ca52a3f9920a422b9110904e9ab2ad9445be86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece8094b1177cf921e98a99e45ca52a3f9920a422b9110904e9ab2ad9445be86->enter($__internal_ece8094b1177cf921e98a99e45ca52a3f9920a422b9110904e9ab2ad9445be86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ece8094b1177cf921e98a99e45ca52a3f9920a422b9110904e9ab2ad9445be86->leave($__internal_ece8094b1177cf921e98a99e45ca52a3f9920a422b9110904e9ab2ad9445be86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
