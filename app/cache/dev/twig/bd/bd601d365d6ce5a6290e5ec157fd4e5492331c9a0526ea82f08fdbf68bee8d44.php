<?php

/* @Myforms/Default/redirect.html.twig */
class __TwigTemplate_4bc2bec5a755f4d960e2b1ba8ef07f79645631bab0e0127adb320dc3528f402c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Myforms/Default/redirect.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_724d12b4a30a93d217f3e0ebb3b9fb06108a46dedd88624fa55b4d86c90d71e6 = $this->env->getExtension("native_profiler");
        $__internal_724d12b4a30a93d217f3e0ebb3b9fb06108a46dedd88624fa55b4d86c90d71e6->enter($__internal_724d12b4a30a93d217f3e0ebb3b9fb06108a46dedd88624fa55b4d86c90d71e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Myforms/Default/redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_724d12b4a30a93d217f3e0ebb3b9fb06108a46dedd88624fa55b4d86c90d71e6->leave($__internal_724d12b4a30a93d217f3e0ebb3b9fb06108a46dedd88624fa55b4d86c90d71e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_306a97f48ce707ff51b6484b380778c3ee415985313910c1c889d4d409a51a91 = $this->env->getExtension("native_profiler");
        $__internal_306a97f48ce707ff51b6484b380778c3ee415985313910c1c889d4d409a51a91->enter($__internal_306a97f48ce707ff51b6484b380778c3ee415985313910c1c889d4d409a51a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_306a97f48ce707ff51b6484b380778c3ee415985313910c1c889d4d409a51a91->leave($__internal_306a97f48ce707ff51b6484b380778c3ee415985313910c1c889d4d409a51a91_prof);

    }

    public function getTemplateName()
    {
        return "@Myforms/Default/redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block body %}
{% endblock body %}";
    }
}
