<?php

/* IKNSAAppBundle::layout.html.twig */
class __TwigTemplate_482bcfb8a36cfb2f8a33cfdf660719c0b73fcf3129f3c9c95afe9d612fe717ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7b38c22af33a8ffea3b96adcbaf2eec3f6cf9c7cb8d2e80a77d7f09d3d18b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b38c22af33a8ffea3b96adcbaf2eec3f6cf9c7cb8d2e80a77d7f09d3d18b25->enter($__internal_d7b38c22af33a8ffea3b96adcbaf2eec3f6cf9c7cb8d2e80a77d7f09d3d18b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAAppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Layout Testing</title>
</head>
<body>
    ";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('navigation', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
</body>
</html>";
        
        $__internal_d7b38c22af33a8ffea3b96adcbaf2eec3f6cf9c7cb8d2e80a77d7f09d3d18b25->leave($__internal_d7b38c22af33a8ffea3b96adcbaf2eec3f6cf9c7cb8d2e80a77d7f09d3d18b25_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_51bb29deac05ad6f456b6a5cac75a3194198dd2d70a6c0801decc7fba25981a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bb29deac05ad6f456b6a5cac75a3194198dd2d70a6c0801decc7fba25981a9->enter($__internal_51bb29deac05ad6f456b6a5cac75a3194198dd2d70a6c0801decc7fba25981a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "        <h1>Header</h1>
        <hr>
    ";
        
        $__internal_51bb29deac05ad6f456b6a5cac75a3194198dd2d70a6c0801decc7fba25981a9->leave($__internal_51bb29deac05ad6f456b6a5cac75a3194198dd2d70a6c0801decc7fba25981a9_prof);

    }

    // line 12
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e1215220d2d23f576c25d4f292c1ecde8698b019adf4e07f0d2d19a095d6862a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1215220d2d23f576c25d4f292c1ecde8698b019adf4e07f0d2d19a095d6862a->enter($__internal_e1215220d2d23f576c25d4f292c1ecde8698b019adf4e07f0d2d19a095d6862a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 13
        echo "        <h3>navigation</h3>
        ";
        // line 14
        $this->loadTemplate("IKNSAAppBundle:Default:navigation.html.twig", "IKNSAAppBundle::layout.html.twig", 14)->display($context);
        // line 15
        echo "
        <hr>
    ";
        
        $__internal_e1215220d2d23f576c25d4f292c1ecde8698b019adf4e07f0d2d19a095d6862a->leave($__internal_e1215220d2d23f576c25d4f292c1ecde8698b019adf4e07f0d2d19a095d6862a_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_e358ee2ce2dc69d44603814ec08562e1d2b20ee24360cbf7f9b5c1df0697865e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e358ee2ce2dc69d44603814ec08562e1d2b20ee24360cbf7f9b5c1df0697865e->enter($__internal_e358ee2ce2dc69d44603814ec08562e1d2b20ee24360cbf7f9b5c1df0697865e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e358ee2ce2dc69d44603814ec08562e1d2b20ee24360cbf7f9b5c1df0697865e->leave($__internal_e358ee2ce2dc69d44603814ec08562e1d2b20ee24360cbf7f9b5c1df0697865e_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAAppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  80 => 15,  78 => 14,  75 => 13,  69 => 12,  60 => 8,  54 => 7,  45 => 20,  43 => 19,  40 => 18,  38 => 12,  35 => 11,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Layout Testing</title>
</head>
<body>
    {% block header %}
        <h1>Header</h1>
        <hr>
    {% endblock %}

    {% block navigation %}
        <h3>navigation</h3>
        {% include 'IKNSAAppBundle:Default:navigation.html.twig' %}

        <hr>
    {% endblock %}

    {% block body %}{% endblock %}

</body>
</html>", "IKNSAAppBundle::layout.html.twig", "/var/www/symfony3/src/IKNSA/AppBundle/Resources/views/layout.html.twig");
    }
}
