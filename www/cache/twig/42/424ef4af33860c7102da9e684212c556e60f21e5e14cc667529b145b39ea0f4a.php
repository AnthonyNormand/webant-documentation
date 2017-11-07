<?php

/* partials/header.html.twig */
class __TwigTemplate_7a39f9252fc48934b03619108e96b5bd2568f6d6dc9fc2f0376401941d4f75ba extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array())) {
            // line 2
            echo "    ";
            $context["style"] = ((" style=\"background-image: url('" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), array(), "array"), "url", array(), "method")) . "')\"");
        } else {
            // line 4
            echo "    ";
            $context["style"] = "";
        }
        // line 6
        echo "
<header class=\"intro-header\"";
        // line 7
        echo (isset($context["style"]) ? $context["style"] : null);
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
                    ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array())) {
            // line 14
            echo "                    <hr class=\"small\">
                    <span class=\"subheading\">";
            // line 15
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subheading", array());
            echo "</span>
                    ";
        }
        // line 17
        echo "                </div>
            </div>
        </div>
    </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  49 => 15,  46 => 14,  44 => 13,  40 => 12,  32 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.header.header_image %}
    {% set style = ' style=\"background-image: url(\\'' ~ page.media.images[page.header.header_image].url()  ~ '\\')\"' %}
{% else %}
    {% set style = '' %}
{% endif %}

<header class=\"intro-header\"{{ style }}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>{{ page.title }}</h1>
                    {% if page.header.subheading %}
                    <hr class=\"small\">
                    <span class=\"subheading\">{{ page.header.subheading }}</span>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</header>
", "partials/header.html.twig", "E:\\UwAmp\\www\\user\\themes\\clean-blog\\templates\\partials\\header.html.twig");
    }
}
