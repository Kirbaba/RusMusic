jQuery(function($) {

    // $(window).scroll(function() {
    //     if($(this).scrollTop() != 0) {
    //         $('#toTop').fadeIn();
    //     } else {
    //         $('#toTop').fadeOut();
    //     }
    // });
    // $('#toTop').click(function() {
    //     $('body,html').animate({scrollTop: 0}, 1000);
    // });

    // $('.smoothScroll').click(function(event) {
    //     event.preventDefault();
    //     var href=$(this).attr('href');
    //     var target=$(href);
    //     var top=target.offset().top;
    //     $('html,body').animate({
    //         scrollTop: top
    //     }, 1000);
    // });
});

jQuery(function ($) {
    $('.hamburger-slim').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('hamburger-slim--active');
    });

    $('.team-carousel__item--open').on('hover', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('team-carousel__item--name--shadow');
    });
   
    $('.header__search--butt').on('click', function (e) {        
        if ( $('.header__search--input').hasClass('header__search--input--active')){
             $('.header__search--input').animate({
                width: '0'
            }, 300, function(){
                $('.header__search--input').css({
                    display: 'none',
                    'border-width': '0'
                });                 
            });
             $('.header__search--butt').animate({
                'margin-left': '50px'
            });                      
        }
        else {
            $('.header__search--input').css({
                display: 'block',
                'border-width': '1'
            });             
            $('.header__search--input').animate({
                width: '130px'
            }, 300);
            $('.header__search--butt').animate({
                'margin-left': '0'
            });
        };
        $('.header__search--input').toggleClass('header__search--input--active');
    });
});

jQuery(function ($) {

    jQuery('.responsive').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        adaptiveHeight: true,
        speed: 300,
        arrows: true,        
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    // jQuery('.producing-carousel').slick({
    //     dots: false,
    //     infinite: true,
    //     autoplay: true,
    //     speed: 300,
    //     arrows: true,        
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     focusOnSelect: false,
    //     centerMode: true,
    //     responsive: [
    //         {
    //             breakpoint: 1024,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 3,
    //                 infinite: true,
    //                 dots: false
    //             }
    //         },
    //         {
    //             breakpoint: 770,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 2
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         }
    //         // You can unslick at a given breakpoint now by adding:
    //         // settings: "unslick"
    //         // instead of a settings object
    //     ]
    // });

    jQuery('.team-carousel').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        focusOnSelect: false,
        speed: 300,
        arrows: true,        
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

     $('.slider-item-slider').on('init', function(event, slick, currentSlide){
      var nrCurrentSlide = slick.currentSlide + 1, // din cauza ca e array si incepe de la 0
          totalSlidesPerPage = nrCurrentSlide + 3; // daca ai 5 thumb-uri pe pagina pui + 4
      $('.controls').html(nrCurrentSlide + " - " + totalSlidesPerPage + " of " + slick.slideCount);
    });

    $('.slider-thumb-slider').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: '.slider-item-slider',
      dots: false,
      arrows: true,
      focusOnSelect: false,
      infinite: true,
      centerMode: true
    });

    $('.slider-item-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: '.slider-thumb-slider',
      infinite: true,
      centerMode: true,
       responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

     jQuery('.stars-slick').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        speed: 300,
        arrows: true,        
        slidesToShow: 5,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

});

jQuery(window).scroll(function() {
    if (jQuery(".header").offset().top > 50) {
        jQuery(".header").addClass("header--onScroll");
        jQuery(".header__navigation--menu").addClass("header__navigation--menu--onScroll");              
    } else {
        jQuery(".header").removeClass("header--onScroll");  
        jQuery(".header__navigation--menu").removeClass("header__navigation--menu--onScroll");       
    }
});

(function($){
    $(window).load(function(){
        $(".team__bio").mCustomScrollbar({
            theme:"dark"
        });
    });
})(jQuery);

jQuery(document).ready(function($){
    $('.producing-carousel').rhombus({
        nextText: '',
        prevText: '',
        duration: 500,
        loop: true
    });
});

//обратная связь
jQuery(function($) {

    $(document).on('click','.contacts--but', function(){
        var mail = $('input[name="contact-email"]').val();
        var name = $('input[name="contact-name"]').val();
        var site = $('input[name="contact-site"]').val();
        var message = $('textarea[name="contact-message"]').val();

        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=sendFeedback&name=" + name + "&mail=" + mail + "&message=" + message, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function (data) {
                //модалка если понадобится
                if(data == "1"){
                    //$('#thankModal').modal('show');
                }else{
                    //$('#thankModal').modal('show');
                }

                $('input[name="contact-name"]').val("");
                $('input[name="contact-email"]').val("");
                $('input[name="contact-site"]').val("");
                $('input[name="contact-message"]').text("");
            }
        });
        return false;
    });

});

