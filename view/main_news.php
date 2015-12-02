<?php if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="news__item">
            <div class="news__item--img">
                <?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
            </div>
            <div class="news__item--soc">
                <a href="http://www.facebook.com/sharer.php?u=<?= get_permalink(get_the_ID()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="http://vk.com/share.php?url=<?= get_permalink(get_the_ID()); ?>" target="_blank"><i class="fa fa-vk"></i></a>
            </div>
            <div class="news__item--title">
                <p><?= get_the_date("d.m.Y",get_the_ID()); ?></p>
                <h4><?= get_the_title(get_the_ID()); ?></h4>
                <a href="<?= get_permalink(get_the_ID()); ?>"> ПОДРОБНЕЕ</a>
            </div>
        </div>

    <?php
endwhile;
} wp_reset_query(); ?>