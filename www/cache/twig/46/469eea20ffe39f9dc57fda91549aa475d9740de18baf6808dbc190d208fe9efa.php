<?php

/* error.html.twig */
class __TwigTemplate_b3cfb04b870b934de727f47c6e0ffbedae18f39ae73587bcf4a28772d2836a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
            'footer_section' => array($this, 'block_footer_section'),
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
    public function block_titlebar($context, array $blocks = array())
    {
        // line 4
        echo "    <h1><i class=\"fa fa-fw fa-exclamation-triangle\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"error-block\">
    <h1>Error ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "http_response_code", array()), "html", null, true);
        echo "</h1>
    <div class=\"padding\">
    <p>
        ";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </p>
    </div>
</div>
";
    }

    // line 18
    public function block_footer_section($context, array $blocks = array())
    {
        // line 19
        echo "<br /><br /><br />
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
        return array (  64 => 19,  61 => 18,  52 => 12,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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

{% block titlebar %}
    <h1><i class=\"fa fa-fw fa-exclamation-triangle\"></i> {{ \"PLUGIN_ADMIN.ERROR\"|tu }}</h1>
{% endblock %}

{% block content %}
<div class=\"error-block\">
    <h1>Error {{ page.header.http_response_code }}</h1>
    <div class=\"padding\">
    <p>
        {{ page.content|raw }}
    </p>
    </div>
</div>
{% endblock %}

{% block footer_section %}
<br /><br /><br />
{% endblock %}
", "error.html.twig", "/media/anthony/data/Grav/www/user/plugins/admin/themes/grav/templates/error.html.twig");
    }
}
