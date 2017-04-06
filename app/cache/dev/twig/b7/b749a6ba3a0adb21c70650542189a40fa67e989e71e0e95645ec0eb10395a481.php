<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d33e302dd796ee4beedd9573c282ee6728391f51a9002be9855784281e9ab10a extends Twig_Template
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
        $__internal_e5a5dfc4fe34be1b5ecbb161644b7313b6a094eba75c1a1af9fd3e754bf196d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a5dfc4fe34be1b5ecbb161644b7313b6a094eba75c1a1af9fd3e754bf196d4->enter($__internal_e5a5dfc4fe34be1b5ecbb161644b7313b6a094eba75c1a1af9fd3e754bf196d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e5a5dfc4fe34be1b5ecbb161644b7313b6a094eba75c1a1af9fd3e754bf196d4->leave($__internal_e5a5dfc4fe34be1b5ecbb161644b7313b6a094eba75c1a1af9fd3e754bf196d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\asignTask\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
