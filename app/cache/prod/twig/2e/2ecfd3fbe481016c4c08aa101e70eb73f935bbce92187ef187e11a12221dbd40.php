<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_c5fa0d28c18ef8028a3248ca56a8143e51469e2f64303e778d7736a7222d8bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'form_widget_simple', array('type' => isset($type) ? $type : 'hidden')) ?>*/
/* */
