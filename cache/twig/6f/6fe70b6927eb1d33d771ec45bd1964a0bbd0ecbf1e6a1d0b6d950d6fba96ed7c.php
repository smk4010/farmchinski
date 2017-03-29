<?php

/* partials/base.html.twig */
class __TwigTemplate_03d6dda1a3863993c854b36af0fabc436832a7ca1d34512738febbd54b23416c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\" class='";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
  ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>
<body id=\"top\" class=\"";
        // line 44
        if (($context["template_body_classes"] ?? null)) {
            echo ($context["template_body_classes"] ?? null);
        } else {
            echo "fl-builder blog has-featured-posts is-not-singular";
        }
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
  <div id=\"page\" class=\"hfeed site\">
    <div class=\"site-inner\">
      ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "      ";
        $this->displayBlock('slider', $context, $blocks);
        // line 51
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
      ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "  </div>
</div>

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo "</title>
  ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />
  <link rel='stylesheet' id='receptar-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%7CRoboto+Condensed%3A400%2C300%7CAlegreya%3A400%2C700&#038;subset&#038;ver=44d4db587900ff753163772c910c3b34' type='text/css' media='all'/>
  <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
  <meta name=\"google-translate-customization\" content=\"";
        // line 14
        echo $this->getAttribute(($context["site"] ?? null), "google_translate_token", array());
        echo "\">
  ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

  ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

  ";
        // line 38
        if (($context["singular"] ?? null)) {
            // line 39
            echo "  <style id='receptar-stylesheet-inline-css' type='text/css'>.entry-media{background-image:url(";
            if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))) {
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "url", array());
            } else {
                echo ($context["theme_url"] ?? null);
                echo "/images/";
                echo $this->getAttribute(($context["site"] ?? null), "global_featured_image", array());
            }
            echo ")}</style>
  ";
        }
        // line 41
        echo "
  ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/slick.css"), "method");
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://genericons/genericons.css"), "method");
        // line 18
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/starter.css"), "method");
        // line 19
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/colors.css"), "method");
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/jetpack.css"), "method");
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/lightbox.css"), "method");
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 24
        echo "    ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 8))) {
            // line 25
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 26
            echo "  ";
        }
        // line 27
        echo "  ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/slick.min.js"), "method");
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/scripts-global.js"), "method");
        // line 34
        echo "
  ";
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        // line 48
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "      ";
    }

    // line 50
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "      <div id=\"content\" class=\"site-content\">
        <div id=\"primary\" class=\"content-area\">
          ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "        </div>
      </div>
      ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "      ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 61,  248 => 60,  245 => 59,  240 => 54,  234 => 55,  232 => 54,  228 => 52,  225 => 51,  220 => 50,  216 => 49,  213 => 48,  210 => 47,  205 => 34,  202 => 33,  199 => 32,  196 => 31,  193 => 30,  189 => 27,  186 => 26,  183 => 25,  180 => 24,  177 => 23,  174 => 22,  171 => 21,  168 => 20,  165 => 19,  162 => 18,  159 => 17,  156 => 16,  153 => 15,  148 => 41,  136 => 39,  134 => 38,  128 => 36,  126 => 30,  120 => 28,  118 => 15,  114 => 14,  107 => 10,  104 => 9,  102 => 8,  94 => 7,  91 => 6,  88 => 5,  79 => 62,  77 => 59,  74 => 58,  71 => 51,  68 => 50,  66 => 47,  55 => 44,  52 => 43,  50 => 5,  32 => 3,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>
<head>
  {% block head %}
  <meta charset=\"utf-8\" />
  <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>
  {% include 'partials/metadata.html.twig' %}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />
  <link rel='stylesheet' id='receptar-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%7CRoboto+Condensed%3A400%2C300%7CAlegreya%3A400%2C700&#038;subset&#038;ver=44d4db587900ff753163772c910c3b34' type='text/css' media='all'/>
  <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
  <meta name=\"google-translate-customization\" content=\"{{ site.google_translate_token }}\">
  {% block stylesheets %}
    {% do assets.addCss('theme://css/slick.css') %}
    {% do assets.addCss('theme://genericons/genericons.css') %}
    {% do assets.addCss('theme://css/starter.css') %}
    {% do assets.addCss('theme://css/style.css') %}
    {% do assets.addCss('theme://css/colors.css') %}
    {% do assets.addCss('theme://css/jetpack.css') %}
    {% do assets.addCss('theme://css/lightbox.css') %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}
    {% do assets.addCss('theme://css/ie.css') %}
  {% endif %}
  {% endblock %}
  {{ assets.css() }}

  {% block javascripts %}
    {% do assets.add('jquery',101) %}
    {% do assets.add('theme://js/slick.min.js') %}
    {% do assets.add('theme://js/scripts-global.js') %}

  {% endblock %}
  {{ assets.js() }}

  {% if singular %}
  <style id='receptar-stylesheet-inline-css' type='text/css'>.entry-media{background-image:url({% if page.media.images|first %}{{ page.media.images|first.url }}{% else %}{{ theme_url }}/images/{{ site.global_featured_image }}{% endif %})}</style>
  {% endif %}

  {% endblock head %}
</head>
<body id=\"top\" class=\"{% if template_body_classes %}{{ template_body_classes }}{% else %}fl-builder blog has-featured-posts is-not-singular{% endif %}{{ page.header.body_classes }}\">
  <div id=\"page\" class=\"hfeed site\">
    <div class=\"site-inner\">
      {% block header %}
        {% include 'partials/header.html.twig' %}
      {% endblock %}
      {% block slider %}{% endblock %}
      {% block body %}
      <div id=\"content\" class=\"site-content\">
        <div id=\"primary\" class=\"content-area\">
          {% block content %}{% endblock %}
        </div>
      </div>
      {% endblock %}

      {% block footer %}
        {% include 'partials/footer.html.twig' %}
      {% endblock %}
  </div>
</div>

</body>
</html>
", "partials/base.html.twig", "C:\\laragon\\www\\farmchinski\\user\\themes\\receptar\\templates\\partials\\base.html.twig");
    }
}
