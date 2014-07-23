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
                   
            
                     ";
        // line 33
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 34
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Déconnexion</a></li>
                    <li><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_moncompte");
            echo "\">Mon compte</a></li>

                    ";
        } else {
            // line 38
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a></li>
                    <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_register");
            echo "\">Inscription</a></li>
                ";
        }
        // line 40
        echo "      
                     
                </ul> 
                 </div>  

            </header>
            
            <div id=\"wrapper\">

                ";
        // line 49
        $this->displayBlock('wrapper', $context, $blocks);
        // line 50
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "            </div>
            <footer class=\"menu\">
                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_legal");
        echo "\">Mention legal</a></li>
                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_legal");
        echo "\">contact us</a></li>

             </footer>
        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
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

    // line 49
    public function block_wrapper($context, array $blocks = array())
    {
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 59
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
        return array (  166 => 59,  163 => 58,  160 => 57,  155 => 50,  150 => 49,  139 => 11,  134 => 8,  131 => 7,  125 => 6,  120 => 62,  118 => 57,  112 => 54,  108 => 53,  104 => 51,  101 => 50,  99 => 49,  88 => 40,  83 => 39,  78 => 38,  72 => 35,  67 => 34,  65 => 33,  59 => 30,  55 => 29,  50 => 27,  37 => 18,  35 => 7,  31 => 6,  24 => 1,);
    }
}
