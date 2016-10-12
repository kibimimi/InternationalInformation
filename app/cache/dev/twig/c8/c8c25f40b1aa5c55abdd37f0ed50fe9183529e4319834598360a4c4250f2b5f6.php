<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d3976e8597164f3ce5927fa4451495419e9ebdab6e37dff2789251f770722df1 extends Twig_Template
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
        $__internal_b0a55de6b84b448c9c4d4a6f906fb6033c2ef4661eaa8d856516a882d71a865d = $this->env->getExtension("native_profiler");
        $__internal_b0a55de6b84b448c9c4d4a6f906fb6033c2ef4661eaa8d856516a882d71a865d->enter($__internal_b0a55de6b84b448c9c4d4a6f906fb6033c2ef4661eaa8d856516a882d71a865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b0a55de6b84b448c9c4d4a6f906fb6033c2ef4661eaa8d856516a882d71a865d->leave($__internal_b0a55de6b84b448c9c4d4a6f906fb6033c2ef4661eaa8d856516a882d71a865d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
