<?php

/* partials/head.html.twig */
class __TwigTemplate_b3f002d76be15baf136922eff37181657d21eff56df2862155df8a52ff48161a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 6
            echo "    ";
            if (($this->getAttribute($context["meta"], "name", array()) != "generator")) {
                // line 7
                echo "    <meta ";
                if ($this->getAttribute($context["meta"], "name", array())) {
                    echo "name=\"";
                    echo $this->getAttribute($context["meta"], "name", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                    echo "http-equiv=\"";
                    echo $this->getAttribute($context["meta"], "http_equiv", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "charset", array())) {
                    echo "charset=\"";
                    echo $this->getAttribute($context["meta"], "charset", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "property", array())) {
                    echo "property=\"";
                    echo $this->getAttribute($context["meta"], "property", array());
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "content", array())) {
                    echo "content=\"";
                    echo $this->getAttribute($context["meta"], "content", array());
                    echo "\" ";
                }
                echo "/>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "favicon", array()) != "")) {
            // line 12
            echo "<link rel=\"icon\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "favicon", array())), true);
            echo "\" />
";
        }
        // line 14
        echo "
";
        // line 15
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 16
            echo "<meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
";
        }
        // line 18
        echo "
<title>";
        // line 19
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
        } else {
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        }
        echo "</title>

";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://vendor/bootstrap/css/bootstrap.min.css"), "method");
        // line 23
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/clean-blog.min.css"), "method");
        // line 24
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://vendor/font-awesome/css/font-awesome.min.css"), "method");
        // line 25
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic"), "method");
        // line 26
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"), "method");
        // line 27
        echo "
    ";
        // line 28
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 8))) {
            // line 29
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 30
            echo "    ";
        }
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://vendor/jquery/jquery.min.js", 1 => array("group" => "bottom")), "method");
        // line 37
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://vendor/bootstrap/js/bootstrap.min.js", 1 => array("group" => "bottom")), "method");
        // line 38
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/clean-blog.min.js", 1 => array("group" => "bottom")), "method");
        // line 39
        echo "
    ";
        // line 40
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) < 9))) {
            // line 41
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "method");
            // line 42
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "method");
            // line 43
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 43,  174 => 42,  171 => 41,  169 => 40,  166 => 39,  163 => 38,  160 => 37,  157 => 36,  154 => 35,  149 => 30,  146 => 29,  144 => 28,  141 => 27,  138 => 26,  135 => 25,  132 => 24,  129 => 23,  126 => 22,  123 => 21,  117 => 46,  114 => 45,  112 => 35,  107 => 33,  104 => 32,  102 => 21,  93 => 19,  90 => 18,  84 => 16,  82 => 15,  79 => 14,  73 => 12,  71 => 11,  68 => 10,  34 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

{% for meta in page.metadata %}
    {% if meta.name != 'generator' %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
    {% endif %}
{% endfor %}

{% if theme_config.favicon != '' %}
<link rel=\"icon\" href=\"{{ url('theme://img/' ~ theme_config.favicon, true) }}\" />
{% endif %}

{% if header.robots %}
<meta name=\"robots\" content=\"{{ header.robots }}\">
{% endif %}

<title>{% if header.title %}{{ header.title }}{% else %}{{ site.title }}{% endif %}</title>

{% block stylesheets %}
    {% do assets.addCss('theme://vendor/bootstrap/css/bootstrap.min.css') %}
    {% do assets.addCss('theme://css/clean-blog.min.css') %}
    {% do assets.addCss('theme://vendor/font-awesome/css/font-awesome.min.css') %}
    {% do assets.addCss('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') %}
    {% do assets.addCss('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') %}

    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.addCss('theme://css/ie.css') %}
    {% endif %}
{% endblock %}

{{ assets.css() }}

{% block javascripts %}
    {% do assets.addJs('theme://vendor/jquery/jquery.min.js', {'group':'bottom'}) %}
    {% do assets.addJs('theme://vendor/bootstrap/js/bootstrap.min.js', {'group':'bottom'}) %}
    {% do assets.addJs('theme://js/clean-blog.min.js', {'group':'bottom'}) %}

    {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
        {% do assets.addJs('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') %}
        {% do assets.addJs('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') %}
    {% endif %}
{% endblock %}

{{ assets.js() }}
", "partials/head.html.twig", "E:\\UwAmp\\www\\user\\themes\\clean-blog\\templates\\partials\\head.html.twig");
    }
}
