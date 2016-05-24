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
        $__internal_21459e4de5697c0a103f7d58b11738d12d4d4e0bb9b38e40f6ccf3d9c588b712 = $this->env->getExtension("native_profiler");
        $__internal_21459e4de5697c0a103f7d58b11738d12d4d4e0bb9b38e40f6ccf3d9c588b712->enter($__internal_21459e4de5697c0a103f7d58b11738d12d4d4e0bb9b38e40f6ccf3d9c588b712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21459e4de5697c0a103f7d58b11738d12d4d4e0bb9b38e40f6ccf3d9c588b712->leave($__internal_21459e4de5697c0a103f7d58b11738d12d4d4e0bb9b38e40f6ccf3d9c588b712_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_527ff445b1b9d2222128c360e2dc7a40e666938311f3e7b11498f1b98f0dd467 = $this->env->getExtension("native_profiler");
        $__internal_527ff445b1b9d2222128c360e2dc7a40e666938311f3e7b11498f1b98f0dd467->enter($__internal_527ff445b1b9d2222128c360e2dc7a40e666938311f3e7b11498f1b98f0dd467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_527ff445b1b9d2222128c360e2dc7a40e666938311f3e7b11498f1b98f0dd467->leave($__internal_527ff445b1b9d2222128c360e2dc7a40e666938311f3e7b11498f1b98f0dd467_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_362c00191fa9e224d64be54cc170ac5e15f14834efa138d211045df392229946 = $this->env->getExtension("native_profiler");
        $__internal_362c00191fa9e224d64be54cc170ac5e15f14834efa138d211045df392229946->enter($__internal_362c00191fa9e224d64be54cc170ac5e15f14834efa138d211045df392229946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_362c00191fa9e224d64be54cc170ac5e15f14834efa138d211045df392229946->leave($__internal_362c00191fa9e224d64be54cc170ac5e15f14834efa138d211045df392229946_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c57a382f5dbfbfe7f22a628e48a7a791cf87eacb827d949a84460558ff5f41c = $this->env->getExtension("native_profiler");
        $__internal_9c57a382f5dbfbfe7f22a628e48a7a791cf87eacb827d949a84460558ff5f41c->enter($__internal_9c57a382f5dbfbfe7f22a628e48a7a791cf87eacb827d949a84460558ff5f41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9c57a382f5dbfbfe7f22a628e48a7a791cf87eacb827d949a84460558ff5f41c->leave($__internal_9c57a382f5dbfbfe7f22a628e48a7a791cf87eacb827d949a84460558ff5f41c_prof);

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
