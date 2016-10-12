<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1a8b1b63a5e34be4377dc1574c49d6885c450d953b4a905c837aaccdd66ab3dd extends Twig_Template
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
        $__internal_7683944aef7b1b27b504f55a82b289bc39ace18d7e665c484c417d59f5534613 = $this->env->getExtension("native_profiler");
        $__internal_7683944aef7b1b27b504f55a82b289bc39ace18d7e665c484c417d59f5534613->enter($__internal_7683944aef7b1b27b504f55a82b289bc39ace18d7e665c484c417d59f5534613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7683944aef7b1b27b504f55a82b289bc39ace18d7e665c484c417d59f5534613->leave($__internal_7683944aef7b1b27b504f55a82b289bc39ace18d7e665c484c417d59f5534613_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
