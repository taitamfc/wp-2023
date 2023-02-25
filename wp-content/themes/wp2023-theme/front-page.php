<?php global $theme_uri;?>
    <?php get_header();?>

    <!-- Categories Section Begin -->
    <?php get_template_part( 'template-parts/home/categories__slider' ); ?>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <?php get_template_part( 'template-parts/home/featured_product' ); ?>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <?php get_template_part( 'template-parts/home/banner' ); ?>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <?php //get_template_part( 'template-parts/home/latest_product' ); ?>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <?php get_template_part( 'template-parts/home/blog' ); ?>
    <!-- Blog Section End -->

<?php get_footer();?>