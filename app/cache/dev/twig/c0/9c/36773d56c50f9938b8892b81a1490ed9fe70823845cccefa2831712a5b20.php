<?php

/* XiaomeiXiaomeiBundle:User:mesinscriptions.html.twig */
class __TwigTemplate_c09c36773d56c50f9938b8892b81a1490ed9fe70823845cccefa2831712a5b20 extends Twig_Template
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
        echo " - mes inscriptions !
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>Les cours danslequelles où je suis inscrites  </h1>
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")), "inscription"));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 10
            echo "\t\t\t
\t <p>";
            // line 11
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id") . ")"), "html", null, true);
            echo "</p>
\t <p>nom du cours inscrit:";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "cours"), "name"), "html", null, true);
            echo "</p>
    
     <p>date d'inscription: ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateInscription"), "d-m-Y"), "html", null, true);
            echo "</p>
     
    

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "

";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:User:mesinscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  61 => 14,  56 => 12,  52 => 11,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
