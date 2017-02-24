<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_49c05e13b8949c84e9e73a70a98e15cd00313f651e3a93dc2a03709a6e89049b extends Twig_Template
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
        $__internal_a4c828229cdec60f71fa3f6963b6fb450f08e58d4fd1ba1ecc8fff9c24f98931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c828229cdec60f71fa3f6963b6fb450f08e58d4fd1ba1ecc8fff9c24f98931->enter($__internal_a4c828229cdec60f71fa3f6963b6fb450f08e58d4fd1ba1ecc8fff9c24f98931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a4c828229cdec60f71fa3f6963b6fb450f08e58d4fd1ba1ecc8fff9c24f98931->leave($__internal_a4c828229cdec60f71fa3f6963b6fb450f08e58d4fd1ba1ecc8fff9c24f98931_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
