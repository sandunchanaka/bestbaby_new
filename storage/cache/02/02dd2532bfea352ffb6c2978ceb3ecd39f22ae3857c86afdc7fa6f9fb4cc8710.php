<?php

/* so-emarket/template/header/header2.twig */
class __TwigTemplate_847f65692b4bd85fcfca493d62202c8aaccc9c8880d213f6674cf49f5858341f extends Twig_Template
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
        // line 2
        $context["hidden_headercenter"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "2")) ? ("hidden-compact") : (""));
        // line 3
        $context["hidden_headerbottom"] = ((($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_type"), "method") == "1")) ? ("hidden-compact") : (""));
        // line 4
        echo "
<header id=\"header\" class=\" variant typeheader-";
        // line 5
        echo (((isset($context["typeheader"]) ? $context["typeheader"] : null)) ? ((isset($context["typeheader"]) ? $context["typeheader"] : null)) : ("1"));
        echo "\">
\t";
        // line 6
        echo "  
\t<div class=\"header-top hidden-compact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"header-top-left col-lg-6 col-md-8 col-sm-6 col-xs-4\">
\t\t\t\t\t";
        // line 11
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message_status"), "method")) {
            // line 12
            echo "\t\t\t\t\t\t<div class=\"hidden-md hidden-sm hidden-xs welcome-msg\">
\t\t\t\t\t\t\t";
            // line 13
            if ( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method"))) {
                // line 14
                echo "\t\t\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "welcome_message"), "method")), "method");
                echo "
\t\t\t\t\t\t\t";
            }
            // line 15
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t\t<ul class=\"top-link list-inline hidden-lg\">
\t\t\t\t\t\t<li class=\"account\" id=\"my_account\"><a href=\"";
        // line 19
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo " \" class=\"btn-xs dropdown-toggle\" data-toggle=\"dropdown\"> <span class=\"hidden-xs\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo " </span> <span class=\"fa fa-caret-down\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu \">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 21
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\"  title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 22
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\" title=\"";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "\">";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t";
        // line 23
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 24
            echo "\t\t\t\t\t\t            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 25
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 26
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 27
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 28
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t\t\t            ";
        } else {
            // line 30
            echo "
\t\t\t\t\t\t            <li><a href=\"";
            // line 31
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t\t\t            <li><a href=\"";
            // line 32
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t\t\t            ";
        }
        // line 33
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 37
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "checkout_status"), "method")) {
            // line 38
            echo "\t\t\t\t\t\t\t<li class=\"checkout hidden-xs\"><a href=\"";
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo " \" class=\"btn-link\" title=\"";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo " \"><span >";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo " </span></a></li>
\t\t\t\t\t\t";
        }
        // line 39
        echo " 
\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"header-top-right collapsed-block col-lg-6 col-md-4 col-sm-6 col-xs-8\">\t
\t\t\t\t\t";
        // line 44
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "lang_status"), "method")) {
            // line 45
            echo "\t\t\t\t\t<ul class=\"top-link list-inline lang-curr\">
\t\t\t\t\t\t";
            // line 46
            if ((isset($context["currency"]) ? $context["currency"] : null)) {
                echo "<li class=\"currency\"> ";
                echo (isset($context["currency"]) ? $context["currency"] : null);
                echo "  </li> ";
            }
            // line 47
            echo "\t\t\t\t\t\t";
            if ((isset($context["language"]) ? $context["language"] : null)) {
                echo " <li class=\"language\">";
                echo (isset($context["language"]) ? $context["language"] : null);
                echo " </li>\t";
            }
            echo "\t\t\t
\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t\t";
        }
        // line 49
        echo " \t\t\t\t\t
\t\t\t
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t";
        // line 57
        echo " 
