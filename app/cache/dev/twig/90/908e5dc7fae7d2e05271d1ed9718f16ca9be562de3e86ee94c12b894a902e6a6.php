<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f1f20a70042e6337b4d93d18ce4838890daaabc90b755a3da05811aafa21ce7e extends Twig_Template
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
        $__internal_c482804bb226efca0a50f7eccd81943f747738f235ca893d092af413ab5299fe = $this->env->getExtension("native_profiler");
        $__internal_c482804bb226efca0a50f7eccd81943f747738f235ca893d092af413ab5299fe->enter($__internal_c482804bb226efca0a50f7eccd81943f747738f235ca893d092af413ab5299fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c482804bb226efca0a50f7eccd81943f747738f235ca893d092af413ab5299fe->leave($__internal_c482804bb226efca0a50f7eccd81943f747738f235ca893d092af413ab5299fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
