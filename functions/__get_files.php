<?php 

	require_once get_template_directory() . '/functions/__options.php';
	require_once get_template_directory() . '/functions/class.Filter.php';

	$files_to_remove = array('__options.php', 'class.Filter.php', '__get_files.php', 'back-compat.php');

	/**
	 * Imports functions
	 * Joins all files and filter unnecessary ones
	 *
	 * @param array $arr
	 *
	 * @return array
	 * @since  1.0
	 */
	function get_files_from_folders($arr) {
		$files = array();
		global $files_to_remove;

		foreach ($arr as $key => $value) {
			$files = array_merge($files, $arr[$key]);
		}

		foreach ($files_to_remove as &$value) {
			$files = array_filter($files, array(new Filter($value), 'file'));
		}

		return $files;
	}