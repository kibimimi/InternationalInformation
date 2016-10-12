<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6227997e03eab2ce3bd294e0985242f79f903276b46bb1b92b780a07db089d4c extends Twig_Template
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
        $__internal_f920b72b4dbb12d8021ffd66a5a92447c1d754df110c2dc2ed361a89e6b35f06 = $this->env->getExtension("native_profiler");
        $__internal_f920b72b4dbb12d8021ffd66a5a92447c1d754df110c2dc2ed361a89e6b35f06->enter($__internal_f920b72b4dbb12d8021ffd66a5a92447c1d754df110c2dc2ed361a89e6b35f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f920b72b4dbb12d8021ffd66a5a92447c1d754df110c2dc2ed361a89e6b35f06->leave($__internal_f920b72b4dbb12d8021ffd66a5a92447c1d754df110c2dc2ed361a89e6b35f06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
