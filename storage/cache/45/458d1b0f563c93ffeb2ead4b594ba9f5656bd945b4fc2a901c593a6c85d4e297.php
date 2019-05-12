<?php

/* so-emarket/template/common/header.twig */
class __TwigTemplate_50a9b3ca5de56edd25e8fc79660688448002e9297fc529191fa88dd2f07c16b6 extends Twig_Template
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
        // line 9
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 10
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 14
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 15
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />";
        }
        // line 18
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />";
        }
        // line 19
        echo "<!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"><![endif]-->

";
        // line 22
        if (((isset($context["direction"]) ? $context["direction"] : null) == "ltr")) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo "
";
        } elseif ((        // line 23
(isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css"), "method");
            echo " 
";
        } else {
            // line 24
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "method");
            echo " ";
        }
        // line 25
        echo "
";
        // line 26
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "method");
        echo "
";
        // line 27
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => "catalog/view/javascript/soconfig/css/lib.css"), "method");
        echo "
";
        // line 28
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/css/ie9-and-up.css")), "method");
        echo "
";
        // line 29
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/css/custom.css")), "method");
        echo "

";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => $this->getAttribute($context["style"], "href", array())), "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssfile_status"), "method")) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssfile_url"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cssfile"]) {
                echo " ";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addCss", array(0 => $context["cssfile"]), "method");
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssfile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
        // line 33
        echo "
";
        // line 35
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/jquery/jquery-2.1.1.min.js"), "method");
        echo "
";
        // line 36
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/bootstrap/js/bootstrap.min.js"), "method");
        echo "
";
        // line 37
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/libs.js"), "method");
        echo "

";
        // line 39
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/so.system.js"), "method");
        echo "
";
        // line 40
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js"), "method");
        echo "
";
        // line 41
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/lazysizes/lazysizes.min.js"), "method");
        echo "
";
        // line 42
        if (((isset($context["class"]) ? $context["class"] : null) == "information-information")) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/typo/element.js"), "method");
            echo " ";
        }
        // line 43
        echo "
";
        // line 44
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/jquery.nav.js")), "method");
        echo "

";
        // line 46
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/so.custom.js")), "method");
        echo "
";
        // line 47
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/custom.js")), "method");
        echo "
";
        // line 48
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => (("catalog/view/theme/" . (isset($context["theme_directory"]) ? $context["theme_directory"] : null)) . "/js/common.js")), "method");
        echo "

";
        // line 50
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "toppanel_status"), "method")) {
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => "catalog/view/javascript/soconfig/js/toppanel.js"), "method");
        }
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " ";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "addJs", array(0 => $context["script"]), "method");
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "

";
        // line 55
        echo "
";
        // line 56
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "scss_compass", array());
        echo "
";
        // line 57
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "css_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssExclude"), "method")), "method");
        echo "
";
        // line 58
        echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "js_out", array(0 => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsExclude"), "method")), "method");
        echo "


";
        // line 62
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_body"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 63
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_menu"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 64
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method") && ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "heading_status"), "method") == "google"))) {
            echo " <link href='";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "url_heading"), "method");
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 65
        if ((isset($context["selector_body"]) ? $context["selector_body"] : null)) {
            // line 66
            echo "\t<style type=\"text/css\">
\t\t";
            // line 67
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "body_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_body"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 68
                echo "  ";
                echo ((((isset($context["selector_body"]) ? $context["selector_body"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_body"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 70
        echo " 
";
        // line 71
        if ((isset($context["selector_menu"]) ? $context["selector_menu"] : null)) {
            // line 72
            echo "\t<style type=\"text/css\">
\t\t";
            // line 73
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "menu_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_menu"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 74
                echo "  ";
                echo ((((isset($context["selector_menu"]) ? $context["selector_menu"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_menu"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 76
        echo " 
";
        // line 77
        if ((isset($context["selector_heading"]) ? $context["selector_heading"] : null)) {
            // line 78
            echo "\t<style type=\"text/css\">
\t\t";
            // line 79
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "heading_status"), "method") == "google")) {
                echo " ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "family_heading"), "method")) . "}");
                echo "
\t\t";
            } else {
                // line 80
                echo "  ";
                echo ((((isset($context["selector_heading"]) ? $context["selector_heading"] : null) . "{font-family:") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "normal_heading"), "method")) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 82
        echo " 


";
        // line 86
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_status"), "method") &&  !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_content"), "method")))) {
            // line 87
            echo "    <style type=\"text/css\">";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "cssinput_content"), "method");
            echo " </style>
";
        }
        // line 88
        echo " 

";
        // line 90
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_status"), "method") &&  !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method")))) {
            // line 91
            echo "   <script type=\"text/javascript\"><!--";
            echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "jsinput_content"), "method");
            echo "  //--></script>
