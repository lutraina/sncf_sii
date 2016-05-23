<?php

/* :demandes:show.html.twig */
class __TwigTemplate_91f596871f1111c6806fdef99637c88b7a505610a5519bf9070a1a72dd6d0b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":demandes:show.html.twig", 1);
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
        echo "    <h1>Demandes</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedmd</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "dateDmd", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "dateDmd", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "matricule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomprojet</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "nomProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descprojet</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "descProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Caracprojet</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "caracProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datemep</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "dateMEP", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "dateMEP", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Labeldmd</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "labelDmd", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datelabel</th>
                <td>";
        // line 54
        if ($this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "dateLabel", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "dateLabel", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Statutdmd</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "statutDmd", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("demandes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demandes_edit", array("id" => $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":demandes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 73,  151 => 71,  145 => 68,  139 => 65,  129 => 58,  120 => 54,  113 => 50,  104 => 46,  97 => 42,  90 => 38,  83 => 34,  76 => 30,  69 => 26,  62 => 22,  55 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Demandes</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ demande.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datedmd</th>*/
/*                 <td>{% if demande.dateDmd %}{{ demande.dateDmd|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ demande.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ demande.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Matricule</th>*/
/*                 <td>{{ demande.matricule }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Mail</th>*/
/*                 <td>{{ demande.mail }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomprojet</th>*/
/*                 <td>{{ demande.nomProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descprojet</th>*/
/*                 <td>{{ demande.descProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Caracprojet</th>*/
/*                 <td>{{ demande.caracProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datemep</th>*/
/*                 <td>{% if demande.dateMEP %}{{ demande.dateMEP|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Labeldmd</th>*/
/*                 <td>{{ demande.labelDmd }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datelabel</th>*/
/*                 <td>{% if demande.dateLabel %}{{ demande.dateLabel|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Statutdmd</th>*/
/*                 <td>{{ demande.statutDmd }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('demandes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('demandes_edit', { 'id': demande.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
