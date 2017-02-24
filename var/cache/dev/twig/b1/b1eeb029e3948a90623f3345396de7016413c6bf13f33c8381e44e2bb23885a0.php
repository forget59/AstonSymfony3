<?php

/* IKNSAAppBundle:Default:navigation.html.twig */
class __TwigTemplate_d4d2d0d721d77f30ebb11bd72aaf1f3b63c32390f01a09d2d6459792088c5073 extends Twig_Template
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
        $__internal_0c5ceb50a4a1e209c3ce5b0b5a9ad011db2157e5a9fe024285bd92bbc4a9130b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5ceb50a4a1e209c3ce5b0b5a9ad011db2157e5a9fe024285bd92bbc4a9130b->enter($__internal_0c5ceb50a4a1e209c3ce5b0b5a9ad011db2157e5a9fe024285bd92bbc4a9130b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAAppBundle:Default:navigation.html.twig"));

        // line 1
        echo "<ul>
    <li><a href=\"#\">One</a></li>
    <li><a href=\"#\">Two</a></li>
    <li><a href=\"#\">Three</a></li>
</ul>
";
        
        $__internal_0c5ceb50a4a1e209c3ce5b0b5a9ad011db2157e5a9fe024285bd92bbc4a9130b->leave($__internal_0c5ceb50a4a1e209c3ce5b0b5a9ad011db2157e5a9fe024285bd92bbc4a9130b_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAAppBundle:Default:navigation.html.twig";
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
        return new Twig_Source("<ul>
    <li><a href=\"#\">One</a></li>
    <li><a href=\"#\">Two</a></li>
    <li><a href=\"#\">Three</a></li>
</ul>
", "IKNSAAppBundle:Default:navigation.html.twig", "/var/www/symfony3/src/IKNSA/AppBundle/Resources/views/Default/navigation.html.twig");
    }
}
