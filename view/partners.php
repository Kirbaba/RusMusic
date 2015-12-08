
    <?php $i = 0;  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php if($i == 0){  ?>
                <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-4 col-xs-6">
            <?php $i++; }elseif($i == 1){ ?>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?php $i++; }elseif($i == 2){ ?>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <?php $i++; }elseif($i == 3){ ?>
                <div class="col-lg-2 col-md-2 col-sm-4 col-sm-offset-2 col-lg-offset-0 col-md-offset-0 col-xs-6">
            <?php $i++; }elseif($i == 4){ ?>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 col-xs-offset-3 col-sm-offset-0">
            <?php $i++; }?>
                <div class="partners__item">
                    <?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
                </div>
            </div>

            <?php
        endwhile;
    }
    wp_reset_query(); ?>

