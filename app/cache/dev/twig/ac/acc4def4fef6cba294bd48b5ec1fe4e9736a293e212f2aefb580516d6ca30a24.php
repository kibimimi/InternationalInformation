<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_dff8ccadff07fe890806bc5e90990eace1eb98c9a95605ce3c4951239f770b35 extends Twig_Template
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
        $__internal_82e9241b9cb6077843411b6a9eda76abb1bf6170cc78fe5d4af418da0c5fe75a = $this->env->getExtension("native_profiler");
        $__internal_82e9241b9cb6077843411b6a9eda76abb1bf6170cc78fe5d4af418da0c5fe75a->enter($__internal_82e9241b9cb6077843411b6a9eda76abb1bf6170cc78fe5d4af418da0c5fe75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_82e9241b9cb6077843411b6a9eda76abb1bf6170cc78fe5d4af418da0c5fe75a->leave($__internal_82e9241b9cb6077843411b6a9eda76abb1bf6170cc78fe5d4af418da0c5fe75a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
