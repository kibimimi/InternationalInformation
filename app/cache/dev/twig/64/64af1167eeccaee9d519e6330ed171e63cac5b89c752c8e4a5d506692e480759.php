<?php

/* MyformsBundle:Default:bootstrap.html.twig */
class __TwigTemplate_a982e29fe2439b23d2f45bf678b1252836842f3eb0fc3106924ff0935033a1ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyformsBundle:Default:bootstrap.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a1a0f00e4cae0e936ccc260f6db54d3a05666e3313225eb3688cb99562ef9b6 = $this->env->getExtension("native_profiler");
        $__internal_7a1a0f00e4cae0e936ccc260f6db54d3a05666e3313225eb3688cb99562ef9b6->enter($__internal_7a1a0f00e4cae0e936ccc260f6db54d3a05666e3313225eb3688cb99562ef9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyformsBundle:Default:bootstrap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a1a0f00e4cae0e936ccc260f6db54d3a05666e3313225eb3688cb99562ef9b6->leave($__internal_7a1a0f00e4cae0e936ccc260f6db54d3a05666e3313225eb3688cb99562ef9b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58cc1e59802ce8ab1dead5e42bf84caa9a17ffd3347fa8dc110d1eb66e71bb63 = $this->env->getExtension("native_profiler");
        $__internal_58cc1e59802ce8ab1dead5e42bf84caa9a17ffd3347fa8dc110d1eb66e71bb63->enter($__internal_58cc1e59802ce8ab1dead5e42bf84caa9a17ffd3347fa8dc110d1eb66e71bb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "

";
        
        $__internal_58cc1e59802ce8ab1dead5e42bf84caa9a17ffd3347fa8dc110d1eb66e71bb63->leave($__internal_58cc1e59802ce8ab1dead5e42bf84caa9a17ffd3347fa8dc110d1eb66e71bb63_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f0a57233240ee0258ed883bb5d063da5cab4a441853a2c65ab96385adcafa7c = $this->env->getExtension("native_profiler");
        $__internal_8f0a57233240ee0258ed883bb5d063da5cab4a441853a2c65ab96385adcafa7c->enter($__internal_8f0a57233240ee0258ed883bb5d063da5cab4a441853a2c65ab96385adcafa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"col-lg-6\">
    <form action=\"#\" class=\"form-horizontal\" method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </form>
</div>
";
        
        $__internal_8f0a57233240ee0258ed883bb5d063da5cab4a441853a2c65ab96385adcafa7c->leave($__internal_8f0a57233240ee0258ed883bb5d063da5cab4a441853a2c65ab96385adcafa7c_prof);

    }

    public function getTemplateName()
    {
        return "MyformsBundle:Default:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  64 => 7,  61 => 6,  55 => 5,  46 => 12,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block body %}

{% block content %}
<div class=\"col-lg-6\">
    <form action=\"#\" class=\"form-horizontal\" method=\"post\" {{ form_enctype(form) }}>
        {{ form_widget(form) }}
    </form>
</div>
{% endblock content %}


{% endblock body %}";
    }
}
