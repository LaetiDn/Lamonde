(function($) {
    $(document).ready(function() {


        var btnStyle = $("*[data-name='button_grp'] select").val();

        if(btnStyle === 'arrow-anim'){
            $('.button-preview .cta').addClass(btnStyle);
        }else{
            $('.button-preview .cta.hover').addClass(btnStyle);
        }

        $("body").on("change", "*[data-name='button_grp'] select", function (e) {
            var classToRemove = $('.button-preview .cta.hover').attr('class').split(' ')[2];

            var btnStyle = $("*[data-name='button_grp'] select").val();
            if(btnStyle === 'arrow-anim'){
                $('.button-preview .cta').removeClass(classToRemove).addClass(btnStyle);
            }else{
                $('.button-preview .cta.hover').removeClass(classToRemove).addClass(btnStyle);
            }

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


    });
}(jQuery));
