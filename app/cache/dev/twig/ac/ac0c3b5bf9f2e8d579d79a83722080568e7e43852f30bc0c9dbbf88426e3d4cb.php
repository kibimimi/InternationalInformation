<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_392622720e59bd7d0583f6fed6e5ee6f19b0579b0d96b0b65a5311e95727f2a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45a9382583e2cff4f53f40da9ddd0f89e07a5ebb5519b7e6f2ca0c55eec4b05d = $this->env->getExtension("native_profiler");
        $__internal_45a9382583e2cff4f53f40da9ddd0f89e07a5ebb5519b7e6f2ca0c55eec4b05d->enter($__internal_45a9382583e2cff4f53f40da9ddd0f89e07a5ebb5519b7e6f2ca0c55eec4b05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a9382583e2cff4f53f40da9ddd0f89e07a5ebb5519b7e6f2ca0c55eec4b05d->leave($__internal_45a9382583e2cff4f53f40da9ddd0f89e07a5ebb5519b7e6f2ca0c55eec4b05d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_557967e1e3c842f6c209bd63ce0238d5166f1c5f45f8857983a5d25c8b03acd0 = $this->env->getExtension("native_profiler");
        $__internal_557967e1e3c842f6c209bd63ce0238d5166f1c5f45f8857983a5d25c8b03acd0->enter($__internal_557967e1e3c842f6c209bd63ce0238d5166f1c5f45f8857983a5d25c8b03acd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_557967e1e3c842f6c209bd63ce0238d5166f1c5f45f8857983a5d25c8b03acd0->leave($__internal_557967e1e3c842f6c209bd63ce0238d5166f1c5f45f8857983a5d25c8b03acd0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc416701ebeb0719c0a9cc2ea370e2ed52ddf1c68e5781eff24a322f5680236e = $this->env->getExtension("native_profiler");
        $__internal_bc416701ebeb0719c0a9cc2ea370e2ed52ddf1c68e5781eff24a322f5680236e->enter($__internal_bc416701ebeb0719c0a9cc2ea370e2ed52ddf1c68e5781eff24a322f5680236e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc416701ebeb0719c0a9cc2ea370e2ed52ddf1c68e5781eff24a322f5680236e->leave($__internal_bc416701ebeb0719c0a9cc2ea370e2ed52ddf1c68e5781eff24a322f5680236e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c4c7ebb1d01baf8560fa961d3660501db4a15436e3c4fb36f7e7f4a26e87c28 = $this->env->getExtension("native_profiler");
        $__internal_4c4c7ebb1d01baf8560fa961d3660501db4a15436e3c4fb36f7e7f4a26e87c28->enter($__internal_4c4c7ebb1d01baf8560fa961d3660501db4a15436e3c4fb36f7e7f4a26e87c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4c4c7ebb1d01baf8560fa961d3660501db4a15436e3c4fb36f7e7f4a26e87c28->leave($__internal_4c4c7ebb1d01baf8560fa961d3660501db4a15436e3c4fb36f7e7f4a26e87c28_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
