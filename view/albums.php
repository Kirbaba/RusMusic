
    <?php  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?= get_permalink(get_the_ID()); ?>" class="passed-events__item">
                    <?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
                    <span class="passed-events__item--open"><i class="fa fa-search"></i></span>
                    <span class="passed-events__item--shadow"></span>
                </a>
            </div>

            <?php
        endwhile;
    }
    wp_reset_query(); ?>

