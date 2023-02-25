<?php global $theme_uri;?>
<?php get_header();?>

<?php while ( have_posts() ) :?>
    <?php the_post(); ?>
    <!-- Blog Details Hero Begin -->
    <?php get_template_part( 'ecommerce/product/product-title' ); ?>
    <!-- Blog Details Hero End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <?php get_template_part( 'ecommerce/product/product-images' ); ?>
                </div>
                <div class="col-lg-6 col-md-6">
                    <?php get_template_part( 'ecommerce/product/product-info' ); ?>
                </div>
                <div class="col-lg-12">
                    <?php get_template_part( 'ecommerce/product/product-tabs' ); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <?php get_template_part( 'ecommerce/product/product-related' ); ?>
    <!-- Related Product Section End -->
   
<?php endwhile; ?>

<?php get_footer();?>