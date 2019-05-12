<?php

/* extension/module/so_sociallogin.twig */
class __TwigTemplate_38f1d82afddcb7c99dc18362b0ac601d0c97d97227d23b05688e4b5d65af1b64 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  \t<div class=\"page-header\">
    \t<div class=\"container-fluid\">
      \t\t<div class=\"pull-right\">
        \t\t<button type=\"submit\" form=\"form-so-sociallogin\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
        \t\t<a class=\"btn btn-success\" onclick=\"\$('#action').val('save_edit');\$('#form-so-sociallogin').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "\" ><i class=\"fa fa-pencil-square-o\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "</a>
\t\t\t\t<a class=\"btn btn-info\" onclick=\"\$('#action').val('save_new');\$('#form-so-sociallogin').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "\" ><i class=\"fa fa-book\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "</a>
        \t\t<a href=\"";
        // line 9
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i> ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a>
        \t</div>
\t\t\t<h1>";
        // line 11
        echo (isset($context["heading_title_so"]) ? $context["heading_title_so"] : null);
        echo "</h1>
      \t\t<ul class=\"breadcrumb\">
        \t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        \t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      \t\t</ul>
    \t</div>
  \t</div>
  \t<div class=\"container-fluid\">
    \t";
        // line 20
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 21
            echo "    \t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    \t\t</div>
    \t";
        }
        // line 25
        echo "    \t";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 26
            echo "    \t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      \t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    \t\t</div>
    \t";
        }
        // line 30
        echo "    \t<div class=\"panel panel-default\">
      \t\t<div class=\"panel-heading\">
        \t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 32
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      \t\t</div>
      \t\t<div class=\"panel-body\">
\t   \t\t\t<ul class=\"nav nav-tabs\">
            \t\t<li class=\"active\"><a href=\"#tab-setting\" data-toggle=\"tab\"><i class=\"fa fa-cog fa-fw\"></i> ";
        // line 36
        echo (isset($context["tab_setting"]) ? $context["tab_setting"] : null);
        echo "</a></li>
            \t\t<li><a href=\"#tab-facbook\" data-toggle=\"tab\"><i class=\"fa fa-facebook\"></i> ";
        // line 37
        echo (isset($context["tab_facbook"]) ? $context["tab_facbook"] : null);
        echo "</a></li>
            \t\t<li><a href=\"#tab-twitter\" data-toggle=\"tab\"><i class=\"fa fa-twitter-square\"></i> ";
        // line 38
        echo (isset($context["tab_twitter"]) ? $context["tab_twitter"] : null);
        echo "</a></li>
            \t\t<li><a href=\"#tab-google\" data-toggle=\"tab\"><i class=\"fa fa-google\"></i> ";
        // line 39
        echo (isset($context["tab_google"]) ? $context["tab_google"] : null);
        echo "</a></li>
            \t\t<li><a href=\"#tab-linkedin\" data-toggle=\"tab\"><i class=\"fa fa-linkedin-square\"></i> ";
        // line 40
        echo (isset($context["tab_linkedin"]) ? $context["tab_linkedin"] : null);
        echo "</a></li>
            \t\t<li><a href=\"#tab-introductions\" data-toggle=\"tab\"><i class=\"fa fa-graduation-cap\"></i> ";
        // line 41
        echo (isset($context["tab_introductions"]) ? $context["tab_introductions"] : null);
        echo "</a></li>
          \t\t</ul>
    \t\t\t<form action=\"";
        // line 43
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-so-sociallogin\" class=\"form-horizontal\">
    \t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>        
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active in\" id=\"tab-setting\">\t\t\t  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 48
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  \t\t\t\t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_name]\" value=\"";
        // line 50
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t  \t\t\t\t\t";
        // line 51
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 52
            echo "\t\t\t\t  \t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
