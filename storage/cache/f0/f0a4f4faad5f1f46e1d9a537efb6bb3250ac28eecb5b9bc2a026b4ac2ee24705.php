<?php

/* extension/module/so_facebook.twig */
class __TwigTemplate_e4ca81a6c4705766a88ee116e987b422e1c4eef973cdc7876cfe4791931f3d28 extends Twig_Template
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
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            // line 21
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t";
        if ((array_key_exists("success", $context) && (isset($context["success"]) ? $context["success"] : null))) {
            // line 26
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 29
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 33
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 35
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 38
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t<li ";
        // line 41
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo "class=\"active\" ";
        }
        echo "> <a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\"> <span class=\"fa fa-plus\"></span> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_add_module"), "method");
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 42
        $context["i"] = 1;
        // line 43
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 44
            echo "\t\t\t\t\t\t\t\t<li role=\"presentation\" ";
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo "\"  >
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 46
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 49
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 50
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t";
        // line 55
        $context["module_row"] = 1;
        // line 56
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                // line 58
                echo "\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 59
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\" class=\"remove btn btn-danger\" ><span><i class=\"fa fa-remove\"></i> ";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_delete"), "method");
                echo "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t<div  id=\"tab-module";
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 65
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 68
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array())) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-head_name\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 76
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 79
            $context["i"] = 0;
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_description[";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][head_name]\" placeholder=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
                echo "\" id=\"input-head-name-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "head_name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array(), "array")) : (""));
                echo "\" class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? (" hide ") : (" first-name"));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 83
                if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" id=\"input-head_name\" placeholder=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "head_name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array(), "array")) : (""));
                    echo "\" name=\"head_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 91
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 92
                echo $this->getAttribute($context["language"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 97
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array())) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-disp_title_module\"> <span data-toggle=\"tooltip\" title=\"";
            // line 103
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 107
            if ($this->getAttribute($context["module"], "disp_title_module", array())) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 109
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 112
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            // line 119
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 123
            if ($this->getAttribute($context["module"], "status", array())) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 125
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 128
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"opencart-tabs\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#like_book_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 140
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_like_book_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#advanced_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 145
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_advanced_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"like_book_option\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-class_suffix\"> <span data-toggle=\"tooltip\" title=\"";
            // line 152
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix"), "method");
            echo " </span> </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_suffix\" value=\"";
            // line 155
            echo $this->getAttribute($context["module"], "class_suffix", array());
            echo "\" id=\"input-class_suffix\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pageid\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 160
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pageid_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pageid"), "method");
            echo " </span> </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"pageid\" value=\"";
            // line 163
            echo $this->getAttribute($context["module"], "pageid", array());
            echo "\" id=\"input-pageid\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin-top: 8px\"><span style=\"color: red\">Ex: 121579357898967</span> / Or Link: <span style=\"color: #003bb3\">https://www.facebook.com/SmartAddons.page/</span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-height\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 169
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
            // line 172
            echo $this->getAttribute($context["module"], "height", array());
            echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 174
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array())) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 180
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
            // line 183
            echo $this->getAttribute($context["module"], "width", array());
            echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 185
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array())) {
                // line 186
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 188
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-stream\">
\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 192
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_stream_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_stream"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 197
            if ($this->getAttribute($context["module"], "stream", array())) {
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"stream\" value=\"1\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"stream\" value=\"1\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 202
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 204
            if ($this->getAttribute($context["module"], "stream", array())) {
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"stream\" value=\"0\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"stream\" value=\"0\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-hide_cover\">
\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 215
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_hide_cover_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_hide_cover"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 220
            if ($this->getAttribute($context["module"], "hide_cover", array())) {
                // line 221
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hide_cover\" value=\"1\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 223
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hide_cover\" value=\"1\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 225
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 227
            if ($this->getAttribute($context["module"], "hide_cover", array())) {
                // line 228
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hide_cover\" value=\"0\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"hide_cover\" value=\"0\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 232
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-small_header\">
\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 238
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_small_header_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_small_header"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 243
            if ($this->getAttribute($context["module"], "small_header", array())) {
                // line 244
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"small_header\" value=\"1\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 246
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"small_header\" value=\"1\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 248
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 250
            if ($this->getAttribute($context["module"], "small_header", array())) {
                // line 251
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"small_header\" value=\"0\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"small_header\" value=\"0\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 255
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-show_facepile\">
\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 261
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_show_facepile_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_show_facepile"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 266
            if ($this->getAttribute($context["module"], "show_facepile", array())) {
                // line 267
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"show_facepile\" value=\"1\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 269
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"show_facepile\" value=\"1\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 271
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 273
            if ($this->getAttribute($context["module"], "show_facepile", array())) {
                // line 274
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"show_facepile\" value=\"0\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 276
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"show_facepile\" value=\"0\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 278
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-bordercolor\"> <span data-toggle=\"tooltip\" title=\"";
            // line 283
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_bordercolor_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_bordercolor"), "method");
            echo " </span> </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bordercolor\" value=\"";
            // line 286
            echo $this->getAttribute($context["module"], "bordercolor", array());
            echo "\" id=\"input-bordercolor\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"advanced_option\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pre_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 294
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"pre_text\" id=\"input-pre_text\" class=\"form-control\">";
            // line 297
            echo $this->getAttribute($context["module"], "pre_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-post_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 302
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"post_text\" id=\"input-post_text\" class=\"form-control\">";
            // line 305
            echo $this->getAttribute($context["module"], "post_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use_cache\">
\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 311
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 316
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 317
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 319
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 321
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 323
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 324
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 328
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-cache_time_form\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cache_time\">
\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 334
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cache_time\" value=\"";
            // line 338
            echo $this->getAttribute($context["module"], "cache_time", array());
            echo "\" id=\"input-cache_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 340
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array())) {
                // line 341
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 343
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 348
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 349
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\"><!--
\t\t\$('#opencart-tabs a:first').tab('show');
\t\t\$('#language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , 
\t\t\t\t_input = \$('#input-head-name-'+opt_select);
\t\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});
\t\tif(\$(\"input[name='use_cache']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('#input-cache_time_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-cache_time_form').show();
\t\t}
\t\t\$(\"input[name='use_cache']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('#input-cache_time_form').hide();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('#input-cache_time_form').show();
\t\t\t}
\t\t});
\t\t\$('.first-name').change(function(){
\t\t\t\$('input[name=\"head-name\"]').val(\$(this).val());
\t\t});
\t\t\$('#input-bordercolor').colpick({
\t\t\tlayout:'hex',
\t\t\tsubmit:0,
\t\t\tcolorScheme:'dark',
\t\t\tonChange:function(hsb,hex,rgb,el,bySetColor) {
\t\t\t\t\$(el).css('border-color','#'+hex);
\t\t\t\t// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
\t\t\t\tif(!bySetColor) \$(el).val(hex);
\t\t\t}
\t\t}).keyup(function(){

\t\t\t\$(this).colpickSetColor(this.value);

\t\t});
\t\tvar this_value_bg = \$('#input-bordercolor').val();
\t\t\$('#input-bordercolor').css('border-left', '25px solid #' + this_value_bg)
\t\t//--></script>
\t\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function (\$) {
\t\t\tvar button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 403
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "</button></div>';
\t\t\tvar button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 404
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> </button></div>';
\t\t\tif(\$('#column-left').hasClass('active')){
\t\t\t\t\$('#column-left #stats').after(button);
\t\t\t}else{
\t\t\t\t\$('#column-left #stats').after(button_min);
\t\t\t}
\t\t\t\$('#button-menu').click(function(){
\t\t\t\t\$('.remove-caching').remove();
\t\t\t\tif(\$(this).parents().find('#column-left').hasClass('active')){
\t\t\t\t\t\$('#column-left #stats').after(button);
\t\t\t\t}else{
\t\t\t\t\t\$('#column-left #stats').after(button_min);
\t\t\t\t}
\t\t\t});
\t\t});
\t\tfunction remove_cache(){
\t\t\tvar success_remove = '";
        // line 420
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
\t\t\t\$.ajax({
\t\t\t\ttype: 'POST',
\t\t\t\turl: '";
        // line 423
        echo (isset($context["linkremove"]) ? $context["linkremove"] : null);
        echo "',
\t\t\t\tdata: {\tis_ajax_cache_lite: 1},
\t\t\t\tsuccess: function () {
\t\t\t\t\tvar html = '<div class=\"alert alert-success cls-remove-cache\"> '+success_remove+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>';
\t\t\t\t\tif(!(\$('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){
\t\t\t\t\t\t\$('.page-header .container-fluid').append(html);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t});
\t\t}
\t</script>
</div>
";
        // line 435
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_facebook.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 435,  928 => 423,  922 => 420,  903 => 404,  897 => 403,  842 => 350,  836 => 349,  834 => 348,  827 => 343,  821 => 341,  819 => 340,  814 => 338,  805 => 334,  797 => 328,  791 => 326,  785 => 324,  783 => 323,  779 => 321,  773 => 319,  767 => 317,  765 => 316,  755 => 311,  746 => 305,  738 => 302,  730 => 297,  722 => 294,  711 => 286,  703 => 283,  696 => 278,  690 => 276,  684 => 274,  682 => 273,  678 => 271,  672 => 269,  666 => 267,  664 => 266,  654 => 261,  646 => 255,  640 => 253,  634 => 251,  632 => 250,  628 => 248,  622 => 246,  616 => 244,  614 => 243,  604 => 238,  596 => 232,  590 => 230,  584 => 228,  582 => 227,  578 => 225,  572 => 223,  566 => 221,  564 => 220,  554 => 215,  546 => 209,  540 => 207,  534 => 205,  532 => 204,  528 => 202,  522 => 200,  516 => 198,  514 => 197,  504 => 192,  498 => 188,  492 => 186,  490 => 185,  485 => 183,  477 => 180,  472 => 177,  466 => 175,  464 => 174,  459 => 172,  451 => 169,  442 => 163,  434 => 160,  426 => 155,  418 => 152,  408 => 145,  400 => 140,  388 => 130,  383 => 128,  378 => 127,  373 => 125,  368 => 124,  366 => 123,  357 => 119,  350 => 114,  345 => 112,  340 => 111,  335 => 109,  330 => 108,  328 => 107,  319 => 103,  314 => 100,  308 => 98,  306 => 97,  302 => 95,  293 => 92,  288 => 91,  284 => 90,  279 => 87,  273 => 86,  265 => 84,  263 => 83,  250 => 82,  247 => 81,  242 => 80,  240 => 79,  232 => 76,  227 => 73,  221 => 71,  219 => 70,  212 => 68,  204 => 65,  197 => 62,  189 => 59,  186 => 58,  183 => 57,  178 => 56,  176 => 55,  170 => 51,  164 => 50,  162 => 49,  156 => 46,  148 => 45,  141 => 44,  136 => 43,  134 => 42,  124 => 41,  118 => 38,  112 => 35,  108 => 33,  101 => 29,  94 => 26,  91 => 25,  83 => 21,  81 => 20,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
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
/* 		{% if error.warning %}*/
/* 		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error.warning }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		{% if success is defined and success %}*/
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_layout }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		{% endif %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ subheading }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">*/
/* 					<div class="row">*/
/* 						<ul class="nav nav-tabs" role="tablist">*/
/* 							<li {% if selectedid == 0 %}class="active" {% endif %}> <a href="{{ link }}"> <span class="fa fa-plus"></span> {{ objlang.get('button_add_module') }}</a></li>*/
/* 							{% set i=1 %}*/
/* 							{% for key, module in moduletabs %}*/
/* 								<li role="presentation" {% if module.module_id == selectedid %}class="active"{% endif %}>*/
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
/* 								<div class="pull-right">*/
/* 									<a href="{{ action }}&delete=1" class="remove btn btn-danger" ><span><i class="fa fa-remove"></i> {{ objlang.get('entry_button_delete') }}</span></a>*/
/* 								</div>*/
/* 								{% endif %}*/
/* 								<div  id="tab-module{{ module_row }}" class="col-sm-12">*/
/* 									<div class="form-group">*/
/* 										<input type="hidden" name="action" id="action" value=""/>*/
/* 										<label class="col-sm-3 control-label" for="input-name"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_name_desc') }}">{{ objlang.get('entry_name') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="name" value="{{ module.name }}" placeholder="{{ objlang.get('entry_name') }}" id="input-name" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.name %}*/
/* 											<div class="text-danger col-sm-12">{{ error.name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-head_name"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_head_name_desc') }}">{{ objlang.get('entry_head_name') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												{% set i = 0 %}*/
/* 												{% for language in languages %}*/
/* 													{% set i = i + 1 %}*/
/* 													<input type="text" name="module_description[{{ language.language_id }}][head_name]" placeholder="{{ objlang.get('entry_head_name') }}" id="input-head-name-{{ language.language_id }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 													{% if i == 1 %}*/
/* 														<input type="hidden" class="form-control" id="input-head_name" placeholder="{{ objlang.get('entry_head_name') }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" name="head_name">*/
/* 													{% endif %}*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 											<div class="col-sm-3">*/
/* 												<select class="form-control" id="language">*/
/* 													{% for language in languages %}*/
/* 													<option value="{{ language.language_id }}">*/
/* 														{{ language.name }}*/
/* 													</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 											{% if error.head_name %}*/
/* 											<div class="text-danger col-sm-12">{{ error.head_name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-3 control-label" for="input-disp_title_module"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_title_module_desc') }}">{{ objlang.get('entry_display_title_module') }} </span></label>*/
/* 									<div class="col-sm-9">*/
/* 										<div class="col-sm-5">*/
/* 											<select name="disp_title_module" id="input-disp_title_module" class="form-control">*/
/* 												{% if module.disp_title_module %}*/
/* 													<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 													<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 												{% else %}*/
/* 													<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 													<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 												{% endif %}*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-3 control-label" for="input-status"><span data-toggle="tooltip" title="{{ objlang.get('entry_status_desc') }}">{{ objlang.get('entry_status') }} </span></label>*/
/* 									<div class="col-sm-9">*/
/* 										<div class="col-sm-5">*/
/* 											<select name="status" id="input-status" class="form-control">*/
/* 												{% if module.status %}*/
/* 													<option value="1" selected="selected">{{ objlang.get('text_enabled') }}</option>*/
/* 													<option value="0">{{ objlang.get('text_disabled') }}</option>*/
/* 												{% else %}*/
/* 													<option value="1">{{ objlang.get('text_enabled') }}</option>*/
/* 													<option value="0" selected="selected">{{ objlang.get('text_disabled') }}</option>*/
/* 												{% endif %}*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="tab-pane">*/
/* 								<ul class="nav nav-tabs" id="opencart-tabs">*/
/* 									<li>*/
/* 										<a href="#like_book_option" data-toggle="tab">*/
/* 											{{ objlang.get('entry_like_book_option') }}*/
/* 										</a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="#advanced_option" data-toggle="tab">*/
/* 											{{ objlang.get('entry_advanced_option') }}*/
/* 										</a>*/
/* 									</li>*/
/* 								</ul>*/
/* 								<div class="tab-content">								*/
/* 									<div class="tab-pane" id="like_book_option">*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-class_suffix"> <span data-toggle="tooltip" title="{{ objlang.get('entry_class_suffix_desc') }}">{{ objlang.get('entry_class_suffix') }} </span> </label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<input type="text" name="class_suffix" value="{{ module.class_suffix }}" id="input-class_suffix" class="form-control" />*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-pageid"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_pageid_desc') }}">{{ objlang.get('entry_pageid') }} </span> </label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<input type="text" name="pageid" value="{{ module.pageid }}" id="input-pageid" class="form-control" />*/
/* 												</div>*/
/* 												<div style="margin-top: 8px"><span style="color: red">Ex: 121579357898967</span> / Or Link: <span style="color: #003bb3">https://www.facebook.com/SmartAddons.page/</span></div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-height"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_height_desc') }}">{{ objlang.get('entry_height') }}</span></label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<input type="text" name="height" value="{{ module.height }}" id="input-height" class="form-control" />*/
/* 												</div>*/
/* 												{% if error.height %}*/
/* 												<div class="text-danger col-sm-12">{{ error.height }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-width"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_width_desc') }}">{{ objlang.get('entry_width') }}</span></label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<input type="text" name="width" value="{{ module.width }}" id="input-width" class="form-control" />*/
/* 												</div>*/
/* 												{% if error.width %}*/
/* 												<div class="text-danger col-sm-12">{{ error.width }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-stream">*/
/* 												<span data-toggle="tooltip" title="{{ objlang.get('entry_stream_desc') }}">{{ objlang.get('entry_stream') }}</span>*/
/* 											</label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<label class="radio-inline">*/
/* 														{% if module.stream %}*/
/* 															<input type="radio" name="stream" value="1" checked="checked" />{{ objlang.get('text_yes') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="stream" value="1" />{{ objlang.get('text_yes') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 													<label class="radio-inline">*/
/* 														{% if module.stream %}*/
/* 															<input type="radio" name="stream" value="0" />{{ objlang.get('text_no') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="stream" value="0" checked="checked" />{{ objlang.get('text_no') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-hide_cover">*/
/* 												<span data-toggle="tooltip" title="{{ objlang.get('entry_hide_cover_desc') }}">{{ objlang.get('entry_hide_cover') }}</span>*/
/* 											</label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<label class="radio-inline">*/
/* 														{% if module.hide_cover %}*/
/* 															<input type="radio" name="hide_cover" value="1" checked="checked" />{{ objlang.get('text_yes') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="hide_cover" value="1" />{{ objlang.get('text_yes') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 													<label class="radio-inline">*/
/* 														{% if module.hide_cover %}*/
/* 															<input type="radio" name="hide_cover" value="0" />{{ objlang.get('text_no') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="hide_cover" value="0" checked="checked" />{{ objlang.get('text_no') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-small_header">*/
/* 												<span data-toggle="tooltip" title="{{ objlang.get('entry_small_header_desc') }}">{{ objlang.get('entry_small_header') }}</span>*/
/* 											</label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<label class="radio-inline">*/
/* 														{% if module.small_header %}*/
/* 															<input type="radio" name="small_header" value="1" checked="checked" />{{ objlang.get('text_yes') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="small_header" value="1" />{{ objlang.get('text_yes') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 													<label class="radio-inline">*/
/* 														{% if module.small_header %}*/
/* 															<input type="radio" name="small_header" value="0" />{{ objlang.get('text_no') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="small_header" value="0" checked="checked" />{{ objlang.get('text_no') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-show_facepile">*/
/* 												<span data-toggle="tooltip" title="{{ objlang.get('entry_show_facepile_desc') }}">{{ objlang.get('entry_show_facepile') }}</span>*/
/* 											</label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<label class="radio-inline">*/
/* 														{% if module.show_facepile %}*/
/* 															<input type="radio" name="show_facepile" value="1" checked="checked" />{{ objlang.get('text_yes') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="show_facepile" value="1" />{{ objlang.get('text_yes') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 													<label class="radio-inline">*/
/* 														{% if module.show_facepile %}*/
/* 															<input type="radio" name="show_facepile" value="0" />{{ objlang.get('text_no') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="show_facepile" value="0" checked="checked" />{{ objlang.get('text_no') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-bordercolor"> <span data-toggle="tooltip" title="{{ objlang.get('entry_bordercolor_desc') }}">{{ objlang.get('entry_bordercolor') }} </span> </label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-2">*/
/* 													<input type="text" name="bordercolor" value="{{ module.bordercolor }}" id="input-bordercolor" class="form-control" />*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								*/
/* 									<div class="tab-pane" id="advanced_option">*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-pre_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_pre_text_desc') }}">{{ objlang.get('entry_pre_text') }}</span></label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<textarea name="pre_text" id="input-pre_text" class="form-control">{{ module.pre_text }}</textarea>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-post_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_post_text_desc') }}">{{ objlang.get('entry_post_text') }}</span></label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<textarea name="post_text" id="input-post_text" class="form-control">{{ module.post_text }}</textarea>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="col-sm-3 control-label" for="input-use_cache">*/
/* 												<span data-toggle="tooltip" title="{{ objlang.get('entry_use_cache_desc') }}">{{ objlang.get('entry_use_cache') }}</span>*/
/* 											</label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<label class="radio-inline">*/
/* 														{% if module.use_cache %}*/
/* 															<input type="radio" name="use_cache" value="1" checked="checked" />{{ objlang.get('text_yes') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="use_cache" value="1" />{{ objlang.get('text_yes') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 													<label class="radio-inline">*/
/* 														{% if module.use_cache %}*/
/* 															<input type="radio" name="use_cache" value="0" />{{ objlang.get('text_no') }}*/
/* 														{% else %}*/
/* 															<input type="radio" name="use_cache" value="0" checked="checked" />{{ objlang.get('text_no') }}*/
/* 														{% endif %}*/
/* 													</label>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group" id="input-cache_time_form">*/
/* 											<label class="col-sm-3 control-label" for="input-cache_time">*/
/* 												<span data-toggle="tooltip" title="{{ objlang.get('entry_cache_time_desc') }}">{{ objlang.get('entry_cache_time') }}</span>*/
/* 											</label>*/
/* 											<div class="col-sm-9">*/
/* 												<div class="col-sm-5">*/
/* 													<input type="text" name="cache_time" value="{{ module.cache_time }}" id="input-cache_time" class="form-control" />*/
/* 												</div>*/
/* 												{% if error.cache_time %}*/
/* 												<div class="text-danger col-sm-12">{{ error.cache_time }}</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% set module_row = module_row + 1 %}*/
/* 						{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<script type="text/javascript"><!--*/
/* 		$('#opencart-tabs a:first').tab('show');*/
/* 		$('#language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , */
/* 				_input = $('#input-head-name-'+opt_select);*/
/* 			$('[id^="input-head-name-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* 		if($("input[name='use_cache']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-cache_time_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-cache_time_form').show();*/
/* 		}*/
/* 		$("input[name='use_cache']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('#input-cache_time_form').hide();*/
/* 			}else*/
/* 			{*/
/* 				$('#input-cache_time_form').show();*/
/* 			}*/
/* 		});*/
/* 		$('.first-name').change(function(){*/
/* 			$('input[name="head-name"]').val($(this).val());*/
/* 		});*/
/* 		$('#input-bordercolor').colpick({*/
/* 			layout:'hex',*/
/* 			submit:0,*/
/* 			colorScheme:'dark',*/
/* 			onChange:function(hsb,hex,rgb,el,bySetColor) {*/
/* 				$(el).css('border-color','#'+hex);*/
/* 				// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.*/
/* 				if(!bySetColor) $(el).val(hex);*/
/* 			}*/
/* 		}).keyup(function(){*/
/* */
/* 			$(this).colpickSetColor(this.value);*/
/* */
/* 		});*/
/* 		var this_value_bg = $('#input-bordercolor').val();*/
/* 		$('#input-bordercolor').css('border-left', '25px solid #' + this_value_bg)*/
/* 		//--></script>*/
/* 		<script type="text/javascript">*/
/* 		jQuery(document).ready(function ($) {*/
/* 			var button = '<div class="remove-caching" style="margin-left: 15px"><button type="button" onclick="remove_cache()" title="{{ objlang.get('entry_button_clear_cache') }}" class="btn btn-danger"><i class="fa fa-remove"></i> {{ objlang.get('entry_button_clear_cache') }}</button></div>';*/
/* 			var button_min = '<div class="remove-caching" style="margin-left: 7px"><button type="button" onclick="remove_cache()" title="{{ objlang.get('entry_button_clear_cache') }}" class="btn btn-danger"><i class="fa fa-remove"></i> </button></div>';*/
/* 			if($('#column-left').hasClass('active')){*/
/* 				$('#column-left #stats').after(button);*/
/* 			}else{*/
/* 				$('#column-left #stats').after(button_min);*/
/* 			}*/
/* 			$('#button-menu').click(function(){*/
/* 				$('.remove-caching').remove();*/
/* 				if($(this).parents().find('#column-left').hasClass('active')){*/
/* 					$('#column-left #stats').after(button);*/
/* 				}else{*/
/* 					$('#column-left #stats').after(button_min);*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 		function remove_cache(){*/
/* 			var success_remove = '{{ success_remove }}';*/
/* 			$.ajax({*/
/* 				type: 'POST',*/
/* 				url: '{{ linkremove }}',*/
/* 				data: {	is_ajax_cache_lite: 1},*/
/* 				success: function () {*/
/* 					var html = '<div class="alert alert-success cls-remove-cache"> '+success_remove+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>';*/
/* 					if(!($('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){*/
/* 						$('.page-header .container-fluid').append(html);*/
/* 					}*/
/* 				},*/
/* 			});*/
/* 		}*/
/* 	</script>*/
/* </div>*/
/* {{ footer }}*/
