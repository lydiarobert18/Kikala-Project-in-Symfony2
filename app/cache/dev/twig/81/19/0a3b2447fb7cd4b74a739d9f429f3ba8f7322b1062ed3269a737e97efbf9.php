<?php

/* XiaomeiXiaomeiBundle:Cours:order.html.twig */
class __TwigTemplate_81190a3b2447fb7cd4b74a739d9f429f3ba8f7322b1062ed3269a737e97efbf9 extends Twig_Template
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

<div class=\"col\">
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "XiaomeiXiaomeiBundle:Cours:order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  31 => 6,  28 => 5,);
    }
}
