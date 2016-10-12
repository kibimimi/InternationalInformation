<?php

/* @Myforms/Default/compareseo.html.twig */
class __TwigTemplate_dfc034e178ef255e0ae42c594b9569a2dee208ef56eba12fd9062758c9b052be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Myforms/Default/compareseo.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74bc8d5c962bf41718f29ccba1cb69978bf1893738afd0d38c9573d533039acc = $this->env->getExtension("native_profiler");
        $__internal_74bc8d5c962bf41718f29ccba1cb69978bf1893738afd0d38c9573d533039acc->enter($__internal_74bc8d5c962bf41718f29ccba1cb69978bf1893738afd0d38c9573d533039acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Myforms/Default/compareseo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74bc8d5c962bf41718f29ccba1cb69978bf1893738afd0d38c9573d533039acc->leave($__internal_74bc8d5c962bf41718f29ccba1cb69978bf1893738afd0d38c9573d533039acc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f7f71f80a8d6f38ea70e3e35f1363237b3d6a86103e29efd21b1261353cd29 = $this->env->getExtension("native_profiler");
        $__internal_c6f7f71f80a8d6f38ea70e3e35f1363237b3d6a86103e29efd21b1261353cd29->enter($__internal_c6f7f71f80a8d6f38ea70e3e35f1363237b3d6a86103e29efd21b1261353cd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "

<div class=\"container\" style=\"font-family :'Helvetica Neue,Helvetica,Arial,sans-serif';font-size: 12px\">

<div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"list-group\">
            <a class=\"list-group-item active\" href=\"#\">
              <h4 class=\"list-group-item-heading\">Informations concernant ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["url1"]) ? $context["url1"] : $this->getContext($context, "url1")), "html", null, true);
        echo "</h4>
            </a>
            ";
        // line 28
        $this->loadTemplate("headers1Infos.html", "@Myforms/Default/compareseo.html.twig", 28)->display($context);
        echo " 
             ";
        // line 29
        $this->loadTemplate("body.html", "@Myforms/Default/compareseo.html.twig", 29)->display($context);
        echo " 
       
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">TITLE  : </h4>
              <p class=\"list-group-item-text\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["title1"]) ? $context["title1"] : $this->getContext($context, "title1")), "html", null, true);
        echo "</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META KEYWORDS : </h4>
              <p class=\"list-group-item-text\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["keywords1"]) ? $context["keywords1"] : $this->getContext($context, "keywords1")), "html", null, true);
        echo "</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META DESCRIPTION : </h4>
              <p class=\"list-group-item-text\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["description1"]) ? $context["description1"] : $this->getContext($context, "description1")), "html", null, true);
        echo "</p>
            </a>
             ";
        // line 43
        $this->loadTemplate("links1.html", "@Myforms/Default/compareseo.html.twig", 43)->display($context);
        echo "            
          </div>
        </div><!-- /.col-sm-4 -->

        <div class=\"col-sm-6\">
          <div class=\"list-group\">
            <a class=\"list-group-item active\" href=\"#\">
              <h4 class=\"list-group-item-heading\">Informations concernant ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["url2"]) ? $context["url2"] : $this->getContext($context, "url2")), "html", null, true);
        echo "</h4>
            </a>
            ";
        // line 52
        $this->loadTemplate("headers2Infos.html", "@Myforms/Default/compareseo.html.twig", 52)->display($context);
        echo " 
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">TITLE  : </h4>
              <p class=\"list-group-item-text\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["title2"]) ? $context["title2"] : $this->getContext($context, "title2")), "html", null, true);
        echo "</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META KEYWORDS : </h4>
              <p class=\"list-group-item-text\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["keywords2"]) ? $context["keywords2"] : $this->getContext($context, "keywords2")), "html", null, true);
        echo "</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META DESCRIPTION : </h4>
              <p class=\"list-group-item-text\">";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["description2"]) ? $context["description2"] : $this->getContext($context, "description2")), "html", null, true);
        echo "</p>
            </a>
            ";
        // line 65
        $this->loadTemplate("links2.html", "@Myforms/Default/compareseo.html.twig", 65)->display($context);
        echo " 
          </div>
        </div><!-- /.col-sm-4 -->
</div>
</div><!-- /container -->

