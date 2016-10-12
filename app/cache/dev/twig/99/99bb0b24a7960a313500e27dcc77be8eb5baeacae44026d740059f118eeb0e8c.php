<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6c8092133a03d7a9283235c85fe4e7b5e74bc35150e673f9e9a5739f233b8460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_949a635fd75bc884ba8120e1b0c3417fb0e697beb38c54ce2baf4928bae10e97 = $this->env->getExtension("native_profiler");
        $__internal_949a635fd75bc884ba8120e1b0c3417fb0e697beb38c54ce2baf4928bae10e97->enter($__internal_949a635fd75bc884ba8120e1b0c3417fb0e697beb38c54ce2baf4928bae10e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_949a635fd75bc884ba8120e1b0c3417fb0e697beb38c54ce2baf4928bae10e97->leave($__internal_949a635fd75bc884ba8120e1b0c3417fb0e697beb38c54ce2baf4928bae10e97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b4cd6b930c5e25b0f3135485e3f9e9b79d1ebe735d47676294a657001c371b5 = $this->env->getExtension("native_profiler");
        $__internal_4b4cd6b930c5e25b0f3135485e3f9e9b79d1ebe735d47676294a657001c371b5->enter($__internal_4b4cd6b930c5e25b0f3135485e3f9e9b79d1ebe735d47676294a657001c371b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4b4cd6b930c5e25b0f3135485e3f9e9b79d1ebe735d47676294a657001c371b5->leave($__internal_4b4cd6b930c5e25b0f3135485e3f9e9b79d1ebe735d47676294a657001c371b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b761e30205a3c2b2029c26fb4706beb59ba3f2f6d85c88924f7a61b9a1109feb = $this->env->getExtension("native_profiler");
        $__internal_b761e30205a3c2b2029c26fb4706beb59ba3f2f6d85c88924f7a61b9a1109feb->enter($__internal_b761e30205a3c2b2029c26fb4706beb59ba3f2f6d85c88924f7a61b9a1109feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b761e30205a3c2b2029c26fb4706beb59ba3f2f6d85c88924f7a61b9a1109feb->leave($__internal_b761e30205a3c2b2029c26fb4706beb59ba3f2f6d85c88924f7a61b9a1109feb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
