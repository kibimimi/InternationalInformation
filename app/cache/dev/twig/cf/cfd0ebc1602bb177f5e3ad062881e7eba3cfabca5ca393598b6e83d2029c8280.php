<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b21153482cc110e16865bdb256e0f982bd9a8f649b375a52b83de6b783244d26 extends Twig_Template
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
        $__internal_9d0fbb1ea27cbad9f5bc7ff387db0863120e7a887daeee46a5ba4938d5d7d8fb = $this->env->getExtension("native_profiler");
        $__internal_9d0fbb1ea27cbad9f5bc7ff387db0863120e7a887daeee46a5ba4938d5d7d8fb->enter($__internal_9d0fbb1ea27cbad9f5bc7ff387db0863120e7a887daeee46a5ba4938d5d7d8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9d0fbb1ea27cbad9f5bc7ff387db0863120e7a887daeee46a5ba4938d5d7d8fb->leave($__internal_9d0fbb1ea27cbad9f5bc7ff387db0863120e7a887daeee46a5ba4938d5d7d8fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
    }
}
