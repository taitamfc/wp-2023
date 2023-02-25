<?php
global $post;
$price      = get_post_meta($post->ID,'product_price',true);
$price_sale = get_post_meta($post->ID,'product_price_sale',true);
$stock      = get_post_meta($post->ID,'product_stock',true);
$number_comments = get_comments_number($post->ID);
?>
<div class="product__details__text">
    <h3><?= get_the_title($post->ID);?></h3>
    <div class="product__details__rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>
        <span>(<?= $number_comments; ?> đánh giá)</span>
    </div>
    <div class="product__details__price"><?= number_format($price); ?></div>
    <p><?= get_the_excerpt();?></p>
    <div class="product__details__quantity">
        <div class="quantity">
            <div class="pro-qty">
                <input type="text" value="1" max="<?= $stock;?>" min="1">
            </div>
        </div>
    </div>
    <a href="#" class="primary-btn">ADD TO CARD</a>
    <ul>
        <li><b>Tình trạng kho</b> <span>Còn <?= $stock;?> sản phẩm</span></li>
        <li><b>Share on</b>
            <div class="share">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
        </li>
    </ul>
</div>