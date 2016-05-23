<?php

/* :demandes:rechercher.html.twig */
class __TwigTemplate_9cbe792d20a2fbc07907851575fdf8f940ad2dfba8a06df6afeff5389f160135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":demandes:rechercher.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>MYLABEL - SUIVI DE MES DEMANDES</h1>

";
        // line 11
        echo "
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("demandes_rechercher");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t
\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t
\t<div id=\"demandes\">
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "matricule", array()), 'row');
        echo "
\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'row');
        echo "
    \t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    </div>
\t<br/>

\t<input type=\"submit\" value=\"Visualiser la demande\" class=\"bouton\" />

</form>
    
";
        // line 29
        echo "\t
\t
";
    }

    public function getTemplateName()
    {
        return ":demandes:rechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 29,  59 => 19,  55 => 18,  51 => 17,  45 => 14,  38 => 12,  35 => 11,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <h1>MYLABEL - SUIVI DE MES DEMANDES</h1>*/
/* */
/* {#*/
/*     {{ form_start(form, {'attr': {'action' :  "{{ path('demandes_rechercher') }}"} }) }}   */
/* #}*/
/* */
/* <form action="{{ path('demandes_rechercher') }}" method="post" {{ form_enctype(form) }}>*/
/* 	*/
/* 	{{ form_errors(form) }}*/
/* 	*/
/* 	<div id="demandes">*/
/* 		{{ form_row(form.matricule) }}*/
/* 		{{ form_row(form.id) }}*/
/*     	{{ form_rest(form)}}*/
/*     </div>*/
/* 	<br/>*/
/* */
/* 	<input type="submit" value="Visualiser la demande" class="bouton" />*/
/* */
/* </form>*/
/*     */
/* {#	*/
/* 	{{ form_end(form) }}*/
/* #}	*/
/* 	*/
/* {% endblock %}*/
/* */
/* */
