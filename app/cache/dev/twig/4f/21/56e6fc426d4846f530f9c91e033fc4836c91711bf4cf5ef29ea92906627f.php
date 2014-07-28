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
        return array (  127 => 47,  119 => 42,  115 => 41,  111 => 39,  103 => 33,  95 => 28,  91 => 27,  87 => 26,  79 => 23,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  51 => 15,  43 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
