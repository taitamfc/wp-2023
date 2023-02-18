<?php global $theme_uri;?>
<?php
    $categories = get_terms([
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
    ]);
?>
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php foreach( $categories as $category ):?>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="<?= $theme_uri; ?>/assets/img/categories/cat-1.jpg">
                        <h5><a href="<?= get_term_link($category);?>"><?= $category->name;?></a></h5>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>