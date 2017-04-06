<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0d9bd3774e38dc19e277304b2fdd588f330d01914605625063a02aaab4fee98c extends Twig_Template
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
        $__internal_5140bd01c42867cc2ebf257d514307cbe2ea5d3de5cdc92528ae70a4526a6d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140bd01c42867cc2ebf257d514307cbe2ea5d3de5cdc92528ae70a4526a6d19->enter($__internal_5140bd01c42867cc2ebf257d514307cbe2ea5d3de5cdc92528ae70a4526a6d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5140bd01c42867cc2ebf257d514307cbe2ea5d3de5cdc92528ae70a4526a6d19->leave($__internal_5140bd01c42867cc2ebf257d514307cbe2ea5d3de5cdc92528ae70a4526a6d19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
