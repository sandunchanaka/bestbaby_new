<?php

/* so-emarket/template/extension/module/so_filter_shop_by/default_product_price.twig */
class __TwigTemplate_dbd01ea9f9b0562bc1be91c1652401224666cfd9d7077cb1a0795c126ea9abe3 extends Twig_Template
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
        echo "<li class=\"so-filter-options\" data-option=\"Price\">
\t<div class=\"so-filter-heading\">
\t\t<div class=\"so-filter-heading-text\">
\t\t\t<span>";
        // line 4
        echo $this->getAttribute((isset($context["obj_lang"]) ? $context["obj_lang"] : null), "get", array(0 => "text_price"), "method");
        echo "</span>
\t\t</div>
\t\t<i class=\"fa fa-chevron-down\"></i>
\t</div>
\t<div class=\"so-filter-content-opts\">
\t\t<div class=\"so-filter-content-opts-container\">
\t\t\t<div class=\"so-filter-content-wrapper so-filter-iscroll\">
\t\t\t\t<div class=\"so-filter-options\">
\t\t\t\t\t<div class=\"so-filter-option so-filter-price\">
\t\t\t\t\t\t<div class=\"content_min_max\">
\t\t\t\t\t\t\t<div class=\"put-min put-min_max\">
\t\t\t\t\t\t\t<span class=\"name-curent\">";
        // line 15
        echo (isset($context["currencies"]) ? $context["currencies"] : null);
        echo "</span> <input type=\"text\" class=\"input_min form-control\" value=\"";
        echo (isset($context["minPrice_new"]) ? $context["minPrice_new"] : null);
        echo "\" min=\"";
        echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
        echo "\" max=\"";
        echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
        echo "\"> </div>
\t\t\t\t\t\t\t<div class=\"put-max put-min_max\"> <span class=\"name-curent\">";
        // line 16
        echo (isset($context["currencies"]) ? $context["currencies"] : null);
        echo "</span> <input type=\"text\" class=\"input_max form-control\" value=\"";
        echo (isset($context["maxPrice_new"]) ? $context["maxPrice_new"] : null);
        echo "\" min=\"";
        echo (isset($context["minPrice"]) ? $context["minPrice"] : null);
        echo "\" max=\"";
        echo (isset($context["maxPrice"]) ? $context["maxPrice"] : null);
        echo "\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_scroll\">
\t\t\t\t\t\t\t<div id=\"slider-range\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</li>
";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/extension/module/so_filter_shop_by/default_product_price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  38 => 15,  24 => 4,  19 => 1,);
    }
}
/* <li class="so-filter-options" data-option="Price">*/
/* 	<div class="so-filter-heading">*/
/* 		<div class="so-filter-heading-text">*/
/* 			<span>{{ obj_lang.get('text_price') }}</span>*/
/* 		</div>*/
/* 		<i class="fa fa-chevron-down"></i>*/
/* 	</div>*/
/* 	<div class="so-filter-content-opts">*/
/* 		<div class="so-filter-content-opts-container">*/
/* 			<div class="so-filter-content-wrapper so-filter-iscroll">*/
/* 				<div class="so-filter-options">*/
/* 					<div class="so-filter-option so-filter-price">*/
/* 						<div class="content_min_max">*/
/* 							<div class="put-min put-min_max">*/
/* 							<span class="name-curent">{{ currencies }}</span> <input type="text" class="input_min form-control" value="{{ minPrice_new }}" min="{{ minPrice }}" max="{{ maxPrice }}"> </div>*/
/* 							<div class="put-max put-min_max"> <span class="name-curent">{{ currencies }}</span> <input type="text" class="input_max form-control" value="{{ maxPrice_new }}" min="{{ minPrice }}" max="{{ maxPrice }}"></div>*/
/* 						</div>*/
/* 						<div class="content_scroll">*/
/* 							<div id="slider-range"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* </li>*/
/* */
