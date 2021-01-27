<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/galyonj
 * @since             1.0.0
 * @package           Asset_Management
 *
 * @wordpress-plugin
 * Plugin Name:       Asset Management
 * Plugin URI:        https://github.com/galyonj/asset-management
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            John Galyon
 * Author URI:        https://github.com/galyonj
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       asset-management
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
define( 'ASSET_MANAGEMENT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-asset-management-activator.php
 */
function activate_asset_management() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-asset-management-activator.php';
	Asset_Management_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-asset-management-deactivator.php
 */
function deactivate_asset_management() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-asset-management-deactivator.php';
	Asset_Management_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_asset_management' );
register_deactivation_hook( __FILE__, 'deactivate_asset_management' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-asset-management.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_asset_management() {

	$plugin = new Asset_Management();
	$plugin->run();

}
run_asset_management();
