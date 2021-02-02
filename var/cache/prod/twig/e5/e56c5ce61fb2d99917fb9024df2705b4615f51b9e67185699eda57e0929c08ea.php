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

/* security/registration.html.twig */
class __TwigTemplate_f9bdb850be4a38e188a5f3005f2bd1b0a16db9d59e1e78d96ed906a14876f986 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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
<h1>Bienvenue sur la page d'inscription !</h1>
    <div>
      ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 9), 'row', ["label" => "Nom d'utilisateur", "attr" => ["placeholder" => "Nom de l'utilisateur", "class" => "form-control"]]);
        // line 10
        echo " 

      ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Prenom", [], "any", false, false, false, 12), 'row', ["label" => "Prénom de l'utilisateur", "attr" => ["placeholder" => "Prénom de l'utilisateur", "class" => "form-control"]]);
        // line 13
        echo "
      ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Sexe", [], "any", false, false, false, 14), 'row', ["label" => "Sexe", "attr" => ["placeholder" => "Genre", "class" => "form-control"]]);
        // line 15
        echo "
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Email", [], "any", false, false, false, 16), 'row', ["label" => "Email", "attr" => ["placeholder" => "Email", "class" => "form-control"]]);
        // line 17
        echo "
      ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 18), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "Mot de passe", "class" => "form-control"]]);
        // line 19
        echo "
      ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Confirm_mdp", [], "any", false, false, false, 20), 'row', ["label" => "Confirmation du mot de passe", "attr" => ["placeholder" => "Confirmation du mot de passe", "class" => "form-control"]]);
        // line 21
        echo "
      ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "TypeUtilisateur", [], "any", false, false, false, 22), 'row', ["label" => "Type d'utilisateur", "attr" => ["class" => "form-control"]]);
        // line 23
        echo "
    <br/>
    <button type=\"submit\" class=\"btn btn-success\">Inscrire</button>
    <button type=\"reset\" class=\"btn btn-secondary \">  Effacer  </button>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo " 
    
    </div>
    

";
    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  101 => 23,  99 => 22,  96 => 21,  94 => 20,  91 => 19,  89 => 18,  86 => 17,  84 => 16,  81 => 15,  79 => 14,  76 => 13,  74 => 12,  70 => 10,  68 => 9,  63 => 7,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/registration.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\security\\registration.html.twig");
    }
}
