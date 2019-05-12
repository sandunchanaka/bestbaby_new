<?php

/* default/template/extension/module/so_dashboard/default.twig */
class __TwigTemplate_b333bd6438841330676d9bcf28b0c57090260152f7d7ebcfd0dd19b81ce5b602 extends Twig_Template
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
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 2
            echo "<div class=\"myprofile\">
\t
\t<a class=\"myprofile--thumb thumbnail\" href=\"";
            // line 4
            echo (isset($context["edit"]) ? $context["edit"] : null);
            echo "\" >
\t\t<img src=\"";
            // line 5
            echo (isset($context["thumbUrl"]) ? $context["thumbUrl"] : null);
            echo "\" class=\"img-responsive\" alt=\"";
            echo (isset($context["text_editProfile"]) ? $context["text_editProfile"] : null);
            echo "\" title=\"";
            echo (isset($context["text_editProfile"]) ? $context["text_editProfile"] : null);
            echo "\">
\t</a>
\t<div class=\"myprofile--detail\">
\t\t";
            // line 8
            if ((isset($context["customer_info"]) ? $context["customer_info"] : null)) {
                // line 9
                echo "\t\t\t<h3>";
                echo $this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "firstname", array());
                echo " ";
                echo $this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "lastname", array());
                echo "</h3>
\t\t\t<p>";
                // line 10
                echo $this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "email", array());
                echo "</p>
\t\t";
            }
            // line 12
            echo "\t\t<ul class=\"list-inline\">
\t\t\t<li>
\t\t\t\t<a class=\"btn btn-default\" href=\"";
            // line 14
            echo (isset($context["edit"]) ? $context["edit"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
            echo (isset($context["text_editProfile"]) ? $context["text_editProfile"] : null);
            echo "\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_editProfile"]) ? $context["text_editProfile"] : null);
            echo "</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a  class=\"btn btn-default\"  href=\"";
            // line 17
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
 ";
        }
        // line 23
        echo " 
<div class=\"panel panel-default profile--panel\">
  <div class=\"panel-heading\">";
        // line 25
        echo (isset($context["text_headingProfile"]) ? $context["text_headingProfile"] : null);
        echo "</div>
  <div class=\"panel-body\">
     ";
        // line 27
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 28
            echo "\t  <a href=\"";
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>  ";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a>
\t  <a href=\"";
            // line 29
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i>  ";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a> 
\t  <a href=\"";
            // line 30
            echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-unlock-alt\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
            echo "</a>
\t  ";
        }
        // line 32
        echo "\t\t  ";
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_account_myaccount", array())) {
            echo "<a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" class=\"list-group-item\"> <i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a>";
        }
        // line 33
        echo "\t  ";
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 34
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_account_editaccount", array())) {
                echo "<a href=\"";
                echo (isset($context["edit"]) ? $context["edit"] : null);
                echo "\" class=\"list-group-item\"> <i class=\"fa fa-pencil-square\" aria-hidden=\"true\"></i> ";
                echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
                echo "</a>";
            }
            // line 35
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_account_password", array())) {
                echo "<a href=\"";
                echo (isset($context["password"]) ? $context["password"] : null);
                echo "\" class=\"list-group-item\"><i class=\"fa fa-key\" aria-hidden=\"true\"></i> ";
                echo (isset($context["text_password"]) ? $context["text_password"] : null);
                echo "</a>";
            }
            // line 36
            echo "\t  ";
        }
        // line 37
        echo "\t  
\t  ";
        // line 38
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_account_address", array())) {
            echo "<a href=\"";
            echo (isset($context["address"]) ? $context["address"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-address-book\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_address"]) ? $context["text_address"] : null);
            echo "</a>";
        }
        // line 39
        echo "\t  ";
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_account_wishlist", array())) {
            echo "<a href=\"";
            echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a> ";
        }
        // line 40
        echo " \t  ";
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_account_newsletter", array())) {
            echo " <a href=\"";
            echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
            echo "</a>";
        }
        // line 41
        echo "
\t  
\t 
  </div>
</div>


<div class=\"panel panel-default profile--panel\">
  <div class=\"panel-heading\">";
        // line 49
        echo (isset($context["text_headingOrder"]) ? $context["text_headingOrder"] : null);
        echo "</div>
  <div class=\"panel-body\">
    
\t  ";
        // line 52
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_order", array())) {
            echo "<a href=\"";
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a>";
        }
        // line 53
        echo "\t  
\t  ";
        // line 54
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_order_download", array())) {
            echo "<a href=\"";
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a>";
        }
        // line 55
        echo "\t  ";
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_order_payments", array())) {
            echo "<a href=\"";
            echo (isset($context["recurring"]) ? $context["recurring"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-usd\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
            echo "</a> ";
        }
        // line 56
        echo "\t  ";
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_order_reward", array())) {
            echo "<a href=\"";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-shield\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a> ";
        }
        // line 57
        echo "\t  ";
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_order_returns", array())) {
            echo "<a href=\"";
            echo (isset($context["return"]) ? $context["return"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-retweet\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a> ";
        }
        // line 58
        echo "\t  ";
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "display_order_transactions", array())) {
            echo "<a href=\"";
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\" class=\"list-group-item\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a> ";
        }
        // line 59
        echo "\t  
