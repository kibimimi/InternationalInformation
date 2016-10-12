<?php

/* CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig */
class __TwigTemplate_e28edc3cb6a1627331aadbe3a1fb8e738296e680aafca5ead22c720f2bb45f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'craue_flow_stepList_class' => array($this, 'block_craue_flow_stepList_class'),
            'craue_flow_stepLabel' => array($this, 'block_craue_flow_stepLabel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a3a7ea73e2c26f7729127f49e1d0a4814c43b32d228a260a206127ca5d4f8f7 = $this->env->getExtension("native_profiler");
        $__internal_8a3a7ea73e2c26f7729127f49e1d0a4814c43b32d228a260a206127ca5d4f8f7->enter($__internal_8a3a7ea73e2c26f7729127f49e1d0a4814c43b32d228a260a206127ca5d4f8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig"));

        // line 1
        $this->displayBlock('craue_flow_stepList_class', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('craue_flow_stepLabel', $context, $blocks);
        
        $__internal_8a3a7ea73e2c26f7729127f49e1d0a4814c43b32d228a260a206127ca5d4f8f7->leave($__internal_8a3a7ea73e2c26f7729127f49e1d0a4814c43b32d228a260a206127ca5d4f8f7_prof);

    }

    // line 1
    public function block_craue_flow_stepList_class($context, array $blocks = array())
    {
        $__internal_8e0da342690e40237bf537f248ba2f0d4dd6c20b9dc69ffe8047636cce353a08 = $this->env->getExtension("native_profiler");
        $__internal_8e0da342690e40237bf537f248ba2f0d4dd6c20b9dc69ffe8047636cce353a08->enter($__internal_8e0da342690e40237bf537f248ba2f0d4dd6c20b9dc69ffe8047636cce353a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "craue_flow_stepList_class"));

        // line 2
        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index", array()) == $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method"))) {
            // line 3
            echo " class=\"craue_formflow_current_step\"";
        } elseif ($this->getAttribute(        // line 4
(isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "isStepSkipped", array(0 => $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index", array())), "method")) {
            // line 5
            echo " class=\"craue_formflow_skipped_step\"";
        } elseif ($this->getAttribute(        // line 6
(isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "isStepDone", array(0 => $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index", array())), "method")) {
            // line 7
            echo " class=\"craue_formflow_done_step\"";
        }
        
        $__internal_8e0da342690e40237bf537f248ba2f0d4dd6c20b9dc69ffe8047636cce353a08->leave($__internal_8e0da342690e40237bf537f248ba2f0d4dd6c20b9dc69ffe8047636cce353a08_prof);

    }

    // line 11
    public function block_craue_flow_stepLabel($context, array $blocks = array())
    {
        $__internal_c59c5c07167a2014df8322801bc20ad209be0d4bc82e175cf464d47126a06123 = $this->env->getExtension("native_profiler");
        $__internal_c59c5c07167a2014df8322801bc20ad209be0d4bc82e175cf464d47126a06123->enter($__internal_c59c5c07167a2014df8322801bc20ad209be0d4bc82e175cf464d47126a06123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "craue_flow_stepLabel"));

        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["stepLabel"]) ? $context["stepLabel"] : $this->getContext($context, "stepLabel"))), "html", null, true);
        
        $__internal_c59c5c07167a2014df8322801bc20ad209be0d4bc82e175cf464d47126a06123->leave($__internal_c59c5c07167a2014df8322801bc20ad209be0d4bc82e175cf464d47126a06123_prof);

    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  60 => 11,  52 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  36 => 1,  29 => 11,  26 => 10,  24 => 1,);
    }

    public function getSource()
    {
        return "{% block craue_flow_stepList_class %}
\t{%- if loop.index == flow.getCurrentStepNumber() -%}
\t\t{{- ' class=\"craue_formflow_current_step\"' -}}
\t{%- elseif flow.isStepSkipped(loop.index) -%}
\t\t{{- ' class=\"craue_formflow_skipped_step\"' -}}
\t{%- elseif flow.isStepDone(loop.index) -%}
\t\t{{- ' class=\"craue_formflow_done_step\"' -}}
\t{%- endif -%}
{% endblock %}

{% block craue_flow_stepLabel %}
\t{{- stepLabel | trans -}}
{% endblock %}
";
    }
}
