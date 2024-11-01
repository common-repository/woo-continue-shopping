<?php
/*
  Plugin Name: WooCommerce Continue Shopping
  Description: Add continue shopping button to cart page
  Author: Triet Trinh <triet.trinh.vn@gmail.com>
  Version: 1.0
  Author URI: https://pentagonsoft.com
 */
if (!defined('ABSPATH')) {
    die('@@'); // Exit if accessed directly
}

if (!is_admin()) {
    define("WC_CONTINUE_SHOPPING_URL", plugin_dir_url(__FILE__));
    define("WC_CONTINUE_SHOPPING_DIR", dirname(__FILE__) . '/');

    add_action('woocommerce_cart_actions', 'wccs_woocommerce_cart_actions');
    wp_enqueue_style('wc_continue-shopping-css', WC_CONTINUE_SHOPPING_URL . 'assets/css/wccs-continue-shopping.css');

    function wccs_woocommerce_cart_actions()
    {
        require_once(WC_CONTINUE_SHOPPING_DIR . 'views/continue_shopping_button.php');
    }
}