";
        }
        // line 92
        echo " 


";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 98
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
";
        // line 102
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method") == "boxed")) {
            echo " 
\t<style type=\"text/css\">
\tbody {
\t\tbackground-color:";
            // line 105
            echo (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "theme_bgcolor"), "method")) : ("none"));
            echo " ;\t\t
\t\t";
            // line 106
            if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method") != "")) {
                // line 107
                echo "\t\t\tbackground-image: url(\"image/";
                echo $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method");
                echo " \");
\t\t";
            }
            // line 109
            echo "\t\tbackground-repeat:";
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_bg_mode"), "method")) : ("no-repeat"));
            echo " ;
\t\tbackground-attachment:";
            // line 110
            echo (( !twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method"))) ? ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "content_attachment"), "method")) : ("inherit"));
            echo " ;
\t\tbackground-position:top center; 
\t}
\t</style>
";
        }
        // line 114
        echo " \t

</head>
";
        // line 118
        echo "
\t";
        // line 119
        $context["layoutbox"] = (( !twig_test_empty((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null))) ? ((isset($context["url_layoutbox"]) ? $context["url_layoutbox"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "layoutstyle"), "method")));
        // line 120
        echo "\t";
        $context["pattern"] = (( !twig_test_empty((isset($context["url_pattern"]) ? $context["url_pattern"] : null))) ? ((isset($context["url_pattern"]) ? $context["url_pattern"] : null)) : ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "pattern"), "method")));
        // line 121
        echo "

\t";
        // line 123
        $context["cls_body"] = ((isset($context["class"]) ? $context["class"] : null) . " ");
        // line 124
        echo "\t";
        $context["cls_body"] = ((isset($context["cls_body"]) ? $context["cls_body"] : null) . (isset($context["direction"]) ? $context["direction"] : null));
        // line 125
        echo "\t";
        $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " layout-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typelayout"), "method"));
        // line 126
        if (((((isset($context["layoutbox"]) ? $context["layoutbox"] : null) == "boxed") && ((isset($context["pattern"]) ? $context["pattern"] : null) != "none")) && twig_test_empty($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "contentbg"), "method")))) {
            // line 127
            echo "\t";
            $context["cls_body"] = (((isset($context["cls_body"]) ? $context["cls_body"] : null) . " pattern-") . (isset($context["pattern"]) ? $context["pattern"] : null));
        }
        // line 128
        echo " 

\t";
        // line 130
        $context["cls_wrapper"] = ("wrapper-" . (isset($context["layoutbox"]) ? $context["layoutbox"] : null));
        // line 131
        echo "\t";
        $context["cls_wrapper"] = (((isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null) . " banners-effect-") . $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "type_banner"), "method"));
        // line 132
        echo "
\t
<body class=\"";
        // line 134
        echo (isset($context["cls_body"]) ? $context["cls_body"] : null);
        echo "\">
<div id=\"wrapper\" class=\"";
        // line 135
        echo (isset($context["cls_wrapper"]) ? $context["cls_wrapper"] : null);
        echo "\">  
 
";
        // line 138
        if ($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader"), "method")) {
            // line 139
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/soconfig/preloader.twig"), "so-emarket/template/common/header.twig", 139)->display(array_merge($context, array("preloader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "preloader_animation"), "method"))));
        }
        // line 141
        echo "
