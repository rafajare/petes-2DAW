<?php

/* animales/edit.html.twig */
class __TwigTemplate_c44c42ff07c0a6d54bfcbf0c582b87c3a62fb2f4630fa1cdfbe117f74203870b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "animales/edit.html.twig", 1);
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
        $__internal_a24deb98f523cda5e87d384645c57c44165cd8dbc9e90dd0b4b02efc9a8fc737 = $this->env->getExtension("native_profiler");
        $__internal_a24deb98f523cda5e87d384645c57c44165cd8dbc9e90dd0b4b02efc9a8fc737->enter($__internal_a24deb98f523cda5e87d384645c57c44165cd8dbc9e90dd0b4b02efc9a8fc737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "animales/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24deb98f523cda5e87d384645c57c44165cd8dbc9e90dd0b4b02efc9a8fc737->leave($__internal_a24deb98f523cda5e87d384645c57c44165cd8dbc9e90dd0b4b02efc9a8fc737_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66f7e33b66cd7ed243901e9d93d46bad4dea59af51c9fc36c945f1730866254b = $this->env->getExtension("native_profiler");
        $__internal_66f7e33b66cd7ed243901e9d93d46bad4dea59af51c9fc36c945f1730866254b->enter($__internal_66f7e33b66cd7ed243901e9d93d46bad4dea59af51c9fc36c945f1730866254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Animales edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("animales_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_66f7e33b66cd7ed243901e9d93d46bad4dea59af51c9fc36c945f1730866254b->leave($__internal_66f7e33b66cd7ed243901e9d93d46bad4dea59af51c9fc36c945f1730866254b_prof);

    }

    public function getTemplateName()
    {
        return "animales/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Animales edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('animales_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
