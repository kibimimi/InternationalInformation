<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_874c083dddac0671ae58891a445edc72244a1ffd4e4f0fb8f8a67ffa83119958 extends Twig_Template
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
        $__internal_4bae8e655357211b235fb3c00b68cb34f140afed4b55293ce7349291d8cdbfc5 = $this->env->getExtension("native_profiler");
        $__internal_4bae8e655357211b235fb3c00b68cb34f140afed4b55293ce7349291d8cdbfc5->enter($__internal_4bae8e655357211b235fb3c00b68cb34f140afed4b55293ce7349291d8cdbfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4bae8e655357211b235fb3c00b68cb34f140afed4b55293ce7349291d8cdbfc5->leave($__internal_4bae8e655357211b235fb3c00b68cb34f140afed4b55293ce7349291d8cdbfc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