";
        // line 143
        if (($this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "1")) {
            // line 144
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header1.twig"), "so-emarket/template/common/header.twig", 144)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 145
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "2")) {
            // line 146
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header2.twig"), "so-emarket/template/common/header.twig", 146)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 147
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "3")) {
            // line 148
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header3.twig"), "so-emarket/template/common/header.twig", 148)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 149
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "4")) {
            // line 150
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header4.twig"), "so-emarket/template/common/header.twig", 150)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 151
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "5")) {
            // line 152
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header5.twig"), "so-emarket/template/common/header.twig", 152)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 153
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "6")) {
            // line 154
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header6.twig"), "so-emarket/template/common/header.twig", 154)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 155
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "7")) {
            // line 156
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header7.twig"), "so-emarket/template/common/header.twig", 156)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 157
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "8")) {
            // line 158
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header8.twig"), "so-emarket/template/common/header.twig", 158)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 159
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "9")) {
            // line 160
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header9.twig"), "so-emarket/template/common/header.twig", 160)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 161
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "10")) {
            // line 162
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header10.twig"), "so-emarket/template/common/header.twig", 162)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 163
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "11")) {
            // line 164
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header11.twig"), "so-emarket/template/common/header.twig", 164)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 165
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "12")) {
            // line 166
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header12.twig"), "so-emarket/template/common/header.twig", 166)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 167
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "13")) {
            // line 168
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header13.twig"), "so-emarket/template/common/header.twig", 168)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 169
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "14")) {
            // line 170
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header14.twig"), "so-emarket/template/common/header.twig", 170)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 171
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "15")) {
            // line 172
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header15.twig"), "so-emarket/template/common/header.twig", 172)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 173
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "16")) {
            // line 174
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header16.twig"), "so-emarket/template/common/header.twig", 174)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 175
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "17")) {
            // line 176
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header17.twig"), "so-emarket/template/common/header.twig", 176)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 177
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "18")) {
            // line 178
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header18.twig"), "so-emarket/template/common/header.twig", 178)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 179
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "19")) {
            // line 180
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header19.twig"), "so-emarket/template/common/header.twig", 180)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } elseif (($this->getAttribute(        // line 181
(isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method") == "20")) {
            // line 182
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/header/header20.twig"), "so-emarket/template/common/header.twig", 182)->display(array_merge($context, array("typeheader" => $this->getAttribute((isset($context["soconfig"]) ? $context["soconfig"] : null), "get_settings", array(0 => "typeheader"), "method"))));
        } else {
            // line 183
            echo "\t
\t<style>
\t\t.alert-primary .alert-link {color: #002752;}
\t\t.alert-link {font-weight: 700;text-decoration: none;}
\t\t.alert-link:hover{text-decoration: underline;}
\t\t.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;
\t\t}
\t</style>
\t<div class=\"alert alert-primary\">
\t\t\tGo to admin, find Extensions >>  <a class=\"alert-link\" href=\"admin/index.php?route=marketplace/modification\"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file
\t</div>
";
        }
        // line 195
        echo "
<div id=\"socialLogin\"></div>

 ";
        // line 198
        if (((array_key_exists("setting", $context) && $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_enable", array())) && $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_popuplogin", array()))) {
            // line 199
            echo " <div class=\"modal fade in\" id=\"so_sociallogin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
 <div class=\"modal-dialog block-popup-login\">
 <a href=\"javascript:void(0)\" title=\"Close\" class=\"close close-login fa fa-times-circle\" data-dismiss=\"modal\"></a>
 <div class=\"tt_popup_login\"><strong>";
            // line 202
            echo (isset($context["text_title_popuplogin"]) ? $context["text_title_popuplogin"] : null);
            echo "</strong></div>
 <div class=\"block-content\">
 <div class=\" col-reg registered-account\">
 <div class=\"block-content\">
 <form class=\"form form-login\" action=\"";
            // line 206
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" method=\"post\" id=\"login-form\">
 <fieldset class=\"fieldset login\" data-hasrequired=\"* Required Fields\">
 <div class=\"field email required email-input\">
 <div class=\"control\">
 <input name=\"email\" value=\"\" autocomplete=\"off\" id=\"email\" type=\"email\" class=\"input-text\" title=\"Email\" placeholder=\"E-mail Address\" />
 </div>
 </div>
 <div class=\"field password required pass-input\">
 <div class=\"control\">
 <input name=\"password\" type=\"password\" autocomplete=\"off\" class=\"input-text\" id=\"pass\" title=\"Password\" placeholder=\"Password\" />
 </div>
 </div>
 ";
            // line 218
            if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_enable", array())) {
                // line 219
                echo " <div class=\" form-group\">
 <label class=\"control-label\">";
                // line 220
                echo (isset($context["text_title_login_with_social"]) ? $context["text_title_login_with_social"] : null);
                echo "</label>
 <div>
 ";
                // line 222
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googlestatus", array())) {
                    // line 223
                    echo " ";
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        // line 224
                        echo " <a href=\"";
                        echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-google-plus\"><i class=\"fa fa-google fa-fw\" aria-hidden=\"true\"></i></a>
 ";
                    } else {
                        // line 226
                        echo " <a class=\"social-icon\" href=\"";
                        echo (isset($context["googlelink"]) ? $context["googlelink"] : null);
                        echo "\">
 <img class=\"img-responsive\" src=\"";
                        // line 227
                        echo (isset($context["googleimage"]) ? $context["googleimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 228
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                        echo "\" 
 title=\"";
                        // line 229
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_googletitle", array());
                        echo "\" 
 />
 </a>
 ";
                    }
                    // line 233
                    echo " ";
                }
                // line 234
                echo " ";
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbstatus", array())) {
                    // line 235
                    echo " ";
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        // line 236
                        echo " <a href=\"";
                        echo (isset($context["fblink"]) ? $context["fblink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-facebook\"><i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i></a>
 ";
                    } else {
                        // line 238
                        echo " <a href=\"";
                        echo (isset($context["fblink"]) ? $context["fblink"] : null);
                        echo "\" class=\"social-icon\">
 <img class=\"img-responsive\" src=\"";
                        // line 239
                        echo (isset($context["fbimage"]) ? $context["fbimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 240
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                        echo "\" 
 title=\"";
                        // line 241
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_fbtitle", array());
                        echo "\"
 />
 </a>
 ";
                    }
                    // line 245
                    echo " ";
                }
                // line 246
                echo " ";
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twitstatus", array())) {
                    // line 247
                    echo " ";
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        // line 248
                        echo " <a href=\"";
                        echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-twitter\"><i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i></a>
 ";
                    } else {
                        // line 250
                        echo " <a class=\"social-icon\" href=\"";
                        echo (isset($context["twitlink"]) ? $context["twitlink"] : null);
                        echo "\">
 <img class=\"img-responsive\" src=\"";
                        // line 251
                        echo (isset($context["twitimage"]) ? $context["twitimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 252
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                        echo "\" 
 title=\"";
                        // line 253
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_twittertitle", array());
                        echo "\"
 />
 </a>
 ";
                    }
                    // line 257
                    echo " ";
                }
                // line 258
                echo " ";
                if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkstatus", array())) {
                    // line 259
                    echo " ";
                    if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_button", array()) == "icon")) {
                        // line 260
                        echo " <a href=\"";
                        echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-linkdin\"><i class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></i></a>
 ";
                    } else {
                        // line 262
                        echo " <a class=\"social-icon\" href=\"";
                        echo (isset($context["linkdinlink"]) ? $context["linkdinlink"] : null);
                        echo "\">
 <img class=\"img-responsive\" src=\"";
                        // line 263
                        echo (isset($context["linkdinimage"]) ? $context["linkdinimage"] : null);
                        echo "\" 
 data-toggle=\"tooltip\" alt=\"";
                        // line 264
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                        echo "\" 
 title=\"";
                        // line 265
                        echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "so_sociallogin_linkedintitle", array());
                        echo "\"
 />
 </a>
 ";
                    }
                    // line 269
                    echo " ";
                }
                // line 270
                echo " </div>
 </div>
 ";
            }
            // line 273
            echo " <div class=\"secondary ft-link-p\"><a class=\"action remind\" href=\"";
            echo (isset($context["link_forgot_password"]) ? $context["link_forgot_password"] : null);
            echo "\"><span>";
            echo (isset($context["text_forgot_password"]) ? $context["text_forgot_password"] : null);
            echo "</span></a></div>
 <div class=\"actions-toolbar\">
 <div class=\"primary\"><button type=\"submit\" class=\"action login primary\" name=\"send\" id=\"send2\"><span>";
            // line 275
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</span></button></div>
 </div>
 </fieldset>
 </form>
 </div>
 </div> 
 <div class=\"col-reg login-customer\">
 ";
            // line 282
            echo (isset($context["text_colregister"]) ? $context["text_colregister"] : null);
            echo "
 <a class=\"btn-reg-popup\" title=\"";
            // line 283
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "\" href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_create_account"]) ? $context["text_create_account"] : null);
            echo "</a>
 </div>
 <div style=\"clear:both;\"></div>
 </div>
 </div>
 </div>
 <script type=\"text/javascript\">
 jQuery(document).ready(function(\$) {
 var \$window = \$(window);
 function checkWidth() {
 var windowsize = \$window.width();
 if (windowsize > 767) {
 \$('a[href*=\"account/login\"]').click(function (e) {
 e.preventDefault();
 \$(\"#so_sociallogin\").modal('show');
 });
 }
 }
 checkWidth();
 \$(window).resize(checkWidth);
 });
 </script>
 ";
        }
        // line 306
        echo " 
