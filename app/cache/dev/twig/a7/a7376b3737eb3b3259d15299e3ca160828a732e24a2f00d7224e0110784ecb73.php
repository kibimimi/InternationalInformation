<?php

/* CraueFormFlowBundle:FormFlow:stepList_customization.html.twig */
class __TwigTemplate_1bafcf02c88c963890ade93ce2135dd048ad1fad7e7aaadaaa67125fea2589d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CraueFormFlowBundle:FormFlow:stepList_content.html.twig", "CraueFormFlowBundle:FormFlow:stepList_customization.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CraueFormFlowBundle:FormFlow:stepList_content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c89355fbc53999d1698c666b6c867154789e9a0f260a64b1a5a92c7a3eb25ae2 = $this->env->getExtension("native_profiler");
        $__internal_c89355fbc53999d1698c666b6c867154789e9a0f260a64b1a5a92c7a3eb25ae2->enter($__internal_c89355fbc53999d1698c666b6c867154789e9a0f260a64b1a5a92c7a3eb25ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CraueFormFlowBundle:FormFlow:stepList_customization.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c89355fbc53999d1698c666b6c867154789e9a0f260a64b1a5a92c7a3eb25ae2->leave($__internal_c89355fbc53999d1698c666b6c867154789e9a0f260a64b1a5a92c7a3eb25ae2_prof);

    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:stepList_customization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'CraueFormFlowBundle:FormFlow:stepList_content.html.twig' %}
";
    }
}
