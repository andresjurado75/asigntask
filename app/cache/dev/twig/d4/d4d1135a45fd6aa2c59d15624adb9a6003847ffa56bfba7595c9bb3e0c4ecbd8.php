<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1f2e76c2f67f001b3ef2b255b69d69bda86047d2ce24e3ea94e17916543de1c3 extends Twig_Template
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
        $__internal_3cf060de14417ff4e8c1904014cca4d57dc2a56e77feb0c8dee7a356ae2e1b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf060de14417ff4e8c1904014cca4d57dc2a56e77feb0c8dee7a356ae2e1b1b->enter($__internal_3cf060de14417ff4e8c1904014cca4d57dc2a56e77feb0c8dee7a356ae2e1b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3cf060de14417ff4e8c1904014cca4d57dc2a56e77feb0c8dee7a356ae2e1b1b->leave($__internal_3cf060de14417ff4e8c1904014cca4d57dc2a56e77feb0c8dee7a356ae2e1b1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
