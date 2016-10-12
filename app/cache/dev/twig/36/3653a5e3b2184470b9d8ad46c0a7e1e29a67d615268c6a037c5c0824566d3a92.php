<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8ad45e55df4cabbadf8204297f802235b210b3285fd64d761f55f0b2e7b100f3 extends Twig_Template
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
        $__internal_02ef6220ce2c1e55941f01f66fe29b4da1c8fd69277eabe2abc9b6bd936671d4 = $this->env->getExtension("native_profiler");
        $__internal_02ef6220ce2c1e55941f01f66fe29b4da1c8fd69277eabe2abc9b6bd936671d4->enter($__internal_02ef6220ce2c1e55941f01f66fe29b4da1c8fd69277eabe2abc9b6bd936671d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_02ef6220ce2c1e55941f01f66fe29b4da1c8fd69277eabe2abc9b6bd936671d4->leave($__internal_02ef6220ce2c1e55941f01f66fe29b4da1c8fd69277eabe2abc9b6bd936671d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
