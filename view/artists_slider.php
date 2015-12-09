
    <?php $i=0;  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <?php if($i == 0){ ?>

            <div class="producing-carousel__item">
                <div class="producing-carousel__item--wrap">

        <?php } ?>


                    <a href="<?= get_permalink(get_the_ID()); ?>" class="artist--link">
                        <?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
                        <span class="artist--link--open"><i class="fa fa-search"></i></span>
                        <span class="artist--link--shadow"></span>
                        <span class="artist--link--name "><?= get_the_title(get_the_ID()); ?></span>
                    </a>


        <?php $i++; if($i == 3){ ?>
                </div>
            </div>
        <?php $i=0; }?>

            <?php
        endwhile;
        while ($i < 3 ){ ?>
            <a href="#" class="artist--link">
                <img src="<?php bloginfo('template_directory'); ?>/img/IMAGE-PLACEHOLDER.png" alt="">
                <span class="artist--link--open"><i class="fa fa-search"></i></span>
                <span class="artist--link--shadow"></span>
                <span class="artist--link--name "></span>
            </a>
       <?php $i++; if($i == 3){ ?>
              </div>
            </div>
           <?php }}
    }
    wp_reset_query(); ?>

