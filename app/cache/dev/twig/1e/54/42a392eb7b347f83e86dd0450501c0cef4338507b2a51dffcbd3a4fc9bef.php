<?php

/* XiaomeiXiaomeiBundle:Cours:createcours.html.twig */
class __TwigTemplate_1e5442a392eb7b347f83e86dd0450501c0cef4338507b2a51dffcbd3a4fc9bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'wrapper' => array($this, 'block_wrapper'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo " - Create Cours
";
    }

    // line 7
    public function block_wrapper($context, array $blocks = array())
    {
        // line 8
        echo "<h1>Créez de la connaissance !</h1>

<div class=\"col\">
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["ccfv"]) ? $context["ccfv"] : $this->getContext($context, "ccfv")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "
</div>

";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\" />
\t";
        // line 19
        $this->displayParentBlock("stylesheets", $context, $blocks);
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        // line 24
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(\"#xiaomei_xiaomeibundle_cours_dateCours\").datepicker();
\t</script>
";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:createcours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  71 => 23,  68 => 22,  64 => 19,  59 => 18,  56 => 17,  48 => 11,  43 => 8,  40 => 7,  34 => 4,  31 => 3,);
    }
}
