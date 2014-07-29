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
        echo "
<h1>Nom de formation: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name"), "html", null, true);
        echo "</h1>
<p>photo de la formation ; ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image"), "html", null, true);
        echo "</p>
<h3>Nom de catégorie: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "category"), "name"), "html", null, true);
        echo "</h3>
<p>Date de formation: ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCours"), "d-m-Y"), "html", null, true);
        echo "</p>
<p>lieu de formation: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "lieu"), "html", null, true);
        echo "</p>
<p>Durée de formation( en heures): ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "duration"), "html", null, true);
        echo "</p>

<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_formateur", array("id" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "user"), "id"))), "html", null, true);
        echo "\">Voir les details de kikologue; ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "user"), "username"), "html", null, true);
        echo "</a>  


<p>Le descriptif de la formation: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "descriptif"), "html", null, true);
        echo "</p>
<p>Nombre de places total :";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlaceTotal"), "html", null, true);
        echo "</p>
<p>il en reste ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "nrPlaceRestant"), "html", null, true);
        echo " de place(s)</p>




<p>la formation a été crée: ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "dateCreated"), "d-m-Y"), "html", null, true);
        echo "</p>
<br/> 


";
        // line 30
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") && ((isset($context["dejainscrit"]) ? $context["dejainscrit"] : $this->getContext($context, "dejainscrit")) >= 1))) {
            // line 31
            echo "<div id=\"cours\">
\t<span>vous êtes déja inscrit</span>
</div>


";
        } else {
            // line 37
            echo "
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

<p> les commentaires des personnes qui ont suivi cette formation </p>

<p class=\"rouge\">Les kikala ayant suivi cette formation ont également suivi</p>

";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours_rec_resulats"]) ? $context["cours_rec_resulats"] : $this->getContext($context, "cours_rec_resulats")));
        foreach ($context['_seq'] as $context["_key"] => $context["cours_rec_resulat"]) {
            // line 54
            echo "     <div>
      <img src=\"\" alt=\"image\">
       <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("xiaomei_xiaomei_showcour", array("id" => $this->getAttribute((isset($context["cours_rec_resulat"]) ? $context["cours_rec_resulat"] : $this->getContext($context, "cours_rec_resulat")), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours_rec_resulat"]) ? $context["cours_rec_resulat"] : $this->getContext($context, "cours_rec_resulat")), "name"), "html", null, true);
            echo "</a> 
    
        Place qui reste:";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours_rec_resulat"]) ? $context["cours_rec_resulat"] : $this->getContext($context, "cours_rec_resulat")), "nrPlaceRestant"), "html", null, true);
            echo "
    </div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours_rec_resulat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        return array (  162 => 62,  152 => 58,  145 => 56,  141 => 54,  137 => 53,  129 => 47,  121 => 42,  117 => 41,  113 => 39,  110 => 37,  102 => 31,  100 => 30,  93 => 26,  85 => 21,  81 => 20,  77 => 19,  69 => 16,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
