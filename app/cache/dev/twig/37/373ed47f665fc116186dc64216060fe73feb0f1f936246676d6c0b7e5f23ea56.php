<?php

/* ::save_base.html.twig */
class __TwigTemplate_836f5d8a908d365e27f83d907d45eeaf2681529c4ade01e61d9b4337f8bad1cf extends Twig_Template
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
        $__internal_acb665324de4107424bab766658fa9c2fec7c4e17f19d83d8375f9bf2a546af6 = $this->env->getExtension("native_profiler");
        $__internal_acb665324de4107424bab766658fa9c2fec7c4e17f19d83d8375f9bf2a546af6->enter($__internal_acb665324de4107424bab766658fa9c2fec7c4e17f19d83d8375f9bf2a546af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::save_base.html.twig"));

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
        
        $__internal_acb665324de4107424bab766658fa9c2fec7c4e17f19d83d8375f9bf2a546af6->leave($__internal_acb665324de4107424bab766658fa9c2fec7c4e17f19d83d8375f9bf2a546af6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_acac612283c20a54bdaf0f21790d17011f488f184274de7afe3944b2c700c2b5 = $this->env->getExtension("native_profiler");
        $__internal_acac612283c20a54bdaf0f21790d17011f488f184274de7afe3944b2c700c2b5->enter($__internal_acac612283c20a54bdaf0f21790d17011f488f184274de7afe3944b2c700c2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_acac612283c20a54bdaf0f21790d17011f488f184274de7afe3944b2c700c2b5->leave($__internal_acac612283c20a54bdaf0f21790d17011f488f184274de7afe3944b2c700c2b5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a457d50f138dd2a4ba1b10f397119dce4c2a0ed177f31c2d5c99c8acf036e41 = $this->env->getExtension("native_profiler");
        $__internal_1a457d50f138dd2a4ba1b10f397119dce4c2a0ed177f31c2d5c99c8acf036e41->enter($__internal_1a457d50f138dd2a4ba1b10f397119dce4c2a0ed177f31c2d5c99c8acf036e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a457d50f138dd2a4ba1b10f397119dce4c2a0ed177f31c2d5c99c8acf036e41->leave($__internal_1a457d50f138dd2a4ba1b10f397119dce4c2a0ed177f31c2d5c99c8acf036e41_prof);

    }

    // line 7
    public function block_script($context, array $blocks = array())
    {
        $__internal_f5ef5a262081217107910a57b93dd27ce6896962d6875cdcd677c8a426eb028b = $this->env->getExtension("native_profiler");
        $__internal_f5ef5a262081217107910a57b93dd27ce6896962d6875cdcd677c8a426eb028b->enter($__internal_f5ef5a262081217107910a57b93dd27ce6896962d6875cdcd677c8a426eb028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_f5ef5a262081217107910a57b93dd27ce6896962d6875cdcd677c8a426eb028b->leave($__internal_f5ef5a262081217107910a57b93dd27ce6896962d6875cdcd677c8a426eb028b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_04f3a97720741cac176983e0eeec9e1c1ff5ec5239e8e12b46d5aaf83d845d56 = $this->env->getExtension("native_profiler");
        $__internal_04f3a97720741cac176983e0eeec9e1c1ff5ec5239e8e12b46d5aaf83d845d56->enter($__internal_04f3a97720741cac176983e0eeec9e1c1ff5ec5239e8e12b46d5aaf83d845d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04f3a97720741cac176983e0eeec9e1c1ff5ec5239e8e12b46d5aaf83d845d56->leave($__internal_04f3a97720741cac176983e0eeec9e1c1ff5ec5239e8e12b46d5aaf83d845d56_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b949ba7395db0ec968f3aee3f7e7e95ef8411a94ffe356f0e2fc60f901d91a7 = $this->env->getExtension("native_profiler");
        $__internal_0b949ba7395db0ec968f3aee3f7e7e95ef8411a94ffe356f0e2fc60f901d91a7->enter($__internal_0b949ba7395db0ec968f3aee3f7e7e95ef8411a94ffe356f0e2fc60f901d91a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0b949ba7395db0ec968f3aee3f7e7e95ef8411a94ffe356f0e2fc60f901d91a7->leave($__internal_0b949ba7395db0ec968f3aee3f7e7e95ef8411a94ffe356f0e2fc60f901d91a7_prof);

    }

    public function getTemplateName()
    {
        return "::save_base.html.twig";
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
