<?php

/* so-emarket/template/extension/module/so_listing_tabs/default/default_tabs.twig */
class __TwigTemplate_f7846767a4927337ce4cc7908a28c1a0e2f01b3218090912680bcdcf6e478fd0 extends Twig_Template
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
        echo "<div class=\"ltabs-tabs-wrap\">
\t<span class='ltabs-tab-selected'></span>
\t<span class=\"ltabs-tab-arrow\">▼</span>
\t<ul class=\"ltabs-tabs cf list-sub-cat font-title\">

\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "\t\t\t";
            if (((isset($context["type_source"]) ? $context["type_source"] : null) == "0")) {
                // line 8
                echo "\t\t\t\t<li class=\"ltabs-tab ";
                echo (($this->getAttribute($context["tab"], "sel", array(), "any", true, true)) ? ("  tab-sel tab-loaded") : (""));
                echo " ";
                echo ((($this->getAttribute($context["tab"], "category_id", array()) == "*")) ? (" tab-all") : (""));
                echo "\"
\t\t\t\t\tdata-category-id=\"";
                // line 9
                echo $this->getAttribute($context["tab"], "category_id", array());
                echo "\"
\t\t\t\t\tdata-active-content-l=\".items-category-";
                // line 10
                echo ((($this->getAttribute($context["tab"], "category_id", array()) == "*")) ? ("all") : ($this->getAttribute($context["tab"], "category_id", array())));
                echo "\"  
\t\t\t\t\t>
\t\t\t\t";
                // line 12
                if (((isset($context["tab_icon_display"]) ? $context["tab_icon_display"] : null) == "1")) {
                    // line 13
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["tab"], "category_id", array()) != "*")) {
                        // line 14
                        echo "\t\t\t\t\t\t<div class=\"ltabs-tab-img\">
\t\t\t\t\t\t\t<img src=\"";
                        // line 15
                        echo $this->getAttribute($context["tab"], "icon_image", array());
                        echo "\"
\t\t\t\t\t\t\t\t title=\"";
                        // line 16
                        echo $this->getAttribute($context["tab"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["tab"], "name", array());
                        echo "\"
\t\t\t\t\t\t\t\t style=\"width: ";
                        // line 17
                        echo (isset($context["imgcfgcat_width"]) ? $context["imgcfgcat_width"] : null);
                        echo "px; height:";
                        echo (isset($context["imgcfgcat_height"]) ? $context["imgcfgcat_height"] : null);
                        echo "px;background:#fff\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } else {
                        // line 20
                        echo "\t\t\t\t\t\t<div class=\"ltabs-tab-img\">
\t\t\t\t\t\t\t<img src=\"catalog/view/javascript/so_listing_tabs/images/icon-catall.png\"
\t\t\t\t\t\t\t\t title=\"";
                        // line 22
                        echo $this->getAttribute($context["tab"], "name", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["tab"], "name", array());
                        echo "\"
\t\t\t\t\t\t\t\t style=\"width: 30px; height:74px; background:#fff\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 26
                    echo "\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t<span class=\"ltabs-tab-label\">
\t\t\t\t\t\t";
                // line 28
                if (((twig_length_filter($this->env, $this->getAttribute($context["tab"], "name", array())) > (isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null)) && ((isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null) != "0"))) {
                    // line 29
                    echo "\t\t\t\t\t\t\t";
                    echo (twig_slice($this->env, strip_tags($this->getAttribute($context["tab"], "name", array())), 0, (isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null)) . "..");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 31
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["tab"], "name", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t<li class=\"ltabs-tab ";
                echo (($this->getAttribute($context["tab"], "sel", array(), "any", true, true)) ? ("  tab-sel tab-loaded") : (""));
                echo " ";
                echo ((($this->getAttribute($context["tab"], "category_id", array()) == "*")) ? (" tab-all") : (""));
                echo "\"
\t\t\t\t\tdata-category-id=\"";
                // line 37
                echo $this->getAttribute($context["tab"], "category_id", array());
                echo "\"
\t\t\t\t\tdata-active-content-l=\".items-category-";
                // line 38
                echo $this->getAttribute($context["tab"], "category_id", array());
                echo "\">
\t\t\t\t\t<span class=\"ltabs-tab-label\">
\t\t\t\t\t\t";
                // line 40
                if (((twig_length_filter($this->env, $this->getAttribute($context["tab"], "title", array())) > (isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null)) && ((isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null) != "0"))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t";
                    echo (twig_slice($this->env, strip_tags($this->getAttribute($context["tab"], "title", array())), 0, (isset($context["tab_max_characters"]) ? $context["tab_max_characters"] : null)) . "..");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 43
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["tab"], "title", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t";
            }
            // line 48
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/extension/module/so_listing_tabs/default/default_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 49,  148 => 48,  143 => 45,  137 => 43,  131 => 41,  129 => 40,  124 => 38,  120 => 37,  113 => 36,  108 => 33,  102 => 31,  96 => 29,  94 => 28,  91 => 27,  88 => 26,  79 => 22,  75 => 20,  67 => 17,  61 => 16,  57 => 15,  54 => 14,  51 => 13,  49 => 12,  44 => 10,  40 => 9,  33 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="ltabs-tabs-wrap">*/
/* 	<span class='ltabs-tab-selected'></span>*/
/* 	<span class="ltabs-tab-arrow">▼</span>*/
/* 	<ul class="ltabs-tabs cf list-sub-cat font-title">*/
/* */
/* 		{% for tab in list %}*/
/* 			{% if type_source == "0" %}*/
/* 				<li class="ltabs-tab {{ tab.sel is defined ? '  tab-sel tab-loaded' : '' }} {{ tab.category_id == '*' ? ' tab-all' : '' }}"*/
/* 					data-category-id="{{ tab.category_id }}"*/
/* 					data-active-content-l=".items-category-{{ tab.category_id == "*" ? 'all' : tab.category_id }}"  */
/* 					>*/
/* 				{% if tab_icon_display == '1' %}*/
/* 					{% if tab.category_id != "*" %}*/
/* 						<div class="ltabs-tab-img">*/
/* 							<img src="{{ tab.icon_image }}"*/
/* 								 title="{{ tab.name }}" alt="{{ tab.name }}"*/
/* 								 style="width: {{ imgcfgcat_width }}px; height:{{ imgcfgcat_height }}px;background:#fff"/>*/
/* 						</div>*/
/* 					{% else %}*/
/* 						<div class="ltabs-tab-img">*/
/* 							<img src="catalog/view/javascript/so_listing_tabs/images/icon-catall.png"*/
/* 								 title="{{ tab.name }}" alt="{{ tab.name }}"*/
/* 								 style="width: 30px; height:74px; background:#fff"/>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* 					<span class="ltabs-tab-label">*/
/* 						{% if tab.name|length > tab_max_characters and tab_max_characters != '0' %}*/
/* 							{{ tab.name|striptags|slice(0, tab_max_characters) ~ '..' }}*/
/* 						{% else %}*/
/* 							{{ tab.name }}*/
/* 						{% endif %}*/
/* 					</span>*/
/* 				</li>*/
/* 			{% else %}*/
/* 				<li class="ltabs-tab {{ tab.sel is defined ? '  tab-sel tab-loaded' : '' }} {{ tab.category_id == '*' ? ' tab-all' : '' }}"*/
/* 					data-category-id="{{ tab.category_id }}"*/
/* 					data-active-content-l=".items-category-{{ tab.category_id }}">*/
/* 					<span class="ltabs-tab-label">*/
/* 						{% if tab.title|length > tab_max_characters and tab_max_characters != '0' %}*/
/* 							{{ tab.title|striptags|slice(0, tab_max_characters) ~ '..' }}*/
/* 						{% else %}*/
/* 							{{ tab.title }}*/
/* 						{% endif %}*/
/* 					</span>*/
/* 				</li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* </div>*/
/* */
