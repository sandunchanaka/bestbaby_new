<?php

/* so-emarket/template/extension/module/so_categories/default_theme3.twig */
class __TwigTemplate_912dded4e98fd21b6e4a1eae97e5541e89601b5ce3af08fc112698ddd87a7583 extends Twig_Template
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
        echo "<div class=\"cat-wrap theme3 font-title\">
\t";
        // line 2
        $context["j"] = 0;
        // line 3
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 4
            echo "\t\t";
            $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
            // line 5
            echo "\t\t<div class=\"content-box\">
\t\t\t";
            // line 6
            if ((($this->getAttribute($context["items"], "image", array()) && ($this->getAttribute($context["items"], "image", array()) != "")) && ($this->getAttribute($context["items"], "product_image", array()) == 1))) {
                // line 7
                echo "\t\t\t\t<div class=\"image-cat\">
\t\t\t\t\t<a href=\"";
                // line 8
                echo $this->getAttribute($context["items"], "link", array());
                echo "\"
\t\t\t\t\t   title=\"";
                // line 9
                echo $this->getAttribute($context["items"], "title", array());
                echo "\" target=\"";
                echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                echo "\" >
\t\t\t\t\t\t<img  class=\"lazyload\"  data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                // line 10
                echo $this->getAttribute($context["items"], "image", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["items"], "title", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["items"], "title", array());
                echo "\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
            }
            // line 14
            echo "\t\t\t";
            if (((isset($context["cat_title_display"]) ? $context["cat_title_display"] : null) || (isset($context["cat_sub_title_display"]) ? $context["cat_sub_title_display"] : null))) {
                // line 15
                echo "\t\t\t<div class=\"cat-content\">
\t\t\t";
                // line 16
                if ((isset($context["cat_title_display"]) ? $context["cat_title_display"] : null)) {
                    // line 17
                    echo "\t\t\t\t<div class=\"cat-title\">
\t\t\t\t\t<a href=\"";
                    // line 18
                    echo $this->getAttribute($context["items"], "link", array());
                    echo "\"
\t\t\t\t\t   title=\"";
                    // line 19
                    echo $this->getAttribute($context["items"], "title", array());
                    echo " \" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\">
\t\t\t\t\t\t";
                    // line 20
                    echo $this->getAttribute($context["items"], "title_maxlength", array());
                    echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
                }
                // line 24
                echo "
\t\t\t";
                // line 25
                if ((isset($context["cat_sub_title_display"]) ? $context["cat_sub_title_display"] : null)) {
                    // line 26
                    echo "\t\t\t\t<div class=\"child-cat\">
\t\t\t\t\t";
                    // line 27
                    if ( !twig_test_empty($this->getAttribute($context["items"], "child_cat", array()))) {
                        // line 28
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["items"], "child_cat", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 29
                            echo "\t\t\t\t\t\t\t<div class=\"arrow\"></div>
\t\t\t\t\t\t\t<div class=\"child-cat-title\">
\t\t\t\t\t\t\t\t<a href=\"";
                            // line 31
                            echo $this->getAttribute($context["item"], "link", array());
                            echo "\" target=\"";
                            echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t";
                            // line 32
                            if (((twig_length_filter($this->env, $this->getAttribute($context["item"], "title", array())) > (isset($context["cat_sub_title_maxcharacs"]) ? $context["cat_sub_title_maxcharacs"] : null)) && ((isset($context["cat_sub_title_maxcharacs"]) ? $context["cat_sub_title_maxcharacs"] : null) != 0))) {
                                // line 33
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                echo twig_slice($this->env, strip_tags($this->getAttribute($context["item"], "title", array())), 0, (isset($context["cat_sub_title_maxcharacs"]) ? $context["cat_sub_title_maxcharacs"] : null));
                                echo "
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 34
                                echo "\t
\t\t\t\t\t\t\t\t\t\t";
                                // line 35
                                echo $this->getAttribute($context["item"], "title", array());
                                echo "
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 37
                            echo "
\t\t\t\t\t\t\t\t\t";
                            // line 38
                            if ((isset($context["cat_all_product"]) ? $context["cat_all_product"] : null)) {
                                // line 39
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                echo (("(" . $this->getAttribute($context["item"], "all_product", array())) . "), ");
                                echo "
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 41
                            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "\t\t\t\t\t";
                    } else {
                        // line 45
                        echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
                        // line 46
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noitem"), "method");
                        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t";
                    }
                    // line 49
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 51
                echo "\t\t\t</div>
\t\t\t";
            }
            // line 53
            echo "\t\t</div>
\t\t";
            // line 54
            $context["clear"] = "clr1";
            // line 55
            echo "\t\t";
            if ((((isset($context["j"]) ? $context["j"] : null) % 2) == 0)) {
                echo " ";
                $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr2");
                echo " ";
            }
            // line 56
            echo "\t\t";
            if ((((isset($context["j"]) ? $context["j"] : null) % 3) == 0)) {
                echo " ";
                $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr3");
                echo " ";
            }
            // line 57
            echo "\t\t";
            if ((((isset($context["j"]) ? $context["j"] : null) % 4) == 0)) {
                echo " ";
                $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr4");
                echo " ";
            }
            // line 58
            echo "\t\t";
            if ((((isset($context["j"]) ? $context["j"] : null) % 5) == 0)) {
                echo " ";
                $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr5");
                echo " ";
            }
            // line 59
            echo "\t\t";
            if ((((isset($context["j"]) ? $context["j"] : null) % 6) == 0)) {
                echo " ";
                $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr6");
                echo " ";
            }
            // line 60
            echo "\t\t<!-- <div class=\"";
            echo (isset($context["clear"]) ? $context["clear"] : null);
            echo "\"></div> -->
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</div>


\t
";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/extension/module/so_categories/default_theme3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 62,  209 => 60,  202 => 59,  195 => 58,  188 => 57,  181 => 56,  174 => 55,  172 => 54,  169 => 53,  165 => 51,  161 => 49,  155 => 46,  152 => 45,  149 => 44,  141 => 41,  135 => 39,  133 => 38,  130 => 37,  125 => 35,  122 => 34,  116 => 33,  114 => 32,  108 => 31,  104 => 29,  99 => 28,  97 => 27,  94 => 26,  92 => 25,  89 => 24,  82 => 20,  76 => 19,  72 => 18,  69 => 17,  67 => 16,  64 => 15,  61 => 14,  50 => 10,  44 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="cat-wrap theme3 font-title">*/
/* 	{% set j = 0 %}*/
/* 	{% for items in list %}*/
/* 		{% set j = j + 1 %}*/
/* 		<div class="content-box">*/
/* 			{% if items.image and items.image != '' and items.product_image == 1 %}*/
/* 				<div class="image-cat">*/
/* 					<a href="{{ items.link }}"*/
/* 					   title="{{ items.title }}" target="{{ item_link_target }}" >*/
/* 						<img  class="lazyload"  data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ items.image }}" title="{{ items.title }}" alt="{{ items.title }}" />*/
/* 					</a>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if cat_title_display or cat_sub_title_display %}*/
/* 			<div class="cat-content">*/
/* 			{% if cat_title_display %}*/
/* 				<div class="cat-title">*/
/* 					<a href="{{ items.link }}"*/
/* 					   title="{{ items.title }} " target="{{ item_link_target }}">*/
/* 						{{ items.title_maxlength }}*/
/* 					</a>*/
/* 				</div>*/
/* 			{% endif %}*/
/* */
/* 			{% if cat_sub_title_display %}*/
/* 				<div class="child-cat">*/
/* 					{% if items.child_cat is not empty %}*/
/* 						{% for item in items.child_cat %}*/
/* 							<div class="arrow"></div>*/
/* 							<div class="child-cat-title">*/
/* 								<a href="{{ item.link }}" target="{{ item_link_target }}">*/
/* 									{% if item.title|length > cat_sub_title_maxcharacs and cat_sub_title_maxcharacs != 0 %}*/
/* 										{{ item.title|striptags|slice(0, cat_sub_title_maxcharacs) }}*/
/* 									{% else %}	*/
/* 										{{ item.title }}*/
/* 									{% endif %}*/
/* */
/* 									{% if cat_all_product %}*/
/* 										{{ '(' ~ item.all_product ~ '), ' }}*/
/* 									{% endif %}*/
/* 								</a>*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 					{% else %}*/
/* 						<p>*/
/* 							{{ objlang.get('text_noitem') }}*/
/* 						</p>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		{% set clear = 'clr1' %}*/
/* 		{% if j % 2 == 0 %} {% set clear = clear~' clr2' %} {% endif %}*/
/* 		{% if j % 3 == 0 %} {% set clear = clear~' clr3' %} {% endif %}*/
/* 		{% if j % 4 == 0 %} {% set clear = clear~' clr4' %} {% endif %}*/
/* 		{% if j % 5 == 0 %} {% set clear = clear~' clr5' %} {% endif %}*/
/* 		{% if j % 6 == 0 %} {% set clear = clear~' clr6' %} {% endif %}*/
/* 		<!-- <div class="{{ clear }}"></div> -->*/
/* 	{% endfor %}*/
/* </div>*/
/* */
/* */
/* 	*/
/* */
