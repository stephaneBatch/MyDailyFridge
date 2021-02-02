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

/* daily_fridge/mes_recettes.html.twig */
class __TwigTemplate_2a110be4a27b0db38d0e331afbcbaa6048958bf13c6f90f9eadb2c0240ff5d4a extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/mes_recettes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "daily_fridge/mes_recettes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/mes_recettes.html.twig", 1);
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

  ";
        // line 6
        $this->displayBlock('javascript', $context, $blocks);
        // line 48
        echo "            
         


<h2> Mes recettes </h2>

<ul class=\"list-group\">
  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
  <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("daily_fridge_Info_Recette");
        echo "\" onclick =\"alert('buttonClickGET');\">  Fondue de camembert </a>
    <span class=\"badge badge-primary badge-pill\"></span>
  </li>
  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Gulab Jamun
    <span class=\"badge badge-primary badge-pill\"></span>
  </li>
  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Pani puri
    <span class=\"badge badge-primary badge-pill\"></span>
  </li>
</ul>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 7
        echo "
<script>

  function buttonClickGET()(function (data){
           console.log(data);
           //console.log(data.codeResult.code);
           code=data.codeResult.code;
           var getJSON = function(url, callback) {
           var xhr = new XMLHttpRequest();
           xhr.open('GET', url, true);
           xhr.responseType = 'json';

           xhr.onload = function() {
               var status = xhr.status;
               if (status == 200) {
                   callback(null, xhr.response);
               } else {
                   callback(status);
               }
           };
           xhr.send();
       };

       getJSON('https://world.openfoodfacts.org/api/v0/product/'+code+'.json',  function(err, data) {

           if (err != null) {
              //²² alert(\"Le scanne a échoué !\");
               console.error(err);              

           } else {
                code=data.code
                nom=data.product.product_name 
                document.write('test');
              
           }
       }); 
         
          });
          </script>
       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "daily_fridge/mes_recettes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 7,  128 => 6,  104 => 56,  94 => 48,  92 => 6,  88 => 4,  78 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stephane %}{% endblock %} 
{% block body %}


  {% block javascript %}

<script>

  function buttonClickGET()(function (data){
           console.log(data);
           //console.log(data.codeResult.code);
           code=data.codeResult.code;
           var getJSON = function(url, callback) {
           var xhr = new XMLHttpRequest();
           xhr.open('GET', url, true);
           xhr.responseType = 'json';

           xhr.onload = function() {
               var status = xhr.status;
               if (status == 200) {
                   callback(null, xhr.response);
               } else {
                   callback(status);
               }
           };
           xhr.send();
       };

       getJSON('https://world.openfoodfacts.org/api/v0/product/'+code+'.json',  function(err, data) {

           if (err != null) {
              //²² alert(\"Le scanne a échoué !\");
               console.error(err);              

           } else {
                code=data.code
                nom=data.product.product_name 
                document.write('test');
              
           }
       }); 
         
          });
          </script>
       
{% endblock %}
            
         


<h2> Mes recettes </h2>

<ul class=\"list-group\">
  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
  <a href=\"{{ path('daily_fridge_Info_Recette') }}\" onclick =\"alert('buttonClickGET');\">  Fondue de camembert </a>
    <span class=\"badge badge-primary badge-pill\"></span>
  </li>
  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Gulab Jamun
    <span class=\"badge badge-primary badge-pill\"></span>
  </li>
  <li class=\"list-group-item d-flex justify-content-between align-items-center\">
    Pani puri
    <span class=\"badge badge-primary badge-pill\"></span>
  </li>
</ul>

{% endblock %}", "daily_fridge/mes_recettes.html.twig", "D:\\INGETIS20192020\\Projet Fil Rouge\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\mes_recettes.html.twig");
    }
}
