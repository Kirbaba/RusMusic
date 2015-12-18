
    <?php  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

           	<div class="page-partners__item col-sm-6 col-xs-12">
                <div class="page-partners__item--img">
                    <?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
                </div>
                <p><?php the_content(); ?></p>
                <div class="page-partners__item--link">
                    <a href="<?= get_post_meta(get_the_ID(), 'link', 1) ?>"><?= get_post_meta(get_the_ID(), 'link', 1) ?></a>
                </div>
            </div>

            <?php
        endwhile;
    }
    wp_reset_query(); ?>

