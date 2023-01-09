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

/* default/ClothesContent.html.twig */
class __TwigTemplate_53aa5e8f981f1843c008456fa66a8790 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/ClothesContent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/ClothesContent.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>online Shoping header</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
     <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
  </head>
  <body>
    <div class=\"container\">

<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
  <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/tv1.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> LED Samsung Smart TV</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      <div class=\"card-body\">
      
        <img src=\"images/tv2.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> LED Samsung Smart TV</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/tv3.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> LED Samsung Smart TV</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
 <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/ph1.jpeg\" alt=\"phone1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Phone</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  
 <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/ph3.jpeg\" alt=\"phone2\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Phone</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  
 <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/ph5.jpeg\" alt=\"phone3\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Phone</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  
 <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/lp1.jpeg\" alt=\"laptop1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Laptop</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/lp2.jpeg\" alt=\"laptop2\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Laptop</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>

   <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/lp3.jpg\" alt=\"laptop3\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Laptop</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/ClothesContent.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>online Shoping header</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
     <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
  </head>
  <body>
    <div class=\"container\">

<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
  <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/tv1.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> LED Samsung Smart TV</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      <div class=\"card-body\">
      
        <img src=\"images/tv2.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> LED Samsung Smart TV</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/tv3.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> LED Samsung Smart TV</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
 <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/ph1.jpeg\" alt=\"phone1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Phone</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  
 <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/ph3.jpeg\" alt=\"phone2\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Phone</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  
 <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/ph5.jpeg\" alt=\"phone3\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Phone</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
  
 <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/lp1.jpeg\" alt=\"laptop1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Laptop</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>

  <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/lp2.jpeg\" alt=\"laptop2\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Laptop</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>

   <div class=\"col\">
    <div class=\"card shadow-sm\">
      
      
      <div class=\"card-body\">
      <img src=\"images/lp3.jpg\" alt=\"laptop3\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
        <p class=\"card-text\"><h2> Smart Laptop</h2>  With all latest features like screencast,internet connectivity full HD Display,High Sound quality</p>
        <h2>Price:10,000<h2>
        <div class=\"d-flex justify-content-between align-items-center\">
          <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
          </div>
          <small class=\"text-muted\">9 mins</small>
        </div>
      </div>
    </div>
  </div>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
  </body>
</html>", "default/ClothesContent.html.twig", "/var/www/html/Eproject/ecomwebsite/templates/default/ClothesContent.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
