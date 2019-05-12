<?php

/* extension/module/so_facebook_message.twig */
class __TwigTemplate_94336f20ffaa2f68a0510e89135ef017816700b2b8fbfd44660c33b17cf11be8 extends Twig_Template
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
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-featured\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo "</button>
\t\t\t\t<a class=\"btn btn-success\" onclick=\"\$('#action').val('save_edit');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "\" ><i class=\"fa fa-pencil-square-o\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "</a>
\t\t\t\t<a class=\"btn btn-info\" onclick=\"\$('#action').val('save_new');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "\" ><i class=\"fa fa-book\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "</a>
\t\t\t\t<a href=\"";
        // line 9
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo "</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 11
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "heading_title_so"), "method");
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 20
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array(), "any", true, true)) {
            // line 21
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t
\t\t";
        // line 26
        if ((array_key_exists("success", $context) && (isset($context["success"]) ? $context["success"] : null))) {
            // line 27
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 30
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 34
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 37
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 40
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul class=\"col-sm-12 nav nav-tabs\" role=\"tablist\" style=\"padding-left: 15px;\">
\t\t\t\t\t\t\t<li ";
        // line 44
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo "class=\"active\" ";
        }
        echo "> <a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\"> <span class=\"fa fa-plus\"></span> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_add_module"), "method");
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 45
        $context["i"] = 1;
        // line 46
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 47
            echo "\t\t\t\t\t\t\t\t<li role=\"presentation\" ";
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo "\"  >
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 49
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 52
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 53
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t";
        // line 58
        $context["module_row"] = 1;
        // line 59
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 62
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\" class=\"remove btn btn-danger\" ><span><i class=\"fa fa-remove\"></i> ";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_delete"), "method");
                echo "</span></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t<div id=\"tab-module";
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 67
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 70
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 72
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array(), "any", true, true)) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><b style=\"font-weight:bold; color:#f00\">*</b><span data-toggle=\"tooltip\" title=\"";
            // line 78
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            if ($this->getAttribute($context["module"], "status", array())) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 84
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 87
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-position\"><span data-toggle=\"tooltip\" title=\"";
            // line 94
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_position_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_position"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"position\" id=\"input-position\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"left-bottom\" ";
            // line 98
            echo ((($this->getAttribute($context["module"], "position", array()) == "left-bottom")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_left_bottom"), "method");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"right-bottom\" ";
            // line 99
            echo ((($this->getAttribute($context["module"], "position", array()) == "right-bottom")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_right_bottom"), "method");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 105
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
            // line 108
            echo $this->getAttribute($context["module"], "width", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width"), "method");
            echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 110
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array(), "any", true, true)) {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-height\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 116
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
            // line 119
            echo $this->getAttribute($context["module"], "height", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height"), "method");
            echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 121
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array(), "any", true, true)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-style\"><span data-toggle=\"tooltip\" title=\"";
            // line 127
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_style_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_style"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"button_style\" id=\"input-style\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"default\" ";
            // line 131
            echo ((($this->getAttribute($context["module"], "button_style", array()) == "default")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_default"), "method");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"metro\" ";
            // line 132
            echo ((($this->getAttribute($context["module"], "button_style", array()) == "metro")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_metro"), "method");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"icon\" ";
            // line 133
            echo ((($this->getAttribute($context["module"], "button_style", array()) == "icon")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_icon"), "method");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-style\">";
            // line 139
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_preview"), "method");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t   \t<div class=\"chat-panel-default\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t              \t<div class=\"chat-content\">
\t\t\t\t\t\t\t\t\t                  \t<img class=\"online\" src=\"../catalog/view/theme/default/image/so_facebook_message/da.png\">Message us on Facebook!
\t\t\t\t\t\t\t\t\t               \t</div>
\t\t\t\t\t\t\t\t          \t\t</div>
\t\t\t\t\t\t\t\t\t           \t<div class=\"chat-panel-icon\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t              \t<div class=\"chat-content-icon\">
\t\t\t\t\t\t\t\t\t                  \t<img  src=\"../catalog/view/theme/default/image/so_facebook_message/fbmessenger.svg\" style=\"width:50px;\">
\t\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t\t\t\t\t\t          \t</div>
\t\t\t\t\t\t\t\t\t          \t<div class=\"chat-panel-metro\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t              \t<div class=\"chat-content-metro\">
\t\t\t\t\t\t\t\t\t                  \t<a href=\"javascript:void(0)\" class=\"fbkMetroStyleBtn\"><span></span>Message us on Facebook!</a>
\t\t\t\t\t\t\t\t\t              \t</div>
\t\t\t\t\t\t\t\t\t          \t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-widget-text\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 161
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_widget_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_widget_text"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 164
            $context["i"] = 0;
            // line 165
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_description[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][widget_text]\" placeholder=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_widget_text"), "method");
                echo "\" id=\"input-widget-text-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "widget_text", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "widget_text", array())) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 168
                if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" id=\"input-widget_text\" placeholder=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_widget_text"), "method");
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "widget_text", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "widget_text", array())) : (""));
                    echo "\" name=\"widget_text\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 180
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "widget_text", array(), "any", true, true)) {
                // line 181
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "widget_text", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 183
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-page-url\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 186
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_page_url_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_page_url"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"page_url\" value=\"";
            // line 189
            echo $this->getAttribute($context["module"], "page_url", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_page_url"), "method");
            echo "\" id=\"input-page-url\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 191
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "page_url", array(), "any", true, true)) {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "page_url", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tabs\"><span data-toggle=\"tooltip\" title=\"";
            // line 197
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tabs_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tabs"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"tabs\" id=\"input-tabs\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"messages\" ";
            // line 201
            echo ((($this->getAttribute($context["module"], "tabs", array()) == "messages")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_messages"), "method");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"timeline\" ";
            // line 202
            echo ((($this->getAttribute($context["module"], "tabs", array()) == "timeline")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_timeline"), "method");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"events\" ";
            // line 203
            echo ((($this->getAttribute($context["module"], "tabs", array()) == "events")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_events"), "method");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-small_header\"><span data-toggle=\"tooltip\" title=\"";
            // line 209
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_small_header_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_small_header"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"><input id=\"input-small_header\" type=\"checkbox\" name=\"small_header\" value=\"1\" ";
            // line 212
            echo ((($this->getAttribute($context["module"], "small_header", array()) == 1)) ? ("checked=\"checked\"") : (""));
            echo " /></label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-hide_cover\"><span data-toggle=\"tooltip\" title=\"";
            // line 217
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_hide_cover_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_hide_cover"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"><input id=\"input-hide_cover\" type=\"checkbox\" name=\"hide_cover\" value=\"1\" ";
            // line 220
            echo ((($this->getAttribute($context["module"], "hide_cover", array()) == 1)) ? ("checked=\"checked\"") : (""));
            echo " /></label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-show_facepile\"><span data-toggle=\"tooltip\" title=\"";
            // line 225
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_show_facepile_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_show_facepile"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\"><input id=\"input-show_facepile\" type=\"checkbox\" name=\"show_facepile\" value=\"1\" ";
            // line 228
            echo ((($this->getAttribute($context["module"], "show_facepile", array()) == 1)) ? ("checked=\"checked\"") : (""));
            echo " /></label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 233
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 234
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
\t\$('#language').change(function(){
\t\tvar that = \$(this),
\t\t\topt_select = \$('option:selected', that).val(),
\t\t\t_input = \$('#input-widget-text-'+opt_select);
\t\t\$('[id^=\"input-widget-text-\"]').addClass('hide');
\t\t_input.removeClass('hide');
\t});

\t\$('.first-name').change(function(){
\t\t\$('input[name=\"widget_text\"]').val(\$(this).val());
\t});

\tvar \$stylePicker = \$('select[name=\"button_style\"]');
    var \$defaultStyle = \$('.chat-panel-default');
    var \$metroStyle = \$('.chat-panel-metro');
    var \$messengerIcon = \$('.chat-panel-icon');
 \tif (\$stylePicker.val() === 'default') {
        \$defaultStyle.show();
        \$metroStyle.hide(); 
        \$messengerIcon.hide();
  \t} else if (\$stylePicker.val() === 'icon') {
        \$defaultStyle.hide();
        \$metroStyle.hide(); 
        \$messengerIcon.show();
  \t} else if(\$stylePicker.val() === 'metro'){
        \$defaultStyle.hide();
        \$metroStyle.show(); 
        \$messengerIcon.hide();
  \t}   
   
   \t\$stylePicker.change(function(){
        if (\$stylePicker.val() === 'default') {
            \$defaultStyle.fadeIn(300);
            \$metroStyle.hide(); 
            \$messengerIcon.hide();  
            
        } else if(\$stylePicker.val() === 'icon') {
            \$defaultStyle.hide();
            \$metroStyle.hide(); 
            \$messengerIcon.fadeIn(300); 
        } else if(\$stylePicker.val() === 'metro'){
            \$defaultStyle.hide();
            \$metroStyle.fadeIn(300); 
            \$messengerIcon.hide();
        }
    });
</script>
";
        // line 290
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_facebook_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 290,  612 => 235,  606 => 234,  604 => 233,  596 => 228,  588 => 225,  580 => 220,  572 => 217,  564 => 212,  556 => 209,  545 => 203,  539 => 202,  533 => 201,  524 => 197,  519 => 194,  513 => 192,  511 => 191,  504 => 189,  496 => 186,  491 => 183,  485 => 181,  483 => 180,  479 => 178,  468 => 176,  464 => 175,  459 => 172,  453 => 171,  445 => 169,  443 => 168,  430 => 167,  427 => 166,  422 => 165,  420 => 164,  412 => 161,  387 => 139,  376 => 133,  370 => 132,  364 => 131,  355 => 127,  350 => 124,  344 => 122,  342 => 121,  335 => 119,  327 => 116,  322 => 113,  316 => 111,  314 => 110,  307 => 108,  299 => 105,  288 => 99,  282 => 98,  273 => 94,  266 => 89,  261 => 87,  256 => 86,  251 => 84,  246 => 83,  244 => 82,  235 => 78,  230 => 75,  224 => 73,  222 => 72,  215 => 70,  207 => 67,  201 => 65,  193 => 62,  190 => 61,  187 => 60,  182 => 59,  180 => 58,  174 => 54,  168 => 53,  166 => 52,  160 => 49,  152 => 48,  145 => 47,  140 => 46,  138 => 45,  128 => 44,  121 => 40,  115 => 37,  110 => 34,  103 => 30,  96 => 27,  94 => 26,  91 => 25,  83 => 21,  81 => 20,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form-featured" data-toggle="tooltip" title="{{ objlang.get('entry_button_save') }}" class="btn btn-primary"><i class="fa fa-save"></i> {{ objlang.get('entry_button_save') }}</button>*/
/* 				<a class="btn btn-success" onclick="$('#action').val('save_edit');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_edit') }}" ><i class="fa fa-pencil-square-o"></i> {{ objlang.get('entry_button_save_and_edit') }}</a>*/
/* 				<a class="btn btn-info" onclick="$('#action').val('save_new');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_new') }}" ><i class="fa fa-book"></i>  {{ objlang.get('entry_button_save_and_new') }}</a>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ objlang.get('entry_button_cancel') }}" class="btn btn-danger"><i class="fa fa-reply"></i>  {{ objlang.get('entry_button_cancel') }}</a>*/
/* 			</div>*/
/* 			<h1>{{ objlang.get('heading_title_so') }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error.warning is defined %}*/
/* 		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error.warning }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		*/
/* 		{% if success is defined and success %}*/
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_layout }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* */
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ subheading }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">*/
/* 					<input type="hidden" name="action" id="action" value=""/>*/
/* 					<div class="row">*/
/* 						<ul class="col-sm-12 nav nav-tabs" role="tablist" style="padding-left: 15px;">*/
/* 							<li {% if selectedid == 0 %}class="active" {% endif %}> <a href="{{ link }}"> <span class="fa fa-plus"></span> {{ objlang.get('button_add_module') }}</a></li>*/
/* 							{% set i=1 %}*/
/* 							{% for key, module in moduletabs %}*/
/* 								<li role="presentation" {% if module.module_id == selectedid %} class="active" {% endif %}>*/
/* 									<a href="{{ link }}&module_id={{ module.module_id }}" aria-controls="bannermodule-{{ key }}"  >*/
/* 										<span class="fa fa-pencil"></span> {{ module.name }}*/
/* 									</a>*/
/* 								</li>*/
/* 								{% set i = i + 1 %}*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* 							{% set module_row = 1 %}*/
/* 							{% for module in modules %}*/
/* 								{% if selectedid %}*/
/* 									<div class="pull-right">*/
/* 										<a href="{{ action }}&delete=1" class="remove btn btn-danger" ><span><i class="fa fa-remove"></i> {{ objlang.get('entry_button_delete') }}</span></a>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								<div id="tab-module{{ module_row }}" class="col-sm-12">*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-name"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_name_desc') }}">{{ objlang.get('entry_name') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="name" value="{{ module.name }}" placeholder="{{ objlang.get('entry_name') }}" id="input-name" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.name is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-status"><b style="font-weight:bold; color:#f00">*</b><span data-toggle="tooltip" title="{{ objlang.get('entry_status_desc') }}">{{ objlang.get('entry_status') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="status" id="input-status" class="form-control">*/
/* 													{% if module.status %}*/
/* 														<option value="1" selected="selected">{{ objlang.get('text_enabled') }}</option>*/
/* 														<option value="0">{{ objlang.get('text_disabled') }}</option>*/
/* 													{% else %}*/
/* 														<option value="1">{{ objlang.get('text_enabled') }}</option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_disabled') }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-position"><span data-toggle="tooltip" title="{{ objlang.get('entry_position_desc') }}">{{ objlang.get('entry_position') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="position" id="input-position" class="form-control">*/
/* 													<option value="left-bottom" {{ module.position == 'left-bottom' ? 'selected="selected"' : '' }}>{{ objlang.get('text_left_bottom') }}</option>*/
/* 													<option value="right-bottom" {{ module.position == 'right-bottom' ? 'selected="selected"' : '' }}>{{ objlang.get('text_right_bottom') }}</option>*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-width"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_width_desc') }}">{{ objlang.get('entry_width') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="width" value="{{ module.width }}" placeholder="{{ objlang.get('entry_width') }}" id="input-width" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.width is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.width }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-height"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_height_desc') }}">{{ objlang.get('entry_height') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="height" value="{{ module.height }}" placeholder="{{ objlang.get('entry_height') }}" id="input-height" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.height is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.height }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-style"><span data-toggle="tooltip" title="{{ objlang.get('entry_button_style_desc') }}">{{ objlang.get('entry_button_style') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="button_style" id="input-style" class="form-control">*/
/* 													<option value="default" {{ module.button_style == 'default' ? 'selected="selected"' : '' }}>{{ objlang.get('text_default') }}</option>*/
/* 													<option value="metro" {{ module.button_style == 'metro' ? 'selected="selected"' : '' }}>{{ objlang.get('text_metro') }}</option>*/
/* 													<option value="icon" {{ module.button_style == 'icon' ? 'selected="selected"' : '' }}>{{ objlang.get('text_icon') }}</option>*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-style">{{ objlang.get('entry_button_preview') }}</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 											   	<div class="chat-panel-default" style="display:none">*/
/* 									              	<div class="chat-content">*/
/* 									                  	<img class="online" src="../catalog/view/theme/default/image/so_facebook_message/da.png">Message us on Facebook!*/
/* 									               	</div>*/
/* 								          		</div>*/
/* 									           	<div class="chat-panel-icon" style="display:none">*/
/* 									              	<div class="chat-content-icon">*/
/* 									                  	<img  src="../catalog/view/theme/default/image/so_facebook_message/fbmessenger.svg" style="width:50px;">*/
/* 									              	</div>*/
/* 									          	</div>*/
/* 									          	<div class="chat-panel-metro" style="display:none">*/
/* 									              	<div class="chat-content-metro">*/
/* 									                  	<a href="javascript:void(0)" class="fbkMetroStyleBtn"><span></span>Message us on Facebook!</a>*/
/* 									              	</div>*/
/* 									          	</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-widget-text"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_widget_text_desc') }}">{{ objlang.get('entry_widget_text') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												{% set i = 0 %}*/
/* 												{% for language in languages %}*/
/* 													{% set i = i + 1 %}*/
/* 													<input type="text" name="module_description[{{ language.language_id }}][widget_text]" placeholder="{{ objlang.get('entry_widget_text') }}" id="input-widget-text-{{ language.language_id }}" value="{{ module_description[language.language_id].widget_text is defined ? module_description[language.language_id].widget_text : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 													{% if i == 1 %}*/
/* 													<input type="hidden" class="form-control" id="input-widget_text" placeholder="{{ objlang.get('entry_widget_text') }}" value="{{ module_description[language.language_id].widget_text is defined ? module_description[language.language_id].widget_text : '' }}" name="widget_text" />*/
/* 													{% endif %}*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 											<div class="col-sm-3">*/
/* 												<select  class="form-control" id="language">*/
/* 													{% for language in languages %}*/
/* 														<option value="{{ language.language_id }}">{{ language.name }}</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 											{% if error.widget_text is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.widget_text }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-page-url"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_page_url_desc') }}">{{ objlang.get('entry_page_url') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-8">*/
/* 												<input type="text" name="page_url" value="{{ module.page_url }}" placeholder="{{ objlang.get('entry_page_url') }}" id="input-page-url" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.page_url is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.page_url }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-tabs"><span data-toggle="tooltip" title="{{ objlang.get('entry_tabs_desc') }}">{{ objlang.get('entry_tabs') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="tabs" id="input-tabs" class="form-control">*/
/* 													<option value="messages" {{ module.tabs == 'messages' ? 'selected="selected"' : '' }}>{{ objlang.get('text_messages') }}</option>*/
/* 													<option value="timeline" {{ module.tabs == 'timeline' ? 'selected="selected"' : '' }}>{{ objlang.get('text_timeline') }}</option>*/
/* 													<option value="events" {{ module.tabs == 'events' ? 'selected="selected"' : '' }}>{{ objlang.get('text_events') }}</option>*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-small_header"><span data-toggle="tooltip" title="{{ objlang.get('entry_small_header_desc') }}">{{ objlang.get('entry_small_header') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="control-label"><input id="input-small_header" type="checkbox" name="small_header" value="1" {{ module.small_header == 1 ? 'checked="checked"' : '' }} /></label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-hide_cover"><span data-toggle="tooltip" title="{{ objlang.get('entry_hide_cover_desc') }}">{{ objlang.get('entry_hide_cover') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="control-label"><input id="input-hide_cover" type="checkbox" name="hide_cover" value="1" {{ module.hide_cover == 1 ? 'checked="checked"' : '' }} /></label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-show_facepile"><span data-toggle="tooltip" title="{{ objlang.get('entry_show_facepile_desc') }}">{{ objlang.get('entry_show_facepile') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="control-label"><input id="input-show_facepile" type="checkbox" name="show_facepile" value="1" {{ module.show_facepile == 1 ? 'checked="checked"' : '' }} /></label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								{% set module_row = module_row + 1 %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	$('#language').change(function(){*/
/* 		var that = $(this),*/
/* 			opt_select = $('option:selected', that).val(),*/
/* 			_input = $('#input-widget-text-'+opt_select);*/
/* 		$('[id^="input-widget-text-"]').addClass('hide');*/
/* 		_input.removeClass('hide');*/
/* 	});*/
/* */
/* 	$('.first-name').change(function(){*/
/* 		$('input[name="widget_text"]').val($(this).val());*/
/* 	});*/
/* */
/* 	var $stylePicker = $('select[name="button_style"]');*/
/*     var $defaultStyle = $('.chat-panel-default');*/
/*     var $metroStyle = $('.chat-panel-metro');*/
/*     var $messengerIcon = $('.chat-panel-icon');*/
/*  	if ($stylePicker.val() === 'default') {*/
/*         $defaultStyle.show();*/
/*         $metroStyle.hide(); */
/*         $messengerIcon.hide();*/
/*   	} else if ($stylePicker.val() === 'icon') {*/
/*         $defaultStyle.hide();*/
/*         $metroStyle.hide(); */
/*         $messengerIcon.show();*/
/*   	} else if($stylePicker.val() === 'metro'){*/
/*         $defaultStyle.hide();*/
/*         $metroStyle.show(); */
/*         $messengerIcon.hide();*/
/*   	}   */
/*    */
/*    	$stylePicker.change(function(){*/
/*         if ($stylePicker.val() === 'default') {*/
/*             $defaultStyle.fadeIn(300);*/
/*             $metroStyle.hide(); */
/*             $messengerIcon.hide();  */
/*             */
/*         } else if($stylePicker.val() === 'icon') {*/
/*             $defaultStyle.hide();*/
/*             $metroStyle.hide(); */
/*             $messengerIcon.fadeIn(300); */
/*         } else if($stylePicker.val() === 'metro'){*/
/*             $defaultStyle.hide();*/
/*             $metroStyle.fadeIn(300); */
/*             $messengerIcon.hide();*/
/*         }*/
/*     });*/
/* </script>*/
/* {{ footer }}*/
