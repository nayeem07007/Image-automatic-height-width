<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin Name: Image Automatic Height Width 
 * Description:  Fix image elements do not have explicit width and height 
 * Plugin URI: https://loyalcoder.com/plugin/
 * Author: Md Nayeem Farid
 * Version: 1.0.0
 * Author URI: https://loyalcoder.com/
 *Requires at least: 4.7
 *Tested up to: 5.7
 *Requires PHP: 5.6
 *License: GPLv2
 *License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: image-automatic-height-width
 * Domain Path: /languages
 *
 * Image Automatic Height Width  Will fix google page insight and gt metrix error image elements do not have explicit width and height 
 * Its light weight.
 *
 */

if (!defined('IMAGE_AUTOMATIC_HEIGHT_WIDTH_VERSION')) {
    define('IMAGE_AUTOMATIC_HEIGHT_WIDTH_VERSION', '1.0.0');
}

function iahw_enqueue_scrpt() {   

    wp_enqueue_script( 'iahw_script', plugin_dir_url( __FILE__ ) . 'assets/js/scrpt.js', ['jquery'],  IMAGE_AUTOMATIC_HEIGHT_WIDTH_VERSION, 'true');

}

add_action('wp_enqueue_scripts', 'iahw_enqueue_scrpt');