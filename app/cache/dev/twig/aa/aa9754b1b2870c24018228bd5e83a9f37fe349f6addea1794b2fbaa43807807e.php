<?php

/* headers1Infos.html */
class __TwigTemplate_a5fc7d6783b36e9683657f97877b4780a3a6c7d4082727dee5cb6e3d2f23ef81 extends Twig_Template
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
        $__internal_e1a57cc511c240b55441319e18f4f9b5d905ff560379057c158387d1d1e07bc7 = $this->env->getExtension("native_profiler");
        $__internal_e1a57cc511c240b55441319e18f4f9b5d905ff560379057c158387d1d1e07bc7->enter($__internal_e1a57cc511c240b55441319e18f4f9b5d905ff560379057c158387d1d1e07bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "headers1Infos.html"));

        // line 1
        if ($this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : null), "Server", array(), "array", true, true)) {
            // line 2
            echo "  ";
            $context["headers1_Server"] = $this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : $this->getContext($context, "headers1")), "Server", array(), "array");
            echo "  
";
        } else {
            // line 4
            echo "  ";
            $context["headers1_Server"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : null), "X-Powered-By", array(), "array", true, true)) {
            // line 8
            echo "  ";
            $context["headers1_X_Powered_By"] = $this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : $this->getContext($context, "headers1")), "X-Powered-By", array(), "array");
            echo "  
";
        } else {
            // line 10
            echo "  ";
            $context["headers1_X_Powered_By"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 12
        echo "

";
        // line 14
        if ($this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : null), "Content-Type", array(), "array", true, true)) {
            // line 15
            echo "  ";
            $context["headers1_Content_Type"] = $this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : $this->getContext($context, "headers1")), "Content-Type", array(), "array");
            echo "  
";
        } else {
            // line 17
            echo "  ";
            $context["headers1_Content_Type"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 19
        echo "

";
        // line 21
        if ($this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : null), "Last-Modified", array(), "array", true, true)) {
            // line 22
            echo "\t";
            $context["headers1_Last_Modified"] = $this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : $this->getContext($context, "headers1")), "Last-Modified", array(), "array");
            echo "\t
";
        } else {
            // line 24
            echo "\t";
            $context["headers1_Last_Modified"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 25
        echo " 

      \t\t
";
        // line 28
        if ($this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : null), "Etag", array(), "array", true, true)) {
            // line 29
            echo "  ";
            $context["headers1_Etag"] = $this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : $this->getContext($context, "headers1")), "Etag", array(), "array");
            echo " 
";
        } else {
            // line 31
            echo "  ";
            $context["headers1_Etag"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 33
        echo "

";
        // line 35
        if ($this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : null), "Content-Length", array(), "array", true, true)) {
            // line 36
            echo "  ";
            $context["headers_Content_Length"] = $this->getAttribute((isset($context["headers1"]) ? $context["headers1"] : $this->getContext($context, "headers1")), "Content-Length", array(), "array");
            echo " 
";
        } else {
            // line 38
            echo "  ";
            $context["headers_Content_Length"] = twig_convert_encoding("Non défini", "UTF-8", " iso-8859-1");
        }
        // line 40
        echo "
