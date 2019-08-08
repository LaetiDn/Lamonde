(function($) {
    $(document).ready(function() {


        //CHANGE SPEED
        var time = 8;
        var $bar,
            $slick,
            isPause,
            tick,
            percentTime;

        if($('.header-slider').length){


            $slick = $('.header-slider');
            // $slick.slick({
            //     draggable: true,
            //     adaptiveHeight: false,
            //     mobileFirst: true,
            //     pauseOnDotsHover: true,
            //
            // });

            $bar = $('.slider-progress .progress');

            $('.slider-wrapper').on({
                mouseenter: function() {
                    isPause = true;
                },
                mouseleave: function() {
                    isPause = false;
                }
            })

            function startProgressbar() {
                resetProgressbar();
                percentTime = 0;
                isPause = false;
                tick = setInterval(interval, 10);
            }

            function interval() {
                if(isPause === false) {
                    percentTime += 1 / (time+0.1);
                    $bar.css({
                        width: percentTime+"%"
                    });
                    if(percentTime >= 100)
                    {
                        $slick.slick('slickNext');
                        startProgressbar();
                    }
                }
            }


            function resetProgressbar() {
                $bar.css({
                    width: 0+'%'
                });
                clearTimeout(tick);
            }

            $('.slick-arrow').click(function(){
                resetProgressbar();
                startProgressbar();
            });

            startProgressbar();
        }


    });
}(jQuery));
