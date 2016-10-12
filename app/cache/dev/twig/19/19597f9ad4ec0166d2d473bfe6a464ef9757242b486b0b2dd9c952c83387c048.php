<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b5ddaef4447c89185f197fa0b1933e02944ceaa740ad70ca7e3b7545e2b86a41 extends Twig_Template
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
        $__internal_0b9dab5a8d264c4756290ab17eb65003ca47c691382717c2b1e81dbfb7225871 = $this->env->getExtension("native_profiler");
        $__internal_0b9dab5a8d264c4756290ab17eb65003ca47c691382717c2b1e81dbfb7225871->enter($__internal_0b9dab5a8d264c4756290ab17eb65003ca47c691382717c2b1e81dbfb7225871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0b9dab5a8d264c4756290ab17eb65003ca47c691382717c2b1e81dbfb7225871->leave($__internal_0b9dab5a8d264c4756290ab17eb65003ca47c691382717c2b1e81dbfb7225871_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
