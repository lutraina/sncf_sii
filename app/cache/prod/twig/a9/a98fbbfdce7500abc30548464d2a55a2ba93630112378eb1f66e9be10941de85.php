<?php

/* demandes/new.html.twig */
class __TwigTemplate_8fcb576522378edb205cc8470b03fdcda4b93e8e2420620d35e3b386a9fe49da extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>MYLABEL - NOUVELLE DEMANDE DE LABEL</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t
\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t
\t<div id=\"demandes\">
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'row');
        echo "
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'row');
        echo "
\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "matricule", array()), 'row');
        echo "
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mail", array()), 'row');
        echo "
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomProjet", array()), 'row');
        echo "
\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descProjet", array()), 'row');
        echo "
\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "caracProjet", array()), 'row');
        echo "
\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateMEP", array()), 'row');
        echo "

";
        // line 23
        echo "
\t\t<div>
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelDmd", array()), 'label');
        echo " 
\t\t\t
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelDmd", array()), 'errors');
        echo "
\t\t\t
\t\t\t<div>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelDmd", array()), 0, array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star1.png"), "html", null, true);
        echo "\" alt=\"Star 1\" title=\"Star 1\">
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelDmd", array()), 1, array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star2.png"), "html", null, true);
        echo "\" alt=\"Star 2\" title=\"Star 2\">
\t\t\t\t</div>\t
\t\t\t\t<div>
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelDmd", array()), 2, array(), "array"), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateLabel", array()), 'row');
        echo "
\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    </div>
\t<br/>

\t<input type=\"submit\" value=\"Envoyer la demande\" class=\"bouton\" />
    ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("demandes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
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
        return array (  148 => 57,  141 => 53,  133 => 48,  129 => 47,  119 => 40,  115 => 39,  109 => 36,  105 => 35,  99 => 32,  95 => 31,  88 => 27,  83 => 25,  79 => 23,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  40 => 10,  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
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
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('demandes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/*   */
