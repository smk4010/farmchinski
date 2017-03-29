<?php

/* sidebar/widget.html.twig */
class __TwigTemplate_0fdc809e08bb93ce83d1fc0a30370cbd8d024fd4761522963738856141b7e081 extends Twig_Template
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
        // line 1
        echo "<div class=\"widget ";
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "css_suffix", array())) {
            echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "css_suffix", array());
        } else {
            echo "HTML";
        }
        echo "\">
  <h2 class=\"widget-title\">";
        // line 2
        echo $this->getAttribute(($context["module"] ?? null), "title", array());
        echo "</h2>
  ";
        // line 3
        echo $this->getAttribute(($context["module"] ?? null), "content", array());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"widget {% if module.header.css_suffix %}{{ module.header.css_suffix }}{% else %}HTML{% endif %}\">
  <h2 class=\"widget-title\">{{ module.title }}</h2>
  {{ module.content }}
</div>
", "sidebar/widget.html.twig", "C:\\laragon\\www\\farmchinski\\user\\themes\\receptar\\templates\\sidebar\\widget.html.twig");
    }
}
