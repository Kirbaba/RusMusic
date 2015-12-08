(function( $ ) {

    var methods = {
        init : function( options ) {
            var settings = $.extend( {
                'nextClass'  : 'rhombusNext',
                'prevClass'  : 'rhombusPrev',
                'nextText'   : 'next',
                'prevText'   : 'prev',
                'duration'   : 500,
                'loop'       : true
            }, options);

            this.addClass('rhombusSlider');

            var i = 0;
            this.children().each(function(){
                $(this).addClass('rhombusSlide');
                if(i == 0){
                    $(this).addClass('rhombusFirstActive');
                }
                if(i < 3){
                    $(this).addClass('rhombusActive');
                }
                else {
                    $(this).addClass('rhombusNoActive');
                }
                i = i + 1;
                $(this).addClass('sl_' + i);
            });

            this.prepend('<a class="arrow ' + settings.nextClass + '" href="#">' + settings.nextText + '</a>');
            this.prepend('<a class="arrow ' + settings.prevClass + '" href="#">' + settings.prevText + '</a>');

            $('.' + settings.nextClass).on('click', methods.next(settings));
            $('.' + settings.prevClass).on('click', methods.prev(settings));
        },
        next : function(settings) {
            return function(){
                var el = $('.rhombusFirstActive');
                if(!el.next().hasClass('arrow') && el.next().length > 0){
                    el.next().addClass('rhombusFirstActive');
                    el.removeClass('rhombusFirstActive');
                    if(settings.loop){
                        el.clone().insertAfter('.rhombusSlide:last');
                    }
                    el.animate(
                        {
                            opacity: 0,
                            marginLeft: '-180'
                        },settings.duration);
                }
                return false;
            }

        },
        prev : function(settings) {
            return function(){
                var el = $('.rhombusFirstActive');
                if(!el.prev().hasClass('arrow')){
                    el.prev().addClass('rhombusFirstActive');
                    el.removeClass('rhombusFirstActive');
                    el.prev().animate(
                        {
                            opacity: 1,
                            marginLeft: '40px'
                        },settings.duration);
                }
                return false;
            }
        },
    };

    $.fn.rhombus = function(method) {

        // логика вызова метода
        if ( methods[method] ) {
            return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return methods.init.apply( this, arguments );
        } else {
            $.error( 'Метод с именем ' +  method + ' не существует для jQuery.tooltip' );
        }

    };
})(jQuery);