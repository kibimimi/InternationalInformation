<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ca28c480ea2f12ed5612cbc0f8494559266f9d969472adcb1e916ee5b0ea1ab4 extends Twig_Template
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
        $__internal_a328919816fcf3e81d1e8ab37c182c4cc6f2426432472b6c83954b0c202af64a = $this->env->getExtension("native_profiler");
        $__internal_a328919816fcf3e81d1e8ab37c182c4cc6f2426432472b6c83954b0c202af64a->enter($__internal_a328919816fcf3e81d1e8ab37c182c4cc6f2426432472b6c83954b0c202af64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a328919816fcf3e81d1e8ab37c182c4cc6f2426432472b6c83954b0c202af64a->leave($__internal_a328919816fcf3e81d1e8ab37c182c4cc6f2426432472b6c83954b0c202af64a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
