<?php

/* demandes/index.html.twig */
class __TwigTemplate_18292337034720891c2c5aa495f07fc0f3ff248573228ae818290b4442b623b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "demandes/index.html.twig", 1);
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
        $__internal_8b801d5f5218c15b13b6e59bf9023e1792207acacce455da41285099cf859630 = $this->env->getExtension("native_profiler");
        $__internal_8b801d5f5218c15b13b6e59bf9023e1792207acacce455da41285099cf859630->enter($__internal_8b801d5f5218c15b13b6e59bf9023e1792207acacce455da41285099cf859630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b801d5f5218c15b13b6e59bf9023e1792207acacce455da41285099cf859630->leave($__internal_8b801d5f5218c15b13b6e59bf9023e1792207acacce455da41285099cf859630_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e5dc76b0aa906359332cdbf9d1b651bd0512d3e49560335393e37fbf6fd96df = $this->env->getExtension("native_profiler");
        $__internal_7e5dc76b0aa906359332cdbf9d1b651bd0512d3e49560335393e37fbf6fd96df->enter($__internal_7e5dc76b0aa906359332cdbf9d1b651bd0512d3e49560335393e37fbf6fd96df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Demandes list</h1>

    <table class=\"tableau_demandes\">
        <thead class=\"tableau_demandes_entete\">
            <tr>
                <th colspan=5>Demande On Progress</th>
            </tr>
        </thead>
        <thead class=\"tableau_demandes_entete\">
            <tr>
                <th>N&deg; demande</th>
                <th>Date de la demande</th>
                <th>P&eacute;rim&egrave;tre</th>
                <th>Niveau de label</th>
                <th>Etat de prise en compte</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) ? $context["demandes"] : $this->getContext($context, "demandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 25
            echo "            <tr class=\"tableau_demandes_ligne\">
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandes_show", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            if ($this->getAttribute($context["demande"], "dateDmd", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "dateDmd", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "nomProjet", array()), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t  ";
            // line 30
            if (($this->getAttribute($context["demande"], "labelDmd", array()) == 1)) {
                echo " 
\t\t\t\t\t<img src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star1.png"), "html", null, true);
                echo "\" alt=\"Star 1\" title=\"Star 1\">
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 32
$context["demande"], "labelDmd", array()) == 2)) {
                echo " 
\t\t\t\t\t<img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star2.png"), "html", null, true);
                echo "\" alt=\"Star 2\" title=\"Star 2\">
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 34
$context["demande"], "labelDmd", array()) == 3)) {
                echo " 
\t\t\t\t\t<img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star3.png"), "html", null, true);
                echo "\" alt=\"Star 3\" title=\"Star 3\">
\t\t\t\t  ";
            } else {
                // line 36
                echo " 
\t\t\t\t    Erreur code label
\t\t\t\t  ";
            }
            // line 38
            echo " 
\t\t\t\t</td>
                <td>
\t\t\t\t  ";
            // line 41
            if (($this->getAttribute($context["demande"], "statutDmd", array()) == 1)) {
                echo " 
                    En attente
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 43
$context["demande"], "statutDmd", array()) == 2)) {
                echo " 
                    Planifi&eacute;
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 45
$context["demande"], "statutDmd", array()) == 3)) {
                echo " 
                    Traité
\t\t\t\t  ";
            } else {
                // line 47
                echo " 
\t\t\t\t    Erreur code statut
\t\t\t\t  ";
            }
            // line 49
            echo " 
\t\t\t\t</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

 
    <br>        
    <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("demandes_rechercher");
        echo "\" class=\"bouton menu\">Suivre mes demandes</a>
    <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("demandes_new");
        echo "\" class=\"bouton menu\">Nouvelle demande de label</a>

";
        
        $__internal_7e5dc76b0aa906359332cdbf9d1b651bd0512d3e49560335393e37fbf6fd96df->leave($__internal_7e5dc76b0aa906359332cdbf9d1b651bd0512d3e49560335393e37fbf6fd96df_prof);

    }

    public function getTemplateName()
    {
        return "demandes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 59,  156 => 58,  149 => 53,  140 => 49,  135 => 47,  129 => 45,  124 => 43,  119 => 41,  114 => 38,  109 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  79 => 28,  73 => 27,  67 => 26,  64 => 25,  60 => 24,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <h1>Demandes list</h1>*/
/* */
/*     <table class="tableau_demandes">*/
/*         <thead class="tableau_demandes_entete">*/
/*             <tr>*/
/*                 <th colspan=5>Demande On Progress</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <thead class="tableau_demandes_entete">*/
/*             <tr>*/
/*                 <th>N&deg; demande</th>*/
/*                 <th>Date de la demande</th>*/
/*                 <th>P&eacute;rim&egrave;tre</th>*/
/*                 <th>Niveau de label</th>*/
/*                 <th>Etat de prise en compte</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for demande in demandes %}*/
/*             <tr class="tableau_demandes_ligne">*/
/*                 <td><a href="{{ path('demandes_show', { 'id': demande.id }) }}">{{ demande.id }}</a></td>*/
/*                 <td>{% if demande.dateDmd %}{{ demande.dateDmd|date('d/m/Y') }}{% endif %}</td>*/
/*                 <td>{{ demande.nomProjet }}</td>*/
/*                 <td>*/
/* 				  {% if demande.labelDmd==1 %} */
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Star1.png") }}" alt="Star 1" title="Star 1">*/
/* 				  {% elseif demande.labelDmd==2 %} */
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Star2.png") }}" alt="Star 2" title="Star 2">*/
/* 				  {% elseif demande.labelDmd==3 %} */
/* 					<img src="{{ asset("bundles/MyLabelBundle/images/Star3.png") }}" alt="Star 3" title="Star 3">*/
/* 				  {% else %} */
/* 				    Erreur code label*/
/* 				  {% endif %} */
/* 				</td>*/
/*                 <td>*/
/* 				  {% if demande.statutDmd==1 %} */
/*                     En attente*/
/* 				  {% elseif demande.statutDmd==2 %} */
/*                     Planifi&eacute;*/
/* 				  {% elseif demande.statutDmd==3 %} */
/*                     Traité*/
/* 				  {% else %} */
/* 				    Erreur code statut*/
/* 				  {% endif %} */
/* 				</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*  */
/*     <br>        */
/*     <a href="{{ path('demandes_rechercher') }}" class="bouton menu">Suivre mes demandes</a>*/
/*     <a href="{{ path('demandes_new') }}" class="bouton menu">Nouvelle demande de label</a>*/
/* */
/* {% endblock %}*/
/* */
