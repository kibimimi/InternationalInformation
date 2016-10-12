<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1711dace719ca263b4cc315412915790a82727d7110193b0e38029c61fcc1001 extends Twig_Template
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
        $__internal_0d23ba3e7116906a2716169fa76f2b23acb7d8815cc9a5a666f5bf0a7a34c082 = $this->env->getExtension("native_profiler");
        $__internal_0d23ba3e7116906a2716169fa76f2b23acb7d8815cc9a5a666f5bf0a7a34c082->enter($__internal_0d23ba3e7116906a2716169fa76f2b23acb7d8815cc9a5a666f5bf0a7a34c082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0d23ba3e7116906a2716169fa76f2b23acb7d8815cc9a5a666f5bf0a7a34c082->leave($__internal_0d23ba3e7116906a2716169fa76f2b23acb7d8815cc9a5a666f5bf0a7a34c082_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
