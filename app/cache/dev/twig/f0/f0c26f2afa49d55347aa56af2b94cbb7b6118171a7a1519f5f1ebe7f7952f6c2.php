<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_35b46c009216fe103db1ee81e6a63468b0f955c2c60c48d49e8674a87059c999 extends Twig_Template
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
        $__internal_f115dcfbf825a23c150b64c87b48bf25695edf988ddef0065aeafe0ac62588ce = $this->env->getExtension("native_profiler");
        $__internal_f115dcfbf825a23c150b64c87b48bf25695edf988ddef0065aeafe0ac62588ce->enter($__internal_f115dcfbf825a23c150b64c87b48bf25695edf988ddef0065aeafe0ac62588ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f115dcfbf825a23c150b64c87b48bf25695edf988ddef0065aeafe0ac62588ce->leave($__internal_f115dcfbf825a23c150b64c87b48bf25695edf988ddef0065aeafe0ac62588ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
