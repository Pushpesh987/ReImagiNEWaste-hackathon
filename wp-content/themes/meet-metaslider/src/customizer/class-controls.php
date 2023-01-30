<?php
namespace meet_metaslider_SuperbThemesCustomizer;

use meet_metaslider_SuperbThemesCustomizer\Utils\CustomizerItem;
use meet_metaslider_SuperbThemesCustomizer\Utils\CustomizerType;
use meet_metaslider_SuperbThemesCustomizer\CustomizerPanels;
use meet_metaslider_SuperbThemesCustomizer\CustomizerSections;

class CustomizerControls
{
    const UPPERWIDGETS_FRONTPAGE_ONLY = 'upperwidgets_frontpage_only';
    const UPPERWIDGETS_BG_COLOR = 'upperwidgets_bg_color';
    const UPPERWIDGETS_TITLE_COLOR = 'upperwidgets_title_color';
    const UPPERWIDGETS_TEXT_COLOR = 'upperwidgets_text_color';
    const UPPERWIDGETS_LINK_COLOR = 'upperwidgets_link_color';
    const UPPERWIDGETS_BORDER_COLOR = 'upperwidgets_border_color';

    const HEADER_METASLIDER_SHORTCODE = 'header_metaslider_overwrite';
    const HEADER_METASLIDER_ONLY_FRONTPAGE = 'only_show_header_frontpage_metaslider';
    const HEADER_METASLIDER_THEME_STYLE = 'metaslider_theme_style';


    const HEADER_ONLY_FRONTPAGE = 'only_show_header_frontpage';
    const HEADER_TITLE = 'header_img_text';
    const HEADER_TAGLINE = 'header_img_text_tagline';
    const HEADER_TAGLINE_HIDE_MOBILE = 'hide_tagline_mobile';
    const HEADER_BUTTON_TEXT = 'header_img_button_text';
    const HEADER_BUTTON_LINK = 'header_img_button_link';
    const HEADER_BUTTON_HIDE_MOBILE = 'hide_button_mobile';
    const HEADER_COLOR_TEXT = 'header_img_textcolor';
    const HEADER_COLOR_BUTTON_BG = 'header_img_button_bg_color';
    const HEADER_COLOR_BUTTON_TEXT = 'header_img_button_text_color';

    const SITE_IDENTITY_HIDE_TAGLINE = 'navigation_hide_tagline';

    const NAVIGATION_COLOR_BACKGROUND = 'navigation_background_color';
    const NAVIGATION_COLOR_TEXT = 'navigation_text_color';
    const NAVIGATION_COLOR_SHOPPING_CART = 'navigation_cart_color';
    const NAVIGATION_COLOR_BORDERS = 'navigation_border_color';
    const NAVIGATION_HIDE_CART = 'navigation_hide_cart';

    const SIDEBAR_WOOCOMMERCE_HIDE = 'hide_wc_sidebar';
    const SIDEBAR_COLOR_HEADLINE = 'sidebar_headline_color';
    const SIDEBAR_COLOR_LINK = 'sidebar_link_color';
    const SIDEBAR_COLOR_TEXT = 'sidebar_text_color';
    const SIDEBAR_COLOR_BORDER = 'sidebar_border_color';
    const SIDEBAR_COLOR_BG = 'sidebar_bgc';

    const FOOTER_GOTOTOP_HIDE = 'footer_go_to_top_hide';
    const FOOTER_COLOR_HEADLINE = 'footer_headline_color';
    const FOOTER_COLOR_TEXT = 'footer_text_color';
    const FOOTER_COLOR_LINK = 'footer_link_color';
    const FOOTER_COLOR_BORDER = 'footer_border_color';
    const FOOTER_COLOR_BACKGROUND = 'footer_background_color';
    const FOOTER_COLOR_GOTOTOP = 'footer_go_to_top';
    const FOOTER_COLOR_GOTOTOP_HOVER = 'footer_go_to_top_hover';

    const COPYRIGHT_TEXT = 'footer_copyright_text';

