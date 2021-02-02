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
class __TwigTemplate_689a2bae77ee15a9058a423f8d5d18d40e65816257a56fa24ff5779e05579f0e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/mon_frigo_detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["Histoproduits"] ?? null));
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
        return array (  413 => 350,  409 => 337,  397 => 327,  390 => 324,  385 => 321,  383 => 320,  379 => 318,  372 => 315,  365 => 311,  361 => 309,  353 => 305,  348 => 302,  346 => 301,  342 => 299,  334 => 295,  329 => 292,  327 => 291,  322 => 288,  314 => 283,  307 => 280,  299 => 275,  293 => 272,  290 => 271,  282 => 266,  276 => 263,  273 => 262,  266 => 258,  262 => 256,  260 => 255,  257 => 254,  250 => 250,  246 => 248,  244 => 247,  235 => 240,  230 => 239,  227 => 238,  222 => 237,  218 => 236,  214 => 235,  210 => 234,  206 => 233,  202 => 232,  198 => 231,  194 => 230,  190 => 229,  186 => 228,  178 => 222,  174 => 95,  170 => 94,  147 => 73,  144 => 71,  136 => 60,  129 => 58,  124 => 56,  121 => 55,  114 => 52,  112 => 51,  107 => 49,  103 => 48,  99 => 47,  95 => 46,  83 => 39,  75 => 33,  71 => 32,  53 => 16,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "daily_fridge/mon_frigo_detail.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\mon_frigo_detail.html.twig");
    }
}
