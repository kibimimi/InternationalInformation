<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_51ce6df71c2a72c8955d4c6b742db8ffe9719398b748f337ed8b4084c1096f70 extends Twig_Template
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
        $__internal_31e8809698a837efc279f8c77ee2eca488d3a879c8dbba0adcfb75a0d291637a = $this->env->getExtension("native_profiler");
        $__internal_31e8809698a837efc279f8c77ee2eca488d3a879c8dbba0adcfb75a0d291637a->enter($__internal_31e8809698a837efc279f8c77ee2eca488d3a879c8dbba0adcfb75a0d291637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_31e8809698a837efc279f8c77ee2eca488d3a879c8dbba0adcfb75a0d291637a->leave($__internal_31e8809698a837efc279f8c77ee2eca488d3a879c8dbba0adcfb75a0d291637a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
