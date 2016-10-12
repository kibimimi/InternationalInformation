<?php

/* ::base.html.twig */
class __TwigTemplate_cf1534e921f1fa00262ea83cbbf72c854dc5224651aa3f7f53405bd119784b93 extends Twig_Template
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
        $__internal_0df539357a814b85e62f9e1771a7c32a481b9342542f6f379e69ec0b768dc54c = $this->env->getExtension("native_profiler");
        $__internal_0df539357a814b85e62f9e1771a7c32a481b9342542f6f379e69ec0b768dc54c->enter($__internal_0df539357a814b85e62f9e1771a7c32a481b9342542f6f379e69ec0b768dc54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0df539357a814b85e62f9e1771a7c32a481b9342542f6f379e69ec0b768dc54c->leave($__internal_0df539357a814b85e62f9e1771a7c32a481b9342542f6f379e69ec0b768dc54c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41535f8e9c2563dc704a8f716009b9849c6a212e03dfaadacb0d626fc85e4be7 = $this->env->getExtension("native_profiler");
        $__internal_41535f8e9c2563dc704a8f716009b9849c6a212e03dfaadacb0d626fc85e4be7->enter($__internal_41535f8e9c2563dc704a8f716009b9849c6a212e03dfaadacb0d626fc85e4be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41535f8e9c2563dc704a8f716009b9849c6a212e03dfaadacb0d626fc85e4be7->leave($__internal_41535f8e9c2563dc704a8f716009b9849c6a212e03dfaadacb0d626fc85e4be7_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36f4d992170cee0505e999631cd594688d6a99f2ba94c732d5927cecac45fefb = $this->env->getExtension("native_profiler");
        $__internal_36f4d992170cee0505e999631cd594688d6a99f2ba94c732d5927cecac45fefb->enter($__internal_36f4d992170cee0505e999631cd594688d6a99f2ba94c732d5927cecac45fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_36f4d992170cee0505e999631cd594688d6a99f2ba94c732d5927cecac45fefb->leave($__internal_36f4d992170cee0505e999631cd594688d6a99f2ba94c732d5927cecac45fefb_prof);

    }

    // line 8
    public function block_script($context, array $blocks = array())
    {
        $__internal_5a4e02607b3d27207eb18d999e7ae956ecb6a7341d4ad5efe61628ed4572c3bb = $this->env->getExtension("native_profiler");
        $__internal_5a4e02607b3d27207eb18d999e7ae956ecb6a7341d4ad5efe61628ed4572c3bb->enter($__internal_5a4e02607b3d27207eb18d999e7ae956ecb6a7341d4ad5efe61628ed4572c3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_5a4e02607b3d27207eb18d999e7ae956ecb6a7341d4ad5efe61628ed4572c3bb->leave($__internal_5a4e02607b3d27207eb18d999e7ae956ecb6a7341d4ad5efe61628ed4572c3bb_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e6dc08d8c638303663611674eb28d3f8040d6a3e1688282f5c44f5d7d2c8b5f = $this->env->getExtension("native_profiler");
        $__internal_1e6dc08d8c638303663611674eb28d3f8040d6a3e1688282f5c44f5d7d2c8b5f->enter($__internal_1e6dc08d8c638303663611674eb28d3f8040d6a3e1688282f5c44f5d7d2c8b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e6dc08d8c638303663611674eb28d3f8040d6a3e1688282f5c44f5d7d2c8b5f->leave($__internal_1e6dc08d8c638303663611674eb28d3f8040d6a3e1688282f5c44f5d7d2c8b5f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15cda1cfb0792acfe6f53db0927d4e5a742fd20899c4597557ccd3941b4da1cf = $this->env->getExtension("native_profiler");
        $__internal_15cda1cfb0792acfe6f53db0927d4e5a742fd20899c4597557ccd3941b4da1cf->enter($__internal_15cda1cfb0792acfe6f53db0927d4e5a742fd20899c4597557ccd3941b4da1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15cda1cfb0792acfe6f53db0927d4e5a742fd20899c4597557ccd3941b4da1cf->leave($__internal_15cda1cfb0792acfe6f53db0927d4e5a742fd20899c4597557ccd3941b4da1cf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
