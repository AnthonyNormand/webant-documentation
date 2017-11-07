<?php

/* partials/archives.html.twig */
class __TwigTemplate_61f718072e2ac6e63d2936f5f105b64c9145d4324083f380fe96c5caa16a206a extends Twig_Template
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
        echo "<section>
    <ul class=\"posts\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 5), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 4
            echo "    ";
            $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
            // line 5
            echo "    <li>
        <article>
           <header>
         <h3><a href=\"";
            // line 8
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></h3>
        <time class=\"published\" datetime=\"";
            // line 9
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "Y-m-d");
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "</time>
        </header>
        <a href=\"";
            // line 11
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"image\">";
            echo $this->getAttribute($this->getAttribute(($context["bannerimage"] ?? null), "cropZoom", array(0 => 64, 1 => 64), "method"), "quality", array(0 => 60), "method");
            echo "</a>
       </article>
    </li>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "   </ul>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  48 => 11,  41 => 9,  35 => 8,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section>
    <ul class=\"posts\">
    {% for p in page.find('/blog').children.order('date', 'desc').slice(0, 5) %}
    {% set bannerimage = p.media.images|first %}
    <li>
        <article>
           <header>
         <h3><a href=\"{{p.url}}\">{{ p.title }}</a></h3>
        <time class=\"published\" datetime=\"{{p.date|date(\"Y-m-d\")}}\">{{ p.date|date(\"M j, Y\")}}</time>
        </header>
        <a href=\"{{p.url}}\" class=\"image\">{{ bannerimage.cropZoom(64,64).quality(60) }}</a>
       </article>
    </li>
   {% endfor %}
   </ul>
</section>", "partials/archives.html.twig", "/media/anthony/data/Grav/www/user/themes/future/templates/partials/archives.html.twig");
    }
}
