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
            'vertical'  => esc_html__( 'Vertical menu', 'wp2023-theme' ),
        )
    );
    // Logo
    add_theme_support(
        'custom-logo',
        array(
            'height'               => 50,
            'width'                => 119,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );
}

// https://developer.wordpress.org/themes/customize-api/customizer-objects/

add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {
    $wp_customize->add_section( 'theme_header' , array(
        'title'      => 'Header Setting',
        'priority'   => 30,
    ) );
        $wp_customize->add_setting( 'header__top__left' , array(
            'default'     => '',
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_control( 
            new WP_Customize_Control( $wp_customize, 'header__top__left', array(
                'label'      => 'Header Top Lef',
                'section'    => 'theme_header',
                'settings'   => 'header__top__left',
                'type'       => 'textarea',
            )) 
        );

        $wp_customize->add_setting( 'header__top__right__social' , array(
            'default'     => '',
            'transport'   => 'refresh',
        ) );
        $wp_customize->add_control( 
            new WP_Customize_Control( $wp_customize, 'header__top__right__social', array(
                'label'      => 'Header Right Social',
                'section'    => 'theme_header',
                'settings'   => 'header__top__right__social',
                'type'       => 'textarea',
            )) 
        );
}