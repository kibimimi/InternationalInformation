<?php

/* links1.html */
class __TwigTemplate_cfe17616847ebb8c05668738fe91e4533fcc72ce04b4b5d57c887f67e61eacbe extends Twig_Template
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
        $__internal_b9f1e28d6d18bca3603956694246dc95a1ddcb07ad4dd67111bb86637c6c811e = $this->env->getExtension("native_profiler");
        $__internal_b9f1e28d6d18bca3603956694246dc95a1ddcb07ad4dd67111bb86637c6c811e->enter($__internal_b9f1e28d6d18bca3603956694246dc95a1ddcb07ad4dd67111bb86637c6c811e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "links1.html"));

        // line 1
        echo "<a class=\"list-group-item\" href=\"#\">
  <h4 class=\"list-group-item-heading\">INFOS SUR LES LIENS : </h4>
<p class=\"list-group-item-text\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["nblinks1"]) ? $context["nblinks1"] : $this->getContext($context, "nblinks1")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_convert_encoding(" lien(s) trouvé(s)", "UTF-8", " iso-8859-1"), "html", null, true);
        echo "</p>
\t<ul style=\"list-style-type: none;\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["nblinks1"]) ? $context["nblinks1"] : $this->getContext($context, "nblinks1")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "\t\t\t<li>Texte de l'ancre du lien : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["links1"]) ? $context["links1"] : $this->getContext($context, "links1")), $context["i"], array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</li>
\t\t\t<li>Lien de la page de destination : ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["links1"]) ? $context["links1"] : $this->getContext($context, "links1")), $context["i"], array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</li>
\t\t\t<li>Attribut title du lien : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["links1"]) ? $context["links1"] : $this->getContext($context, "links1")), $context["i"], array(), "array"), 2, array(), "array"), "html", null, true);
            echo "</li>
\t\t\t<br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</ul>
             
</a>            
";
        
        $__internal_b9f1e28d6d18bca3603956694246dc95a1ddcb07ad4dd67111bb86637c6c811e->leave($__internal_b9f1e28d6d18bca3603956694246dc95a1ddcb07ad4dd67111bb86637c6c811e_prof);

    }

    public function getTemplateName()
    {
        return "links1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  45 => 7,  41 => 6,  36 => 5,  32 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<a class=\"list-group-item\" href=\"#\">
  <h4 class=\"list-group-item-heading\">INFOS SUR LES LIENS : </h4>
<p class=\"list-group-item-text\">{{nblinks1}} {{' lien(s) trouvé(s)'|convert_encoding('UTF-8', ' iso-8859-1') }}</p>
\t<ul style=\"list-style-type: none;\">{% for i in 0..nblinks1-1 %}
\t\t\t<li>Texte de l'ancre du lien : {{links1[i][0]}}</li>
\t\t\t<li>Lien de la page de destination : {{links1[i][1]}}</li>
\t\t\t<li>Attribut title du lien : {{links1[i][2]}}</li>
\t\t\t<br>
\t\t{% endfor %}
\t</ul>
             
</a>            
";
    }
}
