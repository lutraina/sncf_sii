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
        $__internal_e1f1eecd363391ab2c21334a78851b760c45e0e043a9e4732cc127f25d8984e6 = $this->env->getExtension("native_profiler");
        $__internal_e1f1eecd363391ab2c21334a78851b760c45e0e043a9e4732cc127f25d8984e6->enter($__internal_e1f1eecd363391ab2c21334a78851b760c45e0e043a9e4732cc127f25d8984e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1f1eecd363391ab2c21334a78851b760c45e0e043a9e4732cc127f25d8984e6->leave($__internal_e1f1eecd363391ab2c21334a78851b760c45e0e043a9e4732cc127f25d8984e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_120ded9d1f10ff2c77e46f678075caa1a21e47dbfff6e5df4d302561b76c7736 = $this->env->getExtension("native_profiler");
        $__internal_120ded9d1f10ff2c77e46f678075caa1a21e47dbfff6e5df4d302561b76c7736->enter($__internal_120ded9d1f10ff2c77e46f678075caa1a21e47dbfff6e5df4d302561b76c7736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_120ded9d1f10ff2c77e46f678075caa1a21e47dbfff6e5df4d302561b76c7736->leave($__internal_120ded9d1f10ff2c77e46f678075caa1a21e47dbfff6e5df4d302561b76c7736_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_158aa03e8d6aa7a5d635def9d093fa6538eba0b40ca347ecb0d6834385c30fab = $this->env->getExtension("native_profiler");
        $__internal_158aa03e8d6aa7a5d635def9d093fa6538eba0b40ca347ecb0d6834385c30fab->enter($__internal_158aa03e8d6aa7a5d635def9d093fa6538eba0b40ca347ecb0d6834385c30fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_158aa03e8d6aa7a5d635def9d093fa6538eba0b40ca347ecb0d6834385c30fab->leave($__internal_158aa03e8d6aa7a5d635def9d093fa6538eba0b40ca347ecb0d6834385c30fab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cef646240c44ac85ae53db09be23cd2947eb9e3e88644bf8a1889c0aa41e6967 = $this->env->getExtension("native_profiler");
        $__internal_cef646240c44ac85ae53db09be23cd2947eb9e3e88644bf8a1889c0aa41e6967->enter($__internal_cef646240c44ac85ae53db09be23cd2947eb9e3e88644bf8a1889c0aa41e6967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cef646240c44ac85ae53db09be23cd2947eb9e3e88644bf8a1889c0aa41e6967->leave($__internal_cef646240c44ac85ae53db09be23cd2947eb9e3e88644bf8a1889c0aa41e6967_prof);

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
