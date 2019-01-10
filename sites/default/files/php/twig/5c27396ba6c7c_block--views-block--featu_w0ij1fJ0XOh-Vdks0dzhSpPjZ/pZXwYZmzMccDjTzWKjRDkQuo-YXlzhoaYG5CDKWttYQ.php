<?php

/* themes/eminent_sardar/templates/block/block--views-block--featured-time-line-collection-block-1.html.twig */
class __TwigTemplate_7be734bc5da04cd1a5c71f5e6fdfea305d79580abad83413a123675d751bcdce extends Twig_Template
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
        $tags = array("if" => 32, "block" => 39);
        $filters = array("trans" => 45);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array('trans'),
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
        echo "<section id=\"timeline\">
  <div class=\"container\">
    <div class=\"team\">
      ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 32
        if (($context["label"] ?? null)) {
            // line 33
            echo "      <div class=\"center wow home-timeline\">
        <h2";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h2>
      </div>
      ";
        }
        // line 37
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
      <div";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
        ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "      </div>
    </div>
    <a class=\"btn btn-primary tiext-center\" href=\"";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["timelines_url"] ?? null), "html", null, true));
        echo "\">
      ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("All Timelines")));
        echo "
    </a>
  </div>

</section>
";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/block/block--views-block--featured-time-line-collection-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  95 => 39,  85 => 45,  81 => 44,  77 => 42,  75 => 39,  71 => 38,  66 => 37,  58 => 34,  55 => 33,  53 => 32,  49 => 31,  44 => 28,);
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
<section id=\"timeline\">
  <div class=\"container\">
    <div class=\"team\">
      {{ title_prefix }}
      {% if label %}
      <div class=\"center wow home-timeline\">
        <h2{{ title_attributes }}>{{ label }}</h2>
      </div>
      {% endif %}
      {{ title_suffix }}
      <div{{ attributes }}>
        {% block content %}
          {{ content }}
        {% endblock %}
      </div>
    </div>
    <a class=\"btn btn-primary tiext-center\" href=\"{{ timelines_url }}\">
      {{ 'All Timelines'|trans }}
    </a>
  </div>

</section>
", "themes/eminent_sardar/templates/block/block--views-block--featured-time-line-collection-block-1.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/block/block--views-block--featured-time-line-collection-block-1.html.twig");
    }
}
