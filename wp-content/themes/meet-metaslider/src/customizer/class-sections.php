<?php
namespace meet_metaslider_SuperbThemesCustomizer;

use meet_metaslider_SuperbThemesCustomizer\Utils\CustomizerItem;
use meet_metaslider_SuperbThemesCustomizer\Utils\CustomizerType;
use meet_metaslider_SuperbThemesCustomizer\CustomizerPanels;

include_once ABSPATH . 'wp-admin/includes/plugin.php';

class CustomizerSections
{
    const HEADER_METASLIDER = 'superbthemes_customizer_section_header_metaslider';
    const HEADER_DEFAULT = 'superbthemes_customizer_section_header_default';
    const NAVIGATION = 'superbthemes_customizer_section_navigation';
    const WIDGETS = 'superbthemes_customizer_section_widgets';
    const BLOG = 'superbthemes_customizer_section_blog';
    const SINGLE = 'superbthemes_customizer_section_single';
    const SIDEBAR = 'superbthemes_customizer_section_sidebar';
    const FOOTER = 'superbthemes_customizer_section_footer';
    const COPYRIGHT = 'superbthemes_customizer_section_copyright';
    const WOOCOMMERCE = 'superbthemes_customizer_section_woocommerce';

    public function __construct()
    {
        new CustomizerItem(self::NAVIGATION, array(
            "type" => CustomizerType::SECTION,
            "label" => __('Navigation', 'meet-metaslider'),
            "description" =>__('Customize the navigation.', 'meet-metaslider'),
            "parents" => array(CustomizerPanels::LAYOUT, CustomizerPanels::COLORS)
        ));
        if (is_plugin_active("ml-slider/ml-slider.php") || is_plugin_active("ml-slider-pro/ml-slider-pro.php")) {
            new CustomizerItem(self::HEADER_METASLIDER, array(
                "type" => CustomizerType::SECTION,
                "label" => __('MetaSlider Header', 'meet-metaslider'),
                "description" =>__('MetaSlider Header requires the MetaSlider plugin. Using the MetaSlider header will replace the default theme header.', 'meet-metaslider'),
                "parents" => array(CustomizerPanels::HEADER)
            ));
        }
        new CustomizerItem(self::HEADER_DEFAULT, array(
            "type" => CustomizerType::SECTION,
            "label" => __('Header', 'meet-metaslider'),
            "description" =>__('Customize the default theme header. These settings do not apply if you\'re using the MetaSlider header.', 'meet-metaslider'),
            "parents" => array(CustomizerPanels::HEADER, CustomizerPanels::COLORS)
        ));
        new CustomizerItem(self::WIDGETS, array(
            "type" => CustomizerType::SECTION,
            "label" => __('Header Widgets', 'meet-metaslider'),
            "description" =>__('Customize the header widgets..', 'meet-metaslider'),
            "parents" => array(CustomizerPanels::LAYOUT)
        ));
        new CustomizerItem(self::WOOCOMMERCE, array(
            "type" => CustomizerType::SECTION,
            "label" => __('Woocommerce', 'meet-metaslider'),
            "description" =>__('Customize WooCommerce.', 'meet-metaslider'),
            "parents" => array(CustomizerPanels::COLORS)
        ));
        new CustomizerItem(self::BLOG, array(
            "type" => CustomizerType::SECTION,
            "label" => __('Blog', 'meet-metaslider'),
            "description" =>__('Customize the blog feed.', 'meet-metaslider'),
            "parents" => array(CustomizerPanels::LAYOUT)
        ));
        new CustomizerItem(self::SINGLE, array(
            "type" => CustomizerType::SECTION,
            "label" => __('Posts / Pages', 'meet-metaslider'),
            "description" =>__('Customize Posts and Pages.', 'meet-metaslider'),
            "parents" => array(CustomizerPanels::LAYOUT)
        ));
        new CustomizerItem(self::SIDEBAR, array(
            "type" => CustomizerType::SECTION,
            "label" => __('Sidebar', 'meet-metaslider'),
            "description" =>__('Customize the sidebar.', 'meet-metaslider'),
            "parents" => array(CustomizerPanels::LAYOUT)
        ));
        new CustomizerItem(self::FOOTER, array(
            "type" => CustomizerType::SECTION,
            "label" => __('Footer', 'meet-metaslider'),
            "description" =>__('Footer description here', 'meet-metaslider'),
            "parents" => array(CustomizerPanels::LAYOUT)
        ));
        new CustomizerItem(self::COPYRIGHT, array(
            "type" => CustomizerType::SECTION,
            "label" =>  __('Copyright', 'meet-metaslider'),
            "description" => __('Customiez the copyright text in the footer.', 'meet-metaslider'),
            "parents" => array("")
        ));
    }
}
