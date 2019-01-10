<?php

/* {# inline_template_start #}<div class="recent-work-wrap">
  {{ field_playlist_image }}
<div class="overlay">
   <div class="recent-work-inner">
       <h3>{{ title }}</h3>
      <p> {{ field_description }} </p>
       <a class="preview" href= {{ path }}><i class="fa fa-eye"></i> View</a>
  </div>
</div>
</div> */
class __TwigTemplate_da6617cd6bfd0342c6bb2abb6f2d39a74dd1fdd09dd715f133a35dabf079821e extends Twig_Template
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

        // line 1
        echo "<div class=\"recent-work-wrap\">
  ";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_playlist_image"] ?? null), "html", null, true));
        echo "
<div class=\"overlay\">
   <div class=\"recent-work-inner\">
       <h3>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h3>
      <p> ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_description"] ?? null), "html", null, true));
        echo " </p>
       <a class=\"preview\" href= ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["path"] ?? null), "html", null, true));
        echo "><i class=\"fa fa-eye\"></i> View</a>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"recent-work-wrap\">
  {{ field_playlist_image }}
<div class=\"overlay\">
   <div class=\"recent-work-inner\">
       <h3>{{ title }}</h3>
      <p> {{ field_description }} </p>
       <a class=\"preview\" href= {{ path }}><i class=\"fa fa-eye\"></i> View</a>
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
        return array (  69 => 7,  65 => 6,  61 => 5,  55 => 2,  52 => 1,);
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
  {{ field_playlist_image }}
<div class=\"overlay\">
   <div class=\"recent-work-inner\">
       <h3>{{ title }}</h3>
      <p> {{ field_description }} </p>
       <a class=\"preview\" href= {{ path }}><i class=\"fa fa-eye\"></i> View</a>
  </div>
</div>
</div>", "{# inline_template_start #}<div class=\"recent-work-wrap\">
  {{ field_playlist_image }}
<div class=\"overlay\">
   <div class=\"recent-work-inner\">
       <h3>{{ title }}</h3>
      <p> {{ field_description }} </p>
       <a class=\"preview\" href= {{ path }}><i class=\"fa fa-eye\"></i> View</a>
  </div>
</div>
</div>", "");
    }
}
