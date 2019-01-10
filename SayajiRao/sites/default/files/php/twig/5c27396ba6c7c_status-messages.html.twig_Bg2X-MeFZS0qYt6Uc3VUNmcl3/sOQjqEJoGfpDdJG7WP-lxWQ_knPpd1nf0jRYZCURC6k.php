<?php

/* themes/eminent_sardar/templates/misc/status-messages.html.twig */
class __TwigTemplate_12fc107f972715d6ba5066284c42518e14de9c18449515dda036ee530cdcaa9b extends Twig_Template
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
        $tags = array("for" => 24, "if" => 25, "set" => 26);
        $filters = array("without" => 33, "length" => 40, "first" => 49);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if', 'set'),
                array('without', 'length', 'first'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            echo "  ";
            if (($context["type"] == "error")) {
                // line 26
                echo "    ";
                $context["stat_class"] = "alert alert-danger fade in";
                // line 27
                echo "  ";
            } elseif (($context["type"] == "status")) {
                // line 28
                echo "    ";
                $context["stat_class"] = "alert alert-success fade in";
                // line 29
                echo "  ";
            } elseif (($context["type"] == "warning")) {
                // line 30
                echo "    ";
                $context["stat_class"] = "alert alert-warning fade in";
                // line 31
                echo "  ";
            }
            // line 32
            echo "
  <div role=\"contentinfo\" aria-label=\"";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["attributes"] ?? null), "role", "aria-label"), "html", null, true));
            echo ">
    ";
            // line 34
            if (($context["type"] == "error")) {
                // line 35
                echo "      <div role=\"alert\">
    ";
            }
            // line 37
            echo "      ";
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array")) {
                // line 38
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
      ";
            }
            // line 40
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 41
                echo "       <div class = \" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["stat_class"] ?? null), "html", null, true));
                echo "\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
       <ul>
          ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 45
                    echo "            <li>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        </ul> </div>
      ";
            } else {
                // line 49
                echo "        <div class = \" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["stat_class"] ?? null), "html", null, true));
                echo "\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo " </div>
      ";
            }
            // line 51
            echo "    ";
            if (($context["type"] == "error")) {
                // line 52
                echo "      </div>
    ";
            }
            // line 54
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 54,  130 => 52,  127 => 51,  119 => 49,  115 => 47,  106 => 45,  102 => 44,  95 => 41,  92 => 40,  86 => 38,  83 => 37,  79 => 35,  77 => 34,  71 => 33,  68 => 32,  65 => 31,  62 => 30,  59 => 29,  56 => 28,  53 => 27,  50 => 26,  47 => 25,  43 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}
{% for type, messages in message_list %}
  {% if type == 'error' %}
    {% set stat_class = 'alert alert-danger fade in' %}
  {% elseif type == 'status' %}
    {% set stat_class = 'alert alert-success fade in' %}
  {% elseif type == 'warning' %}
    {% set stat_class = 'alert alert-warning fade in' %}
  {% endif %}

  <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes|without('role', 'aria-label') }}>
    {% if type == 'error' %}
      <div role=\"alert\">
    {% endif %}
      {% if status_headings[type] %}
        <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
      {% endif %}
      {% if messages|length > 1 %}
       <div class = \" {{ stat_class }}\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
       <ul>
          {% for message in messages %}
            <li>{{ message }}</li>
          {% endfor %}
        </ul> </div>
      {% else %}
        <div class = \" {{ stat_class }}\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>{{ messages|first }} </div>
      {% endif %}
    {% if type == 'error' %}
      </div>
    {% endif %}
  </div>
{% endfor %}
", "themes/eminent_sardar/templates/misc/status-messages.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/misc/status-messages.html.twig");
    }
}
