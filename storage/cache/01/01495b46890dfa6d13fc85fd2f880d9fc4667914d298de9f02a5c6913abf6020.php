<?php

/* so-emarket/template/soconfig/subcategory.twig */
class __TwigTemplate_5224305b7e54811159142d5003a8fa760a7b1084dda5f9c0417f413287324760 extends Twig_Template
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
        // line 9
        $context["category_info"] = $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "lstimg_cate_status"), "method");
        // line 10
        if ((isset($context["category_info"]) ? $context["category_info"] : null)) {
            // line 11
            echo "\t<h3 class=\"title-category \">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h3> 
\t";
            // line 13
            echo "\t";
            if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
                // line 14
                echo "\t<div class=\"form-group category-info\">
\t\t\t";
                // line 15
                $context["class_category_info"] = ((((isset($context["category_info"]) ? $context["category_info"] : null) == 2)) ? ("col-sm-9 col-xs-12") : ("col-sm-12 col-xs-12"));
                // line 16
                echo "\t\t\t<div class=\" row\">
\t\t\t\t";
                // line 17
                if (((isset($context["thumb"]) ? $context["thumb"] : null) && ((isset($context["category_info"]) ? $context["category_info"] : null) == 2))) {
                    // line 18
                    echo "\t\t\t\t\t<div class=\"img-cate col-sm-3 col-xs-12\"><img class=\"media-object lazyload\"  data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo (isset($context["thumb"]) ? $context["thumb"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" /></div>
\t\t\t\t";
                }
                // line 20
                echo "
\t\t\t\t";
                // line 21
                if ((isset($context["description"]) ? $context["description"] : null)) {
                    // line 22
                    echo "\t\t\t\t\t<div class=\"";
                    echo (isset($context["class_category_info"]) ? $context["class_category_info"] : null);
                    echo "\">";
                    echo (isset($context["description"]) ? $context["description"] : null);
                    echo "</div>
\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t
\t\t\t</div>
\t\t
\t\t
\t</div>
\t";
            }
        }
        // line 31
        echo "
";
        // line 33
        if (((isset($context["categories"]) ? $context["categories"] : null) && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_catalog_refine"), "method"))) {
            // line 34
            echo "\t<div class=\"refine-search form-group clearfix\">
\t\t<h3 class=\"title-category\">";
            // line 35
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
\t\t<ul class=\"refine-search__content \">
\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "\t\t\t<li class=\"refine-search__subitem\">
\t\t\t\t";
                // line 39
                if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "product_catalog_refine"), "method") == 1)) {
                    // line 40
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"thumbnail\"><img class=\"lazyload\"  data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" /> </a>
\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"thumbnail\"><img class=\"lazyload\"  data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" /> </a>
\t\t\t\t\t<a href=\"";
                    // line 43
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"text-center\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
\t\t\t\t";
                }
                // line 45
                echo "\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t</ul>
\t\t<script type=\"text/javascript\"><!--
\t\t\tcatalog_refine_number = ";
            // line 49
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "catalog_refine_number"), "method");
            echo ";
