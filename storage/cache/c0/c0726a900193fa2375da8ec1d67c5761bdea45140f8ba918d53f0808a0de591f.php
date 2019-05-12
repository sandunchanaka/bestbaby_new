<?php

/* extension/soconfig/options_stores.twig */
class __TwigTemplate_8b3f915017028d52d21132b0a196b9a50935dc89efedc2c76b2985b270c21fc5 extends Twig_Template
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
        $context["fonts"] = array("standard" => "Standard", "google" => "Google Fonts");
        // line 6
        echo "
";
        // line 7
        $context["columns"] = array("1" => "1 columns", "2" => "2 columns", "3" => "3 columns", "4" => "4 columns", "5" => "5 columns", "6" => "6 columns", "7" => "7 columns", "8" => "8 columns", "9" => "9 columns");
        // line 18
        echo "
";
        // line 19
        $context["card_gallery"] = array("0" => "Disable", "1" => "Align Left", "2" => "Align Right", "3" => "Align Bottom");
        // line 25
        echo "
";
        // line 26
        $context["refine_search"] = array("0" => "Disable ", "1" => "Show image", "2" => "Show all");
        // line 31
        echo "
";
        // line 32
        $context["fonts_normal"] = array("inherit" => "No Use", "Arial, Helvetica, sans-serif" => "Arial", "Verdana, Geneva, sans-serif" => "Verdana", "Georgia,Times New Roman, Times, serif" => "Georgia", "Impact, Arial, Helvetica, sans-serif" => "Impact", "Tahoma, Geneva, sans-serif" => "Tahoma", "Trebuchet MS, Arial, Helvetica, sans-serif" => "Trebuchet MS", "Arial Black, Gadget, sans-serif" => "Arial Black", "Times, Times New Roman, serif" => "Times", "Palatino Linotype, Book Antiqua, Palatino, serif" => "Palatino Linotype", "Lucida Sans Unicode, Lucida Grande\", sans-serif" => "Lucida Sans Unicode", "MS Serif, New York, serif" => "MS Serif", "Comic Sans MS, cursive" => "Comic Sans MS", "Courier New, Courier, monospace" => "Courier New", "Lucida Console, Monaco, monospace" => "Lucida Console");
        // line 49
        echo "
";
        // line 50
        $context["devices"] = array("lg" => "<i class=\"fa fa-desktop\"></i> Desktops", "md" => "<i class=\"fa fa-tablet\"></i> Tablet Landscape", "sm" => "<i class=\"fa fa-tablet\"></i> Tablet Portrait", "xs" => "<i class=\"fa fa-mobile\"></i> Phones");
        // line 56
        echo "
";
        // line 57
        $context["Scssformat"] = array("Expanded" => "Expanded", "Nested" => "Nested (default)", "Compressed" => "Compressed", "Compact" => "Compact", "Crunched" => "Crunched");
        // line 64
        echo "
";
        // line 65
        $context["layoutStyle"] = array("full" => "Default", "fluid" => "Layout fluid", "boxed" => "Layout boxed");
        // line 70
        echo "
";
        // line 71
        $context["content_bg_mode"] = array("repeat" => "Repeat", "no-repeat" => "No-Repeat");
        // line 75
        echo "
";
        // line 76
        $context["content_attachment"] = array("scroll" => "Scroll", "fixed" => "Fixed");
        // line 80
        echo "
";
        // line 81
        $context["related_position"] = array("vertical" => "Vertical", "horizontal" => "Horizontal");
        // line 85
        echo "
";
        // line 86
        $context["thumbnailPos"] = array("bottom" => "Gallery Bottom", "left" => "Gallery Left", "grid" => "Gallery Grid", "list" => "Gallery List", "slider" => "Gallery Slider");
        // line 93
        echo "
";
        // line 94
        $context["zoommode"] = array("window" => "Basic Zoom", "inner" => "Inner Zoom", "lens" => "Lens Zoom");
        // line 99
        echo "
";
        // line 100
        $context["gallerysize"] = array("small" => "Image Small", "medium" => "Image Medium", "large" => "Image Large");
        // line 105
        echo "
";
        // line 106
        $context["tabs_position"] = array("1" => "Bottom vertical", "2" => "Bottom horizontal");
        // line 110
        echo "
";
        // line 111
        $context["toppanel_type"] = array("1" => "Show Header Center", "2" => "Show Header Bottom", "3" => "Show All");
        // line 116
        echo "
";
        // line 117
        $context["catalog_mode"] = array("grid-list" => "List Column", "grid-table" => "Table Column", "grid-2" => "2 Columns", "grid-3" => "3 Columns", "grid-4" => "4 Columns", "grid-5" => "5 Columns");
        // line 125
        echo "
";
        // line 126
        $context["radio_style"] = array("0" => "Default", "1" => "Button");
        // line 130
        echo "
";
        // line 131
        $context["type_banner"] = array("1" => "Hover effect 1", "2" => "Hover effect 2", "3" => "Hover effect 3", "4" => "Hover effect 4", "5" => "Hover effect 5", "6" => "Hover effect 6", "7" => "Hover effect 7", "8" => "Hover effect 8", "9" => "Hover effect 9", "10" => "Hover effect 10", "11" => "Hover effect 11", "12" => "Hover effect 12");
        // line 145
        echo "
";
        // line 146
        $context["preloader_animation"] = array("line" => "Default line", "double-loop" => "Double Bounce", "cube-move" => "Cube Move", "circle-bounce" => "Circle Bounce", "folding-cube" => "Cube Folding");
        // line 153
        echo "
";
        // line 154
        $context["pattern_array"] = array("0" => "None");
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["pattern_id"]) {
            // line 156
            echo "\t";
            if (!twig_in_filter($context["pattern_id"], (isset($context["pattern_array"]) ? $context["pattern_array"] : null))) {
                // line 157
                echo "          ";
                $context["pattern_array"] = twig_array_merge((isset($context["pattern_array"]) ? $context["pattern_array"] : null), array(0 => $context["pattern_id"]));
                // line 158
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pattern_id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
<div class=\"sidebar \" data-sticky_column>
<ul class=\"nav nav-tabs main_tabs_vertical\" >
    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 164
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_general"), "method");
        echo " </a></li>
    <li><a href=\"#tab-layout\" data-toggle=\"tab\">";
        // line 165
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_layout"), "method");
        echo " </a></li>
    <li><a href=\"#tab-products\" data-toggle=\"tab\">";
        // line 166
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_products"), "method");
        echo " </a></li>
    <li><a href=\"#tab-fonts\" data-toggle=\"tab\">";
        // line 167
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_fonts"), "method");
        echo " </a></li>
    <li><a href=\"#tab-social\" data-toggle=\"tab\">";
        // line 168
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_social"), "method");
        echo " </a></li>
    <li><a href=\"#tab-custom\" data-toggle=\"tab\">";
        // line 169
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_custom"), "method");
        echo " </a></li>
\t<li><a href=\"#tab-advanced\" data-toggle=\"tab\">";
        // line 170
        echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "maintabs_advanced"), "method");
        echo " </a></li>
</ul>
</div>

<div class=\"tab-content main_content_vertical col-sm-10\" data-sticky_column>
    <!-------------------------------------Tab General---------------------------------->
    <div class=\"tab-pane active\" id=\"tab-general\">
        <ul class=\"nav nav-tabs  main_tabs_2 \">
            <li class=\"active\"><a href=\"#tab-general-layout1\" class=\"selected\" data-toggle=\"tab\">";
        // line 178
        echo (isset($context["general_tab_general"]) ? $context["general_tab_general"] : null);
        echo " </a></li>
            <li><a href=\"#tab-general-layout2\" data-toggle=\"tab\">";
        // line 179
        echo (isset($context["general_tab_header"]) ? $context["general_tab_header"] : null);
        echo " </a></li>
            <li><a href=\"#tab-general-layout3\" data-toggle=\"tab\">";
        // line 180
        echo (isset($context["general_tab_footer"]) ? $context["general_tab_footer"] : null);
        echo "  </a></li>
\t\t\t<li><a href=\"#tab-general-layout4\" data-toggle=\"tab\">Banner Effect</a></li>
\t\t\t<li><a href=\"#tab-general-layout5\" data-toggle=\"tab\">Contact Us</a></li>
        </ul>

        <div class=\"tab-content \">
\t\t\t";
        // line 187
        echo "            <div class=\"tab-pane active\" id=\"tab-general-layout1\">
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Select Layout </h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__layouttype\" class=\"form-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t";
        // line 196
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_typelayout", array(0 => "soconfig_general_store", 1 => "typelayout", 2 => (isset($context["typelayouts"]) ? $context["typelayouts"] : null), 3 => "6", 4 => (isset($context["error"]) ? $context["error"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"
\t\t\t\t\t\t\t\t\t<p class='help-hint-text'>
\t\t\t\t\t\t\t\t\t\t<i class='fa fa-bullhorn' ></i> 
\t\t\t\t\t\t\t\t\t\t<span>Create New Color</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>
\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\tNew Color
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 216
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_advanced_store", 1 => "name_color", 2 => "Name Color"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<i class=\"input-group-addon fa fa-paint-brush\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 221
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_colors", array(0 => "soconfig_advanced_store", 1 => "theme_color", 2 => "Select color"), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t<button onclick=\"buttonApplyColor();\" class=\"btn btn-primary\" type=\"button\"  ";
        // line 225
        if ((isset($context["scsscompile"]) ? $context["scsscompile"] : null)) {
            echo " ";
            echo "disabled='disabled'";
            echo " ";
        }
        echo "><i class=\"fa fa-compress\" aria-hidden=\"true\"></i> Compile CSS</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 228
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "nameColor", array())) {
            // line 229
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\"> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "nameColor", array());
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t
\t\t\t\t\t\t\t\t ";
        // line 234
        if (((isset($context["scsscompile"]) ? $context["scsscompile"] : null) || (isset($context["compileMutiColor"]) ? $context["compileMutiColor"] : null))) {
            echo " 
\t\t\t\t\t\t\t\t<div class=\"text-info\" style=\"margin-top:20px;\">
\t\t\t\t\t\t\t\t<p><strong>You need set :</strong> Before Compile css</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t1.Tab Advanced → SCSS Compile = Off .</br>
\t\t\t\t\t\t\t\t2.Tab Advanced → User Developer Compile Muti Color = Off .
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 243
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__themecolor\" class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"
\t\t\t\t\t\t\t\t\t<p class='help-hint-text'>
\t\t\t\t\t\t\t\t\t\t<i class='fa fa-bullhorn' ></i> 
\t\t\t\t\t\t\t\t\t\t<span>Create New Color</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>
\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\tSelect  Color
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\" id=\"select_color\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 265
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_general_store", 1 => "themecolor", 2 => (isset($context["allThemeColor"]) ? $context["allThemeColor"] : null), 3 => "width30"), "method");
        echo " 
\t\t\t\t\t\t\t\t";
        // line 266
        if ($this->getAttribute((isset($context["allThemeColor"]) ? $context["allThemeColor"] : null), "none", array(), "array")) {
            // line 267
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-warning\" style=\"margin-top:20px;\">
\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-exclamation-triangle\" style=\"font-size:24px;\"></i> Can not find css color file. Please recreate color new </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 270
        echo "\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\" >
\t\t\t\t\t\t<span>Sticky Menu on Top   </span>
\t\t\t\t\t\t<a href=\"view/template/extension/soconfig/images/general/sticky_menu_top.png\" target=\"_blank\" class=\"question-circle\" data-toggle=\"tooltip\" title=\"Screenshot Themes Config \">
\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" ></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"logo_position\">
\t\t\t\t\t\t\t\tStatus:
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 292
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "toppanel_status", 2 => array(1 => "ON", 0 => "OFF"), 3 => 0, 4 => "parent sticky_menu"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\tSelect Block on header:
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t";
        // line 300
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "toppanel_type", 2 => (isset($context["toppanel_type"]) ? $context["toppanel_type"] : null), 3 => 1, 4 => "child sticky_menu"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"so-panel\">\t
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\tTop Bar
\t\t\t\t\t\t<a href=\"view/template/extension/soconfig/images/general/top_bar.png\" target=\"_blank\" class=\"question-circle\" data-toggle=\"tooltip\" title=\"Screenshot Themes Config \">
\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" ></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Telephone No</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t";
        // line 320
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "phone_status", 2 => array(1 => "ON", 0 => "OFF"), 3 => 1), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-8\" id=\"tab-field-phone_status\">
\t\t\t\t\t\t\t\t";
        // line 323
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langHori", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_general_store", 2 => "contact_number", 3 => 50), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Welcome Message</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t";
        // line 330
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "welcome_message_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-8\" id=\"tab-field-welcome_message_status\">
\t\t\t\t\t\t\t\t";
        // line 333
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langHori", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_general_store", 2 => "welcome_message", 3 => 50), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Checkout Link</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" >
\t\t\t\t\t\t\t\t";
        // line 340
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "checkout_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group last\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Language/Currency Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" >
\t\t\t\t\t\t\t\t";
        // line 347
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "lang_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">General</h3>
\t\t\t\t\t<div class=\"panel-container\">\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Preloader </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 359
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "preloader", 2 => array(1 => "ON", 0 => "OFF"), 3 => 1, 4 => "parent preloader"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-preloader\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Select a preloader animation from the list\">
\t\t\t\t\t\t\t\t\tPreloader Animation:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 369
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "preloader_animation", 2 => (isset($context["preloader_animation"]) ? $context["preloader_animation"] : null), 3 => "line", 4 => "child preloader"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" > Status Payment  </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 377
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_general_store", 1 => "imgpayment_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-imgpayment_status\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Edit content here Footer Custom Block.\">
\t\t\t\t\t\t\t\t\tImage (Payment block):
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 387
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_general_store", 1 => "imgpayment"), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">  ";
        // line 393
        echo (isset($context["general_copyright"]) ? $context["general_copyright"] : null);
        echo "   </label>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t";
        // line 395
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_general_store", 1 => "copyright", 2 => "Footer copyright content"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 398
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "copyright", array())) {
            // line 399
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\"> ";
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "copyright", array());
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 401
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
                </div>
