<?php

/* extension/module/so_instagram_gallery.twig */
class __TwigTemplate_7cad6623806f296637071c2d5f4ec8e105fa39f1991a827b081af0d31939f8c5 extends Twig_Template
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
\t      \t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-featured\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo " \" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save"), "method");
        echo "</button>
\t\t\t\t<a class=\"btn btn-success\" onclick=\"\$('#action').val('save_edit');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo " \" ><i class=\"fa fa-pencil-square-o\"></i> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_edit"), "method");
        echo "</a>
\t\t\t\t<a class=\"btn btn-info\" onclick=\"\$('#action').val('save_new');\$('#form-featured').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo " \" ><i class=\"fa fa-book\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_save_and_new"), "method");
        echo "</a>
\t\t\t\t<a href=\"";
        // line 9
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo " \" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i>  ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_cancel"), "method");
        echo "</a>
\t\t\t</div>
\t\t      \t<h1>";
        // line 11
        echo (isset($context["heading_title_so"]) ? $context["heading_title_so"] : null);
        echo "</h1>
\t\t      \t<ul class=\"breadcrumb\">
\t\t\t        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t      \t</ul>
    \t</div>
  \t</div>

 \t <div class=\"container-fluid\">

    ";
        // line 22
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            // line 23
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 29
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>  ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 32
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "  
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 36
        echo "

    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 40
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 43
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t\t\t";
        // line 45
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li ";
        // line 48
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo " class=\"active\" ";
        }
        echo " > <a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo " \"> <span class=\"fa fa-plus\"></span> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_add_module"), "method");
        echo "</a></li>
\t\t\t\t\t\t";
        // line 49
        $context["i"] = 1;
        // line 50
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            echo "  
\t\t\t\t\t\t\t<li role=\"presentation\" ";
            // line 51
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\"";
            }
            echo " >
\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo " \"  >
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 53
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 56
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "  
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
        // line 64
        $context["module_row"] = 1;
        // line 65
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            echo "  \t
\t\t\t\t\t\t";
            // line 66
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                echo " 
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"";
                // line 68
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\" class=\"remove btn btn-danger\" ><span><i class=\"fa fa-remove\"></i> ";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_delete"), "method");
                echo "</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 70
            echo " 

\t\t\t\t\t\t<div  id=\"tab-module";
            // line 72
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t\t";
            // line 75
            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 76
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 79
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo " \" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 81
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 82
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
            // line 88
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-head_name\"><b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t";
            // line 91
            $context["i"] = 0;
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                // line 93
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_description[";
                // line 95
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][head_name]\" placeholder=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_head_name"), "method");
                echo "\" id=\"input-head-name-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array())) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "head_name", array())) : (""));
                echo "\"  class=\"form-control ";
                echo ((((isset($context["i"]) ? $context["i"] : null) > 1)) ? ("hide ") : ("first-name "));
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" id=\"language\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 103
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 104
                echo $this->getAttribute($context["language"], "name", array());
                echo " 
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo " 
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 109
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 110
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "head_name", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
            // line 116
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-disp_title_module\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_display_title_module"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<select name=\"disp_title_module\" id=\"input-disp_title_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 120
            if ($this->getAttribute($context["module"], "disp_title_module", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 121
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 122
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 123
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 124
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 125
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t\t";
            // line 133
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 137
            if ($this->getAttribute($context["module"], "status", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 138
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 139
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 140
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 141
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 142
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"so_youtech\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#module\" data-toggle=\"tab\">";
            // line 153
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_module"), "method");
            echo "\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#source_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t";
            // line 157
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_source_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#effect_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t";
            // line 163
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect_option"), "method");
            echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#advanced_option\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t";
            // line 168
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_advanced_option"), "method");
            echo "\t
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t";
            // line 174
            echo "<div class=\"tab-pane\" id=\"module\"> 
\t\t\t\t\t\t\t\t\t";
            // line 176
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-class_suffix\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 179
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_suffix\" value=\"";
            // line 183
            echo $this->getAttribute($context["module"], "class_suffix", array());
            echo "\" id=\"input-class_suffix\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 189
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-type_show\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 190
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_show_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_type_show"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"type_show\" id=\"input-type_show\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["type_shows"]) ? $context["type_shows"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 196
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "type_show", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 197
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-row\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_row_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_row"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"row\" id=\"input-row\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "row", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 211
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group \"> ";
            // line 220
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_1200\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 221
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column0_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column0"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column0\" id=\"input-column_1200\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 227
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column0", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 228
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \"> ";
            // line 234
            echo " 
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_992\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 236
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column1_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column1"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column1\" id=\"input-column_992\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 242
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column1", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 243
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \"> ";
            // line 249
            echo " 
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_768_991\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 251
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column2_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column2"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column2\" id=\"input-column_768_992\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 257
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column2", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 258
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \"> ";
            // line 264
            echo " 
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_480_767\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 266
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column3_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column3"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column3\" id=\"input-column_480_767\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 272
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column3", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 273
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \"> ";
            // line 280
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-column_0_479\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 281
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_nb_column4_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_column4"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"nb_column4\" id=\"input-column_0_479\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nb_columns"]) ? $context["nb_columns"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 287
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "nb_column4", array()))) ? ("selected") : (""));
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 288
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 297
            echo "<div class=\"tab-pane\" id=\"source_option\"> 
