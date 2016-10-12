<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b8fb9ddbce8fd2f28367618de4bf5be0baf1e3e44acaf16f0d40a217c18ee7d6 extends Twig_Template
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
        $__internal_8107530286429c0db6b04f385b4770c570457b0cc3504b389118501e2b09e735 = $this->env->getExtension("native_profiler");
        $__internal_8107530286429c0db6b04f385b4770c570457b0cc3504b389118501e2b09e735->enter($__internal_8107530286429c0db6b04f385b4770c570457b0cc3504b389118501e2b09e735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8107530286429c0db6b04f385b4770c570457b0cc3504b389118501e2b09e735->leave($__internal_8107530286429c0db6b04f385b4770c570457b0cc3504b389118501e2b09e735_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
