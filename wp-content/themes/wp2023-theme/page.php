<?php global $theme_uri;?>
<?php get_header();?>
    <?php get_template_part( 'template-parts/page/breadcrumb' ); ?>
    <!-- page Section Begin -->
    <section class="page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <?php while ( have_posts() ) :?>
                    <?php the_post(); ?>
                    <?php the_content();?>
                <?php endwhile;?>
                </div>
            </div>
        </div>
        
    </section>
    <!-- page Section End -->
<?php get_footer();?>