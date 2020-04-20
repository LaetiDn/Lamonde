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


    });
}(jQuery));
