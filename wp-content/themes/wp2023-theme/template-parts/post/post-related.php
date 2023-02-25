<?php global $theme_uri;?>
<?php
global $post;
$cats = get_the_category($post->ID);
$cat_ids = [];
if( count( $cats ) ){
    foreach( $cats as $cat ){
        $cat_ids[] = $cat->term_id; 
    }
}
$cat_ids = implode(',',$cat_ids);
$args = [
    'numberposts' => 3,
    'category' => $cat_ids,
    'exclude' => [$post->ID],
    'post_type' => 'post'
];
$related_posts = get_posts($args);
?>
<section class="related-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related-blog-title">
                    <h2>Post You May Like</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach( $related_posts as $related_post ):?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                <?php get_template_part( 'template-parts/post/content',null,['post_id'=> $related_post->ID ] ); ?>
                
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>