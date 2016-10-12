<?php

/* @CraueFormFlow/FormFlow/stepList_content.html.twig */
class __TwigTemplate_cec071d736f666717d284c469ce379002a0ab2c79d71db786a88a0073f2802ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig", "@CraueFormFlow/FormFlow/stepList_content.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61567dded09642dfe4f4e11ed919ef4f764a79304a2b2997344c800929a13ae3 = $this->env->getExtension("native_profiler");
        $__internal_61567dded09642dfe4f4e11ed919ef4f764a79304a2b2997344c800929a13ae3->enter($__internal_61567dded09642dfe4f4e11ed919ef4f764a79304a2b2997344c800929a13ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CraueFormFlow/FormFlow/stepList_content.html.twig"));

        // line 3
        if ( !twig_test_empty($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getStepLabels", array(), "method"))) {
            // line 4
            echo "<ol class=\"craue_formflow_steplist\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getStepLabels", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stepLabel"]) {
                // line 6
                echo "\t\t\t<li";
                $this->displayBlock("craue_flow_stepList_class", $context, $blocks);
                echo ">";
                // line 7
                if ($this->env->getExtension('craue_formflow')->isStepLinkable((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), $this->getAttribute($context["loop"], "index", array()))) {
                    // line 8
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->env->getExtension('craue_formflow')->addDynamicStepNavigationParameter(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 9
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")),                     // line 10
(isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), $this->getAttribute($context["loop"], "index", array()))), "html", null, true);
                    echo "\">";
                    // line 11
                    $this->displayBlock("craue_flow_stepLabel", $context, $blocks);
                    // line 12
                    echo "</a>";
                } else {
                    // line 14
                    $this->displayBlock("craue_flow_stepLabel", $context, $blocks);
                }
                // line 16
                echo "</li>
\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</ol>";
        }
        
        $__internal_61567dded09642dfe4f4e11ed919ef4f764a79304a2b2997344c800929a13ae3->leave($__internal_61567dded09642dfe4f4e11ed919ef4f764a79304a2b2997344c800929a13ae3_prof);

    }

    public function getTemplateName()
    {
        return "@CraueFormFlow/FormFlow/stepList_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  76 => 16,  73 => 14,  70 => 12,  68 => 11,  65 => 10,  64 => 9,  62 => 8,  60 => 7,  56 => 6,  39 => 5,  36 => 4,  34 => 3,  14 => 1,);
    }

    public function getSource()
    {
        return "{% use 'CraueFormFlowBundle:FormFlow:stepList_blocks.html.twig' %}

{%- if flow.getStepLabels() is not empty -%}
\t<ol class=\"craue_formflow_steplist\">
\t\t{% for stepLabel in flow.getStepLabels() %}
\t\t\t<li{{ block('craue_flow_stepList_class') }}>
\t\t\t\t{%- if craue_isStepLinkable(flow, loop.index) -%}
\t\t\t\t\t<a href=\"{{ path(app.request.attributes.get('_route'), app.request.query.all
\t\t\t\t\t\t\t| merge(app.request.attributes.get('_route_params'))
\t\t\t\t\t\t\t| craue_addDynamicStepNavigationParameter(flow, loop.index)) }}\">
\t\t\t\t\t\t{{- block('craue_flow_stepLabel') -}}
\t\t\t\t\t</a>
\t\t\t\t{%- else -%}
\t\t\t\t\t{{- block('craue_flow_stepLabel') -}}
\t\t\t\t{%- endif -%}
\t\t\t</li>
\t\t{% endfor %}
\t</ol>
{%- endif -%}
";
    }
}
