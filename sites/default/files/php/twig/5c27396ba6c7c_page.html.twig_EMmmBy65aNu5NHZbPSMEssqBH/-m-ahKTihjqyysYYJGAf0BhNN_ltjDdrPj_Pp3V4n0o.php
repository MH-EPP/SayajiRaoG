<?php

/* themes/eminent_sardar/templates/layout/page.html.twig */
class __TwigTemplate_dcf2adcb906e23c970f2601a74f282d00ff99a36109a08f5eb9c4f2dfe4fd009 extends Twig_Template
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
        $tags = array("if" => 72);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 42
        echo "
<!--header-->
<header id=\"header\"  class=\"navbar-fixed-top\">
  <nav class=\"navbar navbar-inverse\" role=\"banner\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo", array()), "html", null, true));
        echo "
      </div>

      <div class=\"collapse navbar-collapse navbar-right\">
         ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
      </div>

    </div><!--/.container-->
  </nav><!--/nav-->

</header>
<!--/header-->
<div class=\"container\">
  <div class = \"center\">
    ";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
        echo "
  </div>
</div>

";
        // line 72
        if (($context["show_filters"] ?? null)) {
            // line 73
            echo "  ";
            if ($this->getAttribute(($context["page"] ?? null), "search_filters", array())) {
                // line 74
                echo "    <div class = \"container search-filters\">
      <div class=\"widget search searchresult-form\">
        ";
                // line 76
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search_filters", array()), "html", null, true));
                echo "
        ";
                // line 77
                if ($this->getAttribute(($context["page"] ?? null), "search_facets", array())) {
                    // line 78
                    echo "          ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search_facets", array()), "html", null, true));
                    echo "
        ";
                }
                // line 80
                echo "      </div>
    </div>
  ";
            }
        }
        // line 84
        echo "
<div class=\"layout-container container\">


  ";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
  ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "

  ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

  ";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 99
        echo "
    <div class=\"layout-content\">
      ";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 103
        echo "
    ";
        // line 104
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 105
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 109
        echo "
    ";
        // line 110
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 111
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 115
        echo "
  </main>

</div>";
        // line 119
        echo "
<div class=\"container\">
 ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "orgnisations", array()), "html", null, true));
        echo "
</div>

<section id=\"bottom\">
  <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
    <div class=\"row\">

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
          ";
        // line 130
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first_column", array()), "html", null, true));
        echo "
          </div>
        </div><!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            ";
        // line 136
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second_column", array()), "html", null, true));
        echo "
          </div>
        </div><!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            ";
        // line 142
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third_column", array()), "html", null, true));
        echo "
          </div>
        </div><!--/.col-md-3-->
    </div>
  </div>
</section><!--/#bottom-->

<footer id=\"footer\" class=\"midnight-blue ";
        // line 149
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_class"] ?? null), "html", null, true));
        echo "\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        ";
        // line 153
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_footer_first", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</footer><!--/#footer-->
";
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 153,  227 => 149,  217 => 142,  208 => 136,  199 => 130,  187 => 121,  183 => 119,  178 => 115,  172 => 112,  169 => 111,  167 => 110,  164 => 109,  158 => 106,  155 => 105,  153 => 104,  150 => 103,  146 => 101,  142 => 99,  136 => 95,  131 => 93,  126 => 91,  121 => 89,  117 => 88,  111 => 84,  105 => 80,  99 => 78,  97 => 77,  93 => 76,  89 => 74,  86 => 73,  84 => 72,  77 => 68,  64 => 58,  57 => 54,  43 => 42,);
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
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.main_navigation: Items for the main menu region.
 * - page.header: Items for the header region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<!--header-->
<header id=\"header\"  class=\"navbar-fixed-top\">
  <nav class=\"navbar navbar-inverse\" role=\"banner\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        {{ page.logo }}
      </div>

      <div class=\"collapse navbar-collapse navbar-right\">
         {{ page.header }}
      </div>

    </div><!--/.container-->
  </nav><!--/nav-->

</header>
<!--/header-->
<div class=\"container\">
  <div class = \"center\">
    {{ page.page_title }}
  </div>
</div>

{% if show_filters %}
  {% if page.search_filters %}
    <div class = \"container search-filters\">
      <div class=\"widget search searchresult-form\">
        {{ page.search_filters }}
        {% if page.search_facets %}
          {{ page.search_facets }}
        {% endif %}
      </div>
    </div>
  {% endif %}
{% endif %}

<div class=\"layout-container container\">


  {{ page.primary_menu }}
  {{ page.secondary_menu }}

  {{ page.breadcrumb }}

  {{ page.highlighted }}

  {{ page.help }}

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"layout-content\">
      {{ page.content }}
    </div>{# /.layout-content #}

    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

</div>{# /.layout-container #}

<div class=\"container\">
 {{ page.orgnisations }}
</div>

<section id=\"bottom\">
  <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
    <div class=\"row\">

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
          {{ page.footer_first_column}}
          </div>
        </div><!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            {{ page.footer_second_column}}
          </div>
        </div><!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            {{ page.footer_third_column}}
          </div>
        </div><!--/.col-md-3-->
    </div>
  </div>
</section><!--/#bottom-->

<footer id=\"footer\" class=\"midnight-blue {{ user_class }}\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        {{ page.bottom_footer_first}}
      </div>
    </div>
  </div>
</footer><!--/#footer-->
", "themes/eminent_sardar/templates/layout/page.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/layout/page.html.twig");
    }
}
