<?php 

	function wp_remove_version() {
		return '';
	}

	add_filter('the_generator', 'wp_remove_version');

?>