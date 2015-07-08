<?php

/* layout.html.twig */
class __TwigTemplate_cd9f03a7e9cdb7e9b910df79ddf1c1a6ef0ca70fb6409a863075ed88d931f8c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68622e4f56d6729942e1014344d083f0e092b0321f254b53376e2e9a97c5918e = $this->env->getExtension("native_profiler");
        $__internal_68622e4f56d6729942e1014344d083f0e092b0321f254b53376e2e9a97c5918e->enter($__internal_68622e4f56d6729942e1014344d083f0e092b0321f254b53376e2e9a97c5918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Silex Application</title>

        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("css/main.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_68622e4f56d6729942e1014344d083f0e092b0321f254b53376e2e9a97c5918e->leave($__internal_68622e4f56d6729942e1014344d083f0e092b0321f254b53376e2e9a97c5918e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_277bc1bfbea77224d931b023613205754a43c0e76e79e143db8f2c5424520c7b = $this->env->getExtension("native_profiler");
        $__internal_277bc1bfbea77224d931b023613205754a43c0e76e79e143db8f2c5424520c7b->enter($__internal_277bc1bfbea77224d931b023613205754a43c0e76e79e143db8f2c5424520c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_277bc1bfbea77224d931b023613205754a43c0e76e79e143db8f2c5424520c7b->leave($__internal_277bc1bfbea77224d931b023613205754a43c0e76e79e143db8f2c5424520c7b_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_3c2b29115a2388a1072daffed9d7e117c8834b276f76f0d74f0ff88cae4bd2ad = $this->env->getExtension("native_profiler");
        $__internal_3c2b29115a2388a1072daffed9d7e117c8834b276f76f0d74f0ff88cae4bd2ad->enter($__internal_3c2b29115a2388a1072daffed9d7e117c8834b276f76f0d74f0ff88cae4bd2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3c2b29115a2388a1072daffed9d7e117c8834b276f76f0d74f0ff88cae4bd2ad->leave($__internal_3c2b29115a2388a1072daffed9d7e117c8834b276f76f0d74f0ff88cae4bd2ad_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  63 => 4,  54 => 22,  52 => 21,  34 => 6,  29 => 4,  24 => 1,);
    }
}
