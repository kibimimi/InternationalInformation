<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_df801dce8bc7138b511892636adb0426284aeb1414459bd2eabb06727219fd03 extends Twig_Template
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
        $__internal_519b96fdcc9dc226d212bb7c5d11cde2d1fd7239a66d8d1b516f49e2fd253159 = $this->env->getExtension("native_profiler");
        $__internal_519b96fdcc9dc226d212bb7c5d11cde2d1fd7239a66d8d1b516f49e2fd253159->enter($__internal_519b96fdcc9dc226d212bb7c5d11cde2d1fd7239a66d8d1b516f49e2fd253159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_519b96fdcc9dc226d212bb7c5d11cde2d1fd7239a66d8d1b516f49e2fd253159->leave($__internal_519b96fdcc9dc226d212bb7c5d11cde2d1fd7239a66d8d1b516f49e2fd253159_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
