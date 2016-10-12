<?php

/* MyformsBundle:Default:compareseo.html.twig */
class __TwigTemplate_7f17c2e88a5fd82c7b03b9b50ae7d0b354d56e289eccaef4065dd74898f36eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyformsBundle:Default:compareseo.html.twig", 1);
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
        $__internal_2be7230890499655f48b9396eda5536894e59e015893f52be977a4890678b30b = $this->env->getExtension("native_profiler");
        $__internal_2be7230890499655f48b9396eda5536894e59e015893f52be977a4890678b30b->enter($__internal_2be7230890499655f48b9396eda5536894e59e015893f52be977a4890678b30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyformsBundle:Default:compareseo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be7230890499655f48b9396eda5536894e59e015893f52be977a4890678b30b->leave($__internal_2be7230890499655f48b9396eda5536894e59e015893f52be977a4890678b30b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0b5eeb4c4c08430cd5ecb330873aec2ec1477ae8d38097c4f1d3ee319d2f104 = $this->env->getExtension("native_profiler");
        $__internal_e0b5eeb4c4c08430cd5ecb330873aec2ec1477ae8d38097c4f1d3ee319d2f104->enter($__internal_e0b5eeb4c4c08430cd5ecb330873aec2ec1477ae8d38097c4f1d3ee319d2f104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("headers1Infos.html", "MyformsBundle:Default:compareseo.html.twig", 28)->display($context);
        echo " 
             ";
        // line 29
        $this->loadTemplate("body.html", "MyformsBundle:Default:compareseo.html.twig", 29)->display($context);
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
        $this->loadTemplate("links1.html", "MyformsBundle:Default:compareseo.html.twig", 43)->display($context);
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
        $this->loadTemplate("headers2Infos.html", "MyformsBundle:Default:compareseo.html.twig", 52)->display($context);
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
        $this->loadTemplate("links2.html", "MyformsBundle:Default:compareseo.html.twig", 65)->display($context);
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
        
        $__internal_e0b5eeb4c4c08430cd5ecb330873aec2ec1477ae8d38097c4f1d3ee319d2f104->leave($__internal_e0b5eeb4c4c08430cd5ecb330873aec2ec1477ae8d38097c4f1d3ee319d2f104_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_52172eeaf7aafc1e73d9f3bb22b1ab709be21ba4f09db78f55293ac7a89502bd = $this->env->getExtension("native_profiler");
        $__internal_52172eeaf7aafc1e73d9f3bb22b1ab709be21ba4f09db78f55293ac7a89502bd->enter($__internal_52172eeaf7aafc1e73d9f3bb22b1ab709be21ba4f09db78f55293ac7a89502bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_52172eeaf7aafc1e73d9f3bb22b1ab709be21ba4f09db78f55293ac7a89502bd->leave($__internal_52172eeaf7aafc1e73d9f3bb22b1ab709be21ba4f09db78f55293ac7a89502bd_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db66153f278eae2acc0a1a60014e2963443aa98304abd591eabab5562b5548ba = $this->env->getExtension("native_profiler");
        $__internal_db66153f278eae2acc0a1a60014e2963443aa98304abd591eabab5562b5548ba->enter($__internal_db66153f278eae2acc0a1a60014e2963443aa98304abd591eabab5562b5548ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_db66153f278eae2acc0a1a60014e2963443aa98304abd591eabab5562b5548ba->leave($__internal_db66153f278eae2acc0a1a60014e2963443aa98304abd591eabab5562b5548ba_prof);

    }

    public function getTemplateName()
    {
        return "MyformsBundle:Default:compareseo.html.twig";
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
