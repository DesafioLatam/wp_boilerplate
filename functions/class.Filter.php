<?php 

/**
 * Filter Class
 * This class will filter certain elements from an array
 *
 * @return filter object
 * @since  1.4.4
 */
class Filter {
	/**
	 * Element to filter
	 * @access private
	 */
	private $threshold;

 	/**
	 * Filter Constructor.
	 *
	 * @access public
	 * @param string $threshold The element to filter
	 */
	public function __construct( $threshold ) {
		$this->threshold = $threshold;
	}

 	/**
	 * Filter elements from an array
	 *
	 * @access public
	 * @param string $i The current element on the loop
	 */
	public function file( $i ) {
		return strpos( $i, $this->threshold ) === false ? $i : false;
	}
}
