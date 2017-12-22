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
define('wpviews_url',plugin_dir_url(__FILE__));

require_once wpviews_path ."/includes/admin.php";
require_once wpviews_path ."/includes/frontend.php";

//function wpv_register_options(){
//
//}
//register_activation_hook(wpviews_plugin_file_path, 'wpv_register_options' );


// Підтягуємо шаблон для архіву
function get_archive_views_template( $archive_template ) {
    $archive_template = dirname( __FILE__ ) . '/templates/archive_grid.php';
    return $archive_template;
}

add_filter( 'archive_template', 'get_archive_views_template' ) ;

// Додаємо css
function add_wpv_stylesheet() {
    $myStyleUrl = wpviews_url . 'assets/css/wpv_styles.css';
    wp_register_style('wpv-styles', $myStyleUrl, array(), '20120208', 'all');
    wp_enqueue_style( 'wpv-styles');
}

add_action('wp_enqueue_scripts', 'add_wpv_stylesheet');