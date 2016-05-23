<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_28220fbb95fd3c26785f0e75d578ad0a27f545e6ba5544e05faed6ec169ca9a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8010ac12f471faaca8678b3b063643ccaa7df5638cd79afcbcbce9b556796622 = $this->env->getExtension("native_profiler");
        $__internal_8010ac12f471faaca8678b3b063643ccaa7df5638cd79afcbcbce9b556796622->enter($__internal_8010ac12f471faaca8678b3b063643ccaa7df5638cd79afcbcbce9b556796622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8010ac12f471faaca8678b3b063643ccaa7df5638cd79afcbcbce9b556796622->leave($__internal_8010ac12f471faaca8678b3b063643ccaa7df5638cd79afcbcbce9b556796622_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2c42faff2b6d417d6d3abcc0ae96b183863c1e14dd4aae733a638b0f335c17e = $this->env->getExtension("native_profiler");
        $__internal_e2c42faff2b6d417d6d3abcc0ae96b183863c1e14dd4aae733a638b0f335c17e->enter($__internal_e2c42faff2b6d417d6d3abcc0ae96b183863c1e14dd4aae733a638b0f335c17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2c42faff2b6d417d6d3abcc0ae96b183863c1e14dd4aae733a638b0f335c17e->leave($__internal_e2c42faff2b6d417d6d3abcc0ae96b183863c1e14dd4aae733a638b0f335c17e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60114371ef9d201acc27a8e0adcc061041b36ca452b5e69a2c3e8fce04b46e91 = $this->env->getExtension("native_profiler");
        $__internal_60114371ef9d201acc27a8e0adcc061041b36ca452b5e69a2c3e8fce04b46e91->enter($__internal_60114371ef9d201acc27a8e0adcc061041b36ca452b5e69a2c3e8fce04b46e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_60114371ef9d201acc27a8e0adcc061041b36ca452b5e69a2c3e8fce04b46e91->leave($__internal_60114371ef9d201acc27a8e0adcc061041b36ca452b5e69a2c3e8fce04b46e91_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9628937db404083019f694db9f187227382f76f70d558621a971f44ea76e1aa0 = $this->env->getExtension("native_profiler");
        $__internal_9628937db404083019f694db9f187227382f76f70d558621a971f44ea76e1aa0->enter($__internal_9628937db404083019f694db9f187227382f76f70d558621a971f44ea76e1aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9628937db404083019f694db9f187227382f76f70d558621a971f44ea76e1aa0->leave($__internal_9628937db404083019f694db9f187227382f76f70d558621a971f44ea76e1aa0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
