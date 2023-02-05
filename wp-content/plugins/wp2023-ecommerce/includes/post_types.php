<?php
// Đăng ký loại bài viết sản phẩm
function wp2023_custom_post_type() {
	register_post_type('product',
		array(
			'labels'      => array(
				'name'          => __('Sản phẩm', 'wp2023-ecommerce'),
				'singular_name' => __('Sản phẩm', 'wp2023-ecommerce'),
			),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array( 'slug' => 'products' ),
            'supports' => array( 'title', 'editor', 'thumbnail','excerpt'),
		)
	);
}
add_action('init', 'wp2023_custom_post_type');
// Đăng ký taxonomy để lưu các danh mục sản phẩm
function wp2023_register_taxonomy_category() {
    $labels = array(
        'name'              => _x( 'Các Danh Mục', 'taxonomy general name' ),
        'singular_name'     => _x( 'Danh Mục', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Danh Mục' ),
        'all_items'         => __( 'All Danh Mục' ),
        'parent_item'       => __( 'Parent Danh Mục' ),
        'parent_item_colon' => __( 'Parent Danh Mục:' ),
        'edit_item'         => __( 'Edit Danh Mục' ),
        'update_item'       => __( 'Update Danh Mục' ),
        'add_new_item'      => __( 'Add New Danh Mục' ),
        'new_item_name'     => __( 'New Danh Mục Name' ),
        'menu_name'         => __( 'Danh Mục' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'danh-muc' ],
    );
    register_taxonomy( 'product_cat', [ 'product' ], $args );
}
add_action( 'init', 'wp2023_register_taxonomy_category' );