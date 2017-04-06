<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_aacc5666671c987a525355e0a0f4954ad988eb02e0b9c044cd842548d2e3cfca extends Twig_Template
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
        $__internal_d1acab3950be3d09fd3eeffa1f9634f9422af7d2453e6c0d8ce12a47f84b3dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1acab3950be3d09fd3eeffa1f9634f9422af7d2453e6c0d8ce12a47f84b3dec->enter($__internal_d1acab3950be3d09fd3eeffa1f9634f9422af7d2453e6c0d8ce12a47f84b3dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d1acab3950be3d09fd3eeffa1f9634f9422af7d2453e6c0d8ce12a47f84b3dec->leave($__internal_d1acab3950be3d09fd3eeffa1f9634f9422af7d2453e6c0d8ce12a47f84b3dec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
