<?php

/* themes/eminent_sardar/templates/content/media.html.twig */
class __TwigTemplate_45d00d0bff2385e44aeb52915212490c4d028797cbe7971e4a91106cf49b5641 extends Twig_Template
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
        $tags = array("if" => 22);
        $filters = array("without" => 63);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('without'),
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

        // line 15
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  <section class=\"media_details\" id=\"media_details\">
    <div class=\"mediablock\">
      <div class=\"row\">
            
        <div class=\"col-md-12\">
          <div class=\"media-preview \">
            ";
        // line 22
        if ((($context["media_type"] ?? null) == "audio")) {
            // line 23
            echo "              <div>
                ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_media_audio", array()), "html", null, true));
            echo "
              </div>
            ";
        } elseif ((        // line 26
($context["media_type"] ?? null) == "document")) {
            // line 27
            echo "              <div class=\"pdf-holder-ex\">
                ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_media_document", array()), "html", null, true));
            echo "
              </div>
            ";
        } elseif ((        // line 30
($context["media_type"] ?? null) == "video")) {
            // line 31
            echo "              <div>
                ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_media_video", array()), "html", null, true));
            echo "
                ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_media_video_embed_field", array()), "html", null, true));
            echo "
              </div>
            ";
        } else {
            // line 36
            echo "              <section class=\"image\">
                ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_media_image", array()), "html", null, true));
            echo "
              </section>
            ";
        }
        // line 40
        echo "            <div class=\"clearfix\"></div>
            <div class=\"dc-owner\">
              <span>";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_dc_owner", array()), "html", null, true));
        echo "</span>
            </div>
            <div class=\"clearfix\"></div>
          </div>
        </div>


         <div class=\"col-md-12\">
          <div class=\"media-preview-description \">
            <p><strong>";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_dc_description", array()), "html", null, true));
        echo "</strong></p>
            <div class=\"panel-group\" id=\"metadata\" role=\"tablist\" aria-multiselectable=\"true\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                  <h4 class=\"panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#metadata\" href=\"#col-metadata\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                      View Meta Data
                    </a>
                  </h4>
                </div>
                <div id=\"col-metadata\" class=\"panel-collapse collapse \" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                  <div class=\"panel-body\">
                    ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "name", "field_dc_description", "field_media_video", "field_media_audio", "field_media_document", "field_media_image", "field_media_video_embed_field", "field_dc_owner", "field_dccover"), "html", null, true));
        echo "
                    <div class=\"media-feedback\">
                      <h3>Feedback Form</h3>
                      ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feedback_form"] ?? null), "html", null, true));
        echo "
                    </div>

                  </div>
                </div>
              </div>
            </div>
            ";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["addtoplaylist"] ?? null), "html", null, true));
        echo "
            ";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["addtotimeline"] ?? null), "html", null, true));
        echo "
            ";
        // line 75
        if ($this->getAttribute(($context["media_referred_timeline"] ?? null), "view_title", array())) {
            // line 76
            echo "              <div class=\"clearfix\">
                <h2>";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["media_referred_timeline"] ?? null), "view_title", array()), "html", null, true));
            echo "</h2>
                ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["media_referred_timeline"] ?? null), "view_output", array()), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 81
        echo "            ";
        if ($this->getAttribute(($context["media_referred_playlist"] ?? null), "view_title", array())) {
            // line 82
            echo "              <div class=\"clearfix\">
                <h2>";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["media_referred_playlist"] ?? null), "view_title", array()), "html", null, true));
            echo "</h2>
                ";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["media_referred_playlist"] ?? null), "view_output", array()), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 87
        echo "          </div>
        </div>
       
      </div>
    </div>
  </section>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/eminent_sardar/templates/content/media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 87,  178 => 84,  174 => 83,  171 => 82,  168 => 81,  162 => 78,  158 => 77,  155 => 76,  153 => 75,  149 => 74,  145 => 73,  135 => 66,  129 => 63,  114 => 51,  102 => 42,  98 => 40,  92 => 37,  89 => 36,  83 => 33,  79 => 32,  76 => 31,  74 => 30,  69 => 28,  66 => 27,  64 => 26,  59 => 24,  56 => 23,  54 => 22,  43 => 15,);
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
 * Default theme implementation to present a media entity.
 *
 * Available variables:
 * - name: Name of the media.
 * - content: Media content.
 *
 * @see template_preprocess_media()
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  <section class=\"media_details\" id=\"media_details\">
    <div class=\"mediablock\">
      <div class=\"row\">
            
        <div class=\"col-md-12\">
          <div class=\"media-preview \">
            {% if media_type == \"audio\" %}
              <div>
                {{ content.field_media_audio }}
              </div>
            {% elseif media_type == \"document\" %}
              <div class=\"pdf-holder-ex\">
                {{ content.field_media_document }}
              </div>
            {% elseif media_type == \"video\" %}
              <div>
                {{ content.field_media_video }}
                {{ content.field_media_video_embed_field }}
              </div>
            {% else %}
              <section class=\"image\">
                {{ content.field_media_image }}
              </section>
            {% endif %}
            <div class=\"clearfix\"></div>
            <div class=\"dc-owner\">
              <span>{{ content.field_dc_owner }}</span>
            </div>
            <div class=\"clearfix\"></div>
          </div>
        </div>


         <div class=\"col-md-12\">
          <div class=\"media-preview-description \">
            <p><strong>{{ content.field_dc_description }}</strong></p>
            <div class=\"panel-group\" id=\"metadata\" role=\"tablist\" aria-multiselectable=\"true\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                  <h4 class=\"panel-title\">
                    <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#metadata\" href=\"#col-metadata\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                      View Meta Data
                    </a>
                  </h4>
                </div>
                <div id=\"col-metadata\" class=\"panel-collapse collapse \" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                  <div class=\"panel-body\">
                    {{ content|without('name', 'field_dc_description', 'field_media_video', 'field_media_audio', 'field_media_document', 'field_media_image', 'field_media_video_embed_field', 'field_dc_owner','field_dccover')}}
                    <div class=\"media-feedback\">
                      <h3>Feedback Form</h3>
                      {{ feedback_form }}
                    </div>

                  </div>
                </div>
              </div>
            </div>
            {{ addtoplaylist }}
            {{ addtotimeline }}
            {% if media_referred_timeline.view_title %}
              <div class=\"clearfix\">
                <h2>{{ media_referred_timeline.view_title }}</h2>
                {{ media_referred_timeline.view_output }}
              </div>
            {% endif %}
            {% if media_referred_playlist.view_title %}
              <div class=\"clearfix\">
                <h2>{{ media_referred_playlist.view_title }}</h2>
                {{ media_referred_playlist.view_output }}
              </div>
            {% endif %}
          </div>
        </div>
       
      </div>
    </div>
  </section>
</article>
", "themes/eminent_sardar/templates/content/media.html.twig", "/var/www/html/SayajiRao/themes/eminent_sardar/templates/content/media.html.twig");
    }
}