\t<div class=\"header-middle ";
        // line 58
        echo (isset($context["hidden_headercenter"]) ? $context["hidden_headercenter"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t\t\t
\t\t\t\t<div class=\"navbar-logo col-lg-2 col-md-3 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t   \t\t";
        // line 63
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_logo", array(), "method");
        echo "
\t\t\t\t   \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"middle2 col-lg-7 col-md-6\">\t
\t\t\t\t\t<div class=\"search-header-w\">
\t\t\t\t\t\t<div class=\"icon-search hidden-lg hidden-md\"><i class=\"fa fa-search\"></i></div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 69
        echo (isset($context["search_block"]) ? $context["search_block"] : null);
        echo "
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"middle3 col-lg-3 col-md-3\">
\t\t\t\t\t<div class=\"shopping_cart\">\t\t\t\t\t\t\t
\t\t\t\t\t \t";
        // line 74
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
\t\t\t\t\t</div>\t
\t\t\t\t\t<ul class=\"wishlist-comp hidden-md hidden-sm hidden-xs\">
\t\t\t\t\t\t<li class=\"compare hidden-xs\"><a href=\"";
        // line 77
        echo (isset($context["compare"]) ? $context["compare"] : null);
        echo "\"  class=\"top-link-compare\" title=\"";
        echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
        echo " \"><i class=\"fa fa-refresh\"></i>";
        echo "</a></li>
\t\t\t\t\t\t<li class=\"wishlist hidden-xs\"><a href=\"";
        // line 78
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" class=\"top-link-wishlist\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo " \"><!-- <i class=\"fa fa-heart\"></i> -->";
        echo "</a></li>\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t</div>\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"header-bottom ";
        // line 87
        echo (isset($context["hidden_headerbottom"]) ? $context["hidden_headerbottom"] : null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"bottom1 menu-vertical col-lg-2 col-md-3\">
\t\t\t\t\t";
        // line 91
        echo (isset($context["content_menu2"]) ? $context["content_menu2"] : null);
        echo "\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"main-menu col-lg-6 col-md-9\">\t\t\t\t\t
\t\t\t\t\t";
        // line 95
        echo (isset($context["content_menu1"]) ? $context["content_menu1"] : null);
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"bottom2 col-lg-4 hidden-md col-sm-6 col-xs-8\">\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t";
        // line 100
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "phone_status"), "method") && $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method"))) {
            // line 101
            echo "\t\t\t\t\t<div class=\"telephone hidden-xs hidden-sm hidden-md\" >
\t\t\t\t\t\t";
            // line 102
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "decode_entities", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contact_number"), "method")), "method");
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"signin-w font-title hidden-sm hidden-xs\">
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"signin-link\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 109
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            echo " 
\t\t\t\t\t\t\t\t<li class=\"log logout\"><i class=\"fa fa-unlock\"></i> <a class=\"link-lg\" href=\"";
            // line 110
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo " \"> ";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo " </a></li>
\t\t\t\t\t\t\t";
        } else {
            // line 111
            echo "   
\t\t\t\t\t\t\t\t<li class=\"log login\"><i class=\"fa fa-lock\"></i> <a class=\"link-lg\" href=\"";
            // line 112
            echo (isset($context["login"]) ? $context["login"] : null);
            echo " \">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo " </a> ";
            echo (isset($context["text_or"]) ? $context["text_or"] : null);
            echo " <a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 113
        echo "  \t\t\t
\t\t\t\t\t\t</ul>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t\t
</header>";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/header/header2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 113,  299 => 112,  296 => 111,  289 => 110,  285 => 109,  279 => 105,  273 => 102,  270 => 101,  268 => 100,  260 => 95,  253 => 91,  246 => 87,  231 => 78,  224 => 77,  218 => 74,  210 => 69,  201 => 63,  193 => 58,  190 => 57,  180 => 49,  169 => 47,  163 => 46,  160 => 45,  158 => 44,  151 => 39,  141 => 38,  139 => 37,  133 => 33,  126 => 32,  120 => 31,  117 => 30,  110 => 28,  104 => 27,  98 => 26,  92 => 25,  85 => 24,  83 => 23,  75 => 22,  67 => 21,  58 => 19,  55 => 18,  50 => 15,  44 => 14,  42 => 13,  39 => 12,  37 => 11,  30 => 6,  26 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }
}
/* {#=====Get variable : Config Select Block on header=====#}*/
/* {% set hidden_headercenter = soconfig.get_settings('toppanel_type') =='2'? 'hidden-compact' : '' %}*/
/* {% set hidden_headerbottom = soconfig.get_settings('toppanel_type') =='1'? 'hidden-compact' : '' %}*/
/* */
/* <header id="header" class=" variant typeheader-{{ typeheader ? typeheader : '1'}}">*/
/* 	{#======	HEADER TOP	=======#}  */
/* 	<div class="header-top hidden-compact">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="header-top-left col-lg-6 col-md-8 col-sm-6 col-xs-4">*/
/* 					{% if soconfig.get_settings('welcome_message_status') %}*/
/* 						<div class="hidden-md hidden-sm hidden-xs welcome-msg">*/
/* 							{% if soconfig.get_settings('welcome_message') is not empty %}*/
/* 								{{ soconfig.decode_entities( soconfig.get_settings('welcome_message') ) }}*/
/* 							{% endif %} */
/* 						</div>*/
/* 					{% endif %}*/
/* 					<ul class="top-link list-inline hidden-lg">*/
/* 						<li class="account" id="my_account"><a href="{{ account }}" title="{{ text_account }} " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">{{ text_account }} </span> <span class="fa fa-caret-down"></span></a>*/
/* 							<ul class="dropdown-menu ">*/
/* 									<li><a href="{{ wishlist }}"  title="{{ text_wishlist }}">{{ text_wishlist }}</a></li>*/
/* 									<li><a href="{{ compare }}" title="{{ text_compare }}">{{ text_compare }}</a></li>*/
/* 								{% if logged %}*/
/* 						            <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 						            <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 						            <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* 						            <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* 						            <li><a href="{{ logout }}"><i class="fa fa-sign-out" aria-hidden="true"></i> {{ text_logout }}</a></li>*/
/* 					            {% else %}*/
/* */
/* 						            <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/* 						            <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/* 					            {% endif %}															*/
/* 							</ul>*/
/* 						</li>	*/
/* 						*/
/* 						{% if soconfig.get_settings('checkout_status') %}*/
/* 							<li class="checkout hidden-xs"><a href="{{ checkout }} " class="btn-link" title="{{ text_checkout }} "><span >{{ text_checkout }} </span></a></li>*/
/* 						{% endif %} */
/* 					</ul>*/
/* 							*/
/* 				</div>*/
/* 				<div class="header-top-right collapsed-block col-lg-6 col-md-4 col-sm-6 col-xs-8">	*/
/* 					{% if soconfig.get_settings('lang_status') %}*/
/* 					<ul class="top-link list-inline lang-curr">*/
/* 						{% if currency %}<li class="currency"> {{ currency }}  </li> {% endif %}*/
/* 						{% if language %} <li class="language">{{ language }} </li>	{% endif %}			*/
/* 					</ul>				*/
/* 					{% endif %} 					*/
/* 			*/
/* 				*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	{#======	HEADER CENTER	=======#} */
/* 	<div class="header-middle {{hidden_headercenter}}">*/
/* 		<div class="container">*/
/* 			<div class="row">			*/
/* 				<div class="navbar-logo col-lg-2 col-md-3 col-sm-12 col-xs-12">*/
/* 					<div class="logo">*/
/* 				   		{{soconfig.get_logo()}}*/
/* 				   	</div>*/
/* 				</div>*/
/* 				<div class="middle2 col-lg-7 col-md-6">	*/
/* 					<div class="search-header-w">*/
/* 						<div class="icon-search hidden-lg hidden-md"><i class="fa fa-search"></i></div>								*/
/* 						{{ search_block }}*/
/* 					</div>				*/
/* 				</div>*/
/* 				<div class="middle3 col-lg-3 col-md-3">*/
/* 					<div class="shopping_cart">							*/
/* 					 	{{ cart }}*/
/* 					</div>	*/
/* 					<ul class="wishlist-comp hidden-md hidden-sm hidden-xs">*/
/* 						<li class="compare hidden-xs"><a href="{{ compare }}"  class="top-link-compare" title="{{ text_compare }} "><i class="fa fa-refresh"></i>{# {{ text_compare }} #}</a></li>*/
/* 						<li class="wishlist hidden-xs"><a href="{{ wishlist }}" id="wishlist-total" class="top-link-wishlist" title="{{ text_wishlist }} "><!-- <i class="fa fa-heart"></i> -->{# {{ text_wishlist }} #}</a></li>						*/
/* 					</ul>*/
/* 						*/
/* 				</div>		*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="header-bottom {{hidden_headerbottom}}">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="bottom1 menu-vertical col-lg-2 col-md-3">*/
/* 					{{ content_menu2 }}		*/
/* 				</div>*/
/* 				*/
/* 				<div class="main-menu col-lg-6 col-md-9">					*/
/* 					{{ content_menu1 }}								*/
/* 				</div>*/
/* 				<div class="bottom2 col-lg-4 hidden-md col-sm-6 col-xs-8">					*/
/* 					*/
/* */
/* 					{% if soconfig.get_settings('phone_status') and soconfig.get_settings('contact_number') %}*/
/* 					<div class="telephone hidden-xs hidden-sm hidden-md" >*/
/* 						{{ soconfig.decode_entities( soconfig.get_settings('contact_number') ) }}*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					*/
/* 					<div class="signin-w font-title hidden-sm hidden-xs">*/
/* 						*/
/* 						<ul class="signin-link">							*/
/* 							{% if logged %} */
/* 								<li class="log logout"><i class="fa fa-unlock"></i> <a class="link-lg" href="{{ logout }} "> {{ text_logout }} </a></li>*/
/* 							{% else %}   */
/* 								<li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="{{ login }} ">{{ text_login }} </a> {{ text_or }} <a href="{{ register }}">{{ text_register }}</a></li>								*/
/* 							{% endif %}  			*/
/* 						</ul>						*/
/* 					</div>*/
/* 				</div>*/
/* 					*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 		*/
/* </header>*/
