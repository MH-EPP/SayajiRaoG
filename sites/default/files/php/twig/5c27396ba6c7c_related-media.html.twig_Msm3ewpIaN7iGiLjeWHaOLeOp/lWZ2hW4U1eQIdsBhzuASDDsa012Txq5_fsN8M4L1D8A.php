<?php

/* modules/custom/eminent_custom/templates/related-media.html.twig */
class __TwigTemplate_648ba601c273abaadabbdce6304ec8d591bfdb52a17bcdefe5d78232bd89d822 extends Twig_Template
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
        $tags = array("if" => 1, "for" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 1
        if ( !twig_test_empty(($context["media_items"] ?? null))) {
            // line 2
            echo "  <div class=\"center\">
    <h2 class=\"wow svp-block-content animated\" style=\"visibility: visible;\">Related Media</h2>
  </div>
  <div>
    <div class = \"row\">
      ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["media_items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["media_items"]) {
                // line 8
                echo "        <div class=\"col-xs-12 col-md-3\">
          <div class = \"media-teaser\">
            <div class = \"item\">
              <div class = \"thumbnail equal_height\">
                <section class = \"item-body\">
                  <article";
                // line 13
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
                echo ">
                    <img class = \"img-responsive\" src = \"";
                // line 14
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["media_items"], "image", array()), "html", null, true));
                echo "\" />
                    <div class=\"text-center media-teaser-title\">
                      <h2>
                       <a href = \"/media/";
                // line 17
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["media_items"], "media_id", array()), "html", null, true));
                echo "\" title = \" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["media_items"], "title", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["media_items"], "title", array()), "html", null, true));
                echo "</a>
                      </h2>
                    </div>
                    <div class = \"clear-fix\">
                      ";
                // line 21
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["media_items"], "addtotimeline", array()), "html", null, true));
                echo "
                      ";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["media_items"], "addtoplaylist", array()), "html", null, true));
                echo "
                    </div>
                  </article>
                </section>
              </div>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media_items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/eminent_custom/templates/related-media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  88 => 22,  84 => 21,  73 => 17,  67 => 14,  63 => 13,  56 => 8,  52 => 7,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if media_items is not empty %}
  <div class=\"center\">
    <h2 class=\"wow svp-block-content animated\" style=\"visibility: visible;\">Related Media</h2>
  </div>
  <div>
    <div class = \"row\">
      {% for media_items in media_items %}
        <div class=\"col-xs-12 col-md-3\">
          <div class = \"media-teaser\">
            <div class = \"item\">
              <div class = \"thumbnail equal_height\">
                <section class = \"item-body\">
                  <article{{ attributes }}>
                    <img class = \"img-responsive\" src = \"{{ media_items.image }}\" />
                    <div class=\"text-center media-teaser-title\">
                      <h2>
                       <a href = \"/media/{{ media_items.media_id }}\" title = \" {{ media_items.title }}\">{{ media_items.title }}</a>
                      </h2>
                    </div>
                    <div class = \"clear-fix\">
                      {{ media_items.addtotimeline }}
                      {{ media_items.addtoplaylist }}
                    </div>
                  </article>
                </section>
              </div>
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
  </div>
{% endif %}
", "modules/custom/eminent_custom/templates/related-media.html.twig", "/var/www/html/SayajiRao/modules/custom/eminent_custom/templates/related-media.html.twig");
    }
}
