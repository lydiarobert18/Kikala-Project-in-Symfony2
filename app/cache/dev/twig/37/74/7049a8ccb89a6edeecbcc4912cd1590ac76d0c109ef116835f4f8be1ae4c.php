<?php

/* XiaomeiXiaomeiBundle:Cours:pasdeplace.html.twig */
class __TwigTemplate_37747049a8ccb89a6edeecbcc4912cd1590ac76d0c109ef116835f4f8be1ae4c extends Twig_Template
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

le cours est complète , vous pouvez essayer un autre cours dans le même catégorie 
<p><a href=\" ";
        // line 9
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcoursall");
        echo " \"> Liste des cours </a></p>

  
";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:pasdeplace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  31 => 6,  28 => 5,);
    }
}
