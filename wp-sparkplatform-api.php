<?php
/**
* WP Github API
* Designed to work with v3.0 (https://developer.github.com/v3) of the Github API.
*
* @package WP-Github-API
*/

/*
* Plugin Name: WP Spark Platform API
* Plugin URI: https://github.com/wp-api-libraries/wp-sparkplatform-api
* Description: Perform API requests to Spark Platform in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-sparkplatform-api
* GitHub Branch: master
*/

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if Class Exists. */
if ( ! class_exists( 'SparkPlatformAPI' ) {

	/**
 	* SparkPlatformAPI Class.
 	*/
	class SparkPlatformAPI {

		
		/**
		 * reso_api_url
		 * 
		 * (default value: 'https://sparkapi.com/Reso/OData')
		 * 
		 * @var string
		 * @access private
		 */
		private $reso_api_url = 'https://sparkapi.com/Reso/OData';


		public function __construct(){

		}
		
		/* Media. */
		
		public function get_all_media_for_property() {
			// URI: /Reso/OData/Properties('<Property.Id>')/Media
		}
		
		public function get_specific_media_for_property() {
			// /Reso/OData/Properties('<Property.Id>')/Media
		}
		
		/* Members. */
		
		public function get_all_members() {
			// URI: /Reso/OData/Members
		}
		
		public function get_member() {
			// URI: /Reso/OData/Members('<Member.Id>')
		}
		
		/* Offices. */
		
		public function get_all_offices() {
			// /Reso/OData/Offices
		}
		
		public function get_office() {
			// /Reso/OData/Offices('<Office.Id>')
		}

		/* Properties. */
		
		public function get_all_properties() {
			// /Reso/OData/Properties
		}
		
		public function get_property( $property_id ) {
			// /Reso/OData/Properties('<Property.Id>')
		}


	} // End Class.

} // End Class Exists Check.
