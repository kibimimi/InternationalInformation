<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_47615c2a446c0f2cdb229167c200ad8ea68e66701806de3a79177fa055ff4d11 extends Twig_Template
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
        $__internal_d661bc8a13292c7855b036fbeb0bb23e9d1099ac52f5adf3ae58ce8130fd32d1 = $this->env->getExtension("native_profiler");
        $__internal_d661bc8a13292c7855b036fbeb0bb23e9d1099ac52f5adf3ae58ce8130fd32d1->enter($__internal_d661bc8a13292c7855b036fbeb0bb23e9d1099ac52f5adf3ae58ce8130fd32d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d661bc8a13292c7855b036fbeb0bb23e9d1099ac52f5adf3ae58ce8130fd32d1->leave($__internal_d661bc8a13292c7855b036fbeb0bb23e9d1099ac52f5adf3ae58ce8130fd32d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