\t\t\tif(catalog_refine_number <= \$('.refine-search__content > li').length)
\t\t\t\$('.refine-search__content').append('<li class=\"refine-loadmore\"><i class=\"fa fa-plus\"></i> <span class=\"more-view\"> ";
            // line 51
            echo (isset($context["text_refine_more"]) ? $context["text_refine_more"] : null);
            echo " </span></li>');

\t\t\tvar show_catalog_refine_number = catalog_refine_number-1 ;
\t\t\t\$('ul.refine-search__content > li.refine-search__subitem').each(function(i){
\t\t\t\tif(i>show_catalog_refine_number){
\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t}
\t\t\t});

\t\t\t\$(\"ul.refine-search__content .refine-loadmore\").click(function(){
\t\t\t\tif(\$(this).hasClass('open')){
\t\t\t\t\t\$('ul.refine-search__content li.refine-search__subitem').each(function(i){
\t\t\t\t\t\tif(i>show_catalog_refine_number){
\t\t\t\t\t\t\t\$(this).slideUp(200);
\t\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t\$(this).removeClass('open');
\t\t\t\t\t\$('.refine-loadmore').html('<i class=\"fa fa-plus\"></i> <span class=\"more-view\">";
            // line 69
            echo (isset($context["text_refine_more"]) ? $context["text_refine_more"] : null);
            echo " </span>');

\t\t\t\t}else{
\t\t\t\t\t\$('ul.refine-search__content li.refine-search__subitem').each(function(i){
\t\t\t\t\t\tif(i>show_catalog_refine_number){
\t\t\t\t\t\t\t\$(this).slideDown(200);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t\$(this).addClass('open');
\t\t\t\t\t\$('.refine-loadmore').html('<i class=\"fa fa-minus\"></i> <span class=\"more-view\">";
            // line 78
            echo (isset($context["text_refine_less"]) ? $context["text_refine_less"] : null);
            echo " </span>');
\t\t\t\t}
\t\t\t});
\t\t//--></script> 
\t\t
\t\t
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "so-emarket/template/soconfig/subcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 78,  158 => 69,  137 => 51,  132 => 49,  128 => 47,  121 => 45,  114 => 43,  105 => 42,  95 => 40,  93 => 39,  90 => 38,  86 => 37,  81 => 35,  78 => 34,  76 => 33,  73 => 31,  64 => 24,  56 => 22,  54 => 21,  51 => 20,  41 => 18,  39 => 17,  36 => 16,  34 => 15,  31 => 14,  28 => 13,  23 => 11,  21 => 10,  19 => 9,);
    }
}
/* {#*/
/* ****************************************************** */
/*  * @package	SO Framework for Opencart 3.x*/
/*  * @author	http://www.opencartworks.com*/
/*  * @license	GNU General Public License*/
/*  * @copyright(C) 2008-2017 opencartworks.com. All rights reserved.*/
/*  *******************************************************/
/* #}*/
/* {% set category_info = soconfig.get_settings('lstimg_cate_status') %}*/
/* {% if category_info %}*/
/* 	<h3 class="title-category ">{{heading_title}}</h3> */
/* 	{#===== Show Description Category =======#}*/
/* 	{% if thumb or description %}*/
/* 	<div class="form-group category-info">*/
/* 			{% set class_category_info = category_info == 2 ? 'col-sm-9 col-xs-12' : 'col-sm-12 col-xs-12' %}*/
/* 			<div class=" row">*/
/* 				{% if thumb and category_info == 2 %}*/
/* 					<div class="img-cate col-sm-3 col-xs-12"><img class="media-object lazyload"  data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" /></div>*/
/* 				{% endif %}*/
/* */
/* 				{% if description %}*/
/* 					<div class="{{class_category_info}}">{{ description }}</div>*/
/* 				{% endif %}*/
/* 				*/
/* 			</div>*/
/* 		*/
/* 		*/
/* 	</div>*/
/* 	{% endif %}*/
/* {% endif %}*/
/* */
/* {#===== Show Sub Category =======#}*/
/* {% if categories and soconfig.get_settings('product_catalog_refine') %}*/
/* 	<div class="refine-search form-group clearfix">*/
/* 		<h3 class="title-category">{{ text_refine }}</h3>*/
/* 		<ul class="refine-search__content ">*/
/* 		{% for category in categories %}*/
/* 			<li class="refine-search__subitem">*/
/* 				{%if soconfig.get_settings('product_catalog_refine') == 1 %}*/
/* 					<a href="{{ category.href }}" class="thumbnail"><img class="lazyload"  data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{category.thumb}}" alt="{{ category.name }}" /> </a>*/
/* 				{% else %}*/
/* 					<a href="{{ category.href }}" class="thumbnail"><img class="lazyload"  data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{category.thumb}}" alt="{{ category.name }}" /> </a>*/
/* 					<a href="{{ category.href }}" class="text-center">{{ category.name }}</a>*/
/* 				{% endif %}*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 		</ul>*/
/* 		<script type="text/javascript"><!--*/
/* 			catalog_refine_number = {{soconfig.get_settings('catalog_refine_number')}};*/
/* 			if(catalog_refine_number <= $('.refine-search__content > li').length)*/
/* 			$('.refine-search__content').append('<li class="refine-loadmore"><i class="fa fa-plus"></i> <span class="more-view"> {{text_refine_more}} </span></li>');*/
/* */
/* 			var show_catalog_refine_number = catalog_refine_number-1 ;*/
/* 			$('ul.refine-search__content > li.refine-search__subitem').each(function(i){*/
/* 				if(i>show_catalog_refine_number){*/
/* 					$(this).css('display', 'none');*/
/* 				}*/
/* 			});*/
/* */
/* 			$("ul.refine-search__content .refine-loadmore").click(function(){*/
/* 				if($(this).hasClass('open')){*/
/* 					$('ul.refine-search__content li.refine-search__subitem').each(function(i){*/
/* 						if(i>show_catalog_refine_number){*/
/* 							$(this).slideUp(200);*/
/* 							$(this).css('display', 'none');*/
/* 						}*/
/* 					});*/
/* 					$(this).removeClass('open');*/
/* 					$('.refine-loadmore').html('<i class="fa fa-plus"></i> <span class="more-view">{{text_refine_more}} </span>');*/
/* */
/* 				}else{*/
/* 					$('ul.refine-search__content li.refine-search__subitem').each(function(i){*/
/* 						if(i>show_catalog_refine_number){*/
/* 							$(this).slideDown(200);*/
/* 						}*/
/* 					});*/
/* 					$(this).addClass('open');*/
/* 					$('.refine-loadmore').html('<i class="fa fa-minus"></i> <span class="more-view">{{text_refine_less}} </span>');*/
/* 				}*/
/* 			});*/
/* 		//--></script> */
/* 		*/
/* 		*/
/* 	</div>*/
/* {% endif %}*/
/* */