    const BLOGFEED_SHOW_FULL_POSTS = 'show_except_or_full';
    const BLOGFEED_TWO_COLUMNS = 'blogfeed_onecolumn';
    const BLOGFEED_HIDE_SIDEBAR = 'blogfeed_show_sidebar';
    const BLOGFEED_HIDE_BYLINE_AUTHOR = 'blogfeed_hide_abouttheauthor';
    const BLOGFEED_COLOR_BACKGROUND = 'blogfeed_bg_color';
    const BLOGFEED_COLOR_HEADLINE = 'blogfeed_headline_color';
    const BLOGFEED_COLOR_BYLINE = 'blogfeed_byline_color';
    const BLOGFEED_COLOR_TEXT = 'blogfeed_text_color';
    const BLOGFEED_COLOR_BUTTON_TEXT = 'blogfeed_readmorebutton';
    const BLOGFEED_COLOR_BUTTON_BACKGROUND = 'blogfeed_bgc';
    const BLOGFEED_COLOR_PAGINATION_TEXT = 'pagination_text_color';
    const BLOGFEED_COLOR_PAGINATION_BACKGROUND = 'pagination_bg_color';

    const SINGLE_DISPLAY_ABOUT_AUTHOR = 'postpage_show_author';
    const SINGLE_HIDE_RELATED_POSTS = 'postpage_show_hide_relatedposts';
    const SINGLE_HIDE_NEXT_PREV = 'postpage_hide_nextprev';
    const SINGLE_HIDE_CATEGORIES_TAGS = 'show_posts_categories_tags';
    const SINGLE_COLOR_BACKGROUND = 'postpage_bg_color';
    const SINGLE_COLOR_HEADLINE = 'postpage_headline_color';
    const SINGLE_COLOR_BYLINE = 'postpage_byline_color';
    const SINGLE_COLOR_TEXT = 'postpage_text_color';
    const SINGLE_COLOR_LINK = 'postpage_link_color';
    const SINGLE_COLOR_BUTTON_BACKGROUND = 'postpage_buttonbg_color';
    const SINGLE_COLOR_BUTTON_TEXT = 'postpage_buttontext_color';
    const SINGLE_COLOR_BORDER = 'postpage_border_color';

    const WOOCOMMERCE_BG_COLOR = 'woocommerce_bg_color';


    public function __construct()
    {


        /*
        *
        * HEADER METASLIDER
        *
        */
        new CustomizerItem(self::HEADER_METASLIDER_SHORTCODE, array(
            "type" => CustomizerType::CONTROL_TEXT,
            "label" => __('MetaSlider Shortcode', 'meet-metaslider'),
            "description" => __('Add your MetaSlider slider shortcode in this field to use the Slider as your header. This will be used instead of the default theme header.', 'meet-metaslider'),
            "section" => CustomizerPanels::HEADER.CustomizerSections::HEADER_METASLIDER,
            "priority" => 1,
        ));
        new CustomizerItem(self::HEADER_METASLIDER_ONLY_FRONTPAGE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Show header on all pages', 'meet-metaslider'),
            "description" => __('Enabling this option will display the MetaSlider header on all pages.', 'meet-metaslider'),
            "section" => CustomizerPanels::HEADER.CustomizerSections::HEADER_METASLIDER,
            "default" => 0,
        ));
        new CustomizerItem(self::HEADER_METASLIDER_THEME_STYLE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Enable Theme Style', 'meet-metaslider'),
            "description" => __('Enabling this option will add extra CSS to style MetaSlider Header.', 'meet-metaslider'),
            "section" => CustomizerPanels::HEADER.CustomizerSections::HEADER_METASLIDER,
            "default" => 0,
        ));

/*
        *
        * HEADER DEFAULT
        *
        */
/* Header */