//переключение между услугами
jQuery(function($) {

    $(document).on('click','.organizing__services__item', function(){
        var id = $(this).attr('data-id');

        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=currentService&id=" + id, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function (data) {
                var post = JSON.parse(data);
               //console.log(post);
                $('.current__services--title').text(post.post_title);
                $('.current__services--description').text(post.post_content);
            }
        });
        return false;
    });


});

//регистрация
jQuery(function($) {

    $(document).on('click','.registerUser', function(){
        var username = $('input[name="registration-username"]').val();
        var lastname = $('input[name="registration-lastname"]').val();
        var email = $('input[name="registration-email"]').val();
        var gender = $('input[name="registration-gender"]').val();
        var password_first = $('input[name="registration-password"]').val();
        var password_check = $('input[name="registration-password-check"]').val();

        if(password_first == password_check){
            var password = password_first;
        }

        if(username != '' && email != '' && password != ''){
            jQuery.ajax({
                url: ajaxurl, //url, к которому обращаемся
                type: "POST",
                data: "action=createUser&username=" + username + "&lastname=" + lastname +"&email=" + email + "&gender=" + gender +"&password=" + password, //данные, которые передаем. Обязательно для action указываем имя нашего хука
                success: function (data) {
                    alert('Спасибо за регистрацию');
                   // console.log(data);
                    //модалка если понадобится
                    if(data == "1"){
                        //$('#thankModal').modal('show');
                    }else{
                        //$('#thankModal').modal('show');
                    }

                    $('input[name="registration-username"]').val("");
                    $('input[name="registration-lastname"]').val("");
                    $('input[name="registration-email"]').val("");
                    $('input[name="registration-password"]').val("");
                    $('input[name="registration-password-check"]').val("");
                }
            });
        }
        return false;
    });
});

//начнем работу
jQuery(function($) {

    $(document).on('click','.registerOnline', function(){
        //var username = $('input[name="onlinework-name"]').val();
        //var email = $('input[name="onlinework-email"]').val();
        //var password = $('input[name="onlinework-password"]').val();
        //var radio = $('input[name="onlinework-radio"]').val();
        //
        //
        //if(password_first == password_check){
        //    var password = password_first;
        //}
        //
        //if(username != '' && email != '' && password != ''){
        //    jQuery.ajax({
        //        url: ajaxurl, //url, к которому обращаемся
        //        type: "POST",
        //        data: "action=createUser&username=" + username + "&lastname=" + lastname +"&email=" + email + "&gender=" + gender +"&password=" + password, //данные, которые передаем. Обязательно для action указываем имя нашего хука
        //        success: function (data) {
        //            alert('Спасибо за регистрацию');
        //            // console.log(data);
        //            //модалка если понадобится
        //            if(data == "1"){
        //                //$('#thankModal').modal('show');
        //            }else{
        //                //$('#thankModal').modal('show');
        //            }
        //
        //            $('input[name="registration-username"]').val("");
        //            $('input[name="registration-lastname"]').val("");
        //            $('input[name="registration-email"]').val("");
        //            $('input[name="registration-password"]').val("");
        //            $('input[name="registration-password-check"]').val("");
        //        }
        //    });
        //}
        //return false;
    });
});

//стань звездой
jQuery(function($) {

    $(document).on('click','input[name="becomeastar-input--button"]', function(){
        alert("pognali");
        var name = $('input[name="becomeastar-name"]').val();
        var email = $('input[name="becomeastar-email"]').val();
        var city = $('input[name="becomeastar-city"]').val();
        var fb = $('input[name="becomeastar-facebook"]').val();
        var inst = $('input[name="becomeastar-instagram"]').val();
        var site = $('input[name="becomeastar-site"]').val();
        var link = $('input[name="becomeastar-songs-place"]').val();
        
        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=becomeastar&name=" + name + "&mail=" + email + "&city=" + city + "&facebook=" + fb + "&instagram=" + inst + "&site="+site+"&link="+link, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function (data) {
                //модалка если понадобится
                if(data == "1"){
                    //$('#thankModal').modal('show');
                }else{
                    //$('#thankModal').modal('show');
                }

                $('input[name="becomeastar-name"]').val("");
                $('input[name="becomeastar-email"]').val("");
                $('input[name="becomeastar-city"]').val("");
                $('input[name="becomeastar-facebook"]').text("");
                $('input[name="becomeastar-instagram"]').text("");
                $('input[name="becomeastar-site"]').text("");
                $('input[name="becomeastar-songs-place"]').text("");
            }
        });
        return false;
    });

});

