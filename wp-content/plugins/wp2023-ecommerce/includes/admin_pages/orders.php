<?php
$order_id   = isset( $_GET['order_id'] ) ? $_GET['order_id'] : 0;
$action     = isset( $_GET['action'] ) ? $_GET['action'] : '';
$postIds       = isset( $_GET['post'] ) ? $_GET['post'] : [];
$objWp2023Order = new Wp2023Order();
if($action){
    switch ($action) {
        case 'trash':
            if( count($postIds) ){
                foreach( $postIds as $postId ){
                    $objWp2023Order->trash($postId);
                }
            }
            // Chuyển hướng lại về trang list orders
            wp2023_redirect('admin.php?page=wp2023-orders');
            exit();
            break;
    }
    
}


if($order_id){
    include WP2023_PATH.'includes/admin_pages/orders/edit.php';
}else{
    include WP2023_PATH.'includes/admin_pages/orders/list.php';
}