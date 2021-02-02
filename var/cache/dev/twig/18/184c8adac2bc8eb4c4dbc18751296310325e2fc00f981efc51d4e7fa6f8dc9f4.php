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

/* base.html.twig */
class __TwigTemplate_b0e06fc6b309424e2179389ba8817279582c673e3b10372075b00b1ca49cb8b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        
  <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        
        <!-- Font Awesome CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/litera/bootstrap.min.css\">

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
        
        
        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    </head>
    <body bgcolor=\"red\">

        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <img  class =\"image-display\" alt=\"Logo\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/logo.png"), "html", null, true);
        echo "\" >
            <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_index");
        echo "\">MyDailyFridge</a>
            
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
        ";
        // line 37
        echo "        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_accueil");
        echo "\">Accueil <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href='";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Scan");
        echo "'>Scanner</a> 
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mes_Produits");
        echo "\">Mes produits</a>
            </li>            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Mon_Frigo");
        echo "\">Mon frigo</a>
            </li>
            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_produits_perimes");
        echo "\">Mes produits périmés</a>
            </li>

            ";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\"><font color=\"white\"><strong><u>Inscription</u></strong></font></a>      
            </li>
            ";
        }
        // line 60
        echo "  
           
           ";
        // line 68
        echo "
            <!-- Affichage du nom de l'utilisateur connecté -->
            ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "sexe", [], "any", false, false, false, 70), "Masculin"))) {
            // line 71
            echo "            <li class=\"nav-item\">
                <div class=\"nav-link\"><font color=\"white\"><strong>";
            // line 72
            echo twig_escape_filter($this->env, ((("M. " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "prenom", [], "any", false, false, false, 72)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "username", [], "any", false, false, false, 72)), "html", null, true);
            echo " </font> </strong></div>
            </li>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "sexe", [], "any", false, false, false, 74), "Féminin"))) {
            // line 75
            echo "            <li class=\"nav-item\">
                <div class=\"nav-link\"><font color=\"white\"><strong>";
            // line 76
            echo twig_escape_filter($this->env, ((("Mme " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "prenom", [], "any", false, false, false, 76)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "username", [], "any", false, false, false, 76)), "html", null, true);
            echo "</font> </strong> </div>
            </li>
            ";
        }
        // line 79
        echo "
              ";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            echo "            <li class=\"nav-item\"> 
                <a class=\"nav-link\" href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\"><font color=\"white\"><strong><u>Connexion</strong></u></font></a>
            </li>
            ";
        } else {
            // line 85
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\"><font color=\"white\"><div style=\"text-align:left;\"><u>Deconnexion</u></div></font></a>
                    ";
            // line 88
            echo "            </li>
            ";
        }
        // line 89
        echo "        
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
            </li>  
             
            </ul>            
        </div>
        </nav>

        <div class=\"container\">   
             
                ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        echo "  
        </div>
         
        
        ";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "        
        </br></br></br></br></br></br></br></br>
         <!-- Footer -->
    <footer class=\"page-footer font-small blue-grey lighten-5\">

    <div style=\"background-color: #21d192;\">
        <div class=\"container\">

        <!-- Grid row-->
        <div class=\"row py-4 d-flex align-items-center\">

            <!-- Grid column -->
            <div class=\"col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0\">
            <h6 class=\"mb-0\">Restez connecté avec nous via les réseaux sociaux</h6>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class=\"container text-center text-md-left mt-5\">

        <!-- Grid row -->
        <div class=\"row mt-3 dark-grey-text\">

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mb-4\">

            <!-- Content -->
            <h6 class=\"text-uppercase font-weight-bold\">  
                <i class=\"fa fa-info-circle\" aria-hidden=\"true\">
                    Information
                </i>                            
            </h6>
            <hr class=\"teal accent-3 mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px;\">
           
            <p>
                <a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_mention_legal");
        echo "\" >Mention Légale</a>
            </p>

            <p>
                <a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_mention_legal");
        echo "\" >Comment ça marche ?</a>
            </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">

            <!-- Links -->
            <h6 class=\"text-uppercase font-weight-bold\">
            
                <i class=\"fa fa-globe\"> Réseaux Sociaux  </i> 
            </h6>
            <hr class=\"teal accent-3 mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px;\">
               
            <p>
                <a href=\"https://www.facebook.com/My-daily-fridge-102791478141662\" class=\"fa fa-facebook\">acebook</a>
            </p>
            <p>
            </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">

            <!-- Links -->
            <h6 class=\"text-uppercase font-weight-bold\">
                <i class=\"fa fa-address-card\" aria-hidden=\"true\">
                    Contact
                </i>
            </h6>
            <hr class=\"teal accent-3 mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px;\">
            <p>
                <a href=\"mailto:admin@mydailyfridge.com\">admin@mydailyfridge.com</a>
            
            </p>

        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class=\"footer-copyright text-center text-black-50 py-3\">© 2020 Copyright:
        <a class=\"dark-grey-text\" href=\"https://mydailyfridge.com/\"> MyDailyFridge.com</a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->
       
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 104,  378 => 100,  360 => 23,  341 => 7,  270 => 150,  263 => 146,  220 => 105,  218 => 104,  211 => 100,  199 => 91,  195 => 89,  191 => 88,  187 => 86,  184 => 85,  178 => 82,  175 => 81,  173 => 80,  170 => 79,  164 => 76,  161 => 75,  159 => 74,  154 => 72,  151 => 71,  149 => 70,  145 => 68,  141 => 60,  135 => 58,  132 => 57,  130 => 56,  124 => 53,  117 => 49,  111 => 46,  105 => 43,  99 => 40,  94 => 37,  86 => 29,  82 => 28,  76 => 24,  74 => 23,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <title>{% block title %}Welcome!{% endblock %}</title>

        
  <!-- Bootstrap CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        
        <!-- Font Awesome CSS -->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/litera/bootstrap.min.css\">

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
        
        
        {% block stylesheets %}{% endblock %}
    </head>
    <body bgcolor=\"red\">

        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <img  class =\"image-display\" alt=\"Logo\" src=\"{{ asset('build/logo.png') }}\" >
            <a class=\"navbar-brand\" href=\"{{path('daily_fridge_index')}}\">MyDailyFridge</a>
            
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
        {# <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button> #}
        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('daily_fridge_accueil')}}\">Accueil <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href='{{path('daily_fridge_Scan')}}'>Scanner</a> 
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('daily_fridge_Mes_Produits') }}\">Mes produits</a>
            </li>            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('daily_fridge_Mon_Frigo') }}\">Mon frigo</a>
            </li>
            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('mes_produits_perimes') }}\">Mes produits périmés</a>
            </li>

            {% if not app.user %}
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('security_registration')}}\"><font color=\"white\"><strong><u>Inscription</u></strong></font></a>      
            </li>
            {% endif %}  
           
           {# {% block stephane %}
             <form class=\"form-inline my-2 my-lg-0\">
             <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Rechercher\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Rechercher</button> 
            </form>
            {% endblock %}   #}

            <!-- Affichage du nom de l'utilisateur connecté -->
            {% if app.user and app.user.sexe == 'Masculin' %}
            <li class=\"nav-item\">
                <div class=\"nav-link\"><font color=\"white\"><strong>{{'M. ' ~ app.user.prenom ~ ' ' ~ app.user.username }} </font> </strong></div>
            </li>
            {% elseif app.user and app.user.sexe == 'Féminin' %}
            <li class=\"nav-item\">
                <div class=\"nav-link\"><font color=\"white\"><strong>{{'Mme ' ~ app.user.prenom ~ ' ' ~ app.user.username }}</font> </strong> </div>
            </li>
            {% endif %}

              {% if not app.user %}
            <li class=\"nav-item\"> 
                <a class=\"nav-link\" href=\"{{path('security_login')}}\"><font color=\"white\"><strong><u>Connexion</strong></u></font></a>
            </li>
            {% else %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('security_logout')}}\"><font color=\"white\"><div style=\"text-align:left;\"><u>Deconnexion</u></div></font></a>
                    {# <font color=\"green\"><strong> </strong></font> #}
            </li>
            {% endif %}        
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('contact')}}\">Contact</a>
            </li>  
             
            </ul>            
        </div>
        </nav>

        <div class=\"container\">   
             
                {% block body %}{% endblock %}  
        </div>
         
        
        {% block javascripts %}{% endblock %}
        
        </br></br></br></br></br></br></br></br>
         <!-- Footer -->
    <footer class=\"page-footer font-small blue-grey lighten-5\">

    <div style=\"background-color: #21d192;\">
        <div class=\"container\">

        <!-- Grid row-->
        <div class=\"row py-4 d-flex align-items-center\">

            <!-- Grid column -->
            <div class=\"col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0\">
            <h6 class=\"mb-0\">Restez connecté avec nous via les réseaux sociaux</h6>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class=\"container text-center text-md-left mt-5\">

        <!-- Grid row -->
        <div class=\"row mt-3 dark-grey-text\">

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mb-4\">

            <!-- Content -->
            <h6 class=\"text-uppercase font-weight-bold\">  
                <i class=\"fa fa-info-circle\" aria-hidden=\"true\">
                    Information
                </i>                            
            </h6>
            <hr class=\"teal accent-3 mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px;\">
           
            <p>
                <a href=\"{{ path('daily_fridge_mention_legal') }}\" >Mention Légale</a>
            </p>

            <p>
                <a href=\"{{ path('daily_fridge_mention_legal') }}\" >Comment ça marche ?</a>
            </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">

            <!-- Links -->
            <h6 class=\"text-uppercase font-weight-bold\">
            
                <i class=\"fa fa-globe\"> Réseaux Sociaux  </i> 
            </h6>
            <hr class=\"teal accent-3 mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px;\">
               
            <p>
                <a href=\"https://www.facebook.com/My-daily-fridge-102791478141662\" class=\"fa fa-facebook\">acebook</a>
            </p>
            <p>
            </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">

            <!-- Links -->
            <h6 class=\"text-uppercase font-weight-bold\">
                <i class=\"fa fa-address-card\" aria-hidden=\"true\">
                    Contact
                </i>
            </h6>
            <hr class=\"teal accent-3 mb-4 mt-0 d-inline-block mx-auto\" style=\"width: 60px;\">
            <p>
                <a href=\"mailto:admin@mydailyfridge.com\">admin@mydailyfridge.com</a>
            
            </p>

        </div>
        <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class=\"footer-copyright text-center text-black-50 py-3\">© 2020 Copyright:
        <a class=\"dark-grey-text\" href=\"https://mydailyfridge.com/\"> MyDailyFridge.com</a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->
       
    </body>
</html>
", "base.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\base.html.twig");
    }
}
