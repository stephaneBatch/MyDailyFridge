<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @KnpPaginator/Pagination/sliding.html.twig */
class __TwigTemplate_e486a6cd39baae54a07d9dc0dca9e3142a24eff4a6f352243e9bddf80ffcfe0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sliding.html.twig"));

        // line 2
        if (1 === twig_compare(($context["pageCount"] ?? null), 1)) {
            // line 3
            echo "    <div class=\"pagination\">
        ";
            // line 4
            if (((isset($context["first"]) || array_key_exists("first", $context)) && 0 !== twig_compare(($context["current"] ?? null), ($context["first"] ?? null)))) {
                // line 5
                echo "            <span class=\"first\">
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 9
            echo "
        ";
            // line 10
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 11
                echo "            <span class=\"previous\">
                <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&lt;</a>
            </span>
        ";
            }
            // line 15
            echo "
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                echo "            ";
                if (0 !== twig_compare($context["page"], ($context["current"] ?? null))) {
                    // line 18
                    echo "                <span class=\"page\">
                    <a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </span>
            ";
                } else {
                    // line 22
                    echo "                <span class=\"current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            ";
                }
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 27
                echo "            <span class=\"next\">
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">&gt;</a>
            </span>
        ";
            }
            // line 31
            echo "
        ";
            // line 32
            if (((isset($context["last"]) || array_key_exists("last", $context)) && 0 !== twig_compare(($context["current"] ?? null), ($context["last"] ?? null)))) {
                // line 33
                echo "            <span class=\"last\">
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 37
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  125 => 34,  122 => 33,  120 => 32,  117 => 31,  111 => 28,  108 => 27,  106 => 26,  103 => 25,  97 => 24,  91 => 22,  83 => 19,  80 => 18,  77 => 17,  73 => 16,  70 => 15,  64 => 12,  61 => 11,  59 => 10,  56 => 9,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/sliding.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\sliding.html.twig");
    }
}
