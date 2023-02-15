<?php 
global $theme_uri;
$custom_logo = get_theme_mod('custom_logo');
?>
<div class="header__logo">
    <a href="<?= home_url();?>">
        <img src="<?= wp_get_attachment_image_url($custom_logo); ?>" alt="">
    </a>
</div>