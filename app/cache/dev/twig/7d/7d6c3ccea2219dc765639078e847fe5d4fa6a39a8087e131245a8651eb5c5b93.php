<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_fdc8cc417fb2af6f5814ff10bbc736ec5ac6e516a88e6637d03a1ee4d291008a extends Twig_Template
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
        $__internal_0610dfdd5f9a7235429053d82cdb641ccd60bc1b8f2a834a5343b4bc3eff26c8 = $this->env->getExtension("native_profiler");
        $__internal_0610dfdd5f9a7235429053d82cdb641ccd60bc1b8f2a834a5343b4bc3eff26c8->enter($__internal_0610dfdd5f9a7235429053d82cdb641ccd60bc1b8f2a834a5343b4bc3eff26c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0610dfdd5f9a7235429053d82cdb641ccd60bc1b8f2a834a5343b4bc3eff26c8->leave($__internal_0610dfdd5f9a7235429053d82cdb641ccd60bc1b8f2a834a5343b4bc3eff26c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
