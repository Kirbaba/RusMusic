<?php
/*
Template Name: search
*/
?>
<?php get_header(); ?>
<section class="page-title-head company-page--head">
    <div class="container-fluid">
        <div class="row">
            <h1><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h1>
        </div>
    </div>
</section>
<section class="company-page__content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
                <div class="company-page__content--topline"></div>
                <div class="company-page__content--text">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            ?>
                            <div id="posts">
                                <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                <p><?php the_excerpt() ?></p>
                                <div>Дата добавления: <?php the_date() ?></div>
                            </div>
                        <?php endwhile; ?>
                        <?php
                    else :
                        echo "Извините по Вашему результату ничего не найдено";
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partners">
    <div class="container">
        <div class="row">
            <h4>НАШИ ПАРТНЕРЫ</h4>
            <?= do_shortcode('[partners]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
