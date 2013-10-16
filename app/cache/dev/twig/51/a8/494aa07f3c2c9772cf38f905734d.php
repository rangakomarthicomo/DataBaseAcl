<?php

/* ::base.html.twig */
class __TwigTemplate_51a8494aa07f3c2c9772cf38f905734d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7 ]><html class=\"ie ie6\" lang=\"en\"> <![endif]-->
<!--[if IE 7 ]><html class=\"ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"ie ie8\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> \t<html lang=\"en\"> <!--<![endif]-->
<head>

\t<!-- General Metas -->
\t<meta charset=\"utf-8\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">\t<!-- Force Latest IE rendering engine -->
        ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"\">
\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t
\t<!-- Mobile Specific Metas -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" /> 
\t";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "</head>
<body>
    ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "\t<title>DataBase Acl</title>";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "\t<!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationacl/css/base.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationacl/css/skeleton.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationacl/css/layout.css"), "html", null, true);
        echo "\">
\t";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "\t<!-- Primary Page Layout -->
        
        

\t<div class=\"container\">
\t\t
              ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "\t</div><!-- container -->
";
        // line 40
        $this->displayBlock('scripts', $context, $blocks);
        // line 46
        echo "<!-- End Document -->

";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "\t\t
              ";
    }

    // line 40
    public function block_scripts($context, array $blocks = array())
    {
        // line 41
        echo "\t<!-- JS  -->
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js\"></script>
\t<script>window.jQuery || document.write(\"<script src='";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/application/acl/js/jquery-1.5.1.min.js"), "html", null, true);
        echo "'>\\x3C/script>\")</script>
\t<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/applicationacl/js/app.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  127 => 43,  123 => 41,  120 => 40,  115 => 37,  112 => 36,  106 => 46,  104 => 40,  101 => 39,  99 => 36,  91 => 30,  88 => 29,  82 => 25,  78 => 24,  74 => 23,  71 => 22,  68 => 21,  64 => 12,  56 => 49,  54 => 29,  50 => 27,  38 => 13,  36 => 11,  24 => 1,  109 => 44,  102 => 39,  90 => 33,  84 => 30,  77 => 26,  73 => 25,  69 => 24,  65 => 23,  61 => 11,  55 => 21,  52 => 20,  48 => 21,  31 => 4,  28 => 3,);
    }
}