\t
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_dashboard/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 59,  235 => 58,  226 => 57,  217 => 56,  208 => 55,  200 => 54,  197 => 53,  189 => 52,  183 => 49,  173 => 41,  164 => 40,  155 => 39,  147 => 38,  144 => 37,  141 => 36,  132 => 35,  123 => 34,  120 => 33,  111 => 32,  104 => 30,  98 => 29,  91 => 28,  89 => 27,  84 => 25,  80 => 23,  67 => 17,  57 => 14,  53 => 12,  48 => 10,  41 => 9,  39 => 8,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if  logged %}*/
/* <div class="myprofile">*/
/* 	*/
/* 	<a class="myprofile--thumb thumbnail" href="{{ edit }}" >*/
/* 		<img src="{{thumbUrl}}" class="img-responsive" alt="{{ text_editProfile }}" title="{{ text_editProfile }}">*/
/* 	</a>*/
/* 	<div class="myprofile--detail">*/
/* 		{% if customer_info %}*/
/* 			<h3>{{customer_info.firstname}} {{customer_info.lastname}}</h3>*/
/* 			<p>{{customer_info.email}}</p>*/
/* 		{% endif %}*/
/* 		<ul class="list-inline">*/
/* 			<li>*/
/* 				<a class="btn btn-default" href="{{ edit }}" data-toggle="tooltip" title="" data-original-title="{{ text_editProfile }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> {{ text_editProfile }}</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a  class="btn btn-default"  href="{{ logout }}" data-toggle="tooltip" title="" data-original-title="{{ text_logout }}"><i class="fa fa-sign-out" aria-hidden="true"></i> {{ text_logout }}</a>*/
/* 			</li>*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/*  {% endif %}*/
/*  */
/* <div class="panel panel-default profile--panel">*/
/*   <div class="panel-heading">{{text_headingProfile}}</div>*/
/*   <div class="panel-body">*/
/*      {% if not logged %}*/
/* 	  <a href="{{ login }}" class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i>  {{ text_login }}</a>*/
/* 	  <a href="{{ register }}" class="list-group-item"><i class="fa fa-key" aria-hidden="true"></i>  {{ text_register }}</a> */
/* 	  <a href="{{ forgotten }}" class="list-group-item"><i class="fa fa-unlock-alt" aria-hidden="true"></i> {{ text_forgotten }}</a>*/
/* 	  {% endif %}*/
/* 		  {% if setting.display_account_myaccount %}<a href="{{ account }}" class="list-group-item"> <i class="fa fa-user" aria-hidden="true"></i> {{ text_account }}</a>{% endif %}*/
/* 	  {% if logged %}*/
/* 			{% if setting.display_account_editaccount %}<a href="{{ edit }}" class="list-group-item"> <i class="fa fa-pencil-square" aria-hidden="true"></i> {{ text_edit }}</a>{% endif %}*/
/* 			{% if setting.display_account_password %}<a href="{{ password }}" class="list-group-item"><i class="fa fa-key" aria-hidden="true"></i> {{ text_password }}</a>{% endif %}*/
/* 	  {% endif %}*/
/* 	  */
/* 	  {% if setting.display_account_address %}<a href="{{ address }}" class="list-group-item"><i class="fa fa-address-book" aria-hidden="true"></i> {{ text_address }}</a>{% endif %}*/
/* 	  {% if setting.display_account_wishlist %}<a href="{{ wishlist }}" class="list-group-item"><i class="fa fa-heart" aria-hidden="true"></i> {{ text_wishlist }}</a> {% endif %}*/
/*  	  {% if setting.display_account_newsletter %} <a href="{{ newsletter }}" class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i> {{ text_newsletter }}</a>{% endif %}*/
/* */
/* 	  */
/* 	 */
/*   </div>*/
/* </div>*/
/* */
/* */
/* <div class="panel panel-default profile--panel">*/
/*   <div class="panel-heading">{{text_headingOrder}}</div>*/
/*   <div class="panel-body">*/
/*     */
/* 	  {% if setting.display_order %}<a href="{{ order }}" class="list-group-item"><i class="fa fa-undo" aria-hidden="true"></i> {{ text_order }}</a>{% endif %}*/
/* 	  */
/* 	  {% if setting.display_order_download %}<a href="{{ download }}" class="list-group-item"><i class="fa fa-cloud-download" aria-hidden="true"></i> {{ text_download }}</a>{% endif %}*/
/* 	  {% if setting.display_order_payments %}<a href="{{ recurring }}" class="list-group-item"><i class="fa fa-usd" aria-hidden="true"></i> {{ text_recurring }}</a> {% endif %}*/
/* 	  {% if setting.display_order_reward %}<a href="{{ reward }}" class="list-group-item"><i class="fa fa-shield" aria-hidden="true"></i> {{ text_reward }}</a> {% endif %}*/
/* 	  {% if setting.display_order_returns %}<a href="{{ return }}" class="list-group-item"><i class="fa fa-retweet" aria-hidden="true"></i> {{ text_return }}</a> {% endif %}*/
/* 	  {% if setting.display_order_transactions %}<a href="{{ transaction }}" class="list-group-item"><i class="fa fa-money" aria-hidden="true"></i> {{ text_transaction }}</a> {% endif %}*/
/* 	  */
/* 	*/
/*   </div>*/
/* </div>*/
