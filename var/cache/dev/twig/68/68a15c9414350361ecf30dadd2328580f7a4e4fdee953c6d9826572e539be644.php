<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ac726820293249da78cea7c982774f27f5f1d3163fa84b2b6c7cec3db2a0ae15 extends Twig_Template
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
        $__internal_633bec37799ac2ebc6fb7c1e2fa2160f5dbc789ece04cd34f52a93ad7ebc0d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633bec37799ac2ebc6fb7c1e2fa2160f5dbc789ece04cd34f52a93ad7ebc0d47->enter($__internal_633bec37799ac2ebc6fb7c1e2fa2160f5dbc789ece04cd34f52a93ad7ebc0d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_633bec37799ac2ebc6fb7c1e2fa2160f5dbc789ece04cd34f52a93ad7ebc0d47->leave($__internal_633bec37799ac2ebc6fb7c1e2fa2160f5dbc789ece04cd34f52a93ad7ebc0d47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
