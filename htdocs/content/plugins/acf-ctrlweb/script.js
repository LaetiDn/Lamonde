(function($) {
    $(document).ready(function() {

        $('body').on('click', '.preview-animation .acf-input .play', function (e) {
            e.preventDefault();
            var time = $(this).data('time');
            $(this).parents('.acf-input').toggleClass('play');

            setTimeout(function(){
                $('.acf-input.play').removeClass('play');
            }, time);
        });


        var duration = $("*[data-name='duration'] input").val();
        var easing = $("*[data-name='easing'] select").val();
        var delay = $("*[data-name='delay'] input").val();

        $('.do-animation h1').each(function( index ) {
            $(this).css({
                'animation-duration' : duration+'s',
                'animation-timing-function' : easing,
                'animation-delay' : delay+'s',
            })
        });

        $("*[data-name='button_grp'] .acf-color-picker input").each(function( index ) {

            var color = $(this).val();
            var name = $(this).parent().parent().parent().data('name');
            switch(name) {
              case 'text_color':
                $('.button-preview .cta.default').not('.hover').css('color', color);
                break;
              case 'bg_color':
                $('.button-preview .cta.default').not('.hover').css('background-color', color);
                break;
              case 'border_color':
                $('.button-preview .cta.default').not('.hover').css('border-color', color);
              break;
              case 'text_color_transition':
                  $('.button-preview .cta').not('.default').css("color", color)

              break;
              case 'bg_color_transition':
                $('.button-preview .cta').not('.default').css("backgroundColor",color)
                case 'border_color_transition':
              $('.button-preview .cta').not('.default').css("borderColor",color)

              default:
                // code block
            }

        });


        $( "*[data-name='button_grp'] .acf-color-picker input" ).change(function() {
            var color = $(this).val();
            var name = $(this).parent().parent().parent().data('name');
            switch(name) {
              case 'text_color':
                $('.button-preview .cta').not('.hover').css('color', color);
                break;
              case 'bg_color':
                $('.button-preview .cta').not('.hover').css('background-color', color);
                break;
              case 'border_color':
              $('.button-preview .cta').not('.hover').css('border-color', color);
              break;
              case 'text_color_transition':
                  $('.button-preview .cta').not('.default').css("color", color)

              break;
              case 'bg_color_transition':
              $('.button-preview .cta').not('.default').css("backgroundColor",color)
              case 'border_color_transition':
            $('.button-preview .cta').not('.default').css("borderColor",color)
              default:
                // code block
            }
        });

        $( "*[data-name='font_family'] select" ).change(function() {
            var fontFamily = $(this).val();
            console.log(fontFamily);
            $('.typo-preview p').css('font-family', fontFamily);
        });

    });
}(jQuery));
