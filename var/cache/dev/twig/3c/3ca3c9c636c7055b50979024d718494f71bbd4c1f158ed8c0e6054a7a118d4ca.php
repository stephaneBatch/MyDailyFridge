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

/* daily_fridge/mon_frigo_detail.html.twig */
class __TwigTemplate_2090add09816f6093faadd28fca799499a6861f226eec8b12d9538141c417af5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/mon_frigo_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/mon_frigo_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/mon_frigo_detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
";
        // line 16
        echo "
<h2> Bienvenue sur la page mon frigo ! </h2><br/>


    <table class=\"table table-hover\">
    <thead>
        <tr>
        <th scope=\"col\">Désignation</th>
        <th scope=\"col\">Marque</th>
        <th scope=\"col\">Quantité</th>
        <th scope=\"col\">Date d'achat</th>
        <th scope=\"col\">Date de péremption</th>
        <th scope=\"col\">Etat</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Histoproduits"]) || array_key_exists("Histoproduits", $context) ? $context["Histoproduits"] : (function () { throw new RuntimeError('Variable "Histoproduits" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Histoproduit"]) {
            // line 33
            echo "        <tr class=\"table-light\">
    
        <td>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" checked=\"\">
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 39), "nom", [], "any", false, false, false, 39), "html", null, true);
            echo " </a>
                </label>
            </div>

             

        </td>
        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 46), "marque", [], "any", false, false, false, 46), "html", null, true);
            echo " </td>
        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "quantite", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateAchat", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "datelimite", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>
             ";
            // line 51
            if (-1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateLimite", [], "any", false, false, false, 51), "m/d/Y"), twig_date_format_filter($this->env, "now", "m/d/Y"))) {
                // line 52
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo_update_perimer", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn btn-danger delete-produit\" >Attention A Ejecter</a>
                           
            ";
            } else {
                // line 55
                echo "                
                <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo_update_consommer", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\"  class=\"btn btn-success consommer-produit\"  >Consommer</a>
            ";
            }
            // line 58
            echo "        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Histoproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tr>
    </tbody>
    </table> 

    

    ";
        // line 71
        echo "
    ";
        // line 73
        echo "
    <div class=\"modal\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <p>Modal body text goes here.</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 95
            echo "
        
        ";
            // line 222
            echo "
        <div class=\"container\">
            <div class=\"float-left\">
                

                    <h4>Nutricore :  
                ";
            // line 228
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 228), "e")) {
                echo "    
                <font color=\"red\">";
                // line 229
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 229)), "html", null, true);
                echo "</font>
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 230
$context["produit"], "nutriscoreGrade", [], "any", false, false, false, 230), "d")) {
                echo " 
                <font color=\"orange\">";
                // line 231
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 231)), "html", null, true);
                echo "</font>
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 232
$context["produit"], "nutriscoreGrade", [], "any", false, false, false, 232), "c")) {
                echo " 
                <font color=\"yellow\">";
                // line 233
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 233)), "html", null, true);
                echo "</font>
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 234
$context["produit"], "nutriscoreGrade", [], "any", false, false, false, 234), "b")) {
                echo " 
                <font color=\"green\">";
                // line 235
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 235)), "html", null, true);
                echo "</font>
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 236
$context["produit"], "nutriscoreGrade", [], "any", false, false, false, 236), "a")) {
                echo " 
                <font color=\"green\">";
                // line 237
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 237)), "html", null, true);
                echo "</font>
                ";
            } else {
                // line 238
                echo " 
                ";
                // line 239
                echo "Pas noté !";
                echo "
                ";
            }
            // line 240
            echo " 

                </h4>  
                <br/>

                <h4> Les + </h4>
                
                ";
            // line 247
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxProteine", [], "any", false, false, false, 247), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxProteine", [], "any", false, false, false, 247), "undefined"))) {
                // line 248
                echo "                    
                    <ul>
                        <li>Taux de proteine : ";
                // line 250
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxProteine", [], "any", false, false, false, 250), "html", null, true);
                echo " g</li>
                    </ul>

                ";
            }
            // line 254
            echo "                
                ";
            // line 255
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxFibre", [], "any", false, false, false, 255), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxFibre", [], "any", false, false, false, 255), "undefined"))) {
                // line 256
                echo "
                    <ul>
                        <li>Taux de fibre : ";
                // line 258
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxFibre", [], "any", false, false, false, 258), "html", null, true);
                echo " g</li>
                    </ul>
                
                ";
            }
            // line 262
            echo "
                ";
            // line 263
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxEnergie", [], "any", false, false, false, 263), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxEnergie", [], "any", false, false, false, 263), "undefined"))) {
                echo "  

                    <ul>
                        <li>Taux Energie : ";
                // line 266
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxEnergie", [], "any", false, false, false, 266), "html", null, true);
                echo " g</li>

                    </ul>

                ";
            }
            // line 271
            echo "                
                ";
            // line 272
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "tauxcalcium", [], "any", false, false, false, 272), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "tauxcalcium", [], "any", false, false, false, 272), "undefined"))) {
                echo "  

                    <ul>
                        <li>Taux Calcium : ";
                // line 275
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "tauxcalcium", [], "any", false, false, false, 275), "html", null, true);
                echo " g</li>

                    </ul>

                ";
            }
            // line 280
            echo "                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "tauxsodium", [], "any", false, false, false, 280), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "tauxsodium", [], "any", false, false, false, 280), "undefined"))) {
                echo "  

                    <ul>
                        <li>Taux Sodium : ";
                // line 283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "tauxsodium", [], "any", false, false, false, 283), "html", null, true);
                echo " g</li>

                    </ul>

                ";
            }
            // line 288
            echo "
                <h4> Les - </h4>
                
                ";
            // line 291
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSel", [], "any", false, false, false, 291), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSel", [], "any", false, false, false, 291), "undefined"))) {
                // line 292
                echo "                    
                    <ul>

                        <li> Taux de sel :  ";
                // line 295
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSel", [], "any", false, false, false, 295), "html", null, true);
                echo " g</li>

                    </ul>

                ";
            }
            // line 299
            echo " 

                ";
            // line 301
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSucre", [], "any", false, false, false, 301), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSucre", [], "any", false, false, false, 301), "undefined"))) {
                // line 302
                echo "
                    <ul>
                        
                        <li> Taux de sucre :  ";
                // line 305
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSucre", [], "any", false, false, false, 305), "html", null, true);
                echo " g</li>
                    
                    </ul>

                ";
            }
            // line 309
            echo " 

                ";
            // line 311
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxGras", [], "any", false, false, false, 311), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxGras", [], "any", false, false, false, 311), "undefined"))) {
                echo " 

                    <ul>
                        
                        <li>Taux de gras : ";
                // line 315
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxGras", [], "any", false, false, false, 315), "html", null, true);
                echo " g</li>
                    
                    </ul>
                ";
            }
            // line 318
            echo " 

                ";
            // line 320
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxAdditif", [], "any", false, false, false, 320), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxAdditif", [], "any", false, false, false, 320), "undefined"))) {
                // line 321
                echo "
                    <ul>
                        
                        <li>Taux d'additif : ";
                // line 324
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxAdditif", [], "any", false, false, false, 324), "html", null, true);
                echo " g</li>

                    </ul>
                ";
            }
            // line 327
            echo " 






            </div>
            <div class=\"float-right\">
                
                <img  class =\"image-display\" alt=\"Logo\" src=\"";
            // line 337
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/Nutriscore_2.png"), "html", null, true);
            echo "\" width=\"(300)\" height=\"200\" >
                ";
            // line 350
            echo " 
                   
                <p>
                    Le Nutri-Score, grâce à une lettre et à une couleur, </br>
                    informe les consommateurs sur la qualité nutritionnelle d’un produit. </br>
                    Chaque produit est ainsi positionné sur une échelle à 5 niveaux allant :
                </p>

                <ul>
                    <li>du produit le plus favorable sur le plan nutritionnel (classé A) </li>
                </ul>

                <ul>
                    <li>au produit le moins favorable sur le plan nutritionnel (classé E) </li>
                </ul>

                <p> Ref : www.mangerbouger.fr</p> 
            </div>
            

        </div>
        </br></br></br></br></br></br></br></br></br></br></br></br></br>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "daily_fridge/mon_frigo_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 350,  427 => 337,  415 => 327,  408 => 324,  403 => 321,  401 => 320,  397 => 318,  390 => 315,  383 => 311,  379 => 309,  371 => 305,  366 => 302,  364 => 301,  360 => 299,  352 => 295,  347 => 292,  345 => 291,  340 => 288,  332 => 283,  325 => 280,  317 => 275,  311 => 272,  308 => 271,  300 => 266,  294 => 263,  291 => 262,  284 => 258,  280 => 256,  278 => 255,  275 => 254,  268 => 250,  264 => 248,  262 => 247,  253 => 240,  248 => 239,  245 => 238,  240 => 237,  236 => 236,  232 => 235,  228 => 234,  224 => 233,  220 => 232,  216 => 231,  212 => 230,  208 => 229,  204 => 228,  196 => 222,  192 => 95,  188 => 94,  165 => 73,  162 => 71,  154 => 60,  147 => 58,  142 => 56,  139 => 55,  132 => 52,  130 => 51,  125 => 49,  121 => 48,  117 => 47,  113 => 46,  101 => 39,  93 => 33,  89 => 32,  71 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{# <br/>
