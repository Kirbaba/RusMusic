<div class="singuptraining__form--choice">
    <div class="singuptraining__form--choice--name">
        <p><b><?= get_the_title($chosen->ID); ?></b></p>
    </div>
    <div class="singuptraining__form--choice--price">
        <p><b><?= get_post_meta($chosen->ID, 'price', 1); ?> р.</b></p>
    </div>
    <div class="singuptraining__form--choice--del">
        <a class="delFromChoose" data-id="<?= $chosen->ID; ?>" data-price="<?= get_post_meta($chosen->ID, 'price', 1); ?>"><i class="singupinput--cross"></i></a>
    </div>
</div>