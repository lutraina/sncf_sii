<?php

/* labels/index.html.twig.bak */
class __TwigTemplate_1e7f3a567564800f0578e38b8794d922889f00ed2487b1ff8ad67c21dc3b9e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "labels/index.html.twig.bak", 1);
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
        echo "    <h1>Labels list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomprojet</th>
                <th>Lienprojet</th>
                <th>Versionprojet</th>
                <th>Labelprojet</th>
                <th>Annee1label</th>
                <th>Annee2label</th>
                <th>Annee3label</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("labels_show", array("id" => $this->getAttribute($context["label"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "nomProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "lienProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "versionProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["label"], "labelProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["label"], "annee1Label", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["label"], "annee1Label", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["label"], "annee2Label", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["label"], "annee2Label", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["label"], "annee3Label", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["label"], "annee3Label", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("labels_show", array("id" => $this->getAttribute($context["label"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("labels_edit", array("id" => $this->getAttribute($context["label"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("labels_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "labels/index.html.twig.bak";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  118 => 43,  106 => 37,  100 => 34,  91 => 30,  85 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  57 => 23,  54 => 22,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Labels list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nomprojet</th>*/
/*                 <th>Lienprojet</th>*/
/*                 <th>Versionprojet</th>*/
/*                 <th>Labelprojet</th>*/
/*                 <th>Annee1label</th>*/
/*                 <th>Annee2label</th>*/
/*                 <th>Annee3label</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for label in labels %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('labels_show', { 'id': label.id }) }}">{{ label.id }}</a></td>*/
/*                 <td>{{ label.nomProjet }}</td>*/
/*                 <td>{{ label.lienProjet }}</td>*/
/*                 <td>{{ label.versionProjet }}</td>*/
/*                 <td>{{ label.labelProjet }}</td>*/
/*                 <td>{% if label.annee1Label %}{{ label.annee1Label|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if label.annee2Label %}{{ label.annee2Label|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if label.annee3Label %}{{ label.annee3Label|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('labels_show', { 'id': label.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('labels_edit', { 'id': label.id }) }}">edit</a>*/
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
/*             <a href="{{ path('labels_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
