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
class __TwigTemplate_134fab9176ca9cd70659482fdf90443c14375678a7439274022783729c7608ea extends Template
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
<br/>
<h3>Rechercher produit</h3>

    <div class=\"form-group\">
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 11, $this->source); })()), "Nom", [], "any", false, false, false, 11), 'row', ["label" => " ", "attr" => ["placeholder" => "Nom produit"]]);
        echo "
    <button class=\"btn btn-primary\">Rechercher</button>
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
    </div>

<br/> 

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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Histoproduits"]) || array_key_exists("Histoproduits", $context) ? $context["Histoproduits"] : (function () { throw new RuntimeError('Variable "Histoproduits" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Histoproduit"]) {
            // line 34
            echo "        <tr class=\"table-light\">
    
        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 36), "Nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 37), "marque", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "Quantite", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>        
        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateAchat", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "datelimite", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>                  
            ";
            // line 42
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "etatH", [], "any", false, false, false, 42), "Périmé")) {
                // line 43
                echo "                <button type=\"button\" class=\"btn btn-danger\">Périmé</button>
            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 44
$context["Histoproduit"], "etatH", [], "any", false, false, false, 44), "Frigo") && -1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateLimite", [], "any", false, false, false, 44), "m/d/Y"), twig_date_format_filter($this->env, "now", "m/d/Y")))) {
                // line 45
                echo "            <button type=\"button\" class=\"btn btn-info\">Au frigo</button>
             <a href=\"#\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"false\">!!!</i></a>
            ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 47
$context["Histoproduit"], "etatH", [], "any", false, false, false, 47), "Frigo")) {
                // line 48
                echo "                <button type=\"button\" class=\"btn btn-info\">Au frigo</button>
                
            ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 50
$context["Histoproduit"], "etatH", [], "any", false, false, false, 50), "Consommé")) {
                // line 51
                echo "                <button type=\"button\" class=\"btn btn-success\">Consommé</button>
            ";
            } else {
                // line 53
                echo "                <button type=\"button\" class=\"btn btn-warning disabled\">Pas dans le Frigo</button>
            ";
            }
            // line 55
            echo "        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Histoproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tr>
    </tbody>
   
    </table> 

    ";
        // line 62
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["Histoproduits"]) || array_key_exists("Histoproduits", $context) ? $context["Histoproduits"] : (function () { throw new RuntimeError('Variable "Histoproduits" does not exist.', 62, $this->source); })()));
        echo "

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
        return array (  177 => 62,  170 => 57,  163 => 55,  159 => 53,  155 => 51,  153 => 50,  149 => 48,  147 => 47,  143 => 45,  141 => 44,  138 => 43,  136 => 42,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  111 => 34,  107 => 33,  84 => 13,  79 => 11,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<br/>
<h3>Rechercher produit</h3>

    <div class=\"form-group\">
    {{ form_start(searchForm) }}
    {{ form_row(searchForm.Nom, {'label': \" \", 'attr': {'placeholder': 'Nom produit'}}) }}
    <button class=\"btn btn-primary\">Rechercher</button>
    {{ form_end(searchForm) }}
    </div>

<br/> 

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
    
        <td>{{ Histoproduit.produit.Nom }}</td>
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

    {{ knp_pagination_render(Histoproduits) }}

{% endblock %}", "daily_fridge/mes_produits.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\mes_produits.html.twig");
    }
}
