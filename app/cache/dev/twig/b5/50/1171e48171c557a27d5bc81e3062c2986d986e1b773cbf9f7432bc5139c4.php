<?php

/* XiaomeiXiaomeiBundle:User:mesformations.html.twig */
class __TwigTemplate_b5501171e48171c557a27d5bc81e3062c2986d986e1b773cbf9f7432bc5139c4 extends Twig_Template
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
        echo " - mes formations !
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo "\t<h1>Les formations que j'ai crées </h1>
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")), "cours"));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 10
            echo "      <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"), "html", null, true);
            echo "</p>
\t <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
            echo "</p>

";
            // line 13
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "isannulation")) {
                // line 14
                echo "     <p class='rouge'> cette formation a été annulée par vous</p>
    
     ";
            } else {
                // line 17
                echo "    
     <a href=\" ";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_cancelcours", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"))), "html", null, true);
                echo "\">
     Supprimer le cours</a>

      ";
            }
            // line 21
            echo " 

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "

";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:User:mesformations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  76 => 21,  34 => 4,  160 => 57,  155 => 50,  150 => 49,  118 => 57,  104 => 51,  65 => 33,  137 => 44,  134 => 8,  127 => 47,  114 => 37,  110 => 36,  70 => 20,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 34,  63 => 18,  59 => 13,  38 => 7,  94 => 28,  89 => 20,  85 => 25,  75 => 24,  68 => 22,  56 => 17,  87 => 26,  21 => 2,  26 => 6,  93 => 29,  88 => 40,  78 => 38,  46 => 7,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 59,  163 => 58,  158 => 67,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 33,  91 => 27,  62 => 18,  49 => 10,  24 => 1,  25 => 3,  19 => 1,  79 => 23,  72 => 35,  69 => 18,  47 => 11,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 11,  131 => 7,  123 => 40,  120 => 62,  115 => 41,  111 => 39,  108 => 53,  101 => 50,  98 => 31,  96 => 31,  83 => 39,  74 => 24,  66 => 17,  55 => 14,  52 => 13,  50 => 27,  43 => 8,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 45,  133 => 55,  130 => 42,  125 => 6,  122 => 43,  116 => 41,  112 => 54,  109 => 34,  106 => 36,  103 => 33,  99 => 49,  95 => 28,  92 => 21,  86 => 28,  82 => 27,  80 => 19,  73 => 23,  64 => 21,  60 => 6,  57 => 23,  54 => 11,  51 => 15,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 9,  33 => 6,  30 => 7,);
    }
}
