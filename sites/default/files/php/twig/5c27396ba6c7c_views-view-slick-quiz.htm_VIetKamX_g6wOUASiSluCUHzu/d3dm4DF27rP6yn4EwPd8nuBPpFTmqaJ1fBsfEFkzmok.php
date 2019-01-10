<?php

/* themes/eminent_sardar/templates/views/views-view-slick-quiz.html.twig */
class __TwigTemplate_5ee90fbee4ae4dba9e7d3897e768386c231f5d381c7376801a0a1cc4847db3ef extends Twig_Template
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
        $tags = array("set" => 18, "trans" => 28);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'trans'),
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

        // line 18
        $context["classes"] = array(0 => $this->getAttribute(        // line 19
($context["options"] ?? null), "classes", array()));
        // line 22
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <div id=\"slickQuiz\">
    <h3 class=\"quizName\"><!-- where the quiz name goes --></h3>
    <div class=\"quizArea\">
      <div class=\"quizHeader\">
        <!-- where the quiz main copy goes -->
          <a class=\"startQuiz\" href=\"#\">";
        // line 28
        echo t("Get started!", array());
        echo "</a>
      </div>
      <!-- where the quiz gets built -->
    </div>
    <div class=\"quizResults\">
      <div class=\"quizResultsCopy center\">
        <!-- where the quiz result copy goes -->
      </div>
      <h3 class=\"quizScore\">
        ";
        // line 37
        echo t("You Scored", array());
        // line 40
        echo "        :
        <span><!-- where the quiz score goes --></span></h3>
      <h3 class=\"quizLevel\"><strong>
        ";
        // line 43
        echo t("Ranking", array());
        // line 46
        echo "        :</strong> <span><!-- where the quiz ranking level goes --></span></h3>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/views/views-view-slick-quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 46,  75 => 43,  70 => 40,  68 => 37,  56 => 28,  46 => 22,  44 => 19,  43 => 18,);
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
 * Default theme implementation for Views to output a TARDIS archive.
 *
 * Available variables:
 * - options: View plugin style options:
 *   - classes: CSS classes.
 *   - nesting: Whether months should be nested inside years.
 *   - path: Link path. Eg.: example.com/TARDIS/2016/03
 *   - time_pool: Two-dimension array containing years and months with content.
 *
 * @see template_preprocess_views_view_tardis()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    options.classes
  ]
%}
<div{{ attributes.addClass(classes) }}>
  <div id=\"slickQuiz\">
    <h3 class=\"quizName\"><!-- where the quiz name goes --></h3>
    <div class=\"quizArea\">
      <div class=\"quizHeader\">
        <!-- where the quiz main copy goes -->
          <a class=\"startQuiz\" href=\"#\">{% trans %}Get started!{% endtrans %}</a>
      </div>
      <!-- where the quiz gets built -->
    </div>
    <div class=\"quizResults\">
      <div class=\"quizResultsCopy center\">
        <!-- where the quiz result copy goes -->
      </div>
      <h3 class=\"quizScore\">
        {% trans %}
          You Scored
        {% endtrans %}
        :
        <span><!-- where the quiz score goes --></span></h3>
      <h3 class=\"quizLevel\"><strong>
        {% trans %}
          Ranking
        {% endtrans %}
        :</strong> <span><!-- where the quiz ranking level goes --></span></h3>
    </div>
  </div>
</div>
", "themes/eminent_sardar/templates/views/views-view-slick-quiz.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/views/views-view-slick-quiz.html.twig");
    }
}
