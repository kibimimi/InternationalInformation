<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e1e5d30a5f9a7dc087760b78083652efe6274ce574952430a28170442b79253a extends Twig_Template
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
        $__internal_b437654b98814e880a1674b03bf50464c3c0c6c86d40b5fffe4e30a4c0cf1972 = $this->env->getExtension("native_profiler");
        $__internal_b437654b98814e880a1674b03bf50464c3c0c6c86d40b5fffe4e30a4c0cf1972->enter($__internal_b437654b98814e880a1674b03bf50464c3c0c6c86d40b5fffe4e30a4c0cf1972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b437654b98814e880a1674b03bf50464c3c0c6c86d40b5fffe4e30a4c0cf1972->leave($__internal_b437654b98814e880a1674b03bf50464c3c0c6c86d40b5fffe4e30a4c0cf1972_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
