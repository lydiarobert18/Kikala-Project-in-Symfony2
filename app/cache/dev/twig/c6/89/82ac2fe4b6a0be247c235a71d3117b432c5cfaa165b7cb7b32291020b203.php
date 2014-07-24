<?php

/* XiaomeiXiaomeiBundle:Cours:pasdecredit.html.twig */
class __TwigTemplate_c68982ac2fe4b6a0be247c235a71d3117b432c5cfaa165b7cb7b32291020b203 extends Twig_Template
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

vous n'avez pas assez de credit . 
merci de créer des formation pour avoir plus de credit dans votre compte .


<p><a href=\" ";
        // line 12
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_create_cours");
        echo " \"> Liste des cours </a></p>


";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:pasdecredit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  31 => 6,  28 => 5,);
    }
}
