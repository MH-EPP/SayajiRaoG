<?php

/* {# inline_template_start #}<div class="recent-work-wrap">
  {{ field_time_line_collection_image  }}
<div class="overlay">
   <div class="recent-work-inner">
       <h3>{{ title }}</h3>
       <a class="preview" href= "{{ view_node }}" tabindex="0">
         {% trans %}
            Read Story
          {% endtrans %}
      </a>
  </div>
</div>
</div> */
class __TwigTemplate_b2d480f1c5217e0475376e13aad8a3d845b6e35ec2a688e35630862081b2d8f7 extends Twig_Template
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
        $tags = array("trans" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('trans'),
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
        echo "<div class=\"recent-work-wrap\">
  ";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_time_line_collection_image"] ?? null), "html", null, true));
        echo "
<div class=\"overlay\">
   <div class=\"recent-work-inner\">
       <h3>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h3>
       <a class=\"preview\" href= \"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\" tabindex=\"0\">
         ";
        // line 7
        echo t("Read Story", array());
        // line 10
        echo "      </a>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"recent-work-wrap\">
  {{ field_time_line_collection_image  }}
<div class=\"overlay\">
   <div class=\"recent-work-inner\">
       <h3>{{ title }}</h3>
       <a class=\"preview\" href= \"{{ view_node }}\" tabindex=\"0\">
         {% trans %}
            Read Story
          {% endtrans %}
      </a>
  </div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  72 => 7,  68 => 6,  64 => 5,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<div class=\"recent-work-wrap\">
  {{ field_time_line_collection_image  }}
<div class=\"overlay\">
   <div class=\"recent-work-inner\">
       <h3>{{ title }}</h3>
       <a class=\"preview\" href= \"{{ view_node }}\" tabindex=\"0\">
         {% trans %}
            Read Story
          {% endtrans %}
      </a>
  </div>
</div>
</div>", "{# inline_template_start #}<div class=\"recent-work-wrap\">
  {{ field_time_line_collection_image  }}
<div class=\"overlay\">
   <div class=\"recent-work-inner\">
       <h3>{{ title }}</h3>
       <a class=\"preview\" href= \"{{ view_node }}\" tabindex=\"0\">
         {% trans %}
            Read Story
          {% endtrans %}
      </a>
  </div>
</div>
</div>", "");
    }
}
