<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_bc5d696bad3e772caf47560da8e37c157ca340700131b0507f122512f3e3ada4 extends Twig_Template
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
        $__internal_26af68c9c826624a74919df235365c319a14ae3074be75525e33a2e8bf26a8ac = $this->env->getExtension("native_profiler");
        $__internal_26af68c9c826624a74919df235365c319a14ae3074be75525e33a2e8bf26a8ac->enter($__internal_26af68c9c826624a74919df235365c319a14ae3074be75525e33a2e8bf26a8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_26af68c9c826624a74919df235365c319a14ae3074be75525e33a2e8bf26a8ac->leave($__internal_26af68c9c826624a74919df235365c319a14ae3074be75525e33a2e8bf26a8ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
