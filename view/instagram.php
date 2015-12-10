<div class="insta--wrapper">
    <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10 p0">
        <div class="slider-item-slider">
            <?php foreach($data['media'] as $item){ ?>

                <div class="slick-slider-item">
                    <img src="<?= $item['pic']; ?>" alt="">
                </div>

            <?php } ?>
        </div>
        <!-- .slider-item-slider -->
        <div class="slider-thumb-slider">
            <?php foreach($data['media'] as $item){ ?>

                <div class="slick-slider-item">
                    <img src="<?= $item['thumb']; ?>" alt="">
                </div>

            <?php } ?>
        </div>
        <!-- .slider-thumb-slider -->

    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
        <div class="insta--title">
            <a href="https://www.instagram.com/<?= $data['username']; ?>">
                <img src="<?= $data['profile_photo']; ?>" alt="">
                <span><?= $data['username']; ?></span>
            </a>

            <div class="insta--title--info">
                <p>Публикации:</p>
                <h5><?= $data['media_count']; ?></h5>
            </div>
            <div class="insta--title--info">
                <p>подписчиков:</p>
                <h5><?= $data['folowers']; ?></h5>
            </div>
            <div class="insta--title--info">
                <p>подписки:</p>
                <h5><?= $data['folowed_by']; ?></h5>
            </div>

        </div>
    </div>

</div>