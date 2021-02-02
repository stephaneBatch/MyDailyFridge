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

/* daily_fridge/mon_frigo.html.twig */
class __TwigTemplate_1ea98db27c3b4980302bd9b3789254a3469549b196effd715076ebc01e7f4c4d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/mon_frigo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/mon_frigo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
            echo " </a>
                </label>
            </div>

        </td>
        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 45), "marque", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "quantite", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateAchat", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "datelimite", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>
             ";
            // line 50
            if (-1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "DateLimite", [], "any", false, false, false, 50), "m/d/Y"), twig_date_format_filter($this->env, "now", "m/d/Y"))) {
                // line 51
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo_update_perimer", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-danger delete-produit\" >Attention A Ejecter</a>
                           
            ";
            } else {
                // line 54
                echo "                
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo_update_consommer", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Histoproduit"], "produit", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\"  class=\"btn btn-success consommer-produit\"  >Consommer</a>
            ";
            }
            // line 57
            echo "        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Histoproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tr>
    </tbody>
    </table> 

    ";
        // line 63
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["Histoproduits"] ?? null));
        echo "

    ";
        // line 66
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "daily_fridge/mon_frigo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  150 => 63,  144 => 59,  137 => 57,  132 => 55,  129 => 54,  122 => 51,  120 => 50,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  93 => 40,  84 => 33,  80 => 32,  62 => 16,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "daily_fridge/mon_frigo.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\mon_frigo.html.twig");
    }
}
