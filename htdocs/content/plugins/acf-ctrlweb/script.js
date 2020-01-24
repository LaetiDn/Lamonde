(function($) {
    $(document).ready(function() {

        $('body').on('click', '.preview-animation .acf-input .play', function (e) {
            console.log('click');
            e.preventDefault();
            var time = $(this).data('time');
            $(this).parents('.acf-input').toggleClass('play');

            setTimeout(function(){
                $('.acf-input.play').removeClass('play');
            }, time);
        });

        
        $('.button-preview .cta').css('border-color', color);

        $( ".acf-color-picker input" ).change(function() {
            var color = $(this).val();
            var name = $(this).parent().parent().parent().data('name');
            switch(name) {
              case 'text_color':
                $('.button-preview .cta').css('color', color);
                break;
              case 'bg_color':
                $('.button-preview .cta').css('background-color', color);
                break;
              case 'border_color':
              $('.button-preview .cta').css('border-color', color);
              break;

              default:
                // code block
            }

            console.log(color);
            //$('.preview-button .cta').css('color', color);

        });
    });
}(jQuery));
