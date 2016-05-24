<?php

/* labels/index.html.twig */
class __TwigTemplate_f04cf086dbdc5f8587447ffc7316fdfe8753a52b74a51ce38a8fc7fb1fceb7d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseResponsive2.html.twig", "labels/index.html.twig", 1);
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
        $__internal_5cfc0ae68e15ff2d4cc4083b8fea96d9a6350f9942b030b40b54688dc81108ac = $this->env->getExtension("native_profiler");
        $__internal_5cfc0ae68e15ff2d4cc4083b8fea96d9a6350f9942b030b40b54688dc81108ac->enter($__internal_5cfc0ae68e15ff2d4cc4083b8fea96d9a6350f9942b030b40b54688dc81108ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "labels/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cfc0ae68e15ff2d4cc4083b8fea96d9a6350f9942b030b40b54688dc81108ac->leave($__internal_5cfc0ae68e15ff2d4cc4083b8fea96d9a6350f9942b030b40b54688dc81108ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf3465f32046514d62bc95bffe4c76746402484a61bffda870ed7d7b2655b316 = $this->env->getExtension("native_profiler");
        $__internal_cf3465f32046514d62bc95bffe4c76746402484a61bffda870ed7d7b2655b316->enter($__internal_cf3465f32046514d62bc95bffe4c76746402484a61bffda870ed7d7b2655b316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     
<!-- Two -->
\t\t\t\t\t\t\t<section class=\"wrapper alt style1\" id=\"four\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
                                                                    
                                                                    
\t\t\t\t\t\t\t\t\t<h2 style=\"margin-top:-55px;\" class=\"major\">MYLABEL - Accueil</h2>
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
                          <table class=\"tableau_labels\">
        <thead class=\"tableau_labels_entete\">
            <tr>
                <th>Cycle de vie des Labels distribu&eacute;s</th>
                <th>Version</th>
                <th>
\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Label.png"), "html", null, true);
        echo "\" alt=\"Trusted by SNCF\" width=\"80\">
\t\t\t\t</th>
                <th>Ann&eacute;e 1</th>
                <th>Ann&eacute;e 2</th>
                <th>Ann&eacute;e 3</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 37
            echo "            <tr class=\"tableau_labels_ligne\">
                <td>
\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "nomProjet", array()), "html", null, true);
            echo "<br>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "lienProjet", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "lienProjet", array()), "html", null, true);
            echo "</a>
\t\t\t\t</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "versionProjet", array()), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t  ";
            // line 44
            if (($this->getAttribute($context["label"], "labelProjet", array()) == 1)) {
                echo " 
\t\t\t\t\t<img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star1.png"), "html", null, true);
                echo "\" alt=\"Star 1\" title=\"Star 1\">
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 46
$context["label"], "labelProjet", array()) == 2)) {
                echo " 
\t\t\t\t\t<img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star2.png"), "html", null, true);
                echo "\" alt=\"Star 2\" title=\"Star 2\">
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 48
$context["label"], "labelProjet", array()) == 3)) {
                echo " 
\t\t\t\t\t<img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star3.png"), "html", null, true);
                echo "\" alt=\"Star 3\" title=\"Star 3\">
\t\t\t\t  ";
            } else {
                // line 50
                echo " 
\t\t\t\t    Erreur code label
\t\t\t\t  ";
            }
            // line 52
            echo " 
\t\t\t\t</td>
                <td>";
            // line 54
            if ($this->getAttribute($context["label"], "annee1Label", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["label"], "annee1Label", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 55
            if ($this->getAttribute($context["label"], "annee2Label", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["label"], "annee2Label", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 56
            if ($this->getAttribute($context["label"], "annee3Label", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["label"], "annee3Label", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
 
     
\t\t\t\t\t\t 
                                                                        
                                                                        
                                                                        
                                                                        
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
 
     

  
    
        
";
        
        $__internal_cf3465f32046514d62bc95bffe4c76746402484a61bffda870ed7d7b2655b316->leave($__internal_cf3465f32046514d62bc95bffe4c76746402484a61bffda870ed7d7b2655b316_prof);

    }

    public function getTemplateName()
    {
        return "labels/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 59,  148 => 56,  142 => 55,  136 => 54,  132 => 52,  127 => 50,  122 => 49,  118 => 48,  114 => 47,  110 => 46,  106 => 45,  102 => 44,  97 => 42,  90 => 40,  86 => 39,  82 => 37,  78 => 36,  67 => 28,  55 => 19,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'baseResponsive2.html.twig' %}*/
/*  */
/* */
/* */
/* {% block body %}*/
/*      */
/* <!-- Two -->*/
/* 							<section class="wrapper alt style1" id="four">*/
/* 								<div class="inner">*/
/*                                                                     */
/*                                                                     */
/* 									<h2 style="margin-top:-55px;" class="major">MYLABEL - Accueil</h2>*/
/* 									<p>Phrase de présentation ??</p>*/
/* 									     */
/* */
/*     <ul class="actions">*/
/*                                             <li><a class="bouton menu" href="/my_label/web/app_dev.php/demandes/rechercher">Suivre mes demandes</a></li>*/
/*                                             <li><a class="bouton menu" href="/my_label/web/app_dev.php/demandes/nouvelle_demande">Nouvelle demande de label</a></li>*/
/*                                             <li><a href="{{ path('labels_index') }}" class="bouton">Label</a></li>*/
/*                                     */
/*     </ul>*/
/*                           <table class="tableau_labels">*/
/*         <thead class="tableau_labels_entete">*/
/*             <tr>*/
/*                 <th>Cycle de vie des Labels distribu&eacute;s</th>*/
/*                 <th>Version</th>*/
/*                 <th>*/
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Label.png") }}" alt="Trusted by SNCF" width="80">*/
/* 				</th>*/
/*                 <th>Ann&eacute;e 1</th>*/
/*                 <th>Ann&eacute;e 2</th>*/
/*                 <th>Ann&eacute;e 3</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for label in labels %}*/
/*             <tr class="tableau_labels_ligne">*/
/*                 <td>*/
/* 					{{ label.nomProjet }}<br>*/
/*                     <a href="{{ label.lienProjet }}">{{ label.lienProjet }}</a>*/
/* 				</td>*/
/*                 <td>{{ label.versionProjet }}</td>*/
/*                 <td>*/
/* 				  {% if label.labelProjet==1 %} */
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Star1.png") }}" alt="Star 1" title="Star 1">*/
/* 				  {% elseif label.labelProjet==2 %} */
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Star2.png") }}" alt="Star 2" title="Star 2">*/
/* 				  {% elseif label.labelProjet==3 %} */
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Star3.png") }}" alt="Star 3" title="Star 3">*/
/* 				  {% else %} */
/* 				    Erreur code label*/
/* 				  {% endif %} */
/* 				</td>*/
/*                 <td>{% if label.annee1Label %}{{ label.annee1Label|date('d/m/Y') }}{% endif %}</td>*/
/*                 <td>{% if label.annee2Label %}{{ label.annee2Label|date('d/m/Y') }}{% endif %}</td>*/
/*                 <td>{% if label.annee3Label %}{{ label.annee3Label|date('d/m/Y') }}{% endif %}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
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
/*   */
