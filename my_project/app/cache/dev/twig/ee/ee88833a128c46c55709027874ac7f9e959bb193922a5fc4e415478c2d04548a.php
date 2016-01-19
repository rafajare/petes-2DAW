<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f00d35714eef09dd7f2b2100f95d73a57b68c5f3590db3523342b65a1982850d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8ae2895149ddb9f3334c3edbbbb606d7ab95927160b274f596e33a0a7155375 = $this->env->getExtension("native_profiler");
        $__internal_d8ae2895149ddb9f3334c3edbbbb606d7ab95927160b274f596e33a0a7155375->enter($__internal_d8ae2895149ddb9f3334c3edbbbb606d7ab95927160b274f596e33a0a7155375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ae2895149ddb9f3334c3edbbbb606d7ab95927160b274f596e33a0a7155375->leave($__internal_d8ae2895149ddb9f3334c3edbbbb606d7ab95927160b274f596e33a0a7155375_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ff766544ab6e64057890b60b656712e6586b2afb0114c29fe02c3962a6bf918 = $this->env->getExtension("native_profiler");
        $__internal_1ff766544ab6e64057890b60b656712e6586b2afb0114c29fe02c3962a6bf918->enter($__internal_1ff766544ab6e64057890b60b656712e6586b2afb0114c29fe02c3962a6bf918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ff766544ab6e64057890b60b656712e6586b2afb0114c29fe02c3962a6bf918->leave($__internal_1ff766544ab6e64057890b60b656712e6586b2afb0114c29fe02c3962a6bf918_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f718b05239667dab4a0084e1b1fd16c10efac35eaebf8c2e2bbf4bf04f219f60 = $this->env->getExtension("native_profiler");
        $__internal_f718b05239667dab4a0084e1b1fd16c10efac35eaebf8c2e2bbf4bf04f219f60->enter($__internal_f718b05239667dab4a0084e1b1fd16c10efac35eaebf8c2e2bbf4bf04f219f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f718b05239667dab4a0084e1b1fd16c10efac35eaebf8c2e2bbf4bf04f219f60->leave($__internal_f718b05239667dab4a0084e1b1fd16c10efac35eaebf8c2e2bbf4bf04f219f60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_065f4ceb017371c0eac9cb8e5be51caeaa72425f9e946f2e93f2e0e2fa7076ec = $this->env->getExtension("native_profiler");
        $__internal_065f4ceb017371c0eac9cb8e5be51caeaa72425f9e946f2e93f2e0e2fa7076ec->enter($__internal_065f4ceb017371c0eac9cb8e5be51caeaa72425f9e946f2e93f2e0e2fa7076ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_065f4ceb017371c0eac9cb8e5be51caeaa72425f9e946f2e93f2e0e2fa7076ec->leave($__internal_065f4ceb017371c0eac9cb8e5be51caeaa72425f9e946f2e93f2e0e2fa7076ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
