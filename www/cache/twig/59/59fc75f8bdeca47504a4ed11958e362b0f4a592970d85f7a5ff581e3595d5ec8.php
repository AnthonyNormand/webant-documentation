<?php

/* partials/footer.html.twig */
class __TwigTemplate_b49142a084b6b2c50a172260730961ef33ec44b6baf9f04c1ad626b84e41f654 extends Twig_Template
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
        echo "<hr>

<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                ";
        // line 7
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social_icons", array())) > 0)) {
            // line 8
            echo "                <ul class=\"list-inline text-center\">
                    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social_icons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 10
                echo "                    <li>
                        <a href=\"";
                // line 11
                echo $this->getAttribute($context["icon"], "url", array());
                echo "\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-stack-1x fa-inverse ";
                // line 14
                echo $this->getAttribute($context["icon"], "icon", array());
                echo "\"></i>
                            </span>
                        </a>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </ul>
                ";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "copyright", array())) {
            // line 22
            echo "                <p class=\"copyright text-muted\">";
            echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "copyright", array());
            echo "</p>
                ";
        }
        // line 24
        echo "            </div>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  63 => 22,  60 => 21,  56 => 19,  45 => 14,  39 => 11,  36 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr>

<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                {% if theme_config.social_icons|length > 0 %}
                <ul class=\"list-inline text-center\">
                    {% for icon in theme_config.social_icons %}
                    <li>
                        <a href=\"{{ icon.url }}\">
                            <span class=\"fa-stack fa-lg\">
                                <i class=\"fa fa-circle fa-stack-2x\"></i>
                                <i class=\"fa fa-stack-1x fa-inverse {{ icon.icon }}\"></i>
                            </span>
                        </a>
                    </li>
                    {% endfor %}
                </ul>
                {% endif %}
                {% if theme_config.copyright %}
                <p class=\"copyright text-muted\">{{ theme_config.copyright }}</p>
                {% endif %}
            </div>
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "E:\\UwAmp\\www\\user\\themes\\clean-blog\\templates\\partials\\footer.html.twig");
    }
}
