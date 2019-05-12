<?php

/* so-emarket/template/extension/module/so_instagram_gallery/default.twig */
class __TwigTemplate_d9770631005c10b51065c8ba6f6b035abb0977e71f83f06f1917fa6781a06106 extends Twig_Template
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
        echo "\t
";
        // line 2
        $context["class_instagram"] = ((((((((("instagram00-" . (isset($context["nb_column0"]) ? $context["nb_column0"] : null)) . " instagram01-") . (isset($context["nb_column1"]) ? $context["nb_column1"] : null)) . " instagram02-") . (isset($context["nb_column2"]) ? $context["nb_column2"] : null)) . " instagram03-") . (isset($context["nb_column3"]) ? $context["nb_column3"] : null)) . " instagram04-") . (isset($context["nb_column4"]) ? $context["nb_column4"] : null));
        // line 3
        $context["cls_btn_page"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("button-type1") : ("button-type2"));
        // line 4
        $context["btn_type"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("button-type1") : ("button-type2"));
        // line 5
        $context["btn_prev"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#171") : ("&#139"));
        // line 6
        $context["btn_next"] = ((((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) ? ("&#187") : ("&#155"));
        // line 7
        $context["nb_rows"] = (isset($context["row"]) ? $context["row"] : null);
        // line 8
        $context["navs"] = ((((isset($context["navs"]) ? $context["navs"] : null) == 0)) ? ("false") : ("true"));
        // line 9
        $context["dots"] = ((((isset($context["dots"]) ? $context["dots"] : null) == 0)) ? ("false") : ("true"));
        // line 10
        echo "
\t<div class=\"module box-footer ";
        // line 11
        echo (isset($context["direction_class"]) ? $context["direction_class"] : null);
        echo " ";
        echo (isset($context["class_suffix"]) ? $context["class_suffix"] : null);
        echo " \">
\t\t";
        // line 12
        if ((isset($context["disp_title_module"]) ? $context["disp_title_module"] : null)) {
            echo " 
\t\t\t<h4 class=\"modtitle\">";
            // line 13
            echo (isset($context["head_name"]) ? $context["head_name"] : null);
            echo "</h4>
\t\t";
        }
        // line 14
        echo " 

\t\t";
        // line 16
        if (((isset($context["pre_text"]) ? $context["pre_text"] : null) != " ")) {
            // line 17
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t";
            // line 18
            echo (isset($context["pre_text"]) ? $context["pre_text"] : null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t\t
\t\t<div class=\"modcontent\">
\t\t\t
\t\t\t<div class=\"so-instagram-gallery ";
        // line 24
        echo (isset($context["cls_btn_page"]) ? $context["cls_btn_page"] : null);
        echo " ";
        echo (isset($context["count"]) ? $context["count"] : null);
        echo "\" id=\"";
        echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
        echo "\">
\t\t\t\t";
        // line 25
        if ((array_key_exists("count", $context) && twig_length_filter($this->env, (isset($context["count"]) ? $context["count"] : null)))) {
            echo " 
\t\t\t\t\t";
            // line 26
            if (((isset($context["type_show"]) ? $context["type_show"] : null) == "slider")) {
                echo " 
\t\t\t\t\t<div class=\"instagram-items-inner owl2-carousel\">
\t\t\t\t\t";
            } else {
                // line 28
                echo "   
\t\t\t\t\t<div class=\"instagram-items-inner ";
                // line 29
                echo (isset($context["class_instagram"]) ? $context["class_instagram"] : null);
                echo "\">
\t\t\t\t\t";
            }
            // line 30
            echo "  

\t\t\t\t\t";
            // line 32
            $context["j"] = 0;
            // line 33
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["count"]) ? $context["count"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 34
                echo "\t\t\t\t\t\t";
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                echo " 

\t\t\t\t\t\t";
                // line 36
                if ((((isset($context["type_show"]) ? $context["type_show"] : null) == "slider") && ((((isset($context["j"]) ? $context["j"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 1) || ((isset($context["nb_rows"]) ? $context["nb_rows"] : null) == 1)))) {
                    echo " 
\t\t\t\t\t\t<div class=\"instagram-item\">
\t\t\t\t\t\t";
                }
                // line 39
                echo "
\t\t\t\t\t\t";
                // line 40
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "simple")) {
                    echo " 
\t\t\t\t\t\t\t<div class=\"instagram-item ";
                    // line 41
                    echo $context["i"];
                    echo " ";
                    if (($context["i"] == 0)) {
                        echo " first-item ";
                    }
                    echo "\">
\t\t\t\t\t\t";
                }
                // line 42
                echo " 
\t\t\t\t\t\t\t<div class=\"instagram_users\">
\t\t\t\t\t\t\t\t<div class=\"img_users tr\">
\t\t\t\t\t\t\t\t\t<a title=\"";
                // line 45
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["json_output"]) ? $context["json_output"] : null), "data", array()), $context["i"], array(), "array"), "user", array()), "full_name", array());
                echo "\" data-href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["json_output"]) ? $context["json_output"] : null), "data", array()), $context["i"], array(), "array"), "link", array());
                echo "\" class=\"instagram_gallery_image gallery_image_";
                echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
                echo "\" rel=\"\" href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["json_output"]) ? $context["json_output"] : null), "data", array()), $context["i"], array(), "array"), "images", array()), "standard_resolution", array()), "url", array());
                echo "?taken-by=";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["json_output"]) ? $context["json_output"] : null), "data", array()), $context["i"], array(), "array"), "user", array()), "username", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                // line 46
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["json_output"]) ? $context["json_output"] : null), "data", array()), $context["i"], array(), "array"), "images", array()), "standard_resolution", array()), "url", array());
                echo "\" title=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["json_output"]) ? $context["json_output"] : null), "data", array()), $context["i"], array(), "array"), "user", array()), "full_name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["json_output"]) ? $context["json_output"] : null), "data", array()), $context["i"], array(), "array"), "user", array()), "full_name", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 50
                if ((((isset($context["type_show"]) ? $context["type_show"] : null) == "slider") && ((((isset($context["j"]) ? $context["j"] : null) % (isset($context["nb_rows"]) ? $context["nb_rows"] : null)) == 0) || ((isset($context["j"]) ? $context["j"] : null) == (isset($context["count"]) ? $context["count"] : null))))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 53
                echo "
\t\t\t\t\t\t";
                // line 54
                if (((isset($context["type_show"]) ? $context["type_show"] : null) == "simple")) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 56
                echo " 
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo " 
\t\t\t\t\t</div> <!--/.instagram-items-inner-->
\t\t\t\t";
        } else {
            // line 59
            echo " 
\t\t\t\t\t";
            // line 60
            echo $this->getAttribute((isset($context["objlang"]) ? $context["objlang"] : null), "get", array(0 => "text_noproduct"), "method");
            echo "
\t\t\t\t";
        }
        // line 61
        echo " 
