<?php

/* so-emarket/template/footer/footer2.twig */
class __TwigTemplate_095a8deb5b2e88d6e9549d6eff6f568fbe641aac0fe829a3850aedc066325214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"footer-container typefooter-";
        echo (((isset($context["typefooter"]) ? $context["typefooter"] : null)) ? ((isset($context["typefooter"]) ? $context["typefooter"] : null)) : ("1"));
        echo "\">
\t";
        // line 2
        echo "  
\t";
        // line 3
        if ( !twig_test_empty((isset($context["footer_block2"]) ? $context["footer_block2"] : null))) {
            // line 4
            echo "\t<div class=\"footer-main desc-collapse showdown\" id=\"collapse-footer\">
\t
\t\t";
            // line 6
            echo (isset($context["footer_block2"]) ? $context["footer_block2"] : null);
            echo "
\t\t\t
\t</div>
\t<div class=\"button-toggle hidden-lg hidden-md\">
         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
            <span class=\"toggle-more\">";
            // line 11
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_more"), "method");
            echo " <i class=\"fa fa-angle-down\"></i></span> 
            <span class=\"toggle-less\">";
            // line 12
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "show_less"), "method");
            echo " <i class=\"fa fa-angle-up\"></i></span>           
\t\t</a>        
\t</div>
\t";
        }
        // line 16
        echo "\t
\t
\t";
        // line 18
        echo " 
\t<div class=\"footer-bottom \">
\t\t<div class=\"container\">\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12 copyright-w\">\t
\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t";
        // line 24
        if (twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "copyright"), "method"))) {
            // line 25
            echo "\t\t\t\t\t\t";
            echo (isset($context["powered"]) ? $context["powered"] : null);
            echo "
\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t";
            echo twig_replace_filter($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "copyright"), "method")), "method"), array("{year}" => twig_date_format_filter($this->env, "now", "Y")));
            echo "
\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t";
        // line 31
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "imgpayment_status"), "method")) {
            echo " 
\t\t\t<div class=\"col-lg-6 col-md-5 col-sm-12 col-xs-12 payment-w\">
\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"image/";
            // line 33
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "imgpayment"), "method");
            echo "\"  alt=\"imgpayment\">
\t\t\t</div>
\t\t\t";
        }
        // line 36
        echo "\t\t</div>
\t\t</div>

\t\t
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/footer/footer2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 36,  87 => 33,  82 => 31,  78 => 29,  72 => 27,  66 => 25,  64 => 24,  56 => 18,  52 => 16,  45 => 12,  41 => 11,  33 => 6,  29 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }
}
/* <footer class="footer-container typefooter-{{typefooter ? typefooter : '1'}}">*/
/* 	{#======	FOOTER TOP	=======#}  */
/* 	{% if footer_block2 is not empty %}*/
/* 	<div class="footer-main desc-collapse showdown" id="collapse-footer">*/
/* 	*/
/* 		{{footer_block2}}*/
/* 			*/
/* 	</div>*/
/* 	<div class="button-toggle hidden-lg hidden-md">*/
/*          <a class="showmore" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapse-footer">*/
/*             <span class="toggle-more">{{ objlang.get('show_more') }} <i class="fa fa-angle-down"></i></span> */
/*             <span class="toggle-less">{{ objlang.get('show_less') }} <i class="fa fa-angle-up"></i></span>           */
/* 		</a>        */
/* 	</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	*/
/* 	{#======	FOOTER BOTTOM	=======#} */
/* 	<div class="footer-bottom ">*/
/* 		<div class="container">		*/
/* 		<div class="row">*/
/* 			<div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 copyright-w">	*/
/* 				<div class="copyright">*/
/* 					{% if soconfig.get_settings('copyright') is empty %}*/
/* 						{{ powered }}*/
/* 					{% else %}*/
/* 						{{ soconfig.decode_entities(soconfig.get_settings('copyright'))|replace({'{year}': "now"|date("Y")}) }}*/
/* 					{% endif %}*/
/* 				</div>	*/
/* 			</div>*/
/* 			{% if soconfig.get_settings('imgpayment_status')%} */
/* 			<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 payment-w">*/
/* 				<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/{{  soconfig.get_settings('imgpayment') }}"  alt="imgpayment">*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		</div>*/
/* */
/* 		*/
/* 	</div>*/
/* </footer>*/
