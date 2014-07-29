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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/medium/" . $this->getAttribute((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")), "photo"))), "html", null, true);
        echo "\" alt=\"photo\">
<p> nombre de kilos: ";
        // line 10
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")), "nombreCredit"), "html", null, true);
        echo " </p>

<div id='moncompte'>

<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_modifierprofil");
        echo "\">Modifier mon profil </a>
<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_create_cours");
        echo "\">Creer formation</a>
<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_mesformations");
        echo "\">Mes formations</a>
<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_mesinscriptions");
        echo "\">Mes inscriptions</a>

</div>

<div id='statistique'>

<!-- cours créer: nom des cours (date de création)     nombre inscrit    nombre d'inscrits annulé    score gagné 

 (annulé)
\t 

cours suivis: nom des cours(inscription  ou si annulé , date d'annulation)                       score ajouté 
 -->

";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contents"]) ? $context["contents"] : $this->getContext($context, "contents")), "cours"));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 32
            echo "   <span>date created in:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCreated"), "d-m-Y"), "html", null, true);
            echo "</span>
   <span>date de formation:";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours"), "d-m-Y"), "html", null, true);
            echo "</span>
    <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"), "html", null, true);
            echo "</span> 
\t <span>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
            echo "</span> 
\t <span>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "duration"), "html", null, true);
            echo " heures</span> 
    
     <span>nombre inscrit: ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "countInscrit"), "html", null, true);
            echo "</span>
    <span>nombre d'inscription annulées: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "inscritannule"), "html", null, true);
            echo "</span>
    <span>score obtenu:";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "countInscrit") * $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "duration")) - ($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "inscritannule") * $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "duration"))), "html", null, true);
            echo " </span>
    
     <br/>
   <!-- foreach( \$cours as \$cour){
        \$inscriptions=\$cour->getInscription();
         foreach(\$inscriptions as \$inscription){
          \$inscrits=\$inscription->getUser();
         // print_r(\$inscrits);
         }
        } -->

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
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
        return array (  97 => 34,  90 => 28,  84 => 31,  76 => 21,  34 => 4,  129 => 47,  113 => 39,  100 => 30,  81 => 20,  77 => 19,  160 => 57,  155 => 50,  150 => 49,  118 => 40,  104 => 51,  65 => 33,  137 => 53,  134 => 8,  127 => 41,  114 => 39,  110 => 38,  70 => 20,  58 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 39,  102 => 31,  71 => 23,  67 => 17,  63 => 16,  59 => 15,  38 => 7,  94 => 28,  89 => 20,  85 => 21,  75 => 21,  68 => 18,  56 => 17,  87 => 28,  21 => 2,  26 => 6,  93 => 33,  88 => 32,  78 => 38,  46 => 7,  27 => 4,  44 => 9,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 59,  163 => 58,  158 => 67,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 52,  121 => 42,  117 => 41,  105 => 36,  91 => 27,  62 => 15,  49 => 10,  24 => 1,  25 => 3,  19 => 1,  79 => 25,  72 => 35,  69 => 18,  47 => 10,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 56,  139 => 11,  131 => 7,  123 => 40,  120 => 62,  115 => 43,  111 => 37,  108 => 53,  101 => 35,  98 => 31,  96 => 31,  83 => 25,  74 => 24,  66 => 17,  55 => 14,  52 => 11,  50 => 12,  43 => 8,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 57,  147 => 58,  144 => 49,  141 => 54,  133 => 55,  130 => 42,  125 => 6,  122 => 43,  116 => 41,  112 => 54,  109 => 34,  106 => 36,  103 => 32,  99 => 32,  95 => 30,  92 => 21,  86 => 28,  82 => 27,  80 => 24,  73 => 20,  64 => 21,  60 => 13,  57 => 23,  54 => 13,  51 => 12,  48 => 10,  45 => 10,  42 => 9,  39 => 7,  36 => 9,  33 => 6,  30 => 7,);
    }
}
