<?php

/* themes/eminent_sardar/templates/block/block--views-block--home-page-articles-block-1.html.twig */
class __TwigTemplate_921fd6d1f7751bd8e8ae012994b1bb52b024a4c3f4043d800f4b06ce1a3b7591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 31, "block" => 37, "trans" => 46);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'trans'),
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

        // line 28
        echo "<section id=\"feature\" class=\"biography\" >
  <div class = \"container\">
    ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 31
        if (($context["label"] ?? null)) {
            // line 32
            echo "      <div class = \"center wow fadeInDown\">
        <h2>";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
      </div>
    ";
        }
        // line 36
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
    ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "  </div>
</section>
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "      <div class = \"row\">
        <div class=\"features\">
          <div class=\"wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
            <div class=\"tab-wrap\">
              <div class=\"media\">
                ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
              </div>
            </div>
            <a class=\"center-block btn btn-primary\" href=\"#\" data-toggle=\"modal\" data-target=\"#launchquiz\" role=\"button\">";
        // line 46
        echo t("Launch quiz", array());
        echo "</a>
          </div>
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/block/block--views-block--home-page-articles-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 46,  86 => 43,  79 => 38,  76 => 37,  70 => 51,  68 => 37,  63 => 36,  57 => 33,  54 => 32,  52 => 31,  48 => 30,  44 => 28,);
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
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
<section id=\"feature\" class=\"biography\" >
  <div class = \"container\">
    {{ title_prefix }}
    {% if label %}
      <div class = \"center wow fadeInDown\">
        <h2>{{ label }}</h2>
      </div>
    {% endif %}
    {{ title_suffix }}
    {% block content %}
      <div class = \"row\">
        <div class=\"features\">
          <div class=\"wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
            <div class=\"tab-wrap\">
              <div class=\"media\">
                {{ content }}
              </div>
            </div>
            <a class=\"center-block btn btn-primary\" href=\"#\" data-toggle=\"modal\" data-target=\"#launchquiz\" role=\"button\">{% trans %}Launch quiz {% endtrans %}</a>
          </div>
        </div>
      </div>
    {% endblock %}
  </div>
</section>
", "themes/eminent_sardar/templates/block/block--views-block--home-page-articles-block-1.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/block/block--views-block--home-page-articles-block-1.html.twig");
    }
}
