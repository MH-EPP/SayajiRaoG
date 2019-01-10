<?php

/* themes/eminent_sardar/templates/layout/page--front.html.twig */
class __TwigTemplate_9ad3391594f60b9604c9911e60c7806c92808abc0f55224078f14295b740593d extends Twig_Template
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
        $tags = array("trans" => 135);
        $filters = array();
        $functions = array("url" => 142);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
                array(),
                array('url')
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
        echo "<!--header-->
<header id=\"header\" class=\"navbar-fixed-top\">
  <nav class=\"navbar navbar-inverse \" role=\"banner\">
    <div class=\"container\">
      <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo", array()), "html", null, true));
        echo "
      </div>

      <div class=\"collapse navbar-collapse navbar-right\">
         ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
      </div>

    </div><!--/.container-->
  </nav><!--/nav-->

</header>
<!--/header-->

";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_banner", array()), "html", null, true));
        echo "

";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_search", array()), "html", null, true));
        echo "

";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_middle", array()), "html", null, true));
        echo "

";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_timelines", array()), "html", null, true));
        echo "

";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_exhibitions", array()), "html", null, true));
        echo "

<section id=\"conatcat-info\">
  <div class = \"row no-container-row\">
    ";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
        echo "
    ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feedback"] ?? null), "html", null, true));
        echo "
  </div>
  <div class=\"clearfix\"></div>
</section>
<!--/#conatcat-info-->

";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "orgnisations", array()), "html", null, true));
        echo "


<section id=\"bottom\">
  <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
    <div class=\"row\">

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
          ";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first_column", array()), "html", null, true));
        echo "
          </div>
        </div><!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            ";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second_column", array()), "html", null, true));
        echo "
          </div>
        </div><!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third_column", array()), "html", null, true));
        echo "
          </div>
        </div><!--/.col-md-3-->
    </div>
  </div>
</section><!--/#bottom-->

<footer id=\"footer\" class=\"midnight-blue ";
        // line 113
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_class"] ?? null), "html", null, true));
        echo "\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">
        ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_footer_first", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_footer_second", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</footer><!--/#footer-->



<!-- Quiz modal -->
<div class=\"modal fade quick-quiz\" id=\"launchquiz\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">
          ";
        // line 135
        echo t("Short Quiz", array());
        // line 138
        echo "        </h4>
      </div>
      <div class=\"modal-body\">
        <div class = \"quiz-image\">
          <img src = \"";
        // line 142
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "/themes/eminent_sardar/images/epp_quiz.png\" class = \"img-responsive\">
        </div>
        ";
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_quiz", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 144,  194 => 142,  188 => 138,  186 => 135,  168 => 120,  162 => 117,  155 => 113,  145 => 106,  136 => 100,  127 => 94,  115 => 85,  106 => 79,  102 => 78,  95 => 74,  90 => 72,  85 => 70,  80 => 68,  75 => 66,  63 => 57,  56 => 53,  43 => 42,);
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
  <nav class=\"navbar navbar-inverse \" role=\"banner\">
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

{{ page.home_banner }}

{{ page.home_search }}

{{ page.content_middle }}

{{ page.home_timelines }}

{{ page.home_exhibitions }}

<section id=\"conatcat-info\">
  <div class = \"row no-container-row\">
    {{ page.content_bottom }}
    {{ feedback }}
  </div>
  <div class=\"clearfix\"></div>
</section>
<!--/#conatcat-info-->

{{ page.orgnisations }}


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



<!-- Quiz modal -->
<div class=\"modal fade quick-quiz\" id=\"launchquiz\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">
          {% trans %}
            Short Quiz
          {% endtrans %}
        </h4>
      </div>
      <div class=\"modal-body\">
        <div class = \"quiz-image\">
          <img src = \"{{ url('<front>')}}/themes/eminent_sardar/images/epp_quiz.png\" class = \"img-responsive\">
        </div>
        {{ page.home_quiz }}
      </div>
    </div>
  </div>
</div>
", "themes/eminent_sardar/templates/layout/page--front.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/layout/page--front.html.twig");
    }
}
