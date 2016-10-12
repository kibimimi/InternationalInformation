<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c4b25f3742403da6f5c647656b8f3903c3134c116ed4e5bd3614732cf93b52ef extends Twig_Template
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
        $__internal_89175a5952449152f284184d8b0bb0ce5d5520739cfa853896e5771d86769589 = $this->env->getExtension("native_profiler");
        $__internal_89175a5952449152f284184d8b0bb0ce5d5520739cfa853896e5771d86769589->enter($__internal_89175a5952449152f284184d8b0bb0ce5d5520739cfa853896e5771d86769589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_89175a5952449152f284184d8b0bb0ce5d5520739cfa853896e5771d86769589->leave($__internal_89175a5952449152f284184d8b0bb0ce5d5520739cfa853896e5771d86769589_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
