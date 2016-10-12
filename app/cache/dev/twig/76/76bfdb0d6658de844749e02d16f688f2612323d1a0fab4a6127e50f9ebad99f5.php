<?php

/* @CraueFormFlow/FormFlow/stepList_blocks.html.twig */
class __TwigTemplate_a4f57ac97383c82675640c8782df266399253cc127782fece7b665ee07c9375e extends Twig_Template
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
        $__internal_fd647e04f2b4adcf95e9a0a84a3bdf43b26d0940ba26b8dca6efca72a2605235 = $this->env->getExtension("native_profiler");
        $__internal_fd647e04f2b4adcf95e9a0a84a3bdf43b26d0940ba26b8dca6efca72a2605235->enter($__internal_fd647e04f2b4adcf95e9a0a84a3bdf43b26d0940ba26b8dca6efca72a2605235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CraueFormFlow/FormFlow/stepList_blocks.html.twig"));

        // line 1
        $this->displayBlock('craue_flow_stepList_class', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('craue_flow_stepLabel', $context, $blocks);
        
        $__internal_fd647e04f2b4adcf95e9a0a84a3bdf43b26d0940ba26b8dca6efca72a2605235->leave($__internal_fd647e04f2b4adcf95e9a0a84a3bdf43b26d0940ba26b8dca6efca72a2605235_prof);

    }

    // line 1
    public function block_craue_flow_stepList_class($context, array $blocks = array())
    {
        $__internal_7421cf11c33fca6a517c48b698e96f59e047fc56c1c70cea23f5f1aa7ca312bb = $this->env->getExtension("native_profiler");
        $__internal_7421cf11c33fca6a517c48b698e96f59e047fc56c1c70cea23f5f1aa7ca312bb->enter($__internal_7421cf11c33fca6a517c48b698e96f59e047fc56c1c70cea23f5f1aa7ca312bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "craue_flow_stepList_class"));

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
        
        $__internal_7421cf11c33fca6a517c48b698e96f59e047fc56c1c70cea23f5f1aa7ca312bb->leave($__internal_7421cf11c33fca6a517c48b698e96f59e047fc56c1c70cea23f5f1aa7ca312bb_prof);

    }

    // line 11
    public function block_craue_flow_stepLabel($context, array $blocks = array())
    {
        $__internal_871c40f854c9bfc4d8a4f713f94a0d5149c4f4c4ef447941ad1b76c06432ca40 = $this->env->getExtension("native_profiler");
        $__internal_871c40f854c9bfc4d8a4f713f94a0d5149c4f4c4ef447941ad1b76c06432ca40->enter($__internal_871c40f854c9bfc4d8a4f713f94a0d5149c4f4c4ef447941ad1b76c06432ca40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "craue_flow_stepLabel"));

        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["stepLabel"]) ? $context["stepLabel"] : $this->getContext($context, "stepLabel"))), "html", null, true);
        
        $__internal_871c40f854c9bfc4d8a4f713f94a0d5149c4f4c4ef447941ad1b76c06432ca40->leave($__internal_871c40f854c9bfc4d8a4f713f94a0d5149c4f4c4ef447941ad1b76c06432ca40_prof);

    }

    public function getTemplateName()
    {
        return "@CraueFormFlow/FormFlow/stepList_blocks.html.twig";
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
