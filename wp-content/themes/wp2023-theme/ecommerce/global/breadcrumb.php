<?php global $theme_uri;?>
<?php
    $page_name = 'Sản phẩm';
    if( is_tax() ){
        $term = get_queried_object();
        $page_name = $term->name;
    }
?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= $theme_uri; ?>/assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?= $page_name; ?></h2>
                    <div class="breadcrumb__option">
                        <a href="<?= home_url();?>">Home</a>
                        <span><?= $page_name; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->