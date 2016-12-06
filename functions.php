<?php 

	$files = glob(get_template_directory() . '/functions/*.php');

	foreach($files as $file) {
		require_once $file;
	}
	
?>