\t\t\t\t  \t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-icon\">";
        // line 57
        echo (isset($context["entry_iconsize"]) ? $context["entry_iconsize"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_width]\" value=\"";
        // line 61
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t";
        // line 62
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t  \t\t<div class=\"text-danger\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t  \t";
        }
        // line 65
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\" col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_height]\" value=\"";
        // line 67
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t";
        // line 68
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t  \t\t<div class=\"text-danger\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t  \t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"help-block\">Note: Only use for Button Social is Image</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t            <label class=\"col-sm-2 control-label\" for=\"input-button\">";
        // line 77
        echo (isset($context["entry_buttonsocial"]) ? $context["entry_buttonsocial"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  \t<select name=\"so_sociallogin[so_sociallogin_button]\" id=\"input-button\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"icon\" ";
        // line 80
        echo ((((isset($context["button_social"]) ? $context["button_social"] : null) == "icon")) ? ("selected=\"selected\"") : (""));
        echo ">Icons</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"image\" ";
        // line 81
        echo ((((isset($context["button_social"]) ? $context["button_social"] : null) == "image")) ? ("selected=\"selected\"") : (""));
        echo ">Image</option>
\t\t\t\t\t\t\t\t  \t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t            </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 86
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  \t<select name=\"so_sociallogin[so_sociallogin_enable]\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 89
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 91
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 94
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t\t\t  \t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t            </div>
\t\t\t\t            <div class=\"form-group\">
\t\t\t\t\t            <label class=\"col-sm-2 control-label\" for=\"input-popuplogin\">Use Popup Login</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  \t<select name=\"so_sociallogin[so_sociallogin_popuplogin]\" id=\"input-popuplogin\" class=\"form-control\">
\t\t\t\t\t\t\t\t  \t\t";
        // line 103
        if ((isset($context["popuplogin"]) ? $context["popuplogin"] : null)) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 105
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 108
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t\t\t\t\t  \t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-facbook\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-fbtitle\">";
        // line 116
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  \t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_fbtitle]\" value=\"";
        // line 118
        echo (isset($context["fbtitle"]) ? $context["fbtitle"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" id=\"input-fbtitle\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t                <label class=\"col-sm-2 control-label\" for=\"input-fbimage\">";
        // line 122
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
\t\t\t\t                <div class=\"col-sm-10\">
\t\t\t\t                  \t<a href=\"\" id=\"thumb-fbimage\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 124
        echo (isset($context["fbthumb"]) ? $context["fbthumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
\t\t\t\t                  \t<input type=\"hidden\" name=\"so_sociallogin[so_sociallogin_fbimage]\" value=\"";
        // line 125
        echo (isset($context["fbimage"]) ? $context["fbimage"] : null);
        echo "\" id=\"input-fbimage\" />
\t\t\t\t                </div>
\t\t\t\t            </div>\t\t\t  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t        <label class=\"col-sm-2 control-label\" for=\"input-fbapikey\">";
        // line 129
        echo (isset($context["entry_apikey"]) ? $context["entry_apikey"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_fbapikey]\" id=\"fb-apikey\" value=\"";
        // line 131
        echo (isset($context["fbapikey"]) ? $context["fbapikey"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t \t";
        // line 132
        if ((isset($context["error_fbapikey"]) ? $context["error_fbapikey"] : null)) {
            // line 133
            echo "\t\t\t\t\t\t\t\t  \t\t<div class=\"text-danger\">";
            echo (isset($context["error_fbapikey"]) ? $context["error_fbapikey"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t  \t";
        }
        // line 135
        echo "\t\t\t\t\t         \t</div>
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t \t<div class=\"form-group\">
\t\t\t\t\t\t\t    <label class=\"col-sm-2 control-label\" for=\"input-fbsecretapi\">";
        // line 138
        echo (isset($context["entry_apisecret"]) ? $context["entry_apisecret"] : null);
        echo "</label>
\t\t\t\t\t\t\t \t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t \t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_fbsecretapi]\" id=\"fb-apisecret\" value=\"";
        // line 140
        echo (isset($context["fbsecretapi"]) ? $context["fbsecretapi"] : null);
        echo "\" class=\"form-control\"/> 
\t\t\t\t\t\t\t\t \t";
        // line 141
        if ((isset($context["error_fbsecretapi"]) ? $context["error_fbsecretapi"] : null)) {
            // line 142
            echo "\t\t\t\t\t\t\t\t  \t\t<div class=\"text-danger\">";
            echo (isset($context["error_fbsecretapi"]) ? $context["error_fbsecretapi"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t  \t";
        }
        // line 144
        echo "\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-fbstatus\">";
        // line 147
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  \t<select name=\"so_sociallogin[so_sociallogin_fbstatus]\" id=\"input-fbstatus\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 150
        if ((isset($context["fbstatus"]) ? $context["fbstatus"] : null)) {
            // line 151
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 152
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 155
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 157
        echo "\t\t\t\t\t\t\t\t  \t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-twitter\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-twittertitle\">";
        // line 163
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  \t\t\t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_twittertitle]\" value=\"";
        // line 165
        echo (isset($context["twittertitle"]) ? $context["twittertitle"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" id=\"input-twittertitle\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
                \t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-twitimage\">";
        // line 169
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
                \t\t\t\t<div class=\"col-sm-10\">
                  \t\t\t\t\t<a href=\"\" id=\"thumb-twitimage\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 171
        echo (isset($context["twiterthumb"]) ? $context["twiterthumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                  \t\t\t\t\t<input type=\"hidden\" name=\"so_sociallogin[so_sociallogin_twitimage]\" value=\"";
        // line 172
        echo (isset($context["twitimage"]) ? $context["twitimage"] : null);
        echo "\" id=\"input-twitimage\" />
                \t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-twitapikey\">";
        // line 176
        echo (isset($context["entry_twapikey"]) ? $context["entry_twapikey"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_twitapikey]\" id=\"twit-apikey\" value=\"";
        // line 178
        echo (isset($context["twitapikey"]) ? $context["twitapikey"] : null);
        echo "\" class=\"form-control\"/> 
\t\t           \t\t\t\t\t";
        // line 179
        if ((isset($context["error_twitapikey"]) ? $context["error_twitapikey"] : null)) {
            // line 180
            echo "\t\t\t\t  \t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_twitapikey"]) ? $context["error_twitapikey"] : null);
            echo "</div>
\t\t\t\t  \t\t\t\t\t";
        }
        // line 182
        echo "\t\t         \t\t\t\t</div>
\t\t\t\t \t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-twitsecretapi\">";
        // line 185
        echo (isset($context["entry_twapisecret"]) ? $context["entry_twapisecret"] : null);
        echo "</label>
\t\t\t\t\t \t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t \t\t\t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_twitsecretapi]\" id=\"twit-apisecret\" value=\"";
        // line 187
        echo (isset($context["twitsecretapi"]) ? $context["twitsecretapi"] : null);
        echo "\" class=\"form-control\"/> 
\t\t\t\t\t   \t\t\t\t";
        // line 188
        if ((isset($context["error_twitsecret"]) ? $context["error_twitsecret"] : null)) {
            // line 189
            echo "\t\t\t\t  \t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_twitsecret"]) ? $context["error_twitsecret"] : null);
            echo "</div>
\t\t\t\t  \t\t\t\t\t";
        }
        // line 191
        echo "\t\t\t\t\t \t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-twitstatus\">";
        // line 194
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  \t\t\t\t<select name=\"so_sociallogin[so_sociallogin_twitstatus]\" id=\"input-twitstatus\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 197
        if ((isset($context["twitstatus"]) ? $context["twitstatus"] : null)) {
            // line 198
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 199
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 201
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 202
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 204
        echo "\t\t\t\t\t  \t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t  \t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-google\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-googletitle\">";
        // line 210
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  \t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_googletitle]\" value=\"";
        // line 212
        echo (isset($context["googletitle"]) ? $context["googletitle"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" id=\"input-googletitle\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t                <label class=\"col-sm-2 control-label\" for=\"input-googleimage\">";
        // line 216
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
\t\t\t\t                <div class=\"col-sm-10\">
\t\t\t\t                  \t<a href=\"\" id=\"thumb-googleimage\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 218
        echo (isset($context["googlethumb"]) ? $context["googlethumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
\t\t\t\t                  \t<input type=\"hidden\" name=\"so_sociallogin[so_sociallogin_googleimage]\" value=\"";
        // line 219
        echo (isset($context["googleimage"]) ? $context["googleimage"] : null);
        echo "\" id=\"input-googleimage\" />
\t\t\t\t                </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t        <label class=\"col-sm-2 control-label\" for=\"input-googleapikey\">";
        // line 223
        echo (isset($context["entry_googleapikey"]) ? $context["entry_googleapikey"] : null);
        echo "</label>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_googleapikey]\" id=\"google-apikey\" value=\"";
        // line 225
        echo (isset($context["googleapikey"]) ? $context["googleapikey"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t \t";
        // line 226
        if ((isset($context["error_googleapikey"]) ? $context["error_googleapikey"] : null)) {
            // line 227
            echo "\t\t\t\t\t\t\t\t  \t\t<div class=\"text-danger\">";
            echo (isset($context["error_googleapikey"]) ? $context["error_googleapikey"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t  \t";
        }
        // line 229
        echo "\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-googlesecretapi\">";
        // line 232
        echo (isset($context["entry_googleapisecret"]) ? $context["entry_googleapisecret"] : null);
        echo "</label>
\t\t\t\t\t\t\t \t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t \t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_googlesecretapi]\" id=\"google-secret\" value=\"";
        // line 234
        echo (isset($context["googlesecretapi"]) ? $context["googlesecretapi"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t";
        // line 235
        if ((isset($context["error_googlesecret"]) ? $context["error_googlesecret"] : null)) {
            // line 236
            echo "\t\t\t\t\t\t\t  \t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_googlesecret"]) ? $context["error_googlesecret"] : null);
            echo "</div>
\t\t\t\t\t\t\t  \t\t";
        }
        // line 238
        echo "\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-googlestatus\">";
        // line 241
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  \t<select name=\"so_sociallogin[so_sociallogin_googlestatus]\" id=\"input-googlestatus\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 244
        if ((isset($context["googlestatus"]) ? $context["googlestatus"] : null)) {
            // line 245
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 246
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 248
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 249
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 251
        echo "\t\t\t\t\t\t\t\t  \t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-linkedin\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-linkedintitle\">";
        // line 257
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  \t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_linkedintitle]\" value=\"";
        // line 259
        echo (isset($context["linkedintitle"]) ? $context["linkedintitle"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "\" id=\"input-linkedintitle\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t                <label class=\"col-sm-2 control-label\" for=\"input-linkdinimage\">";
        // line 263
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
\t\t\t\t                <div class=\"col-sm-10\">
\t\t\t\t                  \t<a href=\"\" id=\"thumb-linkdinimage\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 265
        echo (isset($context["linkdinthumb"]) ? $context["linkdinthumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
\t\t\t\t                  \t<input type=\"hidden\" name=\"so_sociallogin[so_sociallogin_linkdinimage]\" value=\"";
        // line 266
        echo (isset($context["linkdinimage"]) ? $context["linkdinimage"] : null);
        echo "\" id=\"input-linkdinimage\" />
\t\t\t\t                </div>
\t\t\t\t\t\t\t</div> \t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t        \t<label class=\"col-sm-2 control-label\" for=\"input-linkdinapikey\">";
        // line 270
        echo (isset($context["entry_liapikey"]) ? $context["entry_liapikey"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_linkdinapikey]\" id=\"linkdin-apikey\" value=\"";
        // line 272
        echo (isset($context["linkdinapikey"]) ? $context["linkdinapikey"] : null);
        echo "\" class=\"form-control\"/> 
\t\t\t\t\t         \t\t";
        // line 273
        if ((isset($context["error_linkdinapikey"]) ? $context["error_linkdinapikey"] : null)) {
            // line 274
            echo "\t\t\t\t\t\t\t  \t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_linkdinapikey"]) ? $context["error_linkdinapikey"] : null);
            echo "</div>
\t\t\t\t\t\t\t  \t\t";
        }
        // line 275
        echo "\t\t  \t  
\t\t\t\t\t         \t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t \t<div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"input-linkdinsecretapi\">";
        // line 279
        echo (isset($context["entry_liapisecret"]) ? $context["entry_liapisecret"] : null);
        echo "</label>
\t\t\t\t\t\t\t \t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t \t\t<input type=\"text\" name=\"so_sociallogin[so_sociallogin_linkdinsecretapi]\" id=\"linkdin-apisecret\" value=\"";
        // line 281
        echo (isset($context["linkdinsecretapi"]) ? $context["linkdinsecretapi"] : null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t";
        // line 282
        if ((isset($context["error_linkdinsecret"]) ? $context["error_linkdinsecret"] : null)) {
            // line 283
            echo "\t\t\t\t\t\t\t  \t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_linkdinsecret"]) ? $context["error_linkdinsecret"] : null);
            echo "</div>
\t\t\t\t\t\t\t  \t\t";
        }
        // line 285
        echo "\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-linkstatus\">";
        // line 288
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  \t<select name=\"so_sociallogin[so_sociallogin_linkstatus]\" id=\"input-linkstatus\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 291
        if ((isset($context["linkstatus"]) ? $context["linkstatus"] : null)) {
            // line 292
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 293
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 295
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 296
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 298
        echo "\t\t\t\t\t\t\t\t  \t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-introductions\">
\t\t\t\t\t\t\t<h1>How to set up social apps?</h1>
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#facebook\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-facebook\"></i> Facebook</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#twitter\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-twitter\"></i> Twitter</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#google\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-google\"></i> Google</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#linkedin\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-linkedin\"></i> Linkedin</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div id=\"facebook\" class=\"tab-pane active\">
                                    <div class=\"tab-body\">
\t\t\t\t\t\t\t            <ol>
\t\t\t\t\t\t\t                <li>Visit facebook developers application page <a href=\"https://developers.facebook.com/apps\" target=\"_blank\">https://developers.facebook.com/apps</a></li>
\t\t\t\t\t\t\t                <li>Sign in to facebook</li>
\t\t\t\t\t\t\t                <li>Click Add a New App</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/facebook/1.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Enter information for New App and Click Create App ID button</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/facebook/2.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Enter Security Check and click Submit button</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/facebook/3.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Click Settings on menu left</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/facebook/4.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Fill in the App ID and App Secret in the Social Login settings tab for Facebook</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/facebook/41.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Click Add Platform and select Website</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/facebook/5.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Enter URLs of your website</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/facebook/6.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Click App Review on menu left and change to public for App</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/facebook/7.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t            </ol>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div id=\"twitter\" class=\"tab-pane\">
\t\t\t\t\t\t\t    \t<div class=\"tab-body\">
\t\t\t\t\t\t\t    \t\t<ol>
\t\t\t\t\t\t\t    \t\t\t<li>Visit twitter app page <a href=\"https://apps.twitter.com/app/new\" target=\"_blank\">https://apps.twitter.com/app/new</a></li>
\t\t\t\t\t\t\t    \t\t\t<li>Create a new application by enter information in form</li>
\t\t\t\t\t\t\t    \t\t\t<img src=\"view/image/so_sociallogin/twitter/1.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t    \t\t\t<li>Click Create your Twitter application button</li>
\t\t\t\t\t\t\t    \t\t\t<li>Go to Key and access tokens and get consumer key and consumer secret.</li>
\t\t\t\t\t\t\t    \t\t\t<img src=\"view/image/so_sociallogin/twitter/2.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t    \t\t\t<li>Fill in the Twitter Consumer Key and Twitter Consumer Secret in the Social Login settings tab for Twitter</li>
\t\t\t\t\t\t\t    \t\t\t<li>Note: Your account need verified by go to <a href=\"https://support.twitter.com/articles/20174631\" target=\"_blank\">https://support.twitter.com/articles/20174631</a> and follow the instructions</li>
\t\t\t\t\t\t\t    \t\t</ol>
\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div id=\"google\" class=\"tab-pane\">
\t\t\t\t\t\t\t    \t<div class=\"tab-body\">
\t\t\t\t\t\t\t            <ol>
\t\t\t\t\t\t\t                <li>Visit the Google Developers console <a href=\"https://console.developers.google.com\" target=\"_blank\">https://console.developers.google.com</a></li>
\t\t\t\t\t\t\t                <li>Sign in by Google account</li>
\t\t\t\t\t\t\t                <li>Create a new project by click API Project / Create project</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/google/1.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Enter Project name and click CREATE button</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/google/2.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Then on the left visit credentials and click button Add Credentials</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/google/3.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Click Configure consent screen</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/google/4.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Enter information and click Save button</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/google/5.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>
\t\t\t\t\t\t\t                \tNow you are ready to create your web app for signup. Select webapp and input the domain name and redirect url (below) <br />
\t\t\t\t\t\t\t                \tAuthorized Javascript origins: You need enter path domain: example: http://domain.com<br />
\t\t\t\t\t\t\t                \tAuthorized redirect URIs: You need enter path: example: http://domain.com/index.php?route=extension/module/so_sociallogin/GoogleLogin (for opencart >=2.2.x) or path http://domain.com/index.php?route=module/so_sociallogin/GoogleLogin (for opencart < 2.2.x)
\t\t\t\t\t\t\t                </li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/google/6.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Please fill in the Redirect URIs with the correct url</li>
\t\t\t\t\t\t\t                <li>Google+ requires the apis to be enabled. Click APIs on the left and find Social APPs Google+ APIs</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/google/7.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Click ENABLE</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/google/8.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Fill in the Client Id and Client Secret in the Social Login settings tab for Google+</li>
\t\t\t\t\t\t\t                <img src=\"view/image/so_sociallogin/google/9.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t                <li>Save and wait for several minutes for the Google api to refresh its data then test the login.</li>
\t\t\t\t\t\t\t            </ol>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <div id=\"linkedin\" class=\"tab-pane\">
\t\t\t\t\t\t\t    \t<div class=\"tab-body\">
\t\t\t\t\t\t\t            <ol>
\t\t\t\t\t\t\t    \t\t\t<li>Visit Linkedin developers page at <a href=\"http://developer.linkedin.com/\" target=\"_blank\">http://developer.linkedin.com/</a></li>
\t\t\t\t\t\t\t    \t\t\t<li>Sign in by click icon on top right</li>
\t\t\t\t\t\t\t    \t\t\t<li>Click My Apps on menu top</li>
\t\t\t\t\t\t\t    \t\t\t<li>Click Create Application button and enter information</li>
\t\t\t\t\t\t\t    \t\t\t<img src=\"view/image/so_sociallogin/linkedin/1.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t    \t\t\t<li>
\t\t\t\t\t\t\t    \t\t\t\tFill in the Client Id and Client Secret in the Social Login settings tab for Linkedin<br />
\t\t\t\t\t\t\t    \t\t\t\tAuthorized Redirect URIs: Enter path: http://domain.com/index.php?route=extension/module/so_sociallogin/LinkedinLogin (for opencart >=2.2.x) or path http://domain.com/index.php?route=module/so_sociallogin/LinkedinLogin (for opencart < 2.2.x)
\t\t\t\t\t\t\t    \t\t\t</li>
\t\t\t\t\t\t\t    \t\t\t<img src=\"view/image/so_sociallogin/linkedin/2.png\" class=\"img-thumbnail img-responsive\">
\t\t\t\t\t\t\t    \t\t</ol>
\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t    <style type=\"text/css\">
\t\t\t\t\t\t\t    \t#tab-introductions ol li {
\t\t\t\t\t\t\t    \t\tmargin: 10px 0;
\t\t\t\t\t\t\t    \t}
\t\t\t\t\t\t\t    </style>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
    \t\t</form>
      \t</div>
\t</div>
</div>
";
        // line 410
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_sociallogin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  853 => 410,  739 => 298,  734 => 296,  729 => 295,  724 => 293,  719 => 292,  717 => 291,  711 => 288,  706 => 285,  700 => 283,  698 => 282,  694 => 281,  689 => 279,  683 => 275,  677 => 274,  675 => 273,  671 => 272,  666 => 270,  659 => 266,  653 => 265,  648 => 263,  639 => 259,  634 => 257,  626 => 251,  621 => 249,  616 => 248,  611 => 246,  606 => 245,  604 => 244,  598 => 241,  593 => 238,  587 => 236,  585 => 235,  581 => 234,  576 => 232,  571 => 229,  565 => 227,  563 => 226,  559 => 225,  554 => 223,  547 => 219,  541 => 218,  536 => 216,  527 => 212,  522 => 210,  514 => 204,  509 => 202,  504 => 201,  499 => 199,  494 => 198,  492 => 197,  486 => 194,  481 => 191,  475 => 189,  473 => 188,  469 => 187,  464 => 185,  459 => 182,  453 => 180,  451 => 179,  447 => 178,  442 => 176,  435 => 172,  429 => 171,  424 => 169,  415 => 165,  410 => 163,  402 => 157,  397 => 155,  392 => 154,  387 => 152,  382 => 151,  380 => 150,  374 => 147,  369 => 144,  363 => 142,  361 => 141,  357 => 140,  352 => 138,  347 => 135,  341 => 133,  339 => 132,  335 => 131,  330 => 129,  323 => 125,  317 => 124,  312 => 122,  303 => 118,  298 => 116,  290 => 110,  285 => 108,  280 => 107,  275 => 105,  270 => 104,  268 => 103,  259 => 96,  254 => 94,  249 => 93,  244 => 91,  239 => 90,  237 => 89,  231 => 86,  223 => 81,  219 => 80,  213 => 77,  205 => 71,  199 => 69,  197 => 68,  193 => 67,  189 => 65,  183 => 63,  181 => 62,  177 => 61,  170 => 57,  165 => 54,  159 => 52,  157 => 51,  151 => 50,  146 => 48,  138 => 43,  133 => 41,  129 => 40,  125 => 39,  121 => 38,  117 => 37,  113 => 36,  106 => 32,  102 => 30,  94 => 26,  91 => 25,  83 => 21,  81 => 20,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   	<div class="page-header">*/
/*     	<div class="container-fluid">*/
/*       		<div class="pull-right">*/
/*         		<button type="submit" form="form-so-sociallogin" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i> {{ button_save }}</button>*/
/*         		<a class="btn btn-success" onclick="$('#action').val('save_edit');$('#form-so-sociallogin').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_edit') }}" ><i class="fa fa-pencil-square-o"></i> {{ objlang.get('entry_button_save_and_edit') }}</a>*/
/* 				<a class="btn btn-info" onclick="$('#action').val('save_new');$('#form-so-sociallogin').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_new') }}" ><i class="fa fa-book"></i>  {{ objlang.get('entry_button_save_and_new') }}</a>*/
/*         		<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-danger"><i class="fa fa-reply"></i> {{ button_cancel }}</a>*/
/*         	</div>*/
/* 			<h1>{{ heading_title_so }}</h1>*/
/*       		<ul class="breadcrumb">*/
/*         		{% for breadcrumb in breadcrumbs %}*/
/*         			<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         		{% endfor %}*/
/*       		</ul>*/
/*     	</div>*/
/*   	</div>*/
/*   	<div class="container-fluid">*/
/*     	{% if error_warning %}*/
/*     		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     		</div>*/
/*     	{% endif %}*/
/*     	{% if success %}*/
/*     		<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     		</div>*/
/*     	{% endif %}*/
/*     	<div class="panel panel-default">*/
/*       		<div class="panel-heading">*/
/*         		<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       		</div>*/
/*       		<div class="panel-body">*/
/* 	   			<ul class="nav nav-tabs">*/
/*             		<li class="active"><a href="#tab-setting" data-toggle="tab"><i class="fa fa-cog fa-fw"></i> {{ tab_setting }}</a></li>*/
/*             		<li><a href="#tab-facbook" data-toggle="tab"><i class="fa fa-facebook"></i> {{ tab_facbook }}</a></li>*/
/*             		<li><a href="#tab-twitter" data-toggle="tab"><i class="fa fa-twitter-square"></i> {{ tab_twitter }}</a></li>*/
/*             		<li><a href="#tab-google" data-toggle="tab"><i class="fa fa-google"></i> {{ tab_google }}</a></li>*/
/*             		<li><a href="#tab-linkedin" data-toggle="tab"><i class="fa fa-linkedin-square"></i> {{ tab_linkedin }}</a></li>*/
/*             		<li><a href="#tab-introductions" data-toggle="tab"><i class="fa fa-graduation-cap"></i> {{ tab_introductions }}</a></li>*/
/*           		</ul>*/
/*     			<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-so-sociallogin" class="form-horizontal">*/
/*     				<input type="hidden" name="action" id="action" value=""/>        */
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane active in" id="tab-setting">			  */
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/* 								<div class="col-sm-10">*/
/* 				  					<input type="text" name="so_sociallogin[so_sociallogin_name]" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/* 				  					{% if error_name %}*/
/* 				  						<div class="text-danger">{{ error_name }}</div>*/
/* 				  					{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-icon">{{ entry_iconsize }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<div class="row">*/
/* 										<div class="col-sm-6">*/
/* 											<input type="text" name="so_sociallogin[so_sociallogin_width]" value="{{ width }}" placeholder="" id="input-width" class="form-control" />*/
/* 											{% if error_width %}*/
/* 										  		<div class="text-danger">{{ error_width }}</div>*/
/* 										  	{% endif %}*/
/* 										</div>*/
/* 										<div class=" col-sm-6">*/
/* 											<input type="text" name="so_sociallogin[so_sociallogin_height]" value="{{ height }}" placeholder="" id="input-height" class="form-control" />*/
/* 											{% if error_height %}*/
/* 										  		<div class="text-danger">{{ error_height }}</div>*/
/* 										  	{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="help-block">Note: Only use for Button Social is Image</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 					            <label class="col-sm-2 control-label" for="input-button">{{ entry_buttonsocial }}</label>*/
/* 								<div class="col-sm-10">*/
/* 								  	<select name="so_sociallogin[so_sociallogin_button]" id="input-button" class="form-control">*/
/* 										<option value="icon" {{ button_social == 'icon' ? 'selected="selected"' : '' }}>Icons</option>*/
/* 										<option value="image" {{ button_social == 'image' ? 'selected="selected"' : '' }}>Image</option>*/
/* 								  	</select>*/
/* 								</div>*/
/* 				            </div>*/
/* 							<div class="form-group">*/
/* 					            <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/* 								<div class="col-sm-10">*/
/* 								  	<select name="so_sociallogin[so_sociallogin_enable]" id="input-status" class="form-control">*/
/* 										{% if status %}*/
/* 											<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 											<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 											<option value="1">{{ text_enabled }}</option>*/
/* 											<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 								  	</select>*/
/* 								</div>*/
/* 				            </div>*/
/* 				            <div class="form-group">*/
/* 					            <label class="col-sm-2 control-label" for="input-popuplogin">Use Popup Login</label>*/
/* 								<div class="col-sm-10">*/
/* 								  	<select name="so_sociallogin[so_sociallogin_popuplogin]" id="input-popuplogin" class="form-control">*/
/* 								  		{% if popuplogin %}*/
/* 											<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 											<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 											<option value="1">{{ text_enabled }}</option>*/
/* 											<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 								  	</select>*/
/* 								</div>*/
/* 				            </div>*/
/* 				        </div>*/
/* 						<div class="tab-pane" id="tab-facbook">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-fbtitle">{{ entry_title }}</label>*/
/* 								<div class="col-sm-10">*/
/* 								  	<input type="text" name="so_sociallogin[so_sociallogin_fbtitle]" value="{{ fbtitle }}" placeholder="{{ entry_title }}" id="input-fbtitle" class="form-control" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 				                <label class="col-sm-2 control-label" for="input-fbimage">{{ entry_image }}</label>*/
/* 				                <div class="col-sm-10">*/
/* 				                  	<a href="" id="thumb-fbimage" data-toggle="image" class="img-thumbnail"><img src="{{ fbthumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/* 				                  	<input type="hidden" name="so_sociallogin[so_sociallogin_fbimage]" value="{{ fbimage }}" id="input-fbimage" />*/
/* 				                </div>*/
/* 				            </div>			  */
/* 							<div class="form-group">*/
/* 						        <label class="col-sm-2 control-label" for="input-fbapikey">{{ entry_apikey }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" name="so_sociallogin[so_sociallogin_fbapikey]" id="fb-apikey" value="{{ fbapikey }}" class="form-control"/>*/
/* 								 	{% if error_fbapikey %}*/
/* 								  		<div class="text-danger">{{ error_fbapikey }}</div>*/
/* 								  	{% endif %}*/
/* 					         	</div>*/
/* 							</div>			*/
/* 						 	<div class="form-group">*/
/* 							    <label class="col-sm-2 control-label" for="input-fbsecretapi">{{ entry_apisecret }}</label>*/
/* 							 	<div class="col-sm-10">*/
/* 								 	<input type="text" name="so_sociallogin[so_sociallogin_fbsecretapi]" id="fb-apisecret" value="{{ fbsecretapi }}" class="form-control"/> */
/* 								 	{% if error_fbsecretapi %}*/
/* 								  		<div class="text-danger">{{ error_fbsecretapi }}</div>*/
/* 								  	{% endif %}*/
/* 							 	</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-fbstatus">{{ entry_status }}</label>*/
/* 								<div class="col-sm-10">*/
/* 								  	<select name="so_sociallogin[so_sociallogin_fbstatus]" id="input-fbstatus" class="form-control">*/
/* 										{% if fbstatus %}*/
/* 											<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 											<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 											<option value="1">{{ text_enabled }}</option>*/
/* 											<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 								  	</select>*/
/* 								</div>*/
/* 						  	</div>*/
/* 						</div>			*/
/* 						<div class="tab-pane" id="tab-twitter">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-twittertitle">{{ entry_title }}</label>*/
/* 								<div class="col-sm-10">*/
/* 					  				<input type="text" name="so_sociallogin[so_sociallogin_twittertitle]" value="{{ twittertitle }}" placeholder="{{ entry_title }}" id="input-twittertitle" class="form-control" />*/
/* 								</div>*/
/* 							</div>				*/
/* 							<div class="form-group">*/
/*                 				<label class="col-sm-2 control-label" for="input-twitimage">{{ entry_image }}</label>*/
/*                 				<div class="col-sm-10">*/
/*                   					<a href="" id="thumb-twitimage" data-toggle="image" class="img-thumbnail"><img src="{{ twiterthumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   					<input type="hidden" name="so_sociallogin[so_sociallogin_twitimage]" value="{{ twitimage }}" id="input-twitimage" />*/
/*                 				</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 		        				<label class="col-sm-2 control-label" for="input-twitapikey">{{ entry_twapikey }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" name="so_sociallogin[so_sociallogin_twitapikey]" id="twit-apikey" value="{{ twitapikey }}" class="form-control"/> */
/* 		           					{% if error_twitapikey %}*/
/* 				  						<div class="text-danger">{{ error_twitapikey }}</div>*/
/* 				  					{% endif %}*/
/* 		         				</div>*/
/* 				 			</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-twitsecretapi">{{ entry_twapisecret }}</label>*/
/* 					 			<div class="col-sm-10">*/
/* 					 				<input type="text" name="so_sociallogin[so_sociallogin_twitsecretapi]" id="twit-apisecret" value="{{ twitsecretapi }}" class="form-control"/> */
/* 					   				{% if error_twitsecret %}*/
/* 				  						<div class="text-danger">{{ error_twitsecret }}</div>*/
/* 				  					{% endif %}*/
/* 					 			</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-twitstatus">{{ entry_status }}</label>*/
/* 								<div class="col-sm-10">*/
/* 					  				<select name="so_sociallogin[so_sociallogin_twitstatus]" id="input-twitstatus" class="form-control">*/
/* 										{% if twitstatus %}*/
/* 											<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 											<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 											<option value="1">{{ text_enabled }}</option>*/
/* 											<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 					  				</select>*/
/* 								</div>*/
/* 			  				</div>*/
/* 						</div>			*/
/* 						<div class="tab-pane" id="tab-google">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-googletitle">{{ entry_title }}</label>*/
/* 								<div class="col-sm-10">*/
/* 								  	<input type="text" name="so_sociallogin[so_sociallogin_googletitle]" value="{{ googletitle }}" placeholder="{{ entry_title }}" id="input-googletitle" class="form-control" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 				                <label class="col-sm-2 control-label" for="input-googleimage">{{ entry_image }}</label>*/
/* 				                <div class="col-sm-10">*/
/* 				                  	<a href="" id="thumb-googleimage" data-toggle="image" class="img-thumbnail"><img src="{{ googlethumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/* 				                  	<input type="hidden" name="so_sociallogin[so_sociallogin_googleimage]" value="{{ googleimage }}" id="input-googleimage" />*/
/* 				                </div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 						        <label class="col-sm-2 control-label" for="input-googleapikey">{{ entry_googleapikey }}</label>								*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" name="so_sociallogin[so_sociallogin_googleapikey]" id="google-apikey" value="{{ googleapikey }}" class="form-control"/>*/
/* 								 	{% if error_googleapikey %}*/
/* 								  		<div class="text-danger">{{ error_googleapikey }}</div>*/
/* 								  	{% endif %}*/
/* 					        	</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-googlesecretapi">{{ entry_googleapisecret }}</label>*/
/* 							 	<div class="col-sm-10">*/
/* 							 		<input type="text" name="so_sociallogin[so_sociallogin_googlesecretapi]" id="google-secret" value="{{ googlesecretapi }}" class="form-control"/>*/
/* 									{% if error_googlesecret %}*/
/* 							  			<div class="text-danger">{{ error_googlesecret }}</div>*/
/* 							  		{% endif %}*/
/* 							 	</div>*/
/* 							</div>			*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-googlestatus">{{ entry_status }}</label>*/
/* 								<div class="col-sm-10">*/
/* 								  	<select name="so_sociallogin[so_sociallogin_googlestatus]" id="input-googlestatus" class="form-control">*/
/* 										{% if googlestatus %}*/
/* 											<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 											<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 											<option value="1">{{ text_enabled }}</option>*/
/* 											<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 								  	</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>			*/
/* 						<div class="tab-pane" id="tab-linkedin">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-linkedintitle">{{ entry_title }}</label>*/
/* 								<div class="col-sm-10">*/
/* 								  	<input type="text" name="so_sociallogin[so_sociallogin_linkedintitle]" value="{{ linkedintitle }}" placeholder="{{ entry_title }}" id="input-linkedintitle" class="form-control" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 				                <label class="col-sm-2 control-label" for="input-linkdinimage">{{ entry_image }}</label>*/
/* 				                <div class="col-sm-10">*/
/* 				                  	<a href="" id="thumb-linkdinimage" data-toggle="image" class="img-thumbnail"><img src="{{ linkdinthumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/* 				                  	<input type="hidden" name="so_sociallogin[so_sociallogin_linkdinimage]" value="{{ linkdinimage }}" id="input-linkdinimage" />*/
/* 				                </div>*/
/* 							</div> 							*/
/* 							<div class="form-group">*/
/* 					        	<label class="col-sm-2 control-label" for="input-linkdinapikey">{{ entry_liapikey }}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" name="so_sociallogin[so_sociallogin_linkdinapikey]" id="linkdin-apikey" value="{{ linkdinapikey }}" class="form-control"/> */
/* 					         		{% if error_linkdinapikey %}*/
/* 							  			<div class="text-danger">{{ error_linkdinapikey }}</div>*/
/* 							  		{% endif %}		  	  */
/* 					         	</div>*/
/* 							</div>						*/
/* 						 	<div class="form-group">*/
/* 						    	<label class="col-sm-2 control-label" for="input-linkdinsecretapi">{{ entry_liapisecret }}</label>*/
/* 							 	<div class="col-sm-10">*/
/* 							 		<input type="text" name="so_sociallogin[so_sociallogin_linkdinsecretapi]" id="linkdin-apisecret" value="{{ linkdinsecretapi }}" class="form-control"/>*/
/* 									{% if error_linkdinsecret %}*/
/* 							  			<div class="text-danger">{{ error_linkdinsecret }}</div>*/
/* 							  		{% endif %}*/
/* 							 	</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-linkstatus">{{ entry_status }}</label>*/
/* 								<div class="col-sm-10">*/
/* 								  	<select name="so_sociallogin[so_sociallogin_linkstatus]" id="input-linkstatus" class="form-control">*/
/* 										{% if linkstatus %}*/
/* 											<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 											<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 											<option value="1">{{ text_enabled }}</option>*/
/* 											<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 								  	</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-introductions">*/
/* 							<h1>How to set up social apps?</h1>*/
/* 							<ul class="nav nav-tabs">*/
/* 								<li class="active"><a href="#facebook" data-toggle="tab" aria-expanded="false"><i class="fa fa-facebook"></i> Facebook</a></li>*/
/* 								<li><a href="#twitter" data-toggle="tab" aria-expanded="false"><i class="fa fa-twitter"></i> Twitter</a></li>*/
/* 								<li><a href="#google" data-toggle="tab" aria-expanded="false"><i class="fa fa-google"></i> Google</a></li>*/
/* 								<li><a href="#linkedin" data-toggle="tab" aria-expanded="false"><i class="fa fa-linkedin"></i> Linkedin</a></li>*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 								<div id="facebook" class="tab-pane active">*/
/*                                     <div class="tab-body">*/
/* 							            <ol>*/
/* 							                <li>Visit facebook developers application page <a href="https://developers.facebook.com/apps" target="_blank">https://developers.facebook.com/apps</a></li>*/
/* 							                <li>Sign in to facebook</li>*/
/* 							                <li>Click Add a New App</li>*/
/* 							                <img src="view/image/so_sociallogin/facebook/1.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Enter information for New App and Click Create App ID button</li>*/
/* 							                <img src="view/image/so_sociallogin/facebook/2.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Enter Security Check and click Submit button</li>*/
/* 							                <img src="view/image/so_sociallogin/facebook/3.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Click Settings on menu left</li>*/
/* 							                <img src="view/image/so_sociallogin/facebook/4.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Fill in the App ID and App Secret in the Social Login settings tab for Facebook</li>*/
/* 							                <img src="view/image/so_sociallogin/facebook/41.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Click Add Platform and select Website</li>*/
/* 							                <img src="view/image/so_sociallogin/facebook/5.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Enter URLs of your website</li>*/
/* 							                <img src="view/image/so_sociallogin/facebook/6.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Click App Review on menu left and change to public for App</li>*/
/* 							                <img src="view/image/so_sociallogin/facebook/7.png" class="img-thumbnail img-responsive">*/
/* 							            </ol>*/
/* 							        </div>*/
/* 							    </div>*/
/* 							    <div id="twitter" class="tab-pane">*/
/* 							    	<div class="tab-body">*/
/* 							    		<ol>*/
/* 							    			<li>Visit twitter app page <a href="https://apps.twitter.com/app/new" target="_blank">https://apps.twitter.com/app/new</a></li>*/
/* 							    			<li>Create a new application by enter information in form</li>*/
/* 							    			<img src="view/image/so_sociallogin/twitter/1.png" class="img-thumbnail img-responsive">*/
/* 							    			<li>Click Create your Twitter application button</li>*/
/* 							    			<li>Go to Key and access tokens and get consumer key and consumer secret.</li>*/
/* 							    			<img src="view/image/so_sociallogin/twitter/2.png" class="img-thumbnail img-responsive">*/
/* 							    			<li>Fill in the Twitter Consumer Key and Twitter Consumer Secret in the Social Login settings tab for Twitter</li>*/
/* 							    			<li>Note: Your account need verified by go to <a href="https://support.twitter.com/articles/20174631" target="_blank">https://support.twitter.com/articles/20174631</a> and follow the instructions</li>*/
/* 							    		</ol>*/
/* 							    	</div>*/
/* 							    </div>*/
/* 							    <div id="google" class="tab-pane">*/
/* 							    	<div class="tab-body">*/
/* 							            <ol>*/
/* 							                <li>Visit the Google Developers console <a href="https://console.developers.google.com" target="_blank">https://console.developers.google.com</a></li>*/
/* 							                <li>Sign in by Google account</li>*/
/* 							                <li>Create a new project by click API Project / Create project</li>*/
/* 							                <img src="view/image/so_sociallogin/google/1.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Enter Project name and click CREATE button</li>*/
/* 							                <img src="view/image/so_sociallogin/google/2.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Then on the left visit credentials and click button Add Credentials</li>*/
/* 							                <img src="view/image/so_sociallogin/google/3.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Click Configure consent screen</li>*/
/* 							                <img src="view/image/so_sociallogin/google/4.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Enter information and click Save button</li>*/
/* 							                <img src="view/image/so_sociallogin/google/5.png" class="img-thumbnail img-responsive">*/
/* 							                <li>*/
/* 							                	Now you are ready to create your web app for signup. Select webapp and input the domain name and redirect url (below) <br />*/
/* 							                	Authorized Javascript origins: You need enter path domain: example: http://domain.com<br />*/
/* 							                	Authorized redirect URIs: You need enter path: example: http://domain.com/index.php?route=extension/module/so_sociallogin/GoogleLogin (for opencart >=2.2.x) or path http://domain.com/index.php?route=module/so_sociallogin/GoogleLogin (for opencart < 2.2.x)*/
/* 							                </li>*/
/* 							                <img src="view/image/so_sociallogin/google/6.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Please fill in the Redirect URIs with the correct url</li>*/
/* 							                <li>Google+ requires the apis to be enabled. Click APIs on the left and find Social APPs Google+ APIs</li>*/
/* 							                <img src="view/image/so_sociallogin/google/7.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Click ENABLE</li>*/
/* 							                <img src="view/image/so_sociallogin/google/8.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Fill in the Client Id and Client Secret in the Social Login settings tab for Google+</li>*/
/* 							                <img src="view/image/so_sociallogin/google/9.png" class="img-thumbnail img-responsive">*/
/* 							                <li>Save and wait for several minutes for the Google api to refresh its data then test the login.</li>*/
/* 							            </ol>*/
/* 							        </div>*/
/* 							    </div>*/
/* 							    <div id="linkedin" class="tab-pane">*/
/* 							    	<div class="tab-body">*/
/* 							            <ol>*/
/* 							    			<li>Visit Linkedin developers page at <a href="http://developer.linkedin.com/" target="_blank">http://developer.linkedin.com/</a></li>*/
/* 							    			<li>Sign in by click icon on top right</li>*/
/* 							    			<li>Click My Apps on menu top</li>*/
/* 							    			<li>Click Create Application button and enter information</li>*/
/* 							    			<img src="view/image/so_sociallogin/linkedin/1.png" class="img-thumbnail img-responsive">*/
/* 							    			<li>*/
/* 							    				Fill in the Client Id and Client Secret in the Social Login settings tab for Linkedin<br />*/
/* 							    				Authorized Redirect URIs: Enter path: http://domain.com/index.php?route=extension/module/so_sociallogin/LinkedinLogin (for opencart >=2.2.x) or path http://domain.com/index.php?route=module/so_sociallogin/LinkedinLogin (for opencart < 2.2.x)*/
/* 							    			</li>*/
/* 							    			<img src="view/image/so_sociallogin/linkedin/2.png" class="img-thumbnail img-responsive">*/
/* 							    		</ol>*/
/* 							    	</div>*/
/* 							    </div>*/
/* 							    <style type="text/css">*/
/* 							    	#tab-introductions ol li {*/
/* 							    		margin: 10px 0;*/
/* 							    	}*/
/* 							    </style>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/*     		</form>*/
/*       	</div>*/
/* 	</div>*/
/* </div>*/
/* {{ footer }}*/
