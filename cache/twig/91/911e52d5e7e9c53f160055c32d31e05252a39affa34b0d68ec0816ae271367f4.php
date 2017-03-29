<?php

/* error.html.twig */
class __TwigTemplate_4645cfb8b70182c07f547764974768a8ca0c5c8e21d49981f87af267f53d85ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["template_body_classes"] = "error404 is-not-singular not-front-page not-scrolled";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
  <section id=\"error-404\" class=\"error-404\">
    <header class=\"page-header\">
      <h1 class=\"page-title\">Error ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "http_response_code", array());
        echo "</h1>
    </header>
    <p>";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
  </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  39 => 7,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set template_body_classes = 'error404 is-not-singular not-front-page not-scrolled' %}
{% block content %}
<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
  <section id=\"error-404\" class=\"error-404\">
    <header class=\"page-header\">
      <h1 class=\"page-title\">Error {{ page.header.http_response_code }}</h1>
    </header>
    <p>{{ page.content }}</p>
  </section>
</main>
{% endblock %}
", "error.html.twig", "C:\\laragon\\www\\farmchinski\\user\\themes\\receptar\\templates\\error.html.twig");
    }
}
