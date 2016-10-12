<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6720ea3fe2090d85a573e7f9a0e19558a3f8ce235f747bf9139926ee04551c43 extends Twig_Template
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
        $__internal_2455b542f3555ba1aadea86d876221d45b05e6e96698736024f0e4a16249a71a = $this->env->getExtension("native_profiler");
        $__internal_2455b542f3555ba1aadea86d876221d45b05e6e96698736024f0e4a16249a71a->enter($__internal_2455b542f3555ba1aadea86d876221d45b05e6e96698736024f0e4a16249a71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_2455b542f3555ba1aadea86d876221d45b05e6e96698736024f0e4a16249a71a->leave($__internal_2455b542f3555ba1aadea86d876221d45b05e6e96698736024f0e4a16249a71a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
