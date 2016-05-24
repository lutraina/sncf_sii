<?php

/* demandes/new.html.twig */
class __TwigTemplate_5a1088686b5dbaa81bafc15a641a21d1298fc27311b87698d927d68bc49f654b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseResponsive2.html.twig", "demandes/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseResponsive2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bb191b147fff104218270ff3bd4449b20f64eb3dd659df58ff95d85a5b610c9 = $this->env->getExtension("native_profiler");
        $__internal_0bb191b147fff104218270ff3bd4449b20f64eb3dd659df58ff95d85a5b610c9->enter($__internal_0bb191b147fff104218270ff3bd4449b20f64eb3dd659df58ff95d85a5b610c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bb191b147fff104218270ff3bd4449b20f64eb3dd659df58ff95d85a5b610c9->leave($__internal_0bb191b147fff104218270ff3bd4449b20f64eb3dd659df58ff95d85a5b610c9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_37ce2ae23ce720a4d48c92ad1e96ba7f2a6ef08ff6d6543e00fa194dda6e88d3 = $this->env->getExtension("native_profiler");
        $__internal_37ce2ae23ce720a4d48c92ad1e96ba7f2a6ef08ff6d6543e00fa194dda6e88d3->enter($__internal_37ce2ae23ce720a4d48c92ad1e96ba7f2a6ef08ff6d6543e00fa194dda6e88d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "     
<!-- Two -->
\t\t\t\t\t\t\t<section class=\"wrapper alt style1\" id=\"four\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
                                                                    
                                                                    
\t\t\t\t\t\t\t\t\t<h2 style=\"margin-top:-55px;\" class=\"major\">MYLABEL - Nouvelle demande de label</h2>
\t\t\t\t\t\t\t\t\t<p>Phrase de présentation ??</p>
\t\t\t\t\t\t\t\t\t     

    <ul class=\"actions\">
                                            <li><a class=\"bouton menu\" href=\"/my_label/web/app_dev.php/demandes/rechercher\">Suivre mes demandes</a></li>
                                            <li><a class=\"bouton menu\" href=\"/my_label/web/app_dev.php/demandes/nouvelle_demande\">Nouvelle demande de label</a></li>
                                            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("labels_index");
        echo "\" class=\"bouton\">Label</a></li>
                                    
    </ul>
                                    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t
\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t
\t<div id=\"\">
\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'row');
        echo "
\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'row');
        echo "
\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomProjet", array()), 'row');
        echo "
\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descProjet", array()), 'row');
        echo "
\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "caracProjet", array()), 'row');
        echo "
\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateMEP", array()), 'row');
        echo "

";
        // line 38
        echo "
\t\t<div>
\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "labelDmd", array()), 'label');
        echo " 
\t\t\t
\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "labelDmd", array()), 'errors');
        echo "
\t\t\t
\t\t\t<div> 

\t\t\t
\t\t</div>
\t
\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateLabel", array()), 'row');
        echo "
\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
\t<br/>

\t<input type=\"submit\" value=\"Envoyer\" class=\"bouton\" />
    ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

 
     
\t\t\t\t\t\t 
                                                                        
                                                                        
                                                                        
                                                                        
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
 
     

  
    
        
";
        
        $__internal_37ce2ae23ce720a4d48c92ad1e96ba7f2a6ef08ff6d6543e00fa194dda6e88d3->leave($__internal_37ce2ae23ce720a4d48c92ad1e96ba7f2a6ef08ff6d6543e00fa194dda6e88d3_prof);

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
        return array (  136 => 55,  128 => 50,  124 => 49,  114 => 42,  109 => 40,  105 => 38,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  66 => 25,  61 => 23,  55 => 20,  40 => 7,  34 => 6,  11 => 1,);
    }
}
/* {% extends 'baseResponsive2.html.twig' %}*/
/* */
/* */
/* */
/* */
/* {% block body %}*/
/*      */
/* <!-- Two -->*/
/* 							<section class="wrapper alt style1" id="four">*/
/* 								<div class="inner">*/
/*                                                                     */
/*                                                                     */
/* 									<h2 style="margin-top:-55px;" class="major">MYLABEL - Nouvelle demande de label</h2>*/
/* 									<p>Phrase de présentation ??</p>*/
/* 									     */
/* */
/*     <ul class="actions">*/
/*                                             <li><a class="bouton menu" href="/my_label/web/app_dev.php/demandes/rechercher">Suivre mes demandes</a></li>*/
/*                                             <li><a class="bouton menu" href="/my_label/web/app_dev.php/demandes/nouvelle_demande">Nouvelle demande de label</a></li>*/
/*                                             <li><a href="{{ path('labels_index') }}" class="bouton">Label</a></li>*/
/*                                     */
/*     </ul>*/
/*                                     {{ form_start(form) }}*/
/* 	*/
/* 	{{ form_errors(form) }}*/
/* 	*/
/* 	<div id="">*/
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
/* 			<div> */
/* */
/* 			*/
/* 		</div>*/
/* 	*/
/* 	{{ form_row(form.dateLabel) }}*/
/* 	{{ form_rest(form)}}*/
/*     </div>*/
/* 	<br/>*/
/* */
/* 	<input type="submit" value="Envoyer" class="bouton" />*/
/*     {{ form_end(form) }}*/
/* */
/*  */
/*      */
/* 						 */
/*                                                                         */
/*                                                                         */
/*                                                                         */
/*                                                                         */
/* 								</div>*/
/* 							</section>*/
/*  */
/*      */
/* */
/*   */
/*     */
/*         */
/* {% endblock %}*/
/* */
/*    */
/*  */
/* */
/*   */
