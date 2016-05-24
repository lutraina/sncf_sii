<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c934949280868e989c9a1af28f4ef390e14746e2146c236810225df188d92689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d58830abba7bdab2f3c27654a1a0cace7254f5a938332dd98e1bfe4c30e0648 = $this->env->getExtension("native_profiler");
        $__internal_1d58830abba7bdab2f3c27654a1a0cace7254f5a938332dd98e1bfe4c30e0648->enter($__internal_1d58830abba7bdab2f3c27654a1a0cace7254f5a938332dd98e1bfe4c30e0648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d58830abba7bdab2f3c27654a1a0cace7254f5a938332dd98e1bfe4c30e0648->leave($__internal_1d58830abba7bdab2f3c27654a1a0cace7254f5a938332dd98e1bfe4c30e0648_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_848f96bd0c17d1267421b9d413f429f4ce995367d2395ca3213b9b464ae13041 = $this->env->getExtension("native_profiler");
        $__internal_848f96bd0c17d1267421b9d413f429f4ce995367d2395ca3213b9b464ae13041->enter($__internal_848f96bd0c17d1267421b9d413f429f4ce995367d2395ca3213b9b464ae13041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_848f96bd0c17d1267421b9d413f429f4ce995367d2395ca3213b9b464ae13041->leave($__internal_848f96bd0c17d1267421b9d413f429f4ce995367d2395ca3213b9b464ae13041_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7b0e4f1d3d29e776f1f764874b3e7a3ffea560a8c2e5cc47f04e2a13a1f8a3d = $this->env->getExtension("native_profiler");
        $__internal_a7b0e4f1d3d29e776f1f764874b3e7a3ffea560a8c2e5cc47f04e2a13a1f8a3d->enter($__internal_a7b0e4f1d3d29e776f1f764874b3e7a3ffea560a8c2e5cc47f04e2a13a1f8a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7b0e4f1d3d29e776f1f764874b3e7a3ffea560a8c2e5cc47f04e2a13a1f8a3d->leave($__internal_a7b0e4f1d3d29e776f1f764874b3e7a3ffea560a8c2e5cc47f04e2a13a1f8a3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5371760c1abcf0e939d8975f7ae9f472a4325814e48ad7a40dfe1c07469e8749 = $this->env->getExtension("native_profiler");
        $__internal_5371760c1abcf0e939d8975f7ae9f472a4325814e48ad7a40dfe1c07469e8749->enter($__internal_5371760c1abcf0e939d8975f7ae9f472a4325814e48ad7a40dfe1c07469e8749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5371760c1abcf0e939d8975f7ae9f472a4325814e48ad7a40dfe1c07469e8749->leave($__internal_5371760c1abcf0e939d8975f7ae9f472a4325814e48ad7a40dfe1c07469e8749_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
