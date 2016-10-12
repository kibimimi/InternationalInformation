<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7e7a76ba06dbfd99b781cfa432c4e19c049ed8be08cfc2bba6c145a5bcb40c5d extends Twig_Template
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
        $__internal_bcad43a4ba4ffe97fe800de5118c987b3215a1660a9ef80ac3bb6ba6188dc5ca = $this->env->getExtension("native_profiler");
        $__internal_bcad43a4ba4ffe97fe800de5118c987b3215a1660a9ef80ac3bb6ba6188dc5ca->enter($__internal_bcad43a4ba4ffe97fe800de5118c987b3215a1660a9ef80ac3bb6ba6188dc5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bcad43a4ba4ffe97fe800de5118c987b3215a1660a9ef80ac3bb6ba6188dc5ca->leave($__internal_bcad43a4ba4ffe97fe800de5118c987b3215a1660a9ef80ac3bb6ba6188dc5ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
