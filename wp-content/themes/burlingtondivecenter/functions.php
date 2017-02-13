<?php
define ('BDC_PATH', get_template_directory());
define ('BDC_URI', get_template_directory_uri());
define ('BDC_TEXTDOMAIN', 'bdc');

// Scripts and style sheets
include (BDC_PATH . '/includes/functions/functions-scripts.php');
include (BDC_PATH . '/includes/functions/functions-styles.php');


// Declare theme support for woocommerce
add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support(){
	add_theme_support('woocommerce');
}

// Register the nav menus
function register_menus(){
	register_nav_menus(
		array(
			'center-menu' => __('Primary Navigation'),
			'right-menu' => __('Right Navigation')
		)
	);
}
add_action('init', 'register_menus');