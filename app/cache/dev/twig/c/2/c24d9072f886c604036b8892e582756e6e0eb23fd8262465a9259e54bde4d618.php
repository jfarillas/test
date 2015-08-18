<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c24d9072f886c604036b8892e582756e6e0eb23fd8262465a9259e54bde4d618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad885caca6569b614f1c402e57d49cafdf2107e9fe77bcd8a4860bf4f9cc5143 = $this->env->getExtension("native_profiler");
        $__internal_ad885caca6569b614f1c402e57d49cafdf2107e9fe77bcd8a4860bf4f9cc5143->enter($__internal_ad885caca6569b614f1c402e57d49cafdf2107e9fe77bcd8a4860bf4f9cc5143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad885caca6569b614f1c402e57d49cafdf2107e9fe77bcd8a4860bf4f9cc5143->leave($__internal_ad885caca6569b614f1c402e57d49cafdf2107e9fe77bcd8a4860bf4f9cc5143_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_606c0a12a33e640abab475dac686d5d2de2019ccad239a6c0b9807065fcb96ab = $this->env->getExtension("native_profiler");
        $__internal_606c0a12a33e640abab475dac686d5d2de2019ccad239a6c0b9807065fcb96ab->enter($__internal_606c0a12a33e640abab475dac686d5d2de2019ccad239a6c0b9807065fcb96ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_606c0a12a33e640abab475dac686d5d2de2019ccad239a6c0b9807065fcb96ab->leave($__internal_606c0a12a33e640abab475dac686d5d2de2019ccad239a6c0b9807065fcb96ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_15baee7bc27ee986a160380260b8eef83a02385f9bfa61e93daed62bf8c8fbc3 = $this->env->getExtension("native_profiler");
        $__internal_15baee7bc27ee986a160380260b8eef83a02385f9bfa61e93daed62bf8c8fbc3->enter($__internal_15baee7bc27ee986a160380260b8eef83a02385f9bfa61e93daed62bf8c8fbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_15baee7bc27ee986a160380260b8eef83a02385f9bfa61e93daed62bf8c8fbc3->leave($__internal_15baee7bc27ee986a160380260b8eef83a02385f9bfa61e93daed62bf8c8fbc3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d35d6e1fcc57894167957e9480f2cb285648fcecb7e0835dfbd7abd9a0ea539f = $this->env->getExtension("native_profiler");
        $__internal_d35d6e1fcc57894167957e9480f2cb285648fcecb7e0835dfbd7abd9a0ea539f->enter($__internal_d35d6e1fcc57894167957e9480f2cb285648fcecb7e0835dfbd7abd9a0ea539f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d35d6e1fcc57894167957e9480f2cb285648fcecb7e0835dfbd7abd9a0ea539f->leave($__internal_d35d6e1fcc57894167957e9480f2cb285648fcecb7e0835dfbd7abd9a0ea539f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
