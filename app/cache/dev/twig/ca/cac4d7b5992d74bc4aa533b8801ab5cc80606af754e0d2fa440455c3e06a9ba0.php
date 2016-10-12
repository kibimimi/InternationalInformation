<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c44b17f372bc32b290f540d2267c88f85ec57f17bf733015627954ffdf7bcf09 extends Twig_Template
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
        $__internal_cf4a4589f3a7e5356d77b9fe638bc2ef8683cd56f71bea175eefa414efcc8f91 = $this->env->getExtension("native_profiler");
        $__internal_cf4a4589f3a7e5356d77b9fe638bc2ef8683cd56f71bea175eefa414efcc8f91->enter($__internal_cf4a4589f3a7e5356d77b9fe638bc2ef8683cd56f71bea175eefa414efcc8f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cf4a4589f3a7e5356d77b9fe638bc2ef8683cd56f71bea175eefa414efcc8f91->leave($__internal_cf4a4589f3a7e5356d77b9fe638bc2ef8683cd56f71bea175eefa414efcc8f91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
