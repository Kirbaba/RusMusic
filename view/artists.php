
    <?php  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <a href="<?= get_permalink(get_the_ID()); ?>" class="stars-slider__item">
                <?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
                <span class="stars-slider__item--text">
                    <h4><?= get_post_meta(get_the_ID(), 'position', 1) ?></h4>
                    <h5><?= get_the_title(get_the_ID()); ?></h5>
                </span>
            </a>

            <?php
        endwhile;
    }
    wp_reset_query(); ?>

