<?php

/* partials/base.html.twig */
class __TwigTemplate_d9b98e29b1f160c6f3b2df7907cf1ad62e0c8f7e24dc84a63f685e139b29848a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('navigation', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('bottom', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 6)->display($context);
        // line 7
        echo "        ";
    }

    // line 10
    public function block_navigation($context, array $blocks = array())
    {
        // line 11
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "        ";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 21)->display($context);
        // line 22
        echo "        ";
    }

    // line 24
    public function block_bottom($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  114 => 24,  110 => 22,  107 => 21,  104 => 20,  99 => 18,  95 => 16,  92 => 15,  89 => 14,  85 => 12,  82 => 11,  79 => 10,  75 => 7,  72 => 6,  69 => 5,  63 => 27,  61 => 24,  58 => 23,  56 => 20,  53 => 19,  51 => 18,  48 => 17,  46 => 14,  43 => 13,  41 => 10,  37 => 8,  35 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
    <head>
        {% block head %}
            {% include 'partials/head.html.twig' %}
        {% endblock %}
    </head>
    <body>
        {% block navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block header %}
            {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block content %}{% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block bottom %}
            {{ assets.js('bottom') }}
        {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "E:\\UwAmp\\www\\user\\themes\\clean-blog\\templates\\partials\\base.html.twig");
    }
}
