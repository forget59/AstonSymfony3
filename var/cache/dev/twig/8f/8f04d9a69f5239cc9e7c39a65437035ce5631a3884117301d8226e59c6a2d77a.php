<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_380c2263d5d5dffddc67ad2c77738733e2756522ec6e996e71a24425bc67cdf2 extends Twig_Template
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
        $__internal_c768736f31cd63add1df3b0f4cb7b09d5736a4b21a82e2da49e284dec26669a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c768736f31cd63add1df3b0f4cb7b09d5736a4b21a82e2da49e284dec26669a1->enter($__internal_c768736f31cd63add1df3b0f4cb7b09d5736a4b21a82e2da49e284dec26669a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c768736f31cd63add1df3b0f4cb7b09d5736a4b21a82e2da49e284dec26669a1->leave($__internal_c768736f31cd63add1df3b0f4cb7b09d5736a4b21a82e2da49e284dec26669a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
