<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3d7fa7f4640a79f2bcf354a2845178bbe841fc38166dc1c4e50c8bb21937e782 extends Twig_Template
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
        $__internal_e6dea5c3603f5fc3eec1ccb7faefb72f6cc6ca8a38815c253c88d7afbf856723 = $this->env->getExtension("native_profiler");
        $__internal_e6dea5c3603f5fc3eec1ccb7faefb72f6cc6ca8a38815c253c88d7afbf856723->enter($__internal_e6dea5c3603f5fc3eec1ccb7faefb72f6cc6ca8a38815c253c88d7afbf856723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e6dea5c3603f5fc3eec1ccb7faefb72f6cc6ca8a38815c253c88d7afbf856723->leave($__internal_e6dea5c3603f5fc3eec1ccb7faefb72f6cc6ca8a38815c253c88d7afbf856723_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
