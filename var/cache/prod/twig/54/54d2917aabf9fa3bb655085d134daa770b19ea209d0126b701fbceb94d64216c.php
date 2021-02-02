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

/* daily_fridge/mes_produits_perimes.html.twig */
class __TwigTemplate_bfefb81dd8587cbf77bd72efad4b7369ef59c6d14cea8159b25d3901a83a8578 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/mes_produits_perimes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<br/>
<h3>Rechercher produit</h3>

    <div class=\"form-group\">

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["searchForm"] ?? null), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "Nom", [], "any", false, false, false, 11), 'row', ["label" => " ", "attr" => ["placeholder" => "Nom produit"]]);
        echo "
    <button class=\"btn btn-primary\">rechercher</button>
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["searchForm"] ?? null), 'form_end');
        echo "

    </div>
<br/>

<h2> Bienvenue sur la page mes produits périmés ! </h2><br/>


    <table class=\"table table-hover\">
    <thead>
        <tr>
        <th scope=\"col\">Nom produits</th>
        <th scope=\"col\">Quantité</th>
        <th scope=\"col\">Date de péremption</th>
        <th scope=\"col\">Etat</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produitsPerimes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produitsPerime"]) {
            // line 32
            echo "    
        <tr class=\"table-light\">
    
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produitsPerime"], "produit", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitsPerime"], "Quantite", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produitsPerime"], "DateLimite", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>
                <button type=\"button\" class=\"btn btn-danger\">Périmé</button>
            </td>
         </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitsPerime'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "       
    </tbody>
    </table> 

    ";
        // line 47
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["produitsPerimes"] ?? null));
        echo "

";
    }

    public function getTemplateName()
    {
        return "daily_fridge/mes_produits_perimes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  117 => 43,  105 => 37,  101 => 36,  97 => 35,  92 => 32,  88 => 31,  67 => 13,  62 => 11,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "daily_fridge/mes_produits_perimes.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\mes_produits_perimes.html.twig");
    }
}
