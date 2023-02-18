<?php global $theme_uri;?>
<?php
$args = [
    'post_type' => 'post',
    'numberposts' => '3',
];
$last_blogs = get_posts($args);
?>
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach( $last_blogs as $last_blog ):?>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <?php get_template_part( 'template-parts/post/content',null,['post_id'=>$last_blog->ID] ); ?>
            </div>
            <?php endforeach;?>
            
        </div>
    </div>
</section>