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
        return array (  137 => 44,  134 => 43,  127 => 41,  114 => 37,  110 => 36,  70 => 20,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 39,  102 => 32,  71 => 19,  67 => 15,  63 => 18,  59 => 14,  38 => 7,  94 => 28,  89 => 20,  85 => 25,  75 => 24,  68 => 14,  56 => 9,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 33,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 40,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 13,  50 => 12,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 45,  133 => 55,  130 => 42,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 30,  92 => 21,  86 => 28,  82 => 27,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