new CustomizerItem(self::HEADER_TITLE, array(
    "type" => CustomizerType::CONTROL_TEXT,
    "label" => __('Title', 'meet-metaslider'),
    "description" => __('The title text displayed in your header.', 'meet-metaslider'),
    "section" => CustomizerPanels::HEADER.CustomizerSections::HEADER_DEFAULT,
));
new CustomizerItem(self::HEADER_TAGLINE, array(
    "type" => CustomizerType::CONTROL_TEXT,
    "label" => __('Tagline', 'meet-metaslider'),
    "description" => __('The tagline text displayed in your header.', 'meet-metaslider'),
    "section" => CustomizerPanels::HEADER.CustomizerSections::HEADER_DEFAULT,
));
new CustomizerItem(self::HEADER_BUTTON_TEXT, array(
    "type" => CustomizerType::CONTROL_TEXT,
    "label" => __('Button Text', 'meet-metaslider'),
    "description" => __('The button text displayed in your header.', 'meet-metaslider'),
    "section" => CustomizerPanels::HEADER.CustomizerSections::HEADER_DEFAULT,
));
new CustomizerItem(self::HEADER_BUTTON_LINK, array(
    "type" => CustomizerType::CONTROL_TEXT,
    "label" => __('Button Link', 'meet-metaslider'),
    "description" => __('The link used by the button in your header.', 'meet-metaslider'),
    "section" => CustomizerPanels::HEADER.CustomizerSections::HEADER_DEFAULT,
));
new CustomizerItem(self::HEADER_BUTTON_HIDE_MOBILE, array(
    "type" => CustomizerType::CONTROL_CHECKBOX,
    "label" => __('Hide Header Button on Mobile', 'meet-metaslider'),
    "description" => __('Enabling this setting will hide the header button on mobile- and other small screen devices.', 'meet-metaslider'),
    "section" => CustomizerPanels::HEADER.CustomizerSections::HEADER_DEFAULT,
    "default" => 0
));
new CustomizerItem(self::HEADER_TAGLINE_HIDE_MOBILE, array(
    "type" => CustomizerType::CONTROL_CHECKBOX,
    "label" => __('Hide Header Tagline on Mobile', 'meet-metaslider'),
    "description" => __('Enabling this setting will hide the header tagline on mobile- and other small screen devices.', 'meet-metaslider'),
    "section" => CustomizerPanels::HEADER.CustomizerSections::HEADER_DEFAULT,
    "default" => 0
));

