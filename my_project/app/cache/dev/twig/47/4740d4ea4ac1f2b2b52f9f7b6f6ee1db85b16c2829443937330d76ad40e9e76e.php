<?php

/* propietario/new.html.twig */
class __TwigTemplate_64bca18132cb3ee814c021bd922a25f6715efdbac0c7c74b37b166c282b55424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "propietario/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4edbb15b9ec288a5d3d81708f5c5d3a29e89fdb3df3fdc285da850d12d4bd8c5 = $this->env->getExtension("native_profiler");
        $__internal_4edbb15b9ec288a5d3d81708f5c5d3a29e89fdb3df3fdc285da850d12d4bd8c5->enter($__internal_4edbb15b9ec288a5d3d81708f5c5d3a29e89fdb3df3fdc285da850d12d4bd8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "propietario/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4edbb15b9ec288a5d3d81708f5c5d3a29e89fdb3df3fdc285da850d12d4bd8c5->leave($__internal_4edbb15b9ec288a5d3d81708f5c5d3a29e89fdb3df3fdc285da850d12d4bd8c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e413128103b0b7291df26d415e199382abc5e96797a8cd65e7739296d705cfc = $this->env->getExtension("native_profiler");
        $__internal_0e413128103b0b7291df26d415e199382abc5e96797a8cd65e7739296d705cfc->enter($__internal_0e413128103b0b7291df26d415e199382abc5e96797a8cd65e7739296d705cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Propietario creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("propietario_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0e413128103b0b7291df26d415e199382abc5e96797a8cd65e7739296d705cfc->leave($__internal_0e413128103b0b7291df26d415e199382abc5e96797a8cd65e7739296d705cfc_prof);

    }

    public function getTemplateName()
    {
        return "propietario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Propietario creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('propietario_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
