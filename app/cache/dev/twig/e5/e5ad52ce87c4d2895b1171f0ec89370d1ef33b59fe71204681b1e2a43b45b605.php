<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_986a1e50ad8140947744f628f075bcec4abbe1a20319860b3af54f6a63559ea7 extends Twig_Template
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
        $__internal_40fab7aa5960886cca1be6c3c65d09b8405d9b74a9ece1b3ae38eca9052014d0 = $this->env->getExtension("native_profiler");
        $__internal_40fab7aa5960886cca1be6c3c65d09b8405d9b74a9ece1b3ae38eca9052014d0->enter($__internal_40fab7aa5960886cca1be6c3c65d09b8405d9b74a9ece1b3ae38eca9052014d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_40fab7aa5960886cca1be6c3c65d09b8405d9b74a9ece1b3ae38eca9052014d0->leave($__internal_40fab7aa5960886cca1be6c3c65d09b8405d9b74a9ece1b3ae38eca9052014d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
