<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_2c5839e8956c2ed6f7caaac2ecc5043ea091b9f3c8a78d76de521c07807fa0cb extends Twig_Template
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
        $__internal_a29b0cbf4fb1dfb61819ff57f63929db0bfb44f9d7c93e9a3e816f658abb8b67 = $this->env->getExtension("native_profiler");
        $__internal_a29b0cbf4fb1dfb61819ff57f63929db0bfb44f9d7c93e9a3e816f658abb8b67->enter($__internal_a29b0cbf4fb1dfb61819ff57f63929db0bfb44f9d7c93e9a3e816f658abb8b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a29b0cbf4fb1dfb61819ff57f63929db0bfb44f9d7c93e9a3e816f658abb8b67->leave($__internal_a29b0cbf4fb1dfb61819ff57f63929db0bfb44f9d7c93e9a3e816f658abb8b67_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
