<?php
/**
 *  Init
 *
 * @package WP ReactJs Plugin
 */

if( ! class_exists( 'WP_ReactJs_Plugin' ) ) :

	/**
	 *  Class Description
	 */
	class WP_ReactJs_Plugin {

		/**
		 * Member Variable
		 *
		 * @var instance
		 */
		private static $instance;

		/**
		 * Initiator
		 *
		 * @since 1.0.0
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 * 
		 * @since 1.0.0
		 */
		public function __construct() {

			// Action to add menu in settings page.
			add_action( 'admin_menu', array( $this, 'admin_menu' ) );

			// Action to add scripts to admin side.
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts' ) );
		}

		/**
		 * Function to add new menu in settings
		 *
		 * @since   1.0.0
		 */
		function admin_menu() {
			add_menu_page( __( 'React Page', 'wpreact' ), __( 'React Page', 'wpreact' ), 'manage_options', 'wpreact-page', array( $this, 'admin_page' ) );
		}

		/**
		 * Callback function of Setting Page
		 *
		 * @since    1.0.0
		 */
		function admin_page() {
			?>
			<div id="root"></div>
			<?php
		}

		/**
		 * Function to add the scripts and styles to admin page.
		 *
		 * @since 1.0.0
		 */
		function enqueue_admin_scripts() {
			wp_enqueue_script( 'wpreact-script', WP_REACTJS_PLUGIN_URI . 'dist/bundle.js', array( 'jquery', 'wp-element' ), WP_REACTJS_PLUGIN_VER, true );
		}

	}

	/**
	 * Kicking this off by calling 'get_instance()' method
	 */
	WP_ReactJs_Plugin::get_instance();

endif;