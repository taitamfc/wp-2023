<?php
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

global $wpdb;
$charset_collate = $wpdb->get_charset_collate();

$table_name = $wpdb->prefix . 'wp2023_order_detail';
$sql = "CREATE TABLE " . $table_name." (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY  (id)
) ". $charset_collate .";";

dbDelta( $sql );

$table_name = $wpdb->prefix . 'wp2023_orders';
$sql = "CREATE TABLE " . $table_name." (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `total` double NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_address` text,
  `note` text,
  `deleted` tinyint(4) NOT NULL DEFAULT '0' NULL,
  PRIMARY KEY  (id)
) ". $charset_collate .";";

dbDelta( $sql );

