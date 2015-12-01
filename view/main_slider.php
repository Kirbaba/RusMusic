
<div class="fotorama" data-width="100%"  data-ratio="1568/658" data-fit="cover" data-arrows="false">
    <?php  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <div data-img="<?= wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>">
            <div class="container">
                <div class="enter-slideshow__text">
                    <!--че делать со слешем?! <span>/</span>-->
                    <h1><?= get_the_title(get_the_ID()); ?></h1>
                    <h4><?= get_post_meta(get_the_ID(), 'description', 1) ?></h4>
                    <?php
                    $link = get_post_meta(get_the_ID(), 'link', 1);
                    if(!empty($link)){ ?>
                        <a href="<?= get_post_meta(get_the_ID(), 'link', 1) ?>" class="enter-slideshow__text--listen"><span>СЛУШАТЬ</span></a>
                    <?php }?>
                </div>
                <?php
                    $video = get_post_meta(get_the_ID(), 'video', 1);
                    if(isset($video)) { ?>
                    <div class="enter-slideshow__video">
                        <iframe width="100%" height="100%" src="<?= get_post_meta(get_the_ID(), 'video', 1) ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                <?php }?>

            </div>
        </div>
            <?php
        endwhile;
    }
    wp_reset_query(); ?>
</div>
