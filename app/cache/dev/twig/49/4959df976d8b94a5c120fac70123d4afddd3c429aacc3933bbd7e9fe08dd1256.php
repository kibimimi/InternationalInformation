<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0b1e66d5c6704598a6e1c75de1235c730822d37eaa13e2e74873d554ec12b489 extends Twig_Template
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
        $__internal_0abd1b012eae7fe6addc83ce75a269925f8ec91b616b8a49e1f6dd5e87733f17 = $this->env->getExtension("native_profiler");
        $__internal_0abd1b012eae7fe6addc83ce75a269925f8ec91b616b8a49e1f6dd5e87733f17->enter($__internal_0abd1b012eae7fe6addc83ce75a269925f8ec91b616b8a49e1f6dd5e87733f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0abd1b012eae7fe6addc83ce75a269925f8ec91b616b8a49e1f6dd5e87733f17->leave($__internal_0abd1b012eae7fe6addc83ce75a269925f8ec91b616b8a49e1f6dd5e87733f17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
