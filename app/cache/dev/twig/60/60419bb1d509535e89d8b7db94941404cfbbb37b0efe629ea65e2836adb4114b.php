<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e6350724f3f86ac1069e9b316cb6d9b1b918cd40b74ce5d59454c33a72e0d709 extends Twig_Template
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
        $__internal_06ce8ca232f3d48a6ad0a3c2dbbe460ce9c88c1c02bfcbf08a25b9ac83329b87 = $this->env->getExtension("native_profiler");
        $__internal_06ce8ca232f3d48a6ad0a3c2dbbe460ce9c88c1c02bfcbf08a25b9ac83329b87->enter($__internal_06ce8ca232f3d48a6ad0a3c2dbbe460ce9c88c1c02bfcbf08a25b9ac83329b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_06ce8ca232f3d48a6ad0a3c2dbbe460ce9c88c1c02bfcbf08a25b9ac83329b87->leave($__internal_06ce8ca232f3d48a6ad0a3c2dbbe460ce9c88c1c02bfcbf08a25b9ac83329b87_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
