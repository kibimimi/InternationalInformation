<?php

/* @Myforms/Default/compareseo1.html.twig */
class __TwigTemplate_e433138dbfc5a07f2dd3b68b99151ed0c7c1f4c00a107910c849a56e30190864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Myforms/Default/compareseo1.html.twig", 1);
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
        $__internal_951829e6ec56be1231e8ad94671178a24b315bd7d24410334056439bbb99a8ad = $this->env->getExtension("native_profiler");
        $__internal_951829e6ec56be1231e8ad94671178a24b315bd7d24410334056439bbb99a8ad->enter($__internal_951829e6ec56be1231e8ad94671178a24b315bd7d24410334056439bbb99a8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Myforms/Default/compareseo1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_951829e6ec56be1231e8ad94671178a24b315bd7d24410334056439bbb99a8ad->leave($__internal_951829e6ec56be1231e8ad94671178a24b315bd7d24410334056439bbb99a8ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e02be8b2ffc77f278ca081cd22cbc11e124d7c7573611653e00eb21600e7d25b = $this->env->getExtension("native_profiler");
        $__internal_e02be8b2ffc77f278ca081cd22cbc11e124d7c7573611653e00eb21600e7d25b->enter($__internal_e02be8b2ffc77f278ca081cd22cbc11e124d7c7573611653e00eb21600e7d25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("headers1Infos.html", "@Myforms/Default/compareseo1.html.twig", 44)->display($context);
        echo " 
             ";
        // line 45
        $this->loadTemplate("body.html", "@Myforms/Default/compareseo1.html.twig", 45)->display($context);
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
        $this->loadTemplate("links1.html", "@Myforms/Default/compareseo1.html.twig", 59)->display($context);
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
        $this->loadTemplate("headers2Infos.html", "@Myforms/Default/compareseo1.html.twig", 68)->display($context);
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
        $this->loadTemplate("links2.html", "@Myforms/Default/compareseo1.html.twig", 81)->display($context);
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
        
        $__internal_e02be8b2ffc77f278ca081cd22cbc11e124d7c7573611653e00eb21600e7d25b->leave($__internal_e02be8b2ffc77f278ca081cd22cbc11e124d7c7573611653e00eb21600e7d25b_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_530fbaa50356e1c76910ec7c336bdff44f9429d7c73c17151dce6e8e8d90360f = $this->env->getExtension("native_profiler");
        $__internal_530fbaa50356e1c76910ec7c336bdff44f9429d7c73c17151dce6e8e8d90360f->enter($__internal_530fbaa50356e1c76910ec7c336bdff44f9429d7c73c17151dce6e8e8d90360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_530fbaa50356e1c76910ec7c336bdff44f9429d7c73c17151dce6e8e8d90360f->leave($__internal_530fbaa50356e1c76910ec7c336bdff44f9429d7c73c17151dce6e8e8d90360f_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39dc0aadd68e8c6ec61b9ef8c2f45f31825469d92640d324f0b5b3f60cc9a7f9 = $this->env->getExtension("native_profiler");
        $__internal_39dc0aadd68e8c6ec61b9ef8c2f45f31825469d92640d324f0b5b3f60cc9a7f9->enter($__internal_39dc0aadd68e8c6ec61b9ef8c2f45f31825469d92640d324f0b5b3f60cc9a7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_39dc0aadd68e8c6ec61b9ef8c2f45f31825469d92640d324f0b5b3f60cc9a7f9->leave($__internal_39dc0aadd68e8c6ec61b9ef8c2f45f31825469d92640d324f0b5b3f60cc9a7f9_prof);

    }

    public function getTemplateName()
    {
        return "@Myforms/Default/compareseo1.html.twig";
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
