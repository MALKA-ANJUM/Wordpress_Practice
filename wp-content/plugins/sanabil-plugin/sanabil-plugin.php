<?php
/*
 * Plugin Name:       Sanabil Plugin
 * Plugin URI:        http://wordpress_practice.test/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Malka Anjum
 * Author URI:        http://wordpress_practice.test/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       sanabil-plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if ( ! defined( 'SANABIL_PLUGIN_VERSION' ) ) {
	define('SANABIL_PLUGIN_VERSION', '1.0.0'); // Exit if accessed directly
}
if ( ! defined( 'SANABIL_PLUGIN_DIR_PATH' ) ) {
	define('SANABIL_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__)); // Exit if accessed directly
}
if ( ! defined( 'SANABIL_PLUGIN_DIR_URL' ) ) {
	define('SANABIL_PLUGIN_DIR_URL', plugin_dir_url(__FILE__)); // Exit if accessed directly
}

//  Include once
require_once SANABIL_PLUGIN_DIR_PATH . 'inc/scripts.php';