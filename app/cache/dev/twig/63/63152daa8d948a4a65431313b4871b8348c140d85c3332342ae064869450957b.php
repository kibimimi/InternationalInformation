<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_56a69282194c05a9551466ee472365a8dc6405e79a45a6ad02c8d26df0956459 extends Twig_Template
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
        $__internal_a1d26c6213dce5379519bac42b104c7f00cbbf229e8f74a5122d6c993e90fa7b = $this->env->getExtension("native_profiler");
        $__internal_a1d26c6213dce5379519bac42b104c7f00cbbf229e8f74a5122d6c993e90fa7b->enter($__internal_a1d26c6213dce5379519bac42b104c7f00cbbf229e8f74a5122d6c993e90fa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a1d26c6213dce5379519bac42b104c7f00cbbf229e8f74a5122d6c993e90fa7b->leave($__internal_a1d26c6213dce5379519bac42b104c7f00cbbf229e8f74a5122d6c993e90fa7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
