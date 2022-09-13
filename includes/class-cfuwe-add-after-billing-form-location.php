<?php
/**
 * To change the location of file upload option on WooCommerce checkout page.
 *
 * @package checkout-files-upload-woocommerce-extension
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'CFUWE_Add_After_Billing_Form_Location' ) ) {
	/**
	 * Class CFUWE_Add_After_Billing_Form_Location.
	 */
	class CFUWE_Add_After_Billing_Form_Location {

		/**
		 *  Constructor.
		 */
		public function __construct() {
			$this->checks_file_upload_location();
		}

		/**
		 * Validating the location of files upload option on WooCommerce checkout.
		 */
		public function checks_file_upload_location() {

			$saved_location = get_option( 'alg_checkout_files_upload_hook_1' );

			if ( ! empty( $saved_location ) ) {

				$this->updates_file_upload_location( $saved_location );

			}
		}

		/**
		 * Changing the location of files upload option on WooCommerce checkout.
		 *
		 * @param String $old_location The old place of upload option.
		 */
		public function updates_file_upload_location( $old_location ) {

			$new_location = 'woocommerce_after_checkout_billing_form';

			if ( 'woocommerce_after_checkout_form' === $old_location ) {
				update_option( 'alg_checkout_files_upload_hook_1', $new_location );
			}

		}
	}

	new CFUWE_Add_After_Billing_Form_Location();
}
