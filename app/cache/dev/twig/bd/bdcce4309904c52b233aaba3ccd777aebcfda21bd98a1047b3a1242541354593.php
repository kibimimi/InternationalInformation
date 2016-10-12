<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ab91268fa6ba87c3f95420ee6a6255b414c87e14e6617f757fe8bfec7c978826 extends Twig_Template
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
        $__internal_297b8e670d37310e4e25ad2653b193f8a6cc9c3608b590aa09e9875b5668cf46 = $this->env->getExtension("native_profiler");
        $__internal_297b8e670d37310e4e25ad2653b193f8a6cc9c3608b590aa09e9875b5668cf46->enter($__internal_297b8e670d37310e4e25ad2653b193f8a6cc9c3608b590aa09e9875b5668cf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_297b8e670d37310e4e25ad2653b193f8a6cc9c3608b590aa09e9875b5668cf46->leave($__internal_297b8e670d37310e4e25ad2653b193f8a6cc9c3608b590aa09e9875b5668cf46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
