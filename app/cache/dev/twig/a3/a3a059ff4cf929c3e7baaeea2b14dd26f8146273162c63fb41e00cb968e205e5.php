<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6ba70e14e82dcda4892d9444d3228cc5ff4a05d00e7a9df00f5d21313d30df22 extends Twig_Template
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
        $__internal_9342a50f260b78d5798ef551b963aa13d4f34869d560e2c7b027ec1de3e43f68 = $this->env->getExtension("native_profiler");
        $__internal_9342a50f260b78d5798ef551b963aa13d4f34869d560e2c7b027ec1de3e43f68->enter($__internal_9342a50f260b78d5798ef551b963aa13d4f34869d560e2c7b027ec1de3e43f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9342a50f260b78d5798ef551b963aa13d4f34869d560e2c7b027ec1de3e43f68->leave($__internal_9342a50f260b78d5798ef551b963aa13d4f34869d560e2c7b027ec1de3e43f68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
