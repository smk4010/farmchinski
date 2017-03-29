<?php

/* default.html.twig */
class __TwigTemplate_6ee4b58f52d0fdbe034925400dfceef850342b8db1794bba7245771f5da0682d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
        $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 3
        $context["template_body_classes"] = "is-singular logged-in not-front-page page page-id-2 page-template-default customize-support not-scrolled";
        // line 4
        $context["singular"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
   <article class=\"page type-page status-publish hentry\">
      <div class=\"entry-media\">
         <figure class=\"post-thumbnail\" itemprop=\"image\">
           <a href=\"";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">
             ";
        // line 11
        if (($context["banner"] ?? null)) {
            // line 12
            echo "               ";
            echo $this->getAttribute($this->getAttribute(($context["banner"] ?? null), "cropZoom", array(0 => 480, 1 => 640), "method"), "html", array(0 => "", 1 => "", 2 => "attachment-thumbnail size-thumbnail wp-post-image"), "method");
            echo "
             ";
        } else {
            // line 14
            echo "               <img class=\"attachment-thumbnail size-thumbnail wp-post-image\" src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute(($context["site"] ?? null), "global_featured_image", array());
            echo "\">
             ";
        }
        // line 16
        echo "           </a>
         </figure>
      </div>
      <div class=\"entry-inner\">
         <header class=\"entry-header\">
            <h1 class=\"entry-title\">";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h1>
         </header>
         <div class=\"entry-content\" itemprop=\"description\">
            ";
        // line 24
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
         </div>
      </div>
   </article>
</main>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  71 => 21,  64 => 16,  56 => 14,  50 => 12,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
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
{% set banner = page.media.images|first %}
{% set template_body_classes = 'is-singular logged-in not-front-page page page-id-2 page-template-default customize-support not-scrolled' %}
{% set singular = true %}
{% block content %}
<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
   <article class=\"page type-page status-publish hentry\">
      <div class=\"entry-media\">
         <figure class=\"post-thumbnail\" itemprop=\"image\">
           <a href=\"{{ page.url }}\">
             {% if banner %}
               {{ banner.cropZoom(480,640).html('','', 'attachment-thumbnail size-thumbnail wp-post-image') }}
             {% else %}
               <img class=\"attachment-thumbnail size-thumbnail wp-post-image\" src=\"{{ theme_url }}/images/{{ site.global_featured_image }}\">
             {% endif %}
           </a>
         </figure>
      </div>
      <div class=\"entry-inner\">
         <header class=\"entry-header\">
            <h1 class=\"entry-title\">{{ page.header.title }}</h1>
         </header>
         <div class=\"entry-content\" itemprop=\"description\">
            {{ page.content }}
         </div>
      </div>
   </article>
</main>
{% endblock %}
", "default.html.twig", "C:\\laragon\\www\\farmchinski\\user\\themes\\receptar\\templates\\default.html.twig");
    }
}
