<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_7b26f939a8b1264e92d7b72e13e939ada8a26616faf1769e852daa784589a84f extends Twig_Template
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
        $__internal_4889488e7af5496b8c7ed68273427f7aad6a1f9bae4eb4d6b64d24df90fe047c = $this->env->getExtension("native_profiler");
        $__internal_4889488e7af5496b8c7ed68273427f7aad6a1f9bae4eb4d6b64d24df90fe047c->enter($__internal_4889488e7af5496b8c7ed68273427f7aad6a1f9bae4eb4d6b64d24df90fe047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_4889488e7af5496b8c7ed68273427f7aad6a1f9bae4eb4d6b64d24df90fe047c->leave($__internal_4889488e7af5496b8c7ed68273427f7aad6a1f9bae4eb4d6b64d24df90fe047c_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
";
    }
}
