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
        $__internal_fe0595798e39c779b939fe82f6b0343b05cfe1a438b979227967a579ed55a984 = $this->env->getExtension("native_profiler");
        $__internal_fe0595798e39c779b939fe82f6b0343b05cfe1a438b979227967a579ed55a984->enter($__internal_fe0595798e39c779b939fe82f6b0343b05cfe1a438b979227967a579ed55a984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 16
        echo " 
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_fe0595798e39c779b939fe82f6b0343b05cfe1a438b979227967a579ed55a984->leave($__internal_fe0595798e39c779b939fe82f6b0343b05cfe1a438b979227967a579ed55a984_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c143d10448a92aa718c20de1c3691f5fe507718a241a8bbdde02c0e86063c66e = $this->env->getExtension("native_profiler");
        $__internal_c143d10448a92aa718c20de1c3691f5fe507718a241a8bbdde02c0e86063c66e->enter($__internal_c143d10448a92aa718c20de1c3691f5fe507718a241a8bbdde02c0e86063c66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c143d10448a92aa718c20de1c3691f5fe507718a241a8bbdde02c0e86063c66e->leave($__internal_c143d10448a92aa718c20de1c3691f5fe507718a241a8bbdde02c0e86063c66e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b53d1fddf0da34e0128e318b8e4601f955f09eed4ff83846de083c960afbf4b1 = $this->env->getExtension("native_profiler");
        $__internal_b53d1fddf0da34e0128e318b8e4601f955f09eed4ff83846de083c960afbf4b1->enter($__internal_b53d1fddf0da34e0128e318b8e4601f955f09eed4ff83846de083c960afbf4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f11f7d3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f11f7d3_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/f11f7d3_main_1.css");
            // line 13
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t";
            // asset "f11f7d3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f11f7d3_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/f11f7d3_responsive_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t";
        } else {
            // asset "f11f7d3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f11f7d3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/f11f7d3.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 15
        echo "\t\t";
        
        $__internal_b53d1fddf0da34e0128e318b8e4601f955f09eed4ff83846de083c960afbf4b1->leave($__internal_b53d1fddf0da34e0128e318b8e4601f955f09eed4ff83846de083c960afbf4b1_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3762a4670ddc9b98729ab403a2725322effce7867a126cf6bf16199138e6552 = $this->env->getExtension("native_profiler");
        $__internal_f3762a4670ddc9b98729ab403a2725322effce7867a126cf6bf16199138e6552->enter($__internal_f3762a4670ddc9b98729ab403a2725322effce7867a126cf6bf16199138e6552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f3762a4670ddc9b98729ab403a2725322effce7867a126cf6bf16199138e6552->leave($__internal_f3762a4670ddc9b98729ab403a2725322effce7867a126cf6bf16199138e6552_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f618f32dae91eeab2c2a88ff719e2294592fa0df577126bc8215f202a9152fc = $this->env->getExtension("native_profiler");
        $__internal_8f618f32dae91eeab2c2a88ff719e2294592fa0df577126bc8215f202a9152fc->enter($__internal_8f618f32dae91eeab2c2a88ff719e2294592fa0df577126bc8215f202a9152fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8f618f32dae91eeab2c2a88ff719e2294592fa0df577126bc8215f202a9152fc->leave($__internal_8f618f32dae91eeab2c2a88ff719e2294592fa0df577126bc8215f202a9152fc_prof);

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
        return array (  122 => 21,  111 => 20,  104 => 15,  84 => 13,  79 => 7,  73 => 6,  61 => 5,  52 => 22,  49 => 21,  47 => 20,  41 => 17,  38 => 16,  36 => 6,  32 => 5,  26 => 1,);
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
/*                         '@MyLabelBundle/Resources/public/css/responsive.css'*/
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
