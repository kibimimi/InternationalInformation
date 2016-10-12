<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_73ea7d0ac9103848002ca573e95514813191cdff54aa1cb67f527023d5c2f59e extends Twig_Template
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
        $__internal_21d3711b4ca80e8216b059bb6ef650bebd944c043ce9ede3e7e36782fd676627 = $this->env->getExtension("native_profiler");
        $__internal_21d3711b4ca80e8216b059bb6ef650bebd944c043ce9ede3e7e36782fd676627->enter($__internal_21d3711b4ca80e8216b059bb6ef650bebd944c043ce9ede3e7e36782fd676627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_21d3711b4ca80e8216b059bb6ef650bebd944c043ce9ede3e7e36782fd676627->leave($__internal_21d3711b4ca80e8216b059bb6ef650bebd944c043ce9ede3e7e36782fd676627_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
