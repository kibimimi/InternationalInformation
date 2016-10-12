<?php

/* MyformsBundle:Default:redirect.html.twig */
class __TwigTemplate_d360efe4dad6967c8aea8b848a006db4600a7e6380e5799ab82c5e851b50d8c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyformsBundle:Default:redirect.html.twig", 1);
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
        $__internal_59a4788cccd14311fb6f0a2c9ff99473d3ce734377376f70914b1913297c0d3d = $this->env->getExtension("native_profiler");
        $__internal_59a4788cccd14311fb6f0a2c9ff99473d3ce734377376f70914b1913297c0d3d->enter($__internal_59a4788cccd14311fb6f0a2c9ff99473d3ce734377376f70914b1913297c0d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyformsBundle:Default:redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59a4788cccd14311fb6f0a2c9ff99473d3ce734377376f70914b1913297c0d3d->leave($__internal_59a4788cccd14311fb6f0a2c9ff99473d3ce734377376f70914b1913297c0d3d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a09be48c9859682e2d41bcd64842abc6e0d86179ab847eecbbdc62307a80e9d2 = $this->env->getExtension("native_profiler");
        $__internal_a09be48c9859682e2d41bcd64842abc6e0d86179ab847eecbbdc62307a80e9d2->enter($__internal_a09be48c9859682e2d41bcd64842abc6e0d86179ab847eecbbdc62307a80e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a09be48c9859682e2d41bcd64842abc6e0d86179ab847eecbbdc62307a80e9d2->leave($__internal_a09be48c9859682e2d41bcd64842abc6e0d86179ab847eecbbdc62307a80e9d2_prof);

    }

    public function getTemplateName()
    {
        return "MyformsBundle:Default:redirect.html.twig";
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
