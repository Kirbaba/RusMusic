
    <?php  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>


            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="training__content__item">
                    <div class="training__content__item--img">
                        <?= get_the_post_thumbnail(get_the_ID(),'medium'); ?>
                    </div>
                    <div class="training__content__item--title">
                        <h4><?= get_the_title(get_the_ID()); ?></h4>
                    </div>
                    <div class="training__content__item--description">
                        <p><?= get_post_meta(get_the_ID(), 'description', 1) ?></p>
                    </div>
                    <div class="training__content__item--buttons">
                        <a href="<?= get_the_permalink(get_the_ID()) ?>" class="training__content__item--buttons--more">Подробнее</a>
                        <a href="<?= get_site_url() ?>/signuptraining/?id=<?= get_the_ID() ?>" class="training__content__item--buttons--sign">Записаться</a>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
    }
    wp_reset_query(); ?>
