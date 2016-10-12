<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_066043662a084fc9fe611a49368116f5ba1cdeb9b6de72b83de09c1a91f51b28 extends Twig_Template
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
        $__internal_0876c4c8adbdc05bb36dd54de187bf51a718636c0c6d4cc559b01a589dde1dda = $this->env->getExtension("native_profiler");
        $__internal_0876c4c8adbdc05bb36dd54de187bf51a718636c0c6d4cc559b01a589dde1dda->enter($__internal_0876c4c8adbdc05bb36dd54de187bf51a718636c0c6d4cc559b01a589dde1dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0876c4c8adbdc05bb36dd54de187bf51a718636c0c6d4cc559b01a589dde1dda->leave($__internal_0876c4c8adbdc05bb36dd54de187bf51a718636c0c6d4cc559b01a589dde1dda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
