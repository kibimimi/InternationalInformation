<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_ddac9e9e54404154596d271f91cf8e34b7d4e47dce9530f4fe83b8855be350ad extends Twig_Template
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
        $__internal_bd42766e3c909920860d5bb35bc5be29c6a92f319613715efb7bebfe8d5fe557 = $this->env->getExtension("native_profiler");
        $__internal_bd42766e3c909920860d5bb35bc5be29c6a92f319613715efb7bebfe8d5fe557->enter($__internal_bd42766e3c909920860d5bb35bc5be29c6a92f319613715efb7bebfe8d5fe557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_bd42766e3c909920860d5bb35bc5be29c6a92f319613715efb7bebfe8d5fe557->leave($__internal_bd42766e3c909920860d5bb35bc5be29c6a92f319613715efb7bebfe8d5fe557_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
