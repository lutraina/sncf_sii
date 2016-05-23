<?php

/* base.html.twig */
class __TwigTemplate_f8fc79580cea71a681b83c4a6b8da20e8ca9d99900d88d7e50c7b2aa1b7fa67c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f0a8421e5c25108924a022a70c97fe19df7b564f015fc1a63330f812f92806f = $this->env->getExtension("native_profiler");
        $__internal_8f0a8421e5c25108924a022a70c97fe19df7b564f015fc1a63330f812f92806f->enter($__internal_8f0a8421e5c25108924a022a70c97fe19df7b564f015fc1a63330f812f92806f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo " 
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_8f0a8421e5c25108924a022a70c97fe19df7b564f015fc1a63330f812f92806f->leave($__internal_8f0a8421e5c25108924a022a70c97fe19df7b564f015fc1a63330f812f92806f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_078c078c528196ae2366bf8b4db98910a278abee8c95e40eab9fffbd55e3e89a = $this->env->getExtension("native_profiler");
        $__internal_078c078c528196ae2366bf8b4db98910a278abee8c95e40eab9fffbd55e3e89a->enter($__internal_078c078c528196ae2366bf8b4db98910a278abee8c95e40eab9fffbd55e3e89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_078c078c528196ae2366bf8b4db98910a278abee8c95e40eab9fffbd55e3e89a->leave($__internal_078c078c528196ae2366bf8b4db98910a278abee8c95e40eab9fffbd55e3e89a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29fec82a82b5eac8464cee047d5d9765163b6f129ab0726b453ea16bd160ae31 = $this->env->getExtension("native_profiler");
        $__internal_29fec82a82b5eac8464cee047d5d9765163b6f129ab0726b453ea16bd160ae31->enter($__internal_29fec82a82b5eac8464cee047d5d9765163b6f129ab0726b453ea16bd160ae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "081d3f1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_081d3f1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/081d3f1_main_1.css");
            // line 12
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t";
        } else {
            // asset "081d3f1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_081d3f1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/081d3f1.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 14
        echo "\t\t";
        
        $__internal_29fec82a82b5eac8464cee047d5d9765163b6f129ab0726b453ea16bd160ae31->leave($__internal_29fec82a82b5eac8464cee047d5d9765163b6f129ab0726b453ea16bd160ae31_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b77ea9373f311a6332ba2f7a7d01b0624860cfd4ab0a9caa289bd5a18936a11 = $this->env->getExtension("native_profiler");
        $__internal_0b77ea9373f311a6332ba2f7a7d01b0624860cfd4ab0a9caa289bd5a18936a11->enter($__internal_0b77ea9373f311a6332ba2f7a7d01b0624860cfd4ab0a9caa289bd5a18936a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b77ea9373f311a6332ba2f7a7d01b0624860cfd4ab0a9caa289bd5a18936a11->leave($__internal_0b77ea9373f311a6332ba2f7a7d01b0624860cfd4ab0a9caa289bd5a18936a11_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_440960016d5e26e89e3837afeaf9f79798e6801e2b010e0f414bc2be5e0e1e73 = $this->env->getExtension("native_profiler");
        $__internal_440960016d5e26e89e3837afeaf9f79798e6801e2b010e0f414bc2be5e0e1e73->enter($__internal_440960016d5e26e89e3837afeaf9f79798e6801e2b010e0f414bc2be5e0e1e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_440960016d5e26e89e3837afeaf9f79798e6801e2b010e0f414bc2be5e0e1e73->leave($__internal_440960016d5e26e89e3837afeaf9f79798e6801e2b010e0f414bc2be5e0e1e73_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 20,  105 => 19,  98 => 14,  84 => 12,  79 => 7,  73 => 6,  61 => 5,  52 => 21,  49 => 20,  47 => 19,  41 => 16,  38 => 15,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* 		{% block stylesheets %}*/
/* 			{% stylesheets filter='cssrewrite'*/
/* */
/* 			'@MyLabelBundle/Resources/public/css/main.css'*/
/* 			*/
/* 			%}*/
/* 			<link rel="stylesheet" href="{{ asset_url }}"/>*/
/* 			{% endstylesheets %}*/
/* 		{% endblock %}*/
/*  */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
