<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_21130c7f6407b251e9c21950ab66e05b328aafbe1c8ad2cf7cf4aa4ebc628683 extends Twig_Template
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
        $__internal_ea93290a52e3fb5ccdffbb51556a322de82df297366fdc6b05f3d6474a828bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea93290a52e3fb5ccdffbb51556a322de82df297366fdc6b05f3d6474a828bc4->enter($__internal_ea93290a52e3fb5ccdffbb51556a322de82df297366fdc6b05f3d6474a828bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ea93290a52e3fb5ccdffbb51556a322de82df297366fdc6b05f3d6474a828bc4->leave($__internal_ea93290a52e3fb5ccdffbb51556a322de82df297366fdc6b05f3d6474a828bc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
