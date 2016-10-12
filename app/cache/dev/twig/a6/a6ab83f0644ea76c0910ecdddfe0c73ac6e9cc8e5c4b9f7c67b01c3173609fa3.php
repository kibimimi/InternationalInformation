<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d967a4767e71b187cf558c561c5c9674c9de97bbfbb197f26d9a085401eeedde extends Twig_Template
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
        $__internal_0c1608eda83e045bb705c14249604ce3d39b065a369a1aa1b4153de2682b4dd3 = $this->env->getExtension("native_profiler");
        $__internal_0c1608eda83e045bb705c14249604ce3d39b065a369a1aa1b4153de2682b4dd3->enter($__internal_0c1608eda83e045bb705c14249604ce3d39b065a369a1aa1b4153de2682b4dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_0c1608eda83e045bb705c14249604ce3d39b065a369a1aa1b4153de2682b4dd3->leave($__internal_0c1608eda83e045bb705c14249604ce3d39b065a369a1aa1b4153de2682b4dd3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
