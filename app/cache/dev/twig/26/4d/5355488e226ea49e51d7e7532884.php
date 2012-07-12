<?php

/* GameGuessNumberBundle::form.html.twig */
class __TwigTemplate_264d5355488e226ea49e51d7e7532884 extends Twig_Template
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
        // line 2
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8f3ebe8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8f3ebe8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8f3ebe8_part_1_body_1.css");
            // line 5
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
            // asset "8f3ebe8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8f3ebe8_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8f3ebe8_part_1_formStyle_2.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
            // asset "8f3ebe8_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8f3ebe8_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8f3ebe8_part_1_style_3.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
        } else {
            // asset "8f3ebe8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8f3ebe8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/8f3ebe8.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 7
        echo "
";
        // line 9
        echo "
<div class=\"f2\">
<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " >
";
        // line 12
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

    <input class=\"input\" type=\"submit\" />
</form>

</div>
 

";
    }

    public function getTemplateName()
    {
        return "GameGuessNumberBundle::form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  57 => 11,  53 => 9,  50 => 7,  24 => 5,  20 => 2,  17 => 1,);
    }
}
