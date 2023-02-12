<?php global $theme_uri;?>
<div class="blog__item">
    <div class="blog__item__pic">
        <?= get_the_post_thumbnail(get_the_id(), 'medium'); ?>
    </div>
    <div class="blog__item__text">
        <ul>
            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
            <li><i class="fa fa-comment-o"></i> 5</li>
        </ul>
        <h5><a href="<?= get_the_permalink();?>"><?= get_the_title();?></a></h5>
        <p><?= get_the_excerpt();?></p>
        <a href="<?= get_the_permalink();?>" class="blog__btn">
            READ MORE <span class="arrow_right"></span>
        </a>
    </div>
</div>