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

/* default/aboutus.html.twig */
class __TwigTemplate_c1f52b02737701fa4ad25031e8b0c1e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/aboutus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/aboutus.html.twig"));

        // line 1
        echo "
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>home</title>
      </head>

<body>
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: \"\";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>
    

<div class=\"about-section\">
    <h1>About Us Page</h1>
    <p>We sell various products like trusted electronics, branded clothes, trendy footwear and beauty essentials too</p>
    <p>browse the website for your seamless shopping experience</p>
  </div>
  
  <h2 style=\"text-align:center\">Our Products</h2>
  <div class=\"row\">
    <div class=\"column\">
      <div class=\"card\">
        <img src=\"images/beauty.jpg\" alt=\"Jane\" style=\"width:100%\">
        <div class=\"container\">
          <h2>Clothing</h2>
          <p>Shop for both men and women clothing</p>
          <p><button class=\"button\">Click Here</button></p>
        </div>
      </div>
    </div>
  
    <div class=\"column\">
      <div class=\"card\">
        <img src=\"image/electronics.jpeg\" alt=\"Mike\" style=\"width:100%\">
        <div class=\"container\">
          <h2>electronics</h2>
          <p class=\"title\">Shop from wide range of laptops, mobiles, TVs</p>
        
          <p><button class=\"button\">Click Here</button></p>
        </div>
      </div>
    </div>

    <div class=\"column\">
        <div class=\"card\">
          <img src=\"image/beauty.jpeg\" alt=\"Mike\" style=\"width:90%\" height=\"27%\">
          <div class=\"container\">

            <h2>beauty</h2>
            <p class=\"title\">Shop for the most affordable and trusted beauty products</p>
          
            <p><button class=\"button\">Click Here</button></p>
          </div>
        </div>
      </div>
  
    <div class=\"column\">
      <div class=\"card\">
        <img src=\"image/shoes.jpeg\" alt=\"John\" style=\"width:100%\" height=\"25%\">
        <div class=\"container\">
          <h2>Men and Women Footwear</h2>
          <p class=\"title\">Footwear</p>
          <p>Shop for comfortable yet trendy footwear</p>
          <p><button class=\"button\">Click</button></p>
        </div>
      </div>
    </div>
  </div>

  </body>
  </html>
  ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/aboutus.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>home</title>
      </head>

<body>
    <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: \"\";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>
    

<div class=\"about-section\">
    <h1>About Us Page</h1>
    <p>We sell various products like trusted electronics, branded clothes, trendy footwear and beauty essentials too</p>
    <p>browse the website for your seamless shopping experience</p>
  </div>
  
  <h2 style=\"text-align:center\">Our Products</h2>
  <div class=\"row\">
    <div class=\"column\">
      <div class=\"card\">
        <img src=\"images/beauty.jpg\" alt=\"Jane\" style=\"width:100%\">
        <div class=\"container\">
          <h2>Clothing</h2>
          <p>Shop for both men and women clothing</p>
          <p><button class=\"button\">Click Here</button></p>
        </div>
      </div>
    </div>
  
    <div class=\"column\">
      <div class=\"card\">
        <img src=\"image/electronics.jpeg\" alt=\"Mike\" style=\"width:100%\">
        <div class=\"container\">
          <h2>electronics</h2>
          <p class=\"title\">Shop from wide range of laptops, mobiles, TVs</p>
        
          <p><button class=\"button\">Click Here</button></p>
        </div>
      </div>
    </div>

    <div class=\"column\">
        <div class=\"card\">
          <img src=\"image/beauty.jpeg\" alt=\"Mike\" style=\"width:90%\" height=\"27%\">
          <div class=\"container\">

            <h2>beauty</h2>
            <p class=\"title\">Shop for the most affordable and trusted beauty products</p>
          
            <p><button class=\"button\">Click Here</button></p>
          </div>
        </div>
      </div>
  
    <div class=\"column\">
      <div class=\"card\">
        <img src=\"image/shoes.jpeg\" alt=\"John\" style=\"width:100%\" height=\"25%\">
        <div class=\"container\">
          <h2>Men and Women Footwear</h2>
          <p class=\"title\">Footwear</p>
          <p>Shop for comfortable yet trendy footwear</p>
          <p><button class=\"button\">Click</button></p>
        </div>
      </div>
    </div>
  </div>

  </body>
  </html>
  ", "default/aboutus.html.twig", "/var/www/html/pimcore/ecommerce/templates/default/aboutus.html.twig");
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
