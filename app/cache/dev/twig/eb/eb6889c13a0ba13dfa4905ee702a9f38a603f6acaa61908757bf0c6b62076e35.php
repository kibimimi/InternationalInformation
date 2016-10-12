<?php

/* MyformsBundle:Default:compareseo1.html.twig */
class __TwigTemplate_a987fe6cb5adc511aaa89c1f678ecc7f2d15cd0938922b5247c787fac53b0c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyformsBundle:Default:compareseo1.html.twig", 1);
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
        $__internal_ae33495569f2f048a31f90b35ba74389ce0ba65a7db839e3ae50b79022ea8ce8 = $this->env->getExtension("native_profiler");
        $__internal_ae33495569f2f048a31f90b35ba74389ce0ba65a7db839e3ae50b79022ea8ce8->enter($__internal_ae33495569f2f048a31f90b35ba74389ce0ba65a7db839e3ae50b79022ea8ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyformsBundle:Default:compareseo1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae33495569f2f048a31f90b35ba74389ce0ba65a7db839e3ae50b79022ea8ce8->leave($__internal_ae33495569f2f048a31f90b35ba74389ce0ba65a7db839e3ae50b79022ea8ce8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_283ecca330129ff76fcfc92bc70291cb574b2d01f780859b4c4c5ccf6ee604cb = $this->env->getExtension("native_profiler");
        $__internal_283ecca330129ff76fcfc92bc70291cb574b2d01f780859b4c4c5ccf6ee604cb->enter($__internal_283ecca330129ff76fcfc92bc70291cb574b2d01f780859b4c4c5ccf6ee604cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "
<div class=\"container\" style=\"font-family :'Helvetica Neue,Helvetica,Arial,sans-serif';font-size: 12px\">

<div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"list-group\">
            <a class=\"list-group-item active\" href=\"#\">
              <h4 class=\"list-group-item-heading\">Informations concernant ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["url1"]) ? $context["url1"] : $this->getContext($context, "url1")), "html", null, true);
        echo "</h4>
            </a>
            ";
        // line 44
        $this->loadTemplate("headers1Infos.html", "MyformsBundle:Default:compareseo1.html.twig", 44)->display($context);
        echo " 
             ";
        // line 45
        $this->loadTemplate("body.html", "MyformsBundle:Default:compareseo1.html.twig", 45)->display($context);
        echo " 
       
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">TITLE  : </h4>
              <p class=\"list-group-item-text\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["title1"]) ? $context["title1"] : $this->getContext($context, "title1")), "html", null, true);
        echo "</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META KEYWORDS : </h4>
              <p class=\"list-group-item-text\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["keywords1"]) ? $context["keywords1"] : $this->getContext($context, "keywords1")), "html", null, true);
        echo "</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META DESCRIPTION : </h4>
              <p class=\"list-group-item-text\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["description1"]) ? $context["description1"] : $this->getContext($context, "description1")), "html", null, true);
        echo "</p>
            </a>
             ";
        // line 59
        $this->loadTemplate("links1.html", "MyformsBundle:Default:compareseo1.html.twig", 59)->display($context);
        echo "            
          </div>
        </div><!-- /.col-sm-4 -->

        <div class=\"col-sm-6\">
          <div class=\"list-group\">
            <a class=\"list-group-item active\" href=\"#\">
              <h4 class=\"list-group-item-heading\">Informations concernant ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["url2"]) ? $context["url2"] : $this->getContext($context, "url2")), "html", null, true);
        echo "</h4>
            </a>
            ";
        // line 68
        $this->loadTemplate("headers2Infos.html", "MyformsBundle:Default:compareseo1.html.twig", 68)->display($context);
        echo " 
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">TITLE  : </h4>
              <p class=\"list-group-item-text\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["title2"]) ? $context["title2"] : $this->getContext($context, "title2")), "html", null, true);
        echo "</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META KEYWORDS : </h4>
              <p class=\"list-group-item-text\">";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["keywords2"]) ? $context["keywords2"] : $this->getContext($context, "keywords2")), "html", null, true);
        echo "</p>
            </a>
            <a class=\"list-group-item\" href=\"#\">
              <h4 class=\"list-group-item-heading\">META DESCRIPTION : </h4>
              <p class=\"list-group-item-text\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["description2"]) ? $context["description2"] : $this->getContext($context, "description2")), "html", null, true);
        echo "</p>
            </a>
            ";
        // line 81
        $this->loadTemplate("links2.html", "MyformsBundle:Default:compareseo1.html.twig", 81)->display($context);
        echo " 
          </div>
        </div><!-- /.col-sm-4 -->
