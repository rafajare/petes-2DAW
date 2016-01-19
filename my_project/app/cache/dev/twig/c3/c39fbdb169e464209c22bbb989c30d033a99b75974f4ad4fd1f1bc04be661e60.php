<?php

/* base.html.twig */
class __TwigTemplate_9d3f89b4b876caf4ddd27b5fff24002962d13d42c14ee824a6499a1496323d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6525ecb5ce8ba2fa72d875e9a12004c5984a5f783402563b05647fbea855967b = $this->env->getExtension("native_profiler");
        $__internal_6525ecb5ce8ba2fa72d875e9a12004c5984a5f783402563b05647fbea855967b->enter($__internal_6525ecb5ce8ba2fa72d875e9a12004c5984a5f783402563b05647fbea855967b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!-- 
.hidden-xs
Si aplicamos esta clase CSS a un DIV no aparecerá en la versión móvil pero si desde un ordenador o tablet.

.visible-xs
Si aplicamos esta clase CSS a un DIV sí aparecerá en la versión móvil pero no desde una dispositivo con la pantalla mayor.
-->
  <head>
  <style>
\t\t  .btnJ{
\t\t   -webkit-border-radius: 35;
\t\t  -moz-border-radius: 35;
\t\t  border-radius: 35px;
\t\t  color: #ffffff;
\t\t  font-size: 20px;
\t\t  background: #00BCD4;
\t\t  padding: 10px 20px 10px 20px;
\t\t  border: solid #1f628d 0px;
\t\t  text-decoration: none;
\t\t}


\t\t.btnJ:hover {
\t\t  text-decoration: none;
\t\t}

\t\t.navbar-nav.nav-justified > li{
    float:none;
}


  </style>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- menu redondo-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../bundles/animales/css/normalize.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../../bundles/animales/css/demo.css\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../../bundles/animales/css/component1.css\"/>
\t\t
\t\t<script src=\"../../bundles/animales/js/modernizr-2.6.2.min.js\"></script>
\t<!-- fin menu redondo -->
    <title>Pet’s, adopta y no compres</title>

    <meta name=\"description\" content=\"Pets page\">
    <meta name=\"author\" content=\"Pets\">


    <link href=\"../../bundles/animales/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../../bundles/animales/css/style.css\" rel=\"stylesheet\">

  </head>
  <body>
  \t<!-- menu redondo-->
  \t<div class=\"component\">
\t\t\t\t<!-- Start Nav Structure -->
\t\t\t\t<button class=\"cn-button\" id=\"cn-button\">+</button>
\t\t\t\t<div class=\"cn-wrapper\" id=\"cn-wrapper\" style=\"margin-bottom: 10px\"> <!-- mover posicion de los botones del menu -->
\t\t\t\t    <ul>
\t\t\t\t      <li><a href=\"#\"><img src=\"../../bundles/animales/imgs/iconsMenu/camada.png\" width=\"45px\"></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"../../bundles/animales//imgs/iconsMenu/adoptar.png\" width=\"45px\"></span></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"../../bundles/animales//imgs/iconsMenu/home.png\" width=\"40px\"></a></li>
\t\t\t\t      <li><a href=\"#\"><img src=\"../../bundles/animales//imgs/iconsMenu/buscar.png\" width=\"30px\"></a></li>
\t\t\t\t       <li><a href=\"#\"><img src=\"../../bundles/animales//imgs/iconsMenu/donar.png\" width=\"45px\"></a></li>



\t\t\t\t     </ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"cn-overlay\" class=\"cn-overlay\"></div>
\t\t\t\t<!-- End Nav Structure -->
\t</div>
\t<!-- fin menu redondo-->
    <div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" style=\"height:95px;\">
\t\t\t\t<div class=\"navbar-header\" >
\t\t\t\t\t<a href=\"publicar.html\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" style=\"border:0;\">
\t\t\t\t\t\t<img src=\"../../bundles/animales/imgs/publicar.png\" class=\"visible-xs\">
\t\t\t\t\t\t</button>
\t\t\t\t\t</a> 
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"../../bundles/animales/imgs/logo.png\" width=\"160px\"></a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav navbar-nav nav-justified hidden-xs\" role=\"menu\">
 \t\t\t\t\t<li><a href=\"publicar.html\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default hidden-xs\" style=\"border: 0px;border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-moz-border-radius: 27px 27px 27px 27px;
\t\t\t\t\t\t\t-webkit-border-radius: 27px 27px 27px 27px; margin-top: -55px;\">
\t\t\t\t\t\t\t<img src=\"../../bundles/animales/imgs/publicar.png\"/>&nbsp;&nbsp;&nbsp;Publicar anuncio
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t</a>
 \t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<div class=\"jumbotron\" style=\"margin-top: 170px; margin-bottom: 50px;\">
\t\t\t\t        ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "                        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t
</div>
<div id=\"footer\" style=\"position: fixed; bottom: 0; width: 100%; height: 40px; background-color: #00BCD4;text-align: right; line-height: 40px;\">
      <div class=\"container\" >
        <p class=\"text-muted credit\" ><font color=\"#FFFFFF\">Pet's | Copyright © 2016 - 2017</font></p>

      </div>
    </div>

    <script src=\"../../bundles/animales/js/jquery.min.js\"></script>
    <script src=\"../../bundles/animales/js/bootstrap.min.js\"></script>
    <script src=\"../../bundles/animales/js/scripts.js\"></script>
    \t<!-- menu redondo-->
\t\t<script src=\"../../bundles/animales/js/polyfills.js\"></script>
\t\t<script src=\"../../bundles/animales/js/demo1.js\"></script>
\t\t<!-- fin menu redondo -->   
  </body>
</html>";
        
        $__internal_6525ecb5ce8ba2fa72d875e9a12004c5984a5f783402563b05647fbea855967b->leave($__internal_6525ecb5ce8ba2fa72d875e9a12004c5984a5f783402563b05647fbea855967b_prof);

    }

    // line 100
    public function block_body($context, array $blocks = array())
    {
        $__internal_f15ea4173f61788b6db6ccc431ceaa0bc61c45e59371fb2149e1bb8f543f0cf4 = $this->env->getExtension("native_profiler");
        $__internal_f15ea4173f61788b6db6ccc431ceaa0bc61c45e59371fb2149e1bb8f543f0cf4->enter($__internal_f15ea4173f61788b6db6ccc431ceaa0bc61c45e59371fb2149e1bb8f543f0cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f15ea4173f61788b6db6ccc431ceaa0bc61c45e59371fb2149e1bb8f543f0cf4->leave($__internal_f15ea4173f61788b6db6ccc431ceaa0bc61c45e59371fb2149e1bb8f543f0cf4_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03f86ab46d1b30a3be27e294e12e291da3fc67f9ea20d12f1937ba6525578eed = $this->env->getExtension("native_profiler");
        $__internal_03f86ab46d1b30a3be27e294e12e291da3fc67f9ea20d12f1937ba6525578eed->enter($__internal_03f86ab46d1b30a3be27e294e12e291da3fc67f9ea20d12f1937ba6525578eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_03f86ab46d1b30a3be27e294e12e291da3fc67f9ea20d12f1937ba6525578eed->leave($__internal_03f86ab46d1b30a3be27e294e12e291da3fc67f9ea20d12f1937ba6525578eed_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 101,  157 => 100,  130 => 102,  127 => 101,  125 => 100,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <!-- */
/* .hidden-xs*/
/* Si aplicamos esta clase CSS a un DIV no aparecerá en la versión móvil pero si desde un ordenador o tablet.*/
/* */
/* .visible-xs*/
/* Si aplicamos esta clase CSS a un DIV sí aparecerá en la versión móvil pero no desde una dispositivo con la pantalla mayor.*/
/* -->*/
/*   <head>*/
/*   <style>*/
/* 		  .btnJ{*/
/* 		   -webkit-border-radius: 35;*/
/* 		  -moz-border-radius: 35;*/
/* 		  border-radius: 35px;*/
/* 		  color: #ffffff;*/
/* 		  font-size: 20px;*/
/* 		  background: #00BCD4;*/
/* 		  padding: 10px 20px 10px 20px;*/
/* 		  border: solid #1f628d 0px;*/
/* 		  text-decoration: none;*/
/* 		}*/
/* */
/* */
/* 		.btnJ:hover {*/
/* 		  text-decoration: none;*/
/* 		}*/
/* */
/* 		.navbar-nav.nav-justified > li{*/
/*     float:none;*/
/* }*/
/* */
/* */
/*   </style>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <!-- menu redondo-->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link rel="stylesheet" type="text/css" href="../../bundles/animales/css/normalize.css" />*/
/* 		<link rel="stylesheet" type="text/css" href="../../bundles/animales/css/demo.css" />*/
/* 		<link rel="stylesheet" type="text/css" href="../../bundles/animales/css/component1.css"/>*/
/* 		*/
/* 		<script src="../../bundles/animales/js/modernizr-2.6.2.min.js"></script>*/
/* 	<!-- fin menu redondo -->*/
/*     <title>Pet’s, adopta y no compres</title>*/
/* */
/*     <meta name="description" content="Pets page">*/
/*     <meta name="author" content="Pets">*/
/* */
/* */
/*     <link href="../../bundles/animales/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="../../bundles/animales/css/style.css" rel="stylesheet">*/
/* */
/*   </head>*/
/*   <body>*/
/*   	<!-- menu redondo-->*/
/*   	<div class="component">*/
/* 				<!-- Start Nav Structure -->*/
/* 				<button class="cn-button" id="cn-button">+</button>*/
/* 				<div class="cn-wrapper" id="cn-wrapper" style="margin-bottom: 10px"> <!-- mover posicion de los botones del menu -->*/
/* 				    <ul>*/
/* 				      <li><a href="#"><img src="../../bundles/animales/imgs/iconsMenu/camada.png" width="45px"></a></li>*/
/* 				      <li><a href="#"><img src="../../bundles/animales//imgs/iconsMenu/adoptar.png" width="45px"></span></a></li>*/
/* 				      <li><a href="#"><img src="../../bundles/animales//imgs/iconsMenu/home.png" width="40px"></a></li>*/
/* 				      <li><a href="#"><img src="../../bundles/animales//imgs/iconsMenu/buscar.png" width="30px"></a></li>*/
/* 				       <li><a href="#"><img src="../../bundles/animales//imgs/iconsMenu/donar.png" width="45px"></a></li>*/
/* */
/* */
/* */
/* 				     </ul>*/
/* 				</div>*/
/* 				<div id="cn-overlay" class="cn-overlay"></div>*/
/* 				<!-- End Nav Structure -->*/
/* 	</div>*/
/* 	<!-- fin menu redondo-->*/
/*     <div class="container-fluid">*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:95px;">*/
/* 				<div class="navbar-header" >*/
/* 					<a href="publicar.html">*/
/* 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="border:0;">*/
/* 						<img src="../../bundles/animales/imgs/publicar.png" class="visible-xs">*/
/* 						</button>*/
/* 					</a> */
/* 					<a class="navbar-brand" href="#"><img src="../../bundles/animales/imgs/logo.png" width="160px"></a>*/
/* 				</div>*/
/* 				<ul class="nav navbar-nav nav-justified hidden-xs" role="menu">*/
/*  					<li><a href="publicar.html">*/
/* 							<button type="submit" class="btn btn-default hidden-xs" style="border: 0px;border-radius: 27px 27px 27px 27px;*/
/* 							-moz-border-radius: 27px 27px 27px 27px;*/
/* 							-webkit-border-radius: 27px 27px 27px 27px; margin-top: -55px;">*/
/* 							<img src="../../bundles/animales/imgs/publicar.png"/>&nbsp;&nbsp;&nbsp;Publicar anuncio*/
/* 							</button>*/
/* 						*/
/* 						</a>*/
/*  				</ul>*/
/* 			</nav>*/
/* 			<div class="jumbotron" style="margin-top: 170px; margin-bottom: 50px;">*/
/* 				        {% block body %}{% endblock %}*/
/*                         {% block javascripts %}{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* </div>*/
/* <div id="footer" style="position: fixed; bottom: 0; width: 100%; height: 40px; background-color: #00BCD4;text-align: right; line-height: 40px;">*/
/*       <div class="container" >*/
/*         <p class="text-muted credit" ><font color="#FFFFFF">Pet's | Copyright © 2016 - 2017</font></p>*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/*     <script src="../../bundles/animales/js/jquery.min.js"></script>*/
/*     <script src="../../bundles/animales/js/bootstrap.min.js"></script>*/
/*     <script src="../../bundles/animales/js/scripts.js"></script>*/
/*     	<!-- menu redondo-->*/
/* 		<script src="../../bundles/animales/js/polyfills.js"></script>*/
/* 		<script src="../../bundles/animales/js/demo1.js"></script>*/
/* 		<!-- fin menu redondo -->   */
/*   </body>*/
/* </html>*/
