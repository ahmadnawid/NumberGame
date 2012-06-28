<?php

/* SepaBlogBundle:Blog:show.html.twig */
class __TwigTemplate_55673cd6a5a8033d2d031f921ef5133f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('body', $context, $blocks);
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
            <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "body"), "html", null, true);
        echo "</p>
      
";
    }

    public function getTemplateName()
    {
        return "SepaBlogBundle:Blog:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 6,  25 => 5,  23 => 4,  19 => 2,);
    }
}
