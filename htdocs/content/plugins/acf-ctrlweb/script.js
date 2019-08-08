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


    });
}(jQuery));