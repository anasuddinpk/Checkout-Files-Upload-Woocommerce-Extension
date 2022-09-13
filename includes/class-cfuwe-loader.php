<?php
/**
 * Main Loader.
 *
 * @package checkout-files-upload-woocommerce-extension
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'CFUWE_Loader' ) ) {
	/**
	 * Class CFUWE_Loader.
	 */
	class CFUWE_Loader {

		/**
		 *  Constructor.
		 */
		public function __construct() {
			$this->includes();
		}

		/**
		 * Includes files depend on platform.
		 */
		public function includes() {
			include 'class-cfuwe-add-after-billing-form-location.php';
		}
	}

	new CFUWE_Loader();
}
