<?php

/* extension/module/so_html_content.twig */
class __TwigTemplate_a486b89586675682cbdacaa34a8c1b3a6dc9aa7ae699bce14f4c76e1e3804c97 extends Twig_Template
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
\t\t      <h1>";
        // line 11
        echo (isset($context["heading_title_so"]) ? $context["heading_title_so"] : null);
        echo "</h1>
\t\t      <ul class=\"breadcrumb\">
\t\t        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t      </ul>
    \t</div>
  \t</div>
  \t<div class=\"container-fluid\">

    ";
        // line 21
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 28
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>  ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 31
            echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
            echo "  
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 35
        echo "
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 38
        echo (isset($context["subheading"]) ? $context["subheading"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 41
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-featured\" class=\"form-horizontal\">
\t\t\t";
        // line 43
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li ";
        // line 46
        if (((isset($context["selectedid"]) ? $context["selectedid"] : null) == 0)) {
            echo " class=\"active\" ";
        }
        echo " > <a href=\"";
        echo (isset($context["link"]) ? $context["link"] : null);
        echo " \"> <span class=\"fa fa-plus\"></span> ";
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "button_add_module"), "method");
        echo "</a></li>
\t\t\t\t\t\t";
        // line 47
        $context["i"] = 1;
        // line 48
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduletabs"]) ? $context["moduletabs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            echo "  
\t\t\t\t\t\t\t<li role=\"presentation\" ";
            // line 49
            if (($this->getAttribute($context["module"], "module_id", array()) == (isset($context["selectedid"]) ? $context["selectedid"] : null))) {
                echo " class=\"active\"";
            }
            echo " >
\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo (isset($context["link"]) ? $context["link"] : null);
            echo "&module_id=";
            echo $this->getAttribute($context["module"], "module_id", array());
            echo "\" aria-controls=\"bannermodule-";
            echo $context["key"];
            echo " \"  >
