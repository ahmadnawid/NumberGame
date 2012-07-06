<?php

/* GameGuessNumberBundle::main.html.twig */
class __TwigTemplate_f2af67743cbac66b19503f5f0f7663d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
 ";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "\t
 

";
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    

 
<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("main", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
  Hello ";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true));
        echo "!
 Guess a number between 1-10  
  
 ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
   \t

    <input type=\"submit\" value=\"guess\" />
</form>

 ";
    }

    public function getTemplateName()
    {
        return "GameGuessNumberBundle::main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  44 => 7,  38 => 6,  33 => 3,  30 => 2,  23 => 16,  21 => 2,  18 => 1,);
    }
}
