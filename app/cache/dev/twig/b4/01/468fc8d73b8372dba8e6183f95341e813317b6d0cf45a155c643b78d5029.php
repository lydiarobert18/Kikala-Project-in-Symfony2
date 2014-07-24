<?php

/* XiaomeiXiaomeiBundle:User:modifierprofil.html.twig */
class __TwigTemplate_b401468fc8d73b8372dba8e6183f95341e813317b6d0cf45a155c643b78d5029 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Inscription !
";
    }

    // line 8
    public function block_wrapper($context, array $blocks = array())
    {
        // line 9
        echo "\t<h1>Modifier votre profil !</h1>

";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["register_form"]) ? $context["register_form"] : $this->getContext($context, "register_form")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:User:modifierprofil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