\t\t\t</div>
\t\t</div> <!-- /.modcontent-->

\t\t";
        // line 65
        if (((isset($context["post_text"]) ? $context["post_text"] : null) != " ")) {
            // line 66
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t";
            // line 67
            echo (isset($context["post_text"]) ? $context["post_text"] : null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 70
        echo "\t\t\t
\t</div>

\t";
        // line 73
        if (((isset($context["type_show"]) ? $context["type_show"] : null) == "slider")) {
            // line 74
            echo "\t<script type=\"text/javascript\">

\t\t//<![CDATA[
\t\tjQuery(document).ready(function (\$) {
\t\t\t;(function (element) {
\t\t\t\tvar \$element = \$(element),
\t\t\t\t\$extraslider = \$(\".instagram-items-inner\", \$element),
\t\t\t\t_delay = ";
            // line 81
            echo (isset($context["delay"]) ? $context["delay"] : null);
            echo " ,
\t\t\t\t_duration = ";
            // line 82
            echo (isset($context["duration"]) ? $context["duration"] : null);
            echo " ,
\t\t\t\t_effect = '";
            // line 83
            echo (isset($context["effect"]) ? $context["effect"] : null);
            echo " ';

\t\t\t\tthis_item = \$extraslider.find('div.media');
\t\t\t\tthis_item.find('div.item:eq(0)').addClass('head-button');
\t\t\t\tthis_item.find('div.item:eq(0) .media-heading').addClass('head-item');
\t\t\t\tthis_item.find('div.item:eq(0) .media-left').addClass('so-block');
\t\t\t\tthis_item.find('div.item:eq(0) .media-content').addClass('so-block');
\t\t\t\t\$extraslider.on(\"initialized.owl.carousel2\", function () {
\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t}

\t\t\t\t\t";
            // line 100
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t}
\t\t\t\t\t";
            }
            // line 107
            echo "
\t\t\t\t\t";
            // line 108
            if (((isset($context["button_page"]) ? $context["button_page"] : null) == "top")) {
                echo " 
\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t";
            } else {
                // line 111
                echo "  
\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t});

\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\trtl: ";
            // line 119
            echo (isset($context["direction"]) ? $context["direction"] : null);
            echo ",
\t\t\t\t\tmargin: ";
            // line 120
            echo (isset($context["margin"]) ? $context["margin"] : null);
            echo ",
\t\t\t\t\tslideBy: ";
            // line 121
            echo (isset($context["slideBy"]) ? $context["slideBy"] : null);
            echo ",
\t\t\t\t\tautoplay: ";
            // line 122
            echo (isset($context["autoplay"]) ? $context["autoplay"] : null);
            echo ",
\t\t\t\t\tautoplayHoverPause: ";
            // line 123
            echo (isset($context["pausehover"]) ? $context["pausehover"] : null);
            echo ",
\t\t\t\t\tautoplayTimeout: ";
            // line 124
            echo (isset($context["autoplay_timeout"]) ? $context["autoplay_timeout"] : null);
            echo " ,
\t\t\t\t\tautoplaySpeed: ";
            // line 125
            echo (isset($context["autoplaySpeed"]) ? $context["autoplaySpeed"] : null);
            echo " ,

\t\t\t\t\tstartPosition: ";
            // line 127
            echo (isset($context["startPosition"]) ? $context["startPosition"] : null);
            echo " ,
\t\t\t\t\tmouseDrag: ";
            // line 128
            echo (isset($context["mouseDrag"]) ? $context["mouseDrag"] : null);
            echo ",
\t\t\t\t\ttouchDrag: ";
            // line 129
            echo (isset($context["touchDrag"]) ? $context["touchDrag"] : null);
            echo " ,
\t\t\t\t\tautoWidth: false,
\t\t\t\t\tresponsive: {
\t\t\t\t\t\t0: \t{ items: ";
            // line 132
            echo (isset($context["nb_column4"]) ? $context["nb_column4"] : null);
            echo " } ,
\t\t\t\t\t\t480: { items: ";
            // line 133
            echo (isset($context["nb_column3"]) ? $context["nb_column3"] : null);
            echo " },
\t\t\t\t\t\t768: { items: ";
            // line 134
            echo (isset($context["nb_column2"]) ? $context["nb_column2"] : null);
            echo " },
\t\t\t\t\t\t992: { items: ";
            // line 135
            echo (isset($context["nb_column1"]) ? $context["nb_column1"] : null);
            echo " },
\t\t\t\t\t\t1200: {items: ";
            // line 136
            echo (isset($context["nb_column0"]) ? $context["nb_column0"] : null);
            echo "}
\t\t\t\t\t},
\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\tdots: ";
            // line 140
            echo (isset($context["dots"]) ? $context["dots"] : null);
            echo " ,
\t\t\t\t\tdotsSpeed:";
            // line 141
            echo (isset($context["dotsSpeed"]) ? $context["dotsSpeed"] : null);
            echo " ,
\t\t\t\t\tnav: ";
            // line 142
            echo (isset($context["navs"]) ? $context["navs"] : null);
            echo " ,
\t\t\t\t\tloop: ";
            // line 143
            echo (isset($context["loop"]) ? $context["loop"] : null);
            echo " ,
\t\t\t\t\tnavSpeed: ";
            // line 144
            echo (isset($context["navSpeed"]) ? $context["navSpeed"] : null);
            echo " ,
\t\t\t\t\tnavText: [\"";
            // line 145
            echo (isset($context["btn_prev"]) ? $context["btn_prev"] : null);
            echo " \", \"";
            echo (isset($context["btn_next"]) ? $context["btn_next"] : null);
            echo " \"],
\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t});

\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t";
            // line 151
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t}
\t\t";
            }
            // line 157
            echo " 

\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t_UngetAnimate(\$item_active);
\t\t\t_getAnimate(\$item_active);
\t\t});

\t\$extraslider.on(\"translated.owl.carousel2\", function (e) {

\t\t";
            // line 166
            if (((isset($context["dots"]) ? $context["dots"] : null) == "true")) {
                echo " 
\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t}
\t\t";
            }
            // line 172
            echo " 

\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\tvar \$item = \$(\".owl2-item\", \$element);

\t\t_UngetAnimate(\$item);

\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t_getAnimate(\$item_active);
\t\t} else {
\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t}
\t});

\tfunction _getAnimate(\$el) {
\t\tif (_effect == \"none\") return;
\t\t\t\t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t\$el.each(function (i) {
\t\t\t\t\tvar \$_el = \$(this);
\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t}).animate({
\t\t\t\t\t\topacity: 1
\t\t\t\t\t});

\t\t\t\t\tif (i == \$el.size() - 1) {
\t\t\t\t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\tfunction _UngetAnimate(\$el) {
\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\"animation\": \"\",
\t\t\t\t\t\t\"-webkit-animation\": \"\",
\t\t\t\t\t\t\"-moz-animation\": \"\",
\t\t\t\t\t\t\"-o-animation\": \"\",
\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}

\t\t})(\"#";
            // line 224
            echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
            echo "\");
\t});
\t\t//]]>
\t</script>
\t";
        }
        // line 229
        echo "
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t\t\$(\".gallery_image_";
        // line 232
        echo (isset($context["moduleid"]) ? $context["moduleid"] : null);
        echo "\").attr('rel', 'gallery').fancybox({
\t\t        prevMethod : false,
\t\t\t\thelpers: {
\t\t\t\t\tthumbs\t: {
\t\t\t\t\t\twidth\t: 50,
\t\t\t\t\t\theight\t: 50,
\t\t\t\t\t},

\t\t\t\t\t";
        // line 240
        if ((isset($context["show_fullname"]) ? $context["show_fullname"] : null)) {
            // line 241
            echo "\t\t\t\t\t\ttitle : {type : 'over'},
\t\t            ";
        } else {
            // line 242
            echo " 
\t\t            \ttitle : null
\t\t            ";
        }
        // line 245
        echo "\t\t\t\t},
\t\t\t});
\t\t});
\t</script>";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/extension/module/so_instagram_gallery/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 245,  509 => 242,  505 => 241,  503 => 240,  492 => 232,  487 => 229,  479 => 224,  425 => 172,  415 => 166,  404 => 157,  394 => 151,  383 => 145,  379 => 144,  375 => 143,  371 => 142,  367 => 141,  363 => 140,  356 => 136,  352 => 135,  348 => 134,  344 => 133,  340 => 132,  334 => 129,  330 => 128,  326 => 127,  321 => 125,  317 => 124,  313 => 123,  309 => 122,  305 => 121,  301 => 120,  297 => 119,  291 => 115,  285 => 111,  278 => 108,  275 => 107,  265 => 100,  245 => 83,  241 => 82,  237 => 81,  228 => 74,  226 => 73,  221 => 70,  215 => 67,  212 => 66,  210 => 65,  204 => 61,  199 => 60,  196 => 59,  191 => 57,  184 => 56,  178 => 54,  175 => 53,  169 => 50,  158 => 46,  146 => 45,  141 => 42,  132 => 41,  128 => 40,  125 => 39,  119 => 36,  113 => 34,  108 => 33,  106 => 32,  102 => 30,  97 => 29,  94 => 28,  88 => 26,  84 => 25,  76 => 24,  71 => 21,  65 => 18,  62 => 17,  60 => 16,  56 => 14,  51 => 13,  47 => 12,  41 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* 	*/
/* {% set class_instagram = 'instagram00-' ~ nb_column0 ~ ' instagram01-' ~ nb_column1 ~ ' instagram02-' ~ nb_column2 ~ ' instagram03-' ~ nb_column3 ~ ' instagram04-' ~ nb_column4 %}*/
/* {% set cls_btn_page = button_page  ==  'top' ? 'button-type1':'button-type2' %}*/
/* {% set btn_type = button_page  ==  'top' ? 'button-type1':'button-type2' %}*/
/* {% set btn_prev = button_page  ==  'top' ? '&#171':'&#139' %}*/
/* {% set btn_next = button_page  ==  'top' ? '&#187':'&#155' %}*/
/* {% set nb_rows = row %}*/
/* {% set navs = navs == 0 ? 'false' : 'true' %}*/
/* {% set dots = dots == 0 ? 'false' : 'true' %}*/
/* */
/* 	<div class="module box-footer {{ direction_class}} {{ class_suffix }} ">*/
/* 		{% if disp_title_module %} */
/* 			<h4 class="modtitle">{{ head_name }}</h4>*/
/* 		{% endif %} */
/* */
/* 		{% if pre_text !=' ' %}*/
/* 			<div class="form-group">*/
/* 				{{ pre_text }}*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		*/
/* 		<div class="modcontent">*/
/* 			*/
/* 			<div class="so-instagram-gallery {{ cls_btn_page }} {{ count }}" id="{{ moduleid  }}">*/
/* 				{% if count is defined and count|length %} */
/* 					{% if type_show  ==  'slider' %} */
/* 					<div class="instagram-items-inner owl2-carousel">*/
/* 					{% else %}   */
/* 					<div class="instagram-items-inner {{ class_instagram }}">*/
/* 					{% endif %}  */
/* */
/* 					{% set j = 0 %}*/
/* 					{% for i in 0..count %}*/
/* 						{% set j = j + 1 %} */
/* */
/* 						{% if type_show  ==  'slider'  and  (j % nb_rows  ==  1  or  nb_rows  ==  1) %} */
/* 						<div class="instagram-item">*/
/* 						{% endif %}*/
/* */
/* 						{% if type_show  ==  'simple'%} */
/* 							<div class="instagram-item {{ i }} {% if i  ==  0 %} first-item {% endif %}">*/
/* 						{% endif %} */
/* 							<div class="instagram_users">*/
/* 								<div class="img_users tr">*/
/* 									<a title="{{ json_output.data[i].user.full_name }}" data-href="{{ json_output.data[i].link}}" class="instagram_gallery_image gallery_image_{{ moduleid  }}" rel="" href="{{ json_output.data[i].images.standard_resolution.url }}?taken-by={{ json_output.data[i].user.username }}">*/
/* 										<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ json_output.data[i].images.standard_resolution.url }}" title="{{ json_output.data[i].user.full_name  }}" alt="{{ json_output.data[i].user.full_name  }}" />*/
/* 									</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						{% if type_show  ==  'slider'  and  (j % nb_rows  ==  0  or  j  ==  count) %} */
/* 						</div>*/
/* 						{% endif %}*/
/* */
/* 						{% if type_show  ==  'simple'%} */
/* 						</div>*/
/* 						{% endif %} */
/* 					{% endfor %} */
/* 					</div> <!--/.instagram-items-inner-->*/
/* 				{% else %} */
/* 					{{ objlang.get('text_noproduct') }}*/
/* 				{% endif %} */
/* 			</div>*/
/* 		</div> <!-- /.modcontent-->*/
/* */
/* 		{% if post_text !=' ' %}*/
/* 			<div class="form-group">*/
/* 				{{ post_text }}*/
/* 			</div>*/
/* 		{% endif %}*/
/* 			*/
/* 	</div>*/
/* */
/* 	{% if type_show  ==  "slider"%}*/
/* 	<script type="text/javascript">*/
/* */
/* 		//<![CDATA[*/
/* 		jQuery(document).ready(function ($) {*/
/* 			;(function (element) {*/
/* 				var $element = $(element),*/
/* 				$extraslider = $(".instagram-items-inner", $element),*/
/* 				_delay = {{ delay }} ,*/
/* 				_duration = {{ duration }} ,*/
/* 				_effect = '{{ effect }} ';*/
/* */
/* 				this_item = $extraslider.find('div.media');*/
/* 				this_item.find('div.item:eq(0)').addClass('head-button');*/
/* 				this_item.find('div.item:eq(0) .media-heading').addClass('head-item');*/
/* 				this_item.find('div.item:eq(0) .media-left').addClass('so-block');*/
/* 				this_item.find('div.item:eq(0) .media-content').addClass('so-block');*/
/* 				$extraslider.on("initialized.owl.carousel2", function () {*/
/* 					var $item_active = $(".owl2-item.active", $element);*/
/* 					if ($item_active.length > 1 && _effect != "none") {*/
/* 						_getAnimate($item_active);*/
/* 					}*/
/* 					else {*/
/* 						var $item = $(".owl2-item", $element);*/
/* 						$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 					}*/
/* */
/* 					{% if dots  ==  "true" %} */
/* 						if ($(".owl2-dot", $element).length < 2) {*/
/* 							$(".owl2-prev", $element).css("display", "none");*/
/* 							$(".owl2-next", $element).css("display", "none");*/
/* 							$(".owl2-dot", $element).css("display", "none");*/
/* 						}*/
/* 					{% endif %}*/
/* */
/* 					{% if button_page  ==  "top"%} */
/* 						$(".owl2-controls", $element).insertBefore($extraslider);*/
/* 						$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));*/
/* 					{% else %}  */
/* 							$(".owl2-nav", $element).insertBefore($extraslider);*/
/* 							$(".owl2-controls", $element).insertAfter($extraslider);*/
/* 					{% endif %}*/
/* */
/* 			});*/
/* */
/* 				$extraslider.owlCarousel2({*/
/* 					rtl: {{ direction}},*/
/* 					margin: {{ margin }},*/
/* 					slideBy: {{ slideBy }},*/
/* 					autoplay: {{ autoplay }},*/
/* 					autoplayHoverPause: {{ pausehover  }},*/
/* 					autoplayTimeout: {{ autoplay_timeout }} ,*/
/* 					autoplaySpeed: {{ autoplaySpeed }} ,*/
/* */
/* 					startPosition: {{ startPosition }} ,*/
/* 					mouseDrag: {{ mouseDrag }},*/
/* 					touchDrag: {{ touchDrag }} ,*/
/* 					autoWidth: false,*/
/* 					responsive: {*/
/* 						0: 	{ items: {{ nb_column4 }} } ,*/
/* 						480: { items: {{ nb_column3 }} },*/
/* 						768: { items: {{ nb_column2 }} },*/
/* 						992: { items: {{ nb_column1 }} },*/
/* 						1200: {items: {{ nb_column0 }}}*/
/* 					},*/
/* 					dotClass: "owl2-dot",*/
/* 					dotsClass: "owl2-dots",*/
/* 					dots: {{ dots }} ,*/
/* 					dotsSpeed:{{ dotsSpeed }} ,*/
/* 					nav: {{ navs }} ,*/
/* 					loop: {{ loop }} ,*/
/* 					navSpeed: {{ navSpeed }} ,*/
/* 					navText: ["{{ btn_prev }} ", "{{ btn_next }} "],*/
/* 					navClass: ["owl2-prev", "owl2-next"]*/
/* */
/* 				});*/
/* */
/* 	$extraslider.on("translate.owl.carousel2", function (e) {*/
/* 		{% if dots  ==  "true" %} */
/* 			if ($(".owl2-dot", $element).length < 2) {*/
/* 				$(".owl2-prev", $element).css("display", "none");*/
/* 				$(".owl2-next", $element).css("display", "none");*/
/* 				$(".owl2-dot", $element).css("display", "none");*/
/* 			}*/
/* 		{% endif %} */
/* */
/* 		var $item_active = $(".owl2-item.active", $element);*/
/* 			_UngetAnimate($item_active);*/
/* 			_getAnimate($item_active);*/
/* 		});*/
/* */
/* 	$extraslider.on("translated.owl.carousel2", function (e) {*/
/* */
/* 		{% if dots  ==  "true" %} */
/* 			if ($(".owl2-dot", $element).length < 2) {*/
/* 				$(".owl2-prev", $element).css("display", "none");*/
/* 				$(".owl2-next", $element).css("display", "none");*/
/* 				$(".owl2-dot", $element).css("display", "none");*/
/* 			}*/
/* 		{% endif %} */
/* */
/* 		var $item_active = $(".owl2-item.active", $element);*/
/* 		var $item = $(".owl2-item", $element);*/
/* */
/* 		_UngetAnimate($item);*/
/* */
/* 		if ($item_active.length > 1 && _effect != "none") {*/
/* 			_getAnimate($item_active);*/
/* 		} else {*/
/* 			$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});*/
/* 		}*/
/* 	});*/
/* */
/* 	function _getAnimate($el) {*/
/* 		if (_effect == "none") return;*/
/* 				//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;*/
/* 				$extraslider.removeClass("extra-animate");*/
/* 				$el.each(function (i) {*/
/* 					var $_el = $(this);*/
/* 					$(this).css({*/
/* 						"-webkit-animation": _effect + " " + _duration + "ms ease both",*/
/* 						"-moz-animation": _effect + " " + _duration + "ms ease both",*/
/* 						"-o-animation": _effect + " " + _duration + "ms ease both",*/
/* 						"animation": _effect + " " + _duration + "ms ease both",*/
/* 						"-webkit-animation-delay": +i * _delay + "ms",*/
/* 						"-moz-animation-delay": +i * _delay + "ms",*/
/* 						"-o-animation-delay": +i * _delay + "ms",*/
/* 						"animation-delay": +i * _delay + "ms",*/
/* 						"opacity": 1*/
/* 					}).animate({*/
/* 						opacity: 1*/
/* 					});*/
/* */
/* 					if (i == $el.size() - 1) {*/
/* 						$extraslider.addClass("extra-animate");*/
/* 					}*/
/* 				});*/
/* 			}*/
/* */
/* 			function _UngetAnimate($el) {*/
/* 				$el.each(function (i) {*/
/* 					$(this).css({*/
/* 						"animation": "",*/
/* 						"-webkit-animation": "",*/
/* 						"-moz-animation": "",*/
/* 						"-o-animation": "",*/
/* 						"opacity": 1*/
/* 					});*/
/* 				});*/
/* 			}*/
/* */
/* 		})("#{{ moduleid  }}");*/
/* 	});*/
/* 		//]]>*/
/* 	</script>*/
/* 	{% endif %}*/
/* */
/* 	<script type="text/javascript">*/
/* 		$(document).ready(function(){*/
/* 			$(".gallery_image_{{ moduleid }}").attr('rel', 'gallery').fancybox({*/
/* 		        prevMethod : false,*/
/* 				helpers: {*/
/* 					thumbs	: {*/
/* 						width	: 50,*/
/* 						height	: 50,*/
/* 					},*/
/* */
/* 					{% if show_fullname %}*/
/* 						title : {type : 'over'},*/
/* 		            {% else %} */
/* 		            	title : null*/
/* 		            {% endif %}*/
/* 				},*/
/* 			});*/
/* 		});*/
/* 	</script>*/
