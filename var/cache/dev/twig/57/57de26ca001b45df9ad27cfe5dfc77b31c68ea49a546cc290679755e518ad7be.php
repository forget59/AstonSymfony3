<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8ca35c741c53deb2eae986d130ebef13d180170fefaeac5e70ae1d771f7e09e3 extends Twig_Template
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
        $__internal_3bb294a3e3b0fc1d23609d17f88cf11dfe38f5b68214ddf11d77a370dac33570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb294a3e3b0fc1d23609d17f88cf11dfe38f5b68214ddf11d77a370dac33570->enter($__internal_3bb294a3e3b0fc1d23609d17f88cf11dfe38f5b68214ddf11d77a370dac33570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3bb294a3e3b0fc1d23609d17f88cf11dfe38f5b68214ddf11d77a370dac33570->leave($__internal_3bb294a3e3b0fc1d23609d17f88cf11dfe38f5b68214ddf11d77a370dac33570_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
