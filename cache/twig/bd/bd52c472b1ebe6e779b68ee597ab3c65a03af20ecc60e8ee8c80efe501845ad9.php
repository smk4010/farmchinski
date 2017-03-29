<?php

/* partials/header.html.twig */
class __TwigTemplate_3951cfc6b5f51f3d412a301a0130fd702ca716429d75107bf193188c069b80b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"masthead\" class=\"site-header\" >
  <div class=\"site-branding\">
    <h1 class=\"site-title logo type-text\">
      <a href='";
        // line 4
        echo ($context["base_url_absolute"] ?? null);
        echo "'>Farmchinski Wedding</a>
    </h1>
    <h2 class=\"site-description\">June 17, 2017</h2>
  </div>

  <section id=\"secondary\" class=\"secondary\">
   <div class=\"secondary-content\">
      <div class=\"secondary-content-container\">
        <div class=\"site-branding\">
          <h1 class=\"site-title logo type-text\">
            <a href='";
        // line 14
        echo ($context["base_url_absolute"] ?? null);
        echo "'>Farmchinski Wedding</a>
          </h1>
          <h2 class=\"site-description\">June 17, 2017</h2>
        </div>
         <nav id=\"site-navigation\" class=\"main-navigation\" role=\"navigation\" itemscope=\"\" itemtype=\"http://schema.org/SiteNavigationElement\">
            <span class=\"screen-reader-text\">Receptar site navigation</span>
            <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
            <div class=\"menu\">
              ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 25
        echo "            </div>
         </nav>
         <div class=\"widget-area sidebar\" role=\"complementary\" itemscope=\"\" itemtype=\"http://schema.org/WPSideBar\">
           ";
        // line 28
        $this->displayBlock('sidebar', $context, $blocks);
        // line 31
        echo "         </div>
      </div>
   </div>
   <div class=\"secondary-controls\">
      <button id=\"menu-toggle\" class=\"menu-toggle\" aria-controls=\"secondary\" aria-expanded=\"false\">
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"screen-reader-text\">Menu</span>
      </button>

      ";
        // line 42
        if (($context["singular"] ?? null)) {
            // line 43
            echo "      <nav class=\"navigation post-navigation links-count-2\" role=\"navigation\">
        <h1 class=\"screen-reader-text\">Post navigation</h1>
        <div class=\"nav-links\">
          ";
            // line 46
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 47
                echo "          <div class=\"nav-next nav-link has-post-thumbnail\">
            <a rel=\"next\"  href=\"";
                // line 48
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\">
              <span class=\"post-title\">
                <span class=\"meta-nav\">";
                // line 50
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("NEXT");
                echo " </span>";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "header", array()), "title", array());
                echo "
              </span>
            </a>
          </div>
          ";
            }
            // line 55
            echo "
          ";
            // line 56
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 57
                echo "          <div class=\"nav-previous nav-link has-post-thumbnail\">
            <a rel=\"prev\" href=\"";
                // line 58
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">
              <span class=\"post-title\">
                <span class=\"meta-nav\">";
                // line 60
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PREVIOUS");
                echo " </span>";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "header", array()), "title", array());
                echo "
              </span>
            </a>
          </div>
          ";
            }
            // line 65
            echo "        </div>
      </nav>
    ";
        }
        // line 68
        echo "
      <div class=\"social-links\">
        <ul id=\"menu-social-links\" class=\"social-links-items\">
          ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 72
            echo "            <li id=\"menu-item-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\">
              <a href=\"";
            // line 73
            echo $this->getAttribute($context["icon"], "url", array());
            echo "\">
                <span class=\"screen-reader-text\">";
            // line 74
            echo $this->getAttribute($context["icon"], "text", array());
            echo "</span>
              </a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
          ";
        // line 79
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 80
            echo "            <li id=\"menu-item-1245\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1245\">
              <a href=\"";
            // line 81
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><span class=\"screen-reader-text\">Atom 1.0</span></a>
            </li>
            <li id=\"menu-item-1246\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1246\">
              <a href=\"";
            // line 84
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><span class=\"screen-reader-text\">RSS</span></a>
            </li>
          ";
        }
        // line 87
        echo "

        </ul>
      </div>
   </div>
</section>

<div id=\"site-header-widgets\" class=\"widget-area site-header-widgets\">
";
        // line 95
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 96
            echo "    ";
            $this->loadTemplate("partials/simplesearch_searchbox_top.html.twig", "partials/header.html.twig", 96)->display($context);
        }
        // line 98
        echo "
</div>

