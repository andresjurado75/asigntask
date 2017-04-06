<?php

/* @Safety/Default/register.html.twig */
class __TwigTemplate_1addcfc68d68020567fc38f651a8e1354ca31c7d672e9b6027c1d205c0e04b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Safety/Default/register.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61b24da30d47d51c60ba6fe6875abba681ea95e7afdb45515f3113658454a2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b24da30d47d51c60ba6fe6875abba681ea95e7afdb45515f3113658454a2a0->enter($__internal_61b24da30d47d51c60ba6fe6875abba681ea95e7afdb45515f3113658454a2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Safety/Default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b24da30d47d51c60ba6fe6875abba681ea95e7afdb45515f3113658454a2a0->leave($__internal_61b24da30d47d51c60ba6fe6875abba681ea95e7afdb45515f3113658454a2a0_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c3a0793348ff84f24e3eef1db9c97b74ae15c3f1c8b00d5a111de2db48c0c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3a0793348ff84f24e3eef1db9c97b74ae15c3f1c8b00d5a111de2db48c0c0a->enter($__internal_3c3a0793348ff84f24e3eef1db9c97b74ae15c3f1c8b00d5a111de2db48c0c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/SafetyView/stylesheet.css"), "html", null, true);
        echo "\">
";
        
        $__internal_3c3a0793348ff84f24e3eef1db9c97b74ae15c3f1c8b00d5a111de2db48c0c0a->leave($__internal_3c3a0793348ff84f24e3eef1db9c97b74ae15c3f1c8b00d5a111de2db48c0c0a_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_57f515cf8c6b44adab85161a908e2af63b58c38ded4c7763850e12824d025c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f515cf8c6b44adab85161a908e2af63b58c38ded4c7763850e12824d025c81->enter($__internal_57f515cf8c6b44adab85161a908e2af63b58c38ded4c7763850e12824d025c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
    <nav class=\"navbar navbar-default\" id=\"nav\">
        <div class=\"container-fluid\" id=\"div-div\">
            <div class=\"navbar-header\">
                <span class=\"glyphicon glyphicon-object-align-left\" id=\"icon\"></span>
            </div>
            <div id=\"div-a\">
                <a href=\"#\">
                    <span>Registrar Usuario</span>
                </a>
                <a href=\"#\">
                    <span>Actualizar Usuario</span>
                </a>
                <a href=\"#\">
                    <span>Eliminar Usuario</span>
                </a>
            </div>
        </div>
    </nav>

    ";
        // line 39
        echo "    <div id=\"div-ol\">
        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a class=\"active\">Register</a></li>
        </ol>
    </div>
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "registerAction"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 46
            echo "        ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    <div class=\"container\">
        <div class=\"panel panel-primary row\">
            <div class=\"panel-heading\"><h3 class=\"panel-title\">Registrar Usuario</h3></div>
            <div class=\"panel-body col-lg-12\">
                ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"span\">Identificación Usuario</span>
                    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nuip", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese su Identificación")));
        echo "
                </div>
                <div>
                    <span class=\"text-danger\"> ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nuip", array()), 'errors');
        echo " </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"span\">Nombre(s) Usuario</span>
                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese su Nombre(s)")));
        echo "
                </div>
                <div>
                    <span class=\"text-danger\"> ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo " </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"span\">Apellido(s) Usuario</span>
                    ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese su Apellido(s)")));
        echo "
                </div>
                <div>
                    <span class=\"text-danger\"> ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo " </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"span\">Telefono Usuario</span>
                    ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese su Telefono")));
        echo "
                </div>
                <div>
                    <span class=\"text-danger\"> ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'errors');
        echo " </span>
                </div>
                <div id=\"div-form\">
                    <div class=\"col-md-2 col-md-offset-5\">
                        ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Registrar", array()), 'widget');
        echo "
                    </div>
                </div>
                ";
        // line 86
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_57f515cf8c6b44adab85161a908e2af63b58c38ded4c7763850e12824d025c81->leave($__internal_57f515cf8c6b44adab85161a908e2af63b58c38ded4c7763850e12824d025c81_prof);

    }

    public function getTemplateName()
    {
        return "@Safety/Default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 86,  164 => 83,  157 => 79,  151 => 76,  144 => 72,  138 => 69,  131 => 65,  125 => 62,  118 => 58,  112 => 55,  106 => 52,  100 => 48,  91 => 46,  87 => 45,  79 => 39,  57 => 18,  51 => 17,  41 => 15,  35 => 14,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{#{% block body %}#}
    {#<nav>#}
    {#<div class=\"nav-wrapper\">#}
    {#<a href=\"\" class=\"brand-logo\">Logo</a>#}
    {#<ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">#}
    {#<li><a href=\"\">sass</a></li>#}
    {#<li><a href=\"\">sass <span class=\"new badge\">4</span></a></li>#}
    {#<li><a href=\"\">sass</a></li>#}
    {#</ul>#}
    {#</div>#}
    {#</nav>#}
{#{% endblock %}#}
{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/SafetyView/stylesheet.css') }}\">
{% endblock %}
{% block body %}

    <nav class=\"navbar navbar-default\" id=\"nav\">
        <div class=\"container-fluid\" id=\"div-div\">
            <div class=\"navbar-header\">
                <span class=\"glyphicon glyphicon-object-align-left\" id=\"icon\"></span>
            </div>
            <div id=\"div-a\">
                <a href=\"#\">
                    <span>Registrar Usuario</span>
                </a>
                <a href=\"#\">
                    <span>Actualizar Usuario</span>
                </a>
                <a href=\"#\">
                    <span>Eliminar Usuario</span>
                </a>
            </div>
        </div>
    </nav>

    {# Cuerpo register.html.twig #}
    <div id=\"div-ol\">
        <ol class=\"breadcrumb\">
            <li><a href=\"#\">Home</a></li>
            <li><a class=\"active\">Register</a></li>
        </ol>
    </div>
    {% for flashMessage in app.session.flashBag.get(\"registerAction\") %}
        {{ flashMessage }}
    {% endfor %}
    <div class=\"container\">
        <div class=\"panel panel-primary row\">
            <div class=\"panel-heading\"><h3 class=\"panel-title\">Registrar Usuario</h3></div>
            <div class=\"panel-body col-lg-12\">
                {{ form_start(form, {\"attr\":{\"novalidate\":\"novalidate\"}}) }}
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"span\">Identificación Usuario</span>
                    {{ form_widget(form.nuip,{\"attr\":{\"class\":\"form-control\", \"placeholder\":\"Ingrese su Identificación\"}}) }}
                </div>
                <div>
                    <span class=\"text-danger\"> {{ form_errors(form.nuip) }} </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"span\">Nombre(s) Usuario</span>
                    {{ form_widget(form.name,{\"attr\":{\"class\":\"form-control\", \"placeholder\":\"Ingrese su Nombre(s)\"}}) }}
                </div>
                <div>
                    <span class=\"text-danger\"> {{ form_errors(form.name) }} </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"span\">Apellido(s) Usuario</span>
                    {{ form_widget(form.lastname,{\"attr\":{\"class\":\"form-control\", \"placeholder\":\"Ingrese su Apellido(s)\"}}) }}
                </div>
                <div>
                    <span class=\"text-danger\"> {{ form_errors(form.lastname) }} </span>
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" id=\"span\">Telefono Usuario</span>
                    {{ form_widget(form.tel,{\"attr\":{\"class\":\"form-control\", \"placeholder\":\"Ingrese su Telefono\"}}) }}
                </div>
                <div>
                    <span class=\"text-danger\"> {{ form_errors(form.tel) }} </span>
                </div>
                <div id=\"div-form\">
                    <div class=\"col-md-2 col-md-offset-5\">
                        {{ form_widget(form.Registrar) }}
                    </div>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

", "@Safety/Default/register.html.twig", "C:\\xampp\\htdocs\\asignTask\\src\\SafetyBundle\\Resources\\views\\Default\\register.html.twig");
    }
}
