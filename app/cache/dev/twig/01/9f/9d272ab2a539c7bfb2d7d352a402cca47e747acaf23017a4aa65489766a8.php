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
        return array (  136 => 52,  118 => 40,  114 => 39,  110 => 38,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  88 => 32,  84 => 31,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  47 => 10,  42 => 9,  39 => 7,  32 => 4,  29 => 3,);
    }
}
