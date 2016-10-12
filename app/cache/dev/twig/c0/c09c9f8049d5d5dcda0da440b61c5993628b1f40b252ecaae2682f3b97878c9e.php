<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9d8ac944da24ca7e43d42cc05cd0d49e2196579c1a8390385d776ee6a45b63be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e39d9e771d1688301ef4de01e30aae9e3a171ca11320219d5e30f6975416f7bd = $this->env->getExtension("native_profiler");
        $__internal_e39d9e771d1688301ef4de01e30aae9e3a171ca11320219d5e30f6975416f7bd->enter($__internal_e39d9e771d1688301ef4de01e30aae9e3a171ca11320219d5e30f6975416f7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e39d9e771d1688301ef4de01e30aae9e3a171ca11320219d5e30f6975416f7bd->leave($__internal_e39d9e771d1688301ef4de01e30aae9e3a171ca11320219d5e30f6975416f7bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_364bc0c50267feb39ba8949954472b62b92295fabcfed986fab2c571cca830af = $this->env->getExtension("native_profiler");
        $__internal_364bc0c50267feb39ba8949954472b62b92295fabcfed986fab2c571cca830af->enter($__internal_364bc0c50267feb39ba8949954472b62b92295fabcfed986fab2c571cca830af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_364bc0c50267feb39ba8949954472b62b92295fabcfed986fab2c571cca830af->leave($__internal_364bc0c50267feb39ba8949954472b62b92295fabcfed986fab2c571cca830af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f26e8dc419fceabe3c4b497b007ece6254d85d6420cc68a1d4ffe71aa2139f2 = $this->env->getExtension("native_profiler");
        $__internal_6f26e8dc419fceabe3c4b497b007ece6254d85d6420cc68a1d4ffe71aa2139f2->enter($__internal_6f26e8dc419fceabe3c4b497b007ece6254d85d6420cc68a1d4ffe71aa2139f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6f26e8dc419fceabe3c4b497b007ece6254d85d6420cc68a1d4ffe71aa2139f2->leave($__internal_6f26e8dc419fceabe3c4b497b007ece6254d85d6420cc68a1d4ffe71aa2139f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e9bc56f57925144cf6f1d06ee3dea98202e22d09c005c62edd5865213e206c7 = $this->env->getExtension("native_profiler");
        $__internal_2e9bc56f57925144cf6f1d06ee3dea98202e22d09c005c62edd5865213e206c7->enter($__internal_2e9bc56f57925144cf6f1d06ee3dea98202e22d09c005c62edd5865213e206c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2e9bc56f57925144cf6f1d06ee3dea98202e22d09c005c62edd5865213e206c7->leave($__internal_2e9bc56f57925144cf6f1d06ee3dea98202e22d09c005c62edd5865213e206c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
