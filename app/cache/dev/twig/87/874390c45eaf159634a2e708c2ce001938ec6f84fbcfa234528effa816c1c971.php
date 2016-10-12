<?php

/* links2.html */
class __TwigTemplate_8374fc54d6f201663bf9798fef43588c40c3608ea62e59cbf1d66f9ac1e68f3b extends Twig_Template
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
        $__internal_d5df272f6546f4a41daabb9a4980540cc0a5ad45d38339ad747f462cf3817597 = $this->env->getExtension("native_profiler");
        $__internal_d5df272f6546f4a41daabb9a4980540cc0a5ad45d38339ad747f462cf3817597->enter($__internal_d5df272f6546f4a41daabb9a4980540cc0a5ad45d38339ad747f462cf3817597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "links2.html"));

        // line 1
        echo "<a class=\"list-group-item\" href=\"#\">
  <h4 class=\"list-group-item-heading\">INFOS SUR LES LIENS : </h4>
<p class=\"list-group-item-text\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["nblinks2"]) ? $context["nblinks2"] : $this->getContext($context, "nblinks2")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_convert_encoding(" lien(s) trouvé(s)", "UTF-8", " iso-8859-1"), "html", null, true);
        echo "</p>
\t<ul style=\"list-style-type: none;\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["nblinks2"]) ? $context["nblinks2"] : $this->getContext($context, "nblinks2")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "\t\t\t<li>Texte de l'ancre du lien : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["links2"]) ? $context["links2"] : $this->getContext($context, "links2")), $context["i"], array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</li>
\t\t\t<li>Lien de la page de destination : ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["links2"]) ? $context["links2"] : $this->getContext($context, "links2")), $context["i"], array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</li>
\t\t\t<li>Attribut title du lien : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["links2"]) ? $context["links2"] : $this->getContext($context, "links2")), $context["i"], array(), "array"), 2, array(), "array"), "html", null, true);
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
        
        $__internal_d5df272f6546f4a41daabb9a4980540cc0a5ad45d38339ad747f462cf3817597->leave($__internal_d5df272f6546f4a41daabb9a4980540cc0a5ad45d38339ad747f462cf3817597_prof);

    }

    public function getTemplateName()
    {
        return "links2.html";
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
<p class=\"list-group-item-text\">{{nblinks2}} {{' lien(s) trouvé(s)'|convert_encoding('UTF-8', ' iso-8859-1') }}</p>
\t<ul style=\"list-style-type: none;\">{% for i in 0..nblinks2-1 %}
\t\t\t<li>Texte de l'ancre du lien : {{links2[i][0]}}</li>
\t\t\t<li>Lien de la page de destination : {{links2[i][1]}}</li>
\t\t\t<li>Attribut title du lien : {{links2[i][2]}}</li>
\t\t\t<br>
\t\t{% endfor %}
\t</ul>
             
</a>     
";
    }
}
