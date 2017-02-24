<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_74a162d103971931d5ccae6b760f0f02c73d5992f8a15a5b35260eefc2ea096d extends Twig_Template
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
        $__internal_4b1ff8d7bfe26066634fda40555ca5c9827c83618b4ff32b617b9f40a6177697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1ff8d7bfe26066634fda40555ca5c9827c83618b4ff32b617b9f40a6177697->enter($__internal_4b1ff8d7bfe26066634fda40555ca5c9827c83618b4ff32b617b9f40a6177697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4b1ff8d7bfe26066634fda40555ca5c9827c83618b4ff32b617b9f40a6177697->leave($__internal_4b1ff8d7bfe26066634fda40555ca5c9827c83618b4ff32b617b9f40a6177697_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
