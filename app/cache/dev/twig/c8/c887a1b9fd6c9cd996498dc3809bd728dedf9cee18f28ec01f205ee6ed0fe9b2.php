<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_2c529204143ff91f37689ef0591c4b370cb550f04c530309241b333dad0d2b65 extends Twig_Template
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
        $__internal_3b5658e87bb217ce7e20fa539270f5c98941664a9d9b7ea8b170a9a4609e6031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5658e87bb217ce7e20fa539270f5c98941664a9d9b7ea8b170a9a4609e6031->enter($__internal_3b5658e87bb217ce7e20fa539270f5c98941664a9d9b7ea8b170a9a4609e6031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3b5658e87bb217ce7e20fa539270f5c98941664a9d9b7ea8b170a9a4609e6031->leave($__internal_3b5658e87bb217ce7e20fa539270f5c98941664a9d9b7ea8b170a9a4609e6031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