\t\t\t\t
            </div>
           

\t\t\t";
        // line 411
        echo "            <div id=\"tab-general-layout2\" class=\"tab-pane\">
\t\t\t\t<div id=\"tab-general__headertype\" class=\"tab-pane active\">
\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Type of Header</h3>
\t\t\t\t\t\t<span class=\"help-block\">If you need content from other header like phone number you need to set it in custom Theme Control Panel.</span>
\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t<span>You can set these headers for any skin you want</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 420
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_typeheader", array(0 => "soconfig_general_store", 1 => "typeheader", 2 => (isset($context["typelayouts"]) ? $context["typelayouts"] : null)), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
            </div>

\t\t\t
\t\t\t";
        // line 429
        echo "            <div id=\"tab-general-layout3\" class=\"tab-pane\">
\t\t\t\t<div id=\"tab-general__footertype\">
\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Type of Footer</h3>
\t\t\t\t\t\t<span class=\"help-block\">If you need content from other footer like contact us you need to set it in custom modules.</span>
\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t<span>You can set these footer for any skin you want</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 438
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_typeheader", array(0 => "soconfig_general_store", 1 => "typefooter", 2 => (isset($context["typelayouts"]) ? $context["typelayouts"] : null)), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
            </div>
            
\t\t\t";
        // line 445
        echo "            <div id=\"tab-general-layout4\" class=\"tab-pane\">
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__bannereffect\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">Hover over image below to see effect.</h3>
\t\t\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t\t\t<span>Hover over image below to see effect.</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
        // line 455
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_typebanner", array(0 => "soconfig_general_store", 1 => "type_banner", 2 => (isset($context["type_banner"]) ? $context["type_banner"] : null), 3 => 3), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
            </div>
\t\t\t
\t\t\t";
        // line 468
        echo "\t\t\t<div id=\"tab-general-layout5\" class=\"tab-pane\">
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t<div class=\"panel-container\">\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">  Address Text   </label>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 474
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_general_store", 1 => "mapaddress", 2 => "Address Text"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"> Maps Geocode   </label>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 481
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_general_store", 1 => "mapgeocode", 2 => "Maps Geocode"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"> API Key Text  </label>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 488
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_general_store", 1 => "mapkeys"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">  Maps Zoom  </label>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 495
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_general_store", 1 => "mapzoom"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
            </div>
        </div>
    </div>
    <!-------------------------------------end tab General---------------------------------->

    <!-------------------------------------Tab Layout---------------------------------------->
    <div class=\"tab-pane\" id=\"tab-layout\">
\t\t<!--subtabs: General -->
\t\t<div class=\"tab-pane active\" id=\"tab-colors-layout1\">
\t\t\t<div class=\"so-panel\">
\t\t\t\t<h3 class=\"panel-title\">Theme Layout Settings</h3>
\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"With the boxed layout you can choose additional options such as custom background images, patterns and solid colors\">Layout Style</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-toggle block-group \" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 522
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_layout_store", 1 => "layoutstyle", 2 => (isset($context["layoutStyle"]) ? $context["layoutStyle"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t <span data-toggle=\"tooltip\" title=\"Set background color for all content.\">Body Background Color:</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t";
        // line 533
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_colors", array(0 => "soconfig_layout_store", 1 => "theme_bgcolor", 2 => "Background color"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Overlay pattern</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"form-group no-margin\">
\t\t\t\t\t\t\t\t";
        // line 541
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 542
            echo "\t\t\t\t\t\t\t\t\t<div class=\"img-patt\"><small>";
            echo $context["i"];
            echo " </small><img src=\"";
            echo (isset($context["dir_soconfig"]) ? $context["dir_soconfig"] : null);
            echo "patterns/";
            echo $context["i"];
            echo ".png\" alt=\"pattern ";
            echo $context["i"];
            echo " \"></div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 544
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 545
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_layout_store", 1 => "pattern", 2 => (isset($context["pattern_array"]) ? $context["pattern_array"] : null), 3 => "width30"), "method");
        echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<small class=\"help-block\">Select a pattern number if you want to use one.</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set background image for all site.\">Background Image:</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 558
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_layout_store", 1 => "contentbg"), "method");
        echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t <span data-toggle=\"tooltip\" title=\"Set background image display mode\">
