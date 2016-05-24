<?php

/* demandes/rechercher.html.twig */
class __TwigTemplate_f89a0369becd8e5b036a3945724f4034666709faefdfdcd9d82e81d1f044fc3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseResponsive2.html.twig", "demandes/rechercher.html.twig", 1);
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
        $__internal_ab0e59fa52c03b744e8fadd10eaff2781e3d35c73a2bdde52d64a1ac13cfd7eb = $this->env->getExtension("native_profiler");
        $__internal_ab0e59fa52c03b744e8fadd10eaff2781e3d35c73a2bdde52d64a1ac13cfd7eb->enter($__internal_ab0e59fa52c03b744e8fadd10eaff2781e3d35c73a2bdde52d64a1ac13cfd7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandes/rechercher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab0e59fa52c03b744e8fadd10eaff2781e3d35c73a2bdde52d64a1ac13cfd7eb->leave($__internal_ab0e59fa52c03b744e8fadd10eaff2781e3d35c73a2bdde52d64a1ac13cfd7eb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ef63439003ae06e9ac86e0ebf8ed83989b61ab279f2c88519edf9a27c902798 = $this->env->getExtension("native_profiler");
        $__internal_9ef63439003ae06e9ac86e0ebf8ed83989b61ab279f2c88519edf9a27c902798->enter($__internal_9ef63439003ae06e9ac86e0ebf8ed83989b61ab279f2c88519edf9a27c902798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "     
<!-- Two --><section class=\"wrapper alt style1\" id=\"four\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
                                                                    
                                                                    
\t\t\t\t\t\t\t\t\t<h2 style=\"margin-top:-55px;\" class=\"major\">MYLABEL - SUIVI DE MES DEMANDES</h2>
\t\t\t\t\t\t\t\t\t<p>Phrase de présentation ??</p>
\t\t\t\t\t\t\t\t\t     

    <ul class=\"actions\">
                                            <li><a class=\"bouton menu\" href=\"/my_label/web/app_dev.php/demandes/rechercher\">Suivre mes demandes</a></li>
                                            <li><a class=\"bouton menu\" href=\"/my_label/web/app_dev.php/demandes/nouvelle_demande\">Nouvelle demande de label</a></li>
                                            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("labels_index");
        echo "\" class=\"bouton\">Label</a></li>
                                    
    </ul>
                                      ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "   


    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t
\t<div id=\"recherche\">
\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'row');
        echo "
\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'row');
        echo "
    \t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>

\t<input type=\"submit\" value=\"Visualiser ma demande\" class=\"bouton\" />
  
\t";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

 
     
\t\t\t\t\t\t 
                                                                        
                                                                        
                                                                        
                                                                        
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
 
           
                                            
        
";
        
        $__internal_9ef63439003ae06e9ac86e0ebf8ed83989b61ab279f2c88519edf9a27c902798->leave($__internal_9ef63439003ae06e9ac86e0ebf8ed83989b61ab279f2c88519edf9a27c902798_prof);

    }

    public function getTemplateName()
    {
        return "demandes/rechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 35,  80 => 30,  76 => 29,  72 => 28,  66 => 25,  60 => 22,  54 => 19,  40 => 7,  34 => 6,  11 => 1,);
    }
}
/* {% extends 'baseResponsive2.html.twig' %}*/
/* */
/* */
/* */
/* */
/* {% block body %}*/
/*      */
/* <!-- Two --><section class="wrapper alt style1" id="four">*/
/* 								<div class="inner">*/
/*                                                                     */
/*                                                                     */
/* 									<h2 style="margin-top:-55px;" class="major">MYLABEL - SUIVI DE MES DEMANDES</h2>*/
/* 									<p>Phrase de présentation ??</p>*/
/* 									     */
/* */
/*     <ul class="actions">*/
/*                                             <li><a class="bouton menu" href="/my_label/web/app_dev.php/demandes/rechercher">Suivre mes demandes</a></li>*/
/*                                             <li><a class="bouton menu" href="/my_label/web/app_dev.php/demandes/nouvelle_demande">Nouvelle demande de label</a></li>*/
/*                                             <li><a href="{{ path('labels_index') }}" class="bouton">Label</a></li>*/
/*                                     */
/*     </ul>*/
/*                                       {{ form_start(form) }}   */
/* */
/* */
/*     {{ form_errors(form) }}*/
/* 	*/
/* 	<div id="recherche">*/
/* 		{{ form_row(form.matricule) }}*/
/* 		{{ form_row(form.id) }}*/
/*     	{{ form_rest(form)}}*/
/*     </div>*/
/* */
/* 	<input type="submit" value="Visualiser ma demande" class="bouton" />*/
/*   */
/* 	{{ form_end(form) }}*/
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
/*            */
/*                                             */
/*         */
/* {% endblock %}*/
/* */
/*    */
/*  */
/* */
/*   */
/* */
/*  */
/*    */
/*  */
/* */
/*   */
/* */
/* */
/*  */
/* */
