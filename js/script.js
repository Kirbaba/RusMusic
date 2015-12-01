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

