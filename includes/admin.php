<?php
defined( 'ABSPATH' ) or exit;

//function wpv_admin_styles(){
//    wp_register_style( 'wpv_admin_css', plugins_url('/admin_css.css',__FILE__), false, '1.0.0' );
//    wp_enqueue_style( 'wpv_admin_css' );
//    wp_enqueue_script( 'custom-admin-js', plugins_url( '/admin_js.js', __FILE__ ), array( 'jquery' ) );
//}
//add_action( 'admin_enqueue_scripts', 'wpv_admin_styles' );


add_action( 'admin_menu', 'wpv_register_admin_menu' );
function wpv_register_admin_menu(){
    add_menu_page(
        'WP Views', 'WP Views', 'manage_options', 'wpv_main_page', 'wpv_menu_page', '', 6
    );

    add_submenu_page(
        'wpv_main_page',
        'Налаштування',
        'Налаштування',
        'manage_options',
        'wpv_settings_page',
        'wpv_settings_page_func'
    );
}

function wpv_menu_page(){
    echo "Код сторінки.";
}

function wpv_settings_page_func(){
    echo 'Сторінка підменю';
}