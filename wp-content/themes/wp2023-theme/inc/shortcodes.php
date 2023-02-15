<?php
add_shortcode('header__cart','wp2023_shortcode_header__cart');

//[header__cart show_wishlist=true show_cart=true show_total=true]

function wp2023_shortcode_header__cart($atts){
    $atts = shortcode_atts( array(
		'show_wishlist' => true,
		'show_cart' => true,
		'show_total' => true,
	), $atts, 'header__cart' );


    ob_start();
    ?>
    <ul>
        <?php if($atts['show_wishlist']): ?>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
        <?php endif;?>
        <?php if($atts['show_cart']): ?>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        <?php endif;?>
    </ul>
    <?php if($atts['show_total']): ?>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    <?php endif;?>
    <?php
    return ob_get_clean();
}
