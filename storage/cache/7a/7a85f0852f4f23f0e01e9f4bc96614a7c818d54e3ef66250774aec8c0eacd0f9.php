<?php

/* so-emarket/template/extension/module/so_listing_tabs/category/default_items.twig */
class __TwigTemplate_658b38e46c83ed4ddf2efbfca4bb63147d8f1024535aea9dcade8860c2b83108 extends Twig_Template
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
        if (((isset($context["type_show"]) ? $context["type_show"] : null) == "slider")) {
            // line 2
            echo "\t\t<div class=\"ltabs-items-inner owl2-carousel  ltabs-slider \">
";
        } else {
            // line 4
            echo "\t\t<div class=\"ltabs-items-inner ";
            echo ((((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) ? ((((isset($context["class_ltabs"]) ? $context["class_ltabs"] : null) . " ") . (isset($context["effect"]) ? $context["effect"] : null))) : (" "));
            echo "\">
";
        }
        // line 6
        if ( !twig_test_empty((isset($context["child_items"]) ? $context["child_items"] : null))) {
            // line 7
            echo "\t";
            $context["i"] = 0;
            // line 8
            echo "\t";
            $context["k"] = ((array_key_exists("rl_loaded", $context)) ? ((isset($context["rl_loaded"]) ? $context["rl_loaded"] : null)) : (0));
            // line 9
            echo "\t";
            $context["count"] = twig_length_filter($this->env, (isset($context["child_items"]) ? $context["child_items"] : null));
            // line 10
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["child_items"]) ? $context["child_items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 12
                echo "\t\t\t";
                $context["k"] = ((isset($context["k"]) ? $context["k"] : null) + 1);
                // line 13
                echo "\t\t\t
\t\t\t";
                // line 14
                if ((((isset($context["type_show"]) ? $context["type_show"] : null) == "slider") && ((((isset($context["i"]) ? $context["i"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 1) || ((isset($context["nb_rows"]) ? $context["nb_rows"] : null) == 1)))) {
                    // line 15
                    echo "\t\t\t\t<div class=\"ltabs-item \">
\t\t\t";
                }
                // line 17
                echo "\t\t\t";
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 18
                    echo "\t\t\t\t<div class=\"ltabs-item new-ltabs-item\" >
\t\t\t";
                }
                // line 19
                echo "\t\t\t
\t\t\t<div class=\"item-inner product-layout transition product-grid\">

\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t<div class=\"left-block col-sm-5\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 24
                if ((isset($context["product_image"]) ? $context["product_image"] : null)) {
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product-image-container ";
                    // line 25
                    if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                        echo " ";
                        echo "second_img";
                        echo " ";
                    }
                    echo "\t\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 26
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name_maxlength", array());
                    echo "\"  >
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 28
                    if (((isset($context["product_image_num"]) ? $context["product_image_num"] : null) == 2)) {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" class=\"img-thumb1 lazyload\" alt=\"";
                        echo $this->getAttribute($context["product"], "name_maxlength", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 30
                        echo $this->getAttribute($context["product"], "thumb2", array());
                        echo "\" class=\"img-thumb2 lazyload\" alt=\"";
                        echo $this->getAttribute($context["product"], "name_maxlength", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name_maxlength", array());
                        echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t
\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 36
                echo "\t
\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 38
                if (($this->getAttribute($context["product"], "productNew", array()) && (isset($context["display_new"]) ? $context["display_new"] : null))) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_new"), "method");
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["product"], "special", array()) && (isset($context["display_sale"]) ? $context["display_sale"] : null))) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    echo " ";
                    echo $this->getAttribute($context["product"], "discount", array());
                    echo " </span>
\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"right-block  col-sm-7\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 50
                if (((((isset($context["display_title"]) ? $context["display_title"] : null) || (isset($context["display_description"]) ? $context["display_description"] : null)) || (isset($context["display_price"]) ? $context["display_price"] : null)) || (isset($context["display_rating"]) ? $context["display_rating"] : null))) {
                    // line 51
                    echo "\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t";
                    // line 52
                    if ((isset($context["display_title"]) ? $context["display_title"] : null)) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t<h4><a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" target=\"";
                        echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                        echo "\">";
                        echo $this->getAttribute($context["product"], "name_maxlength", array());
                        echo "</a></h4>
\t\t\t\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 56
                    if ((isset($context["display_rating"]) ? $context["display_rating"] : null)) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">

\t\t\t\t\t\t\t\t  \t";
                        // line 60
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t  \t\t";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                                // line 62
                                echo "\t\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t  \t\t";
                            } else {
                                // line 64
                                echo "\t\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t  \t\t";
                            }
                            // line 66
                            echo "\t\t\t\t\t\t\t\t  \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t  \t<a class=\"rating-num\"  href=\"";
                        // line 68
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\" rel=\"nofollow\" target=\"_blank\" >";
                        echo $this->getAttribute($context["product"], "reviews", array());
                        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 73
                    if (($this->getAttribute($context["product"], "price", array()) && (isset($context["display_price"]) ? $context["display_price"] : null))) {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t  \t";
                        // line 75
                        if (twig_test_empty($this->getAttribute($context["product"], "special", array()))) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t  \t\t 
 ";
                            // line 77
                            if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ($this->getAttribute($context["product"], "price_0", array()) <= 0))) {
                                echo " 
 ";
                                // line 78
                                if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "0"))) {
                                    echo " 
 <a data-fancybox data-type=\"ajax\" data-src=\"";
                                    // line 79
                                    echo (isset($context["base"]) ? $context["base"] : null);
                                    echo "index.php?route=extension/module/so_call_for_price&product_id=";
                                    echo $this->getAttribute($context["product"], "product_id", array());
                                    echo "\" href=\"javascript:;\" class=\"callforprice\" style=\"color: #ff0000; font-weight: bold;\"><i class=\"fa fa-phone\"></i> ";
                                    echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                                    echo "</a> 
 ";
                                }
                                // line 80
                                echo " 
 ";
                            } else {
                                // line 81
                                echo " 
 ";
                                // line 82
                                echo $this->getAttribute($context["product"], "price", array());
                                echo " 
 ";
                            }
                            // line 83
                            echo " 
 
\t\t\t\t\t\t\t\t  \t";
                        } else {
                            // line 86
                            echo "\t\t\t\t\t\t\t\t  \t\t<span class=\"price-new\">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span>
\t\t\t\t\t\t\t\t  \t\t<span class=\"price-old\">";
                            // line 87
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span>
\t\t\t\t\t\t\t\t  \t";
                        }
                        // line 89
                        echo "\t\t\t\t\t\t\t\t  \t";
                        if ($this->getAttribute($context["product"], "tax", array())) {
                            // line 90
                            echo "\t\t\t\t\t\t\t\t  \t\t<span class=\"price-tax hidden\">";
                            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_tax"), "method");
                            echo " ";
                            echo $this->getAttribute($context["product"], "tax", array());
                            echo "</span>
\t\t\t\t\t\t\t\t  \t";
                        }
                        // line 92
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 97
                    if ((isset($context["display_description"]) ? $context["display_description"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t";
                        // line 99
                        echo $this->getAttribute($context["product"], "description_maxlength", array());
                        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 102
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"item-available\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6 text-left\">";
                    // line 105
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_available"), "method");
                    echo " <b>";
                    echo $this->getAttribute($context["product"], "avail_number", array());
                    echo "</b> </span>
\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6 text-right\">";
                    // line 106
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_sold"), "method");
                    echo " <b>";
                    echo $this->getAttribute($context["product"], "sold_number", array());
                    echo "</b>  </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"available\">
\t\t\t\t\t\t\t\t\t<span class=\"color_width\" data-title=\"";
                    // line 109
                    echo $this->getAttribute($context["product"], "sold_width", array());
                    echo "%\" data-toggle='tooltip' style=\"width: ";
                    echo $this->getAttribute($context["product"], "sold_width", array());
                    echo "%\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 115
                echo "
\t\t\t\t\t\t";
                // line 116
                if ((((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null) || (isset($context["display_compare"]) ? $context["display_compare"] : null)) || (isset($context["display_add_to_cart"]) ? $context["display_add_to_cart"] : null))) {
                    echo " 
\t\t\t\t\t\t\t<div class=\"button-group so-quickview \">
\t\t\t\t\t\t\t\t ";
                    // line 118
                    if ((isset($context["display_add_to_cart"]) ? $context["display_add_to_cart"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 119
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo "\" onclick=\"cart.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo " ');\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 120
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_cart"), "method");
                        echo " </span>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 123
                    echo "\t\t\t\t\t\t\t\t";
                    if ((isset($context["display_wishlist"]) ? $context["display_wishlist"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 124
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "\" onclick=\"wishlist.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-heart\"></i><span>";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_wishlist"), "method");
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 125
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 126
                    if ((isset($context["display_compare"]) ? $context["display_compare"] : null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 127
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo " \" onclick=\"compare.add('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\"><i class=\"fa fa-random\"></i><span>";
                        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_compare"), "method");
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 128
                    echo " 

\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 130
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "' href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" target=\"";
                    echo (isset($context["item_link_target"]) ? $context["item_link_target"] : null);
                    echo "\" ></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 133
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 139
                if ((((isset($context["type_show"]) ? $context["type_show"] : null) == "slider") && ((((isset($context["i"]) ? $context["i"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0) || ((isset($context["i"]) ? $context["i"] : null) == (isset($context["count"]) ? $context["count"] : null))))) {
                    // line 140
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 142
                echo "\t\t\t
\t\t\t";
                // line 143
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 144
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 146
                echo "
\t\t\t";
                // line 147
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "loadmore")) {
                    // line 148
                    echo "\t\t\t\t";
                    $context["clear"] = "clr1";
                    // line 149
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 2) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr2");
                        echo " ";
                    }
                    // line 150
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 3) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr3");
                        echo " ";
                    }
                    // line 151
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 4) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr4");
                        echo " ";
                    }
                    // line 152
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 5) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr5");
                        echo " ";
                    }
                    // line 153
                    echo "\t\t\t\t";
                    if ((((isset($context["k"]) ? $context["k"] : null) % 6) == 0)) {
                        echo " ";
                        $context["clear"] = ((isset($context["clear"]) ? $context["clear"] : null) . " clr6");
                        echo " ";
                    }
                    // line 154
                    echo "\t\t\t\t<div class=\"";
                    echo (isset($context["clear"]) ? $context["clear"] : null);
                    echo "\"></div>
\t\t\t";
                }
                // line 156
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t";
        }
        // line 158
        echo "</div>

";
        // line 160
        if (((isset($context["type_show"]) ? $context["type_show"] : null) == "slider")) {
            // line 161
            echo "<script type=\"text/javascript\">
\tjQuery(document).ready(function(\$){
\t\tvar \$tag_id = \$('#";
            // line 163
            echo (isset($context["tag_id"]) ? $context["tag_id"] : null);
            echo "'), 
\t\tparent_active = \t\$('.items-category-";
            // line 164
            echo (isset($context["tab_id"]) ? $context["tab_id"] : null);
            echo "', \$tag_id),
\t\ttotal_product = parent_active.data('total'),
\t\ttab_active = \$('.ltabs-items-inner',parent_active),
\t\tnb_column0 = ";
            // line 167
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo ",
\t\tnb_column1 = ";
            // line 168
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo ",
\t\tnb_column2 = ";
            // line 169
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo ",
\t\tnb_column3 = ";
            // line 170
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo ",
\t\tnb_column4 = ";
            // line 171
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo ";
\t\ttab_active.owlCarousel2({
\t\t\trtl: ";
            // line 173
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
\t\t\tnav: ";
            // line 174
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ",
\t\t\tdots: true,\t
\t\t\tmargin: 0,
\t\t\tloop:  ";
            // line 177
            echo (isset($context["display_loop"]) ? $context["display_loop"] : null);
            echo ",
\t\t\tautoplay: ";
            // line 178
            echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
            echo ",
\t\t\tautoplayHoverPause: ";
            // line 179
            echo (isset($context["pausehover"]) ? $context["pausehover"] : null);
            echo ",
\t\t\tautoplayTimeout: ";
            // line 180
            echo (isset($context["autoplayTimeout"]) ? $context["autoplayTimeout"] : null);
            echo ",
\t\t\tautoplaySpeed: ";
            // line 181
            echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
            echo ",
\t\t\tmouseDrag: ";
            // line 182
            echo (isset($context["mousedrag"]) ? $context["mousedrag"] : null);
            echo ",
\t\t\ttouchDrag: ";
            // line 183
            echo (isset($context["touchdrag"]) ? $context["touchdrag"] : null);
            echo ",
\t\t\tnavRewind: true,
\t\t\tnavText: [ '', '' ],
\t\t\tresponsive: {
\t\t\t\t0: {
\t\t\t\t\titems: nb_column4,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 189
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t480: {
\t\t\t\t\titems: nb_column3,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 193
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t768: {
\t\t\t\t\titems: nb_column2,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 197
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t992: {
\t\t\t\t\titems: nb_column1,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 201
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t1200: {
\t\t\t\t\titems: nb_column0,
\t\t\t\t\t
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 206
            echo (isset($context["display_nav"]) ? $context["display_nav"] : null);
            echo ") ? true: false),
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "so-emarket/template/extension/module/so_listing_tabs/category/default_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  601 => 206,  593 => 201,  586 => 197,  579 => 193,  572 => 189,  563 => 183,  559 => 182,  555 => 181,  551 => 180,  547 => 179,  543 => 178,  539 => 177,  533 => 174,  529 => 173,  524 => 171,  520 => 170,  516 => 169,  512 => 168,  508 => 167,  502 => 164,  498 => 163,  494 => 161,  492 => 160,  488 => 158,  485 => 157,  479 => 156,  473 => 154,  466 => 153,  459 => 152,  452 => 151,  445 => 150,  438 => 149,  435 => 148,  433 => 147,  430 => 146,  426 => 144,  424 => 143,  421 => 142,  417 => 140,  415 => 139,  407 => 133,  396 => 130,  392 => 128,  383 => 127,  379 => 126,  376 => 125,  367 => 124,  362 => 123,  356 => 120,  350 => 119,  346 => 118,  341 => 116,  338 => 115,  327 => 109,  319 => 106,  313 => 105,  308 => 102,  302 => 99,  297 => 97,  291 => 93,  287 => 92,  279 => 90,  276 => 89,  271 => 87,  266 => 86,  261 => 83,  256 => 82,  253 => 81,  249 => 80,  240 => 79,  236 => 78,  232 => 77,  229 => 76,  227 => 75,  224 => 74,  222 => 73,  218 => 71,  210 => 68,  207 => 67,  201 => 66,  197 => 64,  193 => 62,  190 => 61,  186 => 60,  181 => 57,  179 => 56,  176 => 55,  164 => 53,  162 => 52,  159 => 51,  157 => 50,  149 => 44,  142 => 42,  139 => 41,  133 => 39,  131 => 38,  127 => 36,  121 => 33,  113 => 32,  106 => 30,  99 => 29,  97 => 28,  88 => 26,  80 => 25,  76 => 24,  69 => 19,  65 => 18,  62 => 17,  58 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if type_show == 'slider' %}*/
/* 		<div class="ltabs-items-inner owl2-carousel  ltabs-slider ">*/
/* {% else %}*/
/* 		<div class="ltabs-items-inner {{ type_show == 'loadmore' ? class_ltabs ~ ' '~ effect : ' ' }}">*/
/* {% endif %}*/
/* {% if child_items is not empty %}*/
/* 	{% set i = 0 %}*/
/* 	{% set k = rl_loaded is defined ? rl_loaded : 0 %}*/
/* 	{% set count = child_items|length %}*/
/* 		{% for product in child_items %}*/
/* 			{% set i = i + 1 %}*/
/* 			{% set k = k + 1 %}*/
/* 			*/
/* 			{% if type_show == 'slider' and (i % nb_rows == 1 or nb_rows == 1) %}*/
/* 				<div class="ltabs-item ">*/
/* 			{% endif %}*/
/* 			{% if type_show == 'loadmore' %}*/
/* 				<div class="ltabs-item new-ltabs-item" >*/
/* 			{% endif %}			*/
/* 			<div class="item-inner product-layout transition product-grid">*/
/* */
/* 				<div class="product-item-container">*/
/* 					<div class="left-block col-sm-5">										*/
/* 						{% if product_image %}								*/
/* 							<div class="product-image-container {% if product_image_num  == 2 %} {{ 'second_img' }} {% endif %}	">*/
/* 								<a href="{{ product.href }}" target="{{ item_link_target }}" title="{{ product.name_maxlength }}"  >*/
/* 									*/
/* 									{% if product_image_num ==2 %}*/
/* 										<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" class="img-thumb1 lazyload" alt="{{ product.name_maxlength }}">*/
/* 										<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb2 }}" class="img-thumb2 lazyload" alt="{{ product.name_maxlength }}">*/
/* 									{% else %}*/
/* 										<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name_maxlength }}" class="lazyload">*/
/* 									{% endif %}	*/
/* 								</a>						*/
/* 							</div>*/
/* 						{% endif %}	*/
/* 						<div class="box-label">*/
/* 							{% if product.productNew and display_new %}*/
/* 								<span class="label-product label-new">{{ objlang.get('text_new') }}</span>*/
/* 							{% endif %}*/
/* 							{% if product.special and display_sale %}*/
/* 								<span class="label-product label-sale">{# {{ objlang.get('text_sale') }} #} {{ product.discount }} </span>*/
/* 							{% endif %}*/
/* 						</div>*/
/* */
/* 					*/
/* 					</div>*/
/* 					<div class="right-block  col-sm-7">*/
/* 						*/
/* 						{% if display_title or display_description or display_price or display_rating %}*/
/* 						<div class="caption">*/
/* 							{% if display_title %}*/
/* 								<h4><a href="{{ product.href }}" title="{{ product.name }}" target="{{ item_link_target }}">{{ product.name_maxlength }}</a></h4>*/
/* 							{% endif %}*/
/* 							*/
/* 							{% if display_rating %}*/
/* 								<div class="rating">*/
/* 									<div class="rating-box">*/
/* */
/* 								  	{% for j in 1..5 %}*/
/* 								  		{% if product.rating < j %}*/
/* 								  			<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								  		{% else %}*/
/* 								  			<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 								  		{% endif %}*/
/* 								  	{% endfor %}*/
/* 								  	</div>*/
/* 								  	<a class="rating-num"  href="{{ product.href }}" rel="nofollow" target="_blank" >{{product.reviews}}</a>*/
/* 								</div>*/
/* 							{% endif %}*/
/* */
/* 							*/
/* 							{% if product.price and display_price %}*/
/* 								<div class="price">*/
/* 								  	{% if product.special is empty %}*/
/* 								  		 */
/*  {% if (cfp_setting.module_so_call_for_price_status and product.price_0 <= 0) %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '0' %} */
/*  <a data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}" href="javascript:;" class="callforprice" style="color: #ff0000; font-weight: bold;"><i class="fa fa-phone"></i> {{ text_price_0 }}</a> */
/*  {% endif %} */
/*  {% else %} */
/*  {{ product.price }} */
/*  {% endif %} */
/*  */
/* 								  	{% else %}*/
/* 								  		<span class="price-new">{{ product.special }}</span>*/
/* 								  		<span class="price-old">{{ product.price }}</span>*/
/* 								  	{% endif %}*/
/* 								  	{% if product.tax %}*/
/* 								  		<span class="price-tax hidden">{{ objlang.get('text_tax') }} {{ product.tax }}</span>*/
/* 								  	{% endif %}*/
/* 								</div>*/
/* 							{% endif %}			*/
/* 							*/
/* 					*/
/* 						*/
/* 							{% if display_description %} */
/* 								<div class="item-des">*/
/* 									{{ product.description_maxlength }} */
/* 								</div>*/
/* 							{% endif %}*/
/* 							*/
/* 							<div class="item-available">*/
/* 								<div class="row">*/
/* 									<span class="col-sm-6 text-left">{{ objlang.get('text_available') }} <b>{{product.avail_number}}</b> </span>*/
/* 									<span class="col-sm-6 text-right">{{ objlang.get('text_sold') }} <b>{{product.sold_number}}</b>  </span>*/
/* 								</div>*/
/* 								<div class="available">*/
/* 									<span class="color_width" data-title="{{product.sold_width}}%" data-toggle='tooltip' style="width: {{product.sold_width}}%"></span>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if display_wishlist  or  display_compare or display_add_to_cart %} */
/* 							<div class="button-group so-quickview ">*/
/* 								 {% if display_add_to_cart  %} */
/* 									<button type="button" class="addToCart btn-button" title="{{ objlang.get('button_cart') }}" onclick="cart.add('{{ product.product_id }} ');">*/
/* 										<span>{{ objlang.get('button_cart') }} </span>						*/
/* 									</button>*/
/* 								{% endif %}*/
/* 								{% if display_wishlist  %} */
/* 								<button type="button" class="wishlist btn-button" title="{{ objlang.get('button_wishlist') }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i><span>{{ objlang.get('button_wishlist') }}</span></button>*/
/* 								{% endif %} */
/* 								{% if display_compare %} */
/* 								<button type="button" class="compare btn-button" title="{{ objlang.get('button_compare') }} " onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-random"></i><span>{{ objlang.get('button_compare') }}</span></button>*/
/* 								{% endif %} */
/* */
/* 								<a class="hidden" data-product='{{ product.product_id }}' href="{{ product.href }}" target="{{ item_link_target }}" ></a>*/
/* 								*/
/* 							</div>*/
/* 						{% endif %} */
/* 						*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 			{% if type_show == 'slider' and (i % nb_rows == 0 or i == count) %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* 			*/
/* 			{% if type_show == 'loadmore' %}*/
/* 			</div>*/
/* 			{% endif %}*/
/* */
/* 			{% if type_show == 'loadmore' %}*/
/* 				{% set clear = 'clr1' %}*/
/* 				{% if k % 2 == 0 %} {% set clear = clear ~' clr2' %} {% endif %}*/
/* 				{% if k % 3 == 0 %} {% set clear = clear ~' clr3' %} {% endif %}*/
/* 				{% if k % 4 == 0 %} {% set clear = clear ~' clr4' %} {% endif %}*/
/* 				{% if k % 5 == 0 %} {% set clear = clear ~' clr5' %} {% endif %}*/
/* 				{% if k % 6 == 0 %} {% set clear = clear ~' clr6' %} {% endif %}*/
/* 				<div class="{{ clear }}"></div>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* </div>*/
/* */
/* {% if type_show == 'slider' %}*/
/* <script type="text/javascript">*/
/* 	jQuery(document).ready(function($){*/
/* 		var $tag_id = $('#{{ tag_id }}'), */
/* 		parent_active = 	$('.items-category-{{ tab_id }}', $tag_id),*/
/* 		total_product = parent_active.data('total'),*/
/* 		tab_active = $('.ltabs-items-inner',parent_active),*/
/* 		nb_column0 = {{ nb_column0 }},*/
/* 		nb_column1 = {{ nb_column1 }},*/
/* 		nb_column2 = {{ nb_column2 }},*/
/* 		nb_column3 = {{ nb_column3 }},*/
/* 		nb_column4 = {{ nb_column4 }};*/
/* 		tab_active.owlCarousel2({*/
/* 			rtl: {{ direction }},*/
/* 			nav: {{ display_nav }},*/
/* 			dots: true,	*/
/* 			margin: 0,*/
/* 			loop:  {{ display_loop }},*/
/* 			autoplay: {{ autoplay }},*/
/* 			autoplayHoverPause: {{ pausehover }},*/
/* 			autoplayTimeout: {{ autoplayTimeout }},*/
/* 			autoplaySpeed: {{ autoplaySpeed }},*/
/* 			mouseDrag: {{ mousedrag }},*/
/* 			touchDrag: {{ touchdrag }},*/
/* 			navRewind: true,*/
/* 			navText: [ '', '' ],*/
/* 			responsive: {*/
/* 				0: {*/
/* 					items: nb_column4,*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				},*/
/* 				480: {*/
/* 					items: nb_column3,*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				},*/
/* 				768: {*/
/* 					items: nb_column2,*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				},*/
/* 				992: {*/
/* 					items: nb_column1,*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				},*/
/* 				1200: {*/
/* 					items: nb_column0,*/
/* 					*/
/* 					nav: total_product <= nb_column0 ? false : (({{display_nav}}) ? true: false),*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* </script>*/
/* {% endif %}*/