</header>
";
    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        // line 23
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 23)->display($context);
        // line 24
        echo "              ";
    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        // line 29
        echo "             ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/header.html.twig", 29)->display($context);
        // line 30
        echo "           ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 30,  235 => 29,  232 => 28,  228 => 24,  225 => 23,  222 => 22,  214 => 98,  210 => 96,  208 => 95,  198 => 87,  192 => 84,  186 => 81,  183 => 80,  181 => 79,  178 => 78,  160 => 74,  156 => 73,  149 => 72,  132 => 71,  127 => 68,  122 => 65,  112 => 60,  107 => 58,  104 => 57,  102 => 56,  99 => 55,  89 => 50,  84 => 48,  81 => 47,  79 => 46,  74 => 43,  72 => 42,  59 => 31,  57 => 28,  52 => 25,  50 => 22,  39 => 14,  26 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"masthead\" class=\"site-header\" >
  <div class=\"site-branding\">
    <h1 class=\"site-title logo type-text\">
      <a href='{{ base_url_absolute }}'>Farmchinski Wedding</a>
    </h1>
    <h2 class=\"site-description\">June 17, 2017</h2>
  </div>

  <section id=\"secondary\" class=\"secondary\">
   <div class=\"secondary-content\">
      <div class=\"secondary-content-container\">
        <div class=\"site-branding\">
          <h1 class=\"site-title logo type-text\">
            <a href='{{ base_url_absolute }}'>Farmchinski Wedding</a>
          </h1>
          <h2 class=\"site-description\">June 17, 2017</h2>
        </div>
         <nav id=\"site-navigation\" class=\"main-navigation\" role=\"navigation\" itemscope=\"\" itemtype=\"http://schema.org/SiteNavigationElement\">
            <span class=\"screen-reader-text\">Receptar site navigation</span>
            <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
            <div class=\"menu\">
              {% block navigation %}
                {% include 'partials/navigation.html.twig' %}
              {% endblock %}
            </div>
         </nav>
         <div class=\"widget-area sidebar\" role=\"complementary\" itemscope=\"\" itemtype=\"http://schema.org/WPSideBar\">
           {% block sidebar %}
             {% include 'partials/sidebar.html.twig' %}
           {% endblock %}
         </div>
      </div>
   </div>
   <div class=\"secondary-controls\">
      <button id=\"menu-toggle\" class=\"menu-toggle\" aria-controls=\"secondary\" aria-expanded=\"false\">
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"screen-reader-text\">Menu</span>
      </button>

      {% if singular %}
      <nav class=\"navigation post-navigation links-count-2\" role=\"navigation\">
        <h1 class=\"screen-reader-text\">Post navigation</h1>
        <div class=\"nav-links\">
          {% if not page.isFirst %}
          <div class=\"nav-next nav-link has-post-thumbnail\">
            <a rel=\"next\"  href=\"{{ page.nextSibling.url }}\">
              <span class=\"post-title\">
                <span class=\"meta-nav\">{{ 'NEXT'|t }} </span>{{ page.nextSibling.header.title }}
              </span>
            </a>
          </div>
          {% endif %}

          {% if not page.isLast %}
          <div class=\"nav-previous nav-link has-post-thumbnail\">
            <a rel=\"prev\" href=\"{{ page.prevSibling.url }}\">
              <span class=\"post-title\">
                <span class=\"meta-nav\">{{ 'PREVIOUS'|t }} </span>{{ page.prevSibling.header.title }}
              </span>
            </a>
          </div>
          {% endif %}
        </div>
      </nav>
    {% endif %}

      <div class=\"social-links\">
        <ul id=\"menu-social-links\" class=\"social-links-items\">
          {% for icon in site.social %}
            <li id=\"menu-item-{{ loop.index }}\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-{{ loop.index }}\">
              <a href=\"{{ icon.url }}\">
                <span class=\"screen-reader-text\">{{ icon.text }}</span>
              </a>
            </li>
          {% endfor %}

          {% if config.plugins.feed.enabled %}
            <li id=\"menu-item-1245\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1245\">
              <a href=\"{{ feed_url }}.atom\"><span class=\"screen-reader-text\">Atom 1.0</span></a>
            </li>
            <li id=\"menu-item-1246\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1246\">
              <a href=\"{{ feed_url }}.rss\"><span class=\"screen-reader-text\">RSS</span></a>
            </li>
          {% endif %}


        </ul>
      </div>
   </div>
</section>

<div id=\"site-header-widgets\" class=\"widget-area site-header-widgets\">
{% if config.plugins.simplesearch.enabled %}
    {% include 'partials/simplesearch_searchbox_top.html.twig' %}
{% endif %}

</div>

</header>
", "partials/header.html.twig", "C:\\laragon\\www\\farmchinski\\user\\themes\\receptar\\templates\\partials\\header.html.twig");
    }
}
