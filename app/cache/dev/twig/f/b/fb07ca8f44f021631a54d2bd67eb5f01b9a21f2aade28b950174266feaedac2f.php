<?php

/* products/floorplan.html.twig */
class __TwigTemplate_fb07ca8f44f021631a54d2bd67eb5f01b9a21f2aade28b950174266feaedac2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "products/floorplan.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdf3ed1f58d2f66758d299ba5c592b27def605bc76701543a1446bf3cf0c3abf = $this->env->getExtension("native_profiler");
        $__internal_cdf3ed1f58d2f66758d299ba5c592b27def605bc76701543a1446bf3cf0c3abf->enter($__internal_cdf3ed1f58d2f66758d299ba5c592b27def605bc76701543a1446bf3cf0c3abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "products/floorplan.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf3ed1f58d2f66758d299ba5c592b27def605bc76701543a1446bf3cf0c3abf->leave($__internal_cdf3ed1f58d2f66758d299ba5c592b27def605bc76701543a1446bf3cf0c3abf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e078cc993fcbf66d3d5a82f4be3e3819b862a639d3b60a86a00a8cc8e9d5e57 = $this->env->getExtension("native_profiler");
        $__internal_4e078cc993fcbf66d3d5a82f4be3e3819b862a639d3b60a86a00a8cc8e9d5e57->enter($__internal_4e078cc993fcbf66d3d5a82f4be3e3819b862a639d3b60a86a00a8cc8e9d5e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h4>Welcome to Joseph Ian Farillas' Product Floor Plan</h4>
    <ul id=\"navigation\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stationList"]) ? $context["stationList"] : $this->getContext($context, "stationList")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stationName", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
";
        
        $__internal_4e078cc993fcbf66d3d5a82f4be3e3819b862a639d3b60a86a00a8cc8e9d5e57->leave($__internal_4e078cc993fcbf66d3d5a82f4be3e3819b862a639d3b60a86a00a8cc8e9d5e57_prof);

    }

    public function getTemplateName()
    {
        return "products/floorplan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 2,);
    }
}
