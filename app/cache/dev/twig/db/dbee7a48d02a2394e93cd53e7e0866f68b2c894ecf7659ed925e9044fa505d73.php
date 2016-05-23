<?php

/* demandes/new.html.twig */
class __TwigTemplate_5a1088686b5dbaa81bafc15a641a21d1298fc27311b87698d927d68bc49f654b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "demandes/new.html.twig", 1);
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
        $__internal_aeff8acf0dc74e8cd66cdd368e25e2b1fa82159c32b25725a63a6ca23369e026 = $this->env->getExtension("native_profiler");
        $__internal_aeff8acf0dc74e8cd66cdd368e25e2b1fa82159c32b25725a63a6ca23369e026->enter($__internal_aeff8acf0dc74e8cd66cdd368e25e2b1fa82159c32b25725a63a6ca23369e026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeff8acf0dc74e8cd66cdd368e25e2b1fa82159c32b25725a63a6ca23369e026->leave($__internal_aeff8acf0dc74e8cd66cdd368e25e2b1fa82159c32b25725a63a6ca23369e026_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8070a1ae1905f97cb0312205ac1dfc9d50e76921dc9221c64abf69d0f2631b7 = $this->env->getExtension("native_profiler");
        $__internal_d8070a1ae1905f97cb0312205ac1dfc9d50e76921dc9221c64abf69d0f2631b7->enter($__internal_d8070a1ae1905f97cb0312205ac1dfc9d50e76921dc9221c64abf69d0f2631b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>MYLABEL - NOUVELLE DEMANDE DE LABEL</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t
\t<div id=\"demandes\">
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'row');
        echo "
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'row');
        echo "
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'row');
        echo "
\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descProjet", array()), 'row');
        echo "
\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caracProjet", array()), 'row');
        echo "
\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateMEP", array()), 'row');
        echo "

";
        // line 23
        echo "
\t\t<div>
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "labelDmd", array()), 'label');
        echo " 
\t\t\t
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "labelDmd", array()), 'errors');
        echo "
\t\t\t
\t\t\t<div>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "labelDmd", array()), 0, array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star1.png"), "html", null, true);
        echo "\" alt=\"Star 1\" title=\"Star 1\">
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "labelDmd", array()), 1, array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star2.png"), "html", null, true);
        echo "\" alt=\"Star 2\" title=\"Star 2\">
\t\t\t\t</div>\t
\t\t\t\t<div>
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "labelDmd", array()), 2, array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star3.png"), "html", null, true);
        echo "\" alt=\"Star 3\" title=\"Star 3\">
\t\t\t\t</div>\t
\t\t\t</div>

\t\t\t
\t\t</div>
\t
\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateLabel", array()), 'row');
        echo "
\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
\t<br/>

\t<input type=\"submit\" value=\"Envoyer la demande\" class=\"bouton\" />
    ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <div id=\"menu\">
        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("labels_index");
        echo "\" class=\"bouton\">Label</a>
        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("demandes_rechercher");
        echo "\" class=\"bouton\">Suivre mes demandes</a>
        <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("demandes_new");
        echo "\" class=\"bouton\">Nouvelle demande de label</a>
    </div>
    
";
        
        $__internal_d8070a1ae1905f97cb0312205ac1dfc9d50e76921dc9221c64abf69d0f2631b7->leave($__internal_d8070a1ae1905f97cb0312205ac1dfc9d50e76921dc9221c64abf69d0f2631b7_prof);

    }

    public function getTemplateName()
    {
        return "demandes/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 58,  160 => 57,  156 => 56,  150 => 53,  142 => 48,  138 => 47,  128 => 40,  124 => 39,  118 => 36,  114 => 35,  108 => 32,  104 => 31,  97 => 27,  92 => 25,  88 => 23,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  49 => 10,  44 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <h1>MYLABEL - NOUVELLE DEMANDE DE LABEL</h1>*/
/* */
/*     {{ form_start(form) }}*/
/* 	*/
/* 	{{ form_errors(form) }}*/
/* 	*/
/* 	<div id="demandes">*/
/* 		{{ form_row(form.nom) }}*/
/* 		{{ form_row(form.prenom) }}*/
/* 		{{ form_row(form.matricule) }}*/
/* 		{{ form_row(form.mail) }}*/
/* 		{{ form_row(form.nomProjet) }}*/
/* 		{{ form_row(form.descProjet) }}*/
/* 		{{ form_row(form.caracProjet) }}*/
/* 		{{ form_row(form.dateMEP) }}*/
/* */
/* {#	{{ form_row(form.labelDmd) }}  #}*/
/* */
/* 		<div>*/
/* 			{{ form_label(form.labelDmd)}} */
/* 			*/
/* 			{{ form_errors(form.labelDmd) }}*/
/* 			*/
/* 			<div>*/
/* 				<div>*/
/* 					{{ form_widget(form.labelDmd[0], {'attr': {'class': 'form-control'}}) }}*/
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Star1.png") }}" alt="Star 1" title="Star 1">*/
/* 				</div>*/
/* 				<div>*/
/* 					{{ form_widget(form.labelDmd[1], {'attr': {'class': 'form-control'}}) }}*/
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Star2.png") }}" alt="Star 2" title="Star 2">*/
/* 				</div>	*/
/* 				<div>*/
/* 					{{ form_widget(form.labelDmd[2], {'attr': {'class': 'form-control'}}) }}*/
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Star3.png") }}" alt="Star 3" title="Star 3">*/
/* 				</div>	*/
/* 			</div>*/
/* */
/* 			*/
/* 		</div>*/
/* 	*/
/* 	{{ form_row(form.dateLabel) }}*/
/* 	{{ form_rest(form)}}*/
/*     </div>*/
/* 	<br/>*/
/* */
/* 	<input type="submit" value="Envoyer la demande" class="bouton" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <div id="menu">*/
/*         <a href="{{ path('labels_index') }}" class="bouton">Label</a>*/
/*         <a href="{{ path('demandes_rechercher') }}" class="bouton">Suivre mes demandes</a>*/
/*         <a href="{{ path('demandes_new') }}" class="bouton">Nouvelle demande de label</a>*/
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/*   */
