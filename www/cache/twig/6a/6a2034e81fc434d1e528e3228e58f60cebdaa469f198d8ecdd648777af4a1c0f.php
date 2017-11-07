<?php

/* item.html.twig */
class __TwigTemplate_01656f9865c6efd7fdd80582e2fe23e1b79234e9ba1178c49343aa56adec5e7d extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "375616393")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% block content %}
        {% if config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        <div class=\"blog-content-item grid pure-g-r\">
            <div id=\"item\" class=\"block pure-u-2-3\">
                {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
            </div>
            <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
                {% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
                {{dump(page.parent)}}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "/media/anthony/data/Grav/www/user/themes/afterburner2/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_01656f9865c6efd7fdd80582e2fe23e1b79234e9ba1178c49343aa56adec5e7d_375616393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 5
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 5)->display($context);
            // line 6
            echo "        ";
        }
        // line 7
        echo "
        <div class=\"blog-content-item grid pure-g-r\">
            <div id=\"item\" class=\"block pure-u-2-3\">
                ";
        // line 10
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 10)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()), "truncate" => false)));
        // line 11
        echo "            </div>
            <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
                ";
        // line 13
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 13)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()))));
        // line 14
        echo "                ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute(($context["page"] ?? null), "parent", array()));
        echo "
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 14,  113 => 13,  109 => 11,  107 => 10,  102 => 7,  99 => 6,  96 => 5,  93 => 4,  90 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% block content %}
        {% if config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        <div class=\"blog-content-item grid pure-g-r\">
            <div id=\"item\" class=\"block pure-u-2-3\">
                {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}
            </div>
            <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
                {% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
                {{dump(page.parent)}}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "item.html.twig", "/media/anthony/data/Grav/www/user/themes/afterburner2/templates/item.html.twig");
    }
}
