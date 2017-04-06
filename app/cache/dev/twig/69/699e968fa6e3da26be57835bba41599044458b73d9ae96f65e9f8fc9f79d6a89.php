<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_18b78580693cbbe42021e9d06352741b2c11f3bafa42ce4271b9e5bbbdc09297 extends Twig_Template
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
        $__internal_41ac1b37f6f1fcf70346266124dfac3c6e66561fb0ed586a93c197ce4ca56fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ac1b37f6f1fcf70346266124dfac3c6e66561fb0ed586a93c197ce4ca56fa6->enter($__internal_41ac1b37f6f1fcf70346266124dfac3c6e66561fb0ed586a93c197ce4ca56fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_41ac1b37f6f1fcf70346266124dfac3c6e66561fb0ed586a93c197ce4ca56fa6->leave($__internal_41ac1b37f6f1fcf70346266124dfac3c6e66561fb0ed586a93c197ce4ca56fa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