/* Colors */
new CustomizerItem(self::HEADER_COLOR_TEXT, array(
    "type" => CustomizerType::CONTROL_COLOR,
    "label" => __('Text Color', 'meet-metaslider'),
    "description" => __('Sets the text colors for the theme header.', 'meet-metaslider'),
    "section" => CustomizerPanels::COLORS.CustomizerSections::HEADER_DEFAULT,
    "default" => "#fff"
));
new CustomizerItem(self::HEADER_COLOR_BUTTON_BG, array(
    "type" => CustomizerType::CONTROL_COLOR,
    "label" => __('Button Background Color', 'meet-metaslider'),
    "description" => __('Sets the background colors for the theme header button.', 'meet-metaslider'),
    "section" => CustomizerPanels::COLORS.CustomizerSections::HEADER_DEFAULT,
    "default" => "#FF6A3D"
));
new CustomizerItem(self::HEADER_COLOR_BUTTON_TEXT, array(
    "type" => CustomizerType::CONTROL_COLOR,
    "label" => __('Button Text Color', 'meet-metaslider'),
    "description" => __('Sets the text colors for the theme header button.', 'meet-metaslider'),
    "section" => CustomizerPanels::COLORS.CustomizerSections::HEADER_DEFAULT,
    "default" => "#fff"
));

        /*
        *
        * SITE IDENTITY AND NAVIGATION
        *
        */
        new CustomizerItem(self::SITE_IDENTITY_HIDE_TAGLINE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Show tagline', 'meet-metaslider'),
            "section" => 'title_tagline',
            "default" => 0
        ));
        new CustomizerItem(self::NAVIGATION_COLOR_BACKGROUND, array(
            "type" => CustomizerType::CONTROL_COLOR,
            "label" => __('Background Color', 'meet-metaslider'),
            "description" => __('Sets the background colors for the navigation area.', 'meet-metaslider'),
            "section" => CustomizerPanels::COLORS.CustomizerSections::NAVIGATION,
            "default" => "#fff"
        ));
        new CustomizerItem(self::NAVIGATION_COLOR_TEXT, array(
            "type" => CustomizerType::CONTROL_COLOR,
            "label" => __('Link Color', 'meet-metaslider'),
            "description" => __('Sets the link colors for the navigation area.', 'meet-metaslider'),
            "section" => CustomizerPanels::COLORS.CustomizerSections::NAVIGATION,
            "default" => "#2f3136"
        ));
        new CustomizerItem(self::NAVIGATION_COLOR_SHOPPING_CART, array(
            "type" => CustomizerType::CONTROL_COLOR,
            "label" => __('Shopping Cart Color', 'meet-metaslider'),
            "description" => __('Sets the color of the shopping cart in the navigation area.', 'meet-metaslider'),
            "section" => CustomizerPanels::COLORS.CustomizerSections::NAVIGATION,
            "default" => "#000"
        ));
        new CustomizerItem(self::NAVIGATION_COLOR_BORDERS, array(
            "type" => CustomizerType::CONTROL_COLOR,
            "label" => __('Border Color', 'meet-metaslider'),
            "description" => __('Sets the border colors for the navigation area.', 'meet-metaslider'),
            "section" => CustomizerPanels::COLORS.CustomizerSections::NAVIGATION,
            "default" => "#fff"
        ));
        new CustomizerItem(self::NAVIGATION_HIDE_CART, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Shopping Cart', 'meet-metaslider'),
            "description" => __('Enabling this setting will hide the shopping cart in the navigation.', 'meet-metaslider'),
            "section" => CustomizerPanels::LAYOUT.CustomizerSections::NAVIGATION,
            "default" => 0
        ));
        /*
        *
        * SIDEBAR
        *
        */
        /* Layout */
        new CustomizerItem(self::SIDEBAR_WOOCOMMERCE_HIDE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Sidebar on WooCommerce Pages', 'meet-metaslider'),
            "description" => __('Enabling this setting will hide the sidebar on WooCommerce pages.', 'meet-metaslider'),
            "section" => CustomizerPanels::LAYOUT.CustomizerSections::SIDEBAR,
            "default" => 0
        ));
        new CustomizerItem(self::BLOGFEED_HIDE_SIDEBAR, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide Sidebar on Blog Page / Blog Feed', 'meet-metaslider'),
            "description" => __('Enabling this setting will hide the sidebar on the blog page and use the full width of the page for the blog feed column(s).', 'meet-metaslider'),
            "section" => CustomizerPanels::LAYOUT.CustomizerSections::SIDEBAR,
            "default" => 0
        ));
        


        /*
        *
        * FOOTER
        *
        */
        /* Layout */
        new CustomizerItem(self::FOOTER_GOTOTOP_HIDE, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Hide "Go To Top" Button', 'meet-metaslider'),
            "description" => __('Enabling this setting will hide the "Go To Top" button in the footer.', 'meet-metaslider'),
            "section" => CustomizerPanels::LAYOUT.CustomizerSections::FOOTER,
            "default" => 0
        ));
        
        /*
        *
        * BLOG FEED
        *
        */
        /* Layout */
        new CustomizerItem(self::BLOGFEED_TWO_COLUMNS, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('1-Column Layout', 'meet-metaslider'),
            "description" => __('Enabling this setting will switch the blog feed to a 1-column layout.', 'meet-metaslider'),
            "section" => CustomizerPanels::LAYOUT.CustomizerSections::BLOG,
            "default" => 0
        ));
        /*
        *
        * SINGLE / POSTS & PAGES / POSTS / PAGES
        *
        */
        /* Layout */
        new CustomizerItem(self::SINGLE_DISPLAY_ABOUT_AUTHOR, array(
            "type" => CustomizerType::CONTROL_CHECKBOX,
            "label" => __('Display About The Author Section', 'meet-metaslider'),
            "description" => __('Enabling this setting will display a section with information about the author.', 'meet-metaslider'),
            "section" => CustomizerPanels::LAYOUT.CustomizerSections::SINGLE,
            "default" => 0
        ));
    }
}
