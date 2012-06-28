<?php

/* SepaBlogBundle:Blog:layout.html.php */
class __TwigTemplate_80f856551570d7679f5e63ce34cf0c3d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
     \t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title><?php \$view['slots']->output('title', 'Default title') ?></title>
    </head>
    <body>
        <?php \$view['slots']->output('_content') ?>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SepaBlogBundle:Blog:layout.html.php";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,  58 => 14,  51 => 12,  46 => 10,  40 => 9,  36 => 7,  33 => 6,  27 => 4,);
    }
}
