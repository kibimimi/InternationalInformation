<?php

/* @Myforms/Default/bootstrap.html.twig */
class __TwigTemplate_ffe52395206b2294585b3f58e222b7a6db1afb85c485bcac1efd12d151466efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Myforms/Default/bootstrap.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35413c5e07abf1f473bd02a53686b3b9d16a10a07ffb8fc04daa6a1c823b1718 = $this->env->getExtension("native_profiler");
        $__internal_35413c5e07abf1f473bd02a53686b3b9d16a10a07ffb8fc04daa6a1c823b1718->enter($__internal_35413c5e07abf1f473bd02a53686b3b9d16a10a07ffb8fc04daa6a1c823b1718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Myforms/Default/bootstrap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35413c5e07abf1f473bd02a53686b3b9d16a10a07ffb8fc04daa6a1c823b1718->leave($__internal_35413c5e07abf1f473bd02a53686b3b9d16a10a07ffb8fc04daa6a1c823b1718_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe5805b95e4a9d94231c9b2b8b2813a29041e2f215f75fccf9b5eeb23219a4a1 = $this->env->getExtension("native_profiler");
        $__internal_fe5805b95e4a9d94231c9b2b8b2813a29041e2f215f75fccf9b5eeb23219a4a1->enter($__internal_fe5805b95e4a9d94231c9b2b8b2813a29041e2f215f75fccf9b5eeb23219a4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "

";
        
        $__internal_fe5805b95e4a9d94231c9b2b8b2813a29041e2f215f75fccf9b5eeb23219a4a1->leave($__internal_fe5805b95e4a9d94231c9b2b8b2813a29041e2f215f75fccf9b5eeb23219a4a1_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_56eba26ae8cbac69e7d6e39bc1c97bcfcdc1b8f6a65d62333e11720d7e71ca4c = $this->env->getExtension("native_profiler");
        $__internal_56eba26ae8cbac69e7d6e39bc1c97bcfcdc1b8f6a65d62333e11720d7e71ca4c->enter($__internal_56eba26ae8cbac69e7d6e39bc1c97bcfcdc1b8f6a65d62333e11720d7e71ca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"col-lg-6\">
    <form action=\"#\" class=\"form-horizontal\" method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </form>
</div>
";
        
        $__internal_56eba26ae8cbac69e7d6e39bc1c97bcfcdc1b8f6a65d62333e11720d7e71ca4c->leave($__internal_56eba26ae8cbac69e7d6e39bc1c97bcfcdc1b8f6a65d62333e11720d7e71ca4c_prof);

    }

    public function getTemplateName()
    {
        return "@Myforms/Default/bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  64 => 7,  61 => 6,  55 => 5,  46 => 12,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block body %}

{% block content %}
<div class=\"col-lg-6\">
    <form action=\"#\" class=\"form-horizontal\" method=\"post\" {{ form_enctype(form) }}>
        {{ form_widget(form) }}
    </form>
</div>
{% endblock content %}


{% endblock body %}";
    }
}
