<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html */
class __TwigTemplate_b3ad63568c3d1fe4aef587bfb757ac47c6c023d6b33639535462b71dc23ac3d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
\t<head>
\t\t";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t";
        // line 10
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["css"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 11
            echo "\t\t\t\t";
            echo $context["style"];
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t<style type=\"text/css\">

  body {
    background-color: #FFFFFF;
  }
  .main.container {
    margin-top: 2em;
  }

  .main.menu {
    margin-top: 4em;
    border-radius: 0;
    border: none;
    box-shadow: none;
    transition:
      box-shadow 0.5s ease,
      padding 0.5s ease
    ;
  }
  .main.menu .item img.logo {
    margin-right: 1.5em;
  }

  .overlay {
    float: left;
    margin: 0em 3em 1em 0em;
  }
  .overlay .menu {
    position: relative;
    left: 0;
    transition: left 0.5s ease;
  }

  .main.menu.fixed {
    background-color: #FFFFFF;
    border: 1px solid #DDD;
    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  }
  .overlay.fixed .menu {
    left: 800px;
  }

  .text.container .left.floated.image {
    margin: 2em 2em 2em -4em;
  }
  .text.container .right.floated.image {
    margin: 2em -4em 2em 2em;
  }

  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>
\t</head>
\t<body>
\t\t
\t\t<div class=\"ui main text container\">
\t\t\t<h1 class=\"ui header\">Sticky Example</h1>
\t\t\t<p>This example shows how to use lazy loaded images, a sticky menu, and a simple text container</p>
\t\t  </div>
\t\t<div class=\"ui borderless main menu\" style=\"\">
    <div class=\"ui text container\">
      <div class=\"header item\">
        <img class=\"logo\" src=\"https://fomantic-ui.com/examples/https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\">
        Project Name
      </div>
      <a href=\"#\" class=\"item\">Blog</a>
      <a href=\"#\" class=\"item\">Articles</a>
      <a href=\"#\" class=\"ui right floated dropdown item\" tabindex=\"0\">
        Dropdown <i class=\"dropdown icon\"></i>
        <div class=\"menu\" tabindex=\"-1\">
          <div class=\"item\">Link Item</div>
          <div class=\"item\">Link Item</div>
          <div class=\"divider\"></div>
          <div class=\"header\">Header Item</div>
          <div class=\"item\">
            <i class=\"dropdown icon\"></i>
            Sub Menu
            <div class=\"menu\">
              <div class=\"item\">Link Item</div>
              <div class=\"item\">Link Item</div>
            </div>
          </div>
          <div class=\"item\">Link Item</div>
        </div>
      </a>
    </div>
  </div>
\t\t<div class=\"ui borderless main menu constraint\" style=\"display: none;\">
    <div class=\"ui text container\">
      <div class=\"header item\">
        <img class=\"logo\" src=\"https://fomantic-ui.com/examples/https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\">
        Project Name
      </div>
      <a href=\"#\" class=\"item\">Blog</a>
      <a href=\"#\" class=\"item\">Articles</a>
      <a href=\"#\" class=\"ui right floated dropdown item\" tabindex=\"0\">
        Dropdown <i class=\"dropdown icon\"></i>
        <div class=\"menu\" tabindex=\"-1\">
          <div class=\"item\">Link Item</div>
          <div class=\"item\">Link Item</div>
          <div class=\"divider\"></div>
          <div class=\"header\">Header Item</div>
          <div class=\"item\">
            <i class=\"dropdown icon\"></i>
            Sub Menu
            <div class=\"menu\">
              <div class=\"item\">Link Item</div>
              <div class=\"item\">Link Item</div>
            </div>
          </div>
          <div class=\"item\">Link Item</div>
        </div>
      </a>
    </div>
  </div>
\t\t<div class=\"ui text container\">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <div class=\"overlay\" style=\"\">
      <div class=\"ui labeled icon vertical menu\">
        <a class=\"item\"><i class=\"twitter icon\"></i> Tweet</a>
        <a class=\"item\"><i class=\"facebook icon\"></i> Share</a>
        <a class=\"item\"><i class=\"mail icon\"></i> E-mail</a>
      </div>
    </div><div class=\"overlay constraint\" style=\"display: none;\">
      <div class=\"ui labeled icon vertical menu\">
        <a class=\"item\"><i class=\"twitter icon\"></i> Tweet</a>
        <a class=\"item\"><i class=\"facebook icon\"></i> Share</a>
        <a class=\"item\"><i class=\"mail icon\"></i> E-mail</a>
      </div>
    </div>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <img class=\"ui medium left floated image transition visible\" data-src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" style=\"display: block !important;\">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
    <img class=\"ui medium right floated image transition visible\" data-src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" style=\"display: block !important;\">
    Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <img class=\"ui medium left floated image\" data-src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
    <img class=\"ui medium right floated image\" data-src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\">
    Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
  </div>
\t\t<div class=\"ui inverted vertical footer segment\">
    <div class=\"ui center aligned container\">
      <div class=\"ui stackable inverted divided grid\">
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">Group 1</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Link One</a>
            <a href=\"#\" class=\"item\">Link Two</a>
            <a href=\"#\" class=\"item\">Link Three</a>
            <a href=\"#\" class=\"item\">Link Four</a>
          </div>
        </div>
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">Group 2</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Link One</a>
            <a href=\"#\" class=\"item\">Link Two</a>
            <a href=\"#\" class=\"item\">Link Three</a>
            <a href=\"#\" class=\"item\">Link Four</a>
          </div>
        </div>
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">Group 3</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Link One</a>
            <a href=\"#\" class=\"item\">Link Two</a>
            <a href=\"#\" class=\"item\">Link Three</a>
            <a href=\"#\" class=\"item\">Link Four</a>
          </div>
        </div>
        <div class=\"seven wide column\">
          <h4 class=\"ui inverted header\">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      <div class=\"ui inverted section divider\"></div>
      <img src=\"https://fomantic-ui.com/examples/https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" class=\"ui centered mini image\">
      <div class=\"ui horizontal inverted small divided link list\">
        <a class=\"item\" href=\"#\">Site Map</a>
        <a class=\"item\" href=\"#\">Contact Us</a>
        <a class=\"item\" href=\"#\">Terms and Conditions</a>
        <a class=\"item\" href=\"#\">Privacy Policy</a>
      </div>
    </div>
  </div>
\t\t";
        // line 212
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["js"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 213
            echo "\t\t\t\t";
            echo $context["script"];
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "\t\t";
        // line 216
        echo "\t\t<script>
  \$(document)
    .ready(function() {

      // fix main menu to page on passing
      \$('.main.menu').visibility({
        type: 'fixed'
      });
      \$('.overlay').visibility({
        type: 'fixed',
        offset: 80
      });

      // lazy load images
      \$('.image').visibility({
        type: 'image',
        transition: 'vertical flip in',
        duration: 500
      });

      // show dropdown on hover
      \$('.main.menu  .ui.dropdown').dropdown({
        on: 'hover'
      });
    })
  ;
  </script>
\t</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "<title>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 5,  275 => 216,  273 => 215,  264 => 213,  259 => 212,  60 => 14,  58 => 13,  49 => 11,  44 => 10,  39 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html>
\t<head>
\t\t{% block title %}<title>{{ title }}</title>{% endblock %}
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t{% autoescape 'html' %}
\t\t\t{% for style in css %}
\t\t\t\t{{ style|raw }}
\t\t\t{% endfor %}
\t\t{% endautoescape %}
\t\t<style type=\"text/css\">

  body {
    background-color: #FFFFFF;
  }
  .main.container {
    margin-top: 2em;
  }

  .main.menu {
    margin-top: 4em;
    border-radius: 0;
    border: none;
    box-shadow: none;
    transition:
      box-shadow 0.5s ease,
      padding 0.5s ease
    ;
  }
  .main.menu .item img.logo {
    margin-right: 1.5em;
  }

  .overlay {
    float: left;
    margin: 0em 3em 1em 0em;
  }
  .overlay .menu {
    position: relative;
    left: 0;
    transition: left 0.5s ease;
  }

  .main.menu.fixed {
    background-color: #FFFFFF;
    border: 1px solid #DDD;
    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  }
  .overlay.fixed .menu {
    left: 800px;
  }

  .text.container .left.floated.image {
    margin: 2em 2em 2em -4em;
  }
  .text.container .right.floated.image {
    margin: 2em -4em 2em 2em;
  }

  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>
\t</head>
\t<body>
\t\t
\t\t<div class=\"ui main text container\">
\t\t\t<h1 class=\"ui header\">Sticky Example</h1>
\t\t\t<p>This example shows how to use lazy loaded images, a sticky menu, and a simple text container</p>
\t\t  </div>
\t\t<div class=\"ui borderless main menu\" style=\"\">
    <div class=\"ui text container\">
      <div class=\"header item\">
        <img class=\"logo\" src=\"https://fomantic-ui.com/examples/https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\">
        Project Name
      </div>
      <a href=\"#\" class=\"item\">Blog</a>
      <a href=\"#\" class=\"item\">Articles</a>
      <a href=\"#\" class=\"ui right floated dropdown item\" tabindex=\"0\">
        Dropdown <i class=\"dropdown icon\"></i>
        <div class=\"menu\" tabindex=\"-1\">
          <div class=\"item\">Link Item</div>
          <div class=\"item\">Link Item</div>
          <div class=\"divider\"></div>
          <div class=\"header\">Header Item</div>
          <div class=\"item\">
            <i class=\"dropdown icon\"></i>
            Sub Menu
            <div class=\"menu\">
              <div class=\"item\">Link Item</div>
              <div class=\"item\">Link Item</div>
            </div>
          </div>
          <div class=\"item\">Link Item</div>
        </div>
      </a>
    </div>
  </div>
\t\t<div class=\"ui borderless main menu constraint\" style=\"display: none;\">
    <div class=\"ui text container\">
      <div class=\"header item\">
        <img class=\"logo\" src=\"https://fomantic-ui.com/examples/https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\">
        Project Name
      </div>
      <a href=\"#\" class=\"item\">Blog</a>
      <a href=\"#\" class=\"item\">Articles</a>
      <a href=\"#\" class=\"ui right floated dropdown item\" tabindex=\"0\">
        Dropdown <i class=\"dropdown icon\"></i>
        <div class=\"menu\" tabindex=\"-1\">
          <div class=\"item\">Link Item</div>
          <div class=\"item\">Link Item</div>
          <div class=\"divider\"></div>
          <div class=\"header\">Header Item</div>
          <div class=\"item\">
            <i class=\"dropdown icon\"></i>
            Sub Menu
            <div class=\"menu\">
              <div class=\"item\">Link Item</div>
              <div class=\"item\">Link Item</div>
            </div>
          </div>
          <div class=\"item\">Link Item</div>
        </div>
      </a>
    </div>
  </div>
\t\t<div class=\"ui text container\">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <div class=\"overlay\" style=\"\">
      <div class=\"ui labeled icon vertical menu\">
        <a class=\"item\"><i class=\"twitter icon\"></i> Tweet</a>
        <a class=\"item\"><i class=\"facebook icon\"></i> Share</a>
        <a class=\"item\"><i class=\"mail icon\"></i> E-mail</a>
      </div>
    </div><div class=\"overlay constraint\" style=\"display: none;\">
      <div class=\"ui labeled icon vertical menu\">
        <a class=\"item\"><i class=\"twitter icon\"></i> Tweet</a>
        <a class=\"item\"><i class=\"facebook icon\"></i> Share</a>
        <a class=\"item\"><i class=\"mail icon\"></i> E-mail</a>
      </div>
    </div>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <img class=\"ui medium left floated image transition visible\" data-src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" style=\"display: block !important;\">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
    <img class=\"ui medium right floated image transition visible\" data-src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" style=\"display: block !important;\">
    Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <img class=\"ui medium left floated image\" data-src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\">
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
    <img class=\"ui medium right floated image\" data-src=\"https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\">
    Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
  </div>
\t\t<div class=\"ui inverted vertical footer segment\">
    <div class=\"ui center aligned container\">
      <div class=\"ui stackable inverted divided grid\">
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">Group 1</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Link One</a>
            <a href=\"#\" class=\"item\">Link Two</a>
            <a href=\"#\" class=\"item\">Link Three</a>
            <a href=\"#\" class=\"item\">Link Four</a>
          </div>
        </div>
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">Group 2</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Link One</a>
            <a href=\"#\" class=\"item\">Link Two</a>
            <a href=\"#\" class=\"item\">Link Three</a>
            <a href=\"#\" class=\"item\">Link Four</a>
          </div>
        </div>
        <div class=\"three wide column\">
          <h4 class=\"ui inverted header\">Group 3</h4>
          <div class=\"ui inverted link list\">
            <a href=\"#\" class=\"item\">Link One</a>
            <a href=\"#\" class=\"item\">Link Two</a>
            <a href=\"#\" class=\"item\">Link Three</a>
            <a href=\"#\" class=\"item\">Link Four</a>
          </div>
        </div>
        <div class=\"seven wide column\">
          <h4 class=\"ui inverted header\">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      <div class=\"ui inverted section divider\"></div>
      <img src=\"https://fomantic-ui.com/examples/https://fomantic-ui.com/examples/assets/images/wireframe/square-image.png\" class=\"ui centered mini image\">
      <div class=\"ui horizontal inverted small divided link list\">
        <a class=\"item\" href=\"#\">Site Map</a>
        <a class=\"item\" href=\"#\">Contact Us</a>
        <a class=\"item\" href=\"#\">Terms and Conditions</a>
        <a class=\"item\" href=\"#\">Privacy Policy</a>
      </div>
    </div>
  </div>
\t\t{% autoescape 'html' %}
\t\t\t{% for script in js %}
\t\t\t\t{{ script|raw }}
\t\t\t{% endfor %}
\t\t{% endautoescape %}
\t\t<script>
  \$(document)
    .ready(function() {

      // fix main menu to page on passing
      \$('.main.menu').visibility({
        type: 'fixed'
      });
      \$('.overlay').visibility({
        type: 'fixed',
        offset: 80
      });

      // lazy load images
      \$('.image').visibility({
        type: 'image',
        transition: 'vertical flip in',
        duration: 500
      });

      // show dropdown on hover
      \$('.main.menu  .ui.dropdown').dropdown({
        on: 'hover'
      });
    })
  ;
  </script>
\t</body>
</html>
", "base.html", "D:\\OSPanel\\domains\\mhadmin.local\\maharder\\admin\\templates\\base.html");
    }
}