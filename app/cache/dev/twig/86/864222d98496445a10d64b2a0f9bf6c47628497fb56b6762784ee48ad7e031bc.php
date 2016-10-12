<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b1788b6845f31b239dd5a9e957f5ba782e8ee159c5d6c4c9a03ec30d7f4caa10 extends Twig_Template
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
        $__internal_46c6443e10f8f6ec00227c1203bc87635b126f7928d4a3b629f644a404d416af = $this->env->getExtension("native_profiler");
        $__internal_46c6443e10f8f6ec00227c1203bc87635b126f7928d4a3b629f644a404d416af->enter($__internal_46c6443e10f8f6ec00227c1203bc87635b126f7928d4a3b629f644a404d416af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_46c6443e10f8f6ec00227c1203bc87635b126f7928d4a3b629f644a404d416af->leave($__internal_46c6443e10f8f6ec00227c1203bc87635b126f7928d4a3b629f644a404d416af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
