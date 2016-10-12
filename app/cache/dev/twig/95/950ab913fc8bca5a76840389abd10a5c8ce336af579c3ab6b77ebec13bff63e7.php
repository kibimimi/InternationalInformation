<?php

/* headers2Infos.html */
class __TwigTemplate_d97e3dcf98c45941ea3ef99e8b8bcd9395a41d9e9ee1f1a58072b37c656de8d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e69ed20d8f7f2817bc009ca58fc86bb9dcf4b5ba632756d8f8b356abd23d9da = $this->env->getExtension("native_profiler");
        $__internal_1e69ed20d8f7f2817bc009ca58fc86bb9dcf4b5ba632756d8f8b356abd23d9da->enter($__internal_1e69ed20d8f7f2817bc009ca58fc86bb9dcf4b5ba632756d8f8b356abd23d9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "headers2Infos.html"));

        // line 1
        if ($this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : null), "Server", array(), "array", true, true)) {
            // line 2
            echo "  ";
            $context["headers2_Server"] = $this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : $this->getContext($context, "headers2")), "Server", array(), "array");
            echo "  
";
        } else {
            // line 4
            echo "  ";
            $context["headers2_Server"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : null), "X-Powered-By", array(), "array", true, true)) {
            // line 8
            echo "  ";
            $context["headers2_X_Powered_By"] = $this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : $this->getContext($context, "headers2")), "X-Powered-By", array(), "array");
            echo "  
";
        } else {
            // line 10
            echo "  ";
            $context["headers2_X_Powered_By"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 12
        echo "

";
        // line 14
        if ($this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : null), "Content-Type", array(), "array", true, true)) {
            // line 15
            echo "  ";
            $context["headers2_Content_Type"] = $this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : $this->getContext($context, "headers2")), "Content-Type", array(), "array");
            echo "  
";
        } else {
            // line 17
            echo "  ";
            $context["headers2_Content_Type"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 19
        echo "

";
        // line 21
        if ($this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : null), "Last-Modified", array(), "array", true, true)) {
            // line 22
            echo "  ";
            $context["headers2_Last_Modified"] = $this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : $this->getContext($context, "headers2")), "Last-Modified", array(), "array");
            echo "    
";
        } else {
            // line 24
            echo "  ";
            $context["headers2_Last_Modified"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 25
        echo " 

          
";
        // line 28
        if ($this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : null), "Etag", array(), "array", true, true)) {
            // line 29
            echo "  ";
            $context["headers2_Etag"] = $this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : $this->getContext($context, "headers2")), "Etag", array(), "array");
            echo " 
";
        } else {
            // line 31
            echo "  ";
            $context["headers2_Etag"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 33
        echo "

";
        // line 35
        if ($this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : null), "Content-Length", array(), "array", true, true)) {
            // line 36
            echo "  ";
            $context["headers_Content_Length"] = $this->getAttribute((isset($context["headers2"]) ? $context["headers2"] : $this->getContext($context, "headers2")), "Content-Length", array(), "array");
            echo "  
";
        } else {
            // line 38
            echo "  ";
            $context["headers_Content_Length"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 40
        echo "
Cache-Control
Connection
Expires
Vary
X-Varnish

<a class=\"list-group-item\" href=\"#\">
  <h4 class=\"list-group-item-heading\">HEADERS INFOS  : </h4>
  <p class=\"list-group-item-text\">";
        // line 49
        echo "Serveur";
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["headers2_Server"]) ? $context["headers2_Server"] : $this->getContext($context, "headers2_Server")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">";
        // line 50
        echo twig_escape_filter($this->env, twig_convert_encoding("Langage de développement", "UTF-8", " iso-8859-1"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["headers2_X_Powered_By"]) ? $context["headers2_X_Powered_By"] : $this->getContext($context, "headers2_X_Powered_By")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">";
        // line 51
        echo twig_escape_filter($this->env, twig_convert_encoding("Type de contenu", "UTF-8", " iso-8859-1"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["headers2_Content_Type"]) ? $context["headers2_Content_Type"] : $this->getContext($context, "headers2_Content_Type")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">";
        // line 52
        echo twig_escape_filter($this->env, twig_convert_encoding("Date de dernière modification", "UTF-8", " iso-8859-1"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["headers2_Last_Modified"]) ? $context["headers2_Last_Modified"] : $this->getContext($context, "headers2_Last_Modified")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">Eatg : ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["headers2_Etag"]) ? $context["headers2_Etag"] : $this->getContext($context, "headers2_Etag")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">Taille du contenu : ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["headers_Content_Length"]) ? $context["headers_Content_Length"] : $this->getContext($context, "headers_Content_Length")), "html", null, true);
        echo "</p>              
</a>            
";
        
        $__internal_1e69ed20d8f7f2817bc009ca58fc86bb9dcf4b5ba632756d8f8b356abd23d9da->leave($__internal_1e69ed20d8f7f2817bc009ca58fc86bb9dcf4b5ba632756d8f8b356abd23d9da_prof);

    }

    public function getTemplateName()
    {
        return "headers2Infos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 54,  149 => 53,  143 => 52,  137 => 51,  131 => 50,  125 => 49,  114 => 40,  110 => 38,  104 => 36,  102 => 35,  98 => 33,  94 => 31,  88 => 29,  86 => 28,  81 => 25,  77 => 24,  71 => 22,  69 => 21,  65 => 19,  61 => 17,  55 => 15,  53 => 14,  49 => 12,  45 => 10,  39 => 8,  37 => 7,  34 => 6,  30 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if headers2['Server'] is defined %}
  {% set headers2_Server = headers2['Server'] %}  
{% else %}
  {% set headers2_Server = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}

{% if headers2['X-Powered-By'] is defined %}
  {% set headers2_X_Powered_By = headers2['X-Powered-By'] %}  
{% else %}
  {% set headers2_X_Powered_By = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}


{% if headers2['Content-Type'] is defined %}
  {% set headers2_Content_Type = headers2['Content-Type'] %}  
{% else %}
  {% set headers2_Content_Type = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}


{% if headers2['Last-Modified'] is defined %}
  {% set headers2_Last_Modified = headers2['Last-Modified'] %}    
{% else %}
  {% set headers2_Last_Modified = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %} 

          
{% if headers2['Etag'] is defined %}
  {% set headers2_Etag = headers2['Etag'] %} 
{% else %}
  {% set headers2_Etag = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}


{% if headers2['Content-Length'] is defined %}
  {% set headers_Content_Length = headers2['Content-Length'] %}  
{% else %}
  {% set headers_Content_Length = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}

Cache-Control
Connection
Expires
Vary
X-Varnish

<a class=\"list-group-item\" href=\"#\">
  <h4 class=\"list-group-item-heading\">HEADERS INFOS  : </h4>
  <p class=\"list-group-item-text\">{{'Serveur'}} : {{headers2_Server}}</p>
  <p class=\"list-group-item-text\">{{'Langage de développement'|convert_encoding('UTF-8', ' iso-8859-1') }} : {{headers2_X_Powered_By}}</p>
  <p class=\"list-group-item-text\">{{'Type de contenu'|convert_encoding('UTF-8', ' iso-8859-1') }} : {{headers2_Content_Type}}</p>
  <p class=\"list-group-item-text\">{{'Date de dernière modification'|convert_encoding('UTF-8', ' iso-8859-1') }} : {{headers2_Last_Modified}}</p>
  <p class=\"list-group-item-text\">Eatg : {{headers2_Etag}}</p>
  <p class=\"list-group-item-text\">Taille du contenu : {{headers_Content_Length}}</p>              
</a>            
";
    }
}
