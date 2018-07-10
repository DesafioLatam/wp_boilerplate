<?php 

	require_once get_template_directory() . '/functions/__options.php';
	require_once get_template_directory() . '/functions/class.Filter.php';

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

		$all_files = array();

		foreach ($arr as $key => $value) {
			$all_files = array_merge($all_files, $arr[$key]);
		}

		$files = array_filter($all_files, array(new Filter('__options.php'), 'file'));
		$files = array_filter($files, array(new Filter('class.Filter.php'), 'file'));
		$files = array_filter($files, array(new Filter('__get_files.php'), 'file'));
		$files = array_filter($files, array(new Filter('back-compat.php'), 'file'));

		return $files;
	}