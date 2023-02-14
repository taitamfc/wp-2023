<?php
include_once $theme_dir.'/inc/widgets/WP2023_Recent_News.php';
include_once $theme_dir.'/inc/widgets/WP2023_Tags.php';
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
    
    // Đăng ký widget: WP2023_Recent_News
	register_widget( 'WP2023_Recent_News');
	register_widget( 'WP2023_Tags');
}