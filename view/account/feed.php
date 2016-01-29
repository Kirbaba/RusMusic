<?php global $wpdb;
foreach ($events as $event) {
        $data = $wpdb->get_results("SELECT * FROM `{$event['event_type']}` WHERE `id` = '{$event['event_id']}'",ARRAY_A);

    if($event['event_type'] == 'visited'){ ?>

        <article class="cabinet__board__item">
            <div class="cabinet__board__item--head">
                <small><?php echo new_time($event['dt']) ?></small>
            </div>
            <div class="cabinet__board__item--title">
                <h3>Вы были в разделе «<a href="<?php echo $data[0]['link']; ?>"><?php echo $data[0]['post_title']; ?></a>»</h3>
            </div>
        </article>

    <?php }else if($event['event_type'] == 'projects'){
            if($data[0]['type'] == 'mixing'){
                $title = ' в стадии сведения';
                $type =  'СВЕДЕНИЕ';
            }elseif($data[0]['type'] == 'mastering'){
                $title = ' в стадии мастеринга';
                $type =  'МАСТЕРИНГ';
            }
            $song = $wpdb->get_results("SELECT * FROM `songs` WHERE `id` = '{$data[0]['song_id']}'",ARRAY_A);

            $time_add = $data[0]['dt_add'];
            $time_end = $data[0]['dt_end'];

            $precent = intval(($current_time - $time_add)*100/($time_end - $time_add));
            if($precent > 100){
                $precent = 100;
            }
        ?>


        <article class="cabinet__board__item dropping">
            <div class="cabinet__board__item--head">
                <small><?php echo new_time($event['dt']) ?></small>
            </div>
            <span class="cabinet__board__item--percentage"><?= $precent ?>%</span>
            <div class="cabinet__board__item--title">
                <h3>«<span><?= $song[0]['name']; ?></span>» <?= $title; ?> </h3>
            </div>
            <div class="cabinet__board__item--controls">
                <span class="cabinet__board__item--controls--type"><?= $type; ?></span>
                <a href="#" class="cabinet__board__item--controls--dropbtn">
                    <i class="fa fa-angle-down"></i>
                </a>
            </div>
        </article>

<?php  } ?>

<?php } ?>
