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
class __TwigTemplate_a7f0380957cfda8211505fa026132c7ec43b1f1c8d90110e404df32174cbbe34 extends Template
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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Histoproduits"]) || array_key_exists("Histoproduits", $context) ? $context["Histoproduits"] : (function () { throw new RuntimeError('Variable "Histoproduits" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Histoproduit"]) {
            // line 21
            echo "        <tr class=\"table-light\">
    
        <td>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" checked=\"\">
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
            echo " </a>
                </label>
            </div>

             

        </td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 34), "marque", [], "any", false, false, false, 34), "html", null, true);
            echo " </td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "quantite", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateAchat", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "datelimite", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>
             ";
            // line 39
            if (-1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateLimite", [], "any", false, false, false, 39), "m/d/Y"), twig_date_format_filter($this->env, "now", "m/d/Y"))) {
                // line 40
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo_update_perimer", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"btn btn-danger delete-produit\" >Attention A Ejecter</a>
                           
            ";
            } else {
                // line 43
                echo "                
                <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo_update_consommer", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"  class=\"btn btn-success consommer-produit\"  >Consommer</a>
            ";
            }
            // line 46
            echo "        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Histoproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tr>
    </tbody>
    </table> 

    

    ";
        // line 59
        echo "
    ";
        // line 61
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
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["produit"]);
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 83
            echo "
        
        ";
            // line 210
            echo "
        <div class=\"container\">
            <div class=\"float-left\">
                

                    <h4>Nutricore :  
                ";
            // line 216
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 216), "e")) {
                echo "    
                <font color=\"red\">";
                // line 217
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 217)), "html", null, true);
                echo "</font>
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 218
$context["produit"], "nutriscoreGrade", [], "any", false, false, false, 218), "d")) {
                echo " 
                <font color=\"orange\">";
                // line 219
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 219)), "html", null, true);
                echo "</font>
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 220
$context["produit"], "nutriscoreGrade", [], "any", false, false, false, 220), "c")) {
                echo " 
                <font color=\"yellow\">";
                // line 221
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 221)), "html", null, true);
                echo "</font>
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 222
$context["produit"], "nutriscoreGrade", [], "any", false, false, false, 222), "b")) {
                echo " 
                <font color=\"green\">";
                // line 223
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 223)), "html", null, true);
                echo "</font>
                ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 224
