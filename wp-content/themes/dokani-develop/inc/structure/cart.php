<?php
/**
 * Cart elements.
 *
 * @package dokani
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'dokani_cart_position' ) ) {
	/**
	 * Build the cart.
	 *
	 * @since 1.0.0
	 */
	function dokani_cart_position() {
	    $cart = '';
        $cart .= '<li id="dokane-menu-cart-wrapper">';
        /* translators: %s: search term */
        $cart .= '<a href="' . esc_url( wc_get_cart_url() ) . '" class="dropdown-toggle dokani-menu-cart" data-toggle="dropdown">' . sprintf( esc_html__( 'Cart %s', 'dokani' ), '<span class="dokan-cart-amount-top dokan-cart-amount">(' . wp_kses_post( WC()->cart->get_cart_total() ) . ')</span>' ) .'<b class="caret"></b></a>';

            $cart .= '<ul class="dropdown-menu">';
                $cart .= '<li>';
		            $cart .= '<div class="widget_shopping_cart_content"></div>';
                $cart .= '</li>';
            $cart .= '</ul>';
        $cart .= '</li>';
        if ( ! function_exists( 'dokan' ) ) {
	        $cart .= '<li>';
	        $cart .= '<a class="dokani-menu-user" href="' . esc_url( wc_get_page_permalink( 'myaccount' ) ) . '">' . esc_html__( 'My Account', 'dokani' ) . '</a>';
	        $cart .= '</li>';
        }

        return $cart;
	}
}


if ( ! function_exists( 'dokani_add_cart_menu_after_search' ) ) {
	add_action( 'dokani_after_header_right', 'dokani_add_cart_menu_after_search', 10 );
	function dokani_add_cart_menu_after_search() {
		$cart_topbar = dokani_get_setting( 'cart_position_setting' );

		if( 'cart-search' == $cart_topbar ) {
			echo '<ul class="header-cart-menu no-list-style m-0">';
			echo wp_kses_post( dokani_cart_position() );
			echo '</ul>';
		}
	}
}
