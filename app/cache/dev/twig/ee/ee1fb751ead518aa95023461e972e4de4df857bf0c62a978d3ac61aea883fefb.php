<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_46bff0a1400297eaad4c4f8492c92da347779f843f841a0d905dabdb79ee2f89 extends Twig_Template
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
        $__internal_16e4a9b63660af9356acef8876af39135749898b86cf1dc255d0f2baa11fd753 = $this->env->getExtension("native_profiler");
        $__internal_16e4a9b63660af9356acef8876af39135749898b86cf1dc255d0f2baa11fd753->enter($__internal_16e4a9b63660af9356acef8876af39135749898b86cf1dc255d0f2baa11fd753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_16e4a9b63660af9356acef8876af39135749898b86cf1dc255d0f2baa11fd753->leave($__internal_16e4a9b63660af9356acef8876af39135749898b86cf1dc255d0f2baa11fd753_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
