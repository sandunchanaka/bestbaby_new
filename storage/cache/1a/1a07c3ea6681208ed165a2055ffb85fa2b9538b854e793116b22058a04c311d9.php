<?php

/* so-emarket/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig */
class __TwigTemplate_b4873f1225ba4f94b17997d8ec43c317e6837421c79eb059a9848882f2360eaf extends Twig_Template
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
        $context["width_popup"] = (((isset($context["width"]) ? $context["width"] : null)) ? ((isset($context["width"]) ? $context["width"] : null)) : ("50%"));
        // line 2
        if ((isset($context["image_bg_display"]) ? $context["image_bg_display"] : null)) {
            // line 3
            echo "    ";
            $context["bg"] = (("background: url(image/" . (isset($context["image"]) ? $context["image"] : null)) . ")");
        } else {
            // line 4
            echo " 
   ";
            // line 5
            $context["bg"] = (("background-color: #" . (isset($context["color_bg"]) ? $context["color_bg"] : null)) . "");
        }
        // line 7
        echo "

<div id=\"container-module-newletter\" class=\"hidden-md hidden-sm hidden-xs\">
\t<div class=\"so_newletter_custom_popup_bg\"></div>
\t<div class=\"module custom-pop ";
        // line 11
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo " so_newletter_custom_popup so_newletter_oca_popup\" id=\"so_newletter_custom_popup\">
\t    <div class=\"so-custom-popup so-custom-oca-popup\" style=\"width: ";
        // line 12
        echo (isset($context["width_popup"]) ? $context["width_popup"] : null);
        echo " ; ";
        echo (isset($context["bg"]) ? $context["bg"] : null);
        echo " ;  \">
\t\t\t
\t\t\t";
        // line 14
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            echo " 
\t\t\t\t<h3 class=\"modtitle\">";
            // line 15
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo " </h3>
\t\t\t";
        }
        // line 16
        echo " 

