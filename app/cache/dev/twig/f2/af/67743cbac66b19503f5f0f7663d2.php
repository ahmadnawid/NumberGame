<?php

/* GameGuessNumberBundle::main.html.twig */
class __TwigTemplate_f2af67743cbac66b19503f5f0f7663d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 8
        echo " 
<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " > 
  Hello ";
        // line 10
        echo nl2br(twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true));
        echo "!
 Guess a number between 1-10  
 ";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
   \t  

    <input type=\"submit\" value=\"guess\" />
</form>











<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show", array("gtype" => 1)), "html", null, true);
        echo "\">1D List</a>

";
    }

    public function getTemplateName()
    {
        return "GameGuessNumberBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 28,  34 => 12,  29 => 10,  23 => 9,  20 => 8,  17 => 1,);
    }
}
