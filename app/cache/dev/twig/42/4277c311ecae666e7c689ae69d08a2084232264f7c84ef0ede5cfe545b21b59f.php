<?php

/* base.html.twig */
class __TwigTemplate_4d8a403ec1cdbf49cd5e8852b0243d38978c3afd011d8877e01f5bc8d3b61cd4 extends Twig_Template
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
        $__internal_e929f45fd9cbe14cc5ca69203b3999a641d56d162702a6dace5c39d1248e94a8 = $this->env->getExtension("native_profiler");
        $__internal_e929f45fd9cbe14cc5ca69203b3999a641d56d162702a6dace5c39d1248e94a8->enter($__internal_e929f45fd9cbe14cc5ca69203b3999a641d56d162702a6dace5c39d1248e94a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('script', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_e929f45fd9cbe14cc5ca69203b3999a641d56d162702a6dace5c39d1248e94a8->leave($__internal_e929f45fd9cbe14cc5ca69203b3999a641d56d162702a6dace5c39d1248e94a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a0616169ca8ca752cab00768e631c3a2b6e3922a30ad01c0abb54a1a3de4d61 = $this->env->getExtension("native_profiler");
        $__internal_8a0616169ca8ca752cab00768e631c3a2b6e3922a30ad01c0abb54a1a3de4d61->enter($__internal_8a0616169ca8ca752cab00768e631c3a2b6e3922a30ad01c0abb54a1a3de4d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a0616169ca8ca752cab00768e631c3a2b6e3922a30ad01c0abb54a1a3de4d61->leave($__internal_8a0616169ca8ca752cab00768e631c3a2b6e3922a30ad01c0abb54a1a3de4d61_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88f6e614d9fb19592ac49ae7ccc3a9c076c0a90efe4518ee4d1945a8e8c649d4 = $this->env->getExtension("native_profiler");
        $__internal_88f6e614d9fb19592ac49ae7ccc3a9c076c0a90efe4518ee4d1945a8e8c649d4->enter($__internal_88f6e614d9fb19592ac49ae7ccc3a9c076c0a90efe4518ee4d1945a8e8c649d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_88f6e614d9fb19592ac49ae7ccc3a9c076c0a90efe4518ee4d1945a8e8c649d4->leave($__internal_88f6e614d9fb19592ac49ae7ccc3a9c076c0a90efe4518ee4d1945a8e8c649d4_prof);

    }

    // line 8
    public function block_script($context, array $blocks = array())
    {
        $__internal_e0e547a63fedf9f100a068ed748cf49a4b6de566a97c8c0d0e79c61987c80cb8 = $this->env->getExtension("native_profiler");
        $__internal_e0e547a63fedf9f100a068ed748cf49a4b6de566a97c8c0d0e79c61987c80cb8->enter($__internal_e0e547a63fedf9f100a068ed748cf49a4b6de566a97c8c0d0e79c61987c80cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_e0e547a63fedf9f100a068ed748cf49a4b6de566a97c8c0d0e79c61987c80cb8->leave($__internal_e0e547a63fedf9f100a068ed748cf49a4b6de566a97c8c0d0e79c61987c80cb8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_122e7847213895d0717e37da0e9e58936423de58bc66a9b4621fe2a9586c626e = $this->env->getExtension("native_profiler");
        $__internal_122e7847213895d0717e37da0e9e58936423de58bc66a9b4621fe2a9586c626e->enter($__internal_122e7847213895d0717e37da0e9e58936423de58bc66a9b4621fe2a9586c626e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_122e7847213895d0717e37da0e9e58936423de58bc66a9b4621fe2a9586c626e->leave($__internal_122e7847213895d0717e37da0e9e58936423de58bc66a9b4621fe2a9586c626e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d0e49d405cfe0dc4ab1b18892be1373fb9678737f23d13e938cd5fc2762da5a = $this->env->getExtension("native_profiler");
        $__internal_6d0e49d405cfe0dc4ab1b18892be1373fb9678737f23d13e938cd5fc2762da5a->enter($__internal_6d0e49d405cfe0dc4ab1b18892be1373fb9678737f23d13e938cd5fc2762da5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d0e49d405cfe0dc4ab1b18892be1373fb9678737f23d13e938cd5fc2762da5a->leave($__internal_6d0e49d405cfe0dc4ab1b18892be1373fb9678737f23d13e938cd5fc2762da5a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 13,  98 => 12,  87 => 8,  76 => 7,  64 => 5,  55 => 14,  52 => 13,  50 => 12,  43 => 9,  40 => 8,  38 => 7,  33 => 5,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
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
