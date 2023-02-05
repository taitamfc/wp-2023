<?php
// Product Screen

// Đăng ký metabox cho sản phẩm
add_action( 'add_meta_boxes', 'wp2023_meta_boxe_product' );
// Xử lý khi lưu sản phẩm
add_action( 'save_post', 'wp2023_save_post_product', 10,3 );

function wp2023_save_post_product($post_id, $post, $update){
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return;
    }
    if( isset($_POST['product_price']) ){
        update_post_meta($post_id,'product_price',$_POST['product_price']);
    }
    if( isset($_POST['product_price']) ){
        update_post_meta($post_id,'product_price_sale',$_POST['product_price_sale']);
    }
    if( isset($_POST['product_price']) ){
        update_post_meta($post_id,'product_stock',$_POST['product_stock']);
    }
}

function wp2023_meta_boxe_product() {
	add_meta_box(
        'wp2023_product_info',                 // Unique ID
        'Product Info',      // Box title
        'meta_boxe_product',  // Content callback, must be of type callable
        'product'                           // Post type
    );
}
function meta_boxe_product(){
    include_once WP2023_PATH.'includes/templates/meta_boxe_product.php';
}

// Category Screen

// Đăng ký metabox cho danh mục khi thêm mới
add_action( 'product_cat_add_form_fields', 'wp2023_meta_boxe_product_cat_add' );

// Đăng ký metabox cho danh mục khi sửa
add_action( 'product_cat_edit_form_fields', 'wp2023_meta_boxe_product_cat_edit' );

// Xử lý khi lưu term
add_action( 'edit_product_cat',   'wp2023_meta_boxe_product_cat_save' );
add_action( 'create_product_cat', 'wp2023_meta_boxe_product_cat_save' );

function wp2023_meta_boxe_product_cat_add() {
    include_once WP2023_PATH.'includes/templates/meta_boxe_product_cat_add.php';
}
function wp2023_meta_boxe_product_cat_edit($term) {
    include_once WP2023_PATH.'includes/templates/meta_boxe_product_cat_edit.php';
}
function wp2023_meta_boxe_product_cat_save($term_id){
    $image = $_POST['image'];
    update_term_meta( $term_id, 'image', $image );
}