<?php
// Định nghĩa hành động khi plugin bị gỡ
// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Xóa options

// Xóa database
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS NestoNovo" );
delete_option("my_plugin_db_version");