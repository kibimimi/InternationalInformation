<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ce2727a78661df64a832c345cf531571b5d32081be21858e76347f2b983d9225 extends Twig_Template
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
        $__internal_a9ae92b8f49f70091f975c34199981ca2d83258efede564ce0ce021090e8ba3d = $this->env->getExtension("native_profiler");
        $__internal_a9ae92b8f49f70091f975c34199981ca2d83258efede564ce0ce021090e8ba3d->enter($__internal_a9ae92b8f49f70091f975c34199981ca2d83258efede564ce0ce021090e8ba3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a9ae92b8f49f70091f975c34199981ca2d83258efede564ce0ce021090e8ba3d->leave($__internal_a9ae92b8f49f70091f975c34199981ca2d83258efede564ce0ce021090e8ba3d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
