<?php

/* so-emarket/template/extension/module/so_newletter_custom_popup/default.twig */
class __TwigTemplate_6956628574a3c4aa2852af309b37534507b831b3de53ab3a93bc64efb908f25e extends Twig_Template
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
        if (((isset($context["layout"]) ? $context["layout"] : null) == "layout_default")) {
            // line 2
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout_default.twig"), "so-emarket/template/extension/module/so_newletter_custom_popup/default.twig", 2)->display($context);
        } elseif ((        // line 3
(isset($context["layout"]) ? $context["layout"] : null) == "layout_popup")) {
            // line 4
            echo "\t";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig"), "so-emarket/template/extension/module/so_newletter_custom_popup/default.twig", 4)->display($context);
        } else {
            // line 6
            echo "\t ";
            $this->loadTemplate(((isset($context["theme_directory"]) ? $context["theme_directory"] : null) . "/template/extension/module/so_newletter_custom_popup/default_layout15.twig"), "so-emarket/template/extension/module/so_newletter_custom_popup/default.twig", 6)->display($context);
            echo "\t
";
        }
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-emarket/template/extension/module/so_newletter_custom_popup/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if layout == "layout_default" %}*/
/* 	{% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout_default.twig'  %}*/
/* {% elseif layout == "layout_popup" %}*/
/* 	{% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig' %}*/
/* {% else %}*/
/* 	 {% include theme_directory~'/template/extension/module/so_newletter_custom_popup/default_layout15.twig' %}	*/
/* {% endif %}*/
/* */
/* */
