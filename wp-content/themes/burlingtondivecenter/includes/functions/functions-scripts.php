<?php 
	function bdc_jquery(){
		wp_dequeue_script('jquery');
		wp_register_script('jquery', BDC_URI . '/includes/scripts/jquery-3.1.1.min.js');
		wp_enqueue_script('jquery');
		
	}
	add_action('wp_enqueue_scripts', 'bdc_jquery');
	
	function bdc_bootstrap_scripts(){
		wp_register_script('bootstrap-js', BDC_URI . '/includes/bootstrap/js/boostrap.min.js', array('jquery'), '', false);
		wp_enqueue_script('bootstrap-js');
	}
	add_action('wp_enqueue_scripts', 'bdc_bootstrap_scripts');