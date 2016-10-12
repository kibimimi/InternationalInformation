<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_934ae2834d09fe2a2ec3ff0edefae95aee1c9dced3f60c77dfaffa52f5cb83c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c77bd7d03e13dcf5056ab635eac30c81af0010526b1d2fa1cb55c95e11d3f9f1 = $this->env->getExtension("native_profiler");
        $__internal_c77bd7d03e13dcf5056ab635eac30c81af0010526b1d2fa1cb55c95e11d3f9f1->enter($__internal_c77bd7d03e13dcf5056ab635eac30c81af0010526b1d2fa1cb55c95e11d3f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c77bd7d03e13dcf5056ab635eac30c81af0010526b1d2fa1cb55c95e11d3f9f1->leave($__internal_c77bd7d03e13dcf5056ab635eac30c81af0010526b1d2fa1cb55c95e11d3f9f1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ae3ec5111b8295512476a1a7d3544755ca1daf11cd5b4cb66b1dbc89c581232 = $this->env->getExtension("native_profiler");
        $__internal_5ae3ec5111b8295512476a1a7d3544755ca1daf11cd5b4cb66b1dbc89c581232->enter($__internal_5ae3ec5111b8295512476a1a7d3544755ca1daf11cd5b4cb66b1dbc89c581232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5ae3ec5111b8295512476a1a7d3544755ca1daf11cd5b4cb66b1dbc89c581232->leave($__internal_5ae3ec5111b8295512476a1a7d3544755ca1daf11cd5b4cb66b1dbc89c581232_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
