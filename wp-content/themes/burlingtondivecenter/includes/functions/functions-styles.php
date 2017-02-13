<?php 
	function bdc_bootstrap_css(){
		wp_enqueue_style('bootstrap_css', BDC_URI . '/includes/bootstrap/css/bootstrap.min.css');
	}
	
	add_action('wp_enqueue_scripts', 'bdc_bootstrap_css');
	
	function bdc_styles(){
		wp_enqueue_style('navbar_style', BDC_URI . '/includes/styles/styles-navbar.css');
	}
	add_action('wp_enqueue_scripts','bdc_styles');