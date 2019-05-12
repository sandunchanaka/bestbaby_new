<?php

/* extension/module/so_listing_tabs.twig */
class __TwigTemplate_2512f7242b34f265b3d838b711dddd1a19f7830f4f9f3c6134c30b038f2b23a8 extends Twig_Template
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
        echo "    \t
    \t<div class=\"panel panel-default\">
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
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<ul class=\"col-sm-12 nav nav-tabs\" role=\"tablist\" style=\"padding-left: 15px;\">
\t\t\t\t\t\t\t<li ";
        // line 43
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo "class=\"active\" ";
        }
        echo "> <a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo "\"> <span class=\"fa fa-plus\"></span> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_add_module"), "method");
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 44
        $context["i"] = 1;
        // line 45
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<li role=\"presentation\" ";
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo "\"  >
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 48
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 51
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 52
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
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
            echo "\t\t\t\t\t\t\t\t<div  id=\"tab-module";
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 68
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 71
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 73
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array(), "any", true, true)) {
                // line 74
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-head_name\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 79
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            $context["i"] = 0;
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 85
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
                // line 86
                if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" id=\"input-head_name\" placeholder=\"";
                    echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
                    echo "\" value=\"";
                    echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array", false, true), "head_name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array(), "array")) : (""));
                    echo "\" name=\"head_name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 94
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
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 98
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array(), "any", true, true)) {
                // line 99
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-disp_title_module\"> <span data-toggle=\"tooltip\" title=\"";
            // line 104
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 108
            if ($this->getAttribute($context["module"], "disp_title_module", array())) {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 110
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 113
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            // line 120
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 124
            if ($this->getAttribute($context["module"], "status", array())) {
                // line 125
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 126
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 129
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 131
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_module\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#module\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 141
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_module"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#source_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 146
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#tabs_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 151
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tabs_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#items_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 156
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_items_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#image_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 161
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_image_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#effect_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 166
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#advanced_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 171
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_advanced_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"module\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-store_layout\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_store_layout_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_store_layout"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"store_layout\" id=\"input-store_layout\" class=\"form-control\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["store_layouts"]) ? $context["store_layouts"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 184
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "store_layout", array()))) ? ("selected") : (""));
                // line 185
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-class_suffix\"> <span data-toggle=\"tooltip\" title=\"";
            // line 195
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix"), "method");
            echo " </span> </label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_suffix\" value=\"";
            // line 198
            echo $this->getAttribute($context["module"], "class_suffix", array());
            echo "\" id=\"input-class_suffix\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-open_link\"> <span data-toggle=\"tooltip\" title=\"";
            // line 203
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_open_link_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_open_link"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"item_link_target\" id=\"input-open_link\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["item_link_targets"]) ? $context["item_link_targets"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 208
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "item_link_target", array()))) ? ("selected") : (""));
                // line 209
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_1200\"> <span data-toggle=\"tooltip\" title=\"";
            // line 216
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column0_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column0\" id=\"input-column_1200\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 221
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column0", array()))) ? ("selected") : (""));
                // line 222
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_992_1199\"><span data-toggle=\"tooltip\" title=\"";
            // line 229
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column1_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column1\" id=\"input-column_992_1199\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 234
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column1", array()))) ? ("selected") : (""));
                // line 235
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_768_991\"><span data-toggle=\"tooltip\" title=\"";
            // line 242
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column2_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column2\" id=\"input-column_768_991\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column2", array()))) ? ("selected") : (""));
                // line 248
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_480_767\"> <span data-toggle=\"tooltip\" title=\"";
            // line 255
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column3_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column3\" id=\"input-column_480_767\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 260
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column3", array()))) ? ("selected") : (""));
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_0_479\"><span data-toggle=\"tooltip\" title=\"";
            // line 268
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column4_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column4\" id=\"input-column_0_479\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 273
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column4", array()))) ? ("selected") : (""));
                // line 274
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-type_show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 282
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_show_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_show"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"type_show\" id=\"input-type_show\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["type_shows"]) ? $context["type_shows"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["type"]) {
                // line 288
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "type_show", array()))) ? ("selected") : (""));
                // line 289
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["type"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 291
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group type_show_loadmore ";
            // line 295
            echo ((($this->getAttribute($context["module"], "type_show", array()) == "loadmore")) ? ("hide") : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-nb_rows\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 297
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_row_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_row"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_row\" id=\"input-nb_rows\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_rows"]) ? $context["nb_rows"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 303
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_row", array()))) ? ("selected") : (""));
                // line 304
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"source_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-type_source\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 315
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_source_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_source"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 320
            if ($this->getAttribute($context["module"], "type_source", array())) {
                // line 321
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type_source\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 322
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 324
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type_source\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 325
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 327
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 329
            if ($this->getAttribute($context["module"], "type_source", array())) {
                // line 330
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type_source\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 331
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 333
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"type_source\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 334
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 336
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 341
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
            // line 344
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category"), "method");
            echo "\" id=\"input-category\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "categorys", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 347
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-category";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["category"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"category[]\" value=\"";
                // line 348
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 351
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 353
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category", array(), "any", true, true)) {
                // line 354
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 356
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-child_category\"> <span data-toggle=\"tooltip\" title=\"";
            // line 359
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_child_category_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_child_category"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 363
            if ($this->getAttribute($context["module"], "child_category", array())) {
                // line 364
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 365
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_include"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 367
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 368
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_include"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 370
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 372
            if ($this->getAttribute($context["module"], "child_category", array())) {
                // line 373
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 374
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_exclude"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 376
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"child_category\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 377
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_exclude"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 379
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-category_depth_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-category_depth\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 384
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_depth_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_depth"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category_depth\" value=\"";
            // line 387
            echo $this->getAttribute($context["module"], "category_depth", array(), "array");
            echo "\" id=\"input-category_depth\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 389
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category_depth", array())) {
                // line 390
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "category_depth", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 392
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_order\"> <span data-toggle=\"tooltip\" title=\"";
            // line 395
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_order_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_order"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"product_sort\" id=\"input-product_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_sorts"]) ? $context["product_sorts"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 400
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "product_sort", array()))) ? ("selected") : (""));
                // line 401
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 403
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-ordering\"> <span data-toggle=\"tooltip\" title=\"";
            // line 408
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_ordering_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_ordering"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"product_ordering\" id=\"input-ordering\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 412
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_orderings"]) ? $context["product_orderings"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 413
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "product_ordering", array()))) ? ("selected") : (""));
                // line 414
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 416
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-source_limit\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 421
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_limit_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_limit"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"source_limit\" value=\"";
            // line 424
            echo $this->getAttribute($context["module"], "source_limit", array());
            echo "\" id=\"input-source_limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 426
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "source_limit", array())) {
                // line 427
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "source_limit", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 429
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\"><u style=\"color:#4e9e41\">";
            // line 431
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_for_preload"), "method");
            echo "</u></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"category_preload\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-catid_preload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 434
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_catid_preload_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_category_preload"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"catid_preload\" id=\"input-catid_preload\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 439
            if ((($this->getAttribute($context["module"], "tab_all_display", array()) == 1) && ($this->getAttribute($context["module"], "catid_preload", array()) == "*"))) {
                // line 440
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"*\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_all_product"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 441
$context["module"], "tab_all_display", array()) == 1)) {
                // line 442
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"*\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_all_product"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 444
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "categorys", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 445
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($this->getAttribute($context["option"], "category_id", array()) == $this->getAttribute($context["module"], "catid_preload", array()))) ? ("selected") : (""));
                // line 446
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["option"], "category_id", array());
                echo "\" id=\"catid_preload";
                echo $this->getAttribute($context["option"], "category_id", array());
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $this->getAttribute($context["option"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 448
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group field_product_tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-field_product_tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 454
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product_tab_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product_tab"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"field_product_tab\" value=\"\" placeholder=\"";
            // line 458
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_product_tab"), "method");
            echo "\" id=\"input-field_product_tab\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-field_product_tab\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 460
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "field_product_tabs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_product_tab"]) {
                // line 461
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"featured-field_product_tab";
                echo $this->getAttribute($context["field_product_tab"], "product_id", array());
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo $this->getAttribute($context["field_product_tab"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"field_product_tab[]\" value=\"";
                // line 462
                echo $this->getAttribute($context["field_product_tab"], "product_id", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_product_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 465
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 467
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "field_product_tab", array(), "any", true, true)) {
                // line 468
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "field_product_tab", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 470
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group field_product_tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-field_preload\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 474
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_preload_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_field_preload"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"field_preload\" id=\"input-field_preload\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 479
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "field_product_tabs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 480
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($this->getAttribute($context["option"], "product_id", array()) == $this->getAttribute($context["module"], "field_preload", array()))) ? ("selected") : (""));
                // line 481
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["option"], "product_id", array());
                echo "\" id=\"field_product";
                echo $this->getAttribute($context["option"], "product_id", array());
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $this->getAttribute($context["option"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 483
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tabs_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tab_all_display\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 492
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_all_display_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_all_display"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 497
            if ($this->getAttribute($context["module"], "tab_all_display", array())) {
                // line 498
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_all_display\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 499
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 501
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_all_display\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 502
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 504
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 506
            if ($this->getAttribute($context["module"], "tab_all_display", array())) {
                // line 507
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_all_display\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 508
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 510
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_all_display\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 511
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 513
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tab_max_characters\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 519
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_max_characters_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_max_characters"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"tab_max_characters\" value=\"";
            // line 523
            echo $this->getAttribute($context["module"], "tab_max_characters", array());
            echo "\" id=\"input-count\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 525
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "tab_max_characters", array(), "any", true, true)) {
                // line 526
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "tab_max_characters", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 528
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tab_icon_display\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 532
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_icon_display_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_tab_icon_display"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 537
            if ($this->getAttribute($context["module"], "tab_icon_display", array())) {
                // line 538
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_icon_display\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 539
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 541
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_icon_display\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 542
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 544
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 546
            if ($this->getAttribute($context["module"], "tab_icon_display", array())) {
                // line 547
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_icon_display\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 548
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 550
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"tab_icon_display\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 551
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 553
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group field_product_tab\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cat_order_by\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 559
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_order_by_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cat_order_by"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"cat_order_by\" id=\"input-cat_order_by\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 564
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cat_order_bys"]) ? $context["cat_order_bys"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 565
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "cat_order_by", array()))) ? ("selected") : (""));
                // line 566
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 568
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-imgcfgcat_width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 574
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_imgcfgcat_width_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_imgcfgcat_width"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"imgcfgcat_width\" value=\"";
            // line 578
            echo $this->getAttribute($context["module"], "imgcfgcat_width", array());
            echo "\" id=\"input-count\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 580
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "imgcfgcat_width", array(), "any", true, true)) {
                // line 581
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "imgcfgcat_width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 583
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-imgcfgcat_height\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 587
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_imgcfgcat_height_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_imgcfgcat_height"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"imgcfgcat_height\" value=\"";
            // line 591
            echo $this->getAttribute($context["module"], "imgcfgcat_height", array());
            echo "\" id=\"input-count\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 593
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "imgcfgcat_height", array(), "any", true, true)) {
                // line 594
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "imgcfgcat_height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 596
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"items_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_title\"> <span data-toggle=\"tooltip\" title=\"";
            // line 602
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 606
            if ($this->getAttribute($context["module"], "display_title", array())) {
                // line 607
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 608
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 610
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 611
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 613
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 615
            if ($this->getAttribute($context["module"], "display_title", array())) {
                // line 616
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 617
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 619
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_title\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 620
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 622
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-title_maxlength\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 627
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title_maxlength_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title_maxlength"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title_maxlength\" value=\"";
            // line 630
            echo $this->getAttribute($context["module"], "title_maxlength", array());
            echo "\" id=\"input-title_maxlength\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 632
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "title_maxlength", array(), "any", true, true)) {
                // line 633
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "title_maxlength", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 635
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_description\"> <span data-toggle=\"tooltip\" title=\"";
            // line 638
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_description_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_description"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 642
            if ($this->getAttribute($context["module"], "display_description", array())) {
                // line 643
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 644
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 646
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 647
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 649
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 651
            if ($this->getAttribute($context["module"], "display_description", array())) {
                // line 652
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 653
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 655
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 656
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 658
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-description_maxlength\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 663
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_description_maxlength_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_description_maxlength"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"description_maxlength\" value=\"";
            // line 666
            echo $this->getAttribute($context["module"], "description_maxlength", array());
            echo "\" id=\"input-description_maxlength\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 668
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "description_maxlength", array(), "any", true, true)) {
                // line 669
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "description_maxlength", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 671
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_price\"> <span data-toggle=\"tooltip\" title=\"";
            // line 674
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_price_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_price"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 678
            if ($this->getAttribute($context["module"], "display_price", array())) {
                // line 679
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 680
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 682
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 683
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 685
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 687
            if ($this->getAttribute($context["module"], "display_price", array())) {
                // line 688
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 689
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 691
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_price\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 692
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 694
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_add_to_cart\"> <span data-toggle=\"tooltip\" title=\"";
            // line 699
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_add_to_cart_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_add_to_cart"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 703
            if ($this->getAttribute($context["module"], "display_add_to_cart", array())) {
                // line 704
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_add_to_cart\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 705
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 707
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_add_to_cart\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 708
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 710
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 712
            if ($this->getAttribute($context["module"], "display_add_to_cart", array())) {
                // line 713
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_add_to_cart\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 714
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 716
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_add_to_cart\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 717
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 719
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_wishlist\"> <span data-toggle=\"tooltip\" title=\"";
            // line 724
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_wishlist_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_wishlist"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 728
            if ($this->getAttribute($context["module"], "display_wishlist", array())) {
                // line 729
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 730
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 732
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 733
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 735
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 737
            if ($this->getAttribute($context["module"], "display_wishlist", array())) {
                // line 738
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 739
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 741
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_wishlist\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 742
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 744
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_compare\"> <span data-toggle=\"tooltip\" title=\"";
            // line 749
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_compare_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_compare"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 753
            if ($this->getAttribute($context["module"], "display_compare", array())) {
                // line 754
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 755
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 757
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 758
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 760
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 762
            if ($this->getAttribute($context["module"], "display_compare", array())) {
                // line 763
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 764
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 766
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_compare\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 767
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 769
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_rating\"> <span data-toggle=\"tooltip\" title=\"";
            // line 774
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_rating_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_rating"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 778
            if ($this->getAttribute($context["module"], "display_rating", array())) {
                // line 779
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 780
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 782
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 783
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 785
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 787
            if ($this->getAttribute($context["module"], "display_rating", array())) {
                // line 788
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 789
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 791
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_rating\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 792
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 794
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_sale\"> <span data-toggle=\"tooltip\" title=\"";
            // line 799
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_sale_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_sale"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 803
            if ($this->getAttribute($context["module"], "display_sale", array())) {
                // line 804
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 805
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 807
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 808
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 810
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 812
            if ($this->getAttribute($context["module"], "display_sale", array())) {
                // line 813
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 814
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 816
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_sale\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 817
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 819
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_new\"> <span data-toggle=\"tooltip\" title=\"";
            // line 824
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_new_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_new"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 828
            if ($this->getAttribute($context["module"], "display_new", array())) {
                // line 829
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 830
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 832
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 833
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 835
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 837
            if ($this->getAttribute($context["module"], "display_new", array())) {
                // line 838
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 839
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 841
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_new\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 842
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 844
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-date_day_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-date_day\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 849
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_date_day_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_date_day"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"date_day\" value=\"";
            // line 852
            echo $this->getAttribute($context["module"], "date_day", array());
            echo "\" id=\"input-date_day\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 854
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "date_day", array(), "any", true, true)) {
                // line 855
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "date_day", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 857
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_image_num\"> <span data-toggle=\"tooltip\" title=\"";
            // line 860
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image_num_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image_num"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"product_image_num\" id=\"input-product_image_num\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 864
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_image_nums"]) ? $context["product_image_nums"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 865
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "product_image_num", array()))) ? ("selected") : (""));
                // line 866
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 868
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"image_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_image\"> <span data-toggle=\"tooltip\" title=\"";
            // line 876
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_image"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 880
            if ($this->getAttribute($context["module"], "product_image", array())) {
                // line 881
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 882
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 884
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 885
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 887
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 889
            if ($this->getAttribute($context["module"], "product_image", array())) {
                // line 890
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 891
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 893
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 894
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 896
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_get_image_data\"> <span data-toggle=\"tooltip\" title=\"";
            // line 901
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_get_image_data_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_get_image_data"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 905
            if ($this->getAttribute($context["module"], "product_get_image_data", array())) {
                // line 906
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 907
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 909
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 910
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 912
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 914
            if ($this->getAttribute($context["module"], "product_get_image_data", array())) {
                // line 915
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 916
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 918
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_data\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 919
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 921
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_get_image_image\"> <span data-toggle=\"tooltip\" title=\"";
            // line 926
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_get_image_image_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_get_image_image"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 930
            if ($this->getAttribute($context["module"], "product_get_image_image", array())) {
                // line 931
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 932
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 934
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 935
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 937
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 939
            if ($this->getAttribute($context["module"], "product_get_image_image", array())) {
                // line 940
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 941
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 943
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"product_get_image_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 944
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 946
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 952
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_width"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
            // line 956
            echo $this->getAttribute($context["module"], "width", array());
            echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 958
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array(), "any", true, true)) {
                // line 959
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 961
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-height\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 964
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_height"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
            // line 967
            echo $this->getAttribute($context["module"], "height", array());
            echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 969
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array(), "any", true, true)) {
                // line 970
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 972
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_placeholder_path\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 975
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_placeholder_path_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_product_placeholder_path"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_placeholder_path\" value=\"";
            // line 978
            echo $this->getAttribute($context["module"], "product_placeholder_path", array(), "array");
            echo "\" id=\"input-product_placeholder_path\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 980
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "product_placeholder_path", array(), "any", true, true)) {
                // line 981
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "product_placeholder_path", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 983
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_banner_image\"> <span data-toggle=\"tooltip\" title=\"";
            // line 986
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_banner_image_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_banner_image"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 990
            if ($this->getAttribute($context["module"], "display_banner_image", array())) {
                // line 991
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_banner_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 992
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 994
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_banner_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 995
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 997
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 999
            if ($this->getAttribute($context["module"], "display_banner_image", array())) {
                // line 1000
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_banner_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1001
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1003
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"display_banner_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1004
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1006
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group banner-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-slide_title\"><span data-toggle=\"tooltip\" title=\"";
            // line 1011
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_image_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_image"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            // line 1014
            echo $this->getAttribute($context["module"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo $this->getAttribute($context["module"], "thumb_default", array());
            echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"banner_image\" value=\"";
            // line 1015
            echo (($this->getAttribute($context["module"], "banner_image", array(), "any", true, true)) ? ($this->getAttribute($context["module"], "banner_image", array())) : (""));
            echo "\" id=\"input-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1016
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_image", array(), "any", true, true)) {
                // line 1017
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_image", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1019
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group banner-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1024
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_width_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_width"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"banner_width\" value=\"";
            // line 1028
            echo $this->getAttribute($context["module"], "banner_width", array());
            echo "\" id=\"input-banner_width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1030
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_width", array(), "any", true, true)) {
                // line 1031
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_width", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1033
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group banner-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-banner_height\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1036
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_height_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_height"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"banner_height\" value=\"";
            // line 1039
            echo $this->getAttribute($context["module"], "banner_height", array());
            echo "\" id=\"input-banner_height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1041
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_height", array(), "any", true, true)) {
                // line 1042
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "banner_height", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1044
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group banner-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-link\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1047
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_image_url_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_banner_image_url"), "method");
            echo " </span> </label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"banner_image_url\" value=\"";
            // line 1050
            echo (($this->getAttribute($context["module"], "banner_image_url", array(), "any", true, true)) ? ($this->getAttribute($context["module"], "banner_image_url", array())) : (""));
            echo "\" id=\"input-link\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"effect_option\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\"><u style=\"color:#4e9e41\">";
            // line 1057
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_for_type_show_load_more"), "method");
            echo "</u></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-effect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1060
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"effect\" id=\"input-effect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1065
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 1066
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "effect", array()))) ? ("selected") : (""));
                // line 1067
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo ">";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1069
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-duration\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1075
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_duration_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_duration"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"duration\" value=\"";
            // line 1079
            echo $this->getAttribute($context["module"], "duration", array());
            echo "\" id=\"input-duration\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1081
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "duration", array(), "any", true, true)) {
                // line 1082
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "duration", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1084
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-delay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1088
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_delay_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_delay"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"delay\" value=\"";
            // line 1092
            echo $this->getAttribute($context["module"], "delay", array());
            echo "\" id=\"input-delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1094
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "delay", array(), "any", true, true)) {
                // line 1095
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "delay", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1097
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-12\"><u style=\"color:#4e9e41\">";
            // line 1099
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_for_type_show_slider"), "method");
            echo "</u></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1102
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplay_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplay"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"autoplay\" id=\"input-autoplay\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1107
            if ($this->getAttribute($context["module"], "autoplay", array())) {
                // line 1108
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1109
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1111
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1112
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1114
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_nav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1120
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_nav_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_nav"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"display_nav\" id=\"input-display_nav\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1125
            if ($this->getAttribute($context["module"], "display_nav", array())) {
                // line 1126
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1127
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1129
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1130
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1132
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-display_loop\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1138
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_loop_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_loop"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"display_loop\" id=\"input-display_loop\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1143
            if ($this->getAttribute($context["module"], "display_loop", array())) {
                // line 1144
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1145
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1147
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1148
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1150
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-touchdrag\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1156
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_touchdrag_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_touchdrag"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"touchdrag\" id=\"input-touchdrag\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1161
            if ($this->getAttribute($context["module"], "touchdrag", array())) {
                // line 1162
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1163
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1165
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1166
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1168
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-mousedrag\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1174
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mousedrag_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mousedrag"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mousedrag\" id=\"input-mousedrag\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1179
            if ($this->getAttribute($context["module"], "mousedrag", array())) {
                // line 1180
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1181
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1183
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1184
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1186
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pausehover\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1192
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pausehover_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pausehover"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pausehover\" id=\"input-pausehover\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1197
            if ($this->getAttribute($context["module"], "pausehover", array())) {
                // line 1198
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 1199
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1201
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1202
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1204
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplayTimeout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1210
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplayTimeout_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplayTimeout"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplayTimeout\" value=\"";
            // line 1214
            echo $this->getAttribute($context["module"], "autoplayTimeout", array());
            echo "\" id=\"input-autoplayTimeout\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1216
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplayTimeout", array(), "any", true, true)) {
                // line 1217
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplayTimeout", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1219
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplaySpeed\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 1223
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplaySpeed_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplaySpeed"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplaySpeed\" value=\"";
            // line 1227
            echo $this->getAttribute($context["module"], "autoplaySpeed", array());
            echo "\" id=\"input-autoplaySpeed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1229
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array(), "any", true, true)) {
                // line 1230
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1232
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"advanced_option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pre_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1238
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"pre_text\" id=\"input-pre_text\" class=\"form-control\">";
            // line 1241
            echo $this->getAttribute($context["module"], "pre_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-post_text\"> <span data-toggle=\"tooltip\" title=\"";
            // line 1246
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text"), "method");
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"post_text\" id=\"input-post_text\" class=\"form-control\">";
            // line 1249
            echo $this->getAttribute($context["module"], "post_text", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use_cache\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1255
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1260
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 1261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1262
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1264
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1265
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1267
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1269
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                // line 1270
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1271
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1273
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1274
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1276
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-cache_time_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cache_time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 1282
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time_desc"), "method");
            echo "\">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time"), "method");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cache_time\" value=\"";
            // line 1286
            echo $this->getAttribute($context["module"], "cache_time", array());
            echo "\" id=\"input-cache_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1288
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array(), "any", true, true)) {
                // line 1289
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array());
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1291
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 1296
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 1297
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1298
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        \t\t</form>
        \t</div>
    \t</div>\t
  \t</div>
\t<script type=\"text/javascript\"><!--
\t\t\$('input[name=\\'category\\']').autocomplete({
\t\t\tsource: function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/so_listing_tabs/autocomplete_category&user_token=";
        // line 1308
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t\$('input[name=\\'category\\']').val('');
\t\t\t\t
\t\t\t\t\$('#featured-category' + item['value']).remove();
\t\t\t\t
\t\t\t\t\$('#featured-category').append('<div id=\"featured-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category[]\" value=\"' + item['value'] + '\" /></div>');
\t\t\t\t
\t\t\t\t\$('#catid_preload' + item['value']).remove();
\t\t\t\t\$('#input-catid_preload').append('<option value=\"'+item['value']+'\" id=\"catid_preload' + item['value'] + '\">' + item['label'] + '</option>');
\t\t\t}
\t\t});
\t\t
\t\t\$('#featured-category').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\$(this).parent().remove();
\t\t\tvar id_par = \$(this).parent().attr('id').substr(17);
\t\t\t
\t\t\t\$(\"#input-catid_preload option[value='\"+id_par+\"']\").each(function() {
\t\t\t\t\$(this).remove();
\t\t\t});
\t\t});

\t\t\$('input[name=\\'field_product_tab\\']').autocomplete({
\t\t\tsource: function(request, response) {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/so_listing_tabs/autocomplete&user_token=";
        // line 1344
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\tselect: function(item) {
\t\t\t\t\$('input[name=\\'field_product_tab\\']').val('');
\t\t\t\t
\t\t\t\t\$('#featured-field_product_tab' + item['value']).remove();
\t\t\t\t
\t\t\t\t\$('#featured-field_product_tab').append('<div id=\"featured-field_product_tab' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"field_product_tab[]\" value=\"' + item['value'] + '\" /></div>');
\t\t\t\t
\t\t\t\t\$('#field_product' + item['value']).remove();
\t\t\t\t\$('#input-field_preload').append('<option value=\"'+item['value']+'\" id=\"field_product' + item['value'] + '\">' + item['label'] + '</option>');
\t\t\t}
\t\t});
\t\t
\t\t\$('#featured-field_product_tab').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\$(this).parent().remove();
\t\t\tvar id_par = \$(this).parent().attr('id').substr(26);
\t\t\t\$(\"#input-field_preload option[value='\"+id_par+\"']\").each(function() {
\t\t\t\t\$(this).remove();
\t\t\t});
\t\t});
//--></script>
\t<script type=\"text/javascript\"><!--
\t\t\$('#so_module a:first').tab('show');
\t\tif(\$(\"input[name='child_category']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('#input-category_depth_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-category_depth_form').show();
\t\t}

\t\t\$(\"input[name='child_category']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('#input-category_depth_form').hide();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('#input-category_depth_form').show();
\t\t\t}
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

\t\tif(\$(\"input[name='type_source']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('.field_product_tab').hide();
\t\t\t\$('#category_preload').show();
\t\t\t\$('.input-product_order_form').show();
\t\t}else
\t\t{
\t\t\t\$('.field_product_tab').show();
\t\t\t\$('#category_preload').hide();
\t\t\t\$('.input-product_order_form').hide();
\t\t}

\t\t\$(\"input[name='type_source']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('.field_product_tab').hide();
\t\t\t\t\$('#category_preload').show();
\t\t\t\t\$('.input-product_order_form').show();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('.field_product_tab').show();
\t\t\t\t\$('#category_preload').hide();
\t\t\t\t\$('.input-product_order_form').hide();
\t\t\t}
\t\t});
\t
\t\t\$('#input-type_show').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() ;
\t\t\tconsole.log(opt_select);
\t\t\tif (opt_select == 'loadmore'){
\t\t\t\t\$('#input-nb_rows').val(1);
\t\t\t\t\$('.type_show_loadmore').addClass('hide');
\t\t\t}else{
\t\t\t\t\$('.type_show_loadmore').removeClass('hide');
\t\t\t}
\t\t});
\t
\t\t\$(\"input[name='display_banner_image']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('.banner-image').hide();
\t\t\t\t
\t\t\t}else
\t\t\t{
\t\t\t\t\$('.banner-image').show();
\t\t\t}
\t\t});

\t\tif(\$(\"input[name='display_banner_image']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('.banner-image').hide();
\t\t}else
\t\t{
\t\t\t\$('.banner-image').show();
\t\t}
\t
\t\t\$('#language').change(function(){
\t\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-name-'+opt_select);
\t\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t\t_input.removeClass('hide');
\t\t});
\t
\t\t\$('.first-name').change(function(){
\t\t\t\$('input[name=\"head_name\"]').val(\$(this).val());
\t\t});


\t\t\$(\"input[name='tab_all_display']\").change(function(){
\t\t\tif(\$(this).val() == 1)
\t\t\t{
\t\t\t\t\$('#input-catid_preload').append('<option value=*>All Product</option>');
\t\t\t}else{
\t\t\t\t\$(\"#input-catid_preload option[value='*']\").each(function() {
\t\t\t\t\t\$(this).remove();
\t\t\t\t});
\t\t\t}
\t\t});
\t
\t\tif(\$(\"input[name='display_new']:radio:checked\").val() == '0')
\t\t{
\t\t\t\$('#input-date_day_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-date_day_form').show();
\t\t}

\t\t\$(\"input[name='display_new']\").change(function(){
\t\t\tval = \$(this).val();
\t\t\tif(val ==0)
\t\t\t{
\t\t\t\t\$('#input-date_day_form').hide();
\t\t\t}else
\t\t\t{
\t\t\t\t\$('#input-date_day_form').show();
\t\t\t}
\t\t});
//--></script>
\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function (\$) {
\t\t\tvar button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1517
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_clear_cache"), "method");
        echo "</button></div>';
\t\t\tvar button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 1518
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
        // line 1534
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
\t\t\t\$.ajax({
\t\t\t\ttype: 'POST',
\t\t\t\turl: '";
        // line 1537
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
        // line 1549
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/so_listing_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3329 => 1549,  3314 => 1537,  3308 => 1534,  3289 => 1518,  3283 => 1517,  3107 => 1344,  3068 => 1308,  3056 => 1298,  3050 => 1297,  3048 => 1296,  3041 => 1291,  3035 => 1289,  3033 => 1288,  3028 => 1286,  3019 => 1282,  3011 => 1276,  3006 => 1274,  3003 => 1273,  2998 => 1271,  2995 => 1270,  2993 => 1269,  2989 => 1267,  2984 => 1265,  2981 => 1264,  2976 => 1262,  2973 => 1261,  2971 => 1260,  2961 => 1255,  2952 => 1249,  2944 => 1246,  2936 => 1241,  2928 => 1238,  2920 => 1232,  2914 => 1230,  2912 => 1229,  2907 => 1227,  2898 => 1223,  2892 => 1219,  2886 => 1217,  2884 => 1216,  2879 => 1214,  2870 => 1210,  2862 => 1204,  2857 => 1202,  2852 => 1201,  2847 => 1199,  2842 => 1198,  2840 => 1197,  2830 => 1192,  2822 => 1186,  2817 => 1184,  2812 => 1183,  2807 => 1181,  2802 => 1180,  2800 => 1179,  2790 => 1174,  2782 => 1168,  2777 => 1166,  2772 => 1165,  2767 => 1163,  2762 => 1162,  2760 => 1161,  2750 => 1156,  2742 => 1150,  2737 => 1148,  2732 => 1147,  2727 => 1145,  2722 => 1144,  2720 => 1143,  2710 => 1138,  2702 => 1132,  2697 => 1130,  2692 => 1129,  2687 => 1127,  2682 => 1126,  2680 => 1125,  2670 => 1120,  2662 => 1114,  2657 => 1112,  2652 => 1111,  2647 => 1109,  2642 => 1108,  2640 => 1107,  2630 => 1102,  2624 => 1099,  2620 => 1097,  2614 => 1095,  2612 => 1094,  2607 => 1092,  2598 => 1088,  2592 => 1084,  2586 => 1082,  2584 => 1081,  2579 => 1079,  2570 => 1075,  2562 => 1069,  2549 => 1067,  2546 => 1066,  2542 => 1065,  2532 => 1060,  2526 => 1057,  2516 => 1050,  2508 => 1047,  2503 => 1044,  2497 => 1042,  2495 => 1041,  2490 => 1039,  2482 => 1036,  2477 => 1033,  2471 => 1031,  2469 => 1030,  2464 => 1028,  2455 => 1024,  2448 => 1019,  2442 => 1017,  2440 => 1016,  2436 => 1015,  2430 => 1014,  2422 => 1011,  2415 => 1006,  2410 => 1004,  2407 => 1003,  2402 => 1001,  2399 => 1000,  2397 => 999,  2393 => 997,  2388 => 995,  2385 => 994,  2380 => 992,  2377 => 991,  2375 => 990,  2366 => 986,  2361 => 983,  2355 => 981,  2353 => 980,  2348 => 978,  2340 => 975,  2335 => 972,  2329 => 970,  2327 => 969,  2322 => 967,  2314 => 964,  2309 => 961,  2303 => 959,  2301 => 958,  2296 => 956,  2287 => 952,  2279 => 946,  2274 => 944,  2271 => 943,  2266 => 941,  2263 => 940,  2261 => 939,  2257 => 937,  2252 => 935,  2249 => 934,  2244 => 932,  2241 => 931,  2239 => 930,  2230 => 926,  2223 => 921,  2218 => 919,  2215 => 918,  2210 => 916,  2207 => 915,  2205 => 914,  2201 => 912,  2196 => 910,  2193 => 909,  2188 => 907,  2185 => 906,  2183 => 905,  2174 => 901,  2167 => 896,  2162 => 894,  2159 => 893,  2154 => 891,  2151 => 890,  2149 => 889,  2145 => 887,  2140 => 885,  2137 => 884,  2132 => 882,  2129 => 881,  2127 => 880,  2118 => 876,  2108 => 868,  2095 => 866,  2092 => 865,  2088 => 864,  2079 => 860,  2074 => 857,  2068 => 855,  2066 => 854,  2061 => 852,  2053 => 849,  2046 => 844,  2041 => 842,  2038 => 841,  2033 => 839,  2030 => 838,  2028 => 837,  2024 => 835,  2019 => 833,  2016 => 832,  2011 => 830,  2008 => 829,  2006 => 828,  1997 => 824,  1990 => 819,  1985 => 817,  1982 => 816,  1977 => 814,  1974 => 813,  1972 => 812,  1968 => 810,  1963 => 808,  1960 => 807,  1955 => 805,  1952 => 804,  1950 => 803,  1941 => 799,  1934 => 794,  1929 => 792,  1926 => 791,  1921 => 789,  1918 => 788,  1916 => 787,  1912 => 785,  1907 => 783,  1904 => 782,  1899 => 780,  1896 => 779,  1894 => 778,  1885 => 774,  1878 => 769,  1873 => 767,  1870 => 766,  1865 => 764,  1862 => 763,  1860 => 762,  1856 => 760,  1851 => 758,  1848 => 757,  1843 => 755,  1840 => 754,  1838 => 753,  1829 => 749,  1822 => 744,  1817 => 742,  1814 => 741,  1809 => 739,  1806 => 738,  1804 => 737,  1800 => 735,  1795 => 733,  1792 => 732,  1787 => 730,  1784 => 729,  1782 => 728,  1773 => 724,  1766 => 719,  1761 => 717,  1758 => 716,  1753 => 714,  1750 => 713,  1748 => 712,  1744 => 710,  1739 => 708,  1736 => 707,  1731 => 705,  1728 => 704,  1726 => 703,  1717 => 699,  1710 => 694,  1705 => 692,  1702 => 691,  1697 => 689,  1694 => 688,  1692 => 687,  1688 => 685,  1683 => 683,  1680 => 682,  1675 => 680,  1672 => 679,  1670 => 678,  1661 => 674,  1656 => 671,  1650 => 669,  1648 => 668,  1643 => 666,  1635 => 663,  1628 => 658,  1623 => 656,  1620 => 655,  1615 => 653,  1612 => 652,  1610 => 651,  1606 => 649,  1601 => 647,  1598 => 646,  1593 => 644,  1590 => 643,  1588 => 642,  1579 => 638,  1574 => 635,  1568 => 633,  1566 => 632,  1561 => 630,  1553 => 627,  1546 => 622,  1541 => 620,  1538 => 619,  1533 => 617,  1530 => 616,  1528 => 615,  1524 => 613,  1519 => 611,  1516 => 610,  1511 => 608,  1508 => 607,  1506 => 606,  1497 => 602,  1489 => 596,  1483 => 594,  1481 => 593,  1476 => 591,  1467 => 587,  1461 => 583,  1455 => 581,  1453 => 580,  1448 => 578,  1439 => 574,  1431 => 568,  1418 => 566,  1415 => 565,  1411 => 564,  1401 => 559,  1393 => 553,  1388 => 551,  1385 => 550,  1380 => 548,  1377 => 547,  1375 => 546,  1371 => 544,  1366 => 542,  1363 => 541,  1358 => 539,  1355 => 538,  1353 => 537,  1343 => 532,  1337 => 528,  1331 => 526,  1329 => 525,  1324 => 523,  1315 => 519,  1307 => 513,  1302 => 511,  1299 => 510,  1294 => 508,  1291 => 507,  1289 => 506,  1285 => 504,  1280 => 502,  1277 => 501,  1272 => 499,  1269 => 498,  1267 => 497,  1257 => 492,  1246 => 483,  1231 => 481,  1228 => 480,  1224 => 479,  1214 => 474,  1208 => 470,  1202 => 468,  1200 => 467,  1196 => 465,  1187 => 462,  1180 => 461,  1176 => 460,  1171 => 458,  1162 => 454,  1154 => 448,  1139 => 446,  1136 => 445,  1131 => 444,  1125 => 442,  1123 => 441,  1118 => 440,  1116 => 439,  1106 => 434,  1100 => 431,  1096 => 429,  1090 => 427,  1088 => 426,  1083 => 424,  1075 => 421,  1068 => 416,  1055 => 414,  1052 => 413,  1048 => 412,  1039 => 408,  1032 => 403,  1019 => 401,  1016 => 400,  1012 => 399,  1003 => 395,  998 => 392,  992 => 390,  990 => 389,  985 => 387,  977 => 384,  970 => 379,  965 => 377,  962 => 376,  957 => 374,  954 => 373,  952 => 372,  948 => 370,  943 => 368,  940 => 367,  935 => 365,  932 => 364,  930 => 363,  921 => 359,  916 => 356,  910 => 354,  908 => 353,  904 => 351,  895 => 348,  888 => 347,  884 => 346,  879 => 344,  871 => 341,  864 => 336,  859 => 334,  856 => 333,  851 => 331,  848 => 330,  846 => 329,  842 => 327,  837 => 325,  834 => 324,  829 => 322,  826 => 321,  824 => 320,  814 => 315,  803 => 306,  790 => 304,  787 => 303,  783 => 302,  773 => 297,  768 => 295,  762 => 291,  749 => 289,  746 => 288,  742 => 287,  732 => 282,  724 => 276,  711 => 274,  708 => 273,  704 => 272,  695 => 268,  688 => 263,  675 => 261,  672 => 260,  668 => 259,  659 => 255,  652 => 250,  639 => 248,  636 => 247,  632 => 246,  623 => 242,  616 => 237,  603 => 235,  600 => 234,  596 => 233,  587 => 229,  580 => 224,  567 => 222,  564 => 221,  560 => 220,  551 => 216,  544 => 211,  531 => 209,  528 => 208,  524 => 207,  515 => 203,  507 => 198,  499 => 195,  489 => 187,  476 => 185,  473 => 184,  469 => 183,  458 => 178,  449 => 171,  441 => 166,  433 => 161,  425 => 156,  417 => 151,  409 => 146,  401 => 141,  389 => 131,  384 => 129,  379 => 128,  374 => 126,  369 => 125,  367 => 124,  358 => 120,  351 => 115,  346 => 113,  341 => 112,  336 => 110,  331 => 109,  329 => 108,  320 => 104,  315 => 101,  309 => 99,  307 => 98,  303 => 96,  292 => 94,  288 => 93,  283 => 90,  277 => 89,  269 => 87,  267 => 86,  254 => 85,  251 => 84,  246 => 83,  244 => 82,  236 => 79,  231 => 76,  225 => 74,  223 => 73,  216 => 71,  208 => 68,  201 => 65,  193 => 62,  190 => 61,  187 => 60,  182 => 59,  180 => 58,  173 => 53,  167 => 52,  165 => 51,  159 => 48,  151 => 47,  144 => 46,  139 => 45,  137 => 44,  127 => 43,  121 => 40,  115 => 37,  110 => 34,  103 => 30,  96 => 27,  94 => 26,  91 => 25,  83 => 21,  81 => 20,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
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
/*     	*/
/*     	<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ subheading }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">*/
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
/* 					*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* 							{% set module_row = 1 %}*/
/* 							{% for module in modules %}*/
/* 								{% if selectedid %}*/
/* 									<div class="pull-right">*/
/* 										<a href="{{ action }}&delete=1" class="remove btn btn-danger" ><span><i class="fa fa-remove"></i> {{ objlang.get('entry_button_delete') }}</span></a>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								<div  id="tab-module{{ module_row }}" class="col-sm-12">*/
/* 									<div class="form-group">*/
/* 										<input type="hidden" name="action" id="action" value=""/>*/
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
/* 										<label class="col-sm-3 control-label" for="input-head_name"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_head_name_desc') }}">{{ objlang.get('entry_head_name') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												{% set i = 0 %}*/
/* 												{% for language in languages %}*/
/* 													{% set i = i + 1 %}*/
/* 													<input type="text" name="module_description[{{ language.language_id }}][head_name]" placeholder="{{ objlang.get('entry_head_name') }}" id="input-head-name-{{ language.language_id }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" class="form-control {{ i>1 ? ' hide ' : ' first-name' }}" />*/
/* 													{% if i == 1 %}*/
/* 													<input type="hidden" class="form-control" id="input-head_name" placeholder="{{ objlang.get('entry_head_name') }}" value="{{ module_description[language.language_id]['head_name'] is defined ? module_description[language.language_id]['head_name'] : '' }}" name="head_name">*/
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
/* 											{% if error.head_name is defined %}*/
/* 											<div class="text-danger col-sm-12">{{ error.head_name }}</div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-disp_title_module"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_title_module_desc') }}">{{ objlang.get('entry_display_title_module') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="disp_title_module" id="input-disp_title_module" class="form-control">*/
/* 													{% if module.disp_title_module %}*/
/* 														<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 														<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 													{% else %}*/
/* 														<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 													{% endif %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-3 control-label" for="input-status"><span data-toggle="tooltip" title="{{ objlang.get('entry_status_desc') }}">{{ objlang.get('entry_status') }} </span></label>*/
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
/* 								</div>*/
/* 								*/
/* 								<div class="tab-pane">*/
/* 									<ul class="nav nav-tabs" id="so_module">*/
/* 										<li>*/
/* 											<a href="#module" data-toggle="tab">*/
/* 												{{ objlang.get('entry_module') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#source_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_source_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#tabs_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_tabs_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#items_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_items_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#image_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_image_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#effect_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_effect_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 										<li>*/
/* 											<a href="#advanced_option" data-toggle="tab">*/
/* 												{{ objlang.get('entry_advanced_option') }}*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 									<div class="tab-content">*/
/* 										<div class="tab-pane" id="module">*/
/* 											<div class="form-group"> {# <!-- Store Layout -->  #}*/
/* 												<label class="col-sm-3 control-label" for="input-store_layout"> <span data-toggle="tooltip" title="{{ objlang.get('entry_store_layout_desc') }} ">{{ objlang.get('entry_store_layout') }}  </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="store_layout" id="input-store_layout" class="form-control">*/
/* */
/* 															{% for option_id, option_value in store_layouts %}*/
/* 																{% set selected = (option_id  ==  module.store_layout) ? 'selected'  %}*/
/* 																<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 															*/
/* 														</select>*/
/* 														*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-class_suffix"> <span data-toggle="tooltip" title="{{ objlang.get('entry_class_suffix_desc') }}">{{ objlang.get('entry_class_suffix') }} </span> </label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="class_suffix" value="{{ module.class_suffix }}" id="input-class_suffix" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-open_link"> <span data-toggle="tooltip" title="{{ objlang.get('entry_open_link_desc') }}">{{ objlang.get('entry_open_link') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="item_link_target" id="input-open_link" class="form-control">*/
/* 															{% for option_id, option_value in item_link_targets %}*/
/* 																{% set selected = option_id == module.item_link_target ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_1200"> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column0_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column0" id="input-column_1200" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column0 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_992_1199"><span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column1_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column1" id="input-column_992_1199" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column1 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_768_991"><span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column2_desc') }}">{{ objlang.get('entry_column') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column2" id="input-column_768_991" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column2 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_480_767"> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column3_desc') }}">{{ objlang.get('entry_column') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column3" id="input-column_480_767" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column3 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-column_0_479"><span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column4_desc') }}">{{ objlang.get('entry_column') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_column4" id="input-column_0_479" class="form-control">*/
/* 															{% for option_id, option_value in nb_columns %}*/
/* 																{% set selected = option_id == module.nb_column4 ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-type_show">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_type_show_desc') }}">{{ objlang.get('entry_type_show') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="type_show" id="input-type_show" class="form-control">*/
/* 															{% for option_id, type in type_shows %}*/
/* 																{% set selected = option_id == module.type_show ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ type }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group type_show_loadmore {{ module.type_show == 'loadmore' ? 'hide' : '' }}">*/
/* 												<label class="col-sm-3 control-label" for="input-nb_rows">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_nb_row_desc') }}">{{ objlang.get('entry_nb_row') }} </span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="nb_row" id="input-nb_rows" class="form-control">*/
/* 															{% for option_id, option_value in nb_rows %}*/
/* 																{% set selected = option_id == module.nb_row ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="source_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-type_source">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_type_source_desc') }}">{{ objlang.get('entry_type_source') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.type_source %}*/
/* 																<input type="radio" name="type_source" value="1" checked="checked" />*/
/* 																{{ objlang.get('entry_field_product') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="type_source" value="1" />*/
/* 																{{ objlang.get('entry_field_product') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.type_source %}*/
/* 																<input type="radio" name="type_source" value="0" />*/
/* 																{{ objlang.get('entry_category') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="type_source" value="0" checked="checked" />*/
/* 																{{ objlang.get('entry_category') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-category"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_category_desc') }}">{{ objlang.get('entry_category') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="category" value="" placeholder="{{ objlang.get('entry_category') }}" id="input-category" class="form-control" />*/
/* 														<div id="featured-category" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 															{% for category in module.categorys %}*/
/* 																<div id="featured-category{{ category.category_id }}"><i class="fa fa-minus-circle"></i> {{ category.name }}*/
/* 																	<input type="hidden" name="category[]" value="{{ category.category_id }}" />*/
/* 																</div>*/
/* 															{% endfor %}*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if error.category is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.category }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-child_category"> <span data-toggle="tooltip" title="{{ objlang.get('entry_child_category_desc') }}">{{ objlang.get('entry_child_category') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.child_category %}*/
/* 																<input type="radio" name="child_category" value="1" checked="checked" />*/
/* 																{{ objlang.get('entry_include') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="child_category" value="1" />*/
/* 																{{ objlang.get('entry_include') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.child_category %}*/
/* 																<input type="radio" name="child_category" value="0" />*/
/* 																{{ objlang.get('entry_exclude') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="child_category" value="0" checked="checked" />*/
/* 																{{ objlang.get('entry_exclude') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-category_depth_form">*/
/* 												<label class="col-sm-3 control-label" for="input-category_depth"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_category_depth_desc') }}">{{ objlang.get('entry_category_depth') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="category_depth" value="{{ module['category_depth'] }}" id="input-category_depth" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.category_depth %}*/
/* 													<div class="text-danger col-sm-12">{{ error.category_depth }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_order"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_order_desc') }}">{{ objlang.get('entry_product_order') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="product_sort" id="input-product_order" class="form-control">*/
/* 															{% for option_id, option_value in product_sorts %}*/
/* 																{% set selected = option_id == module.product_sort ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-ordering"> <span data-toggle="tooltip" title="{{ objlang.get('entry_ordering_desc') }}">{{ objlang.get('entry_ordering') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="product_ordering" id="input-ordering" class="form-control">*/
/* 															{% for option_id, option_value in product_orderings %}*/
/* 																{% set selected = option_id == module.product_ordering ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-source_limit"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_source_limit_desc') }}">{{ objlang.get('entry_source_limit') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="source_limit" value="{{ module.source_limit }}" id="input-source_limit" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.source_limit %}*/
/* 													<div class="text-danger col-sm-12">{{ error.source_limit }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<label class="col-sm-12"><u style="color:#4e9e41">{{ objlang.get('entry_for_preload') }}</u></label>*/
/* 											<div class="form-group" id="category_preload">*/
/* 												<label class="col-sm-3 control-label" for="input-catid_preload">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_catid_preload_desc') }}">{{ objlang.get('entry_category_preload') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="catid_preload" id="input-catid_preload" class="form-control">*/
/* 															{% if module.tab_all_display ==1 and module.catid_preload =="*" %}*/
/* 																<option selected="selected" value="*">{{ objlang.get('entry_all_product') }}</option>*/
/* 															{% elseif module.tab_all_display == 1 %}*/
/* 																<option value="*">{{ objlang.get('entry_all_product') }}</option>*/
/* 															{% endif %}*/
/* 															{% for option in module.categorys %}*/
/* 																{% set selected = option.category_id == module.catid_preload ? 'selected' : '' %}*/
/* 																<option value="{{ option.category_id }}" id="catid_preload{{ option.category_id }}" {{ selected }}>{{ option.name }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group field_product_tab">*/
/* 												<label class="col-sm-3 control-label" for="input-field_product_tab">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_field_product_tab_desc') }}">{{ objlang.get('entry_field_product_tab') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="field_product_tab" value="" placeholder="{{ objlang.get('entry_field_product_tab') }}" id="input-field_product_tab" class="form-control" />*/
/* 														<div id="featured-field_product_tab" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 															{% for field_product_tab in module.field_product_tabs %}*/
/* 																<div id="featured-field_product_tab{{ field_product_tab.product_id }}"><i class="fa fa-minus-circle"></i> {{ field_product_tab.name }}*/
/* 																<input type="hidden" name="field_product_tab[]" value="{{ field_product_tab.product_id }}" />*/
/* 																</div>*/
/* 															{% endfor %}*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if error.field_product_tab is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.field_product_tab }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group field_product_tab">*/
/* 												<label class="col-sm-3 control-label" for="input-field_preload">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_field_preload_desc') }}">{{ objlang.get('entry_field_preload') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="field_preload" id="input-field_preload" class="form-control">*/
/* 															{% for option in module.field_product_tabs %}*/
/* 																{% set selected = option.product_id == module.field_preload ? 'selected' : '' %}*/
/* 																<option value="{{ option.product_id }}" id="field_product{{ option.product_id }}" {{ selected }}>{{ option.name }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="tabs_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-tab_all_display">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_tab_all_display_desc') }}">{{ objlang.get('entry_tab_all_display') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.tab_all_display %}*/
/* 																<input type="radio" name="tab_all_display" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="tab_all_display" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.tab_all_display %}*/
/* 																<input type="radio" name="tab_all_display" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="tab_all_display" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-tab_max_characters">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_tab_max_characters_desc') }}">{{ objlang.get('entry_tab_max_characters') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="tab_max_characters" value="{{ module.tab_max_characters }}" id="input-count" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.tab_max_characters is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.tab_max_characters }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-tab_icon_display">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_tab_icon_display_desc') }}">{{ objlang.get('entry_tab_icon_display') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.tab_icon_display %}*/
/* 																<input type="radio" name="tab_icon_display" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="tab_icon_display" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.tab_icon_display %}*/
/* 																<input type="radio" name="tab_icon_display" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="tab_icon_display" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group field_product_tab">*/
/* 												<label class="col-sm-3 control-label" for="input-cat_order_by">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_cat_order_by_desc') }}">{{ objlang.get('entry_cat_order_by') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="cat_order_by" id="input-cat_order_by" class="form-control">*/
/* 															{% for option_id, option_value in cat_order_bys %}*/
/* 																{% set selected = option_id == module.cat_order_by ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-imgcfgcat_width">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_imgcfgcat_width_desc') }}">{{ objlang.get('entry_imgcfgcat_width') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="imgcfgcat_width" value="{{ module.imgcfgcat_width }}" id="input-count" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.imgcfgcat_width is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.imgcfgcat_width }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-imgcfgcat_height">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_imgcfgcat_height_desc') }}">{{ objlang.get('entry_imgcfgcat_height') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="imgcfgcat_height" value="{{ module.imgcfgcat_height }}" id="input-count" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.imgcfgcat_height is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.imgcfgcat_height }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="items_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_title"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_title_desc') }}">{{ objlang.get('entry_display_title') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_title %}*/
/* 																<input type="radio" name="display_title" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_title" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_title %}*/
/* 																<input type="radio" name="display_title" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_title" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-title_maxlength"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_title_maxlength_desc') }}">{{ objlang.get('entry_title_maxlength') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="title_maxlength" value="{{ module.title_maxlength }}" id="input-title_maxlength" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.title_maxlength is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.title_maxlength }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_description"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_description_desc') }}">{{ objlang.get('entry_display_description') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_description %}*/
/* 																<input type="radio" name="display_description" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_description" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_description %}*/
/* 																<input type="radio" name="display_description" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_description" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-description_maxlength"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_description_maxlength_desc') }}">{{ objlang.get('entry_description_maxlength') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="description_maxlength" value="{{ module.description_maxlength }}" id="input-description_maxlength" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.description_maxlength is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.description_maxlength }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_price"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_price_desc') }}">{{ objlang.get('entry_display_price') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_price %}*/
/* 																<input type="radio" name="display_price" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_price" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_price %}*/
/* 																<input type="radio" name="display_price" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_price" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_add_to_cart"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_add_to_cart_desc') }}">{{ objlang.get('entry_display_add_to_cart') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_add_to_cart %}*/
/* 																<input type="radio" name="display_add_to_cart" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_add_to_cart" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_add_to_cart %}*/
/* 																<input type="radio" name="display_add_to_cart" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_add_to_cart" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_wishlist"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_wishlist_desc') }}">{{ objlang.get('entry_display_wishlist') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_wishlist %}*/
/* 																<input type="radio" name="display_wishlist" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_wishlist" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_wishlist %}*/
/* 																<input type="radio" name="display_wishlist" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_wishlist" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_compare"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_compare_desc') }}">{{ objlang.get('entry_display_compare') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_compare %}*/
/* 																<input type="radio" name="display_compare" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_compare" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_compare %}*/
/* 																<input type="radio" name="display_compare" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_compare" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_rating"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_rating_desc') }}">{{ objlang.get('entry_display_rating') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_rating %}*/
/* 																<input type="radio" name="display_rating" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_rating" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_rating %}*/
/* 																<input type="radio" name="display_rating" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_rating" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_sale"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_sale_desc') }}">{{ objlang.get('entry_display_sale') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_sale %}*/
/* 																<input type="radio" name="display_sale" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_sale" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_sale %}*/
/* 																<input type="radio" name="display_sale" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_sale" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_new"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_new_desc') }}">{{ objlang.get('entry_display_new') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_new %}*/
/* 																<input type="radio" name="display_new" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_new" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_new %}*/
/* 																<input type="radio" name="display_new" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_new" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-date_day_form">*/
/* 												<label class="col-sm-3 control-label" for="input-date_day"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_date_day_desc') }}">{{ objlang.get('entry_date_day') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="date_day" value="{{ module.date_day }}" id="input-date_day" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.date_day is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.date_day }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_image_num"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_image_num_desc') }}">{{ objlang.get('entry_product_image_num') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="product_image_num" id="input-product_image_num" class="form-control">*/
/* 															{% for option_id, option_value in product_image_nums %}*/
/* 																{% set selected = option_id == module.product_image_num ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="image_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_image"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_image_desc') }}">{{ objlang.get('entry_product_image') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_image %}*/
/* 																<input type="radio" name="product_image" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_image" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_image %}*/
/* 																<input type="radio" name="product_image" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_image" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_get_image_data"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_get_image_data_desc') }}">{{ objlang.get('entry_product_get_image_data') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_data %}*/
/* 																<input type="radio" name="product_get_image_data" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_data" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_data %}*/
/* 																<input type="radio" name="product_get_image_data" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_data" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_get_image_image"> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_get_image_image_desc') }}">{{ objlang.get('entry_product_get_image_image') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_image %}*/
/* 																<input type="radio" name="product_get_image_image" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_image" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.product_get_image_image %}*/
/* 																<input type="radio" name="product_get_image_image" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="product_get_image_image" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-width">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_width_desc') }}">{{ objlang.get('entry_width') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="width" value="{{ module.width }}" id="input-width" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.width is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.width }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-height"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_height_desc') }}">{{ objlang.get('entry_height') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="height" value="{{ module.height }}" id="input-height" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.height is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.height }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-product_placeholder_path"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_product_placeholder_path_desc') }}">{{ objlang.get('entry_product_placeholder_path') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="product_placeholder_path" value="{{ module['product_placeholder_path'] }}" id="input-product_placeholder_path" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.product_placeholder_path is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.product_placeholder_path }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_banner_image"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_banner_image_desc') }}">{{ objlang.get('entry_display_banner_image') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_banner_image %}*/
/* 																<input type="radio" name="display_banner_image" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_banner_image" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.display_banner_image %}*/
/* 																<input type="radio" name="display_banner_image" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="display_banner_image" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group banner-image">*/
/* 												<label class="col-sm-3 control-label" for="input-slide_title"><span data-toggle="tooltip" title="{{ objlang.get('entry_banner_image_desc') }}">{{ objlang.get('entry_banner_image') }} </span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ module.thumb }}" alt="" title="" data-placeholder="{{ module.thumb_default }}" /></a>*/
/* 														<input type="hidden" name="banner_image" value="{{ module.banner_image is defined ? module.banner_image : '' }}" id="input-image" />*/
/* 														{% if error.banner_image is defined %}*/
/* 														<div class="text-danger col-sm-12">{{ error.banner_image }}</div>*/
/* 														{% endif %}*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group banner-image">*/
/* 												<label class="col-sm-3 control-label" for="input-width">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_banner_width_desc') }}">{{ objlang.get('entry_banner_width') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="banner_width" value="{{ module.banner_width }}" id="input-banner_width" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.banner_width is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.banner_width }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group banner-image">*/
/* 												<label class="col-sm-3 control-label" for="input-banner_height"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_banner_height_desc') }}">{{ objlang.get('entry_banner_height') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="banner_height" value="{{ module.banner_height }}" id="input-banner_height" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.banner_height is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.banner_height }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group banner-image">*/
/* 												<label class="col-sm-3 control-label" for="input-link"> <span data-toggle="tooltip" title="{{ objlang.get('entry_banner_image_url_desc') }}">{{ objlang.get('entry_banner_image_url') }} </span> </label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="banner_image_url" value="{{ module.banner_image_url is defined ? module.banner_image_url : '' }}" id="input-link" class="form-control" />*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="effect_option">*/
/* 											<label class="col-sm-12"><u style="color:#4e9e41">{{ objlang.get('entry_for_type_show_load_more') }}</u></label>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-effect">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_effect_desc') }}">{{ objlang.get('entry_effect') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="effect" id="input-effect" class="form-control">*/
/* 															{% for option_id, option_value in effects %}*/
/* 																{% set selected = option_id == module.effect ? 'selected' : '' %}*/
/* 																<option value="{{ option_id }}" {{ selected }}>{{ option_value }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-duration">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_duration_desc') }}">{{ objlang.get('entry_duration') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="duration" value="{{ module.duration }}" id="input-duration" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.duration is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.duration }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-delay">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_delay_desc') }}">{{ objlang.get('entry_delay') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="delay" value="{{ module.delay }}" id="input-delay" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.delay is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.delay }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<label class="col-sm-12"><u style="color:#4e9e41">{{ objlang.get('entry_for_type_show_slider') }}</u></label>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplay">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_autoplay_desc') }}">{{ objlang.get('entry_autoplay') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="autoplay" id="input-autoplay" class="form-control">*/
/* 															{% if module.autoplay %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_nav">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_display_nav_desc') }}">{{ objlang.get('entry_display_nav') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="display_nav" id="input-display_nav" class="form-control">*/
/* 															{% if module.display_nav %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-display_loop">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_display_loop_desc') }}">{{ objlang.get('entry_display_loop') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="display_loop" id="input-display_loop" class="form-control">*/
/* 															{% if module.display_loop %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-touchdrag">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_touchdrag_desc') }}">{{ objlang.get('entry_touchdrag') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="touchdrag" id="input-touchdrag" class="form-control">*/
/* 															{% if module.touchdrag %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-mousedrag">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_mousedrag_desc') }}">{{ objlang.get('entry_mousedrag') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="mousedrag" id="input-mousedrag" class="form-control">*/
/* 															{% if module.mousedrag %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-pausehover">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_pausehover_desc') }}">{{ objlang.get('entry_pausehover') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<select name="pausehover" id="input-pausehover" class="form-control">*/
/* 															{% if module.pausehover %}*/
/* 																<option value="1" selected="selected">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0">{{ objlang.get('text_no') }}</option>*/
/* 															{% else %}*/
/* 																<option value="1">{{ objlang.get('text_yes') }}</option>*/
/* 																<option value="0" selected="selected">{{ objlang.get('text_no') }}</option>*/
/* 															{% endif %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplayTimeout">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplayTimeout_desc') }}">{{ objlang.get('entry_autoplayTimeout') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="autoplayTimeout" value="{{ module.autoplayTimeout }}" id="input-autoplayTimeout" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.autoplayTimeout is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.autoplayTimeout }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-autoplaySpeed">*/
/* 													<b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplaySpeed_desc') }}">{{ objlang.get('entry_autoplaySpeed') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="autoplaySpeed" value="{{ module.autoplaySpeed }}" id="input-autoplaySpeed" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.autoplaySpeed is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.autoplaySpeed }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 						*/
/* 										<div class="tab-pane" id="advanced_option">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-pre_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_pre_text_desc') }}">{{ objlang.get('entry_pre_text') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<textarea name="pre_text" id="input-pre_text" class="form-control">{{ module.pre_text }}</textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-post_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_post_text_desc') }}">{{ objlang.get('entry_post_text') }}</span></label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<textarea name="post_text" id="input-post_text" class="form-control">{{ module.post_text }}</textarea>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-3 control-label" for="input-use_cache">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_use_cache_desc') }}">{{ objlang.get('entry_use_cache') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<label class="radio-inline">*/
/* 															{% if module.use_cache %}*/
/* 																<input type="radio" name="use_cache" value="1" checked="checked" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="use_cache" value="1" />*/
/* 																{{ objlang.get('text_yes') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 														<label class="radio-inline">*/
/* 															{% if module.use_cache %}*/
/* 																<input type="radio" name="use_cache" value="0" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% else %}*/
/* 																<input type="radio" name="use_cache" value="0" checked="checked" />*/
/* 																{{ objlang.get('text_no') }}*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group" id="input-cache_time_form">*/
/* 												<label class="col-sm-3 control-label" for="input-cache_time">*/
/* 													<span data-toggle="tooltip" title="{{ objlang.get('entry_cache_time_desc') }}">{{ objlang.get('entry_cache_time') }}</span>*/
/* 												</label>*/
/* 												<div class="col-sm-9">*/
/* 													<div class="col-sm-5">*/
/* 														<input type="text" name="cache_time" value="{{ module.cache_time }}" id="input-cache_time" class="form-control" />*/
/* 													</div>*/
/* 													{% if error.cache_time is defined %}*/
/* 													<div class="text-danger col-sm-12">{{ error.cache_time }}</div>*/
/* 													{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								{% set module_row = module_row + 1 %}*/
/* 							{% endfor %}*/
/* 						</div>*/
/* 					</div>*/
/*         		</form>*/
/*         	</div>*/
/*     	</div>	*/
/*   	</div>*/
/* 	<script type="text/javascript"><!--*/
/* 		$('input[name=\'category\']').autocomplete({*/
/* 			source: function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/module/so_listing_tabs/autocomplete_category&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						response($.map(json, function(item) {*/
/* 							return {*/
/* 								label: item['name'],*/
/* 								value: item['category_id']*/
/* 							}*/
/* 						}));*/
/* 					}*/
/* 				});*/
/* 			},*/
/* 			select: function(item) {*/
/* 				$('input[name=\'category\']').val('');*/
/* 				*/
/* 				$('#featured-category' + item['value']).remove();*/
/* 				*/
/* 				$('#featured-category').append('<div id="featured-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category[]" value="' + item['value'] + '" /></div>');*/
/* 				*/
/* 				$('#catid_preload' + item['value']).remove();*/
/* 				$('#input-catid_preload').append('<option value="'+item['value']+'" id="catid_preload' + item['value'] + '">' + item['label'] + '</option>');*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		$('#featured-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 			$(this).parent().remove();*/
/* 			var id_par = $(this).parent().attr('id').substr(17);*/
/* 			*/
/* 			$("#input-catid_preload option[value='"+id_par+"']").each(function() {*/
/* 				$(this).remove();*/
/* 			});*/
/* 		});*/
/* */
/* 		$('input[name=\'field_product_tab\']').autocomplete({*/
/* 			source: function(request, response) {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=extension/module/so_listing_tabs/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 					dataType: 'json',*/
/* 					success: function(json) {*/
/* 						response($.map(json, function(item) {*/
/* 							return {*/
/* 								label: item['name'],*/
/* 								value: item['product_id']*/
/* 							}*/
/* 						}));*/
/* 					}*/
/* 				});*/
/* 			},*/
/* 			select: function(item) {*/
/* 				$('input[name=\'field_product_tab\']').val('');*/
/* 				*/
/* 				$('#featured-field_product_tab' + item['value']).remove();*/
/* 				*/
/* 				$('#featured-field_product_tab').append('<div id="featured-field_product_tab' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="field_product_tab[]" value="' + item['value'] + '" /></div>');*/
/* 				*/
/* 				$('#field_product' + item['value']).remove();*/
/* 				$('#input-field_preload').append('<option value="'+item['value']+'" id="field_product' + item['value'] + '">' + item['label'] + '</option>');*/
/* 			}*/
/* 		});*/
/* 		*/
/* 		$('#featured-field_product_tab').delegate('.fa-minus-circle', 'click', function() {*/
/* 			$(this).parent().remove();*/
/* 			var id_par = $(this).parent().attr('id').substr(26);*/
/* 			$("#input-field_preload option[value='"+id_par+"']").each(function() {*/
/* 				$(this).remove();*/
/* 			});*/
/* 		});*/
/* //--></script>*/
/* 	<script type="text/javascript"><!--*/
/* 		$('#so_module a:first').tab('show');*/
/* 		if($("input[name='child_category']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-category_depth_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-category_depth_form').show();*/
/* 		}*/
/* */
/* 		$("input[name='child_category']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('#input-category_depth_form').hide();*/
/* 			}else*/
/* 			{*/
/* 				$('#input-category_depth_form').show();*/
/* 			}*/
/* 		});*/
/* */
/* 		if($("input[name='use_cache']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-cache_time_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-cache_time_form').show();*/
/* 		}*/
/* */
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
/* */
/* 		if($("input[name='type_source']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('.field_product_tab').hide();*/
/* 			$('#category_preload').show();*/
/* 			$('.input-product_order_form').show();*/
/* 		}else*/
/* 		{*/
/* 			$('.field_product_tab').show();*/
/* 			$('#category_preload').hide();*/
/* 			$('.input-product_order_form').hide();*/
/* 		}*/
/* */
/* 		$("input[name='type_source']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('.field_product_tab').hide();*/
/* 				$('#category_preload').show();*/
/* 				$('.input-product_order_form').show();*/
/* 			}else*/
/* 			{*/
/* 				$('.field_product_tab').show();*/
/* 				$('#category_preload').hide();*/
/* 				$('.input-product_order_form').hide();*/
/* 			}*/
/* 		});*/
/* 	*/
/* 		$('#input-type_show').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() ;*/
/* 			console.log(opt_select);*/
/* 			if (opt_select == 'loadmore'){*/
/* 				$('#input-nb_rows').val(1);*/
/* 				$('.type_show_loadmore').addClass('hide');*/
/* 			}else{*/
/* 				$('.type_show_loadmore').removeClass('hide');*/
/* 			}*/
/* 		});*/
/* 	*/
/* 		$("input[name='display_banner_image']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('.banner-image').hide();*/
/* 				*/
/* 			}else*/
/* 			{*/
/* 				$('.banner-image').show();*/
/* 			}*/
/* 		});*/
/* */
/* 		if($("input[name='display_banner_image']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('.banner-image').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('.banner-image').show();*/
/* 		}*/
/* 	*/
/* 		$('#language').change(function(){*/
/* 			var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-name-'+opt_select);*/
/* 			$('[id^="input-head-name-"]').addClass('hide');*/
/* 			_input.removeClass('hide');*/
/* 		});*/
/* 	*/
/* 		$('.first-name').change(function(){*/
/* 			$('input[name="head_name"]').val($(this).val());*/
/* 		});*/
/* */
/* */
/* 		$("input[name='tab_all_display']").change(function(){*/
/* 			if($(this).val() == 1)*/
/* 			{*/
/* 				$('#input-catid_preload').append('<option value=*>All Product</option>');*/
/* 			}else{*/
/* 				$("#input-catid_preload option[value='*']").each(function() {*/
/* 					$(this).remove();*/
/* 				});*/
/* 			}*/
/* 		});*/
/* 	*/
/* 		if($("input[name='display_new']:radio:checked").val() == '0')*/
/* 		{*/
/* 			$('#input-date_day_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-date_day_form').show();*/
/* 		}*/
/* */
/* 		$("input[name='display_new']").change(function(){*/
/* 			val = $(this).val();*/
/* 			if(val ==0)*/
/* 			{*/
/* 				$('#input-date_day_form').hide();*/
/* 			}else*/
/* 			{*/
/* 				$('#input-date_day_form').show();*/
/* 			}*/
/* 		});*/
/* //--></script>*/
/* 	<script type="text/javascript">*/
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
