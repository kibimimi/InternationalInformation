<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_680edb93624bb72f97841935b20b91889c9428cc1da6b4ad6e6ed378bb3e750c extends Twig_Template
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
        $__internal_4716e2fa12c459357353ad4ac4218fb0239c3461edb36a1a1810b7e2a36c622a = $this->env->getExtension("native_profiler");
        $__internal_4716e2fa12c459357353ad4ac4218fb0239c3461edb36a1a1810b7e2a36c622a->enter($__internal_4716e2fa12c459357353ad4ac4218fb0239c3461edb36a1a1810b7e2a36c622a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4716e2fa12c459357353ad4ac4218fb0239c3461edb36a1a1810b7e2a36c622a->leave($__internal_4716e2fa12c459357353ad4ac4218fb0239c3461edb36a1a1810b7e2a36c622a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
