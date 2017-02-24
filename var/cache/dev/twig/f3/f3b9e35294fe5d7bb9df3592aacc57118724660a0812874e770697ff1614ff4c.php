<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_382cb4ce311e8c69b48b919f3b3e30f7628e8de53aa225e6994d726162bb1125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3a30edcb880f83b80308721c93e04ad061367b7dff7e4473606a59ef47b630d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a30edcb880f83b80308721c93e04ad061367b7dff7e4473606a59ef47b630d->enter($__internal_d3a30edcb880f83b80308721c93e04ad061367b7dff7e4473606a59ef47b630d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d3a30edcb880f83b80308721c93e04ad061367b7dff7e4473606a59ef47b630d->leave($__internal_d3a30edcb880f83b80308721c93e04ad061367b7dff7e4473606a59ef47b630d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5d7b5931d59fb1bf7aafe571f2a65159856c2b8f2da61e0718e22edea9ee4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d7b5931d59fb1bf7aafe571f2a65159856c2b8f2da61e0718e22edea9ee4f4->enter($__internal_b5d7b5931d59fb1bf7aafe571f2a65159856c2b8f2da61e0718e22edea9ee4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b5d7b5931d59fb1bf7aafe571f2a65159856c2b8f2da61e0718e22edea9ee4f4->leave($__internal_b5d7b5931d59fb1bf7aafe571f2a65159856c2b8f2da61e0718e22edea9ee4f4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
