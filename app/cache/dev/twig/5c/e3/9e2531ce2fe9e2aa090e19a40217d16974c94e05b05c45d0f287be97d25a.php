<?php

/* ::base.html.twig */
class __TwigTemplate_5ce39e2531ce2fe9e2aa090e19a40217d16974c94e05b05c45d0f287be97d25a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'wrapper' => array($this, 'block_wrapper'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        </head>
        <body>
            <header> 
                <h1>header and logo :bienvenue au kikala</h1>

                <div class=\"menu\">
                <ul>
                    
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_home");
        echo "\">Accueil</a></li>

                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_about");
        echo "\">About us</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcoursall");
        echo "\">liste des cours</a></li>
                   
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_create_cours");
        echo "\">create formations</a></li>
                   
                     ";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 35
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Déconnexion</a></li>
                    <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_moncompte");
            echo "\">Mon compte</a></li>

                    ";
        } else {
            // line 39
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a></li>
                    <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_register");
            echo "\">Inscription</a></li>
                ";
        }
        // line 41
        echo "      
                     
                </ul> 
                 </div>  

            </header>
            
            <div id=\"wrapper\">

                ";
        // line 50
        $this->displayBlock('wrapper', $context, $blocks);
        // line 51
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "            </div>
            <footer class=\"menu\">
                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_legal");
        echo "\">Mention legal</a></li>
                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_legal");
        echo "\">contact us</a></li>

             </footer>
        ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Wiki!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "
       <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

         <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
   
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">

        <link href='http://fonts.googleapis.com/css?family=Gilda+Display|Muli|Alegreya+Sans|Ceviche+One|Allerta|Roboto|Buda:300|Montserrat|Actor|AlefMerienda|Sofadi+One' rel='stylesheet' type='text/css'>

        ";
    }

    // line 50
    public function block_wrapper($context, array $blocks = array())
    {
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\">\\x3C/script>')</script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  167 => 59,  129 => 6,  124 => 63,  76 => 36,  70 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 51,  143 => 11,  135 => 7,  119 => 42,  102 => 32,  71 => 35,  67 => 15,  63 => 15,  59 => 30,  38 => 7,  94 => 28,  89 => 26,  85 => 25,  75 => 17,  68 => 14,  56 => 16,  87 => 40,  21 => 2,  26 => 6,  93 => 27,  88 => 6,  78 => 23,  46 => 7,  27 => 4,  44 => 9,  31 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 8,  136 => 56,  121 => 46,  117 => 44,  105 => 51,  91 => 27,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 21,  69 => 34,  47 => 9,  40 => 8,  37 => 18,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 52,  101 => 32,  98 => 31,  96 => 28,  83 => 25,  74 => 14,  66 => 15,  55 => 29,  52 => 15,  50 => 27,  43 => 8,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 58,  162 => 57,  154 => 50,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 55,  112 => 54,  109 => 34,  106 => 36,  103 => 50,  99 => 31,  95 => 28,  92 => 41,  86 => 28,  82 => 39,  80 => 19,  73 => 19,  64 => 32,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
