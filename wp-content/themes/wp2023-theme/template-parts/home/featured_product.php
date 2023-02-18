<?php global $theme_uri;?>
<?php
$args = [
    'post_type' => 'product',
    'numberposts' => '8',
];
$products = get_posts($args);
?>

<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php foreach( $products as $product ):
                $price      = get_post_meta($product->ID,'product_price',true);
                $price_sale = get_post_meta($product->ID,'product_price_sale',true);
                $product_image = wp_get_attachment_image_url( get_post_thumbnail_id($product->ID) );
                ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mix">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="<?= $product_image; ?>">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="<?= get_the_permalink($product->ID);?>"><?= get_the_title($product->ID);?></a></h6>
                        <h5><?= number_format($price);?></h5>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>