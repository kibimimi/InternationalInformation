<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8163217f0ff03b171edd687d22920dc3a45771121c420728c4cdeba18dbd4fb8 extends Twig_Template
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
        $__internal_839dade5f271f93620aa9910645880efd4d6435780173138021ecb82e90f5c5d = $this->env->getExtension("native_profiler");
        $__internal_839dade5f271f93620aa9910645880efd4d6435780173138021ecb82e90f5c5d->enter($__internal_839dade5f271f93620aa9910645880efd4d6435780173138021ecb82e90f5c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_839dade5f271f93620aa9910645880efd4d6435780173138021ecb82e90f5c5d->leave($__internal_839dade5f271f93620aa9910645880efd4d6435780173138021ecb82e90f5c5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
