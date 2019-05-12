<?php

/* so-emarket/template/common/cart.twig */
class __TwigTemplate_6db7923960dd7e22e7d825ca3e0bfae7c84377874f02eb15e85f92b411f38051 extends Twig_Template
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
        echo "<div id=\"cart\" class=\"btn-shopping-cart\">
  
  <a data-loading-text=\"";
        // line 3
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo " \" class=\"btn-group top_cart dropdown-toggle\" data-toggle=\"dropdown\">
    <div class=\"shopcart\">
      <span class=\"icon-c\">
        <i class=\"fa fa-shopping-bag\"></i>
      </span>
      <div class=\"shopcart-inner\">
        <p class=\"text-shopping-cart\">

         ";
        // line 11
        echo (isset($context["text_shop_cart"]) ? $context["text_shop_cart"] : null);
        echo "
        </p>
   
        <span class=\"total-shopping-cart cart-total-full\">
           ";
        // line 15
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "
        </span>
      </div>
    </div>
  </a>
  
  <ul class=\"dropdown-menu pull-right shoppingcart-box\">
    ";
        // line 22
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 23
            echo "    <li class=\"content-item\">
      <table class=\"table table-striped\" style=\"margin-bottom:10px;\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                echo "        <tr>
          <td class=\"text-center size-img-cart\">";
                // line 27
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img class=\"img-thumbnail lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"  /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 28
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 29
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 30
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
            - <small>";
                    // line 33
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 34
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 35
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 36
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 40
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 42
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 44
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 45
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "      </table>
    </li>
  
\t<li>
\t\t<div class=\"checkout clearfix\">
\t\t<a href=\"";
            // line 53
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\" class=\"btn btn-view-cart inverse\"> ";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>
\t\t<a href=\"";
            // line 54
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\" class=\"btn btn-checkout pull-right\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
\t\t</div>
\t</li>
    ";
        } else {
            // line 58
            echo "    <li>
      <p class=\"text-center empty\">";
            // line 59
            echo (isset($context["text_empty_cart"]) ? $context["text_empty_cart"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 62
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 62,  189 => 59,  186 => 58,  177 => 54,  171 => 53,  164 => 48,  153 => 45,  149 => 44,  144 => 42,  140 => 40,  135 => 39,  124 => 36,  120 => 35,  116 => 34,  108 => 33,  103 => 32,  100 => 31,  91 => 30,  84 => 29,  78 => 28,  64 => 27,  61 => 26,  57 => 25,  53 => 23,  51 => 22,  41 => 15,  34 => 11,  23 => 3,  19 => 1,);
    }
}
/* <div id="cart" class="btn-shopping-cart">*/
/*   */
/*   <a data-loading-text="{{ text_loading }} " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">*/
/*     <div class="shopcart">*/
/*       <span class="icon-c">*/
/*         <i class="fa fa-shopping-bag"></i>*/
/*       </span>*/
/*       <div class="shopcart-inner">*/
/*         <p class="text-shopping-cart">*/
/* */
/*          {{ text_shop_cart}}*/
/*         </p>*/
/*    */
/*         <span class="total-shopping-cart cart-total-full">*/
/*            {{text_items}}*/
/*         </span>*/
/*       </div>*/
/*     </div>*/
/*   </a>*/
/*   */
/*   <ul class="dropdown-menu pull-right shoppingcart-box">*/
/*     {% if products or vouchers %}*/
/*     <li class="content-item">*/
/*       <table class="table table-striped" style="margin-bottom:10px;">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center size-img-cart">{% if product.thumb %} <a href="{{ product.href }}"><img class="img-thumbnail lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"  /></a> {% endif %}</td>*/
/*           <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if product.option %}*/
/*             {% for option in product.option %} <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %} <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}</td>*/
/*           <td class="text-right">x {{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </li>*/
/*   */
/* 	<li>*/
/* 		<div class="checkout clearfix">*/
/* 		<a href="{{ cart }}" class="btn btn-view-cart inverse"> {{ text_cart }}</a>*/
/* 		<a href="{{ checkout }}" class="btn btn-checkout pull-right">{{ text_checkout }}</a>*/
/* 		</div>*/
/* 	</li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center empty">{{  text_empty_cart  }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
