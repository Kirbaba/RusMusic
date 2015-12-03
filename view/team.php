
    <?php  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="team-carousel__item">
                <div class="team-carousel__item--img">
                    <?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
                </div>
                <div class="team-carousel__item--name">
                    <a href="<?= get_permalink(get_the_ID()); ?>" class="team-carousel__item--open"><i class="fa fa-search"></i></a>
                    <div class="team-carousel__item--name--text">
                        <h3><?= get_the_title(get_the_ID()); ?></h3>
                        <p><?= get_post_meta(get_the_ID(), 'position', 1) ?></p>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
    }
    wp_reset_query(); ?>

