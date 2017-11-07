<?php

/* partials/login-status.html.twig */
class __TwigTemplate_8bd5a209a11e871b2a7e384479e74e2d4dbc1707aacb26cdf0ac6ff6cec31a89 extends Twig_Template
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
        echo "<span class=\"login-status\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "authenticated", array())) {
            // line 3
            echo "        ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.WELCOME");
            echo " <strong>";
            echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array())) : ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array())));
            echo "</strong>, <a class=\"logout\" href=\"";
            echo $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((twig_trim_filter((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "path", array())), "/") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "login.logout"), 1 => "logout-form", 2 => "logout-nonce"), "method");
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGOUT");
            echo "</a>
    ";
        }
        // line 5
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "partials/login-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"login-status\">
    {% if grav.user.authenticated %}
        {{ 'PLUGIN_LOGIN.WELCOME'|t }} <strong>{{ grav.user.fullname ?: grav.user.username }}</strong>, <a class=\"logout\" href=\"{{ uri.addNonce((base_url_relative ~ uri.path)|trim('/') ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce') }}\">{{ 'PLUGIN_LOGIN.BTN_LOGOUT'|t }}</a>
    {% endif %}
</span>
", "partials/login-status.html.twig", "/media/anthony/data/Grav/www/user/plugins/login/templates/partials/login-status.html.twig");
    }
}