</div>
</div><!-- /container -->

";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "
";
        
        $__internal_283ecca330129ff76fcfc92bc70291cb574b2d01f780859b4c4c5ccf6ee604cb->leave($__internal_283ecca330129ff76fcfc92bc70291cb574b2d01f780859b4c4c5ccf6ee604cb_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_526c5f05751a77c6b4f2f694458dff979d8a2b9761de6f6679c623fc2d00327f = $this->env->getExtension("native_profiler");
        $__internal_526c5f05751a77c6b4f2f694458dff979d8a2b9761de6f6679c623fc2d00327f->enter($__internal_526c5f05751a77c6b4f2f694458dff979d8a2b9761de6f6679c623fc2d00327f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"col-lg-9\">
    <form class=\"form-horizontal\">
      \t<div class=\"form-group\">
            <label for=\"compare_seo_form_url1\" class=\"col-sm-2 control-label\">url1</label>
            <div class=\"col-sm-10\">
            \t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url1", array()), 'widget');
        echo "
        \t</div>
        </div>
      \t<div class=\"form-group\">
            <label for=\"compare_seo_form_url2\" class=\"col-sm-2 control-label\">url2</label>
            <div class=\"col-sm-10\">
            \t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url2", array()), 'widget');
        echo "
        \t</div>
        </div>
        
      \t<div class=\"form-group\">
            <label for=\"compare_seo_form_keywords\" class=\"col-sm-2 control-label\">keywords</label>
            <div class=\"col-sm-10\">
            \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keywords", array()), 'widget');
        echo "
        \t</div>
        </div>        
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-sm btn-primary\">Lancer l'analyse</button>
            </div>
  \t\t</div>       
        
    </form> 
</div>
";
        
        $__internal_526c5f05751a77c6b4f2f694458dff979d8a2b9761de6f6679c623fc2d00327f->leave($__internal_526c5f05751a77c6b4f2f694458dff979d8a2b9761de6f6679c623fc2d00327f_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92ceeab53f745333c182cd4e8ff1b44485a102f2765b78ce9e020fd62453ff72 = $this->env->getExtension("native_profiler");
        $__internal_92ceeab53f745333c182cd4e8ff1b44485a102f2765b78ce9e020fd62453ff72->enter($__internal_92ceeab53f745333c182cd4e8ff1b44485a102f2765b78ce9e020fd62453ff72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_92ceeab53f745333c182cd4e8ff1b44485a102f2765b78ce9e020fd62453ff72->leave($__internal_92ceeab53f745333c182cd4e8ff1b44485a102f2765b78ce9e020fd62453ff72_prof);

    }

    public function getTemplateName()
    {
        return "MyformsBundle:Default:compareseo1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 87,  179 => 23,  169 => 16,  160 => 10,  153 => 5,  147 => 4,  139 => 89,  137 => 87,  128 => 81,  123 => 79,  116 => 75,  109 => 71,  103 => 68,  98 => 66,  88 => 59,  83 => 57,  76 => 53,  69 => 49,  62 => 45,  58 => 44,  53 => 42,  44 => 35,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block body %}
{% block content %}
<div class=\"col-lg-9\">
    <form class=\"form-horizontal\">
      \t<div class=\"form-group\">
            <label for=\"compare_seo_form_url1\" class=\"col-sm-2 control-label\">url1</label>
            <div class=\"col-sm-10\">
            \t{{ form_widget(form.url1) }}
        \t</div>
        </div>
      \t<div class=\"form-group\">
            <label for=\"compare_seo_form_url2\" class=\"col-sm-2 control-label\">url2</label>
            <div class=\"col-sm-10\">
            \t{{ form_widget(form.url2) }}
        \t</div>
        </div>
        
      \t<div class=\"form-group\">
            <label for=\"compare_seo_form_keywords\" class=\"col-sm-2 control-label\">keywords</label>
            <div class=\"col-sm-10\">
            \t{{ form_widget(form.keywords) }}
        \t</div>
        </div>        
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
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
