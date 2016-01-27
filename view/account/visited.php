<?php global $wpdb;

    foreach ($events as $event) {

        $data = $wpdb->get_results("SELECT * FROM `{$event['event_type']}` WHERE `id` = '{$event['event_id']}'",ARRAY_A);
    ?>
    <article class="cabinet__board__item">
        <div class="cabinet__board__item--head">
            <small><?php echo new_time($event['dt']) ?></small>
        </div>
        <div class="cabinet__board__item--title">
            <h3>Вы были в разделе «<a href="<?php echo $data[0]['link']; ?>"><?php echo $data[0]['post_title']; ?></a>»</h3>
        </div>
    </article>
<?php } ?>
