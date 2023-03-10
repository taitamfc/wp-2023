<?php
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    /*
    add_menu_page( 
            string $page_title, 
            string $menu_title, 
            string $capability, 
            string $menu_slug, 
            callable $callback = '', 
            string $icon_url = '', 
            int|float $position = null 
    ): string
    */
    add_menu_page(
        'Wordpress 2023',//tiêu đề
        'Wordpress 2023',
        'manage_options',
        'wp2023',
        'wp2023_admin_page_dashboard',
        'dashicons-businessman',
        20
    );

    add_submenu_page(
        'wp2023',
        'Đơn Hàng',
        'Đơn Hàng',
        'manage_options',
        'wp2023-orders',
        'wp2023_admin_page_orders',
    );

    add_submenu_page(
        'wp2023',
        'Cấu Hình',
        'Cấu Hình',
        'manage_options',
        'wp2023-settings',
        'wp2023_admin_page_settings',
    );
}

function wp2023_admin_page_dashboard(){
    echo 'wp2023_admin_page_dashboard';
}

function wp2023_admin_page_orders(){
    include_once WP2023_PATH.'includes/admin_pages/orders.php';
}
function wp2023_admin_page_settings(){
    include_once WP2023_PATH.'includes/admin_pages/settings.php';
}