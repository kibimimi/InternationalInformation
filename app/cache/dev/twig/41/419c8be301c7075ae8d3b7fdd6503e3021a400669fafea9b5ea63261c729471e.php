<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5a8a00e08d92aea47f218b875ad4a2c0d6140d65f3380c350d50de3e76acdfc3 extends Twig_Template
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
        $__internal_d4a5a353024acf8b9a73f5c36fafecdbf840d4617707e8a500a810f04fafa3b3 = $this->env->getExtension("native_profiler");
        $__internal_d4a5a353024acf8b9a73f5c36fafecdbf840d4617707e8a500a810f04fafa3b3->enter($__internal_d4a5a353024acf8b9a73f5c36fafecdbf840d4617707e8a500a810f04fafa3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d4a5a353024acf8b9a73f5c36fafecdbf840d4617707e8a500a810f04fafa3b3->leave($__internal_d4a5a353024acf8b9a73f5c36fafecdbf840d4617707e8a500a810f04fafa3b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
