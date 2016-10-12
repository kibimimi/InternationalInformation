<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_e255b47bc922d38b71b593c33cfff64d63320d11534b7ceb8dc0d62e3a7a3bb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@KnpMenu/menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11c8f7641a54d03202e48b1e06283a276ba5c143362506bc8778a3989065415c = $this->env->getExtension("native_profiler");
        $__internal_11c8f7641a54d03202e48b1e06283a276ba5c143362506bc8778a3989065415c->enter($__internal_11c8f7641a54d03202e48b1e06283a276ba5c143362506bc8778a3989065415c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c8f7641a54d03202e48b1e06283a276ba5c143362506bc8778a3989065415c->leave($__internal_11c8f7641a54d03202e48b1e06283a276ba5c143362506bc8778a3989065415c_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_f87f16ce219482079f2e44d4f41383509d3a6601d4bbb06c163ef396d19b9687 = $this->env->getExtension("native_profiler");
        $__internal_f87f16ce219482079f2e44d4f41383509d3a6601d4bbb06c163ef396d19b9687->enter($__internal_f87f16ce219482079f2e44d4f41383509d3a6601d4bbb06c163ef396d19b9687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_f87f16ce219482079f2e44d4f41383509d3a6601d4bbb06c163ef396d19b9687->leave($__internal_f87f16ce219482079f2e44d4f41383509d3a6601d4bbb06c163ef396d19b9687_prof);

    }

    public function getTemplateName()
    {
        return "@KnpMenu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
";
    }
}
