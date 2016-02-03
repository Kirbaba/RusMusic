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
        //prn($data);
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
                <a class="cabinet__board__item--controls--dropbtn" data-toggle="collapse" href="#collapse<?= $data[0]['id']; ?>" aria-expanded="false" aria-controls="collapse<?= $data[0]['id']; ?>">
                    <i class="fa fa-angle-down"></i>
                </a>
            </div>
        </article>
        <div class="cabinet__board__item--open collapse" id="collapse<?= $data[0]['id']; ?>">
        <?php
        //получаем сообщения по ид проекта
            $messages = $wpdb->get_results("SELECT * FROM `messages` WHERE `proj_id`= '{$data[0]['id']}'",ARRAY_A);

        //если нет сообщений то выводим форму

        if(empty($messages)){ ?>

            <article class="cabinet__board__item from-admin">
                <div class="cabinet__board__item--comment">
                    <p>Задать вопрос:</p>
                    <textarea  name="mes" class="cabinet__board__item--comment--text"></textarea>
                    <a href="#" class="cabinet__board__item--comment--reply js-send-new-message" data-proj-id="<?= $data[0]['id']; ?>" >ОТПРАВИТЬ</a>
                </div>
            </article>

        <?php } else {?>
            <div class="collapse" id="answer<?= $data[0]['id']; ?>">
                <article class="cabinet__board__item from-admin">
                    <div class="cabinet__board__item--comment">
                        <p>Задать вопрос:</p>
                        <textarea  name="mes" class="cabinet__board__item--comment--text"></textarea>
                        <a href="#" class="cabinet__board__item--comment--reply js-send-new-message" data-proj-id="<?= $data[0]['id']; ?>" >ОТПРАВИТЬ</a>
                    </div>
                </article>
            </div>
            <?php foreach ($messages as $message) {
                    if($message['from_user_id'] == 1){ ?>
                        <article class="cabinet__board__item from-admin">
                            <div class="cabinet__board__item--head">
                                <small><?php echo new_time($message['dt']); ?></small>
                                <small>ОТВЕТ ОТ АДМИНИСТРАТОРА</small>
                            </div>
                            <div class="cabinet__board__item--comment ">
                                <p><?= $message['message']; ?></p>
                                <a class="cabinet__board__item--comment--reply" data-toggle="collapse" href="#answer<?= $data[0]['id']; ?>" aria-expanded="false" aria-controls="answer<?= $data[0]['id']; ?>">ОТВЕТИТЬ</a>
                            </div>
                        </article>
                <?php }else{?>
                        <article class="cabinet__board__item  from-user">
                            <div class="cabinet__board__item--head">
                                <small><?php echo new_time($message['dt']); ?></small>
                                <small>ОТВЕТ ОТ <?php $user = get_user_by('id',$message['from_user_id']);  echo $user->nickname; ?>1</small>
                            </div>
                            <div class="cabinet__board__item--comment">
                                <p><?= $message['message']; ?></p>
                            </div>
                        </article>
                    <?php }} ?>

            <?php } ?>
            </div>
<?php  } ?>

<?php } ?>
