<?php
/**
 * @package WP_Array_Util
 *
 * @wordpress-plugin
 * Plugin Name: WP MailChimp Signup Form Popup
 * Plugin URI: https://github.com/manovotny/wp-mailchimp-signup-form-popup
 * Description: A MailChimp signup form popup for WordPress.
 * Version: 0.0.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /TRANSLATIONS_PATH
 * Text Domain: TRANSLATIONS_DOMAIN
 * GitHub Plugin URI: https://github.com/manovotny/wp-mailchimp-signup-form-popup
 */

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';