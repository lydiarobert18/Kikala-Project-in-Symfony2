<?php

/* XiaomeiXiaomeiBundle:User:moncompte.html.twig */
class __TwigTemplate_019f9d272ab2a539c7bfb2d7d352a402cca47e747acaf23017a4aa65489766a8 extends Twig_Template
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
        echo " - Mon compte !
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 9
        echo "<p> nombre de kilos: ";
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nombreCredit"), "html", null, true);
        echo " </p>

<div id='moncompte'>

<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_modifierprofil");
        echo "\">Modifier mon profil </a>
<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_create_cours");
        echo "\">creer formation</a>
<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_mesformations");
        echo "\">mes formation</a>
<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_mesinscriptions");
        echo "\">mes inscriptions</a>

</div>

";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:User:moncompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  59 => 15,  55 => 14,  51 => 13,  42 => 9,  39 => 7,  32 => 4,  29 => 3,);
    }
}
