<?php

/* XiaomeiXiaomeiBundle:Default:home.html.twig */
class __TwigTemplate_25603345ace9e0badae7a271946e4902c7cc213c195609027d27841188891c82 extends Twig_Template
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
        echo " - Acuueil
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo " <h1> Acueuil<h1>
 <div class='home_stat'>nombre de formation en cours: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nombrecours"]) ? $context["nombrecours"] : $this->getContext($context, "nombrecours")), "html", null, true);
        echo " </div> 
 <div class='home_stat'>nombre de kikologues inscrites:  ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nombreusers"]) ? $context["nombreusers"] : $this->getContext($context, "nombreusers")), "html", null, true);
        echo " </div>\t
";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
