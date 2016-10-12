<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_da464639d4458c13bee5a43cf2a9fe8d7ea80b33fc92d80f02d05caa11f2777c extends Twig_Template
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
        $__internal_2165af28a6b2c089cf463656d78555f6fd970f561d1bd1aa880b4305ffebbd6d = $this->env->getExtension("native_profiler");
        $__internal_2165af28a6b2c089cf463656d78555f6fd970f561d1bd1aa880b4305ffebbd6d->enter($__internal_2165af28a6b2c089cf463656d78555f6fd970f561d1bd1aa880b4305ffebbd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2165af28a6b2c089cf463656d78555f6fd970f561d1bd1aa880b4305ffebbd6d->leave($__internal_2165af28a6b2c089cf463656d78555f6fd970f561d1bd1aa880b4305ffebbd6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
