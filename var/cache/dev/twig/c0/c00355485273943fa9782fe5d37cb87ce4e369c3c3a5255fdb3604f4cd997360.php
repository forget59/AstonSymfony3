<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e6edc42f55d3c39052e08df7255db127de489cbd08a73c6216bfac31e535808d extends Twig_Template
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
        $__internal_18261cf66daddf499ace08603d9feb67fef0fb9d7066b6774ed20c87bae24795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18261cf66daddf499ace08603d9feb67fef0fb9d7066b6774ed20c87bae24795->enter($__internal_18261cf66daddf499ace08603d9feb67fef0fb9d7066b6774ed20c87bae24795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_18261cf66daddf499ace08603d9feb67fef0fb9d7066b6774ed20c87bae24795->leave($__internal_18261cf66daddf499ace08603d9feb67fef0fb9d7066b6774ed20c87bae24795_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
