<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6ba9c85824a759a4ffb0055c0181c451a5ff19c95844c473cabaf71f087d815f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a022ac18c65488d854e682cda7b394b21ca91d059c1d14e4bc128949f85192a = $this->env->getExtension("native_profiler");
        $__internal_9a022ac18c65488d854e682cda7b394b21ca91d059c1d14e4bc128949f85192a->enter($__internal_9a022ac18c65488d854e682cda7b394b21ca91d059c1d14e4bc128949f85192a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a022ac18c65488d854e682cda7b394b21ca91d059c1d14e4bc128949f85192a->leave($__internal_9a022ac18c65488d854e682cda7b394b21ca91d059c1d14e4bc128949f85192a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e89c158fb3bc2aedec7bf87823dc517367f950be34fbb3c866fe92a5cb4ca8f = $this->env->getExtension("native_profiler");
        $__internal_9e89c158fb3bc2aedec7bf87823dc517367f950be34fbb3c866fe92a5cb4ca8f->enter($__internal_9e89c158fb3bc2aedec7bf87823dc517367f950be34fbb3c866fe92a5cb4ca8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9e89c158fb3bc2aedec7bf87823dc517367f950be34fbb3c866fe92a5cb4ca8f->leave($__internal_9e89c158fb3bc2aedec7bf87823dc517367f950be34fbb3c866fe92a5cb4ca8f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef58dc9442d607e44566277d499a1182ee1861a781af86dc39f981835e68712f = $this->env->getExtension("native_profiler");
        $__internal_ef58dc9442d607e44566277d499a1182ee1861a781af86dc39f981835e68712f->enter($__internal_ef58dc9442d607e44566277d499a1182ee1861a781af86dc39f981835e68712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ef58dc9442d607e44566277d499a1182ee1861a781af86dc39f981835e68712f->leave($__internal_ef58dc9442d607e44566277d499a1182ee1861a781af86dc39f981835e68712f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_563f6537ed9c89e3d581b51d1ccb0ba95d733f8017826e8643fec0353c2b2434 = $this->env->getExtension("native_profiler");
        $__internal_563f6537ed9c89e3d581b51d1ccb0ba95d733f8017826e8643fec0353c2b2434->enter($__internal_563f6537ed9c89e3d581b51d1ccb0ba95d733f8017826e8643fec0353c2b2434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_563f6537ed9c89e3d581b51d1ccb0ba95d733f8017826e8643fec0353c2b2434->leave($__internal_563f6537ed9c89e3d581b51d1ccb0ba95d733f8017826e8643fec0353c2b2434_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
