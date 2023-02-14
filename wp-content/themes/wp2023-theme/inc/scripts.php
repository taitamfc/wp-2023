<?php
add_action( 'wp_enqueue_scripts', $theme_prefix.'_register_styles' );
//Đăng ký javascript
add_action( 'wp_enqueue_scripts', $theme_prefix.'_register_scripts' );

function wp2023_theme_register_styles(){
    global $theme_prefix,$theme_uri,$theme_version;
    // Đăng ký file style.css
    wp_enqueue_style( $theme_prefix.'-style', $theme_uri, array(), $theme_version );

    // Đăng ký các file css của theme
    wp_enqueue_style( $theme_prefix.'-google-fonts-css', 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-bootstrap-css', $theme_uri . '/assets/css/bootstrap.min.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-awesome-css', $theme_uri . '/assets/css/font-awesome.min.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-bootstrap-css', $theme_uri . '/assets/css/bootstrap.min.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-elegant-css', $theme_uri . '/assets/css/elegant-icons.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-nice-select-css', $theme_uri . '/assets/css/nice-select.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-elegant-css', $theme_uri . '/assets/css/elegant-icons.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-jquery-css', $theme_uri . '/assets/css/jquery-ui.min.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-owl-css', $theme_uri . '/assets/css/owl.carousel.min.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-slicknav-css', $theme_uri . '/assets/css/slicknav.min.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-slicknav-css', $theme_uri . '/assets/css/slicknav.min.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-style-css', $theme_uri . '/assets/css/style.css', null, $theme_version);
    wp_enqueue_style( $theme_prefix.'-custom-css', $theme_uri . '/assets/custom.css', null, $theme_version);
}
function wp2023_theme_register_scripts(){
	global $theme_prefix,$theme_uri,$theme_version;
    wp_enqueue_script( $theme_prefix.'bootstrap-js', $theme_uri.'/assets/js/bootstrap.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( $theme_prefix.'nice-select-js', $theme_uri.'/assets/js/jquery.nice-select.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( $theme_prefix.'jquery-ui-js', $theme_uri.'/assets/js/jquery-ui.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( $theme_prefix.'jquery.slicknav-js', $theme_uri.'/assets/js/jquery.slicknav.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( $theme_prefix.'mixitup-js', $theme_uri.'/assets/js/mixitup.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( $theme_prefix.'owl-js', $theme_uri.'/assets/js/owl.carousel.min.js', array('jquery'), $theme_version, true );
    wp_enqueue_script( $theme_prefix.'main-js', $theme_uri.'/assets/js/main.js', array('jquery'), $theme_version, true );
    
}