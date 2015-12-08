<section class="organizing__services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
                <h2>Мы занимаемся организацией концертов</h2>
                <?php  if( $first_query->have_posts() ) {
                while ($first_query->have_posts()) : $first_query->the_post(); ?>
                    <h4 class="current__services--title"><?= get_the_title(get_the_ID()); ?></h4>
                    <p class="current__services--description"><?= get_the_content(get_the_ID()); ?></p>
                    <?php
                endwhile;
                }
                wp_reset_query(); ?>
            </div>
            <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-xs-12 p0">
        <?php  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

                <a class="organizing__services__item" data-id="<?= get_the_ID() ?>">
                    <?php  echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
                    <span class="organizing__services__item--open"><i class="fa fa-search"></i></span>
                    <span class="organizing__services__item--name"><?= get_the_title(get_the_ID()); ?></span>
                    <span class="organizing__services__item--shadow"></span>
                </a>

            <?php
        endwhile;
        }
        wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>

