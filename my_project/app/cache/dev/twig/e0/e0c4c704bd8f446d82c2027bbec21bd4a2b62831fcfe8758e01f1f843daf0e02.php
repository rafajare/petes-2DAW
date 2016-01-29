<?php

/* animales/new.html.twig */
class __TwigTemplate_5d0e7927ea47dfd58f053e383973899d5165914460a87e057782557aba166ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "animales/new.html.twig", 1);
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
        $__internal_efa0ca3a826890230219c424a7f1a212aeee30606728be03842cf75a6dff2d56 = $this->env->getExtension("native_profiler");
        $__internal_efa0ca3a826890230219c424a7f1a212aeee30606728be03842cf75a6dff2d56->enter($__internal_efa0ca3a826890230219c424a7f1a212aeee30606728be03842cf75a6dff2d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "animales/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa0ca3a826890230219c424a7f1a212aeee30606728be03842cf75a6dff2d56->leave($__internal_efa0ca3a826890230219c424a7f1a212aeee30606728be03842cf75a6dff2d56_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1131779ae290b4568502e19f96073a6810882858acad7bd0425dba1dda012661 = $this->env->getExtension("native_profiler");
        $__internal_1131779ae290b4568502e19f96073a6810882858acad7bd0425dba1dda012661->enter($__internal_1131779ae290b4568502e19f96073a6810882858acad7bd0425dba1dda012661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Publicar Anuncio</h1>

    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <table align=\"left\">
                      <tr>
                      <th>Nombre del animal:</th>
                      <th></th>
                      <th>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "</th>
                      </tr>
                      
                     <tr>
                      <th>Tipo de animal:</th>
                      <th></th>
                      <th>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'row');
        echo "</th>
                     </tr>
                      
                      <tr>
                      <th>Raza:</th>
                      <th></th>
                      <th>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raza", array()), 'row');
        echo "</th>
                      </tr>
                      
                      <tr>
                      <th>Sexo:</th>
                      <th></th>
                      <th>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexo", array()), 'row');
        echo "</th>
                      </tr>
                      
                      <tr>
                      <th>Fecha de nacimiento (aproximada):</th>
                      <th></th>
                      <th>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nacimiento", array()), 'row');
        echo "</th>
                      </tr>
                      
                      <tr>
                      <th>Nombre del propietario:</th>
                      <th></th>
                      <th>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "propietario", array()), 'row');
        echo "</th>
                      </tr>
                      
                      <tr>
                      <th>Pedigri:</th>
                      <th>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedigri", array()), 'row');
        echo "</th>
                      </tr>
            </table>
            
            <table>
                      
                      <tr>
                      <th>Titulo: <input type=\"text\" class=\"anuncio\" size=\"32\"><br>
                      <textarea class=\"anuncio\" rows=\"10\" cols=\"40\" >Escribe aquí tu anuncio</textarea></th>
                      </tr>
                      
                      
                      <tr>
                          <th><input id=\"botonPublicar\" class=\"btn btn-info\" type=\"submit\" value=\"Publicar\" style='width:340px; height:25px'/></th>
                      </tr>
                      
            </table>
           

    ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    

    
    <ul>
        <li>
            <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("animales_index");
        echo "\">Volver a la lista</a>
        </li>
    </ul>
";
        
        $__internal_1131779ae290b4568502e19f96073a6810882858acad7bd0425dba1dda012661->leave($__internal_1131779ae290b4568502e19f96073a6810882858acad7bd0425dba1dda012661_prof);

    }

    public function getTemplateName()
    {
        return "animales/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 70,  127 => 64,  105 => 45,  97 => 40,  88 => 34,  79 => 28,  70 => 22,  61 => 16,  52 => 10,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1>Publicar Anuncio</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*                 <table align="left">*/
/*                       <tr>*/
/*                       <th>Nombre del animal:</th>*/
/*                       <th></th>*/
/*                       <th>{{form_row(form.nombre) }}</th>*/
/*                       </tr>*/
/*                       */
/*                      <tr>*/
/*                       <th>Tipo de animal:</th>*/
/*                       <th></th>*/
/*                       <th>{{form_row(form.tipo) }}</th>*/
/*                      </tr>*/
/*                       */
/*                       <tr>*/
/*                       <th>Raza:</th>*/
/*                       <th></th>*/
/*                       <th>{{form_row(form.raza) }}</th>*/
/*                       </tr>*/
/*                       */
/*                       <tr>*/
/*                       <th>Sexo:</th>*/
/*                       <th></th>*/
/*                       <th>{{form_row(form.sexo) }}</th>*/
/*                       </tr>*/
/*                       */
/*                       <tr>*/
/*                       <th>Fecha de nacimiento (aproximada):</th>*/
/*                       <th></th>*/
/*                       <th>{{form_row(form.nacimiento) }}</th>*/
/*                       </tr>*/
/*                       */
/*                       <tr>*/
/*                       <th>Nombre del propietario:</th>*/
/*                       <th></th>*/
/*                       <th>{{form_row(form.propietario) }}</th>*/
/*                       </tr>*/
/*                       */
/*                       <tr>*/
/*                       <th>Pedigri:</th>*/
/*                       <th>{{form_row(form.pedigri) }}</th>*/
/*                       </tr>*/
/*             </table>*/
/*             */
/*             <table>*/
/*                       */
/*                       <tr>*/
/*                       <th>Titulo: <input type="text" class="anuncio" size="32"><br>*/
/*                       <textarea class="anuncio" rows="10" cols="40" >Escribe aquí tu anuncio</textarea></th>*/
/*                       </tr>*/
/*                       */
/*                       */
/*                       <tr>*/
/*                           <th><input id="botonPublicar" class="btn btn-info" type="submit" value="Publicar" style='width:340px; height:25px'/></th>*/
/*                       </tr>*/
/*                       */
/*             </table>*/
/*            */
/* */
/*     {{ form_end(form) }}*/
/*     */
/* */
/*     */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('animales_index') }}">Volver a la lista</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
