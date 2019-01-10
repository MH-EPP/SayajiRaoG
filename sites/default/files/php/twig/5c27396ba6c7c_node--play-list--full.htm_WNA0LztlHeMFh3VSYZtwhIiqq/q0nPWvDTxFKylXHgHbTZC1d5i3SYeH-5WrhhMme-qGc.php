<?php

/* themes/eminent_sardar/templates/content/node--play-list--full.html.twig */
class __TwigTemplate_142be2b6cccdeed49a2608a74c0eb40e61e2b7d45a7764fc89cfe6e62aa53a1b extends Twig_Template
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
        $tags = array("trans" => 91, "for" => 95, "if" => 96);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans', 'for', 'if'),
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

        // line 73
        echo "<section id=\"exibition_details\">
  <div class=\"container\">
    <div class=\"wow fadeInDown\">
      <p class=\"lead\"> ";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_description", array()), "html", null, true));
        echo "</p>
    </div>
    <article";
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">

      ";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "

      ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      <div";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true));
        echo ">
        <div id=\"playlist\" class=\"carousel slide\" data-ride=\"carousel\">
          <div class=\"carousel-inner col-sm-8\">
            ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_play_list_story", array()), "html", null, true));
        echo "
          </div>
          <div class=\"list-group-header\">
            <span class=\"list-group-title\">
             ";
        // line 91
        echo t("Collection of Related contents.", array());
        // line 92
        echo "            </span>
          </div>
          <ul class=\"list-group col-sm-4\">
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["playlist"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 96
            echo "              <li data-target=\"#playlist\" data-slide-to=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true));
            echo "\" class=\"list-group-item ";
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                echo " active ";
            }
            echo "\">
                <div class=\"exhibitions-icon\">
                ";
            // line 98
            if (($this->getAttribute($context["item"], "media_type", array()) == "audio")) {
                // line 99
                echo "                  <img src=\"/themes/eminent_sardar/images/audio.png\" class=\"img-responsive\">
                ";
            } elseif (($this->getAttribute(            // line 100
$context["item"], "media_type", array()) == "document")) {
                // line 101
                echo "                  <img src=\"/themes/eminent_sardar/images/pdf.png\" class=\"img-responsive\">
                ";
            } elseif (($this->getAttribute(            // line 102
$context["item"], "media_type", array()) == "video")) {
                // line 103
                echo "                  <img src=\"/themes/eminent_sardar/images/video.png\" class=\"img-responsive\">
                ";
            } else {
                // line 105
                echo "                  <img src=\"/themes/eminent_sardar/images/image.png\" class=\"img-responsive\">
                ";
            }
            // line 107
            echo "                </div>
                <h4>";
            // line 108
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
            echo "</h4>
              </li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "          </ul>
          <!-- Controls -->
          <div class=\"carousel-controls\">
            <a class=\"left carousel-control\" href=\"#playlist\" data-slide=\"prev\">
              Previous
            </a>
            <a class=\"right carousel-control\" href=\"#playlist\" data-slide=\"next\">
              Next
            </a>
          </div>
        </div>
      </div>

    </article>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/content/node--play-list--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 111,  138 => 108,  135 => 107,  131 => 105,  127 => 103,  125 => 102,  122 => 101,  120 => 100,  117 => 99,  115 => 98,  105 => 96,  88 => 95,  83 => 92,  81 => 91,  74 => 87,  68 => 84,  63 => 82,  58 => 80,  53 => 78,  48 => 76,  43 => 73,);
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
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
<section id=\"exibition_details\">
  <div class=\"container\">
    <div class=\"wow fadeInDown\">
      <p class=\"lead\"> {{ content.field_description }}</p>
    </div>
    <article{{ attributes }}>

      {{ title_prefix }}

      {{ title_suffix }}

      <div{{ content_attributes }}>
        <div id=\"playlist\" class=\"carousel slide\" data-ride=\"carousel\">
          <div class=\"carousel-inner col-sm-8\">
            {{ content.field_play_list_story }}
          </div>
          <div class=\"list-group-header\">
            <span class=\"list-group-title\">
             {% trans %}Collection of Related contents.{% endtrans %}
            </span>
          </div>
          <ul class=\"list-group col-sm-4\">
            {% for item in playlist %}
              <li data-target=\"#playlist\" data-slide-to=\"{{ loop.index0 }}\" class=\"list-group-item {% if loop.index0 == 0 %} active {% endif %}\">
                <div class=\"exhibitions-icon\">
                {% if item.media_type == \"audio\" %}
                  <img src=\"/themes/eminent_sardar/images/audio.png\" class=\"img-responsive\">
                {% elseif item.media_type == \"document\" %}
                  <img src=\"/themes/eminent_sardar/images/pdf.png\" class=\"img-responsive\">
                {% elseif item.media_type == \"video\" %}
                  <img src=\"/themes/eminent_sardar/images/video.png\" class=\"img-responsive\">
                {% else %}
                  <img src=\"/themes/eminent_sardar/images/image.png\" class=\"img-responsive\">
                {% endif %}
                </div>
                <h4>{{ item.title }}</h4>
              </li>
            {% endfor %}
          </ul>
          <!-- Controls -->
          <div class=\"carousel-controls\">
            <a class=\"left carousel-control\" href=\"#playlist\" data-slide=\"prev\">
              Previous
            </a>
            <a class=\"right carousel-control\" href=\"#playlist\" data-slide=\"next\">
              Next
            </a>
          </div>
        </div>
      </div>

    </article>
  </div>
</section>
", "themes/eminent_sardar/templates/content/node--play-list--full.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/content/node--play-list--full.html.twig");
    }
}
