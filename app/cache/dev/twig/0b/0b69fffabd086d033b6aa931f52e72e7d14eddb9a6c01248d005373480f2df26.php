<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5443707191b8e0344d1225614642807eac7237b4ef304252cd3fe64c856c04b7 extends Twig_Template
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
        $__internal_64e797e88096a1d859ccb5bf22980f57fb1edea170e323d51e231c7ac56f2b7c = $this->env->getExtension("native_profiler");
        $__internal_64e797e88096a1d859ccb5bf22980f57fb1edea170e323d51e231c7ac56f2b7c->enter($__internal_64e797e88096a1d859ccb5bf22980f57fb1edea170e323d51e231c7ac56f2b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_64e797e88096a1d859ccb5bf22980f57fb1edea170e323d51e231c7ac56f2b7c->leave($__internal_64e797e88096a1d859ccb5bf22980f57fb1edea170e323d51e231c7ac56f2b7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
