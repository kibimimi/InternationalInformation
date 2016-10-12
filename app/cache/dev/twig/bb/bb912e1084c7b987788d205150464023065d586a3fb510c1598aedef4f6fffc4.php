<?php

/* @CraueFormFlow/FormFlow/buttons.html.twig */
class __TwigTemplate_4f156bb30a9d0930ba9a603a7c3f39149a2a67d9ae723cd84096db169358638b extends Twig_Template
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
        $__internal_b22410ccb53be7c3fc899cc9d0eef5ce2877828fea50066ae77bffbeb8fa455b = $this->env->getExtension("native_profiler");
        $__internal_b22410ccb53be7c3fc899cc9d0eef5ce2877828fea50066ae77bffbeb8fa455b->enter($__internal_b22410ccb53be7c3fc899cc9d0eef5ce2877828fea50066ae77bffbeb8fa455b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CraueFormFlow/FormFlow/buttons.html.twig"));

        // line 1
        $context["renderBackButton"] = twig_in_filter($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method"), range(($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFirstStepNumber", array(), "method") + 1), $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getLastStepNumber", array(), "method")));
        // line 2
        echo "<div class=\"craue_formflow_buttons craue_formflow_button_count_";
        if ((isset($context["renderBackButton"]) ? $context["renderBackButton"] : $this->getContext($context, "renderBackButton"))) {
            echo "3";
        } else {
            echo "2";
        }
        echo "\">
\t";
        // line 8
        echo "\t<button type=\"submit\" class=\"craue_formflow_button_last\">";
        // line 9
        if (($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method") < $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getLastStepNumber", array(), "method"))) {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.next", array(), "CraueFormFlowBundle"), "html", null, true);
        } else {
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.finish", array(), "CraueFormFlowBundle"), "html", null, true);
        }
        // line 14
        echo "</button>

\t";
        // line 16
        if ((isset($context["renderBackButton"]) ? $context["renderBackButton"] : $this->getContext($context, "renderBackButton"))) {
            // line 17
            echo "\t\t";
            // line 18
            echo "\t\t<button type=\"submit\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFormTransitionKey", array(), "method"), "html", null, true);
            echo "\" value=\"back\" formnovalidate=\"formnovalidate\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.back", array(), "CraueFormFlowBundle"), "html", null, true);
            // line 20
            echo "</button>
\t";
        }
        // line 22
        echo "
\t<button type=\"submit\" class=\"craue_formflow_button_first\" name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"reset\" formnovalidate=\"formnovalidate\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.reset", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 25
        echo "</button>
</div>
";
        
        $__internal_b22410ccb53be7c3fc899cc9d0eef5ce2877828fea50066ae77bffbeb8fa455b->leave($__internal_b22410ccb53be7c3fc899cc9d0eef5ce2877828fea50066ae77bffbeb8fa455b_prof);

    }

    public function getTemplateName()
    {
        return "@CraueFormFlow/FormFlow/buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  67 => 24,  64 => 23,  61 => 22,  57 => 20,  55 => 19,  51 => 18,  49 => 17,  47 => 16,  43 => 14,  40 => 12,  37 => 10,  35 => 9,  33 => 8,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% set renderBackButton = flow.getCurrentStepNumber() in (flow.getFirstStepNumber() + 1) .. flow.getLastStepNumber() %}
<div class=\"craue_formflow_buttons craue_formflow_button_count_{% if renderBackButton %}3{% else %}2{% endif %}\">
\t{#
\t\tDefault button (the one trigged by pressing the enter/return key) must be defined first.
\t\tThus, all buttons are defined in reverse order and will be reversed again via CSS.
\t\tSee http://stackoverflow.com/questions/1963245/multiple-submit-buttons-specifying-default-button
\t#}
\t<button type=\"submit\" class=\"craue_formflow_button_last\">
\t\t{%- if flow.getCurrentStepNumber() < flow.getLastStepNumber() -%}
\t\t\t{{- 'button.next' | trans({}, 'CraueFormFlowBundle') -}}
\t\t{%- else -%}
\t\t\t{{- 'button.finish' | trans({}, 'CraueFormFlowBundle') -}}
\t\t{%- endif -%}
\t</button>

\t{% if renderBackButton %}
\t\t{# see http://www.html5rocks.com/en/tutorials/forms/html5forms/ #}
\t\t<button type=\"submit\" name=\"{{ flow.getFormTransitionKey() }}\" value=\"back\" formnovalidate=\"formnovalidate\">
\t\t\t{{- 'button.back' | trans({}, 'CraueFormFlowBundle') -}}
\t\t</button>
\t{% endif %}

\t<button type=\"submit\" class=\"craue_formflow_button_first\" name=\"{{ flow.getFormTransitionKey() }}\" value=\"reset\" formnovalidate=\"formnovalidate\">
\t\t{{- 'button.reset' | trans({}, 'CraueFormFlowBundle') -}}
\t</button>
</div>
";
    }
}
