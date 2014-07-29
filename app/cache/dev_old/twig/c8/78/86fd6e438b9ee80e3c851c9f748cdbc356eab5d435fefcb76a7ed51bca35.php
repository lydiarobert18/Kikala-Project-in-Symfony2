<?php

/* XiaomeiXiaomeiBundle:Cours:cours.html.twig */
class __TwigTemplate_c87886fd6e438b9ee80e3c851c9f748cdbc356eab5d435fefcb76a7ed51bca35 extends Twig_Template
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
        echo " - Cours
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Les formations disponibles pour vous </h1>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "

<div class='rouge'>
";
        // line 12
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nombrepage"]) ? $context["nombrepage"] : $this->getContext($context, "nombrepage")))) {
            // line 13
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcoursall", array("tri" => (isset($context["tri"]) ? $context["tri"] : $this->getContext($context, "tri")), "page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\">Page suivante</a>
 ";
        }
        // line 15
        echo "</div>

<div class='green'>
";
        // line 18
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcoursall", array("tri" => (isset($context["tri"]) ? $context["tri"] : $this->getContext($context, "tri")), "page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\">Page précédente</a>
 ";
        }
        // line 20
        echo "</div> 

<ul class=\"liste\">
";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 25
            echo "
\t";
            // line 27
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcour", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"))), "html", null, true);
            echo "\" 
\t     title=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
            echo "</a> 
\t     (";
            // line 29
            if ((!(null === $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "category")))) {
                // line 30
                echo "\t      catégorie: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "category"), "name"), "html", null, true);
                echo "     
\t     ";
            } else {
                // line 32
                echo "\t     non-catégorisée
\t     ";
            }
            // line 33
            echo ")


<span>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours"), "d-m-Y"), "html", null, true);
            echo "</span> 
<span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "lieu"), "html", null, true);
            echo "</span> 

 place:";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlacerestant"), "html", null, true);
            echo " 
      ";
            // line 40
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlacerestant") == 0)) {
                echo " <span class='rouge'>Complete    </span> ";
            }
            // line 41
            echo "
       ";
            // line 42
            if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours") < twig_date_converter($this->env, "+2days")) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours") > twig_date_converter($this->env, "+0days")))) {
                echo " <span class='rouge'>Nouvelle  </span> ";
            }
            // line 43
            echo "
        ";
            // line 44
            if (((($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours") < twig_date_converter($this->env, "+2days")) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours") > twig_date_converter($this->env, "+0days"))) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlacerestant") > 0))) {
                echo " <span class='rouge'>Ne tardez pas  </span> ";
            }
            // line 45
            echo "\t</li>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</ul>


";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  141 => 45,  137 => 44,  134 => 43,  130 => 42,  127 => 41,  123 => 40,  119 => 39,  114 => 37,  110 => 36,  105 => 33,  101 => 32,  95 => 30,  93 => 29,  87 => 28,  82 => 27,  79 => 25,  75 => 24,  70 => 20,  63 => 18,  58 => 15,  52 => 13,  50 => 12,  44 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
