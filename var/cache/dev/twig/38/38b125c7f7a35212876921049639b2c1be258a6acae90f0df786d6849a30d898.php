<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_e78def2eec1dc358dfeb1fde2957637d159e6f2c1c8b2f0e32f97aeb0ac5694f extends Twig_Template
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
        $__internal_12a407a664cf2660939486dbb8789bb7a56c1b776728799cdefd6a349ccc4c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a407a664cf2660939486dbb8789bb7a56c1b776728799cdefd6a349ccc4c78->enter($__internal_12a407a664cf2660939486dbb8789bb7a56c1b776728799cdefd6a349ccc4c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_12a407a664cf2660939486dbb8789bb7a56c1b776728799cdefd6a349ccc4c78->leave($__internal_12a407a664cf2660939486dbb8789bb7a56c1b776728799cdefd6a349ccc4c78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