<a class=\"list-group-item\" href=\"#\">
  <h4 class=\"list-group-item-heading\">HEADERS INFOS  : </h4>
  <p class=\"list-group-item-text\">";
        // line 43
        echo "Serveur";
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["headers1_Server"]) ? $context["headers1_Server"] : $this->getContext($context, "headers1_Server")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">";
        // line 44
        echo twig_escape_filter($this->env, twig_convert_encoding("Langage de développement", "UTF-8", " iso-8859-1"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["headers1_X_Powered_By"]) ? $context["headers1_X_Powered_By"] : $this->getContext($context, "headers1_X_Powered_By")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">";
        // line 45
        echo twig_escape_filter($this->env, twig_convert_encoding("Type de contenu", "UTF-8", " iso-8859-1"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["headers1_Content_Type"]) ? $context["headers1_Content_Type"] : $this->getContext($context, "headers1_Content_Type")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">";
        // line 46
        echo twig_escape_filter($this->env, twig_convert_encoding("Date de dernière modification", "UTF-8", " iso-8859-1"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["headers1_Last_Modified"]) ? $context["headers1_Last_Modified"] : $this->getContext($context, "headers1_Last_Modified")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">Eatg : ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["headers1_Etag"]) ? $context["headers1_Etag"] : $this->getContext($context, "headers1_Etag")), "html", null, true);
        echo "</p>
  <p class=\"list-group-item-text\">Taille du contenu : ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["headers_Content_Length"]) ? $context["headers_Content_Length"] : $this->getContext($context, "headers_Content_Length")), "html", null, true);
        echo "</p>              
</a>            
";
        
        $__internal_e1a57cc511c240b55441319e18f4f9b5d905ff560379057c158387d1d1e07bc7->leave($__internal_e1a57cc511c240b55441319e18f4f9b5d905ff560379057c158387d1d1e07bc7_prof);

    }

    public function getTemplateName()
    {
        return "headers1Infos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 48,  143 => 47,  137 => 46,  131 => 45,  125 => 44,  119 => 43,  114 => 40,  110 => 38,  104 => 36,  102 => 35,  98 => 33,  94 => 31,  88 => 29,  86 => 28,  81 => 25,  77 => 24,  71 => 22,  69 => 21,  65 => 19,  61 => 17,  55 => 15,  53 => 14,  49 => 12,  45 => 10,  39 => 8,  37 => 7,  34 => 6,  30 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if headers1['Server'] is defined %}
  {% set headers1_Server = headers1['Server'] %}  
{% else %}
  {% set headers1_Server = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}

{% if headers1['X-Powered-By'] is defined %}
  {% set headers1_X_Powered_By = headers1['X-Powered-By'] %}  
{% else %}
  {% set headers1_X_Powered_By = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}


{% if headers1['Content-Type'] is defined %}
  {% set headers1_Content_Type = headers1['Content-Type'] %}  
{% else %}
  {% set headers1_Content_Type = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}


{% if headers1['Last-Modified'] is defined %}
\t{% set headers1_Last_Modified = headers1['Last-Modified'] %}\t
{% else %}
\t{% set headers1_Last_Modified = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %} 

      \t\t
{% if headers1['Etag'] is defined %}
  {% set headers1_Etag = headers1['Etag'] %} 
{% else %}
  {% set headers1_Etag = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}


{% if headers1['Content-Length'] is defined %}
  {% set headers_Content_Length = headers1['Content-Length'] %} 
{% else %}
  {% set headers_Content_Length = 'Non défini'|convert_encoding('UTF-8', ' iso-8859-1') %}
{% endif %}

<a class=\"list-group-item\" href=\"#\">
  <h4 class=\"list-group-item-heading\">HEADERS INFOS  : </h4>
  <p class=\"list-group-item-text\">{{'Serveur'}} : {{headers1_Server}}</p>
  <p class=\"list-group-item-text\">{{'Langage de développement'|convert_encoding('UTF-8', ' iso-8859-1') }} : {{headers1_X_Powered_By}}</p>
  <p class=\"list-group-item-text\">{{'Type de contenu'|convert_encoding('UTF-8', ' iso-8859-1') }} : {{headers1_Content_Type}}</p>
  <p class=\"list-group-item-text\">{{'Date de dernière modification'|convert_encoding('UTF-8', ' iso-8859-1') }} : {{headers1_Last_Modified}}</p>
  <p class=\"list-group-item-text\">Eatg : {{headers1_Etag}}</p>
  <p class=\"list-group-item-text\">Taille du contenu : {{headers_Content_Length}}</p>              
</a>            
";
    }
}
