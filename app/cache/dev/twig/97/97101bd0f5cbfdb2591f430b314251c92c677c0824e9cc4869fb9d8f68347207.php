<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_9d4fe4f2144c0e3c37014d15d273024adab5109267f9e016de197f3e54c3976d extends Twig_Template
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
        $__internal_013c748d634a0b49f6b4d63dc1b8900b965a85d80cac089b74119f2ebf074731 = $this->env->getExtension("native_profiler");
        $__internal_013c748d634a0b49f6b4d63dc1b8900b965a85d80cac089b74119f2ebf074731->enter($__internal_013c748d634a0b49f6b4d63dc1b8900b965a85d80cac089b74119f2ebf074731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_013c748d634a0b49f6b4d63dc1b8900b965a85d80cac089b74119f2ebf074731->leave($__internal_013c748d634a0b49f6b4d63dc1b8900b965a85d80cac089b74119f2ebf074731_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
    }
}
