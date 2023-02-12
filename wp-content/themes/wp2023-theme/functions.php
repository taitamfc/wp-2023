<?php
global $theme_prefix,$theme_uri;
$theme_prefix     = 'wp2023_theme';
$theme_uri      	= get_template_directory_uri().'/assets';
$theme_version  	= '1.0';

// Đăng ký các thành phần hỗ trợ cho theme
add_action( 'after_setup_theme', $theme_prefix.'_theme_support' );
//Đăng ký style
add_action( 'wp_enqueue_scripts', $theme_prefix.'_register_styles' );
//Đăng ký javascript
add_action( 'wp_enqueue_scripts', $theme_prefix.'_register_scripts' );
//Đăng ký menu

//Đăng ký widget

//Cấu hình theme

function wp2023_theme_theme_support(){
	
}
function wp2023_theme_register_styles(){
    
}
function wp2023_theme_register_scripts(){
	
}