\t\t\t\t\t\t\t\t<span class=\"fa fa-pencil\"></span> ";
            // line 51
            echo $this->getAttribute($context["module"], "name", array());
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 54
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "  
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t";
        // line 62
        $context["module_row"] = 1;
        // line 63
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["module"]) {
            echo "  \t
\t\t\t\t\t\t";
            // line 64
            if ((isset($context["selectedid"]) ? $context["selectedid"] : null)) {
                echo " 
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"";
                // line 66
                echo (isset($context["action"]) ? $context["action"] : null);
                echo "&delete=1\" class=\"remove btn btn-danger\" ><span><i class=\"fa fa-remove\"></i> ";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_button_delete"), "method");
                echo "</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 68
            echo " 

\t\t\t\t\t\t<div  id=\"tab-module";
            // line 70
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\" class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t\t";
            // line 73
            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" id=\"action\" value=\"\"/>
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-name\"> <b style=\"font-weight:bold; color:#f00\">*</b> <span data-toggle=\"tooltip\" title=\"";
            // line 74
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 77
            echo $this->getAttribute($context["module"], "name", array());
            echo "\" placeholder=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_name"), "method");
            echo " \" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 79
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 80
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "name", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\"> 
\t\t\t\t\t\t\t\t";
            // line 86
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_status"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 90
            if ($this->getAttribute($context["module"], "status", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                // line 91
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 92
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 93
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                // line 94
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_enabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 95
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_disabled"), "method");
                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
            // line 103
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-class_suffix\">
\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 104
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_class_suffix"), "method");
            echo "  </span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"class_suffix\" value=\"";
            // line 108
            echo $this->getAttribute($context["module"], "class_suffix", array());
            echo "\" id=\"input-class_suffix\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 113
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-store_layout\"> <span data-toggle=\"tooltip\" title=\"";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_store_layout_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_store_layout"), "method");
            echo "  </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<select name=\"store_layout\" id=\"input-store_layout\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["store_layouts"]) ? $context["store_layouts"] : null));
            foreach ($context['_seq'] as $context["option_id"] => $context["option_value"]) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["selected"] = ((($context["option_id"] == $this->getAttribute($context["module"], "store_layout", array()))) ? ("selected") : (""));
                // line 119
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["option_id"];
                echo "\" ";
                echo (isset($context["selected"]) ? $context["selected"] : null);
                echo " >";
                echo $context["option_value"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\"> ";
            // line 127
            echo "\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-use_cache\">
\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 128
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_use_cache"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 133
            if ($this->getAttribute($context["module"], "use_cache", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 135
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 136
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 138
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_yes"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 142
            if ( !$this->getAttribute($context["module"], "use_cache", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 144
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 145
                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"use_cache\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 147
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_no"), "method");
                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 148
            echo " 
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\" id=\"input-cache_time_form\"> ";
            // line 153
            echo " 
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cache_time\">
\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 155
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time_desc"), "method");
            echo " \">";
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_cache_time"), "method");
            echo " </span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cache_time\" value=\"";
            // line 159
            echo $this->getAttribute($context["module"], "cache_time", array());
            echo " \" id=\"input-cache_time\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 161
            if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array())) {
                echo " 
\t\t\t\t\t\t\t\t\t<div class=\"text-danger col-sm-12\">";
                // line 162
                echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cache_time", array());
                echo " </div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language\">
\t\t\t\t\t\t\t  \t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
\t\t\t\t\t\t\t  \t<li>
\t\t\t\t\t\t\t  \t\t<a href=\"#language";
                // line 172
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 173
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo " \" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo " 
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t  ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 181
                echo "\t\t\t\t\t\t\t  \t<div class=\"tab-pane\" id=\"language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t  \t<label class=\"col-sm-2 control-label\" for=\"input-title";
                // line 183
                echo $this->getAttribute($context["language"], "language_id", array());
                echo " \">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title"), "method");
                echo " </label>
\t\t\t\t\t\t\t\t\t  \t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_description[";
                // line 185
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][title]\" placeholder=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_title"), "method");
                echo " \" id=\"input-heading";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : (""));
                echo " \" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t  \t<label class=\"col-sm-2 control-label\" for=\"input-description";
                // line 189
                echo $this->getAttribute($context["language"], "language_id", array());
                echo " \">";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_description"), "method");
                echo " </label>
\t\t\t\t\t\t\t\t\t  \t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"module_description[";
                // line 191
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][description]\" placeholder=\"";
                echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "entry_description"), "method");
                echo " \" id=\"input-description";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" data-toggle=\"summernote\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 192
                echo (($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["module_description"]) ? $context["module_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
                echo " 
\t\t\t\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 202
            $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
            // line 203
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "\t\t\t\t</div>
\t\t\t</div>
        </form>\t\t
      </div>
    </div>
  \t</div>
 
  
  \t<script type=\"text/javascript\"><!--
\t\tif(\$(\"input[name='use_cache']:radio:checked\").val() == '0'){
\t\t\t\$('#input-cache_time_form').hide();
\t\t}else{
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

\t\t\$('#language a:first').tab('show');
\t//--></script>

\t<script type=\"text/javascript\">
\t\tjQuery(document).ready(function (\$) {
\t\t\tvar button = '<div class=\"remove-caching\" style=\"margin-left: 15px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 235
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-remove\"></i> ";
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
        echo "</button></div>';
\t\t\tvar button_min = '<div class=\"remove-caching\" style=\"margin-left: 7px\"><button type=\"button\" onclick=\"remove_cache()\" title=\"";
        // line 236
        echo (isset($context["entry_button_clear_cache"]) ? $context["entry_button_clear_cache"] : null);
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
        // line 252
        echo (isset($context["success_remove"]) ? $context["success_remove"] : null);
        echo "';
\t\t\t\$.ajax({
\t\t\t\ttype: 'POST',
\t\t\t\turl: '";
        // line 255
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
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
\t<link rel=\"stylesheet\"  href=\"view/javascript/summernote/summernote.css\" />
  

</div>
";
        // line 272
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/so_html_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  632 => 272,  612 => 255,  606 => 252,  587 => 236,  581 => 235,  548 => 204,  542 => 203,  540 => 202,  533 => 197,  521 => 192,  513 => 191,  506 => 189,  493 => 185,  486 => 183,  480 => 181,  476 => 180,  471 => 177,  455 => 173,  451 => 172,  444 => 170,  436 => 164,  431 => 162,  427 => 161,  422 => 159,  413 => 155,  409 => 153,  402 => 148,  397 => 147,  393 => 145,  388 => 144,  383 => 142,  379 => 140,  374 => 138,  370 => 136,  365 => 135,  360 => 133,  350 => 128,  347 => 127,  340 => 121,  327 => 119,  324 => 118,  320 => 117,  310 => 113,  303 => 108,  294 => 104,  291 => 103,  284 => 97,  279 => 95,  275 => 94,  272 => 93,  267 => 92,  263 => 91,  259 => 90,  249 => 86,  244 => 82,  239 => 80,  235 => 79,  228 => 77,  220 => 74,  217 => 73,  212 => 70,  208 => 68,  200 => 66,  195 => 64,  188 => 63,  186 => 62,  178 => 56,  170 => 54,  164 => 51,  156 => 50,  150 => 49,  143 => 48,  141 => 47,  131 => 46,  126 => 43,  122 => 41,  116 => 38,  111 => 35,  104 => 31,  97 => 28,  95 => 27,  92 => 26,  84 => 22,  82 => 21,  75 => 16,  64 => 14,  60 => 13,  55 => 11,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
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
/* 		      <h1>{{ heading_title_so }}</h1>*/
/* 		      <ul class="breadcrumb">*/
/* 		        {% for breadcrumb in breadcrumbs %}*/
/* 		        <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 		        {% endfor %}*/
/* 		      </ul>*/
/*     	</div>*/
/*   	</div>*/
/*   	<div class="container-fluid">*/
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
/* 						{% set i = 1%}*/
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
/* 							<div class="form-group">*/
/* 								{# <!--Class suffix -->  #}*/
/* 								<label class="col-sm-3 control-label" for="input-class_suffix">*/
/* 									<span data-toggle="tooltip" title="{{ objlang.get('entry_class_suffix_desc') }} ">{{ objlang.get('entry_class_suffix') }}  </span>*/
/* 								</label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<input type="text" name="class_suffix" value="{{ module.class_suffix }}" id="input-class_suffix" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group"> {# <!-- Store Layout -->  #}*/
/* 								<label class="col-sm-3 control-label" for="input-store_layout"> <span data-toggle="tooltip" title="{{ objlang.get('entry_store_layout_desc') }} ">{{ objlang.get('entry_store_layout') }}  </span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<select name="store_layout" id="input-store_layout" class="form-control">*/
/* 											{% for option_id, option_value in store_layouts %}*/
/* 												{% set selected = (option_id  ==  module.store_layout) ? 'selected'  %}*/
/* 												<option value="{{ option_id }}" {{ selected }} >{{ option_value }}</option>*/
/* 											{% endfor %}*/
/* 											*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group"> {# <!--use cache -->  #}*/
/* 								<label class="col-sm-3 control-label" for="input-use_cache">*/
/* 									<span data-toggle="tooltip" title="{{ objlang.get('entry_use_cache_desc') }} ">{{ objlang.get('entry_use_cache') }} </span>*/
/* 								</label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<label class="radio-inline">*/
/* 											{% if module.use_cache %} */
/* 												<input type="radio" name="use_cache" value="1" checked="checked" />*/
/* 												{{ objlang.get('text_yes') }} */
/* 											{% else %}   */
/* 												<input type="radio" name="use_cache" value="1" />*/
/* 												{{ objlang.get('text_yes') }} */
/* 											{% endif %}*/
/* 										</label>*/
/* 										<label class="radio-inline">*/
/* 											{% if not module.use_cache %} */
/* 												<input type="radio" name="use_cache" value="0" checked="checked" />*/
/* 												{{ objlang.get('text_no') }} */
/* 											{% else %}   */
/* 												<input type="radio" name="use_cache" value="0" />*/
/* 												{{ objlang.get('text_no') }} */
/* 											{% endif %} */
/* 										</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group" id="input-cache_time_form"> {# <!--cache time -->  #} */
/* 								<label class="col-sm-3 control-label" for="input-cache_time">*/
/* 									<span data-toggle="tooltip" title="{{ objlang.get('entry_cache_time_desc') }} ">{{ objlang.get('entry_cache_time') }} </span>*/
/* 								</label>*/
/* 								<div class="col-sm-9">*/
/* 									<div class="col-sm-5">*/
/* 										<input type="text" name="cache_time" value="{{ module.cache_time }} " id="input-cache_time" class="form-control" />*/
/* 									</div>*/
/* 									{% if error.cache_time %} */
/* 									<div class="text-danger col-sm-12">{{ error.cache_time }} </div>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="tab-pane">*/
/* 							<ul class="nav nav-tabs" id="language">*/
/* 							  	{% for language in languages %} */
/* 							  	<li>*/
/* 							  		<a href="#language{{ language.language_id }}" data-toggle="tab">*/
/* 										<img src="language/{{ language.code}}/{{ language.code}}.png" title="{{ language.name }} " /> {{ language.name }} */
/* 									</a>*/
/* 								</li>*/
/* 							    {% endfor %}*/
/* 							</ul>*/
/* */
/* 							<div class="tab-content">*/
/* 							  {% for language in languages %}*/
/* 							  	<div class="tab-pane" id="language{{ language.language_id }}">*/
/* 									<div class="form-group">*/
/* 									  	<label class="col-sm-2 control-label" for="input-title{{ language.language_id }} ">{{ objlang.get('entry_title') }} </label>*/
/* 									  	<div class="col-sm-10">*/
/* 											<input type="text" name="module_description[{{ language.language_id }}][title]" placeholder="{{ objlang.get('entry_title') }} " id="input-heading{{ language.language_id }}" value="{{ module_description[language.language_id].title  ? module_description[language.language_id].title  : '' }} " class="form-control" />*/
/* 									  	</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 									  	<label class="col-sm-2 control-label" for="input-description{{ language.language_id }} ">{{ objlang.get('entry_description') }} </label>*/
/* 									  	<div class="col-sm-10">*/
/* 											<textarea name="module_description[{{language.language_id}}][description]" placeholder="{{ objlang.get('entry_description') }} " id="input-description{{ language.language_id }}" data-toggle="summernote" class="form-control">*/
/* 											{{ module_description[language.language_id]  ? module_description[language.language_id].description }} */
/* 											</textarea>*/
/* 									  	</div>*/
/* 									</div>*/
/* 							  	</div>*/
/* 							  {% endfor %} */
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* */
/* 						{% set module_row = module_row + 1 %}*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/*         </form>		*/
/*       </div>*/
/*     </div>*/
/*   	</div>*/
/*  */
/*   */
/*   	<script type="text/javascript"><!--*/
/* 		if($("input[name='use_cache']:radio:checked").val() == '0'){*/
/* 			$('#input-cache_time_form').hide();*/
/* 		}else{*/
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
/* 		$('#language a:first').tab('show');*/
/* 	//--></script>*/
/* */
/* 	<script type="text/javascript">*/
/* 		jQuery(document).ready(function ($) {*/
/* 			var button = '<div class="remove-caching" style="margin-left: 15px"><button type="button" onclick="remove_cache()" title="{{ entry_button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> {{ entry_button_clear_cache }}</button></div>';*/
/* 			var button_min = '<div class="remove-caching" style="margin-left: 7px"><button type="button" onclick="remove_cache()" title="{{ entry_button_clear_cache }}" class="btn btn-danger"><i class="fa fa-remove"></i> </button></div>';*/
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
/* 			var success_remove = '{{success_remove}}';*/
/* 			$.ajax({*/
/* 				type: 'POST',*/
/* 				url: '{{linkremove}}',*/
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
/* 	<script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* 	<script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* 	<link rel="stylesheet"  href="view/javascript/summernote/summernote.css" />*/
/*   */
/* */
/* </div>*/
/* {{ footer }}*/
/* */
