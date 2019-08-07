<?php
/**
 * Plugin Name: WP ReactJs Plugin
 * Description: WordPress Hello World Plugin build with React JS.
 * Plugin URI: https://github.com/maheshwaghmare/wp-reactjs-plugin
 * Author: Mahesh M. Waghmare
 * Author URI: https://maheshwaghmare.wordpress.com/
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: wp-reactjs-plugin
 *
 * @package WP ReactJs Plugin
 */

// Set constants.
define( 'WP_REACTJS_PLUGIN_VER',  '1.0.0' );
define( 'WP_REACTJS_PLUGIN_FILE', __FILE__ );
define( 'WP_REACTJS_PLUGIN_BASE', plugin_basename( WP_REACTJS_PLUGIN_FILE ) );
define( 'WP_REACTJS_PLUGIN_DIR',  plugin_dir_path( WP_REACTJS_PLUGIN_FILE ) );
define( 'WP_REACTJS_PLUGIN_URI',  plugins_url( '/', WP_REACTJS_PLUGIN_FILE ) );

require_once WP_REACTJS_PLUGIN_DIR . 'classes/class-wp-reactjs-plugin.php';