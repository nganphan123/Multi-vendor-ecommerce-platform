<?php
/**
 * Sets all of our theme defaults.
 *
 * @package dokani
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'dokani_get_defaults' ) ) {
	/**
	 * Set default options
	 *
	 * @since 1.0.0
	 */
	function dokani_get_defaults() {
		$dokani_defaults = array(
			'hide_title'                    => '',
			'hide_tagline'                  => '',
			'logo'                          => '',
			'retina_logo'                   => '',
			'top_bar_width'                 => 'full',
			'top_bar_inner_width'           => 'contained',
			'top_bar_alignment'             => 'left',
			'cart_position_setting'         => 'cart-topbar',
			'container_width'               => '1100',
			'header_layout_setting'         => 'fluid-header',
			'header_inner_width'            => 'contained',
			'nav_alignment_setting'         => ( is_rtl() ) ? 'right' : 'left',
			'header_alignment_setting'      => ( is_rtl() ) ? 'right' : 'left',
			'nav_layout_setting'            => 'fluid-nav',
			'nav_inner_width'               => 'contained',
			'nav_position_setting'          => 'nav-float-right',
			'nav_dropdown_type'             => 'hover',
			'content_layout_setting'        => 'separate-containers',
			'layout_setting'                => 'right-sidebar',
			'blog_layout_setting'           => 'right-sidebar',
			'single_layout_setting'         => 'right-sidebar',
			'shop_layout_setting'           => 'left-sidebar',
			'single_product_layout_setting' => 'left-sidebar',
			'store_list_layout_setting'     => 'left-sidebar',
			'store_layout_setting'          => 'right-sidebar',
			'post_content'                  => 'excerpt',
			'footer_layout_setting'         => 'fluid-footer',
			'footer_inner_width'            => 'contained',
			'footer_widget_setting'         => '4',
			'footer_bar_alignment'          => 'right',
			'back_to_top'                   => '',
			'background_color'              => '#efefef',
			'text_color'                    => '#6d6d6d',
			'link_color'                    => '#000000',
			'link_color_hover'              => '#f2624d',
			'link_color_visited'            => '',
			'sidebar_list_border_color'     => '#ecedef',
			'sidebar_list_border_width'     => '1',
			'sidebar_list_spacing'          => '10',
			'font_awesome_essentials'       => true,
			'dynamic_css_cache'             => true,
		);

		return apply_filters( 'dokani_option_defaults', $dokani_defaults );
	}
}

if ( ! function_exists( 'dokani_get_color_defaults' ) ) {
	/**
	 * Set default options
	 */
	function dokani_get_color_defaults() {
		$dokani_color_defaults = array(
			'theme_color'                            => '#f2624d',
			'heading_color'                          => '#222222',
			'top_bar_background_color'               => '#ffffff',
			'top_bar_text_color'                     => '#a2abb2',
			'top_bar_link_color'                     => '#a2abb2',
			'top_bar_link_color_hover'               => '#f2624d',
			'header_background_color'                => '#ffffff',
			'header_text_color'                      => '#3a3a3a',
			'header_link_color'                      => '#3a3a3a',
			'header_link_hover_color'                => '#f2624d',
			'site_title_color'                       => '#222222',
			'site_tagline_color'                     => '#999999',
			'navigation_background_color'            => '#ffffff',
			'navigation_border_color'                => '#ecedef',
			'navigation_text_color'                  => '#000000',
			'navigation_link_color'                  => '#a2abb2',
			'navigation_background_hover_color'      => '#3f3f3f',
			'navigation_text_hover_color'            => '#ffffff',
			'navigation_link_hover_color'            => '#f2624d',
			'navigation_background_current_color'    => '#3f3f3f',
			'navigation_text_current_color'          => '#f2624d',
			'subnavigation_background_color'         => '#ffffff',
			'subnavigation_text_color'               => '#000000',
			'subnavigation_background_hover_color'   => '#ffffff',
			'subnavigation_text_hover_color'         => '#f2624d',
			'subnavigation_background_current_color' => '#ffffff',
			'subnavigation_text_current_color'       => '#f2624d',
			'content_background_color'               => '#ffffff',
			'content_text_color'                     => '',
			'content_link_color'                     => '',
			'content_link_hover_color'               => '',
			'content_title_color'                    => '#000000',
			'blog_post_title_color'                  => '',
			'blog_post_title_hover_color'            => '',
			'entry_meta_text_color'                  => '#888888',
			'entry_meta_link_color'                  => '#666666',
			'entry_meta_link_color_hover'            => '#1e73be',
			'h1_color'                               => '',
			'h2_color'                               => '',
			'h3_color'                               => '',
			'h4_color'                               => '',
			'h5_color'                               => '',
			'h6_color'                               => '',
			'sidebar_widget_background_color'        => '#ffffff',
			'sidebar_widget_text_color'              => '',
			'sidebar_widget_link_color'              => '',
			'sidebar_widget_link_hover_color'        => '',
			'sidebar_widget_title_color'             => '#000000',
			'trusted_factor_bg_color1'               => '#ffad6f',
			'trusted_factor_bg_color2'               => '#ff7d90',
			'trusted_factor_text_color'              => '#ffffff',
			'trusted_factor_icon_color'              => '#ff8c86',
			'trusted_factor_icon_bg_color'           => '#ffffff',
			'footer_widget_bg_color'		         => '#ffffff',
			'footer_widget_text_color'               => '#3a3a3a',
			'footer_widget_link_color'               => '#000000',
			'footer_widget_link_hover_color'         => '#f2624d',
			'footer_widget_title_color'              => '#222222',
			'footer_background_color'                => '#ffffff',
			'footer_bottom_bar_border_color'         => '#ecedef',
			'footer_bottom_bar_bg_color'             => '#ffffff',
			'footer_bottom_bar_text_color'           => '#3a3a3a',
			'footer_bottom_bar_link_color'           => '#000000',
			'footer_bottom_bar_hover_color'          => '#f2624d',
			'footer_text_color'                      => '#8a8a8a',
			'footer_link_color'                      => '#000000',
			'footer_link_hover_color'                => '#f2624d',
			'form_background_color'                  => '#fafafa',
			'form_text_color'                        => '#666666',
			'form_background_color_focus'            => '#ffffff',
			'form_text_color_focus'                  => '#666666',
			'form_border_color'                      => '#cccccc',
			'form_border_color_focus'                => '#bfbfbf',
			'form_button_background_color'           => '#666666',
			'form_button_background_color_hover'     => '#3f3f3f',
			'form_button_text_color'                 => '#ffffff',
			'form_button_text_color_hover'           => '#ffffff',
			'back_to_top_background_color'           => 'rgba( 0,0,0,0.4 )',
			'back_to_top_background_color_hover'     => 'rgba( 0,0,0,0.6 )',
			'back_to_top_text_color'                 => '#ffffff',
			'back_to_top_text_color_hover'           => '#ffffff',
			'store_header_text_color'                => '#222222',
			'store_header_title_color'               => '#000000',
			'store_header_link_color'                => '#222222',
			'store_header_link_hover_color'          => '#f2624d',
            'background_color'                       => '#efefef',
		);

		return apply_filters( 'dokani_color_option_defaults', $dokani_color_defaults );
	}
}

