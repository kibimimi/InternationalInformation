<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_009e90f9aead7176c37ae3b737a5ef29db8dfe1d40d2b0e989fdca7fd0177131 extends Twig_Template
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
        $__internal_7208cd6fdf91bd2669d0f79b2fc9bd37c464cb41d44211841d33b853d8736f97 = $this->env->getExtension("native_profiler");
        $__internal_7208cd6fdf91bd2669d0f79b2fc9bd37c464cb41d44211841d33b853d8736f97->enter($__internal_7208cd6fdf91bd2669d0f79b2fc9bd37c464cb41d44211841d33b853d8736f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7208cd6fdf91bd2669d0f79b2fc9bd37c464cb41d44211841d33b853d8736f97->leave($__internal_7208cd6fdf91bd2669d0f79b2fc9bd37c464cb41d44211841d33b853d8736f97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
