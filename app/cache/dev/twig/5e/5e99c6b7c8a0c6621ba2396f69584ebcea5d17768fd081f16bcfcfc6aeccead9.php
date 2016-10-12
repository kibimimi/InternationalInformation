<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4d6122f712dbeb6843df5b8c31d177500c699048988a7c185887e042bf4a5fbe extends Twig_Template
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
        $__internal_fd91237f0e727c43e22d1d0a085c9771648885891b3d9c5ab5532e76f907915a = $this->env->getExtension("native_profiler");
        $__internal_fd91237f0e727c43e22d1d0a085c9771648885891b3d9c5ab5532e76f907915a->enter($__internal_fd91237f0e727c43e22d1d0a085c9771648885891b3d9c5ab5532e76f907915a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fd91237f0e727c43e22d1d0a085c9771648885891b3d9c5ab5532e76f907915a->leave($__internal_fd91237f0e727c43e22d1d0a085c9771648885891b3d9c5ab5532e76f907915a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
