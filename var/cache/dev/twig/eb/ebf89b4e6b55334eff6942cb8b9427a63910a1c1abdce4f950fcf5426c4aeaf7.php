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

/* @WebProfiler/Icon/form.svg */
class __TwigTemplate_0d7db1a3a9e58013c81d1ec6a6d822943399d9ad8d7e8791b27efd2d90acd28e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/form.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.5 4H18V2.5c0-.8-.7-1.5-1.5-1.5h-9C6.7 1 6 1.7 6 2.5V4H3.5C2.7 4 2 4.7 2 5.5v16c0 .8.7 1.5 1.5 1.5h17c.8 0 1.5-.7 1.5-1.5v-16c0-.8-.7-1.5-1.5-1.5zM9 4h6v1H9V4zm10 16H5V7h1.1c.2.6.8 1 1.4 1h9c.7 0 1.2-.4 1.4-1H19v13zm-2-9c0 .6-.4 1-1 1H8c-.6 0-1-.4-1-1s.4-1 1-1h8c.6 0 1 .4 1 1zm0 3c0 .6-.4 1-1 1H8c-.6 0-1-.4-1-1s.4-1 1-1h8c.6 0 1 .4 1 1zm-4 3c0 .6-.4 1-1 1H8c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1z\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/form.svg";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Icon/form.svg", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\form.svg");
    }
}
