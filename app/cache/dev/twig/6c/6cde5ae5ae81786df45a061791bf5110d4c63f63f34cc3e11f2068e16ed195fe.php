<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_bf2964b174b1daeae69398b43ad0075a690873e7d0d1e7308329f392c034a2ee extends Twig_Template
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
        $__internal_562ce927440d6cd1494bcdc490c33847a1ba8ed7f4005be57f0c4929ca38d51a = $this->env->getExtension("native_profiler");
        $__internal_562ce927440d6cd1494bcdc490c33847a1ba8ed7f4005be57f0c4929ca38d51a->enter($__internal_562ce927440d6cd1494bcdc490c33847a1ba8ed7f4005be57f0c4929ca38d51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_562ce927440d6cd1494bcdc490c33847a1ba8ed7f4005be57f0c4929ca38d51a->leave($__internal_562ce927440d6cd1494bcdc490c33847a1ba8ed7f4005be57f0c4929ca38d51a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
