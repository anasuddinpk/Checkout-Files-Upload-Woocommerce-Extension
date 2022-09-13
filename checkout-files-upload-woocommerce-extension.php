<?php
/**
 * Plugin Name: Checkout Files Upload Woocommerce Extension
 * Plugin URI: https://github.com/anasuddinpk/checkout-files-upload-woocommerce-extension
 * Description: Made for changing the location of <code>files upload</code> link after billing form on WooCommerce checkout.
 * Version: 1.1.1.0
 * Author: Anas Uddin
 * Author URI: https://www.linkedin.com/in/anasuddinpk/
 * Text Domain: checkout-files-upload-woocommerce-extension
 *
 * @package checkout-files-upload-woocommerce-extension
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'CFUWE_PLUGIN_DIR' ) ) {
	define( 'CFUWE_PLUGIN_DIR', __DIR__ );
}

if ( ! defined( 'CFUWE_PLUGIN_DIR_URL' ) ) {
	define( 'CFUWE_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'CFUWE_ABSPATH' ) ) {
	define( 'CFUWE_ABSPATH', dirname( __FILE__ ) );
}

require_once CFUWE_ABSPATH . '/includes/class-cfuwe-loader.php';
