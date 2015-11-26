
/*-------------GOOGLE MAPS-----------------*/

/*function initialize() {

    var myLatlng = new google.maps.LatLng(59.934602, 30.334607);
    var mapOptions = {
        center: new google.maps.LatLng(59.934602, 30.334607),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title:"Ditlogistic"
    });
}

function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;
*/


jQuery(function($) {

    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });
});

//jQuery( '.header__navigation--menu li:has(ul)' ).doubleTapToGo();
jQuery(function ($) {
    $('.hamburger-slim').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('hamburger-slim--active');
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

jQuery(function () {

    jQuery('.responsive').slick({
        dots: false,
        infinite: false,
        autoplay: true,
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
                breakpoint: 600,
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