\t\t\t\t\t\t\t\t";
            // line 299
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 300
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-users_id\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_users_id_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_users_id"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"users_id\" value=\"";
            // line 303
            echo $this->getAttribute($context["module"], "users_id", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_users_id"), "method");
            echo "\" id=\"input-users_id\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 305
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "users_id", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 306
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "users_id", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 308
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 311
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-access_token\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_access_token_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_access_token"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"access_user_token\" value=\"";
            // line 314
            echo $this->getAttribute($context["module"], "access_user_token", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "access_user_token"), "method");
            echo "\" id=\"input-access_token\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 316
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "access_user_token", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 317
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "access_user_token", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 319
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 322
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-limit_image\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_limit_image_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_limit_image"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"limit_image\" value=\"";
            // line 325
            echo $this->getAttribute($context["module"], "limit_image", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_limit_image"), "method");
            echo " \" id=\"input-limit_image\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 327
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "limit_image", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 328
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "limit_image", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 330
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 333
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-show_fullname\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_show_fullname_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_show_fullname"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"show_fullname\" id=\"input-show_fullname\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 337
            if ($this->getAttribute($context["module"], "show_fullname", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 338
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 339
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 340
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 341
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 342
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 343
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 353
            echo "<div class=\"tab-pane\" id=\"effect_option\"> ";
            // line 354
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 355
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-margin\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_margin_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_margin"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"margin\" value=\"";
            // line 358
            echo $this->getAttribute($context["module"], "margin", array());
            echo "\" id=\"input-margin\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 360
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "margin", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 361
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "margin", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 362
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 366
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-slideBy\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_slideBy_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_slideBy"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"slideBy\" value=\"";
            // line 369
            echo $this->getAttribute($context["module"], "slideBy", array());
            echo "\" id=\"input-slideBy\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 371
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "slideBy", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 372
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "slideBy", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 373
            echo "  
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 377
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplay\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplay_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplay"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"autoplay\" id=\"input-autoplay\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 381
            if ($this->getAttribute($context["module"], "autoplay", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 382
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 383
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 384
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 385
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 386
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 387
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 394
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplayTimeout\"> <b style=\"color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplayTimeout_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplay_timeout"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplay_timeout\" value=\"";
            // line 397
            echo $this->getAttribute($context["module"], "autoplay_timeout", array());
            echo "\" id=\"input-autoplay_timeout\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 399
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplay_timeout", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 400
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplay_timeout", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 401
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 406
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-entry_pausehover\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pausehover_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pausehover"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"pausehover\" id=\"input-pausehover\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 410
            if ($this->getAttribute($context["module"], "pausehover", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 411
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 412
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 413
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 414
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 415
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 416
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 422
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-autoplaySpeed\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplaySpeed_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_autoplaySpeed"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"autoplaySpeed\" value=\"";
            // line 425
            echo $this->getAttribute($context["module"], "autoplaySpeed", array());
            echo "\" id=\"input-autoplaySpeed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 427
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 428
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "autoplaySpeed", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 429
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 433
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-startPosition\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_startPosition_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_startPosition"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"startPosition\" value=\"";
            // line 436
            echo $this->getAttribute($context["module"], "startPosition", array());
            echo "\" id=\"input-startPosition\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 438
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "startPosition", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 439
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "startPosition", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 440
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 444
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-mouseDrag\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mouseDrag_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_mouseDrag"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 448
            if ($this->getAttribute($context["module"], "mouseDrag", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 450
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 451
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 453
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 454
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 457
            if ( !$this->getAttribute($context["module"], "mouseDrag", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 459
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 460
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"mouseDrag\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 462
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 463
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 469
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-touchDrag\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_touchDrag_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_touchDrag"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 473
            if ($this->getAttribute($context["module"], "touchDrag", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 475
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 476
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 478
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 479
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 482
            if ( !$this->getAttribute($context["module"], "touchDrag", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 484
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 485
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"touchDrag\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 487
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 488
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 494
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-loop\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_loop_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_loop"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 498
            if ($this->getAttribute($context["module"], "loop", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 500
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 501
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 503
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 504
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 507
            if ( !$this->getAttribute($context["module"], "loop", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 509
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 510
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"loop\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 512
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 513
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 519
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-button_page\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_page_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_page"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"button_page\" id=\"input-button_page\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 523
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["button_pages"]) ? $context["button_pages"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 524
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "button_page", array()))) ? ("selected") : (""));
                // line 525
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 527
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 534
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dots\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_dots_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_dots"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 538
            if ($this->getAttribute($context["module"], "dots", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 540
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 541
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 543
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 544
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 547
            if ( !$this->getAttribute($context["module"], "dots", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 549
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 550
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"dots\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 552
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 553
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 559
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-dotsSpeed\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_dotsSpeed_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_dotsSpeed"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"dotsSpeed\" value=\"";
            // line 562
            echo $this->getAttribute($context["module"], "dotsSpeed", array());
            echo "\" id=\"input-dotsSpeed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 564
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "dotsSpeed", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 565
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "dotsSpeed", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 566
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 571
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-navs\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_navs_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_navs"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 575
            if ($this->getAttribute($context["module"], "navs", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 577
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 578
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 580
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 581
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 584
            if ( !$this->getAttribute($context["module"], "navs", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 586
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 587
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"navs\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 589
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 590
            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 596
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-navSpeed\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_navspeed_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_navspeed"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"navSpeed\" value=\"";
            // line 599
            echo $this->getAttribute($context["module"], "navSpeed", array());
            echo "\" id=\"input-navSpeed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 601
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "navSpeed", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 602
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "navSpeed", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 603
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 607
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-effect\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_effect"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"effect\" id=\"input-effect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 611
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects"]) ? $context["effects"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 612
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "effect", array()))) ? ("selected") : (""));
                // line 613
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 615
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 620
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-duration\"> <b style=\"color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_duration_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_duration"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"duration\" value=\"";
            // line 623
            echo $this->getAttribute($context["module"], "duration", array());
            echo "\" id=\"input-duration\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 625
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "duration", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 626
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "duration", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 627
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 631
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-delay\"> <b style=\"color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_delay_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_delay"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"delay\" value=\"";
            // line 634
            echo $this->getAttribute($context["module"], "delay", array());
            echo "\" id=\"input-delay\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 636
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "delay", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 637
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "delay", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 638
            echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t";
            // line 643
            echo "<div class=\"tab-pane\" id=\"advanced_option\"> ";
            // line 644
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 646
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-pre_text\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_pre_text"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"pre_text\" id=\"input-pre_text\" class=\"form-control\">";
            // line 649
            echo $this->getAttribute($context["module"], "pre_text", array());
            echo " </textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 654
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-post_text\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_post_text"), "method");
            echo " </span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"post_text\" id=\"input-post_text\" class=\"form-control\">";
            // line 657
            echo $this->getAttribute($context["module"], "post_text", array());
            echo " </textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 662
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use_cache\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 663
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 668
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 670
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 671
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 673
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 674
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 677
            if ( !$this->getAttribute($context["module"], "use_cache", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 679
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 680
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 682
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 683
            echo "   
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-cache_time_form\"> ";
            // line 689
            echo "\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cache_time\">
\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 690
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cache_time\" value=\"";
            // line 694
            echo $this->getAttribute($context["module"], "cache_time", array());
            echo "\" id=\"input-cache_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t";
            // line 697
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 698
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 700
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 704
            echo "</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 707
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 708
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 709
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t  
        </form>\t\t
      </div>
    </div>
  </div>
 
  <script type=\"text/javascript\"><!--
\t\$('input[name=\\'category\\']').autocomplete({
\t\tsource: function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/so_extra_slider/autocomplete_category&user_token=";
        // line 723
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\tselect: function(item) {
\t\t\t\$('input[name=\\'category\\']').val('');

\t\t\t\$('#featured-category' + item['value']).remove();

\t\t\t\$('#featured-category').append('<div id=\"featured-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category[]\" value=\"' + item['value'] + '\" /></div>');
\t\t}
\t});
\t\t
\t\$('#featured-category').delegate('.fa-minus-circle', 'click', function() {
\t\t\$(this).parent().remove();
\t});
\t\$('input[name=\\'product_feature\\']').autocomplete({
\t\tsource: function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 750
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\tselect: function(item) {
\t\t\t\$('input[name=\\'product_feature\\']').val('');
\t\t\t
\t\t\t\$('#featured-product_feature' + item['value']).remove();
\t\t\t
\t\t\t\$('#featured-product_feature').append('<div id=\"featured-product_feature' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_feature[]\" value=\"' + item['value'] + '\" /></div>');\t
\t\t}
\t});
\t\t
\t\$('#featured-product_feature').delegate('.fa-minus-circle', 'click', function() {
\t\t\$(this).parent().remove();
\t});
\t\$('#so_youtech a:first').tab('show');

\tif(\$(\"input[name='child_category']:radio:checked\").val() == '0')
\t{
\t\t\$('#input-category_depth_form').hide();
\t}else
\t{
\t\t\$('#input-category_depth_form').show();
\t}

\t\$(\"input[name='child_category']\").change(function(){
\t\tval = \$(this).val();
\t\tif(val ==0)
\t\t{
\t\t\t\$('#input-category_depth_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-category_depth_form').show();
\t\t}
\t});
\tif(\$(\"input[name='use_cache']:radio:checked\").val() == '0')
\t{
\t\t\$('#input-cache_time_form').hide();
\t}else
\t{
\t\t\$('#input-cache_time_form').show();
\t}
\t\$(\"input[name='use_cache']\").change(function(){
\t\tval = \$(this).val();
\t\tif(val ==0)
\t\t{
\t\t\t\$('#input-cache_time_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-cache_time_form').show();
\t\t}
\t});
\t\$('#language').change(function(){
\t\tvar that = \$(this), opt_select = \$('option:selected', that).val() , _input = \$('#input-head-name-'+opt_select);
\t\t\$('[id^=\"input-head-name-\"]').addClass('hide');
\t\t_input.removeClass('hide');
\t});

\t\$('.first-name').change(function(){
\t\t\$('input[name=\"head-name\"]').val(\$(this).val());
\t});
\t
\tif(\$(\"input[name='display_new']:radio:checked\").val() == '0')
\t{
\t\t\$('#input-date_day_form').hide();
\t}else
\t{
\t\t\$('#input-date_day_form').show();
\t}
\t\t
\t\$(\"input[name='display_new']\").change(function(){
\t\tval = \$(this).val();
\t\tif(val ==0)
\t\t{
\t\t\t\$('#input-date_day_form').hide();
\t\t}else
\t\t{
\t\t\t\$('#input-date_day_form').show();
\t\t}
\t});
\t
\t/*Type Data*/
\tif(\$(\"input[name='type_data']:radio:checked\").val() == 'category')
\t{
\t\t\$('.input-product_feature').hide();
\t\t\$('.input-category').show();
\t}else{
\t\t\$('.input-product_feature').show();
\t\t\$('.input-category').hide();
\t}
\t\t
\t\$(\"input[name='type_data']\").change(function(){
\t\tval = \$(this).val();
\t\tif(val == 'category')
\t\t{
\t\t\t\$('.input-product_feature').hide();
\t\t\t\$('.input-category').show();
\t\t}else{
\t\t\t\$('.input-product_feature').show();
\t\t\t\$('.input-category').hide();
\t\t}
\t});
\tjQuery(document).ready(function (\$) {
\t\tvar button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 862
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
        echo "</button></div>';
\t\tvar button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 863
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> </button></div>';
\t\tif(\$('#column-left').hasClass('active')){
\t\t\t\$('#column-left #stats').after(button);
\t\t}else{
\t\t\t\$('#column-left #stats').after(button_min);
\t\t}
\t\t\$('#button-menu').click(function(){
\t\t\t\$('.remove-caching').remove();
\t\t\tif(\$(this).parents().find('#column-left').hasClass('active')){
\t\t\t\t\$('#column-left #stats').after(button);
\t\t\t}else{
\t\t\t\t\$('#column-left #stats').after(button_min);
\t\t\t}
\t\t});
\t});
\tfunction remove_cache(){
\t\tvar success_remove = '";
        // line 879
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
\t\t\$.ajax({
\t\t\ttype: 'POST',
\t\t\turl: '";
        // line 882
        echo (isset($context["linkremove"]) ? $context["linkremove"] : null);
        echo "',
\t\t\tdata: {\tis_ajax_cache_lite: 1},
\t\t\tsuccess: function () {
\t\t\t\tvar html = '<div class=\"alert alert-success cls-remove-cache\"> '+success_remove+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>';
\t\t\t\tif(!(\$('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){
\t\t\t\t\t\$('.page-header .container-fluid').append(html);
\t\t\t\t}
\t\t\t},
\t\t});
\t}
\t//--></script>

</div>
";
        // line 895
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/so_instagram_gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1982 => 895,  1966 => 882,  1960 => 879,  1941 => 863,  1935 => 862,  1820 => 750,  1790 => 723,  1774 => 709,  1768 => 708,  1766 => 707,  1761 => 704,  1756 => 700,  1751 => 698,  1747 => 697,  1741 => 694,  1732 => 690,  1729 => 689,  1722 => 683,  1717 => 682,  1713 => 680,  1708 => 679,  1703 => 677,  1698 => 674,  1693 => 673,  1689 => 671,  1684 => 670,  1679 => 668,  1669 => 663,  1666 => 662,  1659 => 657,  1650 => 654,  1643 => 649,  1634 => 646,  1631 => 644,  1629 => 643,  1623 => 638,  1618 => 637,  1614 => 636,  1609 => 634,  1600 => 631,  1595 => 627,  1590 => 626,  1586 => 625,  1581 => 623,  1572 => 620,  1566 => 615,  1553 => 613,  1550 => 612,  1546 => 611,  1536 => 607,  1531 => 603,  1526 => 602,  1522 => 601,  1517 => 599,  1508 => 596,  1501 => 590,  1496 => 589,  1492 => 587,  1487 => 586,  1482 => 584,  1477 => 581,  1472 => 580,  1468 => 578,  1463 => 577,  1458 => 575,  1448 => 571,  1442 => 566,  1437 => 565,  1433 => 564,  1428 => 562,  1419 => 559,  1412 => 553,  1407 => 552,  1403 => 550,  1398 => 549,  1393 => 547,  1388 => 544,  1383 => 543,  1379 => 541,  1374 => 540,  1369 => 538,  1359 => 534,  1351 => 527,  1338 => 525,  1335 => 524,  1331 => 523,  1321 => 519,  1314 => 513,  1309 => 512,  1305 => 510,  1300 => 509,  1295 => 507,  1290 => 504,  1285 => 503,  1281 => 501,  1276 => 500,  1271 => 498,  1261 => 494,  1254 => 488,  1249 => 487,  1245 => 485,  1240 => 484,  1235 => 482,  1230 => 479,  1225 => 478,  1221 => 476,  1216 => 475,  1211 => 473,  1201 => 469,  1194 => 463,  1189 => 462,  1185 => 460,  1180 => 459,  1175 => 457,  1170 => 454,  1165 => 453,  1161 => 451,  1156 => 450,  1151 => 448,  1141 => 444,  1136 => 440,  1131 => 439,  1127 => 438,  1122 => 436,  1113 => 433,  1108 => 429,  1103 => 428,  1099 => 427,  1094 => 425,  1085 => 422,  1078 => 416,  1073 => 415,  1069 => 414,  1066 => 413,  1061 => 412,  1057 => 411,  1053 => 410,  1043 => 406,  1037 => 401,  1032 => 400,  1028 => 399,  1023 => 397,  1014 => 394,  1006 => 387,  1001 => 386,  997 => 385,  994 => 384,  989 => 383,  985 => 382,  981 => 381,  971 => 377,  966 => 373,  961 => 372,  957 => 371,  952 => 369,  943 => 366,  938 => 362,  933 => 361,  929 => 360,  924 => 358,  915 => 355,  913 => 354,  911 => 353,  900 => 343,  895 => 342,  891 => 341,  888 => 340,  883 => 339,  879 => 338,  875 => 337,  865 => 333,  861 => 330,  856 => 328,  852 => 327,  845 => 325,  836 => 322,  832 => 319,  827 => 317,  823 => 316,  816 => 314,  807 => 311,  803 => 308,  798 => 306,  794 => 305,  787 => 303,  778 => 300,  776 => 299,  773 => 297,  764 => 289,  752 => 288,  747 => 287,  743 => 286,  733 => 281,  730 => 280,  723 => 274,  711 => 273,  707 => 272,  701 => 271,  691 => 266,  687 => 264,  680 => 259,  668 => 258,  663 => 257,  659 => 256,  649 => 251,  645 => 249,  638 => 244,  626 => 243,  621 => 242,  617 => 241,  607 => 236,  603 => 234,  596 => 229,  584 => 228,  579 => 227,  575 => 226,  565 => 221,  562 => 220,  554 => 213,  542 => 211,  537 => 210,  533 => 209,  523 => 205,  516 => 199,  504 => 197,  499 => 196,  495 => 195,  485 => 190,  482 => 189,  474 => 183,  465 => 179,  462 => 178,  459 => 176,  456 => 174,  448 => 168,  440 => 163,  431 => 157,  424 => 153,  413 => 144,  408 => 142,  404 => 141,  401 => 140,  396 => 139,  392 => 138,  388 => 137,  378 => 133,  371 => 127,  366 => 125,  362 => 124,  359 => 123,  354 => 122,  350 => 121,  346 => 120,  336 => 116,  331 => 112,  326 => 110,  322 => 109,  317 => 106,  308 => 104,  304 => 103,  298 => 102,  292 => 98,  275 => 95,  270 => 93,  264 => 92,  260 => 91,  251 => 88,  246 => 84,  241 => 82,  237 => 81,  230 => 79,  222 => 76,  219 => 75,  214 => 72,  210 => 70,  202 => 68,  197 => 66,  190 => 65,  188 => 64,  180 => 58,  172 => 56,  166 => 53,  158 => 52,  152 => 51,  145 => 50,  143 => 49,  133 => 48,  128 => 45,  124 => 43,  118 => 40,  112 => 36,  105 => 32,  98 => 29,  96 => 28,  93 => 27,  85 => 23,  83 => 22,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   	<div class="page-header">*/
/*     	<div class="container-fluid">*/
/* 	      	<div class="pull-right">*/
/* 				<button type="submit" form="form-featured" data-toggle="tooltip" title="{{ objlang.get('entry_button_save') }} " class="btn btn-primary"><i class="fa fa-save"></i> {{ objlang.get('entry_button_save')}}</button>*/
/* 				<a class="btn btn-success" onclick="$('#action').val('save_edit');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_edit') }} " ><i class="fa fa-pencil-square-o"></i> {{ objlang.get('entry_button_save_and_edit')}}</a>*/
/* 				<a class="btn btn-info" onclick="$('#action').val('save_new');$('#form-featured').submit();" data-toggle="tooltip" title="{{ objlang.get('entry_button_save_and_new') }} " ><i class="fa fa-book"></i>  {{ objlang.get('entry_button_save_and_new')}}</a>*/
/* 				<a href="{{ cancel}} " data-toggle="tooltip" title="{{ objlang.get('entry_button_cancel') }} " class="btn btn-danger"><i class="fa fa-reply"></i>  {{ objlang.get('entry_button_cancel')}}</a>*/
/* 			</div>*/
/* 		      	<h1>{{ heading_title_so }}</h1>*/
/* 		      	<ul class="breadcrumb">*/
/* 			        {% for breadcrumb in breadcrumbs %}*/
/* 			        <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 			        {% endfor %}*/
/* 		      	</ul>*/
/*     	</div>*/
/*   	</div>*/
/* */
/*  	 <div class="container-fluid">*/
/* */
/*     {% if error.warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error.warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% if success %}*/
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i>  {{ success }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 		<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_layout }}  */
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ subheading }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-featured" class="form-horizontal">*/
/* 			{#//Nav tabs #}*/
/* 			<div class="row">*/
/* 				<div class="col-xs-12">*/
/* 					<ul class="nav nav-tabs" role="tablist">*/
/* 						<li {% if selectedid  == 0  %} class="active" {% endif %} > <a href="{{ link }} "> <span class="fa fa-plus"></span> {{ objlang.get('button_add_module') }}</a></li>*/
/* 						{% set i = 1 %}*/
/* 						{% for key, module in moduletabs %}  */
/* 							<li role="presentation" {% if module.module_id == selectedid  %} class="active"{% endif %} >*/
/* 							<a href="{{ link }}&module_id={{ module.module_id}}" aria-controls="bannermodule-{{ key }} "  >*/
/* 								<span class="fa fa-pencil"></span> {{ module.name}}*/
/* 							</a>*/
/* 							</li>*/
/* 							{% set i = i + 1 %}  */
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* 					{% set module_row = 1 %}*/
/* 					{% for key, module in modules %}  	*/
/* 						{% if selectedid %} */
/* 						<div class="pull-right">*/
/* 							<a href="{{ action }}&delete=1" class="remove btn btn-danger" ><span><i class="fa fa-remove"></i> {{ objlang.get('entry_button_delete') }}</span></a>*/
/* 						</div>*/
/* 						{% endif %} */
/* */
/* 						<div  id="tab-module{{module_row}}" class="col-sm-12">*/
/* 							<div class="form-group"> */
/* 								{# Module Name #}*/
/* 								<input type="hidden" name="action" id="action" value=""/>*/
/* 								<label class="col-sm-3 control-label" for="input-name"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_name_desc') }} ">{{ objlang.get('entry_name') }}  </span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<input type="text" name="name" value="{{ module.name }}" placeholder="{{ objlang.get('entry_name') }} " id="input-name" class="form-control" />*/
/* 									</div>*/
/* 									{% if error.name %} */
/* 									<div class="text-danger col-sm-12">{{ error.name }} </div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								{# Header title #}*/
/* 								<label class="col-sm-3 control-label" for="input-head_name"><b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_head_name_desc') }} ">{{ objlang.get('entry_head_name') }}  </span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										{% set i=0 %}											*/
/* 										{% for language in languages %} */
/* 											{% set i = i + 1 %}		*/
/* 											*/
/* 											<input type="text" name="module_description[{{ language.language_id }}][head_name]" placeholder="{{ objlang.get('entry_head_name')}}" id="input-head-name-{{ language.language_id}}" value="{{ module_description[language.language_id].head_name ? module_description[language.language_id].head_name : '' }}"  class="form-control {{ i > 1 ? 'hide ' : 'first-name '}}" />*/
/* 											*/
/* 										{% endfor %}*/
/* 										 */
/* 									</div>*/
/* 									<div class="col-sm-3">*/
/* 										<select  class="form-control" id="language">*/
/* 											{% for language in languages %} */
/* 											<option value="{{ language.language_id }}">*/
/* 												{{ language.name }} */
/* 											</option>*/
/* 											{% endfor %} */
/* 										</select>*/
/* 									</div>*/
/* 									{% if error.head_name %} */
/* 									<div class="text-danger col-sm-12">{{ error.head_name }} </div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								{# Display header title #}*/
/* 								<label class="col-sm-3 control-label" for="input-disp_title_module"> <span data-toggle="tooltip" title="{{ objlang.get('entry_display_title_module_desc') }} ">{{ objlang.get('entry_display_title_module') }}  </span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<select name="disp_title_module" id="input-disp_title_module" class="form-control">*/
/* 											{% if module.disp_title_module %} */
/* 												<option value="1" selected="selected">{{ objlang.get('text_yes') }} </option>*/
/* 												<option value="0">{{ objlang.get('text_no') }} </option>*/
/* 											{% else %}   */
/* 												<option value="1">{{ objlang.get('text_yes') }} </option>*/
/* 												<option value="0" selected="selected">{{ objlang.get('text_no') }} </option>*/
/* 											 {% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group"> */
/* 								{# Status #}*/
/* 								<label class="col-sm-3 control-label" for="input-status"><span data-toggle="tooltip" title="{{ objlang.get('entry_status_desc') }} ">{{ objlang.get('entry_status') }}  </span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<select name="status" id="input-status" class="form-control">*/
/* 											{% if module.status %} */
/* 												<option value="1" selected="selected">{{ objlang.get('text_enabled') }} </option>*/
/* 												<option value="0">{{ objlang.get('text_disabled') }} </option>*/
/* 											{% else %}   */
/* 												<option value="1">{{ objlang.get('text_enabled') }} </option>*/
/* 												<option value="0" selected="selected">{{ objlang.get('text_disabled') }} </option>*/
/* 											 {% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="tab-pane">*/
/* 							<ul class="nav nav-tabs" id="so_youtech">*/
/* 								<li>*/
/* 									<a href="#module" data-toggle="tab">{{ objlang.get('entry_module' )}}	</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#source_option" data-toggle="tab">*/
/* 										{{ objlang.get('entry_source_option' )}}*/
/* 									</a>*/
/* 								</li>*/
/* 								*/
/* 								<li>*/
/* 									<a href="#effect_option" data-toggle="tab">*/
/* 										{{ objlang.get('entry_effect_option' )}}*/
/* 									</a>*/
/* 								</li>*/
/* 								<li>*/
/* 									<a href="#advanced_option" data-toggle="tab">*/
/* 										{{ objlang.get('entry_advanced_option' )}}	*/
/* 									</a>*/
/* 								</li>*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="module"> */
/* 									{# General Option #}*/
/* 									*/
/* 									<div class="form-group"> {# Class suffix  #}*/
/* 										<label class="col-sm-3 control-label" for="input-class_suffix">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_class_suffix_desc') }} ">{{ objlang.get('entry_class_suffix') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="class_suffix" value="{{ module.class_suffix }}" id="input-class_suffix" class="form-control" />*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="form-group"> {# <!--Type show -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-type_show">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_type_show_desc') }} ">{{ objlang.get('entry_type_show') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="type_show" id="input-type_show" class="form-control">*/
/* 													{% for option_id, option_value in type_shows %}*/
/* 														{% set selected = option_id  == module.type_show ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="form-group"> {# <!-- Row -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-row"> <span data-toggle="tooltip" title="{{ objlang.get('entry_row_desc') }} ">{{ objlang.get('entry_row') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="row" id="input-row" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %}*/
/* 														{% set selected = option_id  == module.row ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %}*/
/* 													*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="form-group "> {# Columns 1  #}*/
/* 										<label class="col-sm-3 control-label" for="input-column_1200">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column0_desc') }} ">{{ objlang.get('entry_column0') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column0" id="input-column_1200" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %}*/
/* 														{% set selected = option_id  == module.nb_column0 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group "> {# Columns 2  #} */
/* 										<label class="col-sm-3 control-label" for="input-column_992">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column1_desc') }} ">{{ objlang.get('entry_column1') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column1" id="input-column_992" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %}*/
/* 														{% set selected = option_id  == module.nb_column1 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group "> {# Columns 3  #} */
/* 										<label class="col-sm-3 control-label" for="input-column_768_991">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column2_desc') }} ">{{ objlang.get('entry_column2') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column2" id="input-column_768_992" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %}*/
/* 														{% set selected = option_id  == module.nb_column2 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group "> {# Columns 4  #} */
/* 										<label class="col-sm-3 control-label" for="input-column_480_767">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column3_desc') }} ">{{ objlang.get('entry_column3') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column3" id="input-column_480_767" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %} */
/* 														{% set selected = option_id  == module.nb_column3 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group "> {# Columns 5  #}*/
/* 										<label class="col-sm-3 control-label" for="input-column_0_479">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_nb_column4_desc') }} ">{{ objlang.get('entry_column4') }}  </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="nb_column4" id="input-column_0_479" class="form-control">*/
/* 													{% for option_id, option_value in nb_columns %}*/
/* 														{% set selected = option_id  == module.nb_column4 ? 'selected' :'' %}	*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="source_option"> */
/* 								{# Source Option #}*/
/* 									<div class="form-group"> {# <!-- Instagram Users-->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-users_id"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_users_id_desc') }} ">{{ objlang.get('entry_users_id') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="users_id" value="{{ module.users_id }}" placeholder="{{ objlang.get('entry_users_id') }}" id="input-users_id" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.users_id %} */
/* 												<div class="text-danger col-sm-12">{{ error.users_id }} </div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- Access Token -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-access_token"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_access_token_desc') }} ">{{ objlang.get('entry_access_token') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="access_user_token" value="{{ module.access_user_token }}" placeholder="{{ objlang.get('access_user_token') }}" id="input-access_token" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.access_user_token %} */
/* 											<div class="text-danger col-sm-12">{{ error.access_user_token }} </div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- Limit Image -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-limit_image"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_limit_image_desc') }} ">{{ objlang.get('entry_limit_image') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="limit_image" value="{{ module.limit_image }}" placeholder="{{ objlang.get('entry_limit_image') }} " id="input-limit_image" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.limit_image %} */
/* 											<div class="text-danger col-sm-12">{{ error.limit_image }} </div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!--Display full name -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-show_fullname"> <span data-toggle="tooltip" title="{{ objlang.get('entry_show_fullname_desc') }} ">{{ objlang.get('entry_show_fullname') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="show_fullname" id="input-show_fullname" class="form-control">*/
/* 													{% if module.show_fullname %} */
/* 														<option value="1" selected="selected">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0">{{ objlang.get('text_no') }} </option>*/
/* 													{% else %}   */
/* 														<option value="1">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_no') }} </option>*/
/* 													{% endif %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* 							*/
/* 							*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="effect_option"> {# <!-- Effect Options -->  #}*/
/* 									<div class="form-group"> {# <!-- margin -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-margin"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_margin_desc') }} ">{{ objlang.get('entry_margin') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="margin" value="{{ module.margin }}" id="input-margin" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.margin %} */
/* 												<div class="text-danger col-sm-12">{{ error.margin }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- slideBy -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-slideBy"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_slideBy_desc') }} ">{{ objlang.get('entry_slideBy') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="slideBy" value="{{ module.slideBy }}" id="input-slideBy" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.slideBy %} */
/* 											<div class="text-danger col-sm-12">{{ error.slideBy }} </div>*/
/* 											{% endif %}  */
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- autoplay -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-autoplay"> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplay_desc') }} ">{{ objlang.get('entry_autoplay') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="autoplay" id="input-autoplay" class="form-control">*/
/* 													{% if module.autoplay %} */
/* 														<option value="1" selected="selected">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0">{{ objlang.get('text_no') }} </option>*/
/* 													{% else %}   */
/* 														<option value="1">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_no') }} </option>*/
/* 													{% endif %} */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="form-group"> {# <!-- autoplayTimeout -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-autoplayTimeout"> <b style="color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplayTimeout_desc') }} ">{{ objlang.get('entry_autoplay_timeout') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="autoplay_timeout" value="{{ module.autoplay_timeout }}" id="input-autoplay_timeout" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.autoplay_timeout %} */
/* 												<div class="text-danger col-sm-12">{{ error.autoplay_timeout }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="form-group"> {# <!-- autoplayHoverPause -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-entry_pausehover"> <span data-toggle="tooltip" title="{{ objlang.get('entry_pausehover_desc') }} ">{{ objlang.get('entry_pausehover') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="pausehover" id="input-pausehover" class="form-control">*/
/* 													{% if module.pausehover %} */
/* 														<option value="1" selected="selected">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0">{{ objlang.get('text_no') }} </option>*/
/* 													{% else %}   */
/* 														<option value="1">{{ objlang.get('text_yes') }} </option>*/
/* 														<option value="0" selected="selected">{{ objlang.get('text_no') }} </option>*/
/* 													{% endif %}  */
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- autoplaySpeed -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-autoplaySpeed"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_autoplaySpeed_desc') }} ">{{ objlang.get('entry_autoplaySpeed') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="autoplaySpeed" value="{{ module.autoplaySpeed }}" id="input-autoplaySpeed" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.autoplaySpeed %} */
/* 												<div class="text-danger col-sm-12">{{ error.autoplaySpeed }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>									*/
/* 									<div class="form-group"> {# <!-- startPosition -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-startPosition"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_startPosition_desc') }} ">{{ objlang.get('entry_startPosition') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="startPosition" value="{{ module.startPosition }}" id="input-startPosition" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.startPosition %} */
/* 												<div class="text-danger col-sm-12">{{ error.startPosition }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- mouseDrag -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-mouseDrag"> <span data-toggle="tooltip" title="{{ objlang.get('entry_mouseDrag_desc') }} ">{{ objlang.get('entry_mouseDrag') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.mouseDrag %} */
/* 														<input type="radio" name="mouseDrag" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="mouseDrag" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.mouseDrag %} */
/* 														<input type="radio" name="mouseDrag" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="mouseDrag" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- touchDrag -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-touchDrag"> <span data-toggle="tooltip" title="{{ objlang.get('entry_touchDrag_desc') }} ">{{ objlang.get('entry_touchDrag') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.touchDrag %} */
/* 														<input type="radio" name="touchDrag" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="touchDrag" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.touchDrag %} */
/* 														<input type="radio" name="touchDrag" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="touchDrag" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>		*/
/* 									<div class="form-group"> {# <!-- Loop -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-loop"> <span data-toggle="tooltip" title="{{ objlang.get('entry_loop_desc') }} ">{{ objlang.get('entry_loop') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.loop %} */
/* 														<input type="radio" name="loop" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="loop" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.loop %} */
/* 														<input type="radio" name="loop" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="loop" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>	*/
/* 									<div class="form-group"> {# <!--button page-->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-button_page"> <span data-toggle="tooltip" title="{{ objlang.get('entry_button_page_desc') }} ">{{ objlang.get('entry_button_page') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="button_page" id="input-button_page" class="form-control">*/
/* 													{% for option_id, option_value in button_pages %}*/
/* 														{%  set selected = (option_id  ==  module.button_page) ? 'selected' : '' %}*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %}*/
/* 											*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>						*/
/* 									*/
/* 									<div class="form-group"> {# <!-- dots -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-dots"> <span data-toggle="tooltip" title="{{ objlang.get('entry_dots_desc') }} ">{{ objlang.get('entry_dots') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.dots %} */
/* 														<input type="radio" name="dots" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="dots" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %} */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.dots %} */
/* 														<input type="radio" name="dots" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="dots" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- dotsSpeed -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-dotsSpeed"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_dotsSpeed_desc') }} ">{{ objlang.get('entry_dotsSpeed') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="dotsSpeed" value="{{ module.dotsSpeed }}" id="input-dotsSpeed" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.dotsSpeed %} */
/* 												<div class="text-danger col-sm-12">{{ error.dotsSpeed }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 									<div class="form-group"> {# <!-- navs -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-navs"> <span data-toggle="tooltip" title="{{ objlang.get('entry_navs_desc') }} ">{{ objlang.get('entry_navs') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.navs %} */
/* 														<input type="radio" name="navs" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="navs" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.navs %} */
/* 														<input type="radio" name="navs" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="navs" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}  */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- navSpeed -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-navSpeed"> <b style="font-weight:bold; color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_navspeed_desc') }} ">{{ objlang.get('entry_navspeed') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="navSpeed" value="{{ module.navSpeed }}" id="input-navSpeed" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.navSpeed %} */
/* 												<div class="text-danger col-sm-12">{{ error.navSpeed }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- effect -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-effect"> <span data-toggle="tooltip" title="{{ objlang.get('entry_effect_desc') }} ">{{ objlang.get('entry_effect') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<select name="effect" id="input-effect" class="form-control">*/
/* 													{% for option_id, option_value in effects  %}*/
/* 														{%  set selected = (option_id  ==  module.effect) ? 'selected' : '' %}*/
/* 														<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- duration -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-duration"> <b style="color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_duration_desc') }} ">{{ objlang.get('entry_duration') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="duration" value="{{ module.duration }}" id="input-duration" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.duration %} */
/* 												<div class="text-danger col-sm-12">{{ error.duration }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# <!-- delay -->  #}*/
/* 										<label class="col-sm-3 control-label" for="input-delay"> <b style="color:#f00">*</b> <span data-toggle="tooltip" title="{{ objlang.get('entry_delay_desc') }} ">{{ objlang.get('entry_delay') }}  </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="delay" value="{{ module.delay }}" id="input-delay" class="form-control" />*/
/* 											</div>*/
/* 											{% if error.delay %} */
/* 												<div class="text-danger col-sm-12">{{ error.delay }} </div>*/
/* 											{% endif %} */
/* 										</div>*/
/* 									</div>*/
/* 								</div>	*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 								<div class="tab-pane" id="advanced_option"> {# Advanced Option #}*/
/* 									*/
/* 									<div class="form-group"> {# Pre-text #}*/
/* 										<label class="col-sm-3 control-label" for="input-pre_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_pre_text_desc') }} ">{{ objlang.get('entry_pre_text') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<textarea name="pre_text" id="input-pre_text" class="form-control">{{ module.pre_text }} </textarea>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# Post-text #}*/
/* 										<label class="col-sm-3 control-label" for="input-post_text"> <span data-toggle="tooltip" title="{{ objlang.get('entry_post_text_desc') }} ">{{ objlang.get('entry_post_text') }} </span></label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<textarea name="post_text" id="input-post_text" class="form-control">{{ module.post_text }} </textarea>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group"> {# Use Cache #}*/
/* 										<label class="col-sm-3 control-label" for="input-use_cache">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_use_cache_desc') }} ">{{ objlang.get('entry_use_cache') }} </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<label class="radio-inline">*/
/* 													{% if module.use_cache %} */
/* 														<input type="radio" name="use_cache" value="1" checked="checked" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="use_cache" value="1" />*/
/* 														{{ objlang.get('text_yes') }} */
/* 													{% endif %} */
/* 												</label>*/
/* 												<label class="radio-inline">*/
/* 													{% if not module.use_cache %} */
/* 														<input type="radio" name="use_cache" value="0" checked="checked" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% else %}   */
/* 														<input type="radio" name="use_cache" value="0" />*/
/* 														{{ objlang.get('text_no') }} */
/* 													{% endif %}   */
/* 												</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group" id="input-cache_time_form"> {# Cache Time #}*/
/* 										<label class="col-sm-3 control-label" for="input-cache_time">*/
/* 											<span data-toggle="tooltip" title="{{ objlang.get('entry_cache_time_desc') }} ">{{ objlang.get('entry_cache_time') }} </span>*/
/* 										</label>*/
/* 										<div class="col-sm-9">*/
/* 											<div class="col-sm-5">*/
/* 												<input type="text" name="cache_time" value="{{ module.cache_time }}" id="input-cache_time" class="form-control" />*/
/* 											</div>*/
/* */
/* 											{% if error.cache_time %} */
/* 												<div class="text-danger col-sm-12">{{ error.cache_time }} </div>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							{# // -----------------------------------------------------------------------#}*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						{% set module_row = module_row + 1 %}*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			*/
/* 		  */
/*         </form>		*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*  */
/*   <script type="text/javascript"><!--*/
/* 	$('input[name=\'category\']').autocomplete({*/
/* 		source: function(request, response) {*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=extension/module/so_extra_slider/autocomplete_category&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 				dataType: 'json',*/
/* 				success: function(json) {*/
/* 					response($.map(json, function(item) {*/
/* 						return {*/
/* 							label: item['name'],*/
/* 							value: item['category_id']*/
/* 						}*/
/* 					}));*/
/* 				}*/
/* 			});*/
/* 		},*/
/* 		select: function(item) {*/
/* 			$('input[name=\'category\']').val('');*/
/* */
/* 			$('#featured-category' + item['value']).remove();*/
/* */
/* 			$('#featured-category').append('<div id="featured-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category[]" value="' + item['value'] + '" /></div>');*/
/* 		}*/
/* 	});*/
/* 		*/
/* 	$('#featured-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 		$(this).parent().remove();*/
/* 	});*/
/* 	$('input[name=\'product_feature\']').autocomplete({*/
/* 		source: function(request, response) {*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 				dataType: 'json',*/
/* 				success: function(json) {*/
/* 					response($.map(json, function(item) {*/
/* 						return {*/
/* 							label: item['name'],*/
/* 							value: item['product_id']*/
/* 						}*/
/* 					}));*/
/* 				}*/
/* 			});*/
/* 		},*/
/* 		select: function(item) {*/
/* 			$('input[name=\'product_feature\']').val('');*/
/* 			*/
/* 			$('#featured-product_feature' + item['value']).remove();*/
/* 			*/
/* 			$('#featured-product_feature').append('<div id="featured-product_feature' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_feature[]" value="' + item['value'] + '" /></div>');	*/
/* 		}*/
/* 	});*/
/* 		*/
/* 	$('#featured-product_feature').delegate('.fa-minus-circle', 'click', function() {*/
/* 		$(this).parent().remove();*/
/* 	});*/
/* 	$('#so_youtech a:first').tab('show');*/
/* */
/* 	if($("input[name='child_category']:radio:checked").val() == '0')*/
/* 	{*/
/* 		$('#input-category_depth_form').hide();*/
/* 	}else*/
/* 	{*/
/* 		$('#input-category_depth_form').show();*/
/* 	}*/
/* */
/* 	$("input[name='child_category']").change(function(){*/
/* 		val = $(this).val();*/
/* 		if(val ==0)*/
/* 		{*/
/* 			$('#input-category_depth_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-category_depth_form').show();*/
/* 		}*/
/* 	});*/
/* 	if($("input[name='use_cache']:radio:checked").val() == '0')*/
/* 	{*/
/* 		$('#input-cache_time_form').hide();*/
/* 	}else*/
/* 	{*/
/* 		$('#input-cache_time_form').show();*/
/* 	}*/
/* 	$("input[name='use_cache']").change(function(){*/
/* 		val = $(this).val();*/
/* 		if(val ==0)*/
/* 		{*/
/* 			$('#input-cache_time_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-cache_time_form').show();*/
/* 		}*/
/* 	});*/
/* 	$('#language').change(function(){*/
/* 		var that = $(this), opt_select = $('option:selected', that).val() , _input = $('#input-head-name-'+opt_select);*/
/* 		$('[id^="input-head-name-"]').addClass('hide');*/
/* 		_input.removeClass('hide');*/
/* 	});*/
/* */
/* 	$('.first-name').change(function(){*/
/* 		$('input[name="head-name"]').val($(this).val());*/
/* 	});*/
/* 	*/
/* 	if($("input[name='display_new']:radio:checked").val() == '0')*/
/* 	{*/
/* 		$('#input-date_day_form').hide();*/
/* 	}else*/
/* 	{*/
/* 		$('#input-date_day_form').show();*/
/* 	}*/
/* 		*/
/* 	$("input[name='display_new']").change(function(){*/
/* 		val = $(this).val();*/
/* 		if(val ==0)*/
/* 		{*/
/* 			$('#input-date_day_form').hide();*/
/* 		}else*/
/* 		{*/
/* 			$('#input-date_day_form').show();*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	/*Type Data*//* */
/* 	if($("input[name='type_data']:radio:checked").val() == 'category')*/
/* 	{*/
/* 		$('.input-product_feature').hide();*/
/* 		$('.input-category').show();*/
/* 	}else{*/
/* 		$('.input-product_feature').show();*/
/* 		$('.input-category').hide();*/
/* 	}*/
/* 		*/
/* 	$("input[name='type_data']").change(function(){*/
/* 		val = $(this).val();*/
/* 		if(val == 'category')*/
/* 		{*/
/* 			$('.input-product_feature').hide();*/
/* 			$('.input-category').show();*/
/* 		}else{*/
/* 			$('.input-product_feature').show();*/
/* 			$('.input-category').hide();*/
/* 		}*/
/* 	});*/
/* 	jQuery(document).ready(function ($) {*/
/* 		var button = '<div class="remove-caching" style="margin-left: 15px"><button type="button" onclick="remove_cache()" title="{{ entry_button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> {{ entry_button_clear_cache }}</button></div>';*/
/* 		var button_min = '<div class="remove-caching" style="margin-left: 7px"><button type="button" onclick="remove_cache()" title="{{ entry_button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> </button></div>';*/
/* 		if($('#column-left').hasClass('active')){*/
/* 			$('#column-left #stats').after(button);*/
/* 		}else{*/
/* 			$('#column-left #stats').after(button_min);*/
/* 		}*/
/* 		$('#button-menu').click(function(){*/
/* 			$('.remove-caching').remove();*/
/* 			if($(this).parents().find('#column-left').hasClass('active')){*/
/* 				$('#column-left #stats').after(button);*/
/* 			}else{*/
/* 				$('#column-left #stats').after(button_min);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* 	function remove_cache(){*/
/* 		var success_remove = '{{success_remove}}';*/
/* 		$.ajax({*/
/* 			type: 'POST',*/
/* 			url: '{{linkremove}}',*/
/* 			data: {	is_ajax_cache_lite: 1},*/
/* 			success: function () {*/
/* 				var html = '<div class="alert alert-success cls-remove-cache"> '+success_remove+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>';*/
/* 				if(!($('.page-header .container-fluid .alert-success')).hasClass('cls-remove-cache')){*/
/* 					$('.page-header .container-fluid').append(html);*/
/* 				}*/
/* 			},*/
/* 		});*/
/* 	}*/
/* 	//--></script>*/
/* */
/* </div>*/
/* {{ footer }}*/
/* */