//Отправка демки
jQuery(function($) {
    $('.demos--but').click(function(){
        $("input[name='demos-username']").click();
    });

    $(document).on('click','.demoSend', function(){

        var templateUrl = path.templateUrl;
        // console.log(templateUrl);
        $('.demoSend').before('<div class="preLoader"><img src="'+templateUrl+'/img/ajax-loader.gif"></div>');


        var name = $('input[name="demos-name"]').val();
        var email = $('input[name="demos-email"]').val();
        var city = $('input[name="demos-city"]').val();
        var link = $('input[name="demos-songs-link"]').val();

//data to be sent to server
        var m_data = new FormData();
        m_data.append( 'action', 'demosend');
        m_data.append( 'user_name', name);
        m_data.append( 'user_email', email);
        m_data.append( 'city', city);
        m_data.append( 'link', link);
        m_data.append( 'file_attach', $('input[name="demos-username"]')[0].files[0]);

        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            contentType: false,
            processData: false,
            type: "POST",
            dataType:'json',
            data: m_data, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function (data) {
                //load json data from server and output message
                $('.preLoader').html(data.text);

            }
        });
        return false;
    });

});

//запись на курсы
jQuery(function($) {

    $(document).on('change','.singuptraining__form--select', function(){
        var selected = $(this).val();

        if(!$('a[data-id="'+selected+'"').length){
            jQuery.ajax({
                url: ajaxurl, //url, к которому обращаемся
                type: "POST",
                data: "action=addcourse&id=" + selected, //данные, которые передаем. Обязательно для action указываем имя нашего хука
                success: function (data) {
                    //модалка если понадобится
                    $('.chosenCourses').append(data);
                    var total = 0;
                    $.each($('.delFromChoose'), function(){
                        var price = $(this).attr('data-price');
                        price = price.replace(/\s+/g, '');
                        total += parseInt(price);
                        //console.log(price);
                    });
                    $('.totalCourses').text(total);
                }
            });
        }
        return false;
    });

    $(document).on('click', '.delFromChoose', function(){
        var id = $(this).attr('data-id');
        var block = $(this).parent().parent();
        block.remove();

        var total = 0;
        $.each($('.delFromChoose'), function(){
            var price = $(this).attr('data-price');
            price = price.replace(/\s+/g, '');
            total += parseInt(price);
            //console.log(price);
        });
        $('.totalCourses').text(total);
        return false;
    });

    $(document).on('click','.sendCourse',function(){
        var name = $('input[name="singuptraining-name"]').val();
        var mail = $('input[name="singuptraining-email"]').val();
        var phone = $('input[name="singuptraining-phone"]').val();

        var total = 0;
        $.each($('.delFromChoose'), function(){
            var price = $(this).attr('data-price');
            price = price.replace(/\s+/g, '');
            total += parseInt(price);
            //console.log(price);
        });
        $('.totalCourses').text(total);

        var courses = [];
        $.each($('.singuptraining__form--choice--name'), function(){
            courses.push($(this).text());
        });


        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=sendcourses&name=" + name + "&mail=" + mail + "&courses=" + courses + "&total=" + total + "&phone="+phone, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function (data) {
               $('.becomeastar__questionnaire--but').before("<h4>Спасибо! С Вами скоро свяжутся</h4>");
            }
        });
        return false;
    });
});

//найди свой хит
jQuery(function($) {

    $(document).on('click', '.findthehit--controls--play', function(){
        var id = $(this).attr('data-id');
        window.player = document.getElementById('music-'+id);

        if(player.paused){
            player.play();
            this.innerHTML = '<i class="fa fa-pause"></i>';
        } else {
            player.pause();
            this.innerHTML = '<i class="fa fa-play"></i>';
        }
        return false;
    });
    $(document).on('click', '.findthehit--controls--vol', function(){
        var id = $(this).attr('data-id');
        window.player = document.getElementById('music-'+id);

        if(player.muted){
            player.muted = false;
            this.innerHTML = '<i class="fa fa-volume-up"></i>';
        } else {
            player.muted = true;
            this.innerHTML = '<i class="fa fa-volume-off"></i>';
        }
        return false
    });
});


jQuery( document ).ready(function() {
    (function($) {
      var fold = $('.cabinet__sidebar--menu--bottom').prev();
        
      
        fold.on('click', function() {
            var $this = $(this);
            $this.next().toggle('300');
        });
    })(jQuery);
});