<?php
function wp2023_theme_search($query) {
    //Là query chính và trang tax-product_cat
    if ($query->is_main_query() && is_tax('product_cat') ) {
        $order_by = isset( $_GET['order_by'] ) ? $_GET['order_by'] : 'id_desc';
        switch ($order_by) {
            case 'id_asc':
                $query->set( 'orderby', 'ID' );
                $query->set( 'order', 'ASC' );
                break;
            case 'price_desc':
                $query->set( 'orderby', 'meta_value_num' );
                $query->set( 'order', 'DESC' );
                $query->set( 'meta_key', 'product_price' );
                break;
            case 'price_asc':
                $query->set( 'orderby', 'meta_value_num' );
                $query->set( 'order', 'ASC' );
                $query->set( 'meta_key', 'product_price' );
                break;
            default:
                $query->set( 'orderby', 'ID' );
                $query->set( 'order', 'DESC' );
                break;
        }
    }
    return $query;
}
add_filter('pre_get_posts','wp2023_theme_search');