<?php

/* index.html.twig */
class __TwigTemplate_92cdf98471916ce9dc3fd564a7afb19032ad1619d9ec51cff27221d03cf8a855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4e21ed9be0b803d0d27b23f411dcaa4a79d81cb911f88b47a3023fdfbdd42db = $this->env->getExtension("native_profiler");
        $__internal_e4e21ed9be0b803d0d27b23f411dcaa4a79d81cb911f88b47a3023fdfbdd42db->enter($__internal_e4e21ed9be0b803d0d27b23f411dcaa4a79d81cb911f88b47a3023fdfbdd42db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e21ed9be0b803d0d27b23f411dcaa4a79d81cb911f88b47a3023fdfbdd42db->leave($__internal_e4e21ed9be0b803d0d27b23f411dcaa4a79d81cb911f88b47a3023fdfbdd42db_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c077589cc83ca2eea3e12dc5e51624b87b1229ec82f935a9e22fd629146918ec = $this->env->getExtension("native_profiler");
        $__internal_c077589cc83ca2eea3e12dc5e51624b87b1229ec82f935a9e22fd629146918ec->enter($__internal_c077589cc83ca2eea3e12dc5e51624b87b1229ec82f935a9e22fd629146918ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Welcome to your new Silex Application!
";
        
        $__internal_c077589cc83ca2eea3e12dc5e51624b87b1229ec82f935a9e22fd629146918ec->leave($__internal_c077589cc83ca2eea3e12dc5e51624b87b1229ec82f935a9e22fd629146918ec_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
