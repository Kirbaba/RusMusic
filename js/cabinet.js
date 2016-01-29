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
});
