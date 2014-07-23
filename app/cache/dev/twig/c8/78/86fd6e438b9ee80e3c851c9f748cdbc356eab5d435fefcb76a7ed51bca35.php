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
      place:";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlacerestant"), "html", null, true);
            echo " 
      ";
            // line 26
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlacerestant") == 0)) {
                echo " <span id='spancours'>Complete    </span> ";
            }
            // line 27
            echo "
<span>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours"), "d-m-Y"), "html", null, true);
            echo "</span> 
\t</li>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return array (  70 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 18,  38 => 7,  94 => 28,  89 => 26,  85 => 25,  75 => 17,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 6,  78 => 23,  46 => 7,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 21,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 34,  101 => 32,  98 => 31,  96 => 28,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 8,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 24,  80 => 19,  73 => 19,  64 => 19,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
