<?php
namespace meet_metaslider_SuperbThemesCustomizer;

use meet_metaslider_SuperbThemesCustomizer\Utils\CustomizerItem;
use meet_metaslider_SuperbThemesCustomizer\Utils\CustomizerType;

class CustomizerPanels
{
    const LAYOUT = 'superbthemes_customizer_panel_LAYOUT';
    const COLORS = 'superbthemes_customizer_panel_COLORS';
    const WOOCOMMERCE = 'superbthemes_customizer_panel_WOOCOMMERCE';
    const NAVIGATION = 'superbthemes_customizer_panel_NAVIGATION';
    const HEADER = 'superbthemes_customizer_panel_HEADER';

    const SHOULD_REFOCUS_TO_PANEL = array();

    public function __construct()
    {
        new CustomizerItem(self::LAYOUT, array(
            "type" => CustomizerType::PANEL,
            "label" =>  __('Layout', 'meet-metaslider'),
            "description" => __('Layout Customization', 'meet-metaslider')
        ));
        new CustomizerItem(self::COLORS, array(
            "type" => CustomizerType::PANEL,
            "label" =>  __('Colors', 'meet-metaslider'),
            "description" => __('Colors Customization', 'meet-metaslider')
        ));
        new CustomizerItem(self::WOOCOMMERCE, array(
            "type" => CustomizerType::PANEL,
            "label" =>  __('WooCommerce', 'meet-metaslider'),
            "description" => __('WooCommerce Customization', 'meet-metaslider')
        ));
        new CustomizerItem(self::NAVIGATION, array(
            "type" => CustomizerType::PANEL,
            "label" =>  __('Navigation', 'meet-metaslider'),
            "description" => __('Navigation Customization', 'meet-metaslider')
        ));
        new CustomizerItem(self::HEADER, array(
            "type" => CustomizerType::PANEL,
            "label" =>  __('Header', 'meet-metaslider'),
            "description" => __('Header Customization', 'meet-metaslider')
        ));
    }
}