if ( ! function_exists( 'dokani_get_default_fonts' ) ) {
	/**
	 * Set default options.
	 *
	 * @param  bool  $filter  Whether to return the filtered values or original values.
	 *
	 * @return array Option defaults.
	 * @since 1.0.0
	 *
	 */
	function dokani_get_default_fonts( $filter = true ) {
		$dokani_font_defaults = array(
			'font_body'                   => 'Open Sans',
			'font_body_category'          => '',
			'font_body_variants'          => '',
			'body_font_weight'            => 'normal',
			'body_font_transform'         => 'none',
			'body_font_size'              => '14',
			'body_line_height'            => '1.5', // no unit
			'font_heading'                => 'inherit',
			'font_heading_category'       => '',
			'font_heading_variants'       => '',
			'heading_font_weight'         => 'inherit',
			'heading_font_transform'      => 'inherit',
			'paragraph_margin'            => '1.5', // em
			'font_top_bar'                => 'inherit',
			'font_top_bar_category'       => '',
			'font_top_bar_variants'       => '',
			'top_bar_font_weight'         => 'normal',
			'top_bar_font_transform'      => 'none',
			'top_bar_font_size'           => '13',
			'font_site_title'             => 'inherit',
			'font_site_title_category'    => '',
			'font_site_title_variants'    => '',
			'site_title_font_weight'      => 'bold',
			'site_title_font_transform'   => 'none',
			'site_title_font_size'        => '45',
			'mobile_site_title_font_size' => '30',
			'font_site_tagline'           => 'inherit',
			'font_site_tagline_category'  => '',
			'font_site_tagline_variants'  => '',
			'site_tagline_font_weight'    => 'normal',
			'site_tagline_font_transform' => 'none',
			'site_tagline_font_size'      => '15',
			'font_navigation'             => 'inherit',
			'font_navigation_category'    => '',
			'font_navigation_variants'    => '',
			'navigation_font_weight'      => 'normal',
			'navigation_font_transform'   => 'none',
			'navigation_font_size'        => '15',
			'font_widget_title'           => 'inherit',
			'font_widget_title_category'  => '',
			'font_widget_title_variants'  => '',
			'widget_title_font_weight'    => 'normal',
			'widget_title_font_transform' => 'none',
			'widget_title_font_size'      => '20',
			'widget_title_separator'      => '30',
			'widget_content_font_size'    => '17',
			'font_buttons'                => 'inherit',
			'font_buttons_category'       => '',
			'font_buttons_variants'       => '',
			'buttons_font_weight'         => 'normal',
			'buttons_font_transform'      => 'none',
			'buttons_font_size'           => '',
			'font_heading_1'              => 'inherit',
			'font_heading_1_category'     => '',
			'font_heading_1_variants'     => '',
			'heading_1_weight'            => '300',
			'heading_1_transform'         => 'none',
			'heading_1_font_size'         => '40',
			'heading_1_line_height'       => '1.2', // em
			'mobile_heading_1_font_size'  => '30',
			'font_heading_2'              => 'inherit',
			'font_heading_2_category'     => '',
			'font_heading_2_variants'     => '',
			'heading_2_weight'            => '300',
			'heading_2_transform'         => 'none',
			'heading_2_font_size'         => '30',
			'heading_2_line_height'       => '1.2', // em
			'mobile_heading_2_font_size'  => '25',
			'font_heading_3'              => 'inherit',
			'font_heading_3_category'     => '',
			'font_heading_3_variants'     => '',
			'heading_3_weight'            => 'normal',
			'heading_3_transform'         => 'none',
			'heading_3_font_size'         => '25',
			'heading_3_line_height'       => '1.2', // em
			'font_heading_4'              => 'inherit',
			'font_heading_4_category'     => '',
			'font_heading_4_variants'     => '',
			'heading_4_weight'            => 'normal',
			'heading_4_transform'         => 'none',
			'heading_4_font_size'         => '20',
			'heading_4_line_height'       => '', // em
			'font_heading_5'              => 'inherit',
			'font_heading_5_category'     => '',
			'font_heading_5_variants'     => '',
			'heading_5_weight'            => 'normal',
			'heading_5_transform'         => 'none',
			'heading_5_font_size'         => '18',
			'heading_5_line_height'       => '', // em
			'font_heading_6'              => 'inherit',
			'font_heading_6_category'     => '',
			'font_heading_6_variants'     => '',
			'heading_6_weight'            => 'normal',
			'heading_6_transform'         => 'none',
			'heading_6_font_size'         => '15',
			'heading_6_line_height'       => '', // em
			'font_footer'                 => 'inherit',
			'font_footer_category'        => '',
			'font_footer_variants'        => '',
			'footer_weight'               => 'normal',
			'footer_transform'            => 'none',
			'footer_font_size'            => '15',
		);

		if ( $filter ) {
			return apply_filters( 'dokani_font_option_defaults', $dokani_font_defaults );
		}

		return $dokani_font_defaults;
	}
}