";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "
";
        
        $__internal_c6f7f71f80a8d6f38ea70e3e35f1363237b3d6a86103e29efd21b1261353cd29->leave($__internal_c6f7f71f80a8d6f38ea70e3e35f1363237b3d6a86103e29efd21b1261353cd29_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d0cbe77d5d5104f78d3566bae62f463644e2fa408704d63afeed74e5c5f9ef2 = $this->env->getExtension("native_profiler");
        $__internal_0d0cbe77d5d5104f78d3566bae62f463644e2fa408704d63afeed74e5c5f9ef2->enter($__internal_0d0cbe77d5d5104f78d3566bae62f463644e2fa408704d63afeed74e5c5f9ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"col-lg-9\">
    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("compareseo");
        echo "\" class=\"form-horizontal\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"form-group\">
            <div class=\"col-sm-offset-3 col-lg-9\">
              <button type=\"submit\" class=\"btn btn-sm btn-primary\">Lancer l'analyse</button>
            </div>
  \t\t</div>  
    </form>
</div>
";
        
        $__internal_0d0cbe77d5d5104f78d3566bae62f463644e2fa408704d63afeed74e5c5f9ef2->leave($__internal_0d0cbe77d5d5104f78d3566bae62f463644e2fa408704d63afeed74e5c5f9ef2_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af3294a24c49704798fadb9270d68d2550cbc84412b09f647110f12267fe338b = $this->env->getExtension("native_profiler");
        $__internal_af3294a24c49704798fadb9270d68d2550cbc84412b09f647110f12267fe338b->enter($__internal_af3294a24c49704798fadb9270d68d2550cbc84412b09f647110f12267fe338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af3294a24c49704798fadb9270d68d2550cbc84412b09f647110f12267fe338b->leave($__internal_af3294a24c49704798fadb9270d68d2550cbc84412b09f647110f12267fe338b_prof);

    }

    public function getTemplateName()
    {
        return "@Myforms/Default/compareseo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 71,  167 => 9,  160 => 7,  157 => 6,  151 => 5,  143 => 73,  141 => 71,  132 => 65,  127 => 63,  120 => 59,  113 => 55,  107 => 52,  102 => 50,  92 => 43,  87 => 41,  80 => 37,  73 => 33,  66 => 29,  62 => 28,  57 => 26,  47 => 18,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block body %}

{% block content %}
<div class=\"col-lg-9\">
    <form action=\"{{ path('compareseo') }}\" class=\"form-horizontal\" method=\"post\" {{ form_enctype(form) }}>
        
        {{ form_widget(form) }}
        <div class=\"form-group\">
            <div class=\"col-sm-offset-3 col-lg-9\">
              <button type=\"submit\" class=\"btn btn-sm btn-primary\">Lancer l'analyse</button>
            </div>
  \t\t</div>  
    </form>
</div>
{% endblock content %}


<div class=\"container\" style=\"font-family :'Helvetica Neue,Helvetica,Arial,sans-serif';font-size: 12px\">

<div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"list-group\">
            <a class=\"list-group-item active\" href=\"#\">
              <h4 class=\"list-group-item-heading\">Informations concernant {{url1}}</h4>
            </a>
            {% include 'headers1Infos.html' %} 
             {% include 'body.html' %} 
       
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">TITLE  : </h4>
              <p class=\"list-group-item-text\">{{title1}}</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META KEYWORDS : </h4>
              <p class=\"list-group-item-text\">{{keywords1}}</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META DESCRIPTION : </h4>
              <p class=\"list-group-item-text\">{{description1}}</p>
            </a>
             {% include 'links1.html' %}            
          </div>
        </div><!-- /.col-sm-4 -->

        <div class=\"col-sm-6\">
          <div class=\"list-group\">
            <a class=\"list-group-item active\" href=\"#\">
              <h4 class=\"list-group-item-heading\">Informations concernant {{url2}}</h4>
            </a>
            {% include 'headers2Infos.html' %} 
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">TITLE  : </h4>
              <p class=\"list-group-item-text\">{{title2}}</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META KEYWORDS : </h4>
              <p class=\"list-group-item-text\">{{keywords2}}</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META DESCRIPTION : </h4>
              <p class=\"list-group-item-text\">{{description2}}</p>
            </a>
            {% include 'links2.html' %} 
          </div>
        </div><!-- /.col-sm-4 -->
</div>
</div><!-- /container -->

{% block javascripts %}
{% endblock %}

{% endblock body %}


";
    }
}
