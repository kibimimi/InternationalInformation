<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ec41836b5fa9f3333bbd8d7d873903bf3e130dbf309b80591b556bef1f7956b6 extends Twig_Template
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
        $__internal_1adc8a888e4ef13aaa1ea7307d7eed2a118b120ff4f9819c2a07f4efb87fe48e = $this->env->getExtension("native_profiler");
        $__internal_1adc8a888e4ef13aaa1ea7307d7eed2a118b120ff4f9819c2a07f4efb87fe48e->enter($__internal_1adc8a888e4ef13aaa1ea7307d7eed2a118b120ff4f9819c2a07f4efb87fe48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1adc8a888e4ef13aaa1ea7307d7eed2a118b120ff4f9819c2a07f4efb87fe48e->leave($__internal_1adc8a888e4ef13aaa1ea7307d7eed2a118b120ff4f9819c2a07f4efb87fe48e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
