//личный кабинет
jQuery(function() {
    jQuery(document).on('click','.js-song-modal', function(){
       var type = jQuery(this).attr('data-type');
        jQuery('input[name="js-song-type"]').val(type);
        jQuery('#sendSong').modal('show');
        return false;
    });

    jQuery(document).on('click','.js-send-song', function(){
        var name = jQuery('input[name="js-song-name"]').val();
        var link = jQuery('input[name="js-song-link"]').val();
        var type = jQuery('input[name="js-song-type"]').val();
        var user = jQuery('input[name="js-song-user"]').val();

        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=sendSong&name=" + name + "&link=" + link + "&type=" + type + "&user=" + user, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function (data) {
                //модалка если понадобится
                jQuery('input[name="js-song-name"]').val("");
                jQuery('input[name="js-song-link"]').val("");

                jQuery('#sendSong').modal('hide');
            }
        });
        return false;
    });

    jQuery(document).on('click','.js-send-new-message', function(){
        var proj_id = jQuery(this).attr('data-proj-id');
        var block = jQuery(this).parent();
        var message = block.children('textarea').val();

        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=sendMessage&proj_id=" + proj_id + "&message=" + message, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function (data) {
                location.reload();
            }
        });
        return false;
    });

    jQuery(document).on('click','.cabinet__history--btn', function(){
        var user_id = jQuery(this).attr('data-user-id');
        var time = jQuery(this).attr('data-time');
        var offset = jQuery(this).attr('data-offset');


        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=getFeed&user_id=" + user_id + "&time=" + time + "&offset=" + offset, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function (data) {
                jQuery('.cabinet__board').append(data);
                jQuery('.cabinet__history--btn').attr('data-offset',parseInt(offset)+10);
            }
        });
        return false;
    });
});
