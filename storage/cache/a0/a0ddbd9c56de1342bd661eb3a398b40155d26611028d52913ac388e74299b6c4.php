<?php

/* so-emarket/template/product/compare.twig */
class __TwigTemplate_fed360bc35994329aa962d6e5500955a7ab8ea9f60febaf44a397cf1a8de4107 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 23
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 24
            echo "      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 27
            echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
            echo "\"><strong>";
            echo (isset($context["text_product"]) ? $context["text_product"] : null);
            echo "</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
            // line 32
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</td>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "            <td><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</strong></a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo " </tr>
          <tr>
            <td>";
            // line 37
            echo (isset($context["text_image"]) ? $context["text_image"] : null);
            echo "</td>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                echo "            <td class=\"text-center\">";
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " </tr>
          <tr>
            <td>";
            // line 42
            echo (isset($context["text_price"]) ? $context["text_price"] : null);
            echo "</td>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                echo "            <td>";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 45
                    echo "              <p class=\"price\">

              ";
                    // line 47
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 48
                        echo "                
                 <span class=\"price-new\"> 
 ";
                        // line 50
                        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ($this->getAttribute($context["product"], "price_0", array()) <= 0))) {
                            echo " 
 ";
                            // line 51
                            if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "0"))) {
                                echo " 
 <a data-fancybox data-type=\"ajax\" data-src=\"";
                                // line 52
                                echo (isset($context["base"]) ? $context["base"] : null);
                                echo "index.php?route=extension/module/so_call_for_price&product_id=";
                                echo $this->getAttribute($context["product"], "product_id", array());
                                echo "\" href=\"javascript:;\" class=\"callforprice\" style=\"color: #ff0000; font-weight: bold;\"><i class=\"fa fa-phone\"></i> ";
                                echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                                echo "</a> 
 ";
                            }
                            // line 53
                            echo " 
 ";
                        } else {
                            // line 54
                            echo " 
 ";
                            // line 55
                            echo $this->getAttribute($context["product"], "price", array());
                            echo " 
 ";
                        }
                        // line 56
                        echo " 
 </span>
              ";
                    } else {
                        // line 58
                        echo " 
                 <span class=\"price-new\">";
                        // line 59
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>  
              ";
                    }
                    // line 61
                    echo "               </p>
              ";
                }
                // line 62
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo " </tr>
          <tr>
            <td>";
            // line 65
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</td>
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 67
                echo "            <td>";
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo " </tr>
          <tr>
            <td>";
            // line 70
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</td>
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 72
                echo "            <td>";
                echo $this->getAttribute($context["product"], "manufacturer", array());
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo " </tr>
          <tr>
            <td>";
            // line 75
            echo (isset($context["text_availability"]) ? $context["text_availability"] : null);
            echo "</td>
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 77
                echo "            <td>";
                echo $this->getAttribute($context["product"], "availability", array());
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo " </tr>
        ";
            // line 79
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 80
                echo "        <tr>
          <td>";
                // line 81
                echo (isset($context["text_rating"]) ? $context["text_rating"] : null);
                echo "</td>
          ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 83
                    echo "          <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 84
                        echo "            ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 85
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br />
            ";
                    // line 86
                    echo $this->getAttribute($context["product"], "reviews", array());
                    echo "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo " </tr>
        ";
            }
            // line 89
            echo "        <tr>
          <td>";
            // line 90
            echo (isset($context["text_summary"]) ? $context["text_summary"] : null);
            echo "</td>
          ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 92
                echo "          <td class=\"description\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo " </tr>
        <tr>
          <td>";
            // line 95
            echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
            echo "</td>
          ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 97
                echo "          <td>";
                echo $this->getAttribute($context["product"], "weight", array());
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo " </tr>
        <tr>
          <td>";
            // line 100
            echo (isset($context["text_dimension"]) ? $context["text_dimension"] : null);
            echo "</td>
          ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "          <td>";
                echo $this->getAttribute($context["product"], "length", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "width", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "height", array());
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo " </tr>
          </tbody>
        
        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 107
                echo "        <thead>
          <tr>
            <td colspan=\"";
                // line 109
                echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
                echo "\"><strong>";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
          </tr>
        </thead>
        ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 113
                    echo "        <tbody>
          <tr>
            <td>";
                    // line 115
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
            ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 117
                        echo "            ";
                        if ($this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array")) {
                            // line 118
                            echo "            <td> ";
                            echo $this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array");
                            echo "</td>
            ";
                        } else {
                            // line 120
                            echo "            <td></td>
            ";
                        }
                        // line 122
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        <tr>
          <td></td>
          ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 130
                echo "          <td> 
 ";
                // line 131
                if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_status", array()) && ($this->getAttribute($context["product"], "price_0", array()) <= 0))) {
                    echo " 
 ";
                    // line 132
                    if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_hide_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_hide_cart", array()) == "0"))) {
                        echo " 
 ";
                        // line 133
                        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "1"))) {
                            echo " 
 <input type=\"button\" value=\"";
                            // line 134
                            echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                            echo "\" data-fancybox data-type=\"ajax\" data-src=\"";
                            echo (isset($context["base"]) ? $context["base"] : null);
                            echo "index.php?route=extension/module/so_call_for_price&product_id=";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "\" class=\"btn btn-primary btn-block\" /> 
 ";
                        } else {
                            // line 135
                            echo " 
 <input type=\"button\" value=\"";
                            // line 136
                            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                            echo "\" class=\"btn btn-primary btn-block\" style=\"cursor: default; background: #eee; color: #ccc; border: 1px solid #eee; text-shadow: none; box-shadow: none;\" /> 
 ";
                        }
                        // line 137
                        echo " 
 ";
                    } else {
                        // line 138
                        echo " 
 ";
                        // line 139
                        if (($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array(), "any", true, true) && ($this->getAttribute((isset($context["cfp_setting"]) ? $context["cfp_setting"] : null), "module_so_call_for_price_replace_cart", array()) == "1"))) {
                            echo " 
 <input type=\"button\" value=\"";
                            // line 140
                            echo (isset($context["text_price_0"]) ? $context["text_price_0"] : null);
                            echo "\" data-fancybox data-type=\"ajax\" data-src=\"";
                            echo (isset($context["base"]) ? $context["base"] : null);
                            echo "index.php?route=extension/module/so_call_for_price&product_id=";
                            echo $this->getAttribute($context["product"], "product_id", array());
                            echo "\" class=\"btn btn-primary btn-block\" /> 
 ";
                        }
                        // line 141
                        echo " 
 ";
                    }
                    // line 142
                    echo " 
 ";
                } else {
                    // line 143
                    echo " 
 <input type=\"button\" value=\"";
                    // line 144
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\" class=\"btn btn-primary btn-block\" onclick=\"cart.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\" /> 
 ";
                }
                // line 145
                echo " 
 
            <a href=\"";
                // line 147
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" class=\"btn btn-danger btn-block\">";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "</a></td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo " </tr>
      </table>
      ";
        } else {
            // line 151
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 153
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-default\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 156
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 157
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 159
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 159,  599 => 157,  594 => 156,  586 => 153,  580 => 151,  575 => 148,  565 => 147,  561 => 145,  552 => 144,  549 => 143,  545 => 142,  541 => 141,  532 => 140,  528 => 139,  525 => 138,  521 => 137,  516 => 136,  513 => 135,  504 => 134,  500 => 133,  496 => 132,  492 => 131,  489 => 130,  485 => 129,  481 => 127,  475 => 126,  467 => 123,  461 => 122,  457 => 120,  451 => 118,  448 => 117,  444 => 116,  440 => 115,  436 => 113,  432 => 112,  424 => 109,  420 => 107,  416 => 106,  411 => 103,  398 => 102,  394 => 101,  390 => 100,  386 => 98,  377 => 97,  373 => 96,  369 => 95,  365 => 93,  356 => 92,  352 => 91,  348 => 90,  345 => 89,  341 => 87,  333 => 86,  325 => 85,  318 => 84,  313 => 83,  309 => 82,  305 => 81,  302 => 80,  300 => 79,  297 => 78,  288 => 77,  284 => 76,  280 => 75,  276 => 73,  267 => 72,  263 => 71,  259 => 70,  255 => 68,  246 => 67,  242 => 66,  238 => 65,  234 => 63,  227 => 62,  223 => 61,  216 => 59,  213 => 58,  208 => 56,  203 => 55,  200 => 54,  196 => 53,  187 => 52,  183 => 51,  179 => 50,  175 => 48,  173 => 47,  169 => 45,  166 => 44,  162 => 43,  158 => 42,  154 => 40,  137 => 39,  133 => 38,  129 => 37,  125 => 35,  114 => 34,  110 => 33,  106 => 32,  96 => 27,  91 => 24,  89 => 23,  85 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       {% if products %}*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <td colspan="{{ products|length + 1 }}"><strong>{{ text_product }}</strong></td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td>{{ text_name }}</td>*/
/*             {% for product in products %}*/
/*             <td><a href="{{ product.href }}"><strong>{{ product.name }}</strong></a></td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_image }}</td>*/
/*             {% for product in products %}*/
/*             <td class="text-center">{% if product.thumb %} <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /> {% endif %}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_price }}</td>*/
/*             {% for product in products %}*/
/*             <td>{% if product.price %}*/
/*               <p class="price">*/
/* */
/*               {% if not product.special %}*/
/*                 */
/*                  <span class="price-new"> */
/*  {% if (cfp_setting.module_so_call_for_price_status and product.price_0 <= 0) %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '0' %} */
/*  <a data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}" href="javascript:;" class="callforprice" style="color: #ff0000; font-weight: bold;"><i class="fa fa-phone"></i> {{ text_price_0 }}</a> */
/*  {% endif %} */
/*  {% else %} */
/*  {{ product.price }} */
/*  {% endif %} */
/*  </span>*/
/*               {% else %} */
/*                  <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>  */
/*               {% endif %}*/
/*                </p>*/
/*               {% endif %}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_model }}</td>*/
/*             {% for product in products %}*/
/*             <td>{{ product.model }}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_manufacturer }}</td>*/
/*             {% for product in products %}*/
/*             <td>{{ product.manufacturer }}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_availability }}</td>*/
/*             {% for product in products %}*/
/*             <td>{{ product.availability }}</td>*/
/*             {% endfor %} </tr>*/
/*         {% if review_status %}*/
/*         <tr>*/
/*           <td>{{ text_rating }}</td>*/
/*           {% for product in products %}*/
/*           <td class="rating"> {% for i in 1..5 %}*/
/*             {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*             {% endfor %} <br />*/
/*             {{ product.reviews }}</td>*/
/*           {% endfor %} </tr>*/
/*         {% endif %}*/
/*         <tr>*/
/*           <td>{{ text_summary }}</td>*/
/*           {% for product in products %}*/
/*           <td class="description">{{ product.description }}</td>*/
/*           {% endfor %} </tr>*/
/*         <tr>*/
/*           <td>{{ text_weight }}</td>*/
/*           {% for product in products %}*/
/*           <td>{{ product.weight }}</td>*/
/*           {% endfor %} </tr>*/
/*         <tr>*/
/*           <td>{{ text_dimension }}</td>*/
/*           {% for product in products %}*/
/*           <td>{{ product.length }} x {{ product.width }} x {{ product.height }}</td>*/
/*           {% endfor %} </tr>*/
/*           </tbody>*/
/*         */
/*         {% for attribute_group in attribute_groups %}*/
/*         <thead>*/
/*           <tr>*/
/*             <td colspan="{{ products|length + 1 }}"><strong>{{ attribute_group.name }}</strong></td>*/
/*           </tr>*/
/*         </thead>*/
/*         {% for key, attribute in attribute_group.attribute %}*/
/*         <tbody>*/
/*           <tr>*/
/*             <td>{{ attribute.name }}</td>*/
/*             {% for product in products %}*/
/*             {% if product.attribute[key] %}*/
/*             <td> {{ product.attribute[key] }}</td>*/
/*             {% else %}*/
/*             <td></td>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </tr>*/
/*         </tbody>*/
/*         {% endfor %}*/
/*         {% endfor %}*/
/*         <tr>*/
/*           <td></td>*/
/*           {% for product in products %}*/
/*           <td> */
/*  {% if (cfp_setting.module_so_call_for_price_status and product.price_0 <= 0) %} */
/*  {% if cfp_setting.module_so_call_for_price_hide_cart is defined and cfp_setting.module_so_call_for_price_hide_cart == '0' %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '1' %} */
/*  <input type="button" value="{{ text_price_0 }}" data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}" class="btn btn-primary btn-block" /> */
/*  {% else %} */
/*  <input type="button" value="{{ button_cart }}" class="btn btn-primary btn-block" style="cursor: default; background: #eee; color: #ccc; border: 1px solid #eee; text-shadow: none; box-shadow: none;" /> */
/*  {% endif %} */
/*  {% else %} */
/*  {% if cfp_setting.module_so_call_for_price_replace_cart is defined and cfp_setting.module_so_call_for_price_replace_cart == '1' %} */
/*  <input type="button" value="{{ text_price_0 }}" data-fancybox data-type="ajax" data-src="{{ base }}index.php?route=extension/module/so_call_for_price&product_id={{ product.product_id }}" class="btn btn-primary btn-block" /> */
/*  {% endif %} */
/*  {% endif %} */
/*  {% else %} */
/*  <input type="button" value="{{ button_cart }}" class="btn btn-primary btn-block" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');" /> */
/*  {% endif %} */
/*  */
/*             <a href="{{ product.remove }}" class="btn btn-danger btn-block">{{ button_remove }}</a></td>*/
/*           {% endfor %} </tr>*/
/*       </table>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-default">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
