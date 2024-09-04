<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://barisatasoy.org
 * @since      1.0.0
 *
 * @package    Enginemailer_proxy
 * @subpackage Enginemailer_proxy/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Enginemailer_proxy
 * @subpackage Enginemailer_proxy/includes
 * @author     Barış Atasoy <barisatasoy75@gmail.com>
 */
class Enginemailer_proxy_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'enginemailer_proxy',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
