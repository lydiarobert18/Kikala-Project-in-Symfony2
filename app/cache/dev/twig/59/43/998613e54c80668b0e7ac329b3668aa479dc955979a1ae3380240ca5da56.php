<?php

/* XiaomeiXiaomeiBundle:Cours:inscriptionreussi.html.twig */
class __TwigTemplate_5943998613e54c80668b0e7ac329b3668aa479dc955979a1ae3380240ca5da56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 5
    public function block_wrapper($context, array $blocks = array())
    {
        // line 6
        echo "
Votre inscription a été bien confirmée.

Voulez vous d'autres formations?
<p><a href=\" ";
        // line 10
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcoursall");
        echo " \"> Liste des cours </a></p>


";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:inscriptionreussi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  31 => 6,  28 => 5,);
    }
}