\t\t\t\t\t\t\t\t Background Image display mode
\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 572
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_layout_store", 1 => "content_bg_mode", 2 => (isset($context["content_bg_mode"]) ? $context["content_bg_mode"] : null)), "method");
        echo " 

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\tBackground Image display Attachment
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 582
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_layout_store", 1 => "content_attachment", 2 => (isset($context["content_attachment"]) ? $context["content_attachment"] : null)), "method");
        echo " 

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<!--subtabs: General -->
    </div>
    <!-------------------------------------end tab Colors,backgrounds,fonts-->

    <!-------------------------------------Tab Products sliders, products listings-->
    <div class=\"tab-pane\" id=\"tab-products\">

        <ul class=\"nav nav-tabs  main_tabs_2\">
            <li class=\"active\"><a href=\"#tab-products-layout1\" class=\"selected\" data-toggle=\"tab\">";
        // line 600
        echo (isset($context["pages_pro_listings"]) ? $context["pages_pro_listings"] : null);
        echo " </a></li>
            <li><a href=\"#tab-products-layout2\" data-toggle=\"tab\">";
        // line 601
        echo (isset($context["pages_pro_detail"]) ? $context["pages_pro_detail"] : null);
        echo " </a></li>
            <li><a href=\"#tab-products-layout3\" data-toggle=\"tab\">";
        // line 602
        echo (isset($context["pages_comingsoon"]) ? $context["pages_comingsoon"] : null);
        echo " </a></li>
        </ul>
        <div class=\"tab-content\">
            <!--subtabs: Listings -->
            <div class=\"tab-pane active wrapper-tabcategory\" id=\"tab-products-layout1\">
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\tLayout Category & Product
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 614
        echo (isset($context["product_catalog_col_position"]) ? $context["product_catalog_col_position"] : null);
        echo " </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 616
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "catalog_col_position", 2 => array("outside" => "Outside content", "inside" => "Inside content"), 3 => "outside"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 620
        echo (isset($context["product_catalog_col_type"]) ? $context["product_catalog_col_type"] : null);
        echo " </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 622
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "catalog_col_type", 2 => array("default" => "Default", "off_canvas" => "Column Off Canvas"), 3 => "default"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 626
        echo (isset($context["product_catalog_sidebar_sticky"]) ? $context["product_catalog_sidebar_sticky"] : null);
        echo " </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 628
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "catalog_sidebar_sticky", 2 => array("disable" => "Disable", "left" => "Sidebar Left", "right" => "Sidebar Right", "all" => "Sidebar All"), 3 => "disable"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\tCategory Info
\t\t\t\t\t\t<a href=\"view/template/extension/soconfig/images/general/category_info.png\" target=\"_blank\" class=\"question-circle\" data-toggle=\"tooltip\" title=\"Screenshot Themes Config \">
\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" ></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\t";
        // line 645
        echo (isset($context["product_catalog_refine"]) ? $context["product_catalog_refine"] : null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 648
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_catalog_refine", 2 => (isset($context["refine_search"]) ? $context["refine_search"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 652
        echo (isset($context["product_catalog_refine_col"]) ? $context["product_catalog_refine_col"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 654
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_pages_store", 1 => "catalog_refine_number", 2 => (isset($context["columns"]) ? $context["columns"] : null), 3 => "width30"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 658
        echo (isset($context["product_catalog_show"]) ? $context["product_catalog_show"] : null);
        echo " </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 660
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "lstimg_cate_status", 2 => array(0 => "Disable", 1 => "Show Derc", 2 => "Show all")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_catalog_mode\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Create your listings into simple catalog.\">";
        // line 666
        echo (isset($context["product_catalog_mode"]) ? $context["product_catalog_mode"] : null);
        echo "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 669
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_pages_store", 1 => "product_catalog_mode", 2 => (isset($context["catalog_mode"]) ? $context["catalog_mode"] : null), 3 => "width30"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-panel col-sm-6\">
\t\t\t\t\t<h3 class=\"panel-title\">Product Item</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set display or not 'Discount' label.\">Show \"Discount\":</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 685
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "discount_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set display or not countdown of Special Offer in product sliders.\">Show countdown of Special Offer:</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 694
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "countdown_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">Show Ratings</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 702
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "rating_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">Show image gallery </label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 710
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "card_gallery", 2 => (isset($context["card_gallery"]) ? $context["card_gallery"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">Status use placeholder images</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 716
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "placeholder_status", 2 => array(1 => "ON", 0 => "OFF"), 3 => 0, 4 => "parent placeholder"), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\" > Placeholder default images</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 723
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_pages_store", 1 => "placeholder_img", 2 => "child placeholder"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"so-panel col-sm-6\">
\t\t\t\t\t<h3 class=\"panel-title\">Group Cart info
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow position cart info
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 740
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "desktop_addcart_position", 2 => array("left" => "Align Left", "right" => "Align Right", "center" => "Align Center", "bottom" => "Align Bottom"), 3 => "left"), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow \"QuickView\" Button
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 749
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "quick_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow \"Addtocart \" Button
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 758
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "desktop_addcart_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow \"Wishlist \" Button
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 767
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "desktop_wishlist_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow \"Compare \" Button
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 776
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "desktop_Compare_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

         
            <!--subtabs: product page -->
            <div id=\"tab-products-layout2\" class=\"tab-pane\">
                <div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Options Styles</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-thumbnails_position\">Option Checkbox and Radio Style:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 792
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "radio_style", 2 => (isset($context["radio_style"]) ? $context["radio_style"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Product Page</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-thumbnails_position\">Select of product gallery:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 805
        echo (isset($context["dir_soconfig"]) ? $context["dir_soconfig"] : null);
        echo "images/general/product-grid.png\" alt=\"product-grid\">
\t\t\t\t\t\t\t\t";
        // line 806
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "thumbnails_position", 2 => (isset($context["thumbnailPos"]) ? $context["thumbnailPos"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cloudzoom_mode\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Choose position of cloudzoom image preview on product page.\">Enable Product Zoom</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 814
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_enablezoom", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\tShow Product sold
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 822
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_order", 2 => array(1 => "ON", 0 => "OFF"), 3 => 1), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\tButton Show More on Description

\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 831
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_enableshowmore", 2 => array(1 => "ON", 0 => "OFF"), 3 => 0), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tabs_position\">Tabs Style </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 837
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "tabs_position", 2 => (isset($context["tabs_position"]) ? $context["tabs_position"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\tTabs Size Chart
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 846
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_enablesizechart", 2 => array(1 => "ON", 0 => "OFF"), 3 => 0, 4 => "parent sizechart"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-product_enablesizechart\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\tSize Chart:
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 855
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_general_store", 1 => "img_sizechart", 2 => "child sizechart"), "method");
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-meta-keyword\">Tabs Shipping & Payment</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 864
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_enableshipping", 2 => array(1 => "ON", 0 => "OFF"), 3 => 1), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-product_enableshipping\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Content Shipping & Payment</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 871
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_pages_store", 2 => "product_contentshipping"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Social Share</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-meta-keyword\">Show Custom</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 884
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "product_page_button", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-product_page_button\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Custom block</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 891
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_pages_store", 2 => "product_socialshare"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Related products</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-related\">Show Related</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 902
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_pages_store", 1 => "related_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"tab-field-related_status\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-listing_quick_type\">Related product number per row <p class=\"help-block\">(use orientation related = Horizontal)</p></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 911
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_devices", array(0 => "soconfig_pages_store", 1 => "product_related_column_", 2 => (isset($context["devices"]) ? $context["devices"] : null), 3 => (isset($context["columns"]) ? $context["columns"] : null)), "method");
        echo " 

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t\t
\t\t\t\t\t
\t\t\t\t
            </div>
\t\t\t
\t\t\t<!--subtabs: Coming Soon-->
\t\t\t<div id=\"tab-products-layout3\" class=\"tab-pane\">
\t    \t   <div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Coming Soon</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-comingsoon_status\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\tComing Soon Background
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 932
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_addimage", array(0 => "soconfig_pages_store", 1 => "comingsoon_imglogo"), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Coming Soon Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t\t\t";
        // line 938
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langHori", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_pages_store", 2 => "comingsoon_title", 3 => 50), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Date</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" >
\t\t\t\t\t\t\t\t";
        // line 944
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_date", array(0 => "soconfig_pages_store", 1 => "comingsoon_date", 2 => "2016-05-26"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Content</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 950
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_pages_store", 2 => "comingsoon_content"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t        </div>
        </div>

    </div>
    <!------------------------------------end tab Pages-->

    <!-------------------------------------Tab Fonts-->
    <div class=\"tab-pane\" id=\"tab-fonts\">
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Fonts<span class=\"help-block\">If you want to speed up your site use one of the common fonts instead of the fonts from Google.</span></h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 969
        echo (isset($context["fonts_body"]) ? $context["fonts_body"] : null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 972
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_onOffFont", array(0 => "soconfig_fonts_store", 1 => "body_status"), "method");
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 974
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_fonts_store", 1 => "normal_body", 2 => (isset($context["fonts_normal"]) ? $context["fonts_normal"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">  ";
        // line 977
        echo (isset($context["entry_google_url"]) ? $context["entry_google_url"] : null);
        echo "   </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 979
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "url_body"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 980
        echo (isset($context["entry_google_url_help"]) ? $context["entry_google_url_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 984
        echo (isset($context["entry_google_family"]) ? $context["entry_google_family"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 986
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "family_body"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 987
        echo (isset($context["entry_google_family_help"]) ? $context["entry_google_family_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 992
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "soconfig_fonts_store", 1 => "selector_body", 2 => "Add css selectors"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 998
        echo (isset($context["fonts_menu"]) ? $context["fonts_menu"] : null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 1001
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_onOffFont", array(0 => "soconfig_fonts_store", 1 => "menu_status"), "method");
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 1003
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_fonts_store", 1 => "normal_menu", 2 => (isset($context["fonts_normal"]) ? $context["fonts_normal"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">  ";
        // line 1006
        echo (isset($context["entry_google_url"]) ? $context["entry_google_url"] : null);
        echo "   </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 1008
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "url_menu"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 1009
        echo (isset($context["entry_google_url_help"]) ? $context["entry_google_url_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 1013
        echo (isset($context["entry_google_family"]) ? $context["entry_google_family"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 1015
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "family_menu"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 1016
        echo (isset($context["entry_google_family_help"]) ? $context["entry_google_family_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 1021
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "soconfig_fonts_store", 1 => "selector_menu", 2 => "Add css selectors"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 1027
        echo (isset($context["fonts_heading"]) ? $context["fonts_heading"] : null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 1030
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_onOffFont", array(0 => "soconfig_fonts_store", 1 => "heading_status"), "method");
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 1032
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_select", array(0 => "soconfig_fonts_store", 1 => "normal_heading", 2 => (isset($context["fonts_normal"]) ? $context["fonts_normal"] : null)), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\"> ";
        // line 1035
        echo (isset($context["entry_google_url"]) ? $context["entry_google_url"] : null);
        echo "  </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 1037
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "url_heading"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 1038
        echo (isset($context["entry_google_url_help"]) ? $context["entry_google_url_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 1042
        echo (isset($context["entry_google_family"]) ? $context["entry_google_family"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 1044
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_fonts_store", 1 => "family_heading"), "method");
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 1045
        echo (isset($context["entry_google_family_help"]) ? $context["entry_google_family_help"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 1050
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "soconfig_fonts_store", 1 => "selector_heading", 2 => "Add css selectors"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t\t
    </div>
    <!-------------------------------------end tab Fonts-->
\t
\t<!-------------------------------------Tab Social-->
\t<div class=\"tab-pane\" id=\"tab-social\">
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">sidebar social
\t\t\t\t
\t\t\t</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tShow sidebar social
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1071
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_social_store", 1 => "social_sidebar", 2 => array(0 => "Disable", 1 => "Sidebar Left", 2 => "Sidebar Right")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Facebook</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tShow Facebook
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1085
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_social_store", 1 => "social_fb_status", 2 => array(1 => "ON", 0 => "OFF"), 3 => "0", 4 => "parent social_fb"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_fb_status\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tFacebook ID:
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 1093
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_social_store", 1 => "facebook", 2 => "Facebook profile name", 3 => "child social_fb"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t <a href=\"http://findmyfacebookid.com/\" target=\"_blank\" style=\"display: block;float: left;width: auto;margin-top: 7px\">Find your Facebook ID »</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Twitter</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tShow Twitter
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1110
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_social_store", 1 => "social_twitter_status", 2 => array(1 => "ON", 0 => "OFF"), 3 => "0", 4 => "parent social_tt"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_twitter_status\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tTwitter username:
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 1118
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_text", array(0 => "soconfig_social_store", 1 => "twitter", 2 => "Twitter account name", 3 => "child social_tt"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Custom</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Show Custom </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 1130
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_social_store", 1 => "social_custom_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_custom_status\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Custom block</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1137
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_langTextarea", array(0 => (isset($context["languages"]) ? $context["languages"] : null), 1 => "soconfig_social_store", 2 => "video_code"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<!-------------------------------------Tab Tab Advanced-->
\t<div class=\"tab-pane\" id=\"tab-custom\">
\t\t<div class=\"tab-horizontal\">
\t\t\t<ul class=\"nav nav-tabs  main_tabs_2\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-custom-layout1\" class=\"selected\" data-toggle=\"tab\">";
        // line 1148
        echo (isset($context["custom_tab_css_input"]) ? $context["custom_tab_css_input"] : null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-custom-layout2\" data-toggle=\"tab\">";
        // line 1149
        echo (isset($context["custom_tab_css_file"]) ? $context["custom_tab_css_file"] : null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-custom-layout3\" data-toggle=\"tab\">";
        // line 1150
        echo (isset($context["custom_tab_js_input"]) ? $context["custom_tab_js_input"] : null);
        echo "</a></li>

\t\t\t</ul>
\t\t</div>
        <div class=\"tab-content \">
        \t<div class=\"tab-pane active\" id=\"tab-custom-layout1\">
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">CSS CODE DIRECT INPUT</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Status </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 1162
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_custom_store", 1 => "cssinput_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 1166
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "soconfig_custom_store", 1 => "cssinput_content"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>

            <div id=\"tab-custom-layout2\" class=\"customcode_wrap tab-pane\">
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group no-margin\" >
\t\t\t\t\t\t<h3 class=\"col-sm-2 panel-title \">ADD CSS FILES</h3>
\t\t\t\t\t\t<div class=\"col-sm-10 text-right\"><a class=\"btn btn-success add-cssfile_url\" > <i class=\"fa fa-plus-circle\"></i> Add file</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Status </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 1184
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_custom_store", 1 => "cssfile_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 1188
        if ( !twig_test_empty((isset($context["cssfile_url"]) ? $context["cssfile_url"] : null))) {
            // line 1189
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cssfile_url"]) ? $context["cssfile_url"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cssfile"]) {
                // line 1190
                echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Enter file path</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"soconfig_custom_store[cssfile_url][]\" value=\"";
                // line 1193
                echo $context["cssfile"];
                echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success remove_field\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssfile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1199
            echo "\t
\t\t\t\t\t\t";
        } else {
            // line 1200
            echo "\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Enter file path</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"soconfig_custom_store[cssfile_url][]\" value=\"catalog/view/theme/";
            // line 1204
            echo (isset($context["theme_directory"]) ? $context["theme_directory"] : null);
            echo "/css/custom.css\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 1208
        echo "\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

            <div class=\"tab-pane\" id=\"tab-custom-layout3\">
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">JS CODE DIRECT INPUT</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Status </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 1220
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_custom_store", 1 => "jsinput_status", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 1224
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_textarea", array(0 => "soconfig_custom_store", 1 => "jsinput_content"), "method");
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
           
        </div>
\t</div>
\t<!------------------------------------- End Tab Tab Advanced-->
\t
\t<!-------------------------------------Tab Tab Advanced-->
\t<div class=\"tab-pane\" id=\"tab-advanced\">
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">SCSS Compile</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >SCSS Compile</label>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t";
        // line 1244
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_advanced_store", 1 => "scsscompile", 2 => array(1 => "ON", 0 => "OFF"), 3 => 0, 4 => "parent scsscompile"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >CSS Format</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1250
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_advanced_store", 1 => "scssformat", 2 => (isset($context["Scssformat"]) ? $context["Scssformat"] : null), 3 => "Nested", 4 => "child scsscompile"), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >User Developer Compile Muti Color</label>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t";
        // line 1256
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_advanced_store", 1 => "compileMutiColor", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"so-panel col-sm-6\">
\t\t\t<h3 class=\"panel-title\">Performance</h3>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-4 control-label\">Show Minify CSS </label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 1267
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_advanced_store", 1 => "cssminify", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " \t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- cssminify -->
\t\t\t<div id=\"tab-field-cssminify\" class=\"form-group\">
\t\t\t\t
\t\t\t\t<div class=\"col-sm-8\"  style=\"margin-bottom:15px\">
\t\t\t\t\t<a onclick=\"add_cssExclude();\" class=\"add-item-payment btn btn-info\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> Add file css</a>\t\t\t
\t\t\t\t</div>
\t\t\t\t<table class=\"bottom-bar\" id=\"listgroup-cssminify\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"first\" style=\"width: 40%;\" >Exclude file css</td>
\t\t\t\t\t\t\t<td style=\"width: 10%;\">Delete</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t";
        // line 1285
        $context["listcss_row"] = 0;
        // line 1286
        echo "\t\t\t\t\t";
        if (((isset($context["cssExcludes"]) ? $context["cssExcludes"] : null) && ((isset($context["cssExcludes"]) ? $context["cssExcludes"] : null) != ""))) {
            // line 1287
            echo "
\t\t\t\t\t  \t";
            // line 1288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cssExcludes"]) ? $context["cssExcludes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cssExclude"]) {
                // line 1289
                echo "\t\t\t\t\t\t  \t";
                if ( !twig_test_empty($this->getAttribute($context["cssExclude"], "namecss", array()))) {
                    // line 1290
                    echo "\t\t\t\t\t\t\t\t<tbody id=\"listcssExclude";
                    echo (isset($context["listcss_row"]) ? $context["listcss_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"form-control\" value=\"";
                    // line 1293
                    echo $this->getAttribute($context["cssExclude"], "namecss", array());
                    echo "\" name=\"soconfig_advanced_store[cssExclude][";
                    echo (isset($context["listcss_row"]) ? $context["listcss_row"] : null);
                    echo "][namecss]\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#listcssExclude";
                    // line 1296
                    echo (isset($context["listcss_row"]) ? $context["listcss_row"] : null);
                    echo "').remove();\" class=\"btn btn-danger\">Remove</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t";
                    // line 1300
                    $context["listcss_row"] = ((isset($context["listcss_row"]) ? $context["listcss_row"] : null) + 1);
                    // line 1301
                    echo "\t\t\t\t\t\t\t";
                }
                // line 1302
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssExclude'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t";
        }
        // line 1304
        echo "\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t</table>

\t\t\t\t
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar listcss_row = ";
        // line 1309
        echo (isset($context["listcss_row"]) ? $context["listcss_row"] : null);
        echo " ;
\t\t\t\tvar languages = ";
        // line 1310
        echo twig_jsonencode_filter((isset($context["languages"]) ? $context["languages"] : null));
        echo " ;
\t\t\t\t
\t\t\t\tfunction add_cssExclude() {

\t\t\t\t\thtml  = '<tbody id=\"listcssExclude' + listcss_row + '\">';
\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\thtml += '    <td>';
\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" name=\"soconfig_advanced_store[cssExclude][' + listcss_row + '][namecss]\">';
\t\t\t\t\thtml += '    </td>';
\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#listcssExclude' + listcss_row + '\\').remove();\" class=\"btn btn-danger\">Remove</a></td>';
\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t
\t\t\t\t\t\$('#listgroup-cssminify tfoot').before(html);
\t\t\t\t\tlistcss_row++;
\t\t\t\t}
\t\t\t\t</script> 
\t\t\t</div>
\t\t\t<!--  END cssminify -->
\t\t\t<div class=\"form-group\" style=\"padding:0;border:none;\">
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<a href=\"";
        // line 1331
        echo (isset($context["clear_cache"]) ? $context["clear_cache"] : null);
        echo "\"><button class=\"btn btn-warning\" type=\"button\"><i class=\"fa fa-eraser\"></i> Clear Minify</button></a>
\t\t\t\t\t<span style=\"margin:0 10px;\">Delete all of the theme css, js file path: catalog/view/theme/so-emarket/css/minify</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"so-panel col-sm-6\">
\t\t\t
\t\t\t<div class=\"form-group\" style=\"margin-top: 15px;\">
\t\t\t\t<label class=\"col-sm-4 control-label\">Show Minify JS</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 1341
        echo $this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_radio", array(0 => "soconfig_advanced_store", 1 => "jsminify", 2 => array(1 => "ON", 0 => "OFF")), "method");
        echo " \t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- jsminify -->
\t\t\t<div id=\"tab-field-jsminify\" class=\"form-group\">
\t\t\t\t<div class=\"col-sm-8 \"  style=\"margin-bottom:15px\">
\t\t\t\t\t<a onclick=\"add_jsExclude();\" class=\"add-item-payment btn btn-info\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> Add file JS</a>\t\t\t
\t\t\t\t</div>
\t\t\t\t<table class=\"bottom-bar\" id=\"listgroup-jsminify\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"first\" style=\"width: 40%;\" >Exclude file Javascript</td>
\t\t\t\t\t\t\t<td style=\"width: 10%;\">Delete</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t";
        // line 1358
        $context["listjs_row"] = 0;
        // line 1359
        echo "\t\t\t\t\t";
        if (((isset($context["jsExcludes"]) ? $context["jsExcludes"] : null) && ((isset($context["jsExcludes"]) ? $context["jsExcludes"] : null) != ""))) {
            // line 1360
            echo "\t\t\t\t\t\t
\t\t\t\t\t  \t";
            // line 1361
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jsExcludes"]) ? $context["jsExcludes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["jsExclude"]) {
                // line 1362
                echo "\t\t\t\t\t\t  \t";
                if ( !twig_test_empty($this->getAttribute($context["jsExclude"], "namecss", array()))) {
                    // line 1363
                    echo "\t\t\t\t\t\t\t\t<tbody id=\"listjsExclude";
                    echo (isset($context["listjs_row"]) ? $context["listjs_row"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"form-control\" value=\"";
                    // line 1366
                    echo $this->getAttribute($context["jsExclude"], "namecss", array());
                    echo "\" name=\"soconfig_advanced_store[jsExclude][";
                    echo (isset($context["listjs_row"]) ? $context["listjs_row"] : null);
                    echo "][namecss]\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#listjsExclude";
                    // line 1370
                    echo (isset($context["listjs_row"]) ? $context["listjs_row"] : null);
                    echo "').remove();\" class=\"btn btn-danger\">Remove</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t";
                    // line 1374
                    $context["listjs_row"] = ((isset($context["listjs_row"]) ? $context["listjs_row"] : null) + 1);
                    // line 1375
                    echo "\t\t\t\t\t\t\t";
                }
                // line 1376
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsExclude'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t";
        }
        // line 1378
        echo "\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t</table>

\t\t\t\t
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar listjs_row = ";
        // line 1383
        echo (isset($context["listjs_row"]) ? $context["listjs_row"] : null);
        echo " ;
\t\t\t\t
\t\t\t\tfunction add_jsExclude() {

\t\t\t\t\thtml  = '<tbody id=\"listjsExclude' + listjs_row + '\">';
\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\thtml += '    <td>';
\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" name=\"soconfig_advanced_store[jsExclude][' + listjs_row + '][namecss]\">';
\t\t\t\t\thtml += '    </td>';
\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#listjsExclude' + listjs_row + '\\').remove();\" class=\"btn btn-danger\">Remove</a></td>';
\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t
\t\t\t\t\t\$('#listgroup-jsminify tfoot').before(html);
\t\t\t\t\tlistjs_row++;
\t\t\t\t}
\t\t\t\t</script> 
\t\t\t</div>
\t\t\t<!--  END jsminify -->
\t\t</div>
\t\t
\t</div>
\t<!-------------------------------------End Tab Advanced-->
\t
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/options_stores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1933 => 1383,  1926 => 1378,  1917 => 1376,  1914 => 1375,  1912 => 1374,  1905 => 1370,  1896 => 1366,  1889 => 1363,  1886 => 1362,  1882 => 1361,  1879 => 1360,  1876 => 1359,  1874 => 1358,  1854 => 1341,  1841 => 1331,  1817 => 1310,  1813 => 1309,  1806 => 1304,  1797 => 1302,  1794 => 1301,  1792 => 1300,  1785 => 1296,  1777 => 1293,  1770 => 1290,  1767 => 1289,  1763 => 1288,  1760 => 1287,  1757 => 1286,  1755 => 1285,  1734 => 1267,  1720 => 1256,  1711 => 1250,  1702 => 1244,  1679 => 1224,  1672 => 1220,  1658 => 1208,  1651 => 1204,  1645 => 1200,  1641 => 1199,  1628 => 1193,  1623 => 1190,  1618 => 1189,  1616 => 1188,  1609 => 1184,  1588 => 1166,  1581 => 1162,  1566 => 1150,  1562 => 1149,  1558 => 1148,  1544 => 1137,  1534 => 1130,  1519 => 1118,  1508 => 1110,  1488 => 1093,  1477 => 1085,  1460 => 1071,  1436 => 1050,  1428 => 1045,  1424 => 1044,  1419 => 1042,  1412 => 1038,  1408 => 1037,  1403 => 1035,  1397 => 1032,  1392 => 1030,  1386 => 1027,  1377 => 1021,  1369 => 1016,  1365 => 1015,  1360 => 1013,  1353 => 1009,  1349 => 1008,  1344 => 1006,  1338 => 1003,  1333 => 1001,  1327 => 998,  1318 => 992,  1310 => 987,  1306 => 986,  1301 => 984,  1294 => 980,  1290 => 979,  1285 => 977,  1279 => 974,  1274 => 972,  1268 => 969,  1246 => 950,  1237 => 944,  1228 => 938,  1219 => 932,  1195 => 911,  1183 => 902,  1169 => 891,  1159 => 884,  1143 => 871,  1133 => 864,  1121 => 855,  1109 => 846,  1097 => 837,  1088 => 831,  1076 => 822,  1065 => 814,  1054 => 806,  1050 => 805,  1034 => 792,  1015 => 776,  1003 => 767,  991 => 758,  979 => 749,  967 => 740,  947 => 723,  937 => 716,  928 => 710,  917 => 702,  906 => 694,  894 => 685,  875 => 669,  869 => 666,  860 => 660,  855 => 658,  848 => 654,  843 => 652,  836 => 648,  830 => 645,  810 => 628,  805 => 626,  798 => 622,  793 => 620,  786 => 616,  781 => 614,  766 => 602,  762 => 601,  758 => 600,  737 => 582,  724 => 572,  707 => 558,  691 => 545,  688 => 544,  673 => 542,  669 => 541,  658 => 533,  644 => 522,  614 => 495,  604 => 488,  594 => 481,  584 => 474,  576 => 468,  561 => 455,  549 => 445,  540 => 438,  529 => 429,  518 => 420,  507 => 411,  496 => 401,  490 => 399,  488 => 398,  482 => 395,  477 => 393,  468 => 387,  455 => 377,  444 => 369,  431 => 359,  416 => 347,  406 => 340,  396 => 333,  390 => 330,  380 => 323,  374 => 320,  351 => 300,  340 => 292,  316 => 270,  310 => 267,  308 => 266,  304 => 265,  280 => 243,  267 => 234,  262 => 231,  256 => 229,  254 => 228,  244 => 225,  237 => 221,  229 => 216,  206 => 196,  195 => 187,  186 => 180,  182 => 179,  178 => 178,  167 => 170,  163 => 169,  159 => 168,  155 => 167,  151 => 166,  147 => 165,  143 => 164,  138 => 161,  131 => 158,  128 => 157,  125 => 156,  121 => 155,  119 => 154,  116 => 153,  114 => 146,  111 => 145,  109 => 131,  106 => 130,  104 => 126,  101 => 125,  99 => 117,  96 => 116,  94 => 111,  91 => 110,  89 => 106,  86 => 105,  84 => 100,  81 => 99,  79 => 94,  76 => 93,  74 => 86,  71 => 85,  69 => 81,  66 => 80,  64 => 76,  61 => 75,  59 => 71,  56 => 70,  54 => 65,  51 => 64,  49 => 57,  46 => 56,  44 => 50,  41 => 49,  39 => 32,  36 => 31,  34 => 26,  31 => 25,  29 => 19,  26 => 18,  24 => 7,  21 => 6,  19 => 2,);
    }
}
/* {# Twig variable So Config #}*/
/* {% set fonts = { */
/* 	'standard' : 'Standard',*/
/* 	'google'  : 'Google Fonts',*/
/* } %}*/
/* */
/* {% set columns = { */
/* 	'1' : '1 columns',*/
/* 	'2' : '2 columns',*/
/* 	'3' : '3 columns',*/
/* 	'4' : '4 columns',*/
/* 	'5' : '5 columns',*/
/* 	'6' : '6 columns',*/
/* 	'7' : '7 columns',*/
/* 	'8' : '8 columns',*/
/* 	'9' : '9 columns',*/
/* } %}*/
/* */
/* {% set card_gallery = { */
/* 	'0' : 'Disable',*/
/* 	'1' : 'Align Left',*/
/* 	'2' : 'Align Right',*/
/* 	'3' : 'Align Bottom',*/
/* } %}*/
/* */
/* {% set refine_search = { */
/* 	'0' : 'Disable ',*/
/* 	'1' : 'Show image',*/
/* 	'2' : 'Show all',*/
/* } %}*/
/* */
/* {% set fonts_normal = { */
/* 	'inherit' : 'No Use',*/
/* 	'Arial, Helvetica, sans-serif'  : 'Arial',*/
/* 	'Verdana, Geneva, sans-serif'  : 'Verdana',*/
/* 	'Georgia,Times New Roman, Times, serif'  : 'Georgia',*/
/* 	'Impact, Arial, Helvetica, sans-serif'  : 'Impact',*/
/* 	'Tahoma, Geneva, sans-serif'  : 'Tahoma',*/
/* 	'Trebuchet MS, Arial, Helvetica, sans-serif'  : 'Trebuchet MS',*/
/* 	'Arial Black, Gadget, sans-serif'  : 'Arial Black',*/
/* 	'Times, Times New Roman, serif'  : 'Times',*/
/* 	'Palatino Linotype, Book Antiqua, Palatino, serif'  : 'Palatino Linotype',*/
/* 	'Lucida Sans Unicode, Lucida Grande", sans-serif'  : 'Lucida Sans Unicode',*/
/* 	'MS Serif, New York, serif'  : 'MS Serif',*/
/* 	'Comic Sans MS, cursive'  : 'Comic Sans MS',*/
/* 	'Courier New, Courier, monospace'  : 'Courier New',*/
/* 	'Lucida Console, Monaco, monospace'  : 'Lucida Console',*/
/* } %}*/
/* */
/* {% set devices = { */
/* 	'lg' : '<i class="fa fa-desktop"></i> Desktops',*/
/* 	'md' : '<i class="fa fa-tablet"></i> Tablet Landscape',*/
/* 	'sm' : '<i class="fa fa-tablet"></i> Tablet Portrait',*/
/* 	'xs' : '<i class="fa fa-mobile"></i> Phones',*/
/* } %}*/
/* */
/* {% set Scssformat = { */
/* 	'Expanded' : 'Expanded',*/
/* 	'Nested' : 'Nested (default)',*/
/* 	'Compressed' : 'Compressed',*/
/* 	'Compact' : 'Compact',*/
/* 	'Crunched' : 'Crunched',*/
/* } %}*/
/* */
/* {% set layoutStyle = { */
/* 	'full' : 'Default',*/
/* 	'fluid' : 'Layout fluid',*/
/* 	'boxed' : 'Layout boxed',*/
/* } %}*/
/* */
/* {% set content_bg_mode = { */
/* 	'repeat' : 'Repeat',*/
/* 	'no-repeat' : 'No-Repeat',*/
/* } %}*/
/* */
/* {% set content_attachment = { */
/* 	'scroll' : 'Scroll',*/
/* 	'fixed' : 'Fixed',*/
/* } %}*/
/* */
/* {% set related_position = { */
/* 	'vertical' : 'Vertical',*/
/* 	'horizontal' : 'Horizontal',*/
/* } %}*/
/* */
/* {% set thumbnailPos = { */
/* 	'bottom' : 'Gallery Bottom',*/
/* 	'left' : 'Gallery Left',*/
/* 	'grid' : 'Gallery Grid',*/
/* 	'list' : 'Gallery List',*/
/* 	'slider' : 'Gallery Slider',*/
/* } %}*/
/* */
/* {% set zoommode = { */
/* 	'window' : 'Basic Zoom',*/
/* 	'inner' : 'Inner Zoom',*/
/* 	'lens' : 'Lens Zoom',*/
/* } %}*/
/* */
/* {% set gallerysize = { */
/* 	'small' : 'Image Small',*/
/* 	'medium' : 'Image Medium',*/
/* 	'large' : 'Image Large',*/
/* } %}*/
/* */
/* {% set tabs_position = { */
/* 	'1' : 'Bottom vertical',*/
/* 	'2' : 'Bottom horizontal',*/
/* } %}*/
/* */
/* {% set toppanel_type = { */
/* 	'1' : 'Show Header Center',*/
/* 	'2' : 'Show Header Bottom',*/
/* 	'3' : 'Show All'*/
/* } %}*/
/* */
/* {% set catalog_mode = { */
/* 	'grid-list' : 'List Column',*/
/* 	'grid-table' : 'Table Column',*/
/* 	'grid-2' : '2 Columns',*/
/* 	'grid-3' : '3 Columns',*/
/* 	'grid-4' : '4 Columns',*/
/* 	'grid-5' : '5 Columns',*/
/* } %}*/
/* */
/* {% set radio_style = { */
/* 	'0' : 'Default',*/
/* 	'1' : 'Button'*/
/* } %}*/
/* */
/* {% set type_banner = { */
/* 	'1' : 'Hover effect 1',*/
/* 	'2' : 'Hover effect 2',*/
/* 	'3' : 'Hover effect 3',*/
/* 	'4' : 'Hover effect 4',*/
/* 	'5' : 'Hover effect 5',*/
/* 	'6' : 'Hover effect 6',*/
/* 	'7' : 'Hover effect 7',*/
/* 	'8' : 'Hover effect 8',*/
/* 	'9' : 'Hover effect 9',*/
/* 	'10' : 'Hover effect 10',*/
/* 	'11' : 'Hover effect 11',*/
/* 	'12' : 'Hover effect 12',*/
/* } %}*/
/* */
/* {% set preloader_animation = { */
/* 	'line' : 'Default line',*/
/* 	'double-loop' : 'Double Bounce',*/
/* 	'cube-move' : 'Cube Move',*/
/* 	'circle-bounce' : 'Circle Bounce',*/
/* 	'folding-cube' : 'Cube Folding',*/
/* } %}*/
/* */
/* {% set pattern_array = {'0' : 'None'} %}*/
/* {% for pattern_id in 2..45 %}*/
/* 	{% if pattern_id not in pattern_array %}*/
/*           {% set pattern_array = pattern_array|merge([pattern_id]) %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* {# //End variable So Config #}*/
/* */
/* <div class="sidebar " data-sticky_column>*/
/* <ul class="nav nav-tabs main_tabs_vertical" >*/
/*     <li class="active"><a href="#tab-general" data-toggle="tab">{{  objlang.get('maintabs_general') }} </a></li>*/
/*     <li><a href="#tab-layout" data-toggle="tab">{{ objlang.get('maintabs_layout') }} </a></li>*/
/*     <li><a href="#tab-products" data-toggle="tab">{{ objlang.get('maintabs_products')  }} </a></li>*/
/*     <li><a href="#tab-fonts" data-toggle="tab">{{ objlang.get('maintabs_fonts')  }} </a></li>*/
/*     <li><a href="#tab-social" data-toggle="tab">{{ objlang.get('maintabs_social')  }} </a></li>*/
/*     <li><a href="#tab-custom" data-toggle="tab">{{ objlang.get('maintabs_custom')  }} </a></li>*/
/* 	<li><a href="#tab-advanced" data-toggle="tab">{{ objlang.get('maintabs_advanced')  }} </a></li>*/
/* </ul>*/
/* </div>*/
/* */
/* <div class="tab-content main_content_vertical col-sm-10" data-sticky_column>*/
/*     <!-------------------------------------Tab General---------------------------------->*/
/*     <div class="tab-pane active" id="tab-general">*/
/*         <ul class="nav nav-tabs  main_tabs_2 ">*/
/*             <li class="active"><a href="#tab-general-layout1" class="selected" data-toggle="tab">{{ general_tab_general }} </a></li>*/
/*             <li><a href="#tab-general-layout2" data-toggle="tab">{{ general_tab_header }} </a></li>*/
/*             <li><a href="#tab-general-layout3" data-toggle="tab">{{ general_tab_footer }}  </a></li>*/
/* 			<li><a href="#tab-general-layout4" data-toggle="tab">Banner Effect</a></li>*/
/* 			<li><a href="#tab-general-layout5" data-toggle="tab">Contact Us</a></li>*/
/*         </ul>*/
/* */
/*         <div class="tab-content ">*/
/* 			{# General  Blocks---------------------------------------------  #}*/
/*             <div class="tab-pane active" id="tab-general-layout1">*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Select Layout </h3>*/
/* 					<div class="panel-container">*/
/* 						*/
/* 						<div id="tab-general__layouttype" class="form-group">*/
/* 							*/
/* 							<div class="col-sm-12">*/
/* 								{{ fields.field_typelayout('soconfig_general_store','typelayout',typelayouts,'6',error) }} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group" >*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="*/
/* 									<p class='help-hint-text'>*/
/* 										<i class='fa fa-bullhorn' ></i> */
/* 										<span>Create New Color</span>*/
/* 									</p>*/
/* 									<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>*/
/* 									<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>*/
/* 									<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>*/
/* 								">*/
/* 									New Color*/
/* 								</span>*/
/* 							</label>*/
/* 							*/
/* 							<div class="col-sm-2">*/
/* 								{{ fields.field_text('soconfig_advanced_store','name_color','Name Color') }} */
/* 							</div>*/
/* 							<div class="col-sm-2">*/
/* 								<div class="input-group">*/
/* 									<i class="input-group-addon fa fa-paint-brush" aria-hidden="true"></i>*/
/* 									{{ fields.field_colors('soconfig_advanced_store','theme_color','Select color') }} */
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-5">*/
/* 								<button onclick="buttonApplyColor();" class="btn btn-primary" type="button"  {% if scsscompile %} {{ "disabled='disabled'" }} {% endif %}><i class="fa fa-compress" aria-hidden="true"></i> Compile CSS</button>*/
/* 							</div>*/
/* 							<div class="col-sm-offset-2 col-sm-10">*/
/* 								{% if error.nameColor %}*/
/* 									<div class="text-danger"> {{error.nameColor}}</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							<div class="col-sm-offset-2 col-sm-10">*/
/* 			*/
/* 								 {% if (scsscompile  or  compileMutiColor)  %} */
/* 								<div class="text-info" style="margin-top:20px;">*/
/* 								<p><strong>You need set :</strong> Before Compile css</p>*/
/* 								<p>*/
/* 								1.Tab Advanced → SCSS Compile = Off .</br>*/
/* 								2.Tab Advanced → User Developer Compile Muti Color = Off .*/
/* 								</p>*/
/* 								*/
/* 								</div>*/
/* 								{% endif %} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 						*/
/* 						<div id="tab-general__themecolor" class="form-group">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="*/
/* 									<p class='help-hint-text'>*/
/* 										<i class='fa fa-bullhorn' ></i> */
/* 										<span>Create New Color</span>*/
/* 									</p>*/
/* 									<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>*/
/* 									<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>*/
/* 									<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>*/
/* 								">*/
/* 									Select  Color*/
/* 								</span>*/
/* 							</label>*/
/* 							<div class="col-sm-6" id="select_color">*/
/* 								*/
/* 								{{ fields.field_select('soconfig_general_store','themecolor',allThemeColor,'width30') }} */
/* 								{% if allThemeColor['none'] %}*/
/* 									<div class="text-warning" style="margin-top:20px;">*/
/* 									<p><i class="fa fa-exclamation-triangle" style="font-size:24px;"></i> Can not find css color file. Please recreate color new </p>*/
/* 									</div>*/
/* 								{% endif %}	*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/*                 </div>*/
/* 				*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title" >*/
/* 						<span>Sticky Menu on Top   </span>*/
/* 						<a href="view/template/extension/soconfig/images/general/sticky_menu_top.png" target="_blank" class="question-circle" data-toggle="tooltip" title="Screenshot Themes Config ">*/
/* 							<i class="fa fa-question-circle" ></i>*/
/* 							*/
/* 						</a>*/
/* 							*/
/* 					</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="logo_position">*/
/* 								Status:*/
/* 							</label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_general_store','toppanel_status', {1:'ON',0 : 'OFF'},0 ,'parent sticky_menu' )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" >*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								Select Block on header:*/
/* 							</label>*/
/* 							<div class="col-sm-8">*/
/* 								{{ fields.field_radio('soconfig_general_store','toppanel_type',toppanel_type,1 ,'child sticky_menu') }} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 			*/
/* 				<div class="so-panel">	*/
/* 					<h3 class="panel-title">*/
/* 						Top Bar*/
/* 						<a href="view/template/extension/soconfig/images/general/top_bar.png" target="_blank" class="question-circle" data-toggle="tooltip" title="Screenshot Themes Config ">*/
/* 							<i class="fa fa-question-circle" ></i>*/
/* 							*/
/* 						</a>*/
/* 					</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">Telephone No</label>*/
/* 							<div class="col-sm-2" >*/
/* 								{{ fields.field_radio('soconfig_general_store','phone_status', {1:'ON',0 : 'OFF'},1 )}} */
/* 							</div>*/
/* 							<div class="col-sm-8" id="tab-field-phone_status">*/
/* 								{{ fields.field_langHori(languages,'soconfig_general_store','contact_number',50) }}*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">Welcome Message</label>*/
/* 							<div class="col-sm-2" >*/
/* 								{{ fields.field_radio('soconfig_general_store','welcome_message_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 							<div class="col-sm-8" id="tab-field-welcome_message_status">*/
/* 								{{ fields.field_langHori(languages,'soconfig_general_store','welcome_message',50) }}*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">Checkout Link</label>*/
/* 							<div class="col-sm-3" >*/
/* 								{{ fields.field_radio('soconfig_general_store','checkout_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group last">*/
/* 							<label class="col-sm-2 control-label">Language/Currency Title</label>*/
/* 							<div class="col-sm-3" >*/
/* 								{{ fields.field_radio('soconfig_general_store','lang_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">General</h3>*/
/* 					<div class="panel-container">		*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" >Preloader </label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_general_store','preloader', {1:'ON',0 : 'OFF'},1,'parent preloader' )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" id="tab-field-preloader">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="Select a preloader animation from the list">*/
/* 									Preloader Animation:*/
/* 								</span>*/
/* 							</label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_general_store','preloader_animation', preloader_animation,'line','child preloader')}} */
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" > Status Payment  </label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_general_store','imgpayment_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" id="tab-field-imgpayment_status">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								<span data-toggle="tooltip" title="Edit content here Footer Custom Block.">*/
/* 									Image (Payment block):*/
/* 								</span>*/
/* 							</label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_addimage('soconfig_general_store','imgpayment') }} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">  {{ general_copyright }}   </label>*/
/* 							<div class="col-sm-4">*/
/* 								{{ fields.field_text('soconfig_general_store','copyright','Footer copyright content') }} */
/* 							</div>*/
/* 							<div class="col-sm-offset-2 col-sm-10">*/
/* 								{% if error.copyright %}*/
/* 									<div class="text-danger"> {{error.copyright}}</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/*                 </div>*/
/* 				*/
/*             </div>*/
/*            */
/* */
/* 			{# Header  Blocks---------------------------------------------  #}*/
/*             <div id="tab-general-layout2" class="tab-pane">*/
/* 				<div id="tab-general__headertype" class="tab-pane active">*/
/* 					<div class="so-panel">*/
/* 						<h3 class="panel-title">Type of Header</h3>*/
/* 						<span class="help-block">If you need content from other header like phone number you need to set it in custom Theme Control Panel.</span>*/
/* 						<p class="help-hint">*/
/* 							<i class="fa fa-bullhorn" aria-hidden="true"></i> */
/* 							<span>You can set these headers for any skin you want</span>*/
/* 						</p>*/
/* 						{{ fields.field_typeheader('soconfig_general_store','typeheader',typelayouts) }} */
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 								*/
/*             </div>*/
/* */
/* 			*/
/* 			{# Footer Blocks -----------------------------------------------  #}*/
/*             <div id="tab-general-layout3" class="tab-pane">*/
/* 				<div id="tab-general__footertype">*/
/* 					<div class="so-panel">*/
/* 						<h3 class="panel-title">Type of Footer</h3>*/
/* 						<span class="help-block">If you need content from other footer like contact us you need to set it in custom modules.</span>*/
/* 						<p class="help-hint">*/
/* 							<i class="fa fa-bullhorn" aria-hidden="true"></i> */
/* 							<span>You can set these footer for any skin you want</span>*/
/* 						</p>*/
/* 						{{ fields.field_typeheader('soconfig_general_store','typefooter',typelayouts) }} */
/* 					</div>*/
/* 				</div>*/
/* 			*/
/*             </div>*/
/*             */
/* 			{# Effect Banner  Blocks---------------------------------------------  #}*/
/*             <div id="tab-general-layout4" class="tab-pane">*/
/* 				<div class="clearfix">*/
/* 					*/
/* 						<div id="tab-general__bannereffect" class="tab-pane">*/
/* 							<div class="so-panel">*/
/* 								<h3 class="panel-title">Hover over image below to see effect.</h3>*/
/* 								<p class="help-hint">*/
/* 									<i class="fa fa-bullhorn" aria-hidden="true"></i> */
/* 									<span>Hover over image below to see effect.</span>*/
/* 								</p>*/
/* 								{{ fields.field_typebanner('soconfig_general_store','type_banner',type_banner,3) }} */
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				*/
/*             </div>*/
/* 			*/
/* 			{# Contact Us   Blocks---------------------------------------------  #}*/
/* 			<div id="tab-general-layout5" class="tab-pane">*/
/* 				<div class="so-panel">*/
/* 				<div class="panel-container">	*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label">  Address Text   </label>*/
/* 						<div class="col-sm-4">*/
/* 							{{ fields.field_text('soconfig_general_store','mapaddress','Address Text') }} */
/* 						</div>*/
/* 					</div>*/
/* 						*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label"> Maps Geocode   </label>*/
/* 						<div class="col-sm-4">*/
/* 							{{ fields.field_text('soconfig_general_store','mapgeocode','Maps Geocode') }} */
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label"> API Key Text  </label>*/
/* 						<div class="col-sm-4">*/
/* 							{{ fields.field_text('soconfig_general_store','mapkeys') }} */
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label">  Maps Zoom  </label>*/
/* 						<div class="col-sm-4">*/
/* 							{{ fields.field_text('soconfig_general_store','mapzoom') }} */
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-------------------------------------end tab General---------------------------------->*/
/* */
/*     <!-------------------------------------Tab Layout---------------------------------------->*/
/*     <div class="tab-pane" id="tab-layout">*/
/* 		<!--subtabs: General -->*/
/* 		<div class="tab-pane active" id="tab-colors-layout1">*/
/* 			<div class="so-panel">*/
/* 				<h3 class="panel-title">Theme Layout Settings</h3>*/
/* 				<div class="panel-container">*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label" >*/
/* 							<span data-toggle="tooltip" title="With the boxed layout you can choose additional options such as custom background images, patterns and solid colors">Layout Style</span>*/
/* 						</label>*/
/* 						<div class="col-sm-9">*/
/* 							<div class="btn-group btn-toggle block-group " data-toggle="buttons">*/
/* 								{{ fields.field_radio('soconfig_layout_store','layoutstyle', layoutStyle)}} */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label">*/
/* 							 <span data-toggle="tooltip" title="Set background color for all content.">Body Background Color:</span>*/
/* 						</label>*/
/* 						<div class="col-sm-2">*/
/* 							{{ fields.field_colors('soconfig_layout_store','theme_bgcolor','Background color') }} */
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label" >Overlay pattern</label>*/
/* 						<div class="col-sm-9">*/
/* 							<div class="form-group no-margin">*/
/* 								{% for i in 1..45 %}*/
/* 									<div class="img-patt"><small>{{ i }} </small><img src="{{dir_soconfig}}patterns/{{ i }}.png" alt="pattern {{ i }} "></div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 							{{ fields.field_select('soconfig_layout_store','pattern',pattern_array,'width30') }} */
/* 							*/
/* 							<small class="help-block">Select a pattern number if you want to use one.</small>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label">*/
/* 							<span data-toggle="tooltip" title="Set background image for all site.">Background Image:</span>*/
/* 						</label>*/
/* 						<div class="col-sm-9">*/
/* 							{{ fields.field_addimage('soconfig_layout_store','contentbg') }} */
/* 							*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label" >*/
/* 							 <span data-toggle="tooltip" title="Set background image display mode">*/
/* 								 Background Image display mode*/
/* 							 </span>*/
/* 						</label>*/
/* 						<div class="col-sm-9">*/
/* 							{{ fields.field_radio('soconfig_layout_store','content_bg_mode', content_bg_mode)}} */
/* */
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-3 control-label" >*/
/* 							Background Image display Attachment*/
/* 						</label>*/
/* 						<div class="col-sm-9">*/
/* 							{{ fields.field_radio('soconfig_layout_store','content_attachment', content_attachment)}} */
/* */
/* 						</div>*/
/* 					</div>*/
/* */
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 		<!--subtabs: General -->*/
/*     </div>*/
/*     <!-------------------------------------end tab Colors,backgrounds,fonts-->*/
/* */
/*     <!-------------------------------------Tab Products sliders, products listings-->*/
/*     <div class="tab-pane" id="tab-products">*/
/* */
/*         <ul class="nav nav-tabs  main_tabs_2">*/
/*             <li class="active"><a href="#tab-products-layout1" class="selected" data-toggle="tab">{{ pages_pro_listings }} </a></li>*/
/*             <li><a href="#tab-products-layout2" data-toggle="tab">{{ pages_pro_detail }} </a></li>*/
/*             <li><a href="#tab-products-layout3" data-toggle="tab">{{ pages_comingsoon }} </a></li>*/
/*         </ul>*/
/*         <div class="tab-content">*/
/*             <!--subtabs: Listings -->*/
/*             <div class="tab-pane active wrapper-tabcategory" id="tab-products-layout1">*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">*/
/* 						Layout Category & Product*/
/* 					</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">{{ product_catalog_col_position }} </label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','catalog_col_position', {'outside' : 'Outside content','inside':'Inside content'},'outside' )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">{{ product_catalog_col_type }} </label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','catalog_col_type', {'default' : 'Default','off_canvas':'Column Off Canvas'},'default' )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">{{ product_catalog_sidebar_sticky }} </label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','catalog_sidebar_sticky', {'disable' : 'Disable','left':'Sidebar Left','right':'Sidebar Right','all':'Sidebar All'},'disable' )}} */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">*/
/* 						Category Info*/
/* 						<a href="view/template/extension/soconfig/images/general/category_info.png" target="_blank" class="question-circle" data-toggle="tooltip" title="Screenshot Themes Config ">*/
/* 							<i class="fa fa-question-circle" ></i>*/
/* 						</a>*/
/* 					</h3>*/
/* 					<div class="panel-container">*/
/* */
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" >*/
/* 								{{ product_catalog_refine }}*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_catalog_refine', refine_search)}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" >{{ product_catalog_refine_col }}</span></label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_select('soconfig_pages_store','catalog_refine_number',columns,'width30') }} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label">{{ product_catalog_show }} </label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','lstimg_cate_status', {0:'Disable',1 : 'Show Derc',2 : 'Show all'})}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-product_catalog_mode">*/
/* 								<span data-toggle="tooltip" title="Create your listings into simple catalog.">{{ product_catalog_mode }}</span>*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_select('soconfig_pages_store','product_catalog_mode', catalog_mode,'width30')}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="so-panel col-sm-6">*/
/* 					<h3 class="panel-title">Product Item</h3>*/
/* 					<div class="panel-container">*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-6 control-label">*/
/* 								<span data-toggle="tooltip" title="Set display or not 'Discount' label.">Show "Discount":</span>*/
/* 							</label>*/
/* 							<div class="col-sm-6">*/
/* 								{{ fields.field_radio('soconfig_pages_store','discount_status',  {1:'ON',0 : 'OFF'})}} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-6 control-label">*/
/* 								<span data-toggle="tooltip" title="Set display or not countdown of Special Offer in product sliders.">Show countdown of Special Offer:</span>*/
/* 							</label>*/
/* 							<div class="col-sm-6">*/
/* 								{{ fields.field_radio('soconfig_pages_store','countdown_status',  {1:'ON',0 : 'OFF'})}} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					    <div class="form-group">*/
/* 							<label class="col-sm-6 control-label">Show Ratings</label>*/
/* 							<div class="col-sm-6">*/
/* 								{{ fields.field_radio('soconfig_pages_store','rating_status',  {1:'ON',0 : 'OFF'})}} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-6 control-label">Show image gallery </label>*/
/* 							<div class="col-sm-6">*/
/* 								{{ fields.field_radio('soconfig_pages_store','card_gallery',  card_gallery)}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-6 control-label">Status use placeholder images</label>*/
/* 							<div class="col-sm-6">*/
/* 								{{ fields.field_radio('soconfig_pages_store','placeholder_status',  {1:'ON',0 : 'OFF'},0,'parent placeholder')}} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-6 control-label" > Placeholder default images</label>*/
/* 							<div class="col-sm-6">*/
/* 								{{ fields.field_addimage('soconfig_pages_store','placeholder_img','child placeholder') }} */
/* 							</div>*/
/* 						</div>*/
/* 					*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="so-panel col-sm-6">*/
/* 					<h3 class="panel-title">Group Cart info*/
/* 						*/
/* 					</h3>*/
/* 					<div class="panel-container">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-5 control-label">*/
/* 									Show position cart info*/
/* 								</label>*/
/* 								<div class="col-sm-7">*/
/* 									{{ fields.field_radio('soconfig_pages_store','desktop_addcart_position',  {'left':'Align Left','right' : 'Align Right','center' : 'Align Center','bottom' : 'Align Bottom'},'left')}} */
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<label class="col-sm-5 control-label">*/
/* 									Show "QuickView" Button*/
/* 								</label>*/
/* 								<div class="col-sm-7">*/
/* 									{{ fields.field_radio('soconfig_pages_store','quick_status',  {1:'ON',0 : 'OFF'})}} */
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<label class="col-sm-5 control-label">*/
/* 									Show "Addtocart " Button*/
/* 								</label>*/
/* 								<div class="col-sm-7">*/
/* 									{{ fields.field_radio('soconfig_pages_store','desktop_addcart_status',  {1:'ON',0 : 'OFF'})}} */
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<label class="col-sm-5 control-label">*/
/* 									Show "Wishlist " Button*/
/* 								</label>*/
/* 								<div class="col-sm-7">*/
/* 									{{ fields.field_radio('soconfig_pages_store','desktop_wishlist_status',  {1:'ON',0 : 'OFF'})}} */
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								<label class="col-sm-5 control-label">*/
/* 									Show "Compare " Button*/
/* 								</label>*/
/* 								<div class="col-sm-7">*/
/* 									{{ fields.field_radio('soconfig_pages_store','desktop_Compare_status',  {1:'ON',0 : 'OFF'})}} */
/* 								</div>*/
/* 							</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/*          */
/*             <!--subtabs: product page -->*/
/*             <div id="tab-products-layout2" class="tab-pane">*/
/*                 <div class="so-panel">*/
/* 					<h3 class="panel-title">Options Styles</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-thumbnails_position">Option Checkbox and Radio Style:</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','radio_style', radio_style)}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Product Page</h3>*/
/* 					<div class="panel-container">*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-thumbnails_position">Select of product gallery:</label>*/
/* 							<div class="col-sm-5">*/
/* 								<img src="{{dir_soconfig}}images/general/product-grid.png" alt="product-grid">*/
/* 								{{ fields.field_radio('soconfig_pages_store','thumbnails_position', thumbnailPos)}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-cloudzoom_mode">*/
/* 								<span data-toggle="tooltip" title="Choose position of cloudzoom image preview on product page.">Enable Product Zoom</span>*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_enablezoom',  {1:'ON',0 : 'OFF'})}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" >*/
/* 								Show Product sold*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_order',  {1:'ON',0 : 'OFF'},1)}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" >*/
/* 								Button Show More on Description*/
/* */
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_enableshowmore',  {1:'ON',0 : 'OFF'},0)}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-tabs_position">Tabs Style </label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','tabs_position', tabs_position)}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" >*/
/* 								Tabs Size Chart*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_enablesizechart',  {1:'ON',0 : 'OFF'},0,'parent sizechart')}} */
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group" id="tab-field-product_enablesizechart">*/
/* 							<label class="col-sm-3 control-label" >*/
/* 								Size Chart:*/
/* 							</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_addimage('soconfig_general_store','img_sizechart','child sizechart') }} */
/* 								*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-meta-keyword">Tabs Shipping & Payment</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_enableshipping',  {1:'ON',0 : 'OFF'},1)}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group" id="tab-field-product_enableshipping">*/
/* 							<label class="col-sm-3 control-label" >Content Shipping & Payment</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_langTextarea(languages,'soconfig_pages_store','product_contentshipping') }}*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 				</div>	*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Social Share</h3>*/
/* 					<div class="panel-container">*/
/* 						*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-meta-keyword">Show Custom</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','product_page_button',  {1:'ON',0 : 'OFF'})}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group" id="tab-field-product_page_button">*/
/* 							<label class="col-sm-3 control-label" >Custom block</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_langTextarea(languages,'soconfig_pages_store','product_socialshare') }}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">Related products</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-3 control-label" for="input-related">Show Related</label>*/
/* 							<div class="col-sm-9">*/
/* 								{{ fields.field_radio('soconfig_pages_store','related_status',  {1:'ON',0 : 'OFF'})}} */
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div id="tab-field-related_status">*/
/* 							*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-3 control-label" for="input-listing_quick_type">Related product number per row <p class="help-block">(use orientation related = Horizontal)</p></label>*/
/* 								<div class="col-sm-9">*/
/* 									{{ fields.field_devices('soconfig_pages_store','product_related_column_',devices,columns) }} */
/* */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>	*/
/* 				</div>		*/
/* 					*/
/* 				*/
/*             </div>*/
/* 			*/
/* 			<!--subtabs: Coming Soon-->*/
/* 			<div id="tab-products-layout3" class="tab-pane">*/
/* 	    	   <div class="so-panel">*/
/* 					<h3 class="panel-title">Coming Soon</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group" id="tab-field-comingsoon_status">*/
/* 							<label class="col-sm-2 control-label" >*/
/* 								Coming Soon Background*/
/* 							</label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_addimage('soconfig_pages_store','comingsoon_imglogo') }} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">Coming Soon Title</label>*/
/* 							<div class="col-sm-10" >*/
/* 								{{ fields.field_langHori(languages,'soconfig_pages_store','comingsoon_title',50) }}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">Date</label>*/
/* 							<div class="col-sm-3" >*/
/* 								{{ fields.field_date('soconfig_pages_store','comingsoon_date','2016-05-26') }}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" >*/
/* 							<label class="col-sm-2 control-label" >Content</label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_langTextarea(languages,'soconfig_pages_store','comingsoon_content') }}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 	        </div>*/
/*         </div>*/
/* */
/*     </div>*/
/*     <!------------------------------------end tab Pages-->*/
/* */
/*     <!-------------------------------------Tab Fonts-->*/
/*     <div class="tab-pane" id="tab-fonts">*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">Fonts<span class="help-block">If you want to speed up your site use one of the common fonts instead of the fonts from Google.</span></h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					*/
/* 					<label class="col-sm-3 control-label" >{{ fonts_body }}  </label>*/
/* 					<div class="col-sm-9">*/
/* 						<div class="block-group fonts-change">*/
/* 							{{ fields.field_onOffFont('soconfig_fonts_store','body_status') }} */
/* 							<div class="block-group items-font font-standard" >*/
/* 								{{ fields.field_select('soconfig_fonts_store','normal_body',fonts_normal) }} */
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class="control-label">  {{ entry_google_url }}   </label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','url_body') }} */
/* 									<span class="help-block">{{ entry_google_url_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class=" control-label"> {{ entry_google_family }}</label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','family_body') }} */
/* 									<span class="help-block"> {{ entry_google_family_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="block-group">*/
/* 							{{ fields.field_textarea('soconfig_fonts_store','selector_body','Add css selectors') }} */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 		*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >{{ fonts_menu }}  </label>*/
/* 					<div class="col-sm-9">*/
/* 						<div class="block-group fonts-change">*/
/* 							{{ fields.field_onOffFont('soconfig_fonts_store','menu_status') }} */
/* 							<div class="block-group items-font font-standard" >*/
/* 								{{ fields.field_select('soconfig_fonts_store','normal_menu',fonts_normal) }} */
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class="control-label">  {{ entry_google_url }}   </label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','url_menu') }} */
/* 									<span class="help-block">{{ entry_google_url_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class=" control-label"> {{ entry_google_family }}</label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','family_menu') }} */
/* 									<span class="help-block"> {{ entry_google_family_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="block-group">*/
/* 							{{ fields.field_textarea('soconfig_fonts_store','selector_menu','Add css selectors') }} */
/* 						</div>*/
/* 					</div>*/
/* 				</div>	*/
/* 				*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >{{ fonts_heading }}  </label>*/
/* 					<div class="col-sm-9">*/
/* 						<div class="block-group fonts-change">*/
/* 							{{ fields.field_onOffFont('soconfig_fonts_store','heading_status') }} */
/* 							<div class="block-group items-font font-standard" >*/
/* 								{{ fields.field_select('soconfig_fonts_store','normal_heading',fonts_normal) }} */
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class="control-label"> {{ entry_google_url }}  </label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','url_heading') }} */
/* 									<span class="help-block">{{ entry_google_url_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="block-group items-font font-google" >*/
/* 								<label class=" control-label"> {{ entry_google_family }}</label>*/
/* 								<div class="">*/
/* 									{{ fields.field_text('soconfig_fonts_store','family_heading') }} */
/* 									<span class="help-block"> {{ entry_google_family_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="block-group">*/
/* 							{{ fields.field_textarea('soconfig_fonts_store','selector_heading','Add css selectors') }} */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>				*/
/*     </div>*/
/*     <!-------------------------------------end tab Fonts-->*/
/* 	*/
/* 	<!-------------------------------------Tab Social-->*/
/* 	<div class="tab-pane" id="tab-social">*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">sidebar social*/
/* 				*/
/* 			</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >*/
/* 						Show sidebar social*/
/* 					</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('soconfig_social_store','social_sidebar', {0:'Disable',1 : 'Sidebar Left',2 : 'Sidebar Right'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>	*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">Facebook</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >*/
/* 						Show Facebook*/
/* 					</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('soconfig_social_store','social_fb_status', {1:'ON',0 : 'OFF'},'0','parent social_fb' )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group" id="tab-field-social_fb_status">*/
/* 					<label class="col-sm-3 control-label" >*/
/* 						Facebook ID:*/
/* 					</label>*/
/* 					<div class="col-sm-3">*/
/* 						{{ fields.field_text('soconfig_social_store','facebook','Facebook profile name','child social_fb') }} */
/* 					</div>*/
/* 					<div class="col-sm-4">*/
/* 						 <a href="http://findmyfacebookid.com/" target="_blank" style="display: block;float: left;width: auto;margin-top: 7px">Find your Facebook ID »</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>	*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">Twitter</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >*/
/* 						Show Twitter*/
/* 					</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('soconfig_social_store','social_twitter_status', {1:'ON',0 : 'OFF'},'0','parent social_tt' )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group" id="tab-field-social_twitter_status">*/
/* 					<label class="col-sm-3 control-label" >*/
/* 						Twitter username:*/
/* 					</label>*/
/* 					<div class="col-sm-3">*/
/* 						{{ fields.field_text('soconfig_social_store','twitter','Twitter account name','child social_tt') }} */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">Custom</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-3 control-label" >Show Custom </label>*/
/* 					<div class="col-sm-3">*/
/* 						{{ fields.field_radio('soconfig_social_store','social_custom_status', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 				*/
/* 				<div class="form-group" id="tab-field-social_custom_status">*/
/* 					<label class="col-sm-3 control-label" >Custom block</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_langTextarea(languages,'soconfig_social_store','video_code') }}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<!-------------------------------------Tab Tab Advanced-->*/
/* 	<div class="tab-pane" id="tab-custom">*/
/* 		<div class="tab-horizontal">*/
/* 			<ul class="nav nav-tabs  main_tabs_2">*/
/* 				<li class="active"><a href="#tab-custom-layout1" class="selected" data-toggle="tab">{{custom_tab_css_input}}</a></li>*/
/* 				<li><a href="#tab-custom-layout2" data-toggle="tab">{{custom_tab_css_file}}</a></li>*/
/* 				<li><a href="#tab-custom-layout3" data-toggle="tab">{{custom_tab_js_input}}</a></li>*/
/* */
/* 			</ul>*/
/* 		</div>*/
/*         <div class="tab-content ">*/
/*         	<div class="tab-pane active" id="tab-custom-layout1">*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">CSS CODE DIRECT INPUT</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" >Status </label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_custom_store','cssinput_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							{{ fields.field_textarea('soconfig_custom_store','cssinput_content') }} */
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/*             </div>*/
/* */
/*             <div id="tab-custom-layout2" class="customcode_wrap tab-pane">*/
/* 				<div class="so-panel">*/
/* 					*/
/* 					<div class="form-group no-margin" >*/
/* 						<h3 class="col-sm-2 panel-title ">ADD CSS FILES</h3>*/
/* 						<div class="col-sm-10 text-right"><a class="btn btn-success add-cssfile_url" > <i class="fa fa-plus-circle"></i> Add file</a></div>*/
/* 					</div>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" >Status </label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_custom_store','cssfile_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						{% if (cssfile_url) is not empty %}*/
/* 							{% for cssfile in cssfile_url %}*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" >Enter file path</label>*/
/* 								<div class="col-sm-9">*/
/* 									<input class="form-control" type="text" name="soconfig_custom_store[cssfile_url][]" value="{{cssfile}}" />*/
/* 								</div>*/
/* 								<div class="col-sm-1">*/
/* 									<a href="#" class="btn btn-success remove_field"><i class="fa fa-times"></i></a>*/
/* 								</div>*/
/* 							</div>*/
/* 							{% endfor %}	*/
/* 						{% else %}	*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" >Enter file path</label>*/
/* 								<div class="col-sm-9">*/
/* 									<input class="form-control" type="text" name="soconfig_custom_store[cssfile_url][]" value="catalog/view/theme/{{theme_directory}}/css/custom.css" />*/
/* 								</div>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/*             <div class="tab-pane" id="tab-custom-layout3">*/
/* 				<div class="so-panel">*/
/* 					<h3 class="panel-title">JS CODE DIRECT INPUT</h3>*/
/* 					<div class="panel-container">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" >Status </label>*/
/* 							<div class="col-sm-10">*/
/* 								{{ fields.field_radio('soconfig_custom_store','jsinput_status', {1:'ON',0 : 'OFF'} )}} */
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							{{ fields.field_textarea('soconfig_custom_store','jsinput_content') }} */
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 				</div>*/
/*             </div>*/
/*            */
/*         </div>*/
/* 	</div>*/
/* 	<!------------------------------------- End Tab Tab Advanced-->*/
/* 	*/
/* 	<!-------------------------------------Tab Tab Advanced-->*/
/* 	<div class="tab-pane" id="tab-advanced">*/
/* 		*/
/* 		<div class="so-panel">*/
/* 			<h3 class="panel-title">SCSS Compile</h3>*/
/* 			<div class="panel-container">*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" >SCSS Compile</label>*/
/* 					<div class="col-sm-2">*/
/* 						{{ fields.field_radio('soconfig_advanced_store','scsscompile', {1:'ON',0 : 'OFF'},0,'parent scsscompile' )}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" >CSS Format</label>*/
/* 					<div class="col-sm-9">*/
/* 						{{ fields.field_radio('soconfig_advanced_store','scssformat', Scssformat,'Nested','child scsscompile')}} */
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" >User Developer Compile Muti Color</label>*/
/* 					<div class="col-sm-2">*/
/* 						{{ fields.field_radio('soconfig_advanced_store','compileMutiColor', {1:'ON',0 : 'OFF'} )}} */
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<div class="so-panel col-sm-6">*/
/* 			<h3 class="panel-title">Performance</h3>*/
/* 			<div class="form-group">*/
/* 				<label class="col-sm-4 control-label">Show Minify CSS </label>*/
/* 				<div class="col-sm-8">*/
/* 					{{ fields.field_radio('soconfig_advanced_store','cssminify', {1:'ON',0 : 'OFF'} )}} 					*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!-- cssminify -->*/
/* 			<div id="tab-field-cssminify" class="form-group">*/
/* 				*/
/* 				<div class="col-sm-8"  style="margin-bottom:15px">*/
/* 					<a onclick="add_cssExclude();" class="add-item-payment btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add file css</a>			*/
/* 				</div>*/
/* 				<table class="bottom-bar" id="listgroup-cssminify">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<td class="first" style="width: 40%;" >Exclude file css</td>*/
/* 							<td style="width: 10%;">Delete</td>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					{% set listcss_row = 0 %}*/
/* 					{% if cssExcludes and  cssExcludes !=''%}*/
/* */
/* 					  	{% for cssExclude in cssExcludes %}*/
/* 						  	{% if cssExclude.namecss is not empty %}*/
/* 								<tbody id="listcssExclude{{listcss_row}}">*/
/* 									<tr>*/
/* 										<td class="first">*/
/* 											<input class="form-control" type="text" class="form-control" value="{{cssExclude.namecss}}" name="soconfig_advanced_store[cssExclude][{{listcss_row}}][namecss]">*/
/* 										</td>*/
/* 										<td>*/
/* 											<a onclick="$('#listcssExclude{{listcss_row}}').remove();" class="btn btn-danger">Remove</a>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 							{%set listcss_row = listcss_row + 1 %}*/
/* 							{% endif %}*/
/* 						{% endfor %}	*/
/* 					{% endif %}*/
/* 					<tfoot></tfoot>*/
/* 				</table>*/
/* */
/* 				*/
/* 				<script type="text/javascript">*/
/* 				var listcss_row = {{listcss_row}} ;*/
/* 				var languages = {{languages|json_encode}} ;*/
/* 				*/
/* 				function add_cssExclude() {*/
/* */
/* 					html  = '<tbody id="listcssExclude' + listcss_row + '">';*/
/* 					html += '  <tr>';*/
/* 					html += '    <td>';*/
/* 					html += '		<input class="form-control" type="text" value="catalog/view/javascript/font-awesome/css/font-awesome.min.css" name="soconfig_advanced_store[cssExclude][' + listcss_row + '][namecss]">';*/
/* 					html += '    </td>';*/
/* 					html += '    <td><a onclick="$(\'#listcssExclude' + listcss_row + '\').remove();" class="btn btn-danger">Remove</a></td>';*/
/* 					html += '  </tr>';*/
/* 					html += '</tbody>';*/
/* 					*/
/* 					$('#listgroup-cssminify tfoot').before(html);*/
/* 					listcss_row++;*/
/* 				}*/
/* 				</script> */
/* 			</div>*/
/* 			<!--  END cssminify -->*/
/* 			<div class="form-group" style="padding:0;border:none;">*/
/* 				<div class="col-sm-10">*/
/* 					<a href="{{clear_cache}}"><button class="btn btn-warning" type="button"><i class="fa fa-eraser"></i> Clear Minify</button></a>*/
/* 					<span style="margin:0 10px;">Delete all of the theme css, js file path: catalog/view/theme/so-emarket/css/minify</span>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="so-panel col-sm-6">*/
/* 			*/
/* 			<div class="form-group" style="margin-top: 15px;">*/
/* 				<label class="col-sm-4 control-label">Show Minify JS</label>*/
/* 				<div class="col-sm-8">*/
/* 					{{ fields.field_radio('soconfig_advanced_store','jsminify', {1:'ON',0 : 'OFF'} )}} 							*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!-- jsminify -->*/
/* 			<div id="tab-field-jsminify" class="form-group">*/
/* 				<div class="col-sm-8 "  style="margin-bottom:15px">*/
/* 					<a onclick="add_jsExclude();" class="add-item-payment btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add file JS</a>			*/
/* 				</div>*/
/* 				<table class="bottom-bar" id="listgroup-jsminify">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<td class="first" style="width: 40%;" >Exclude file Javascript</td>*/
/* 							<td style="width: 10%;">Delete</td>*/
/* 						</tr>*/
/* 					</thead>*/
/* */
/* 					{% set listjs_row = 0 %}*/
/* 					{% if jsExcludes and  jsExcludes !=''%}*/
/* 						*/
/* 					  	{% for jsExclude in jsExcludes %}*/
/* 						  	{% if jsExclude.namecss is not empty %}*/
/* 								<tbody id="listjsExclude{{listjs_row}}">*/
/* 									<tr>*/
/* 										<td class="first">*/
/* 											<input class="form-control" type="text" class="form-control" value="{{jsExclude.namecss}}" name="soconfig_advanced_store[jsExclude][{{listjs_row}}][namecss]">*/
/* 										</td>*/
/* 										*/
/* 										<td>*/
/* 											<a onclick="$('#listjsExclude{{listjs_row}}').remove();" class="btn btn-danger">Remove</a>*/
/* 										</td>*/
/* 									</tr>*/
/* 								</tbody>*/
/* 							{%set listjs_row = listjs_row + 1 %}*/
/* 							{% endif %}*/
/* 						{% endfor %}	*/
/* 					{% endif %}*/
/* 					<tfoot></tfoot>*/
/* 				</table>*/
/* */
/* 				*/
/* 				<script type="text/javascript">*/
/* 				var listjs_row = {{listjs_row}} ;*/
/* 				*/
/* 				function add_jsExclude() {*/
/* */
/* 					html  = '<tbody id="listjsExclude' + listjs_row + '">';*/
/* 					html += '  <tr>';*/
/* 					html += '    <td>';*/
/* 					html += '		<input class="form-control" type="text" value="catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" name="soconfig_advanced_store[jsExclude][' + listjs_row + '][namecss]">';*/
/* 					html += '    </td>';*/
/* 					html += '    <td><a onclick="$(\'#listjsExclude' + listjs_row + '\').remove();" class="btn btn-danger">Remove</a></td>';*/
/* 					html += '  </tr>';*/
/* 					html += '</tbody>';*/
/* 					*/
/* 					$('#listgroup-jsminify tfoot').before(html);*/
/* 					listjs_row++;*/
/* 				}*/
/* 				</script> */
/* 			</div>*/
/* 			<!--  END jsminify -->*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	<!-------------------------------------End Tab Advanced-->*/
/* 	*/
/* 	*/
/* </div>*/
/* */
