<?php
include_once $theme_dir.'/inc/widgets/WP2023_Recent_News.php';
include_once $theme_dir.'/inc/widgets/WP2023_Tags.php';
include_once $theme_dir.'/inc/widgets/WP2023_About.php';
include_once $theme_dir.'/inc/widgets/WP2023_Newsletter.php';
include_once $theme_dir.'/inc/widgets/WP2023_Social.php';
include_once $theme_dir.'/inc/widgets/WP2023_ProductCategories.php';
add_action( 'widgets_init', 'wp2023_register_widgets' );
function wp2023_register_widgets() {

    // Đăng ký sidebar
    register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'wp2023-theme' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wp2023-theme' ),
		'before_widget' => '<div id="%1$s" class="blog__sidebar__item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	) );

	// Đăng ký sidebar footer-1
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'wp2023-theme' ),
		'id'            => 'footer-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wp2023-theme' ),
		'before_widget' => '<div id="%1$s" class="footer__widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widgettitle">',
		'after_title'   => '</h6>',
	) );
	// Đăng ký sidebar footer-2
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'wp2023-theme' ),
		'id'            => 'footer-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wp2023-theme' ),
		'before_widget' => '<div id="%1$s" class="footer__widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widgettitle">',
		'after_title'   => '</h6>',
	) );
	// Đăng ký sidebar footer-3
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'wp2023-theme' ),
		'id'            => 'footer-3',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wp2023-theme' ),
		'before_widget' => '<div id="%1$s" class="footer__widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widgettitle">',
		'after_title'   => '</h6>',
	) );

	// Đăng ký sidebar
    register_sidebar( array(
		'name'          => __( 'Shop Sidebar', 'wp2023-theme' ),
		'id'            => 'shop-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'wp2023-theme' ),
		'before_widget' => '<div id="%1$s" class="sidebar__item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	) );
    
    // Đăng ký các widgets
	register_widget( 'WP2023_Recent_News');
	register_widget( 'WP2023_Tags');
	register_widget( 'WP2023_About');
	register_widget( 'WP2023_Newsletter');
	register_widget( 'WP2023_Social');

	register_widget( 'WP2023_ProductCategories');

}