\t\t\t
\t\t\t
\t\t\t<div class=\"modcontent\">
\t\t\t\t<div class=\"oca_popup\" id=\"test-popup\">
\t\t\t\t\t<div class=\"popup-content\">
\t\t\t\t\t\t";
        // line 23
        if ((isset($context["title_display"]) ? $context["title_display"] : null)) {
            // line 24
            echo "\t\t\t\t\t\t<div class=\"popup-title\">
\t\t\t\t\t\t\t";
            // line 25
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t<p class=\"newsletter_promo font-ct\">";
        echo (isset($context["newsletter_promo"]) ? $context["newsletter_promo"] : null);
        echo "</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<form method=\"post\"  name=\"signup\" class=\"form-group signup send-mailpopup\">
\t\t\t\t\t\t\t<div class=\"input-control\">
\t\t\t\t\t\t\t\t<div class=\"email\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"";
        // line 33
        echo (isset($context["newsletter_placeholder"]) ? $context["newsletter_placeholder"] : null);
        echo "\" value=\"\" class=\"form-control\" id=\"";
        echo (isset($context["txtemail_id"]) ? $context["txtemail_id"] : null);
        echo "\" name=\"txtemail\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-default\" type=\"submit\" onclick=\"return subscribe_newsletter_popup();\" name=\"submit\">
\t\t\t\t\t\t\t\t\t";
        // line 36
        echo (isset($context["newsletter_button"]) ? $context["newsletter_button"] : null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<label class=\"hidden-popup\">
\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"1\" name=\"hidden-popup\">
\t\t\t\t\t\t\t<span class=\"inline\">&nbsp;&nbsp;";
        // line 43
        echo (isset($context["input_check"]) ? $context["input_check"] : null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 46
        if (((isset($context["pre_text"]) ? $context["pre_text"] : null) != "")) {
            // line 47
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
            // line 48
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 51
        echo "\t                   
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> <!--/.modcontent-->
\t        <button title=\"Close\" type=\"button\" class=\"popup-close\">&times;</button>
\t\t\t";
        // line 56
        if (((isset($context["post_text"]) ? $context["post_text"] : null) != "")) {
            // line 57
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 58
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 61
        echo "\t\t\t
\t    </div>
\t</div>

<script type=\"text/javascript\">
    (function(\$) {
        \$(window).load(function () {
           
            \$('.so_newletter_custom_popup_bg').addClass('popup_bg');
            \$('input[name=\\'hidden-popup\\']').on('change', function(){
                if (\$(this).is(':checked')) {
                    checkCookie();
                } else {
                    unsetCookie(\"so_newletter_custom_popup\");
                }
            });
            function unsetCookie( name ) {
                document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }
            \$('.popup-close').click(function(){
                var this_close = \$('.popup-close');
                this_close.parents().find('#container-module-newletter').remove();
            });
        });
    })(jQuery);
\tfunction setCookie(cname, cvalue, exdays) {
\t\tvar d = new Date();
\t\td.setTime(d.getTime() + (exdays*24*60*60*1000));
\t\tvar expires = \"expires=\"+d.toUTCString();
\t\tdocument.cookie = cname + \"=\" + cvalue + \"; \" + expires;
\t}
\tfunction getCookie(cname) {
\t\tvar name = cname + \"=\";
\t\tvar ca = document.cookie.split(';');
\t\tfor(var i=0; i<ca.length; i++) {
\t\t\tvar c = ca[i];
\t\t\twhile (c.charAt(0)==' ') c = c.substring(1);
\t\t\tif (c.indexOf(name) == 0) return c.substring(name.length, c.length);
\t\t}
\t\treturn \"\";
\t}
\tfunction checkCookie() {
\t\tvar check_cookie = getCookie(\"so_newletter_custom_popup\");
\t\tif(check_cookie == \"\"){
\t\t\tsetCookie(\"so_newletter_custom_popup\", \"Newletter Popup\", ";
        // line 105
        echo (isset($context["expired"]) ? $context["expired"] : null);
        echo ");
\t\t}
\t}
    function subscribe_newsletter_popup()
    {
\t\t//alert(email);
        var emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
        var email = \$(";
        // line 112
        echo (isset($context["txtemail_id"]) ? $context["txtemail_id"] : null);
        echo ").val();
\t\t
        var d = new Date();
        var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
        var status   = 0;
        var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;
\t\t
        if(email != \"\")
        {

            if(!emailpattern.test(email))
            {
                \$('.show-error').remove();
                \$('.send-mailpopup').after('<div class=\"alert alert-danger show-error\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> Invalid Email </div>')
                return false;
            }
            else
            {
                \$.ajax({
                    url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                    type: 'post',
                    data: dataString,
                    dataType: 'json',

                    success: function(json) {
                        \$('.show-error').remove();
                        if(json.error == false) {
\t\t\t\t\t\t\tcheckCookie();
                            \$('.send-mailpopup').after('<div class=\"alert alert-success show-error\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                            setTimeout(function () {
                                var this_close = \$('.popup-close');
                                this_close.parent().css('display', 'none');
                                this_close.parents().find('#container-module-newletter').remove();
                            }, 3000);

                        }else{
                             \$('.send-mailpopup').after('<div class=\"alert alert-danger show-error\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                        }
                        var x = document.getElementsByClassName('signup');
                        for (i = 0; i < x.length; i++) {
                            x[i].reset();
                        }
                    }
                });
                return false;
            }
        }
        else
        {
            alert(\"";
        // line 161
        echo (isset($context["text_email_required"]) ? $context["text_email_required"] : null);
        echo "\");
            \$(email).focus();
            return false;
        }
    }
</script>


</div>";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 161,  197 => 112,  187 => 105,  141 => 61,  135 => 58,  132 => 57,  130 => 56,  123 => 51,  117 => 48,  114 => 47,  112 => 46,  106 => 43,  96 => 36,  88 => 33,  79 => 28,  73 => 25,  70 => 24,  68 => 23,  59 => 16,  54 => 15,  50 => 14,  43 => 12,  39 => 11,  33 => 7,  30 => 5,  27 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set width_popup =  width ? width : '50%' %}*/
/* {% if image_bg_display %}*/
/*     {% set bg   =  'background: url(image/'~image~')' %}*/
/* {% else %} */
/*    {%  set  bg  =  'background-color: #'~color_bg~'' %}*/
/* {% endif %}*/
/* */
/* */
/* <div id="container-module-newletter" class="hidden-md hidden-sm hidden-xs">*/
/* 	<div class="so_newletter_custom_popup_bg"></div>*/
/* 	<div class="module custom-pop {{ class_suffix }} so_newletter_custom_popup so_newletter_oca_popup" id="so_newletter_custom_popup">*/
/* 	    <div class="so-custom-popup so-custom-oca-popup" style="width: {{ width_popup }} ; {{ bg }} ;  ">*/
/* 			*/
/* 			{% if disp_title_module %} */
/* 				<h3 class="modtitle">{{ head_name }} </h3>*/
/* 			{% endif %} */
/* */
/* 			*/
/* 			*/
/* 			<div class="modcontent">*/
/* 				<div class="oca_popup" id="test-popup">*/
/* 					<div class="popup-content">*/
/* 						{% if title_display %}*/
/* 						<div class="popup-title">*/
/* 							{{ title }}*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						<p class="newsletter_promo font-ct">{{ newsletter_promo  }}</p>*/
/* 						*/
/* 						<form method="post"  name="signup" class="form-group signup send-mailpopup">*/
/* 							<div class="input-control">*/
/* 								<div class="email">*/
/* 									<input type="email" placeholder="{{ newsletter_placeholder  }}" value="" class="form-control" id="{{ txtemail_id }}" name="txtemail">*/
/* 								</div>*/
/* 								<button class="btn btn-primary btn-default" type="submit" onclick="return subscribe_newsletter_popup();" name="submit">*/
/* 									{{ newsletter_button  }}*/
/* 								</button>*/
/* 							</div>*/
/* 						</form>*/
/* */
/* 						<label class="hidden-popup">*/
/* 							<input type="checkbox" value="1" name="hidden-popup">*/
/* 							<span class="inline">&nbsp;&nbsp;{{ input_check }}</span>*/
/* 						</label>*/
/* 						*/
/* 						{% if pre_text != ''%}*/
/* 							<div class="form-group">*/
/* 								{{ pre_text }}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 	                   */
/* 					</div>*/
/* 				</div>*/
/* 			</div> <!--/.modcontent-->*/
/* 	        <button title="Close" type="button" class="popup-close">&times;</button>*/
/* 			{% if post_text  !='' %}*/
/* 				<div class="form-group">*/
/* 					{{ post_text }}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			*/
/* 	    </div>*/
/* 	</div>*/
/* */
/* <script type="text/javascript">*/
/*     (function($) {*/
/*         $(window).load(function () {*/
/*            */
/*             $('.so_newletter_custom_popup_bg').addClass('popup_bg');*/
/*             $('input[name=\'hidden-popup\']').on('change', function(){*/
/*                 if ($(this).is(':checked')) {*/
/*                     checkCookie();*/
/*                 } else {*/
/*                     unsetCookie("so_newletter_custom_popup");*/
/*                 }*/
/*             });*/
/*             function unsetCookie( name ) {*/
/*                 document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';*/
/*             }*/
/*             $('.popup-close').click(function(){*/
/*                 var this_close = $('.popup-close');*/
/*                 this_close.parents().find('#container-module-newletter').remove();*/
/*             });*/
/*         });*/
/*     })(jQuery);*/
/* 	function setCookie(cname, cvalue, exdays) {*/
/* 		var d = new Date();*/
/* 		d.setTime(d.getTime() + (exdays*24*60*60*1000));*/
/* 		var expires = "expires="+d.toUTCString();*/
/* 		document.cookie = cname + "=" + cvalue + "; " + expires;*/
/* 	}*/
/* 	function getCookie(cname) {*/
/* 		var name = cname + "=";*/
/* 		var ca = document.cookie.split(';');*/
/* 		for(var i=0; i<ca.length; i++) {*/
/* 			var c = ca[i];*/
/* 			while (c.charAt(0)==' ') c = c.substring(1);*/
/* 			if (c.indexOf(name) == 0) return c.substring(name.length, c.length);*/
/* 		}*/
/* 		return "";*/
/* 	}*/
/* 	function checkCookie() {*/
/* 		var check_cookie = getCookie("so_newletter_custom_popup");*/
/* 		if(check_cookie == ""){*/
/* 			setCookie("so_newletter_custom_popup", "Newletter Popup", {{expired}});*/
/* 		}*/
/* 	}*/
/*     function subscribe_newsletter_popup()*/
/*     {*/
/* 		//alert(email);*/
/*         var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;*/
/*         var email = $({{txtemail_id}}).val();*/
/* 		*/
/*         var d = new Date();*/
/*         var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();*/
/*         var status   = 0;*/
/*         var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;*/
/* 		*/
/*         if(email != "")*/
/*         {*/
/* */
/*             if(!emailpattern.test(email))*/
/*             {*/
/*                 $('.show-error').remove();*/
/*                 $('.send-mailpopup').after('<div class="alert alert-danger show-error" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Invalid Email </div>')*/
/*                 return false;*/
/*             }*/
/*             else*/
/*             {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',*/
/*                     type: 'post',*/
/*                     data: dataString,*/
/*                     dataType: 'json',*/
/* */
/*                     success: function(json) {*/
/*                         $('.show-error').remove();*/
/*                         if(json.error == false) {*/
/* 							checkCookie();*/
/*                             $('.send-mailpopup').after('<div class="alert alert-success show-error" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> ' + json.message + '</div>');*/
/*                             setTimeout(function () {*/
/*                                 var this_close = $('.popup-close');*/
/*                                 this_close.parent().css('display', 'none');*/
/*                                 this_close.parents().find('#container-module-newletter').remove();*/
/*                             }, 3000);*/
/* */
/*                         }else{*/
/*                              $('.send-mailpopup').after('<div class="alert alert-danger show-error" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> ' + json.message + '</div>');*/
/*                         }*/
/*                         var x = document.getElementsByClassName('signup');*/
/*                         for (i = 0; i < x.length; i++) {*/
/*                             x[i].reset();*/
/*                         }*/
/*                     }*/
/*                 });*/
/*                 return false;*/
/*             }*/
/*         }*/
/*         else*/
/*         {*/
/*             alert("{{ text_email_required }}");*/
/*             $(email).focus();*/
/*             return false;*/
/*         }*/
/*     }*/
/* </script>*/
/* */
/* */
/* </div>*/
