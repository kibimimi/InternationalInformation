<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4df6ee5febdd1a57d42ad6a236bf32b2952685e6a8194fde14fd462e09262825 extends Twig_Template
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
        $__internal_b0260961e76fb8da9ba5e4e8c14a3c8e88fce09b24f5502fab335b9da1fc6d38 = $this->env->getExtension("native_profiler");
        $__internal_b0260961e76fb8da9ba5e4e8c14a3c8e88fce09b24f5502fab335b9da1fc6d38->enter($__internal_b0260961e76fb8da9ba5e4e8c14a3c8e88fce09b24f5502fab335b9da1fc6d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b0260961e76fb8da9ba5e4e8c14a3c8e88fce09b24f5502fab335b9da1fc6d38->leave($__internal_b0260961e76fb8da9ba5e4e8c14a3c8e88fce09b24f5502fab335b9da1fc6d38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
