<?php global $theme_uri;?>
<?php
$args = [
    'post_type' => 'product',
    'numberposts' => '8',
];
$latest_products = get_posts($args);
?>
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <?php foreach( $latest_products as $latest_product ):
                                $price      = get_post_meta($latest_product->ID,'product_price',true);
                                $price_sale = get_post_meta($latest_product->ID,'product_price_sale',true);
                                $product_image = wp_get_attachment_image_url( get_post_thumbnail_id($latest_product->ID) );
                            ?>
                            <a href="<?= get_the_permalink($latest_product->ID);?>" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="<?= $product_image; ?>" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6><?= get_the_title($latest_product->ID);?></h6>
                                    <span><?= number_format($price);?></span>
                                </div>
                            </a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                        <?php foreach( $latest_products as $latest_product ):
                                $price      = get_post_meta($latest_product->ID,'product_price',true);
                                $price_sale = get_post_meta($latest_product->ID,'product_price_sale',true);
                                $product_image = wp_get_attachment_image_url( get_post_thumbnail_id($latest_product->ID) );
                            ?>
                            <a href="<?= get_the_permalink($latest_product->ID);?>" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="<?= $product_image; ?>" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6><?= get_the_title($latest_product->ID);?></h6>
                                    <span><?= number_format($price);?></span>
                                </div>
                            </a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <?php foreach( $latest_products as $latest_product ):
                                $price      = get_post_meta($latest_product->ID,'product_price',true);
                                $price_sale = get_post_meta($latest_product->ID,'product_price_sale',true);
                                $product_image = wp_get_attachment_image_url( get_post_thumbnail_id($latest_product->ID) );
                            ?>
                            <a href="<?= get_the_permalink($latest_product->ID);?>" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="<?= $product_image; ?>" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6><?= get_the_title($latest_product->ID);?></h6>
                                    <span><?= number_format($price);?></span>
                                </div>
                            </a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>