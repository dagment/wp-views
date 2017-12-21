<?php
/**
 * Plugin Name: WP Views
 * Description: This plugin add custom views for posts
 * Version: 0.0.1
 * Author: Mykhailo Prokopiuk and Ustym Radobenko
 */
defined( 'ABSPATH' ) or exit;
define('wpviews_path',plugin_dir_path(__FILE__ ));
define('wpviews_plugin_file_path',__FILE__);

//function wpv_register_options(){
//
//}
//register_activation_hook(wpviews_plugin_file_path, 'wpv_register_options' );



require_once wpviews_path ."/includes/admin.php";
require_once wpviews_path ."/includes/frontend.php";