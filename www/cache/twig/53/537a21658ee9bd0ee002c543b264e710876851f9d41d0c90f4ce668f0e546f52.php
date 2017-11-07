<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_1ba71cf01b9d6f0bc9eb7de0348e76896385296a2dfc73aa77105dc6cc326426 extends Twig_Template
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
        // line 1
        echo "<li class=\"search\" role=\"search\">
<a class=\"fa-search\" href=\"#search\">Search</a>
<form id=\"search\" method=\"get\" action=\"#\">
  <input type=\"text\" class=\"text\" placeholder=\"Search\" value=\"";
        // line 4
        echo ($context["query"] ?? null);
        echo "\" data-search-input=\"";
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
</form>
</li>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"search\" role=\"search\">
<a class=\"fa-search\" href=\"#search\">Search</a>
<form id=\"search\" method=\"get\" action=\"#\">
  <input type=\"text\" class=\"text\" placeholder=\"Search\" value=\"{{ query }}\" data-search-input=\"{{ base_url_relative }}{{ config.plugins.simplesearch.route}}/query\" />
</form>
</li>
", "partials/simplesearch_searchbox.html.twig", "/media/anthony/data/Grav/www/user/themes/future/templates/partials/simplesearch_searchbox.html.twig");
    }
}
