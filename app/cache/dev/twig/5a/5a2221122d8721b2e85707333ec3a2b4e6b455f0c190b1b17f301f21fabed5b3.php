<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_52bec29829ec81c5ce37f1064490e7ce7ab000eb1cd10b6dde66b7c26ff868b5 extends Twig_Template
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
        $__internal_cc5b9448bf24ff02a3dd876743954c123190aa88e4ee2f1efc060dd60bc354a3 = $this->env->getExtension("native_profiler");
        $__internal_cc5b9448bf24ff02a3dd876743954c123190aa88e4ee2f1efc060dd60bc354a3->enter($__internal_cc5b9448bf24ff02a3dd876743954c123190aa88e4ee2f1efc060dd60bc354a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cc5b9448bf24ff02a3dd876743954c123190aa88e4ee2f1efc060dd60bc354a3->leave($__internal_cc5b9448bf24ff02a3dd876743954c123190aa88e4ee2f1efc060dd60bc354a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
