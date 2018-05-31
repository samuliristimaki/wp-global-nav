<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Wp_Global_Nav
 *
 * @wordpress-plugin
 * Plugin Name:       Global Navigation
 * Plugin URI:        https://wordpress-global-nav-67052.firebaseapp.com/
 * Description:       A WordPress Plugin.
 * Version:           1.0.0
 * Author:            Samuli Ristimäki
 * Author URI:        https://samuliristimaki.life
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       wp-global-nav
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_GLOBAL_NAV_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-global-nav-activator.php
 */
function activate_wp_global_nav() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-global-nav-activator.php';
	Wp_Global_Nav_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-global-nav-deactivator.php
 */
function deactivate_wp_global_nav() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-global-nav-deactivator.php';
	Wp_Global_Nav_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_global_nav' );
register_deactivation_hook( __FILE__, 'deactivate_wp_global_nav' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-global-nav.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_global_nav() {

	$plugin = new Wp_Global_Nav();
	$plugin->run();

}
run_wp_global_nav();