if ( ! function_exists( 'dokani_spacing_get_defaults' ) ) {
	/**
	 * Set the default options.
	 *
	 * @param  bool  $filter  Whether to return the filtered values or original values.
	 *
	 * @return array Option defaults.
	 * @since 1.0.0
	 *
	 */
	function dokani_spacing_get_defaults( $filter = true ) {
		$dokani_spacing_defaults = array(
			'top_bar_top'                    => '10',
			'top_bar_right'                  => '10',
			'top_bar_bottom'                 => '10',
			'top_bar_left'                   => '10',
			'header_top'                     => '40',
			'header_right'                   => '40',
			'header_bottom'                  => '40',
			'header_left'                    => '40',
			'menu_item'                      => '20',
			'menu_item_height'               => '60',
			'sub_menu_item_height'           => '10',
			'content_top'                    => '40',
			'content_right'                  => '40',
			'content_bottom'                 => '40',
			'content_left'                   => '40',
			'mobile_content_top'             => '30',
			'mobile_content_right'           => '30',
			'mobile_content_bottom'          => '30',
			'mobile_content_left'            => '30',
			'separator'                      => '20',
			'left_sidebar_width'             => '25',
			'right_sidebar_width'            => '25',
			'widget_top'                     => '40',
			'widget_right'                   => '40',
			'widget_bottom'                  => '40',
			'widget_left'                    => '40',
			'footer_widget_container_top'    => '40',
			'footer_widget_container_right'  => '40',
			'footer_widget_container_bottom' => '40',
			'footer_widget_container_left'   => '40',
			'footer_widget_separator'        => '40',
			'footer_top'                     => '20',
			'footer_right'                   => '20',
			'footer_bottom'                  => '20',
			'footer_left'                    => '20',
		);

		if ( $filter ) {
			return apply_filters( 'dokani_spacing_option_defaults', $dokani_spacing_defaults );
		}

		return $dokani_spacing_defaults;
	}
}

if ( ! function_exists( 'dokani_typography_default_fonts' ) ) {
	/**
	 * Set the default system fonts.
	 *
	 * @since 1.0.0
	 */
	function dokani_typography_default_fonts() {
		$fonts = array(
			'inherit',
			'System Stack',
			'Arial, Helvetica, sans-serif',
			'Century Gothic',
			'Comic Sans MS',
			'Courier New',
			'Georgia, Times New Roman, Times, serif',
			'Helvetica',
			'Impact',
			'Lucida Console',
			'Lucida Sans Unicode',
			'Palatino Linotype',
			'Segoe UI, Helvetica Neue, Helvetica, sans-serif',
			'Tahoma, Geneva, sans-serif',
			'Trebuchet MS, Helvetica, sans-serif',
			'Verdana, Geneva, sans-serif',
		);

		return apply_filters( 'dokani_typography_default_fonts', $fonts );
	}
}
