<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package digitalallies
 * @since digitalallies 1.0.0
 */

register_nav_menus(
	array(
		'desktop-nav'  => esc_html__( 'Header - Desktop Navigation', 'digitalallies' ),
		'mobile-nav' => esc_html__( 'Header - Mobile Navigation', 'digitalallies' ),
		'footer-nav' => esc_html__( 'Footer Naivation', 'digitalallies' ),
    'footer-bottom-nav' => esc_html__( 'Footer Bottom Naivation', 'digitalallies' ),
	)
);


/**
 * Desktop navigation - right top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'digitalallies_desktop_nav' ) ) {
	function digitalallies_desktop_nav() {
		wp_nav_menu( array(
            'theme_location'  => 'desktop-nav',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
	}
}


/**
 * Mobile navigation - topbar (default) or offcanvas
 */
if ( ! function_exists( 'digitalallies_mobile_nav' ) ) {
	function digitalallies_mobile_nav() {
		wp_nav_menu(
			array(
				'container'      => false,                         // Remove nav container
				'menu'           => __( 'mobile-nav', 'digitalallies' ),
				'menu_class'     => 'header__mobile-navigation vertical menu',
				'theme_location' => 'mobile-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
				'fallback_cb'    => false,
				'walker'         => new digitalallies_Mobile_Walker(),
			)
		);
	}
}


/**
 * Footer terms and conditions navigation  - Smaller footer navigation for terms and conditions
 */
if ( ! function_exists( 'digitalallies_footer_nav' ) ) {
	function digitalallies_footer_nav() {
		wp_nav_menu(
			array(
				'container'      => false,                         // Remove nav container
				'menu'           => __( 'desktop-nav', 'digitalallies' ),
				'menu_class'     => 'footer__menu',
				'theme_location' => 'footer-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
			)
		);
	}
}

if ( ! function_exists( 'digitalallies_footer_bottom_nav' ) ) {
  function digitalallies_footer_bottom_nav() {
    wp_nav_menu(
      array(
        'container'      => false,                         // Remove nav container
        'menu'           => __( 'footer-bottom-nav', 'digitalallies' ),
        'menu_class'     => 'footer_bottom__menu',
        'theme_location' => 'footer-bottom-nav',
        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
      )
    );
  }
}

/**
 * Add support for buttons in the top-bar menu:
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'digitalallies_add_menuclass' ) ) {
	function digitalallies_add_menuclass( $ulclass ) {
		$find    = array( '/<a rel="button"/', '/<a title=".*?" rel="button"/' );
		$replace = array( '<a rel="button" class="button"', '<a rel="button" class="button"' );

		return preg_replace( $find, $replace, $ulclass, 1 );
	}
	add_filter( 'wp_nav_menu', 'digitalallies_add_menuclass' );
}
