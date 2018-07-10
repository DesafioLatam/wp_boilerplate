<?php 

/**
 * Filter Class
 *
 * This class will filter certain elements from an array
 */
class Filter {
	/**
	 * Element to filter
	 */
	private $threshold;

 	/**
	 * Filter Constructor.
	 *
	 * @access public
	 * @return Filter
	 * @since  1.0
	 */
	function __construct($threshold) {
		$this->threshold = $threshold;
	}

 	/**
	 * Filter elements from an array
	 *
	 * @access public
	 *
	 * @param string $i
	 *
	 * @return string
	 * @since  1.0
	 */
	public function file($i) {
		return strpos($i, $this->threshold) === false ? $i : false;
	}
}