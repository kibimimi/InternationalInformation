<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_9d7614e1f200617b7d8f44a8b1fe5ef0a471831c12ded6c34fbcbe2fa45cbd41 extends Twig_Template
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
        $__internal_75f6cf3001b001fa4347fdb21eda7e4f9196cb3c5fa81ec01f07a5d4fe8ca794 = $this->env->getExtension("native_profiler");
        $__internal_75f6cf3001b001fa4347fdb21eda7e4f9196cb3c5fa81ec01f07a5d4fe8ca794->enter($__internal_75f6cf3001b001fa4347fdb21eda7e4f9196cb3c5fa81ec01f07a5d4fe8ca794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_75f6cf3001b001fa4347fdb21eda7e4f9196cb3c5fa81ec01f07a5d4fe8ca794->leave($__internal_75f6cf3001b001fa4347fdb21eda7e4f9196cb3c5fa81ec01f07a5d4fe8ca794_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
