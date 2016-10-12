<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2b4e65c6cefbbf8286268743c613a2dd19458c7537fe946d271d2033c652b03a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b19eadf5d4597d0cea4f7d68c227bc41a3e0b4432f195ebcba4ff441a18bc0e8 = $this->env->getExtension("native_profiler");
        $__internal_b19eadf5d4597d0cea4f7d68c227bc41a3e0b4432f195ebcba4ff441a18bc0e8->enter($__internal_b19eadf5d4597d0cea4f7d68c227bc41a3e0b4432f195ebcba4ff441a18bc0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b19eadf5d4597d0cea4f7d68c227bc41a3e0b4432f195ebcba4ff441a18bc0e8->leave($__internal_b19eadf5d4597d0cea4f7d68c227bc41a3e0b4432f195ebcba4ff441a18bc0e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_517dd4e9879ede8e7e26047dc06e06441002d621a490e9268bfa193f28d81f2d = $this->env->getExtension("native_profiler");
        $__internal_517dd4e9879ede8e7e26047dc06e06441002d621a490e9268bfa193f28d81f2d->enter($__internal_517dd4e9879ede8e7e26047dc06e06441002d621a490e9268bfa193f28d81f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_517dd4e9879ede8e7e26047dc06e06441002d621a490e9268bfa193f28d81f2d->leave($__internal_517dd4e9879ede8e7e26047dc06e06441002d621a490e9268bfa193f28d81f2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82cce0fca503ca22e8a09dd1a10f7a5452807151c8136bf13f249e1edb13ad2f = $this->env->getExtension("native_profiler");
        $__internal_82cce0fca503ca22e8a09dd1a10f7a5452807151c8136bf13f249e1edb13ad2f->enter($__internal_82cce0fca503ca22e8a09dd1a10f7a5452807151c8136bf13f249e1edb13ad2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_82cce0fca503ca22e8a09dd1a10f7a5452807151c8136bf13f249e1edb13ad2f->leave($__internal_82cce0fca503ca22e8a09dd1a10f7a5452807151c8136bf13f249e1edb13ad2f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1ac169551ca72d860f990b8a5331523c1bccf9ee0497d8d5f63769b8de14c5a = $this->env->getExtension("native_profiler");
        $__internal_e1ac169551ca72d860f990b8a5331523c1bccf9ee0497d8d5f63769b8de14c5a->enter($__internal_e1ac169551ca72d860f990b8a5331523c1bccf9ee0497d8d5f63769b8de14c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1ac169551ca72d860f990b8a5331523c1bccf9ee0497d8d5f63769b8de14c5a->leave($__internal_e1ac169551ca72d860f990b8a5331523c1bccf9ee0497d8d5f63769b8de14c5a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
