<?php

/* error.html.twig */
class __TwigTemplate_a3b2fc2b1d673d9e511ee54276f729af63c63591dea78278c2ec9848518ce3a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "error_header_image", array())) {
            // line 5
            echo "    ";
            $context["style"] = ((" style=\"background-image: url('" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "error_header_image", array())))) . "')\"");
        } else {
            // line 7
            echo "    ";
            $context["style"] = "";
        }
        // line 9
        echo "
<header class=\"intro-header\"";
        // line 10
        echo (isset($context["style"]) ? $context["style"] : null);
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"page-heading\">
                    <h1>";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ERROR");
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
                </div>
            </div>
        </div>
    </div>
</header>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center\">
            ";
        // line 27
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  69 => 24,  66 => 23,  53 => 15,  45 => 10,  42 => 9,  38 => 7,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block header %}
{% if theme_config.error_header_image %}
    {% set style = ' style=\"background-image: url(\\'' ~ url('theme://img/' ~ theme_config.error_header_image)  ~ '\\')\"' %}
{% else %}
    {% set style = '' %}
{% endif %}

<header class=\"intro-header\"{{ style }}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"page-heading\">
                    <h1>{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h1>
                </div>
            </div>
        </div>
    </div>
</header>
{% endblock %}

{% block content %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center\">
            {{ page.content }}
        </div>
    </div>
</div>
{% endblock %}
", "error.html.twig", "E:\\UwAmp\\www\\user\\themes\\clean-blog\\templates\\error.html.twig");
    }
}
