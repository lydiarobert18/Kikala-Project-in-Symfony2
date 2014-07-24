<?php

/* XiaomeiXiaomeiBundle:User:register.html.twig */
class __TwigTemplate_991cca6a5d0c2d9b4213c99c2ca2b7eba7777d29b8054bb6de37250ac686dfbc extends Twig_Template
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
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscription !
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>Inscrivez-vous !</h1>

";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["register_form"]) ? $context["register_form"] : $this->getContext($context, "register_form")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:User:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
