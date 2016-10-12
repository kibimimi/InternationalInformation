<?php

/* CraueFormFlowBundle:FormFlow:stepField.html.twig */
class __TwigTemplate_27e53139a912d78824b03131186c6e2e580e8c0b4e2667f6d8bc6cba4423fe8a extends Twig_Template
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
        $__internal_b7cab93289a187b30cf4aae4e9bceffec9df5445571714611e5c53566a345384 = $this->env->getExtension("native_profiler");
        $__internal_b7cab93289a187b30cf4aae4e9bceffec9df5445571714611e5c53566a345384->enter($__internal_b7cab93289a187b30cf4aae4e9bceffec9df5445571714611e5c53566a345384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CraueFormFlowBundle:FormFlow:stepField.html.twig"));

        // line 2
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFormStepKey", array(), "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method"), "html", null, true);
        echo "\" />
";
        
        $__internal_b7cab93289a187b30cf4aae4e9bceffec9df5445571714611e5c53566a345384->leave($__internal_b7cab93289a187b30cf4aae4e9bceffec9df5445571714611e5c53566a345384_prof);

    }

    public function getTemplateName()
    {
        return "CraueFormFlowBundle:FormFlow:stepField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    public function getSource()
    {
        return "{# Deprecated. This template is not needed anymore and left only for BC. #}
<input type=\"hidden\" name=\"{{ flow.getFormStepKey() }}\" value=\"{{ flow.getCurrentStepNumber() }}\" />
";
    }
}
