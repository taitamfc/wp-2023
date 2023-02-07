<?php
$orders = [
    [
        'created'           => '2023-02-06',
        'total'             => '20000',
        'status'            => 'pending',
        'payment_method'    => 'cod',
        'customer_name'     => 'NVA',
        'customer_phone'    => '0123456789',
        'customer_email'    => 'NVA@gmail.com',
        'customer_address'  => 'QT',
        'note'              => 'Giao nhanh',
    ],
    [
        'created'           => '2023-02-07',
        'total'             => '20000',
        'status'            => 'pending',
        'payment_method'    => 'cod',
        'customer_name'     => 'NVB',
        'customer_phone'    => '0123456789',
        'customer_email'    => 'NVB@gmail.com',
        'customer_address'  => 'QT',
        'note'              => 'Giao nhanh',
    ],
    [
        'created'           => '2023-02-09',
        'total'             => '20000',
        'status'            => 'pending',
        'payment_method'    => 'cod',
        'customer_name'     => 'NVC',
        'customer_phone'    => '0123456789',
        'customer_email'    => 'NVC@gmail.com',
        'customer_address'  => 'QT',
        'note'              => 'Giao nhanh',
    ]
];

global $wpdb;
$table_name = $wpdb->prefix . 'wp2023_orders';
foreach( $orders as $order ){
    $wpdb->insert($table_name,$order);
}

$order_details = [
    [
        'order_id'      => 1,
        'product_id'    => 1,
        'quantity'      => 1,
        'price'         => 10000,
    ],
    [
        'order_id'      => 1,
        'product_id'    => 2,
        'quantity'      => 1,
        'price'         => 10000,
    ],
    [
        'order_id'      => 1,
        'product_id'    => 3,
        'quantity'      => 1,
        'price'         => 10000,
    ]
];
$table_name = $wpdb->prefix . 'wp2023_order_detail';
foreach( $order_details as $order_detail ){
    $wpdb->insert($table_name,$order_detail);
}