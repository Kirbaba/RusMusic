<div class="row">
    <h2><p><b> Форма для загрузки файлов </b></p></h2>
    <form action="/wp-admin/admin.php?page=music" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Название песни"><br>
        <input type="text" name="author" placeholder="Автор"><br>
        <input type="file" name="filename"><br>
        <input type="submit" value="Загрузить"><br>
    </form>

</div>

<div class="row">
    <div class="findthehit--titleline">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <h4 class="findthehit--date">Дата размещения</h4>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                <h4>Название</h4>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                <h4>Автор</h4>
            </div>
        </div>
    </div>
    <?php foreach($music as $song){ ?>
        <div class="col-lg-12">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <p class="findthehit--date"><?= date("d.m.Y",$song['dt_add']); ?></p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                <p><?= $song['name']; ?></p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4">
                <p><?= $song['author']; ?></p>
            </div>
        </div>
    <?php }?>
</div>
