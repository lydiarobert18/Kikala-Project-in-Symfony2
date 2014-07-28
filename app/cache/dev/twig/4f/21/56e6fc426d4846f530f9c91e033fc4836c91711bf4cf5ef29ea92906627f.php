<?php

/* XiaomeiXiaomeiBundle:Cours:cours_show.html.twig */
class __TwigTemplate_4f2156e6fc426d4846f530f9c91e033fc4836c91711bf4cf5ef29ea92906627f extends Twig_Template
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
        echo " - cours détaillé
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && ((isset($context["dejainscrit"]) ? $context["dejainscrit"] : $this->getContext($context, "dejainscrit")) >= 1))) {
            // line 9
            echo "<div id=\"cours\">
\t<span>vous êtes déja inscrit</span>
</div>


";
        } else {
            // line 15
            echo "
<h1>Nom de formation: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
            echo "</h1>
<h3>Nom de catégorie: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "category"), "name"), "html", null, true);
            echo "</h3>
<p>Image de formation: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image"), "html", null, true);
            echo "</p>
<p>Date de formation: ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours"), "d-m-Y"), "html", null, true);
            echo "</p>
<p>lieu de formation: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "lieu"), "html", null, true);
            echo "</p>
<p>Durée de formation( en heures): ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "duration"), "html", null, true);
            echo "</p>

<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_formateur", array("id" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "user"), "id"))), "html", null, true);
            echo "\">Voir les details de kikologue; ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "user"), "username"), "html", null, true);
            echo "</a>  

</p>
<p>Le descriptif de la formation: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "descriptif"), "html", null, true);
            echo "</p>
<p>Nombre de places total :";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlaceTotal"), "html", null, true);
            echo "</p>
<p>il en reste ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlaceRestant"), "html", null, true);
            echo " de place(s)</p>




<p>la formation a été crée: ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCreated"), "d-m-Y"), "html", null, true);
            echo "</p>
<br/> 



";
            // line 39
            echo "
<button type=\"button\" class=\"btn btn-default btn-lg\">
 <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_inscriptioncoursconfirmer", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "id"))), "html", null, true);
            echo "\" 
\t     title=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
            echo "\">S'inscrire au cours</a> 
</button>


";
        }
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:cours_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 57,  155 => 50,  150 => 49,  118 => 57,  104 => 51,  65 => 33,  137 => 44,  134 => 8,  127 => 47,  114 => 37,  110 => 36,  70 => 20,  58 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 34,  63 => 18,  59 => 30,  38 => 7,  94 => 28,  89 => 20,  85 => 25,  75 => 24,  68 => 14,  56 => 9,  87 => 26,  21 => 2,  26 => 6,  93 => 29,  88 => 40,  78 => 38,  46 => 7,  27 => 4,  44 => 9,  31 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 59,  163 => 58,  158 => 67,  156 => 66,  151 => 50,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 33,  91 => 27,  62 => 18,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 23,  72 => 35,  69 => 25,  47 => 9,  40 => 8,  37 => 18,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 11,  131 => 7,  123 => 40,  120 => 62,  115 => 41,  111 => 39,  108 => 53,  101 => 50,  98 => 31,  96 => 31,  83 => 39,  74 => 21,  66 => 19,  55 => 29,  52 => 13,  50 => 27,  43 => 9,  41 => 8,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 45,  133 => 55,  130 => 42,  125 => 6,  122 => 43,  116 => 41,  112 => 54,  109 => 34,  106 => 36,  103 => 33,  99 => 49,  95 => 28,  92 => 21,  86 => 28,  82 => 27,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 16,  51 => 15,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
