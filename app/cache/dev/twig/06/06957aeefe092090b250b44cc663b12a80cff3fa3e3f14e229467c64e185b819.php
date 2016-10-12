<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_58d217308862b5b547d2b528c2da1adda51e946ac9f56f294f953372dc476d5f extends Twig_Template
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
        $__internal_4b4e9e24596ee0a0e8c73e100b0b6f6e457061c6bcf92e7da518dbe01966bf28 = $this->env->getExtension("native_profiler");
        $__internal_4b4e9e24596ee0a0e8c73e100b0b6f6e457061c6bcf92e7da518dbe01966bf28->enter($__internal_4b4e9e24596ee0a0e8c73e100b0b6f6e457061c6bcf92e7da518dbe01966bf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4b4e9e24596ee0a0e8c73e100b0b6f6e457061c6bcf92e7da518dbe01966bf28->leave($__internal_4b4e9e24596ee0a0e8c73e100b0b6f6e457061c6bcf92e7da518dbe01966bf28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