";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  804 => 306,  774 => 283,  770 => 282,  760 => 275,  752 => 273,  747 => 270,  744 => 269,  737 => 265,  733 => 264,  729 => 263,  724 => 262,  718 => 260,  715 => 259,  712 => 258,  709 => 257,  702 => 253,  698 => 252,  694 => 251,  689 => 250,  683 => 248,  680 => 247,  677 => 246,  674 => 245,  667 => 241,  663 => 240,  659 => 239,  654 => 238,  648 => 236,  645 => 235,  642 => 234,  639 => 233,  632 => 229,  628 => 228,  624 => 227,  619 => 226,  613 => 224,  610 => 223,  608 => 222,  603 => 220,  600 => 219,  598 => 218,  583 => 206,  576 => 202,  571 => 199,  569 => 198,  564 => 195,  550 => 183,  546 => 182,  544 => 181,  541 => 180,  539 => 179,  536 => 178,  534 => 177,  531 => 176,  529 => 175,  526 => 174,  524 => 173,  521 => 172,  519 => 171,  516 => 170,  514 => 169,  511 => 168,  509 => 167,  506 => 166,  504 => 165,  501 => 164,  499 => 163,  496 => 162,  494 => 161,  491 => 160,  489 => 159,  486 => 158,  484 => 157,  481 => 156,  479 => 155,  476 => 154,  474 => 153,  471 => 152,  469 => 151,  466 => 150,  464 => 149,  461 => 148,  459 => 147,  456 => 146,  454 => 145,  451 => 144,  449 => 143,  446 => 141,  442 => 139,  440 => 138,  435 => 135,  431 => 134,  427 => 132,  424 => 131,  422 => 130,  418 => 128,  414 => 127,  412 => 126,  409 => 125,  406 => 124,  404 => 123,  400 => 121,  397 => 120,  395 => 119,  392 => 118,  387 => 114,  379 => 110,  374 => 109,  368 => 107,  366 => 106,  362 => 105,  356 => 102,  353 => 100,  344 => 98,  339 => 97,  326 => 96,  321 => 92,  315 => 91,  313 => 90,  309 => 88,  303 => 87,  301 => 86,  296 => 82,  288 => 80,  281 => 79,  278 => 78,  276 => 77,  273 => 76,  265 => 74,  258 => 73,  255 => 72,  253 => 71,  250 => 70,  242 => 68,  235 => 67,  232 => 66,  230 => 65,  222 => 64,  214 => 63,  206 => 62,  200 => 58,  196 => 57,  192 => 56,  189 => 55,  185 => 52,  174 => 51,  170 => 50,  165 => 48,  161 => 47,  157 => 46,  152 => 44,  149 => 43,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  126 => 37,  122 => 36,  118 => 35,  115 => 33,  101 => 32,  92 => 31,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  72 => 25,  68 => 24,  62 => 23,  56 => 22,  52 => 19,  46 => 18,  40 => 17,  35 => 15,  31 => 14,  22 => 10,  19 => 9,);
    }
}
/* {#*/
/* ****************************************************** */
/*  * @package	SO Framework for Opencart 3.x*/
/*  * @author	http://www.opencartworks.com*/
/*  * @license	GNU General Public License*/
/*  * @copyright(C) 2008-2017 opencartworks.com. All rights reserved.*/
/*  *******************************************************/
/* #}*/
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1"> */
/* {% if description %}<meta name="description" content="{{ description }}" />{% endif %}*/
/* {% if keywords %}<meta name="keywords" content="{{ keywords }}" />{% endif %}*/
/* <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->*/
/* */
/* {# =========== Begin General CSS ==============#}*/
/* {% if direction=='ltr' %} {{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}}*/
/* {% elseif direction=='rtl' %}{{soconfig.addCss('catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css')}} */
/* {% else %}{{soconfig.addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css')}} {% endif %}*/
/* */
/* {{soconfig.addCss('catalog/view/javascript/font-awesome/css/font-awesome.min.css')}}*/
/* {{soconfig.addCss('catalog/view/javascript/soconfig/css/lib.css')}}*/
/* {{soconfig.addCss('catalog/view/theme/'~theme_directory~'/css/ie9-and-up.css')}}*/
/* {{soconfig.addCss('catalog/view/theme/'~theme_directory~'/css/custom.css')}}*/
/* */
/* {% for style in styles %}{{ soconfig.addCss(style.href)}}{% endfor %}*/
/* {% if soconfig.get_settings('cssfile_status') %}{% for cssfile in soconfig.get_settings('cssfile_url') %} {{soconfig.addCss(cssfile)}} {% endfor %} {% endif %}*/
/* */
/* {# =========== Begin General Scripts ==============#}*/
/* {{soconfig.addJs('catalog/view/javascript/jquery/jquery-2.1.1.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/bootstrap/js/bootstrap.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/libs.js')}}*/
/* */
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/so.system.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js')}}*/
/* {{soconfig.addJs('catalog/view/javascript/lazysizes/lazysizes.min.js')}}*/
/* {% if class=='information-information' %} {{soconfig.addJs('catalog/view/javascript/soconfig/js/typo/element.js')}} {% endif %}*/
/* */
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/jquery.nav.js')}}*/
/* */
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/so.custom.js')}}*/
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/custom.js')}}*/
/* {{soconfig.addJs('catalog/view/theme/'~theme_directory~'/js/common.js')}}*/
/* */
/* {% if soconfig.get_settings('toppanel_status') %}{{soconfig.addJs('catalog/view/javascript/soconfig/js/toppanel.js')}}{% endif %}*/
/* {% for script in scripts %} {{soconfig.addJs(script)}} {% endfor %}*/
/* */
/* */
/* {# =========== Begin Other CSS & JS  ==============#}*/
/* */
/* {{soconfig.scss_compass}}*/
/* {{soconfig.css_out(soconfig.get_settings('cssExclude'))}}*/
/* {{soconfig.js_out(soconfig.get_settings('jsExclude'))}}*/
/* */
/* */
/* {# =========== Begin Google Font ==============#}*/
/* {% if soconfig.get_settings('url_body')  and  soconfig.get_settings('body_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_body') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_menu')  and  soconfig.get_settings('menu_status')  ==  'google' %} <link href='{{ soconfig.get_settings('url_menu') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if soconfig.get_settings('url_heading')  and  soconfig.get_settings('heading_status') ==  'google' %} <link href='{{ soconfig.get_settings('url_heading') }}' rel='stylesheet' type='text/css'> {% endif %} 	*/
/* {% if selector_body %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('body_status') == 'google' %} {{ (selector_body|raw~'{font-family:'~ soconfig.get_settings('family_body')~'}') }}*/
/* 		{% else %}  {{ selector_body|raw~'{font-family:'~ soconfig.get_settings('normal_body')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_menu %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('menu_status') == 'google' %} {{ (selector_menu|raw~'{font-family:'~ soconfig.get_settings('family_menu')~'}') }}*/
/* 		{% else %}  {{ selector_menu|raw~'{font-family:'~ soconfig.get_settings('normal_menu')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* {% if selector_heading %}*/
/* 	<style type="text/css">*/
/* 		{% if soconfig.get_settings('heading_status') == 'google' %} {{ (selector_heading|raw~'{font-family:'~ soconfig.get_settings('family_heading')~'}') }}*/
/* 		{% else %}  {{ selector_heading|raw~'{font-family:'~ soconfig.get_settings('normal_heading')~'}' }}{% endif %} */
/* 	</style>*/
/* {% endif %} */
/* */
/* */
/* {# =========== Custom Code Editor ==============#}*/
/* {% if soconfig.get_settings('cssinput_status') and (soconfig.get_settings('cssinput_content')) is not empty %}*/
/*     <style type="text/css">{{ soconfig.get_settings('cssinput_content')  }} </style>*/
/* {% endif %} */
/* */
/* {% if soconfig.get_settings('jsinput_status') and (soconfig.get_settings('jsinput_content')) is not empty %}*/
/*    <script type="text/javascript"><!--{{ soconfig.get_settings('jsinput_content')  }}  //--></script>*/
/* {% endif %} */
/* */
/* */
/* {# =========== Begin Google Analytics ==============#}*/
/* {% for link in links %}<link href="{{ link.href }}" rel="{{ link.rel }}" />{% endfor %}*/
/* 	{% for analytic in analytics %}*/
/* 	{{ analytic }}*/
/* {% endfor %}*/
/* */
/* {# =========== Begin Cusom Code ==============#}*/
/* {% if soconfig.get_settings('layoutstyle') == 'boxed'  %} */
/* 	<style type="text/css">*/
/* 	body {*/
/* 		background-color:{{ soconfig.get_settings('theme_bgcolor') ? soconfig.get_settings('theme_bgcolor') : 'none' }} ;		*/
/* 		{% if soconfig.get_settings('contentbg') !='' %}*/
/* 			background-image: url("image/{{soconfig.get_settings('contentbg') }} ");*/
/* 		{% endif %}*/
/* 		background-repeat:{{ soconfig.get_settings('content_bg_mode') is not empty ? soconfig.get_settings('content_bg_mode') : 'no-repeat' }} ;*/
/* 		background-attachment:{{ soconfig.get_settings('content_attachment') is not empty ? soconfig.get_settings('content_attachment') : 'inherit' }} ;*/
/* 		background-position:top center; */
/* 	}*/
/* 	</style>*/
/* {% endif %} 	*/
/* */
/* </head>*/
/* {# =========== Add class Body ==============#}*/
/* */
/* 	{% set layoutbox =  url_layoutbox is not empty  ? url_layoutbox : soconfig.get_settings('layoutstyle') %}*/
/* 	{% set pattern  =  url_pattern is not empty    ? url_pattern : soconfig.get_settings('pattern') %}*/
/* */
/* */
/* 	{% set cls_body = class ~ ' ' %}*/
/* 	{% set cls_body = cls_body ~ direction %}*/
/* 	{% set cls_body = cls_body ~ ' layout-'~soconfig.get_settings('typelayout')%}*/
/* {% if layoutbox=='boxed' and pattern !='none' and soconfig.get_settings('contentbg') is empty %}*/
/* 	{% set cls_body = cls_body ~ ' pattern-'~pattern%}*/
/* {% endif %} */
/* */
/* 	{% set cls_wrapper = 'wrapper-'~layoutbox%}*/
/* 	{% set cls_wrapper = cls_wrapper ~ ' banners-effect-'~soconfig.get_settings('type_banner')%}*/
/* */
/* 	*/
/* <body class="{{cls_body}}">*/
/* <div id="wrapper" class="{{cls_wrapper}}">  */
/*  */
/* {# =========== Show Preloader ==============#}*/
/* {% if soconfig.get_settings('preloader')%}*/
/* 	{% include theme_directory~'/template/soconfig/preloader.twig' with {preloader: soconfig.get_settings('preloader_animation')} %}*/
/* {% endif %}*/
/* */
/* {# =========== Show Header==============#}*/
/* {% if soconfig.get_settings('typeheader') =='1'%}*/
/* 	{% include theme_directory~'/template/header/header1.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='2'%}*/
/* 	{% include theme_directory~'/template/header/header2.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='3'%}*/
/* 	{% include theme_directory~'/template/header/header3.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='4'%}*/
/* 	{% include theme_directory~'/template/header/header4.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='5'%}*/
/* 	{% include theme_directory~'/template/header/header5.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='6'%}*/
/* 	{% include theme_directory~'/template/header/header6.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='7'%}*/
/* 	{% include theme_directory~'/template/header/header7.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='8'%}*/
/* 	{% include theme_directory~'/template/header/header8.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='9'%}*/
/* 	{% include theme_directory~'/template/header/header9.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='10'%}*/
/* 	{% include theme_directory~'/template/header/header10.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='11'%}*/
/* 	{% include theme_directory~'/template/header/header11.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='12'%}*/
/* 	{% include theme_directory~'/template/header/header12.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='13'%}*/
/* 	{% include theme_directory~'/template/header/header13.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='14'%}*/
/* 	{% include theme_directory~'/template/header/header14.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='15'%}*/
/* 	{% include theme_directory~'/template/header/header15.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='16'%}*/
/* 	{% include theme_directory~'/template/header/header16.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='17'%}*/
/* 	{% include theme_directory~'/template/header/header17.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='18'%}*/
/* 	{% include theme_directory~'/template/header/header18.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='19'%}*/
/* 	{% include theme_directory~'/template/header/header19.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% elseif soconfig.get_settings('typeheader') =='20'%}*/
/* 	{% include theme_directory~'/template/header/header20.twig' with {typeheader: soconfig.get_settings('typeheader')} %}*/
/* {% else%}	*/
/* 	<style>*/
/* 		.alert-primary .alert-link {color: #002752;}*/
/* 		.alert-link {font-weight: 700;text-decoration: none;}*/
/* 		.alert-link:hover{text-decoration: underline;}*/
/* 		.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;*/
/* 		}*/
/* 	</style>*/
/* 	<div class="alert alert-primary">*/
/* 			Go to admin, find Extensions >>  <a class="alert-link" href="admin/index.php?route=marketplace/modification"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* <div id="socialLogin"></div>*/
/* */
/*  {% if setting is defined and setting.so_sociallogin_enable and setting.so_sociallogin_popuplogin %}*/
/*  <div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">*/
/*  <div class="modal-dialog block-popup-login">*/
/*  <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>*/
/*  <div class="tt_popup_login"><strong>{{ text_title_popuplogin }}</strong></div>*/
/*  <div class="block-content">*/
/*  <div class=" col-reg registered-account">*/
/*  <div class="block-content">*/
/*  <form class="form form-login" action="{{ login }}" method="post" id="login-form">*/
/*  <fieldset class="fieldset login" data-hasrequired="* Required Fields">*/
/*  <div class="field email required email-input">*/
/*  <div class="control">*/
/*  <input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-mail Address" />*/
/*  </div>*/
/*  </div>*/
/*  <div class="field password required pass-input">*/
/*  <div class="control">*/
/*  <input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password" />*/
/*  </div>*/
/*  </div>*/
/*  {% if setting.so_sociallogin_enable %}*/
/*  <div class=" form-group">*/
/*  <label class="control-label">{{ text_title_login_with_social }}</label>*/
/*  <div>*/
/*  {% if setting.so_sociallogin_googlestatus %}*/
/*  {% if setting.so_sociallogin_button == 'icon' %}*/
/*  <a href="{{ googlelink }}" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>*/
/*  {% else %}*/
/*  <a class="social-icon" href="{{ googlelink }}">*/
/*  <img class="img-responsive" src="{{ googleimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_googletitle }}" */
/*  title="{{ setting.so_sociallogin_googletitle }}" */
/*  />*/
/*  </a>*/
/*  {% endif %}*/
/*  {% endif %}*/
/*  {% if setting.so_sociallogin_fbstatus %}*/
/*  {% if setting.so_sociallogin_button == 'icon' %}*/
/*  <a href="{{ fblink }}" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>*/
/*  {% else %}*/
/*  <a href="{{ fblink }}" class="social-icon">*/
/*  <img class="img-responsive" src="{{ fbimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_fbtitle }}" */
/*  title="{{ setting.so_sociallogin_fbtitle }}"*/
/*  />*/
/*  </a>*/
/*  {% endif %}*/
/*  {% endif %}*/
/*  {% if setting.so_sociallogin_twitstatus %}*/
/*  {% if setting.so_sociallogin_button == 'icon' %}*/
/*  <a href="{{ twitlink }}" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>*/
/*  {% else %}*/
/*  <a class="social-icon" href="{{ twitlink }}">*/
/*  <img class="img-responsive" src="{{ twitimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_twittertitle }}" */
/*  title="{{ setting.so_sociallogin_twittertitle }}"*/
/*  />*/
/*  </a>*/
/*  {% endif %}*/
/*  {% endif %}*/
/*  {% if setting.so_sociallogin_linkstatus %}*/
/*  {% if setting.so_sociallogin_button == 'icon' %}*/
/*  <a href="{{ linkdinlink }}" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>*/
/*  {% else %}*/
/*  <a class="social-icon" href="{{ linkdinlink }}">*/
/*  <img class="img-responsive" src="{{ linkdinimage }}" */
/*  data-toggle="tooltip" alt="{{ setting.so_sociallogin_linkedintitle }}" */
/*  title="{{ setting.so_sociallogin_linkedintitle }}"*/
/*  />*/
/*  </a>*/
/*  {% endif %}*/
/*  {% endif %}*/
/*  </div>*/
/*  </div>*/
/*  {% endif %}*/
/*  <div class="secondary ft-link-p"><a class="action remind" href="{{ link_forgot_password }}"><span>{{ text_forgot_password }}</span></a></div>*/
/*  <div class="actions-toolbar">*/
/*  <div class="primary"><button type="submit" class="action login primary" name="send" id="send2"><span>{{ text_login }}</span></button></div>*/
/*  </div>*/
/*  </fieldset>*/
/*  </form>*/
/*  </div>*/
/*  </div> */
/*  <div class="col-reg login-customer">*/
/*  {{ text_colregister }}*/
/*  <a class="btn-reg-popup" title="{{ text_register }}" href="{{ register }}">{{ text_create_account }}</a>*/
/*  </div>*/
/*  <div style="clear:both;"></div>*/
/*  </div>*/
/*  </div>*/
/*  </div>*/
/*  <script type="text/javascript">*/
/*  jQuery(document).ready(function($) {*/
/*  var $window = $(window);*/
/*  function checkWidth() {*/
/*  var windowsize = $window.width();*/
/*  if (windowsize > 767) {*/
/*  $('a[href*="account/login"]').click(function (e) {*/
/*  e.preventDefault();*/
/*  $("#so_sociallogin").modal('show');*/
/*  });*/
/*  }*/
/*  }*/
/*  checkWidth();*/
/*  $(window).resize(checkWidth);*/
/*  });*/
/*  </script>*/
/*  {% endif %}*/
/*  */
/* */
