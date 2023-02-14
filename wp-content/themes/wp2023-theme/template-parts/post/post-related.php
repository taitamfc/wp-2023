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
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <?= get_the_post_thumbnail($related_post->ID, 'medium'); ?>
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> <?= get_the_date('',$related_post->ID);?></li>
                            <li><i class="fa fa-comment-o"></i> <?= get_comments_number($related_post->ID);?></li>
                        </ul>
                        <h5><a href="<?= get_the_permalink($related_post->ID);?>"><?= get_the_title($related_post->ID);?></a></h5>
                        <p><?= get_the_excerpt($related_post->ID);?></p>
                        <a href="<?= get_the_permalink($related_post->ID);?>" class="blog__btn">
                            READ MORE <span class="arrow_right"></span>
                        </a>
                    </div>
                </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>