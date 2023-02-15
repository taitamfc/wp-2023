<?php
global $theme_prefix,$theme_uri,$theme_dir;
$theme_prefix   = 'wp2023_theme';
$theme_uri      = get_template_directory_uri();
$theme_dir      = get_template_directory();
$theme_version  = '1.0';

// Đăng ký các thành phần hỗ trợ cho theme
include_once $theme_dir.'/inc/theme_support.php';
//Đăng ký style,javascript
include_once $theme_dir.'/inc/scripts.php';
//Đăng ký widget
include_once $theme_dir.'/inc/widgets.php';
//Đăng ký shortcode cho theme
include_once $theme_dir.'/inc/shortcodes.php';

if( !function_exists('dd') ){
    function dd( $data ){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
