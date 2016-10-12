<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_67941793e67a921256f0a1e8ac5cf024994e8c5d28d33ee4b06d75cae62eb733 extends Twig_Template
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
        $__internal_9baded64649a96e4e5d885dea4b3b4dfbb65fded7ae4718a882c142404fa8fd2 = $this->env->getExtension("native_profiler");
        $__internal_9baded64649a96e4e5d885dea4b3b4dfbb65fded7ae4718a882c142404fa8fd2->enter($__internal_9baded64649a96e4e5d885dea4b3b4dfbb65fded7ae4718a882c142404fa8fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9baded64649a96e4e5d885dea4b3b4dfbb65fded7ae4718a882c142404fa8fd2->leave($__internal_9baded64649a96e4e5d885dea4b3b4dfbb65fded7ae4718a882c142404fa8fd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
