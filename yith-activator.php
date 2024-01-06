<?php
/**
 * Plugin Name: YITH License Activator 
 * Description: The ultimate tool for seamless activation of premium YITH plugins. Activate YITH's premium plugins effortlessly while removing intrusive banners and forms.
 * Version: 1.1
 * Author: GPL Community
 * Author URI: https://devtools.club/gpl/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Requires PHP: 7.4
 * Update URI: https://github.com/devtoolsclub/yith-activator
 * Tags: yith, woocommerce, activation, license, register, form, key
 * WC requires at least: 8.0
 * WC tested up to: 8.4
 */
// For support or inquiries, email us at: members@devtools.club

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Include the main YITH Activator class file and additional functions.
include_once dirname( __FILE__ ) . '/includes/class-yith-activator.php';
include_once dirname( __FILE__ ) . '/includes/activation-functions.php';
include_once dirname( __FILE__ ) . '/includes/utility-functions.php';

// Instantiate and initialize the plugin.
function yith_activator_initialize() {
    new YITH_Activator();
	// Call additional functions.
}

add_action('plugins_loaded', 'yith_activator_initialize');
add_action('plugins_loaded', 'yith_disable_license_activation_redirect');
add_action('admin_init', 'yith_override_onboarding_queue', 0);
add_action('admin_init', 'yith_custom_disable_update_check');