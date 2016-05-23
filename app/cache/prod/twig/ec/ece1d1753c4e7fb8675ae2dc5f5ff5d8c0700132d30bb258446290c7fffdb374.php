<?php

/* demandes/index.html.twig.bak */
class __TwigTemplate_5c81755312fa443703017fb6f5ced635df242be2b126e8caec39e1bf3d8e3955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "demandes/index.html.twig.bak", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Demandes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Datedmd</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Matricule</th>
                <th>Mail</th>
                <th>Nomprojet</th>
                <th>Descprojet</th>
                <th>Caracprojet</th>
                <th>Datemep</th>
                <th>Labeldmd</th>
                <th>Datelabel</th>
                <th>Statutlabel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) ? $context["demandes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandes_show", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            if ($this->getAttribute($context["demande"], "dateDmd", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "dateDmd", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "matricule", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "mail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "nomProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "descProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "caracProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            if ($this->getAttribute($context["demande"], "dateMEP", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "dateMEP", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
\t\t\t\t  ";
            // line 39
            if (($this->getAttribute($context["demande"], "labelDmd", array()) == 1)) {
                echo " 
                    [Image Star1.png]
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 41
$context["demande"], "labelDmd", array()) == 2)) {
                echo " 
                    [Image Star2.png]
\t\t\t\t  ";
            } elseif (($this->getAttribute(            // line 43
$context["demande"], "labelDmd", array()) == 3)) {
                echo " 
                    [Image Star3.png]
\t\t\t\t  ";
            } else {
                // line 45
                echo " 
\t\t\t\t    Erreur code label
\t\t\t\t  ";
            }
            // line 47
            echo " 
\t\t\t\t</td>
                <td>";
            // line 49
            if ($this->getAttribute($context["demande"], "dateLabel", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demande"], "dateLabel", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "statutDmd", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandes_show", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandes_edit", array("id" => $this->getAttribute($context["demande"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("demandes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "demandes/index.html.twig.bak";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 68,  165 => 63,  153 => 57,  147 => 54,  140 => 50,  134 => 49,  130 => 47,  125 => 45,  119 => 43,  114 => 41,  109 => 39,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  68 => 29,  62 => 28,  59 => 27,  55 => 26,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Demandes list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Datedmd</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Matricule</th>*/
/*                 <th>Mail</th>*/
/*                 <th>Nomprojet</th>*/
/*                 <th>Descprojet</th>*/
/*                 <th>Caracprojet</th>*/
/*                 <th>Datemep</th>*/
/*                 <th>Labeldmd</th>*/
/*                 <th>Datelabel</th>*/
/*                 <th>Statutlabel</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for demande in demandes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('demandes_show', { 'id': demande.id }) }}">{{ demande.id }}</a></td>*/
/*                 <td>{% if demande.dateDmd %}{{ demande.dateDmd|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ demande.nom }}</td>*/
/*                 <td>{{ demande.prenom }}</td>*/
/*                 <td>{{ demande.matricule }}</td>*/
/*                 <td>{{ demande.mail }}</td>*/
/*                 <td>{{ demande.nomProjet }}</td>*/
/*                 <td>{{ demande.descProjet }}</td>*/
/*                 <td>{{ demande.caracProjet }}</td>*/
/*                 <td>{% if demande.dateMEP %}{{ demande.dateMEP|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/* 				  {% if demande.labelDmd==1 %} */
/*                     [Image Star1.png]*/
/* 				  {% elseif demande.labelDmd==2 %} */
/*                     [Image Star2.png]*/
/* 				  {% elseif demande.labelDmd==3 %} */
/*                     [Image Star3.png]*/
/* 				  {% else %} */
/* 				    Erreur code label*/
/* 				  {% endif %} */
/* 				</td>*/
/*                 <td>{% if demande.dateLabel %}{{ demande.dateLabel|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ demande.statutDmd }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('demandes_show', { 'id': demande.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('demandes_edit', { 'id': demande.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('demandes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
