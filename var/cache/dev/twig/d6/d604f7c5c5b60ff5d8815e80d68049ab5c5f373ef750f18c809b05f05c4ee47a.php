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

/* daily_fridge/accueil.html.twig */
class __TwigTemplate_6bd09c89042ea55ea6d2499eed35f3735825d2080f7a58bda7f4e0bf0048db70 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/accueil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stephane($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stephane"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stephane"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <br/>

     ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Histoproduits"]) || array_key_exists("Histoproduits", $context) ? $context["Histoproduits"] : (function () { throw new RuntimeError('Variable "Histoproduits" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Histoproduit"]) {
            // line 8
            echo "
       ";
            // line 9
            $context["nombreJour"] = (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateLimite", [], "any", false, false, false, 9), "d") - twig_date_format_filter($this->env, "now", "d"));
            // line 10
            echo "        
        ";
            // line 11
            if (-1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateLimite", [], "any", false, false, false, 11), "m/d/Y"), twig_date_format_filter($this->env, "now", "m/d/Y"))) {
                // line 12
                echo "
            <div class=\"alert alert-dismissible alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Produit périmé :  <a href=\"#\" class=\"alert-link\"></a> ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
                echo " </strong>
                dans le frigo depuis le ";
                // line 16
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateAchat", [], "any", false, false, false, 16), "m/d/Y"), "html", null, true);
                echo "
                date limite :  ";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateLimite", [], "any", false, false, false, 17), "m/d/Y"), "html", null, true);
                echo "
            </div>

         ";
            } elseif ((0 <= twig_compare(            // line 20
(isset($context["nombreJour"]) || array_key_exists("nombreJour", $context) ? $context["nombreJour"] : (function () { throw new RuntimeError('Variable "nombreJour" does not exist.', 20, $this->source); })()), 0) && 0 >= twig_compare((isset($context["nombreJour"]) || array_key_exists("nombreJour", $context) ? $context["nombreJour"] : (function () { throw new RuntimeError('Variable "nombreJour" does not exist.', 20, $this->source); })()), 3))) {
                // line 21
                echo "
            <div class=\"alert alert-dismissible alert-warning\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Produit proche de la date de péremption :  <a href=\"#\" class=\"alert-link\"></a> ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
                echo " </strong>
                dans le frigo depuis le ";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateAchat", [], "any", false, false, false, 25), "m/d/Y"), "html", null, true);
                echo "
                date limite :  ";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateLimite", [], "any", false, false, false, 26), "m/d/Y"), "html", null, true);
                echo "
            </div>
         
        ";
            }
            // line 30
            echo "


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Histoproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "

    

<h1>MyDailyFridge : les bons choix pour votre frigo !</h1>

<p>
    MyDailyFridge décrypte les code barres de vos produits
    alimentaires, analyse leur impact sur la santé mais surtout vous evites 
    les gachis alimentaire grâce à son système de notifications pour les dates limites de consommation !
</p>
<img  class =\"image-display\" alt=\"Logo\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/image_accueil.png"), "html", null, true);
        echo "\" width=\"(500)\" height=\"300\" >


<br/><br/><br/>
  <h2>Comment ça marche ?</h2>

<p>Pour utiliser gratuitement et en illimité l’application web “MyDailyFridge”, il suffit de créer un compte et vous aurez accès à ce dernier 24h/7j. </p>

Sur l’application MyDailyFridge vous avez accès aux pages:
<ol>
  <li><strong>Scanner :</strong> Cette page est dédiée pour scanner les codes barres des produits alimentaires afin d’obtenir les informations nutritionnelles.</li>
  <li><strong>Mes produits :</strong> Sur cette page vous trouverez l’ensemble des produits que vous avez scanner précédemment (historique).</li>
  <li><strong>Mon Frigo :</strong> Via cette page vous aurez la visibilité sur les produits alimentaires (scanner) présent dans votre frigo.</li>
  <li><strong>Mes produits périmés :</strong> Cette page liste les produits périmés que vous aviez scannés auparavant.</li>
