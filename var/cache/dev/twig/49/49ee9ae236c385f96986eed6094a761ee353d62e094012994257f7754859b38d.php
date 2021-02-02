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

/* daily_fridge/mes_produits.html.twig */
class __TwigTemplate_5532af39f975547c6963cc0e703bda1c01ec1c81c074b15cc9579270dcff5b20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/mes_produits.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/mes_produits.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/mes_produits.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<h2> Bienvenue sur la page mes produits ! </h2><br/>


    <table class=\"table table-hover\">
    <thead>
        <tr>
        <th scope=\"col\">Nom produits</th>
        <th scope=\"col\">Marque</th>
        <th scope=\"col\">Quantité</th>
        <th scope=\"col\">Date d'achat</th>
        <th scope=\"col\">Date de péremption</th>
        <th scope=\"col\">Etat</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Histoproduits"]) || array_key_exists("Histoproduits", $context) ? $context["Histoproduits"] : (function () { throw new RuntimeError('Variable "Histoproduits" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Histoproduit"]) {
            // line 22
            echo "        <tr class=\"table-light\">
    
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 25), "marque", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "Quantite", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>        
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateAchat", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "datelimite", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>                  
            ";
            // line 30
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "etatH", [], "any", false, false, false, 30), "Périmé")) {
                // line 31
                echo "                <button type=\"button\" class=\"btn btn-danger\">Périmé</button>
            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 32
$context["Histoproduit"], "etatH", [], "any", false, false, false, 32), "Frigo") && -1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateLimite", [], "any", false, false, false, 32), "m/d/Y"), twig_date_format_filter($this->env, "now", "m/d/Y")))) {
                // line 33
                echo "            <button type=\"button\" class=\"btn btn-info\">Au frigo</button>
             <a href=\"#\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"false\">!!!</i></a>
            ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 35
$context["Histoproduit"], "etatH", [], "any", false, false, false, 35), "Frigo")) {
                // line 36
                echo "                <button type=\"button\" class=\"btn btn-info\">Au frigo</button>
                
            ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 38
$context["Histoproduit"], "etatH", [], "any", false, false, false, 38), "Consommé")) {
                // line 39
                echo "                <button type=\"button\" class=\"btn btn-success\">Consommé</button>
            ";
            } else {
                // line 41
                echo "                <button type=\"button\" class=\"btn btn-warning disabled\">Pas dans le Frigo</button>
            ";
            }
            // line 43
            echo "        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Histoproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tr>
    </tbody>
   
    </table> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "daily_fridge/mes_produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 45,  142 => 43,  138 => 41,  134 => 39,  132 => 38,  128 => 36,  126 => 35,  122 => 33,  120 => 32,  117 => 31,  115 => 30,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 22,  86 => 21,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<h2> Bienvenue sur la page mes produits ! </h2><br/>


    <table class=\"table table-hover\">
    <thead>
        <tr>
        <th scope=\"col\">Nom produits</th>
        <th scope=\"col\">Marque</th>
        <th scope=\"col\">Quantité</th>
        <th scope=\"col\">Date d'achat</th>
        <th scope=\"col\">Date de péremption</th>
        <th scope=\"col\">Etat</th>
        </tr>
    </thead>
    <tbody>
    {% for Histoproduit in Histoproduits %}
        <tr class=\"table-light\">
    
        <td>{{ Histoproduit.produit.nom }}</td>
        <td>{{ Histoproduit.produit.marque }}</td>
        <td>{{ Histoproduit.Quantite }}</td>        
        <td>{{ Histoproduit.DateAchat | date('d/m/Y') }}</td>
        <td>{{ Histoproduit.datelimite | date('d/m/Y') }}</td>
        <td>                  
            {% if Histoproduit.etatH == \"Périmé\" %}
                <button type=\"button\" class=\"btn btn-danger\">Périmé</button>
            {% elseif (Histoproduit.etatH == \"Frigo\") and (Histoproduit.DateLimite|date(\"m/d/Y\") < \"now\"|date(\"m/d/Y\")) %}
            <button type=\"button\" class=\"btn btn-info\">Au frigo</button>
             <a href=\"#\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"false\">!!!</i></a>
            {% elseif (Histoproduit.etatH == \"Frigo\") %}
                <button type=\"button\" class=\"btn btn-info\">Au frigo</button>
                
            {% elseif Histoproduit.etatH == \"Consommé\" %}
                <button type=\"button\" class=\"btn btn-success\">Consommé</button>
            {% else %}
                <button type=\"button\" class=\"btn btn-warning disabled\">Pas dans le Frigo</button>
            {% endif %}
        </td>
    {% endfor %}
        </tr>
    </tbody>
   
    </table> 

{% endblock %}", "daily_fridge/mes_produits.html.twig", "D:\\INGETIS20192020\\Projet Fil Rouge\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\mes_produits.html.twig");
    }
}
