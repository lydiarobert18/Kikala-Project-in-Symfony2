<?php

/* XiaomeiXiaomeiBundle:Cours:pasderepetition.html.twig */
class __TwigTemplate_a7db04fdd88d946e08c05b314d6d24628b4eecd6cb72974fb0bd9ece4614f91c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 5
    public function block_wrapper($context, array $blocks = array())
    {
        // line 6
        echo "

vous ne pouvez pas vous inscrire à un cours que vous avez crée vous meme.

veuillez choisir un autre cours:
  <p><a href=\" ";
        // line 11
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcoursall");
        echo " \"> Liste des cours </a></p>
";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:pasderepetition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  129 => 47,  113 => 39,  100 => 30,  81 => 20,  77 => 19,  160 => 57,  155 => 50,  150 => 49,  118 => 57,  104 => 51,  65 => 33,  137 => 53,  134 => 8,  127 => 41,  114 => 37,  110 => 37,  70 => 20,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 39,  102 => 31,  71 => 23,  67 => 34,  63 => 18,  59 => 18,  38 => 11,  94 => 28,  89 => 20,  85 => 21,  75 => 24,  68 => 22,  56 => 17,  87 => 28,  21 => 2,  26 => 6,  93 => 26,  88 => 40,  78 => 38,  46 => 7,  27 => 4,  44 => 9,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 59,  163 => 58,  158 => 67,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 56,  121 => 42,  117 => 41,  105 => 33,  91 => 27,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 25,  72 => 35,  69 => 16,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 56,  139 => 11,  131 => 7,  123 => 40,  120 => 62,  115 => 43,  111 => 37,  108 => 53,  101 => 50,  98 => 31,  96 => 31,  83 => 39,  74 => 24,  66 => 15,  55 => 29,  52 => 11,  50 => 27,  43 => 8,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 57,  147 => 58,  144 => 49,  141 => 54,  133 => 55,  130 => 42,  125 => 6,  122 => 43,  116 => 41,  112 => 54,  109 => 34,  106 => 36,  103 => 32,  99 => 49,  95 => 30,  92 => 21,  86 => 28,  82 => 27,  80 => 19,  73 => 19,  64 => 19,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 11,  45 => 17,  42 => 7,  39 => 12,  36 => 9,  33 => 4,  30 => 7,);
    }
}