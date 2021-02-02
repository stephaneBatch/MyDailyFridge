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

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a99c54b9ac3d9591c3eded6a4271702cf1a424c13f7e17cd273c2587e6fb9fce extends Template
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
        // line 1
        echo "<div>
    <?php \$widgetAttr = empty(\$help) ? [] : ['attr' => ['aria-describedby' => \$id.'_help']]; ?>
    <?php echo \$view['form']->label(\$form); ?>
    <?php echo \$view['form']->errors(\$form); ?>
    <?php echo \$view['form']->widget(\$form, \$widgetAttr); ?>
    <?php echo \$view['form']->help(\$form); ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Framework/Form/form_row.html.php", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
