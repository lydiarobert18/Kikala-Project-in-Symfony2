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



<ul class=\"liste\">
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 16
            echo "
\t";
            // line 18
            echo "\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcour", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"))), "html", null, true);
            echo "\" 
\t     title=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
            echo "</a> 
\t     (";
            // line 20
            if ((!(null === $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "category")))) {
                // line 21
                echo "\t      catégorie: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "category"), "name"), "html", null, true);
                echo "     
\t     ";
            } else {
                // line 23
                echo "\t     non-catégorisée
\t     ";
            }
            // line 24
            echo ")


<span>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours"), "d-m-Y"), "html", null, true);
            echo "</span> 
<span>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "lieu"), "html", null, true);
            echo "</span> 

 place:";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlacerestant"), "html", null, true);
            echo " 
      ";
            // line 31
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlacerestant") == 0)) {
                echo " <span class='rouge'>Complete    </span> ";
            }
            // line 32
            echo "
       ";
            // line 33
            if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours") < twig_date_converter($this->env, "+2days")) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours") > twig_date_converter($this->env, "+0days")))) {
                echo " <span class='rouge'>Nouvelle  </span> ";
            }
            // line 34
            echo "
        ";
            // line 35
            if (((($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours") < twig_date_converter($this->env, "+2days")) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours") > twig_date_converter($this->env, "+0days"))) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlacerestant") > 0))) {
                echo " <span class='rouge'>Ne tardez pas  </span> ";
            }
            // line 36
            echo "\t</li>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return array (  128 => 41,  118 => 36,  114 => 35,  111 => 34,  107 => 33,  104 => 32,  100 => 31,  96 => 30,  91 => 28,  87 => 27,  82 => 24,  78 => 23,  72 => 21,  70 => 20,  64 => 19,  59 => 18,  56 => 16,  52 => 15,  44 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
