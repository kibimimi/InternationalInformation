<?php

/* body.html */
class __TwigTemplate_1dae50ae0b7fc040d165ac2e06a83822265eb847d7e52c0889d16328ddaba016 extends Twig_Template
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
        $__internal_87d904ab7346fb24b81c0caad2c77634c6b8d8e275dd29d806e7cc24cb30bad2 = $this->env->getExtension("native_profiler");
        $__internal_87d904ab7346fb24b81c0caad2c77634c6b8d8e275dd29d806e7cc24cb30bad2->enter($__internal_87d904ab7346fb24b81c0caad2c77634c6b8d8e275dd29d806e7cc24cb30bad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "body.html"));

        // line 1
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["body1"]) ? $context["body1"] : $this->getContext($context, "body1")));
        foreach ($context['_seq'] as $context["_key"] => $context["bod1"]) {
            // line 3
            echo "      ";
            echo twig_escape_filter($this->env, $context["bod1"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bod1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "          
";
        
        $__internal_87d904ab7346fb24b81c0caad2c77634c6b8d8e275dd29d806e7cc24cb30bad2->leave($__internal_87d904ab7346fb24b81c0caad2c77634c6b8d8e275dd29d806e7cc24cb30bad2_prof);

    }

    public function getTemplateName()
    {
        return "body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "
    {% for bod1 in body1 %}
      {{ bod1 }}<br>
    {% endfor %}
          
";
    }
}
