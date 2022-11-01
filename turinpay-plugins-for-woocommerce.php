<?php
/**
 * Plugin Name: TurinPay Plugins for WooCommerce
 * Plugin URI: https://www.turinlabs.com/turinpay/
 * Description: TurinPay for WooCommerce delivers a simple, secure way to accept payment in your WooCommerce store. Reduce payment friction and boost conversions using this free plugin!
 * Version: 1.1.7
 * Author: TurinPay Plugins
 * Author URI: https://www.turinlabs.com/
 * License: GPLv2 or later
 * Text Domain: turinpay-plugin-for-woocommerce
 *
 * @package turinpay-plugin-for-woocommerce
 */

/**
 * Set constants
 */

define( 'TPFW_FILE', __FILE__ );
define( 'TPFW_BASE', plugin_basename( TPFW_FILE ) );
define( 'TPFW_DIR', plugin_dir_path( TPFW_FILE ) );
define( 'TPFW_URL', plugins_url( '/', TPFW_FILE ) );
define( 'TPFW_VERSION', '1.1.7' );

require_once 'autoloader.php';
