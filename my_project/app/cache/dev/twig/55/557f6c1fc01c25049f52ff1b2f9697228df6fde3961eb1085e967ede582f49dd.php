<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dfc71f926f5a040ec3d1f11251af93effad550739a6ce1e1f0213a4554238c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4497fd1c106f4920d84a6e8b4a020bbf51f4081204a99aca5131f03fb3aac77a = $this->env->getExtension("native_profiler");
        $__internal_4497fd1c106f4920d84a6e8b4a020bbf51f4081204a99aca5131f03fb3aac77a->enter($__internal_4497fd1c106f4920d84a6e8b4a020bbf51f4081204a99aca5131f03fb3aac77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4497fd1c106f4920d84a6e8b4a020bbf51f4081204a99aca5131f03fb3aac77a->leave($__internal_4497fd1c106f4920d84a6e8b4a020bbf51f4081204a99aca5131f03fb3aac77a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6e8b69c3e111bc6369ecf172bc7e62ea6dc11ec47587b0234f73296ae879e56 = $this->env->getExtension("native_profiler");
        $__internal_a6e8b69c3e111bc6369ecf172bc7e62ea6dc11ec47587b0234f73296ae879e56->enter($__internal_a6e8b69c3e111bc6369ecf172bc7e62ea6dc11ec47587b0234f73296ae879e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a6e8b69c3e111bc6369ecf172bc7e62ea6dc11ec47587b0234f73296ae879e56->leave($__internal_a6e8b69c3e111bc6369ecf172bc7e62ea6dc11ec47587b0234f73296ae879e56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc4ef91b67c023b6d82e5d21d27780ef08cea6eabb26b24dbc4578f7afde4226 = $this->env->getExtension("native_profiler");
        $__internal_cc4ef91b67c023b6d82e5d21d27780ef08cea6eabb26b24dbc4578f7afde4226->enter($__internal_cc4ef91b67c023b6d82e5d21d27780ef08cea6eabb26b24dbc4578f7afde4226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc4ef91b67c023b6d82e5d21d27780ef08cea6eabb26b24dbc4578f7afde4226->leave($__internal_cc4ef91b67c023b6d82e5d21d27780ef08cea6eabb26b24dbc4578f7afde4226_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_518bfce60fc01b3fcb6ab1523effcf08af5153697b97c382caad14e2f2c82beb = $this->env->getExtension("native_profiler");
        $__internal_518bfce60fc01b3fcb6ab1523effcf08af5153697b97c382caad14e2f2c82beb->enter($__internal_518bfce60fc01b3fcb6ab1523effcf08af5153697b97c382caad14e2f2c82beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_518bfce60fc01b3fcb6ab1523effcf08af5153697b97c382caad14e2f2c82beb->leave($__internal_518bfce60fc01b3fcb6ab1523effcf08af5153697b97c382caad14e2f2c82beb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
