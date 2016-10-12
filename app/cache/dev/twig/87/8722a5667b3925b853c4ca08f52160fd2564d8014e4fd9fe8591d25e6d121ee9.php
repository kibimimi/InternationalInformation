<?php

/* save_base.html.twig */
class __TwigTemplate_ac284ce08fe80c9a5475610d0daf14c1febd688aeaf15d2486277490f4ea2073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'script' => array($this, 'block_script'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8621f19916272b1cc3e054e89df4704dd52f2ba196b5b8d753cac2f456ab18b = $this->env->getExtension("native_profiler");
        $__internal_c8621f19916272b1cc3e054e89df4704dd52f2ba196b5b8d753cac2f456ab18b->enter($__internal_c8621f19916272b1cc3e054e89df4704dd52f2ba196b5b8d753cac2f456ab18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "save_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('script', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_c8621f19916272b1cc3e054e89df4704dd52f2ba196b5b8d753cac2f456ab18b->leave($__internal_c8621f19916272b1cc3e054e89df4704dd52f2ba196b5b8d753cac2f456ab18b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fac960c23d06b5c13671943f55280cc26a9c39ca04b94d07e4752ddbd7b8736f = $this->env->getExtension("native_profiler");
        $__internal_fac960c23d06b5c13671943f55280cc26a9c39ca04b94d07e4752ddbd7b8736f->enter($__internal_fac960c23d06b5c13671943f55280cc26a9c39ca04b94d07e4752ddbd7b8736f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fac960c23d06b5c13671943f55280cc26a9c39ca04b94d07e4752ddbd7b8736f->leave($__internal_fac960c23d06b5c13671943f55280cc26a9c39ca04b94d07e4752ddbd7b8736f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdc58cf57e851400511c5396ac6e60f0603e00a072657241a9f0618faa10a7a0 = $this->env->getExtension("native_profiler");
        $__internal_bdc58cf57e851400511c5396ac6e60f0603e00a072657241a9f0618faa10a7a0->enter($__internal_bdc58cf57e851400511c5396ac6e60f0603e00a072657241a9f0618faa10a7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bdc58cf57e851400511c5396ac6e60f0603e00a072657241a9f0618faa10a7a0->leave($__internal_bdc58cf57e851400511c5396ac6e60f0603e00a072657241a9f0618faa10a7a0_prof);

    }

    // line 7
    public function block_script($context, array $blocks = array())
    {
        $__internal_07effd05541042891f8636223453b68c1e29e4bfae2291f47c6a8a044df0add3 = $this->env->getExtension("native_profiler");
        $__internal_07effd05541042891f8636223453b68c1e29e4bfae2291f47c6a8a044df0add3->enter($__internal_07effd05541042891f8636223453b68c1e29e4bfae2291f47c6a8a044df0add3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_07effd05541042891f8636223453b68c1e29e4bfae2291f47c6a8a044df0add3->leave($__internal_07effd05541042891f8636223453b68c1e29e4bfae2291f47c6a8a044df0add3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3b879b803f56b68c1fd6e681e170fa6fda8d6c4bc2dc8c414490fa5d6a7b018 = $this->env->getExtension("native_profiler");
        $__internal_c3b879b803f56b68c1fd6e681e170fa6fda8d6c4bc2dc8c414490fa5d6a7b018->enter($__internal_c3b879b803f56b68c1fd6e681e170fa6fda8d6c4bc2dc8c414490fa5d6a7b018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3b879b803f56b68c1fd6e681e170fa6fda8d6c4bc2dc8c414490fa5d6a7b018->leave($__internal_c3b879b803f56b68c1fd6e681e170fa6fda8d6c4bc2dc8c414490fa5d6a7b018_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a912eca16cda96806214f2b823be626c2b8379826e57fd1a6237a2f67f157507 = $this->env->getExtension("native_profiler");
        $__internal_a912eca16cda96806214f2b823be626c2b8379826e57fd1a6237a2f67f157507->enter($__internal_a912eca16cda96806214f2b823be626c2b8379826e57fd1a6237a2f67f157507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a912eca16cda96806214f2b823be626c2b8379826e57fd1a6237a2f67f157507->leave($__internal_a912eca16cda96806214f2b823be626c2b8379826e57fd1a6237a2f67f157507_prof);

    }

    public function getTemplateName()
    {
        return "save_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 12,  97 => 11,  86 => 7,  75 => 6,  63 => 5,  54 => 13,  51 => 12,  49 => 11,  42 => 8,  39 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        {% block script %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
