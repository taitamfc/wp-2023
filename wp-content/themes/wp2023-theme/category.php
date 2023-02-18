<?php global $theme_uri;?>
<?php get_header();?>
    <?php get_template_part( 'template-parts/page/breadcrumb' ); ?>
    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <?php get_sidebar();?>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <?php if ( have_posts() ): ?>
                            <?php while ( have_posts() ) : ?>
                            <?php the_post(); ?>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <?php get_template_part( 'template-parts/post/content',null,['post_id'=> get_the_id() ] ); ?>
                                </div>
                            <?php endwhile;?>
                        <?php else: ?>
                            <div class="col-lg-12">
                                <?php get_template_part( 'template-parts/post/content-none' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ( have_posts() ): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <?= get_the_posts_pagination();?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

<?php get_footer();?>