<?php

/* themes/eminent_sardar/templates/views/views-view-table.html.twig */
class __TwigTemplate_dba34fe8c441441aa7331362c12c5318290ec60e81cb4eb5e2b974f07bf65876 extends Twig_Template
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
        $tags = array("if" => 35, "for" => 57, "set" => 60);
        $filters = array("merge" => 98);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('merge'),
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

        // line 33
        echo "
<table class=\"table table-hover\">
  ";
        // line 35
        if (($context["caption_needed"] ?? null)) {
            // line 36
            echo "    <caption>
    ";
            // line 37
            if (($context["caption"] ?? null)) {
                // line 38
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["caption"] ?? null), "html", null, true));
                echo "
    ";
            } else {
                // line 40
                echo "      ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
    ";
            }
            // line 42
            echo "    ";
            if (( !twig_test_empty(($context["summary"] ?? null)) ||  !twig_test_empty(($context["description"] ?? null)))) {
                // line 43
                echo "      <details>
        ";
                // line 44
                if ( !twig_test_empty(($context["summary"] ?? null))) {
                    // line 45
                    echo "          <summary>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["summary"] ?? null), "html", null, true));
                    echo "</summary>
        ";
                }
                // line 47
                echo "        ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 48
                    echo "          ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true));
                    echo "
        ";
                }
                // line 50
                echo "      </details>
    ";
            }
            // line 52
            echo "    </caption>
  ";
        }
        // line 54
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 55
            echo "    <thead>
      <tr>
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 58
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 59
                    echo "            ";
                    // line 60
                    $context["column_classes"] = array(0 => "views-field", 1 => ("views-field-" . $this->getAttribute(                    // line 62
($context["fields"] ?? null), $context["key"], array(), "array")));
                    // line 65
                    echo "          ";
                }
                // line 66
                echo "          <th";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "setAttribute", array(0 => "scope", 1 => "col"), "method"), "html", null, true));
                echo ">";
                // line 67
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 68
                    echo "<";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                    // line 69
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 70
                        echo "<a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 72
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                    // line 74
                    echo "</";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 76
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 77
                        echo "<a href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 79
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                }
                // line 82
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "      </tr>
    </thead>
  ";
        }
        // line 87
        echo "  <tbody>
    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 89
            echo "      <tr";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
        ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", array()));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 91
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 92
                    echo "            ";
                    // line 93
                    $context["column_classes"] = array(0 => "views-field");
                    // line 97
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 98
                        echo "              ";
                        $context["column_classes"] = twig_array_merge(($context["column_classes"] ?? null), array(0 => ("views-field-" . $context["field"])));
                        // line 99
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "          ";
                }
                // line 101
                echo "          <td";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => ($context["column_classes"] ?? null)), "method"), "html", null, true));
                echo ">";
                // line 102
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 103
                    echo "<";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">
              ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 105
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "              </";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 110
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 113
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/views/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 117,  268 => 115,  261 => 113,  253 => 110,  249 => 109,  244 => 107,  234 => 105,  230 => 104,  225 => 103,  223 => 102,  219 => 101,  216 => 100,  210 => 99,  207 => 98,  202 => 97,  200 => 93,  198 => 92,  195 => 91,  191 => 90,  186 => 89,  182 => 88,  179 => 87,  174 => 84,  167 => 82,  162 => 79,  152 => 77,  150 => 76,  145 => 74,  141 => 72,  131 => 70,  129 => 69,  125 => 68,  123 => 67,  119 => 66,  116 => 65,  114 => 62,  113 => 60,  111 => 59,  108 => 58,  104 => 57,  100 => 55,  97 => 54,  93 => 52,  89 => 50,  83 => 48,  80 => 47,  74 => 45,  72 => 44,  69 => 43,  66 => 42,  60 => 40,  54 => 38,  52 => 37,  49 => 36,  47 => 35,  43 => 33,);
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
 * Theme override for displaying a view as a table.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 *   - class: HTML classes that can be used to style contextually through CSS.
 * - title : The title of this group of rows.
 * - header: The table header columns.
 *   - attributes: Remaining HTML attributes for the element.
 *   - content: HTML classes to apply to each header cell, indexed by
 *   the header's key.
 *   - default_classes: A flag indicating whether default classes should be
 *     used.
 * - caption_needed: Is the caption tag needed.
 * - caption: The caption for this table.
 * - accessibility_description: Extended description for the table details.
 * - accessibility_summary: Summary for the table details.
 * - rows: Table row items. Rows are keyed by row number.
 *   - attributes: HTML classes to apply to each row.
 *   - columns: Row column items. Columns are keyed by column number.
 *     - attributes: HTML classes to apply to each column.
 *     - content: The column content.
 *   - default_classes: A flag indicating whether default classes should be
 *     used.
 * - responsive: A flag indicating whether table is responsive.
 * - sticky: A flag indicating whether table header is sticky.
 *
 * @see template_preprocess_views_view_table()
 */
#}

<table class=\"table table-hover\">
  {% if caption_needed %}
    <caption>
    {% if caption %}
      {{ caption }}
    {% else %}
      {{ title }}
    {% endif %}
    {% if (summary is not empty) or (description is not empty) %}
      <details>
        {% if summary is not empty %}
          <summary>{{ summary }}</summary>
        {% endif %}
        {% if description is not empty %}
          {{ description }}
        {% endif %}
      </details>
    {% endif %}
    </caption>
  {% endif %}
  {% if header %}
    <thead>
      <tr>
        {% for key, column in header %}
          {% if column.default_classes %}
            {%
              set column_classes = [
                'views-field',
                'views-field-' ~ fields[key],
              ]
            %}
          {% endif %}
          <th{{ column.attributes.addClass(column_classes).setAttribute('scope', 'col') }}>
            {%- if column.wrapper_element -%}
              <{{ column.wrapper_element }}>
                {%- if column.url -%}
                  <a href=\"{{ column.url }}\" title=\"{{ column.title }}\">{{ column.content }}{{ column.sort_indicator }}</a>
                {%- else -%}
                  {{ column.content }}{{ column.sort_indicator }}
                {%- endif -%}
              </{{ column.wrapper_element }}>
            {%- else -%}
              {%- if column.url -%}
                <a href=\"{{ column.url }}\" title=\"{{ column.title }}\">{{ column.content }}{{ column.sort_indicator }}</a>
              {%- else -%}
                {{- column.content }}{{ column.sort_indicator }}
              {%- endif -%}
            {%- endif -%}
          </th>
        {% endfor %}
      </tr>
    </thead>
  {% endif %}
  <tbody>
    {% for row in rows %}
      <tr{{ row.attributes }}>
        {% for key, column in row.columns %}
          {% if column.default_classes %}
            {%
              set column_classes = [
                'views-field'
              ]
            %}
            {% for field in column.fields %}
              {% set column_classes = column_classes|merge(['views-field-' ~ field]) %}
            {% endfor %}
          {% endif %}
          <td{{ column.attributes.addClass(column_classes) }}>
            {%- if column.wrapper_element -%}
              <{{ column.wrapper_element }}>
              {% for content in column.content %}
                {{ content.separator }}{{ content.field_output }}
              {% endfor %}
              </{{ column.wrapper_element }}>
            {%- else -%}
              {% for content in column.content %}
                {{- content.separator }}{{ content.field_output -}}
              {% endfor %}
            {%- endif %}
          </td>
        {% endfor %}
      </tr>
    {% endfor %}
  </tbody>
</table>
", "themes/eminent_sardar/templates/views/views-view-table.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/views/views-view-table.html.twig");
    }
}
