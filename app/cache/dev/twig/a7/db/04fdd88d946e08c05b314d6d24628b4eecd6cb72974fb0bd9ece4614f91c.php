<?php

/* XiaomeiXiaomeiBundle:Cours:pasderepetition.html.twig */
class __TwigTemplate_a7db04fdd88d946e08c05b314d6d24628b4eecd6cb72974fb0bd9ece4614f91c extends Twig_Template
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

vous ne pouvez pas vous inscrire à un cours que vous avez crée vous meme.

veuillez choisir un autre cours:
  <p><a href=\" ";
        // line 11
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcoursall");
        echo " \"> Liste des cours </a></p>
";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:pasderepetition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  31 => 6,  28 => 5,);
    }
}
