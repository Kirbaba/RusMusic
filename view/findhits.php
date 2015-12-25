<?php foreach($music as $song){ ?>
    <div class="findthehit--itemline">
        <div class="col-lg-2 col-md-2 col-sm-2">
            <p class="findthehit--date"><?= date("d.m.Y",$song['dt_add']); ?></p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4">
            <p><?= $song['name']; ?></p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4">
            <a><?= $song['author']; ?></a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <audio id="music-<?= $song['id']; ?>" controls="controls">
                <source src="<?php bloginfo('template_directory'); ?><?= $song['path']; ?>" type="audio/mpeg" />
            </audio>
            <div class="findthehit__player">
                <a class="findthehit--controls findthehit--controls--vol" data-id="<?= $song['id']; ?>"><i class="fa fa-volume-up"></i></a>
                <a class="findthehit--controls findthehit--controls--play" data-id="<?= $song['id']; ?>"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-lg-offset-0 col-md-offset-0 col-sm-offset-2">
            <a class="findthehit--reservation">Зарезервировать</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4">
            <a class="findthehit--order">Заказать</a>
        </div>

    </div>

<?php }?>