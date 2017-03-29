<?php

/* form.html.twig */
class __TwigTemplate_1fcc4746a32424e815614d491574b6d8bb7bc212f747c2c766dbeae591521375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
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
        // line 3
        $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 4
        $context["template_body_classes"] = "is-singular logged-in not-front-page page page-id-2 page-template-default customize-support not-scrolled";
        // line 5
        $context["singular"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
   <article class=\"page type-page status-publish hentry\">
      <div class=\"entry-media\">
         <figure class=\"post-thumbnail\" itemprop=\"image\">
           <a href=\"";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">
             ";
        // line 12
        if (($context["banner"] ?? null)) {
            // line 13
            echo "               ";
            echo $this->getAttribute($this->getAttribute(($context["banner"] ?? null), "cropZoom", array(0 => 480, 1 => 640), "method"), "html", array(0 => "", 1 => "", 2 => "attachment-thumbnail size-thumbnail wp-post-image"), "method");
            echo "
             ";
        } else {
            // line 15
            echo "               <img class=\"attachment-thumbnail size-thumbnail wp-post-image\" src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute(($context["site"] ?? null), "global_featured_image", array());
            echo "\">
             ";
        }
        // line 17
        echo "           </a>
         </figure>
      </div>
      <div class=\"entry-inner\">
         <header class=\"entry-header\">
            <h1 class=\"entry-title\">";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h1>
         </header>
         <div class=\"entry-content contact-form\" itemprop=\"description\">
           ";
        // line 25
        echo ($context["content"] ?? null);
        echo "
           ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "enabled", array())) {
            // line 27
            echo "           ";
            $this->loadTemplate("forms/form.html.twig", "form.html.twig", 27)->display($context);
            // line 28
            echo "           ";
        }
        // line 29
        echo "         </div>
      </div>
   </article>
</main>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  86 => 28,  83 => 27,  81 => 26,  77 => 25,  71 => 22,  64 => 17,  56 => 15,  50 => 13,  48 => 12,  44 => 11,  38 => 7,  35 => 6,  31 => 1,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
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
         <div class=\"entry-content contact-form\" itemprop=\"description\">
           {{ content }}
           {% if config.plugins.form.enabled %}
           {% include \"forms/form.html.twig\" %}
           {% endif  %}
         </div>
      </div>
   </article>
</main>
{% endblock %}
", "form.html.twig", "C:\\laragon\\www\\farmchinski\\user\\themes\\receptar\\templates\\form.html.twig");
    }
}
