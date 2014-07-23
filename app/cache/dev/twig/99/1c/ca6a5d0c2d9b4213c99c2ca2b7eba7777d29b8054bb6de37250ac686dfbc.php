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
        return array (  34 => 4,  100 => 30,  84 => 23,  76 => 20,  160 => 57,  155 => 50,  150 => 49,  134 => 8,  118 => 57,  104 => 51,  65 => 33,  70 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 34,  63 => 16,  59 => 15,  38 => 7,  94 => 28,  89 => 26,  85 => 25,  75 => 17,  68 => 22,  56 => 12,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 24,  78 => 38,  46 => 10,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 59,  163 => 58,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  24 => 1,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 25,  47 => 11,  40 => 7,  37 => 18,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 11,  131 => 7,  123 => 47,  120 => 62,  115 => 43,  111 => 37,  108 => 36,  101 => 50,  98 => 31,  96 => 28,  83 => 39,  74 => 24,  66 => 15,  55 => 14,  52 => 11,  50 => 12,  43 => 8,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 6,  122 => 42,  116 => 39,  112 => 38,  109 => 34,  106 => 36,  103 => 32,  99 => 49,  95 => 28,  92 => 25,  86 => 28,  82 => 24,  80 => 19,  73 => 23,  64 => 21,  60 => 15,  57 => 23,  54 => 16,  51 => 13,  48 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 9,  33 => 6,  30 => 7,);
    }
}
