<?php

/* IKNSABlogBundle:Default:index.html.twig */
class __TwigTemplate_a8154832f44c1590fcd5b28cc786b779732f5e0b7d3fc81ecaaefb37860024c1 extends Twig_Template
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
        $__internal_71d3fe2c834a4d9d8b1dd5558adef62097ce3c7228f4b0d12ef6508b11194325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d3fe2c834a4d9d8b1dd5558adef62097ce3c7228f4b0d12ef6508b11194325->enter($__internal_71d3fe2c834a4d9d8b1dd5558adef62097ce3c7228f4b0d12ef6508b11194325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_71d3fe2c834a4d9d8b1dd5558adef62097ce3c7228f4b0d12ef6508b11194325->leave($__internal_71d3fe2c834a4d9d8b1dd5558adef62097ce3c7228f4b0d12ef6508b11194325_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "IKNSABlogBundle:Default:index.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
