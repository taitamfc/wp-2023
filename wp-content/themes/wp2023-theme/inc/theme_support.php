<?php
add_action( 'after_setup_theme', $theme_prefix.'_theme_support' );
//Cấu hình theme

function wp2023_theme_theme_support(){
    // Đăng ký metabox hình ảnh cho bài viết
    add_theme_support( 'post-thumbnails' );
    // Đăng ký các vị trí menu
	register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary menu', 'wp2023-theme' ),
            'footer'  => esc_html__( 'Social menu', 'wp2023-theme' ),
        )
    );
}