<?php

/* XiaomeiXiaomeiBundle:User:formateur.html.twig */
class __TwigTemplate_e582c4c16d0a2e387348c8c5c83ba483d2f0e2f82b2fc499021140a06934eec4 extends Twig_Template
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
        echo " - kikologue !
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>Kikologue ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "username"), "html", null, true);
        echo ":</h1>
\t<p>age par tranche de 10 ans </p>
\t<p>photo: </p>
\t<p>descriptif: </p>
    <p>sexe: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "sex"), "html", null, true);
        echo "</p>


\t<p>les cours dispenses:  </p>
\t<p>les cours suivis: </p>
\t<p>les cours annulés: </p>




";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:User:formateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
