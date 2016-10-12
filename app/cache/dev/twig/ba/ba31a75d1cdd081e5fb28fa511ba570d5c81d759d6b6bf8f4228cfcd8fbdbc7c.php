<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_619222a6765044c108a9cf286ca1c095de38db0a570427b134ad49c51dd170ce extends Twig_Template
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
        $__internal_36cad72eaf3f8c6cedbac72e4aa70877196ef89aa8a338be151397a669e7505f = $this->env->getExtension("native_profiler");
        $__internal_36cad72eaf3f8c6cedbac72e4aa70877196ef89aa8a338be151397a669e7505f->enter($__internal_36cad72eaf3f8c6cedbac72e4aa70877196ef89aa8a338be151397a669e7505f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_36cad72eaf3f8c6cedbac72e4aa70877196ef89aa8a338be151397a669e7505f->leave($__internal_36cad72eaf3f8c6cedbac72e4aa70877196ef89aa8a338be151397a669e7505f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
