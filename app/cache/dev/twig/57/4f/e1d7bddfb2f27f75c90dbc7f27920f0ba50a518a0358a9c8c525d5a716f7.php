<?php

/* XiaomeiXiaomeiBundle:Cours:register.html.twig */
class __TwigTemplate_574fe1d7bddfb2f27f75c90dbc7f27920f0ba50a518a0358a9c8c525d5a716f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - inscription au cours
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Inscription au cours</h1>

<div class=\"col\">

                     ";
        // line 12
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 13
            echo "                     Veuillez confirmer votre inscription au cours; 
                     vous êtres connécté comme :session username:

                     <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_inscriptioncoursconfirmer", array("id" => (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")))), "html", null, true);
            echo "\">Confirmer</a>

                     
                    ";
        } else {
            // line 20
            echo "                    <h3>Vous n'êtres pas connecté;merci de faire inscirption ou connexiton
                    <li><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a></li>
                    <li><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_register");
            echo "\">Inscription</a></li>
                ";
        }
        // line 23
        echo "     
</div>

";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  68 => 22,  64 => 21,  61 => 20,  54 => 16,  49 => 13,  47 => 12,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
