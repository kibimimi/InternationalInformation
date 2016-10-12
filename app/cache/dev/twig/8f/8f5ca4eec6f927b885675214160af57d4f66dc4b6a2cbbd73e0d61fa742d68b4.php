<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_912218bc688d1cee9d012926e457d6a73df4004fb5cf4218fa8d49870290ab1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d12f00750afdcefd207fe001931712b1852bd5ead69c02cc79ae11b8f531d62c = $this->env->getExtension("native_profiler");
        $__internal_d12f00750afdcefd207fe001931712b1852bd5ead69c02cc79ae11b8f531d62c->enter($__internal_d12f00750afdcefd207fe001931712b1852bd5ead69c02cc79ae11b8f531d62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d12f00750afdcefd207fe001931712b1852bd5ead69c02cc79ae11b8f531d62c->leave($__internal_d12f00750afdcefd207fe001931712b1852bd5ead69c02cc79ae11b8f531d62c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceb6ba2b8502adce98ce81865b7c41bb33360d7778e8489bcd4b7aeff49308de = $this->env->getExtension("native_profiler");
        $__internal_ceb6ba2b8502adce98ce81865b7c41bb33360d7778e8489bcd4b7aeff49308de->enter($__internal_ceb6ba2b8502adce98ce81865b7c41bb33360d7778e8489bcd4b7aeff49308de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ceb6ba2b8502adce98ce81865b7c41bb33360d7778e8489bcd4b7aeff49308de->leave($__internal_ceb6ba2b8502adce98ce81865b7c41bb33360d7778e8489bcd4b7aeff49308de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ab655870422799f66bd3e31a529f0eb3a97c47617044d626b0eba6b52084250 = $this->env->getExtension("native_profiler");
        $__internal_7ab655870422799f66bd3e31a529f0eb3a97c47617044d626b0eba6b52084250->enter($__internal_7ab655870422799f66bd3e31a529f0eb3a97c47617044d626b0eba6b52084250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7ab655870422799f66bd3e31a529f0eb3a97c47617044d626b0eba6b52084250->leave($__internal_7ab655870422799f66bd3e31a529f0eb3a97c47617044d626b0eba6b52084250_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
