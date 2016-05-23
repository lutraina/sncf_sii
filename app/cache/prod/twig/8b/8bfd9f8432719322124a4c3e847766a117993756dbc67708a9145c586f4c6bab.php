<?php

/* :labels:show.html.twig */
class __TwigTemplate_1d2b4cb2bf81d6348e979877f429d0afc7f30b5f2c9d4d5899ad58d98d764607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":labels:show.html.twig", 1);
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
        echo "    <h1>Labels</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomprojet</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "nomProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lienprojet</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "lienProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Versionprojet</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "versionProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Labelprojet</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "labelProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Annee1label</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["label"]) ? $context["label"] : null), "annee1Label", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "annee1Label", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Annee2label</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["label"]) ? $context["label"] : null), "annee2Label", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "annee2Label", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Annee3label</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["label"]) ? $context["label"] : null), "annee3Label", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "annee3Label", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("labels_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("labels_edit", array("id" => $this->getAttribute((isset($context["label"]) ? $context["label"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":labels:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 53,  116 => 51,  110 => 48,  104 => 45,  92 => 38,  83 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Labels</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ label.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomprojet</th>*/
/*                 <td>{{ label.nomProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lienprojet</th>*/
/*                 <td>{{ label.lienProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Versionprojet</th>*/
/*                 <td>{{ label.versionProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Labelprojet</th>*/
/*                 <td>{{ label.labelProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Annee1label</th>*/
/*                 <td>{% if label.annee1Label %}{{ label.annee1Label|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Annee2label</th>*/
/*                 <td>{% if label.annee2Label %}{{ label.annee2Label|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Annee3label</th>*/
/*                 <td>{% if label.annee3Label %}{{ label.annee3Label|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('labels_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('labels_edit', { 'id': label.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
