<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_c22732b99856f833695b6c46990fa07603829882f5686809ccc068ed48053523 extends Twig_Template
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
        $__internal_e70c578fb62d7fdb45fd991b451cc2ca2ff0417336c4285cc4332d4541c00bda = $this->env->getExtension("native_profiler");
        $__internal_e70c578fb62d7fdb45fd991b451cc2ca2ff0417336c4285cc4332d4541c00bda->enter($__internal_e70c578fb62d7fdb45fd991b451cc2ca2ff0417336c4285cc4332d4541c00bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e70c578fb62d7fdb45fd991b451cc2ca2ff0417336c4285cc4332d4541c00bda->leave($__internal_e70c578fb62d7fdb45fd991b451cc2ca2ff0417336c4285cc4332d4541c00bda_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb6856b39ea3e7bff3be9a3d905b687e351e960114ab4bf72b13f6dd6b6a59a1 = $this->env->getExtension("native_profiler");
        $__internal_cb6856b39ea3e7bff3be9a3d905b687e351e960114ab4bf72b13f6dd6b6a59a1->enter($__internal_cb6856b39ea3e7bff3be9a3d905b687e351e960114ab4bf72b13f6dd6b6a59a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cb6856b39ea3e7bff3be9a3d905b687e351e960114ab4bf72b13f6dd6b6a59a1->leave($__internal_cb6856b39ea3e7bff3be9a3d905b687e351e960114ab4bf72b13f6dd6b6a59a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
