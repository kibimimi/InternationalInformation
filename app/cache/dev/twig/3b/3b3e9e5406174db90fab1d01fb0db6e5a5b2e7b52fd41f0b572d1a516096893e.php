<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_46191391ee1e3398787c9ea7b73a55272066e36596579719564f4dd0f48ccc9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_79f19888ab84e61f7358bc735f8d35b67e4da55629228e83fddc1b4e0570bc4f = $this->env->getExtension("native_profiler");
        $__internal_79f19888ab84e61f7358bc735f8d35b67e4da55629228e83fddc1b4e0570bc4f->enter($__internal_79f19888ab84e61f7358bc735f8d35b67e4da55629228e83fddc1b4e0570bc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f19888ab84e61f7358bc735f8d35b67e4da55629228e83fddc1b4e0570bc4f->leave($__internal_79f19888ab84e61f7358bc735f8d35b67e4da55629228e83fddc1b4e0570bc4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e6169abe0f51fe5f34aa223de4dd23467cb5a59bb772b80e9838e6a36501016a = $this->env->getExtension("native_profiler");
        $__internal_e6169abe0f51fe5f34aa223de4dd23467cb5a59bb772b80e9838e6a36501016a->enter($__internal_e6169abe0f51fe5f34aa223de4dd23467cb5a59bb772b80e9838e6a36501016a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e6169abe0f51fe5f34aa223de4dd23467cb5a59bb772b80e9838e6a36501016a->leave($__internal_e6169abe0f51fe5f34aa223de4dd23467cb5a59bb772b80e9838e6a36501016a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68c8d25289b55fed0764554c5e8ca85a979a4f3a5f5311f3c5747030dca2a318 = $this->env->getExtension("native_profiler");
        $__internal_68c8d25289b55fed0764554c5e8ca85a979a4f3a5f5311f3c5747030dca2a318->enter($__internal_68c8d25289b55fed0764554c5e8ca85a979a4f3a5f5311f3c5747030dca2a318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68c8d25289b55fed0764554c5e8ca85a979a4f3a5f5311f3c5747030dca2a318->leave($__internal_68c8d25289b55fed0764554c5e8ca85a979a4f3a5f5311f3c5747030dca2a318_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c39669f927947f8941c4b81928f4e139320d3c547f795ee7337f7674b4dfef8b = $this->env->getExtension("native_profiler");
        $__internal_c39669f927947f8941c4b81928f4e139320d3c547f795ee7337f7674b4dfef8b->enter($__internal_c39669f927947f8941c4b81928f4e139320d3c547f795ee7337f7674b4dfef8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c39669f927947f8941c4b81928f4e139320d3c547f795ee7337f7674b4dfef8b->leave($__internal_c39669f927947f8941c4b81928f4e139320d3c547f795ee7337f7674b4dfef8b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
