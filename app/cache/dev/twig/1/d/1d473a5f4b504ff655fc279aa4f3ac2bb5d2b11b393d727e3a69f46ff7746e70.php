<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1d473a5f4b504ff655fc279aa4f3ac2bb5d2b11b393d727e3a69f46ff7746e70 extends Twig_Template
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
        $__internal_6cb8835484778af57d3cbee3501dbedb1761d0974d50067603b2cf5badc5b3ad = $this->env->getExtension("native_profiler");
        $__internal_6cb8835484778af57d3cbee3501dbedb1761d0974d50067603b2cf5badc5b3ad->enter($__internal_6cb8835484778af57d3cbee3501dbedb1761d0974d50067603b2cf5badc5b3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6cb8835484778af57d3cbee3501dbedb1761d0974d50067603b2cf5badc5b3ad->leave($__internal_6cb8835484778af57d3cbee3501dbedb1761d0974d50067603b2cf5badc5b3ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
