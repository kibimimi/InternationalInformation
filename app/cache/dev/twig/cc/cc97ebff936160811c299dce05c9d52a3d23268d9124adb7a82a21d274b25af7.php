<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b18922d81a9268b3ea1b79506655d784aca05410e8bf9de3cf781856b753c348 extends Twig_Template
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
        $__internal_c0f6759eaeb44caa51e8c261c5d4dcead5f0c2ea02477e71cdba6ef3262ee955 = $this->env->getExtension("native_profiler");
        $__internal_c0f6759eaeb44caa51e8c261c5d4dcead5f0c2ea02477e71cdba6ef3262ee955->enter($__internal_c0f6759eaeb44caa51e8c261c5d4dcead5f0c2ea02477e71cdba6ef3262ee955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c0f6759eaeb44caa51e8c261c5d4dcead5f0c2ea02477e71cdba6ef3262ee955->leave($__internal_c0f6759eaeb44caa51e8c261c5d4dcead5f0c2ea02477e71cdba6ef3262ee955_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
