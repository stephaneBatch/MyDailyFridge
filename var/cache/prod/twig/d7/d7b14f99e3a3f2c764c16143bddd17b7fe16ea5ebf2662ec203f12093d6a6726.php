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

/* security/login.html.twig */
class __TwigTemplate_ee084626fab8d082b4be8263a679c51d29fb7e35a2557c637acdd5eac77196fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stephane' => [$this, 'block_stephane'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stephane($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <br/><br/><br/>
    <div class=\"container\">   
    <h1>Connexion !</h1>    
   
    <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\" >
        <div class=\"form-group\">
            <input placeholder=\"Adresse email ...\" required name=\"_username\" type=\"text\" class=\"form-control\" width=\"50\">
        </div>
        <div class=\"form-group\">
            <input placeholder=\"Mot de passe ...\" required name=\"_password\" type=\"password\" class=\"form-control\">
        </div>

        <div class=\"form-group\">
            <button class=\"submit btn btn-success\">Connexion </button> 
            <button type=\"reset\" class=\"btn btn-secondary \">  Effacer  </button>
        </div>
    </form>
     </div>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\security\\login.html.twig");
    }
}
