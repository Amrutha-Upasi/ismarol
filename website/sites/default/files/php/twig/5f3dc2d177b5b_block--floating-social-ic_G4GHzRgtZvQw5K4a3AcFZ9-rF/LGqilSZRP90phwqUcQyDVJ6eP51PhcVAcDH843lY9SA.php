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

/* modules/floating_social_icons/templates/block--floating-social-icons.html.twig */
class __TwigTemplate_c85708698a9e6a3621c7bc0728edc1b572400494c0ea7adae60cb88fc8d00d26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 32, "set" => 33];
        $filters = ["escape" => 66];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 30
        echo "
";
        // line 32
        if (($this->getAttribute(($context["social_values"] ?? null), "icons", []) == "1")) {
            // line 33
            echo "  ";
            $context["main_class"] = "floating-top";
        } elseif (($this->getAttribute(        // line 34
($context["social_values"] ?? null), "icons", []) == "2")) {
            // line 35
            echo "  ";
            $context["main_class"] = "floating-right";
        } elseif (($this->getAttribute(        // line 36
($context["social_values"] ?? null), "icons", []) == "3")) {
            // line 37
            echo "  ";
            $context["main_class"] = "floating-bottom";
        } elseif (($this->getAttribute(        // line 38
($context["social_values"] ?? null), "icons", []) == "4")) {
            // line 39
            echo "  ";
            $context["main_class"] = "floating-left";
        }
        // line 41
        echo "
";
        // line 42
        if (($this->getAttribute(($context["social_values"] ?? null), "icons", []) % 2 == 1)) {
            // line 43
            echo "\t";
            $context["sub_class"] = "floating-horizontal";
        } else {
            // line 45
            echo "\t";
            $context["sub_class"] = "floating-vertical";
        }
        // line 47
        echo "
";
        // line 49
        if (($this->getAttribute(($context["social_values"] ?? null), "count", []) == "2")) {
            // line 50
            echo "  ";
            $context["responsive_class"] = "two";
        } elseif (($this->getAttribute(        // line 51
($context["social_values"] ?? null), "count", []) == "3")) {
            // line 52
            echo "  ";
            $context["responsive_class"] = "three";
        } elseif (($this->getAttribute(        // line 53
($context["social_values"] ?? null), "count", []) == "4")) {
            // line 54
            echo "  ";
            $context["responsive_class"] = "four";
        } elseif (($this->getAttribute(        // line 55
($context["social_values"] ?? null), "count", []) == "5")) {
            // line 56
            echo "  ";
            $context["responsive_class"] = "five";
        } elseif (($this->getAttribute(        // line 57
($context["social_values"] ?? null), "count", []) == "6")) {
            // line 58
            echo "  ";
            $context["responsive_class"] = "six";
        } elseif (($this->getAttribute(        // line 59
($context["social_values"] ?? null), "count", []) == "7")) {
            // line 60
            echo "  ";
            $context["responsive_class"] = "seven";
        } elseif (($this->getAttribute(        // line 61
($context["social_values"] ?? null), "count", []) == "8")) {
            // line 62
            echo "  ";
            $context["responsive_class"] = "eight";
        }
        // line 64
        echo "
<div id=\"floating-icons\">
\t<div class=\"floating-social-icons ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_class"] ?? null)), "html", null, true);
        echo "\">
