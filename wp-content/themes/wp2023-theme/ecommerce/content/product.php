<?php global $theme_uri;?>
<?php
$post_id = $args['post_id'];
$image      = wp_get_attachment_image_url( get_post_thumbnail_id($post_id) );
$price      = get_post_meta($post_id,'product_price',true);
$price_sale = get_post_meta($post_id,'product_price_sale',true);
$stock      = get_post_meta($post_id,'product_stock',true);
$number_comments = get_comments_number($post_id);
?>
<div class="product__item">
    <div class="product__item__pic set-bg" data-setbg="<?= $image; ?>">
        <ul class="product__item__pic__hover">
            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
    </div>
    <div class="product__item__text">
        <h6><a href="<?= get_the_permalink($post_id);?>"><?= get_the_title($post_id);?></a></h6>
        <h5><?= number_format($price); ?></h5>
    </div>
</div>