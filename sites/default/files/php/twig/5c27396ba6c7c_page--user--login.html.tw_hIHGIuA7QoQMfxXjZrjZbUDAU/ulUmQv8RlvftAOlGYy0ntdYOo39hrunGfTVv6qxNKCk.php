<?php

/* themes/eminent_sardar/templates/layout/page--user--login.html.twig */
class __TwigTemplate_9234a730a64f1aadca3afed5db8516da5fc27974d19e5fccb996598de9a5d560 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
<header id=\"header\" class=\"navbar-fixed-top\">
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

<div class=\"layout-container container\">
  <div class=\"col-sm-6 col-sm-offset-3\">


    ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
    ";
        // line 77
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "

    ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "

    ";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

    ";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 87
        echo "
      <div class=\"layout-content\">
        ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      </div>";
        // line 91
        echo "
    </main>

  </div>
</div>";
        // line 96
        echo "
<section id=\"bottom\">
  <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
    <div class=\"row\">
        
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
          ";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first_column", array()), "html", null, true));
        echo "
          </div>
        </div><!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            ";
        // line 109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second_column", array()), "html", null, true));
        echo "
          </div>
        </div><!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            ";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third_column", array()), "html", null, true));
        echo "
          </div>
        </div><!--/.col-md-3-->
    </div>
  </div>
</section><!--/#bottom-->

<footer id=\"footer\" class=\"midnight-blue ";
        // line 122
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_class"] ?? null), "html", null, true));
        echo "\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">
        ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_footer_first", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_footer_second", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</footer><!--/#footer-->
";
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/layout/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 129,  171 => 126,  164 => 122,  154 => 115,  145 => 109,  136 => 103,  127 => 96,  121 => 91,  117 => 89,  113 => 87,  107 => 83,  102 => 81,  97 => 79,  92 => 77,  88 => 76,  77 => 68,  64 => 58,  57 => 54,  43 => 42,);
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
<header id=\"header\" class=\"navbar-fixed-top\">
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

<div class=\"layout-container container\">
  <div class=\"col-sm-6 col-sm-offset-3\">


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

    </main>

  </div>
</div>{# /.layout-container #}

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
      <div class=\"col-sm-6\">
        {{ page.bottom_footer_first}}
      </div>
      <div class=\"col-sm-6\">
        {{ page.bottom_footer_second}}
      </div>
    </div>
  </div>
</footer><!--/#footer-->
", "themes/eminent_sardar/templates/layout/page--user--login.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/layout/page--user--login.html.twig");
    }
}