$context["produit"], "nutriscoreGrade", [], "any", false, false, false, 224), "a")) {
                echo " 
                <font color=\"green\">";
                // line 225
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nutriscoreGrade", [], "any", false, false, false, 225)), "html", null, true);
                echo "</font>
                ";
            } else {
                // line 226
                echo " 
                ";
                // line 227
                echo "Pas noté !";
                echo "
                ";
            }
            // line 228
            echo " 

                </h4>  
                <br/>

                <h4> Les + </h4>
                
                ";
            // line 235
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxProteine", [], "any", false, false, false, 235), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxProteine", [], "any", false, false, false, 235), "undefined"))) {
                // line 236
                echo "                    
                    <ul>
                        <li>Taux de proteine : ";
                // line 238
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxProteine", [], "any", false, false, false, 238), "html", null, true);
                echo " g</li>
                    </ul>

                ";
            }
            // line 242
            echo "                
                ";
            // line 243
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxFibre", [], "any", false, false, false, 243), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxFibre", [], "any", false, false, false, 243), "undefined"))) {
                // line 244
                echo "
                    <ul>
                        <li>Taux de fibre : ";
                // line 246
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxFibre", [], "any", false, false, false, 246), "html", null, true);
                echo " g</li>
                    </ul>
                
                ";
            }
            // line 250
            echo "
                ";
            // line 251
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxEnergie", [], "any", false, false, false, 251), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxEnergie", [], "any", false, false, false, 251), "undefined"))) {
                echo "  

                    <ul>
                        <li>Taux Energie : ";
                // line 254
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxEnergie", [], "any", false, false, false, 254), "html", null, true);
                echo " g</li>

                    </ul>

                ";
            }
            // line 259
            echo "                
                ";
            // line 260
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "tauxcalcium", [], "any", false, false, false, 260), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "tauxcalcium", [], "any", false, false, false, 260), "undefined"))) {
                echo "  

                    <ul>
                        <li>Taux Calcium : ";
                // line 263
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "tauxcalcium", [], "any", false, false, false, 263), "html", null, true);
                echo " g</li>

                    </ul>

                ";
            }
            // line 268
            echo "                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "tauxsodium", [], "any", false, false, false, 268), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "tauxsodium", [], "any", false, false, false, 268), "undefined"))) {
                echo "  

                    <ul>
                        <li>Taux Sodium : ";
                // line 271
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "tauxsodium", [], "any", false, false, false, 271), "html", null, true);
                echo " g</li>

                    </ul>

                ";
            }
            // line 276
            echo "
                <h4> Les - </h4>
                
                ";
            // line 279
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSel", [], "any", false, false, false, 279), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSel", [], "any", false, false, false, 279), "undefined"))) {
                // line 280
                echo "                    
                    <ul>

                        <li> Taux de sel :  ";
                // line 283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSel", [], "any", false, false, false, 283), "html", null, true);
                echo " g</li>

                    </ul>

                ";
            }
            // line 287
            echo " 

                ";
            // line 289
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSucre", [], "any", false, false, false, 289), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSucre", [], "any", false, false, false, 289), "undefined"))) {
                // line 290
                echo "
                    <ul>
                        
                        <li> Taux de sucre :  ";
                // line 293
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxSucre", [], "any", false, false, false, 293), "html", null, true);
                echo " g</li>
                    
                    </ul>

                ";
            }
            // line 297
            echo " 

                ";
            // line 299
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxGras", [], "any", false, false, false, 299), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxGras", [], "any", false, false, false, 299), "undefined"))) {
                echo " 

                    <ul>
                        
                        <li>Taux de gras : ";
                // line 303
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxGras", [], "any", false, false, false, 303), "html", null, true);
                echo " g</li>
                    
                    </ul>
                ";
            }
            // line 306
            echo " 

                ";
            // line 308
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxAdditif", [], "any", false, false, false, 308), 0) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["produit"], "TauxAdditif", [], "any", false, false, false, 308), "undefined"))) {
                // line 309
                echo "
                    <ul>
                        
                        <li>Taux d'additif : ";
                // line 312
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "TauxAdditif", [], "any", false, false, false, 312), "html", null, true);
                echo " g</li>

                    </ul>
                ";
            }
            // line 315
            echo " 






            </div>
            <div class=\"float-right\">
                
                <img  class =\"image-display\" alt=\"Logo\" src=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/Nutriscore_2.png"), "html", null, true);
            echo "\" width=\"(300)\" height=\"200\" >
                ";
            // line 338
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
        return array (  428 => 338,  424 => 325,  412 => 315,  405 => 312,  400 => 309,  398 => 308,  394 => 306,  387 => 303,  380 => 299,  376 => 297,  368 => 293,  363 => 290,  361 => 289,  357 => 287,  349 => 283,  344 => 280,  342 => 279,  337 => 276,  329 => 271,  322 => 268,  314 => 263,  308 => 260,  305 => 259,  297 => 254,  291 => 251,  288 => 250,  281 => 246,  277 => 244,  275 => 243,  272 => 242,  265 => 238,  261 => 236,  259 => 235,  250 => 228,  245 => 227,  242 => 226,  237 => 225,  233 => 224,  229 => 223,  225 => 222,  221 => 221,  217 => 220,  213 => 219,  209 => 218,  205 => 217,  201 => 216,  193 => 210,  189 => 83,  185 => 82,  162 => 61,  159 => 59,  151 => 48,  144 => 46,  139 => 44,  136 => 43,  129 => 40,  127 => 39,  122 => 37,  118 => 36,  114 => 35,  110 => 34,  98 => 27,  90 => 21,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

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
