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
class __TwigTemplate_064581bf0e976c720fe1bcd832caddb49a4615b0361040dbc156e6ca9b0385db extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "daily_fridge/mes_recettes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stephane($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 6
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  96 => 7,  92 => 6,  74 => 56,  64 => 48,  62 => 6,  58 => 4,  54 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "daily_fridge/mes_recettes.html.twig", "D:\\Daily Fridge Git Hub\\DailyFridgeTest\\templates\\daily_fridge\\mes_recettes.html.twig");
    }
}
