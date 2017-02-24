<?php

/* IKNSAPostBundle:Default:index.html.twig */
class __TwigTemplate_b296f864ab154570e9619bc484bbd90335b0b76760d5541f2fe5eb59fd390d11 extends Twig_Template
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
        $__internal_e6988d883bc679025caa6ceae5930fa369461c6f5e68d6ecc03c143454732966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6988d883bc679025caa6ceae5930fa369461c6f5e68d6ecc03c143454732966->enter($__internal_e6988d883bc679025caa6ceae5930fa369461c6f5e68d6ecc03c143454732966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAPostBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_e6988d883bc679025caa6ceae5930fa369461c6f5e68d6ecc03c143454732966->leave($__internal_e6988d883bc679025caa6ceae5930fa369461c6f5e68d6ecc03c143454732966_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAPostBundle:Default:index.html.twig";
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
", "IKNSAPostBundle:Default:index.html.twig", "/var/www/symfony3/src/IKNSA/PostBundle/Resources/views/Default/index.html.twig");
    }
}
