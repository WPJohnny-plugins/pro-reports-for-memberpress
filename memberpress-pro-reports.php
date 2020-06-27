<?php
/*
Plugin Name:  Pro Reports for MemberPress
Description:  Show MemberPress reports with more detail. More date-ranges, and individual product details (quantity, total, coupons-used).
Plugin URI:   https://wpjohnny.com/pro-reports-for-memberpress/
Author:       WPJohnny
Author URI:   https://wpjohnny.com
Version:      0.1.2
Text Domain:  memberpress-pro-reports
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// include plugin dependencies
require_once plugin_dir_path( __FILE__ ) . 'admin/menu.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/view.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/resources.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/controller.php';