<h3>Rechercher produit</h3>

    <div class=\"form-group\">
    {% form_theme searchForm 'bootstrap_4_layout.html.twig' %}
    {{ form_start(searchForm) }}
    {{ form_row(searchForm.Nom, {'label': \" \", 'attr': {'placeholder': 'Nom produit'}}) }}
    <button class=\"btn btn-primary\">rechercher</button>
    {{ form_end(searchForm) }}

<br/> #}

<h2> Bienvenue sur la page mon frigo ! </h2><br/>


    <table class=\"table table-hover\">
    <thead>
        <tr>
        <th scope=\"col\">Désignation</th>
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
    
        <td>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" checked=\"\">
                        <a href=\"{{path('daily_fridge_Mon_Frigo_detail',{id: Histoproduit.produit.id })}}\" > {{ Histoproduit.produit.nom }} </a>
                </label>
            </div>

             

        </td>
        <td>{{ Histoproduit.produit.marque }} </td>
        <td>{{ Histoproduit.quantite }}</td>
        <td>{{ Histoproduit.DateAchat | date('d/m/Y') }}</td>
        <td>{{ Histoproduit.datelimite | date('d/m/Y') }}</td>
        <td>
             {% if  (Histoproduit.DateLimite|date(\"m/d/Y\") < \"now\"|date(\"m/d/Y\"))  %}
                <a href=\"{{path('daily_fridge_Mon_Frigo_update_perimer',{id: Histoproduit.produit.id })}}\" class=\"btn btn-danger delete-produit\" >Attention A Ejecter</a>
                           
            {% else %}
                
                <a href=\"{{path('daily_fridge_Mon_Frigo_update_consommer',{id: Histoproduit.produit.id })}}\"  class=\"btn btn-success consommer-produit\"  >Consommer</a>
            {% endif %}
        </td>
    {% endfor %}
        </tr>
    </tbody>
    </table> 

    

    {# {% if  produit.id != 0  %}
             
        {{ produit.marque }}

    {% endif %} #}

    {# <button type=\"submit\" class=\"btn btn-primary\">Recette</button> #}

    <div class=\"modal\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Modal title</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <p>Modal body text goes here.</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

    {% for produit in produit %}

        
        {# <div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
        <div class=\"card-header\">{{ produit.Nom }}</div>
        <div class=\"card-body\">
        
        
            <h4>Nutricore :  
            {% if produit.nutriscoreGrade == 'e'  %}    
            <font color=\"red\">{{ produit.nutriscoreGrade |capitalize }}</font>
            {% elseif produit.nutriscoreGrade == 'd'  %} 
            <font color=\"orange\">{{ produit.nutriscoreGrade |capitalize }}</font>
            {% elseif produit.nutriscoreGrade == 'c'  %} 
            <font color=\"yellow\">{{ produit.nutriscoreGrade |capitalize }}</font>
            {% elseif produit.nutriscoreGrade == 'b' %} 
            <font color=\"green\">{{ produit.nutriscoreGrade |capitalize }}</font>
            {% elseif produit.nutriscoreGrade == 'a'  %} 
            <font color=\"green\">{{ produit.nutriscoreGrade |capitalize }}</font>
            {% else %} 
            {{ 'Pas noté !'}}
            {% endif %} 

            </h4>  
        <br/>

        <h4> Les + </h4>
        
        {% if  (produit.TauxProteine != 0) and (produit.TauxProteine != 'undefined' ) %}
            
            <ul>
                <li>Taux de proteine : {{ produit.TauxProteine }} g</li>
            </ul>

        {% endif %}
        
        {% if  (produit.TauxFibre != 0)  and (produit.TauxFibre != 'undefined' ) %}

            <ul>
                <li>Taux de fibre : {{ produit.TauxFibre }} g</li>
            </ul>
        
        {% endif %}

        {% if  (produit.TauxEnergie != 0)  and (produit.TauxEnergie != 'undefined' ) %}  

            <ul>
                <li>Taux Energie : {{ produit.TauxEnergie }} g</li>

            </ul>

        {% endif %}
        
        {% if  (produit.tauxcalcium != 0)  and (produit.tauxcalcium != 'undefined' ) %}  

            <ul>
                <li>Taux Calcium : {{ produit.tauxcalcium }} g</li>

            </ul>

        {% endif %}
        {% if  (produit.tauxsodium != 0)  and (produit.tauxsodium != 'undefined' ) %}  

            <ul>
                <li>Taux Sodium : {{ produit.tauxsodium }} g</li>

            </ul>

        {% endif %}

        <h4> Les - </h4>
        
        {% if  (produit.TauxSel  != 0 ) and (produit.TauxSel != 'undefined' ) %}
            
            <ul>

                <li> Taux de sel :  {{ produit.TauxSel }} g</li>

            </ul>

        {% endif %} 

        {% if  (produit.TauxSucre != 0 ) and (produit.TauxSucre != 'undefined' ) %}

            <ul>
                
                <li> Taux de sucre :  {{ produit.TauxSucre }} g</li>
            
            </ul>

        {% endif %} 

        {% if  (produit.TauxGras != 0 ) and (produit.TauxGras != 'undefined' ) %} 

            <ul>
                
                <li>Taux de gras : {{ produit.TauxGras }} g</li>
            
            </ul>
        {% endif %} 

        {% if  (produit.TauxAdditif != 0 ) and (produit.TauxAdditif != 'undefined' )  %}

            <ul>
                
                <li>Taux d'additif : {{ produit.TauxAdditif }} g</li>

            </ul>
        {% endif %} 
           
        </div>
        </div>

         <img  class =\"image-display\" alt=\"Logo\" src=\"{{ asset('build/Nutriscore.png') }}\" width=\"(300)\" height=\"200\" >
        <p>
            Le Nutri-Score, grâce à une lettre et à une couleur, informe les consommateurs sur la qualité nutritionnelle d’un produit. 
            Chaque produit est ainsi positionné sur une échelle à 5 niveaux allant :
        </p>

        <ul>
            <li>du produit  le plus favorable sur le plan nutritionnel (classé A) </li>
        </ul>

        <ul>
            <li>au produit le moins favorable sur le plan nutritionnel (classé E) </li>
        </ul>

        <p> Ref : www.mangerbouger.fr</p> #}

        <div class=\"container\">
            <div class=\"float-left\">
                

                    <h4>Nutricore :  
                {% if produit.nutriscoreGrade == 'e'  %}    
                <font color=\"red\">{{ produit.nutriscoreGrade |capitalize }}</font>
                {% elseif produit.nutriscoreGrade == 'd'  %} 
                <font color=\"orange\">{{ produit.nutriscoreGrade |capitalize }}</font>
                {% elseif produit.nutriscoreGrade == 'c'  %} 
                <font color=\"yellow\">{{ produit.nutriscoreGrade |capitalize }}</font>
                {% elseif produit.nutriscoreGrade == 'b' %} 
                <font color=\"green\">{{ produit.nutriscoreGrade |capitalize }}</font>
                {% elseif produit.nutriscoreGrade == 'a'  %} 
                <font color=\"green\">{{ produit.nutriscoreGrade |capitalize }}</font>
                {% else %} 
                {{ 'Pas noté !'}}
                {% endif %} 

                </h4>  
                <br/>

                <h4> Les + </h4>
                
                {% if  (produit.TauxProteine != 0) and (produit.TauxProteine != 'undefined' ) %}
                    
                    <ul>
                        <li>Taux de proteine : {{ produit.TauxProteine }} g</li>
                    </ul>

                {% endif %}
                
                {% if  (produit.TauxFibre != 0)  and (produit.TauxFibre != 'undefined' ) %}

                    <ul>
                        <li>Taux de fibre : {{ produit.TauxFibre }} g</li>
                    </ul>
                
                {% endif %}

                {% if  (produit.TauxEnergie != 0)  and (produit.TauxEnergie != 'undefined' ) %}  

                    <ul>
                        <li>Taux Energie : {{ produit.TauxEnergie }} g</li>

                    </ul>

                {% endif %}
                
                {% if  (produit.tauxcalcium != 0)  and (produit.tauxcalcium != 'undefined' ) %}  

                    <ul>
                        <li>Taux Calcium : {{ produit.tauxcalcium }} g</li>

                    </ul>

                {% endif %}
                {% if  (produit.tauxsodium != 0)  and (produit.tauxsodium != 'undefined' ) %}  

                    <ul>
                        <li>Taux Sodium : {{ produit.tauxsodium }} g</li>

                    </ul>

                {% endif %}

                <h4> Les - </h4>
                
                {% if  (produit.TauxSel  != 0 ) and (produit.TauxSel != 'undefined' ) %}
                    
                    <ul>

                        <li> Taux de sel :  {{ produit.TauxSel }} g</li>

                    </ul>

                {% endif %} 

                {% if  (produit.TauxSucre != 0 ) and (produit.TauxSucre != 'undefined' ) %}

                    <ul>
                        
                        <li> Taux de sucre :  {{ produit.TauxSucre }} g</li>
                    
                    </ul>

                {% endif %} 

                {% if  (produit.TauxGras != 0 ) and (produit.TauxGras != 'undefined' ) %} 

                    <ul>
                        
                        <li>Taux de gras : {{ produit.TauxGras }} g</li>
                    
                    </ul>
                {% endif %} 

                {% if  (produit.TauxAdditif != 0 ) and (produit.TauxAdditif != 'undefined' )  %}

                    <ul>
                        
                        <li>Taux d'additif : {{ produit.TauxAdditif }} g</li>

                    </ul>
                {% endif %} 






            </div>
            <div class=\"float-right\">
                
                <img  class =\"image-display\" alt=\"Logo\" src=\"{{ asset('build/Nutriscore_2.png') }}\" width=\"(300)\" height=\"200\" >
                {# <p>
                    Le Nutri-Score, grâce à une lettre et à une couleur, informe les consommateurs sur la qualité nutritionnelle d’un produit. 
                    Chaque produit est ainsi positionné sur une échelle à 5 niveaux allant :
                </p>

                <ul>
                    <li>du produit  le plus favorable sur le plan nutritionnel (classé A) </li>
                </ul>

                <ul>
                    <li>au produit le moins favorable sur le plan nutritionnel (classé E) </li>
                </ul>
     #} 
                   
                <p>
                    Le Nutri-Score, grâce à une lettre et à une couleur, </br>
                    informe les consommateurs sur la qualité nutritionnelle d’un produit. </br>
                    Chaque produit est ainsi positionné sur une échelle à 5 niveaux allant :
                </p>

                <ul>
                    <li>du produit le plus favorable sur le plan nutritionnel (classé A) </li>
                </ul>

                <ul>
                    <li>au produit le moins favorable sur le plan nutritionnel (classé E) </li>
                </ul>

                <p> Ref : www.mangerbouger.fr</p> 
            </div>
            

        </div>
        </br></br></br></br></br></br></br></br></br></br></br></br></br>
        
    {% endfor %}
{% endblock %}", "daily_fridge/mon_frigo_detail.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\mon_frigo_detail.html.twig");
    }
}
