<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a591dc6707995370eead1027c4a68a8a1b22739bc93fc9589f0ae4f0ce559191 extends Twig_Template
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
        $__internal_10cfa8f67a1d4e4b9c2b6f4321481c1a553dd8fbb5e64936e8e7f671c9779e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cfa8f67a1d4e4b9c2b6f4321481c1a553dd8fbb5e64936e8e7f671c9779e64->enter($__internal_10cfa8f67a1d4e4b9c2b6f4321481c1a553dd8fbb5e64936e8e7f671c9779e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_10cfa8f67a1d4e4b9c2b6f4321481c1a553dd8fbb5e64936e8e7f671c9779e64->leave($__internal_10cfa8f67a1d4e4b9c2b6f4321481c1a553dd8fbb5e64936e8e7f671c9779e64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