\t\t";
        // line 67
        if ( !twig_test_empty($this->getAttribute(($context["social_values"] ?? null), "facebook", []))) {
            // line 68
            echo "  \t<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["responsive_class"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<a title=\"";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_titles"] ?? null), "facebook_title", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "hover", [])), "html", null, true);
            echo " facebook\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "facebook", [])), "html", null, true);
            echo "\" target=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "target", [])), "html", null, true);
            echo "\">
\t\t\t<span class=\"fa fa-facebook\"></span>
\t\t\t</a>
\t\t</div>
\t";
        }
        // line 74
        echo "    
   \t";
        // line 75
        if ( !twig_test_empty($this->getAttribute(($context["social_values"] ?? null), "google_plus", []))) {
            // line 76
            echo "   \t<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["responsive_class"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<a title=\"";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_titles"] ?? null), "google_plus_title", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "hover", [])), "html", null, true);
            echo " google-plus\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "google_plus", [])), "html", null, true);
            echo "\" target=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "target", [])), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"fa fa-google-plus\"></span>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        // line 82
        echo "\t\t
  \t";
        // line 83
        if ( !twig_test_empty($this->getAttribute(($context["social_values"] ?? null), "linkedIn", []))) {
            // line 84
            echo "  \t<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["responsive_class"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<a title=\"";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_titles"] ?? null), "linkedIn_title", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "hover", [])), "html", null, true);
            echo " linkedin\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "linkedIn", [])), "html", null, true);
            echo "\" target=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "target", [])), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"fa fa-linkedin\"></span>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        // line 90
        echo "
\t\t";
        // line 91
        if ( !twig_test_empty($this->getAttribute(($context["social_values"] ?? null), "twitter", []))) {
            // line 92
            echo "\t\t<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["responsive_class"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<a title=\"";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_titles"] ?? null), "twitter_title", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "hover", [])), "html", null, true);
            echo " twitter\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "twitter", [])), "html", null, true);
            echo "\" target=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "target", [])), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"fa fa-twitter\"></span>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        // line 98
        echo "
\t\t";
        // line 99
        if ( !twig_test_empty($this->getAttribute(($context["social_values"] ?? null), "pinterest", []))) {
            // line 100
            echo "\t\t<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["responsive_class"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<a title=\"";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_titles"] ?? null), "pinterest_title", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "hover", [])), "html", null, true);
            echo " pinterest\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "pinterest", [])), "html", null, true);
            echo "\" target=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "target", [])), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"fa fa-pinterest\"></span>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        // line 106
        echo "
\t\t";
        // line 107
        if ( !twig_test_empty($this->getAttribute(($context["social_values"] ?? null), "instagram", []))) {
            // line 108
            echo "\t\t<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["responsive_class"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<a title=\"";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_titles"] ?? null), "instagram_title", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "hover", [])), "html", null, true);
            echo " instagram\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "instagram", [])), "html", null, true);
            echo "\" target=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "target", [])), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"fa fa-instagram\"></span>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        // line 114
        echo "
\t\t";
        // line 115
        if ( !twig_test_empty($this->getAttribute(($context["social_values"] ?? null), "mail", []))) {
            // line 116
            echo "\t\t<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["responsive_class"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<a title=\"";
            // line 117
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_titles"] ?? null), "mail_title", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "hover", [])), "html", null, true);
            echo " mail\" href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "mail", [])), "html", null, true);
            echo "\" target=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "target", [])), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"fa fa-envelope\"></span>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        // line 122
        echo "
\t\t";
        // line 123
        if ( !twig_test_empty($this->getAttribute(($context["social_values"] ?? null), "youtube", []))) {
            // line 124
            echo "\t\t<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_class"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["responsive_class"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<a title=\"";
            // line 125
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_titles"] ?? null), "youtube_title", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "hover", [])), "html", null, true);
            echo " youtube\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "youtube", [])), "html", null, true);
            echo "\" target=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["social_values"] ?? null), "target", [])), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"fa fa-youtube\"></span>
\t\t\t</a>
\t\t</div>
\t\t";
        }
        // line 130
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/floating_social_icons/templates/block--floating-social-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 130,  330 => 125,  323 => 124,  321 => 123,  318 => 122,  304 => 117,  297 => 116,  295 => 115,  292 => 114,  278 => 109,  271 => 108,  269 => 107,  266 => 106,  252 => 101,  245 => 100,  243 => 99,  240 => 98,  226 => 93,  219 => 92,  217 => 91,  214 => 90,  200 => 85,  193 => 84,  191 => 83,  188 => 82,  174 => 77,  167 => 76,  165 => 75,  162 => 74,  148 => 69,  141 => 68,  139 => 67,  135 => 66,  131 => 64,  127 => 62,  125 => 61,  122 => 60,  120 => 59,  117 => 58,  115 => 57,  112 => 56,  110 => 55,  107 => 54,  105 => 53,  102 => 52,  100 => 51,  97 => 50,  95 => 49,  92 => 47,  88 => 45,  84 => 43,  82 => 42,  79 => 41,  75 => 39,  73 => 38,  70 => 37,  68 => 36,  65 => 35,  63 => 34,  60 => 33,  58 => 32,  55 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/floating_social_icons/templates/block--floating-social-icons.html.twig", "/home/ismar950/public_html/modules/floating_social_icons/templates/block--floating-social-icons.html.twig");
    }
}
