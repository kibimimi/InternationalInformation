<?php

/* @CraueFormFlow/FormFlow/stepField.html.twig */
class __TwigTemplate_9c9c8d065b077f127397f44c09c7bee247b10d10d23b2e439a376e07bcf72d6a extends Twig_Template
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
        $__internal_08a46ab7636a1a3a9042d095b114fe0a7c0cf4c93e919de60445f333d0bce018 = $this->env->getExtension("native_profiler");
        $__internal_08a46ab7636a1a3a9042d095b114fe0a7c0cf4c93e919de60445f333d0bce018->enter($__internal_08a46ab7636a1a3a9042d095b114fe0a7c0cf4c93e919de60445f333d0bce018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CraueFormFlow/FormFlow/stepField.html.twig"));

        // line 2
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFormStepKey", array(), "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method"), "html", null, true);
        echo "\" />
";
        
        $__internal_08a46ab7636a1a3a9042d095b114fe0a7c0cf4c93e919de60445f333d0bce018->leave($__internal_08a46ab7636a1a3a9042d095b114fe0a7c0cf4c93e919de60445f333d0bce018_prof);

    }

    public function getTemplateName()
    {
        return "@CraueFormFlow/FormFlow/stepField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    public function getSource()
    {
        return "{# Deprecated. This template is not needed anymore and left only for BC. #}
<input type=\"hidden\" name=\"{{ flow.getFormStepKey() }}\" value=\"{{ flow.getCurrentStepNumber() }}\" />
";
    }
}
