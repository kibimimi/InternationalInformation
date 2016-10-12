<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_85c013f57f2ecc95ddc0586f0aa907d752f1a36715e817f968155e8ee49e0c84 extends Twig_Template
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
        $__internal_e55e01cb920e9cf05dd59198c24f135c1fde9376910074be49ad9868cbd70007 = $this->env->getExtension("native_profiler");
        $__internal_e55e01cb920e9cf05dd59198c24f135c1fde9376910074be49ad9868cbd70007->enter($__internal_e55e01cb920e9cf05dd59198c24f135c1fde9376910074be49ad9868cbd70007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e55e01cb920e9cf05dd59198c24f135c1fde9376910074be49ad9868cbd70007->leave($__internal_e55e01cb920e9cf05dd59198c24f135c1fde9376910074be49ad9868cbd70007_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
