<?php

/* labels/index.html.twig */
class __TwigTemplate_f43d4b630947fb5d19961b36b152ae0b2ea9575ef35c956d8edd8ec8c4fc479d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "labels/index.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>MYLABEL - ACCUEIL</h1>

    <table class=\"tableau_labels\">
        <thead class=\"tableau_labels_entete\">
            <tr>
                <th>Cycle de vie des Labels distribu&eacute;s</th>
                <th>Version</th>
                <th>
\t\t\t\t\t<img src=\"";
        // line 13
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 22
            echo "            <tr class=\"tableau_labels_ligne\">
                <td>
\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "nomProjet", array()), "html", null, true);
            echo "<br>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "lienProjet", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "lienProjet", array()), "html", null, true);
            echo "</a>
\t\t\t\t</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "versionProjet", array()), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t  ";
            // line 29
            if (($this->getAttribute($context["label"], "labelProjet", array()) == 1)) {
                echo " 
\t\t\t\t\t<img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star1.png"), "html", null, true);
                echo "\" alt=\"Star 1\" title=\"Star 1\">
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 31
$context["label"], "labelProjet", array()) == 2)) {
                echo " 
\t\t\t\t\t<img src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star2.png"), "html", null, true);
                echo "\" alt=\"Star 2\" title=\"Star 2\">
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 33
$context["label"], "labelProjet", array()) == 3)) {
                echo " 
\t\t\t\t\t<img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/MyLabelBundle/images/Star3.png"), "html", null, true);
                echo "\" alt=\"Star 3\" title=\"Star 3\">
\t\t\t\t  ";
            } else {
                // line 35
                echo " 
\t\t\t\t    Erreur code label
\t\t\t\t  ";
            }
            // line 37
            echo " 
\t\t\t\t</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["label"], "annee1Label", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["label"], "annee1Label", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["label"], "annee2Label", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["label"], "annee2Label", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 41
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
        // line 44
        echo "        </tbody>
    </table>
";
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
        return array (  133 => 44,  122 => 41,  116 => 40,  110 => 39,  106 => 37,  101 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  71 => 27,  64 => 25,  60 => 24,  56 => 22,  52 => 21,  41 => 13,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  */
/* */
/* {% block body %}*/
/*     <h1>MYLABEL - ACCUEIL</h1>*/
/* */
/*     <table class="tableau_labels">*/
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
/* {% endblock %}*/
/* */
