<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a3b7eb4bfb950f5aa53b5550b8ea2f30b9fbc91b1755810c3226c6098178193 extends Twig_Template
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
        $__internal_828eaaab871833fe7c9ca3b5bb458e5d6366e02b1e18433f6b7830d5fe684415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828eaaab871833fe7c9ca3b5bb458e5d6366e02b1e18433f6b7830d5fe684415->enter($__internal_828eaaab871833fe7c9ca3b5bb458e5d6366e02b1e18433f6b7830d5fe684415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_828eaaab871833fe7c9ca3b5bb458e5d6366e02b1e18433f6b7830d5fe684415->leave($__internal_828eaaab871833fe7c9ca3b5bb458e5d6366e02b1e18433f6b7830d5fe684415_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
