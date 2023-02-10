<?php
// Khi đã đăng nhập
add_action("wp_ajax_wp2023_order_change_status", "wp2023_order_change_status");
// Khi chưa đăng nhập
add_action("wp_ajax_nopriv_wp2023_order_change_status", "wp2023_order_change_status");

function wp2023_order_change_status(){

    $nonce   = $_REQUEST['nonce'];
    if( !wp_verify_nonce($nonce,'wp2023_order_status') ){
        $return = [
            'success' => false
        ];
        echo wp_json_encode($return);
        die();
    }

    
    $order_id   = $_REQUEST['order_id'];
    $status     = $_REQUEST['status'];
    $objWp2023Order = new Wp2023Order();
    $objWp2023Order->change_status($order_id,$status);
    $return = [
        'success' => true
    ];
    echo json_encode($return);
    die();
}