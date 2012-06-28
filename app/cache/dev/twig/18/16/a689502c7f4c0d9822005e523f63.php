<?php

/* GameGuessNumberBundle:Default:main.html.twig */
class __TwigTemplate_1816a689502c7f4c0d9822005e523f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "     You choose number ";
        echo twig_escape_filter($this->env, $this->getContext($context, "number"), "html", null, true);
        echo "!
 ";
    }

    public function getTemplateName()
    {
        return "GameGuessNumberBundle:Default:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  26 => 6,);
    }
}
