<select class="registration-input--large singuptraining__form--select" name="singuptraining-course">
    <option disabled selected>Выберите курс</option>
    <?php  if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <option value="<?= get_the_ID() ?>"><?= get_the_title(get_the_ID())?><?= get_post_meta(get_the_ID(), 'price', 1) ?> р.</option>
            <?php
        endwhile;
    }
    wp_reset_query(); ?>
</select>