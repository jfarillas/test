<?php

/* base.html.twig */
class __TwigTemplate_1b01aa87132f118d4554e020f38f5498b5b0102ef67d08d449334e9a2dae7c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f7a4ad8bf2319ec2bd62d1e90535e70d6d80e28ae35aef1c926f9e8bdf4b8f9 = $this->env->getExtension("native_profiler");
        $__internal_1f7a4ad8bf2319ec2bd62d1e90535e70d6d80e28ae35aef1c926f9e8bdf4b8f9->enter($__internal_1f7a4ad8bf2319ec2bd62d1e90535e70d6d80e28ae35aef1c926f9e8bdf4b8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1f7a4ad8bf2319ec2bd62d1e90535e70d6d80e28ae35aef1c926f9e8bdf4b8f9->leave($__internal_1f7a4ad8bf2319ec2bd62d1e90535e70d6d80e28ae35aef1c926f9e8bdf4b8f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26c797694368c239582465191e549d6cec8db08965edc955a411182c9c21efc8 = $this->env->getExtension("native_profiler");
        $__internal_26c797694368c239582465191e549d6cec8db08965edc955a411182c9c21efc8->enter($__internal_26c797694368c239582465191e549d6cec8db08965edc955a411182c9c21efc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to Joseph Ian Farillas' Product Floor Plan!";
        
        $__internal_26c797694368c239582465191e549d6cec8db08965edc955a411182c9c21efc8->leave($__internal_26c797694368c239582465191e549d6cec8db08965edc955a411182c9c21efc8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01b90e23f1557789a3954d9b10933acef5d5f62c3dde115ae7b5ac028493b0d5 = $this->env->getExtension("native_profiler");
        $__internal_01b90e23f1557789a3954d9b10933acef5d5f62c3dde115ae7b5ac028493b0d5->enter($__internal_01b90e23f1557789a3954d9b10933acef5d5f62c3dde115ae7b5ac028493b0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_01b90e23f1557789a3954d9b10933acef5d5f62c3dde115ae7b5ac028493b0d5->leave($__internal_01b90e23f1557789a3954d9b10933acef5d5f62c3dde115ae7b5ac028493b0d5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6187fdd8aa19197b429bb57781f34ce0716f3230f3a43b0f5833d6d9d808e6d0 = $this->env->getExtension("native_profiler");
        $__internal_6187fdd8aa19197b429bb57781f34ce0716f3230f3a43b0f5833d6d9d808e6d0->enter($__internal_6187fdd8aa19197b429bb57781f34ce0716f3230f3a43b0f5833d6d9d808e6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6187fdd8aa19197b429bb57781f34ce0716f3230f3a43b0f5833d6d9d808e6d0->leave($__internal_6187fdd8aa19197b429bb57781f34ce0716f3230f3a43b0f5833d6d9d808e6d0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d115c949670eae948f8d3710468d69cc3616d2100a9e3b1ba2e0d440ce692de = $this->env->getExtension("native_profiler");
        $__internal_7d115c949670eae948f8d3710468d69cc3616d2100a9e3b1ba2e0d440ce692de->enter($__internal_7d115c949670eae948f8d3710468d69cc3616d2100a9e3b1ba2e0d440ce692de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d115c949670eae948f8d3710468d69cc3616d2100a9e3b1ba2e0d440ce692de->leave($__internal_7d115c949670eae948f8d3710468d69cc3616d2100a9e3b1ba2e0d440ce692de_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