</ol>


L'équipe MyDailyFridge vous souhaite une bonne visite !

 






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "
    <script>
        const url = new URL('http://localhost:3000/.well-known/mercure');
        url.searchParams.append('topic', 'http://monsite.com/ping');
        

        const eventSource = new EventSource(url);
        eventSource.onmessage = event => {
            console.log(JSON.parse(event.data));
        }
    </script>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "daily_fridge/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 74,  207 => 73,  170 => 45,  157 => 34,  148 => 30,  141 => 26,  137 => 25,  133 => 24,  128 => 21,  126 => 20,  120 => 17,  116 => 16,  112 => 15,  107 => 12,  105 => 11,  102 => 10,  100 => 9,  97 => 8,  93 => 7,  88 => 4,  78 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stephane %}{% endblock %} 
{% block body %}

    <br/>

     {% for Histoproduit in Histoproduits %}

       {% set nombreJour= Histoproduit.DateLimite|date(\"d\") -  \"now\"|date(\"d\") %}
        
        {% if Histoproduit.DateLimite|date(\"m/d/Y\") < \"now\"|date(\"m/d/Y\") %}

            <div class=\"alert alert-dismissible alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Produit périmé :  <a href=\"#\" class=\"alert-link\"></a> {{ Histoproduit.produit.nom }} </strong>
                dans le frigo depuis le {{ Histoproduit.DateAchat|date(\"m/d/Y\") }}
                date limite :  {{ Histoproduit.DateLimite|date(\"m/d/Y\") }}
            </div>

         {% elseif  (nombreJour >= 0) and (nombreJour <= 3) %}

            <div class=\"alert alert-dismissible alert-warning\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <strong>Produit proche de la date de péremption :  <a href=\"#\" class=\"alert-link\"></a> {{ Histoproduit.produit.nom }} </strong>
                dans le frigo depuis le {{ Histoproduit.DateAchat|date(\"m/d/Y\") }}
                date limite :  {{ Histoproduit.DateLimite|date(\"m/d/Y\") }}
            </div>
         
        {% endif %}



    {% endfor %}


    

<h1>MyDailyFridge : les bons choix pour votre frigo !</h1>

<p>
    MyDailyFridge décrypte les code barres de vos produits
    alimentaires, analyse leur impact sur la santé mais surtout vous evites 
    les gachis alimentaire grâce à son système de notifications pour les dates limites de consommation !
</p>
<img  class =\"image-display\" alt=\"Logo\" src=\"{{ asset('build/image_accueil.png') }}\" width=\"(500)\" height=\"300\" >


<br/><br/><br/>
  <h2>Comment ça marche ?</h2>

<p>Pour utiliser gratuitement et en illimité l’application web “MyDailyFridge”, il suffit de créer un compte et vous aurez accès à ce dernier 24h/7j. </p>

Sur l’application MyDailyFridge vous avez accès aux pages:
<ol>
  <li><strong>Scanner :</strong> Cette page est dédiée pour scanner les codes barres des produits alimentaires afin d’obtenir les informations nutritionnelles.</li>
  <li><strong>Mes produits :</strong> Sur cette page vous trouverez l’ensemble des produits que vous avez scanner précédemment (historique).</li>
  <li><strong>Mon Frigo :</strong> Via cette page vous aurez la visibilité sur les produits alimentaires (scanner) présent dans votre frigo.</li>
  <li><strong>Mes produits périmés :</strong> Cette page liste les produits périmés que vous aviez scannés auparavant.</li>
</ol>


L'équipe MyDailyFridge vous souhaite une bonne visite !

 






{% endblock %}

{% block javascripts %}

    <script>
        const url = new URL('http://localhost:3000/.well-known/mercure');
        url.searchParams.append('topic', 'http://monsite.com/ping');
        

        const eventSource = new EventSource(url);
        eventSource.onmessage = event => {
            console.log(JSON.parse(event.data));
        }
    </script>




{% endblock %}



", "daily_fridge/accueil.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\accueil.html.twig");
    }
}
