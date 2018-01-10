<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
	exit;

/**
 * Define
 */
define( 'DL_PAGE_DIR', plugin_dir_path( __FILE__ ) );
define( 'DL_PAGE_URL', plugin_dir_url( __FILE__ ) );
define( 'DLP', 'page-navigation' );
define( 'DLP_ST', 'page_navigation' );

/**
 * Page_Navigation Class
 *
 * This class will run main modules of plugin
 */
if ( ! class_exists( 'Page_Navigation' ) ) :

	class Page_Navigation {
		/**
		 * Global plugin version
		 */
		static $version = '1.0';

		/**
		 * Page_Navigation Constructor.
		 *
		 * @access public
		 * @return Page_Navigation
		 * @since  1.1
		 */
		public function __construct() {
			// Include handling files
			include_once( '_inc/pagination_funcs.php' );

			// Handle when plugin is active
			add_action('after_switch_theme', array( $this, 'active_plugin') );

			// register admin options
			add_action( 'admin_init', array( $this, 'admin_options' ) );

			// add plugin options page
			add_action( 'admin_menu', array( $this, 'add_options_page' ) );

			// enqueue script and style in back-end
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ) );

		}

		/**
		 * Active this plugin
		 * Set default values for general options
		 *
		 * @access public
		 * @return void
		 * @since  1.1
		 */
		public function active_plugin() {
			$defaults = array(
				'first_text' => __( '&laquo; Inicio', DLP ),
				'last_text'  => __( 'Fin &raquo;', DLP ),
				'prev_text'  => __( '&laquo;', DLP ),
				'next_text'  => __( '&raquo;', DLP ),
				'style'      => 'default',
				'align'      => 'left',
			);
			add_option( DLP_ST, $defaults );
		}

		/**
		 * Whitelist plugin options
		 *
		 * @access public
		 * @return void
		 * @since  1.1
		 */
		public function admin_options() {
			register_setting( DLP_ST, DLP_ST, array( $this, 'validate_options' ) );
		}

		/**
		 * Sanitize and validate options
		 *
		 * @access public
		 *
		 * @param  array $input
		 *
		 * @return array
		 * @since  1.1
		 */
		public function validate_options( $input ) {

			$options  = array();
			$defaults = array(
				'first_text' => __( '&laquo; Inicio', DLP ),
				'last_text'  => __( 'Fin &raquo;', DLP ),
				'prev_text'  => __( '&laquo;', DLP ),
				'next_text'  => __( '&raquo;', DLP ),
				'style'      => 'default',
				'align'      => 'left',
			);

			foreach ( $defaults as $name => $val ) {
				$options[$name] = isset( $input[$name] ) ? $input[$name] : $val;
			}

			// Get all taxonomy can view in front-end and validate it
			$args = array(
				'public'  => true,
				'show_ui' => true
			);

			$taxonomies = get_taxonomies( $args );

			if ( ! empty( $taxonomies ) )
				foreach ( $taxonomies as $tax ) {
					$options[$tax] = $input[$tax];
				}

			return $options;
		}

		/**
		 * Add options page
		 *
		 * @access public
		 * @return void
		 * @since  1.1
		 */
		public function add_options_page() {
			add_submenu_page( 
				'themes.php',
				__( 'Opciones de Paginación', DLP ),
				__( 'Paginación', DLP ),
				'manage_options',
				'pagination',
				array( $this,'plugin_form')
			);
		}

		/**
		 * Render the options form
		 *
		 * @access public
		 * @return void
		 * @since  1.1
		 */
		public function plugin_form() {
			include( '_inc/pagination_form.php' );
		}

		/**
		 * Enqueue script and style in back-end
		 *
		 * @access public
		 * @return void
		 * @since  1.1
		 */
		public function admin_enqueue() {
			wp_enqueue_style( 'dl-page-nav-admin', get_parent_theme_file_uri('/assets/css/admin.css'), null, self::$version );
			wp_enqueue_script( 'dl-page-nav', get_parent_theme_file_uri('/assets/js/lib/admin.js'), array( 'jquery' ), self::$version, true );
		}


		/**
		 * Get all taxonomies
		 *
		 * @access public
		 * @return array
		 * @since  1.1
		 */
		public static function get_all_taxonomies() {
			$args = array(
				'public'  => true,
				'show_ui' => true,
			);

			$taxonomies = get_taxonomies( $args, 'objects' );

			return $taxonomies;
		}
	}

endif; // End class

new Page_Navigation();