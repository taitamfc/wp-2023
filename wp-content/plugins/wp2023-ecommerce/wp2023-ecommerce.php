<?php
/*
 * Plugin Name:       Wordpress 2023: Ecommerce
 * Plugin URI:        #
 * Description:       Plugin Wordpress 2023: Ecommerce được xây dựng trong khóa học Lập trình WordPress 2023
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Quảng Trị Coder
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       wp2023-ecommerce
 * Domain Path:       /languages
 */
// Định nghĩa các hằng số của plugin
define('WP2023_PATH', plugin_dir_path(__FILE__) );
define('WP2023_URI', plugin_dir_url(__FILE__) );

// Định nghĩa hành động khi plugin được bật
register_activation_hook( __FILE__, 'wp2023_ecommerce_active' );
function wp2023_ecommerce_active(){
    // Kiểm tra đã cài CSDL chưa
    $actived = get_option('wp2023_ecommerce_active');
    if(!$actived){
        // Tạo CSDL
        include_once WP2023_PATH.'includes/db/migration.php';
        // Chèn dữ liệu mẫu
        include_once WP2023_PATH.'includes/db/seeder.php';
        // Lưu vào CSDL trạng thái đã chèn
        update_option('wp2023_ecommerce_active',1);
    }
}
// Định nghĩa hành động khi plugin được tắt đi
register_deactivation_hook( __FILE__, 'wp2023_ecommerce_deactivate' );
function wp2023_ecommerce_deactivate(){
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    // Xóa options
    delete_option('wp2023_ecommerce_active');
    // Xóa database
    global $wpdb;

    $table_name = $wpdb->prefix . 'wp2023_orders';
    $sql = "DROP TABLE $table_name";
    dbDelta( $sql );

    $table_name = $wpdb->prefix . 'wp2023_order_detail';
    $sql = "DROP TABLE $table_name";
    dbDelta( $sql );
}
include_once WP2023_PATH.'includes/includes.php';