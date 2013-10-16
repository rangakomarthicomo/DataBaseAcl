<?php

/* ApplicationAclBundle:Login:login.html.twig */
class __TwigTemplate_e569734bf97b591bd5ca913ceec0fabb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
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
        echo "
    <title>Login</title>

";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "    
    
 ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    
        <div class=\"form-bg\">
                    
\t\t\t<form>
\t\t\t\t<h2>Login</h2>
\t\t\t\t<p><input type=\"text\" placeholder=\"Username\"></p>
\t\t\t\t<p><input type=\"password\" placeholder=\"Password\"></p>
\t\t\t\t<label for=\"remember\">
\t\t\t\t  <input type=\"checkbox\" id=\"remember\" value=\"remember\" />
\t\t\t\t  <span>Remember me on this computer</span>
\t\t\t\t</label>
\t\t\t\t<button type=\"submit\"></button>
\t\t\t<form>
\t\t</div>

\t
\t\t<p class=\"forgot\">Forgot your password? <a href=\"\">Click here to reset it.</a></p>

    ";
    }

    public function getTemplateName()
    {
        return "ApplicationAclBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  48 => 31,  46 => 11,  43 => 10,  40 => 9,  33 => 4,  30 => 3,);
    }
}
