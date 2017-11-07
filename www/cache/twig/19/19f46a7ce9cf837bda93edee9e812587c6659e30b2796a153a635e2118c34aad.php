<?php

/* modular/text.html.twig */
class __TwigTemplate_76ca6d8acc0fd88aa05cc92e3fa1ba6f09f00c22779380bca9f363fe678a19c7 extends Twig_Template
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
        echo "<div class=\"modular-row callout\">
    ";
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 3
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 4
            echo "        ";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropResize", array(0 => 400, 1 => 400), "method"), "html", array(0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_align", array()))), "method");
            echo "
    ";
        }
        // line 6
        echo ($context["content"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row callout\">
    {% set image = page.media.images|first %}
    {% if image %}
        {{ image.cropResize(400,400).html('','','align-'~page.header.image_align) }}
    {% endif %}
{{ content }}
</div>
", "modular/text.html.twig", "/media/hulk/Lexar/www/user/themes/antimatter/templates/modular/text.html.twig");
    }
}
