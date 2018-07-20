<?php
	add_action('wp_ajax_example_ajax', 'example_ajax');
	add_action('wp_ajax_nopriv_example_ajax', 'example_ajax');

	function example_ajax() {
		echo 'the example_ajax function is loading!';
		exit;
	}