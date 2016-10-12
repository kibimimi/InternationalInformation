<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7ed9ebc6437c0a4a3bc3442de8eccd115f10576605dc4f49c5ed68a302495cdf extends Twig_Template
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
        $__internal_53c9a1d526adf2fcb39f77d3b08dc28511505ce683048d0a7bd8e0717cc422a7 = $this->env->getExtension("native_profiler");
        $__internal_53c9a1d526adf2fcb39f77d3b08dc28511505ce683048d0a7bd8e0717cc422a7->enter($__internal_53c9a1d526adf2fcb39f77d3b08dc28511505ce683048d0a7bd8e0717cc422a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_53c9a1d526adf2fcb39f77d3b08dc28511505ce683048d0a7bd8e0717cc422a7->leave($__internal_53c9a1d526adf2fcb39f77d3b08dc28511505ce683048d0a7bd8e0717cc422a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
