<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_65200390e9a233101dad422957b231c5ff2c5106396634edfce709cfe4eea609 extends Twig_Template
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
        $__internal_3da4885dcdbe95575305f208e7a2513d862f6229501a874a3c9108d9fe142862 = $this->env->getExtension("native_profiler");
        $__internal_3da4885dcdbe95575305f208e7a2513d862f6229501a874a3c9108d9fe142862->enter($__internal_3da4885dcdbe95575305f208e7a2513d862f6229501a874a3c9108d9fe142862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3da4885dcdbe95575305f208e7a2513d862f6229501a874a3c9108d9fe142862->leave($__internal_3da4885dcdbe95575305f208e7a2513d862f6229501a874a3c9108d9fe142862_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
