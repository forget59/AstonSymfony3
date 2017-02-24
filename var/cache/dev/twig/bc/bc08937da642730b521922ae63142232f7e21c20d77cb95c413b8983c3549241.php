<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b576ac9e838fb837da9dfc47aeb8821964b387e5e93a49e597f6c0aac59652f9 extends Twig_Template
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
        $__internal_1e0bca42ba82644e10df1ce503f52f442494692a4eb21cf464f968f1b8560f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0bca42ba82644e10df1ce503f52f442494692a4eb21cf464f968f1b8560f23->enter($__internal_1e0bca42ba82644e10df1ce503f52f442494692a4eb21cf464f968f1b8560f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1e0bca42ba82644e10df1ce503f52f442494692a4eb21cf464f968f1b8560f23->leave($__internal_1e0bca42ba82644e10df1ce503f52f442494692a4eb21cf464f968f1b8560f23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
