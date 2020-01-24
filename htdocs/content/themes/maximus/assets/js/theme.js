(function($) {
    $(document).ready(function() {

        var screenWidth = $( window ).width();
        var heroHeight = $('.hero').outerHeight(true);

        //Force trigger animations when loading page
        $(window).scrollTop($(window).scrollTop()+1);

        if(screenWidth <= 1200) {
            $('body').addClass('in-mobile');
        }else {
            $('body').removeClass('in-mobile');
        }

        $( window ).resize(function() {
            var screenWidth = $( window ).width();
            if(screenWidth <= 1200) {
                $('body').addClass('in-mobile');
            }else {
                $('body').removeClass('in-mobile');
            }

            //Refermer le menu mobile lors du resize car cause parfois des glitch quand on passe de mobile a desktop
            if($('#menu-btn').hasClass("open")) {
                $('#menu-btn').trigger('click');
            }
        });

        //Pour le page loader?
        var pageLoader = $('.loader');
        if(pageLoader.length) {
            var time = pageLoader.data('time');
            $('body').addClass('overflow-hidden');
            setTimeout(function(){
                $('body').removeClass('overflow-hidden');
                pageLoader.remove();
            }, time);
        }

        $('body').on('click', '#open-newsletter', function (e) {
            console.log('plop');
            $('.sticky-newsletter').toggleClass('show-newsletter');
        });


        $('#menu-btn').on('click', function () {
            $(this).toggleClass('open');
            $('.main-nav-outer').toggleClass('open-nav');
            $('html, body').toggleClass('body-no-overflow');;
        });


        //Ouvre le sous menu quand on click sur un lien parent
        $('.menu-item-has-children').on('click', function () {
            if( $('body').hasClass('in-mobile') ){
                $(this).find('.sub-menu').toggleClass('open-menu');
            }
        });

        /* SOURCE : https://codeable.io/wordpress-accessibility-creating-accessible-dropdown-menus */
            // Focus styles for menus when using keyboard navigation
            $('nav[role="navigation"]').focus();
            // Properly update the ARIA states on focus (keyboard) and mouse over events
            $( '[role="menubar"]' ).on( 'focus.aria  mouseenter.aria', '[aria-haspopup="true"]', function ( ev ) {
                $( ev.currentTarget ).attr( 'aria-expanded', true );
            } );

            // Properly update the ARIA states on blur (keyboard) and mouse out events
            $( '[role="menubar"]' ).on( 'blur.aria  mouseleave.aria', '[aria-haspopup="true"]', function ( ev ) {
                $( ev.currentTarget ).attr( 'aria-expanded', false );
            } );

        var $window = $(window);
        $window.scroll(function () {
            if ($window.scrollTop() >= heroHeight){
                $('.main-nav-outer').addClass('sticky');
                $('.book-bottom').addClass('book-bottom-sticky');
            }else{
                $('.main-nav-outer').removeClass('sticky');
                $('.book-bottom').removeClass('book-bottom-sticky');
            }
        });


        ///****** PHOTOS GALERIE SECTION  ********///

        var photoNb = 0;
        var clickCounter = 1;

        //OPEN AND CLOSE PHOTO GALERY LIGHTBOX
        $('body').on('click', '.album-inner-ctn .full-link', function (e) {
            e.preventDefault();
            var photoNb = 0;
            var albumID = $(this).attr('data-albumid');
            $('.photo-ctn.' + albumID).addClass('active-album');
            $('.photo-ctn.' + albumID + ' .photo-1').addClass('active-photo');

            $('.album-lightbox-main-ctn').fadeIn(600);
            $('body').addClass('body-no-overflow');


            $('.photo-ctn.' + albumID + ' .a-photo').each(function() {
                photoNb++;
            });
            var i = 0;
            while (i < 4) {
                //Show only the first 3 photo
                var src = $('.photo-ctn.' + albumID).find('.photo-'+i+ ' .galery-photo').attr('data-delaysrc');
                $('.photo-ctn.' + albumID).find('.photo-'+i+ ' .galery-photo').attr("src", src);
                i++;
            }

            //Show the number of photo in the album
            $('.photo-ctn.' + albumID).find('.photoNb').html(photoNb);

        });

        /* CLOSING LIGHTBOX */

        function closeLightBox(){
            $('.album-lightbox-main-ctn').fadeOut(600);
            $('.photo-ctn.active-album').removeClass('active-album');
            $('body').removeClass('body-no-overflow');
            clickCounter = 1;
        }

        //Close lightbox when clicking outside carrousel
        $('.close-lightbox').on('click', function (e) {
            e.preventDefault();
            closeLightBox();
        });

        //Close lightbox when clicking on X
        $('.close-carrousel').on('click', function (e) {
            e.preventDefault();
            closeLightBox();
        });

        //Close lightbox when hitting esc key
        $( document ).on( 'keydown', function ( e ) {
            if ( e.keyCode === 27 ) { // ESC
                var lb = $('.lightBox');
                if(lb){
                    closeLightBox();
                }
            }
        });


        /**********************************/



        $('.next-arrow').on('click', function (e) {
            e.preventDefault();

            var photoNb = 0;
            $('.photo-ctn.active-album .a-photo').each(function() {
                photoNb++;
            });

            clickCounter++;
            if(clickCounter > photoNb){
                clickCounter = 1;
            }

            //Remove active from current and give it to next photo
            $('.active-album .active-photo').removeClass('active-photo');
            $('.active-album .photo-' + clickCounter ).addClass('active-photo');

            //Afficher la prochaine photo
            var src = $('.active-album .photo-' + (clickCounter+1) + ' .galery-photo').attr('data-delaysrc');
            $('.active-album .photo-' + (clickCounter+1) + ' .galery-photo').attr("src", src);


        });

        $('.prev-arrow').on('click', function (e) {
            e.preventDefault();

            var photoNb = 0;
            $('.photo-ctn.active-album .a-photo').each(function() {
                photoNb++;
            });

            clickCounter--;
            if(clickCounter < 1 ){
                clickCounter = photoNb;
            }

            $('.active-album .active-photo').removeClass('active-photo');
            $('.active-album .photo-' + clickCounter ).addClass('active-photo');

            //Afficher la prochaine photo
            var src = $('.active-album .photo-' + (clickCounter) + ' .galery-photo').attr('data-delaysrc');
            $('.active-album .photo-' + (clickCounter) + ' .galery-photo').attr("src", src);

        });

        $('.menu-item-has-children').on('click', function () {
            if( $('body').hasClass('in-mobile') ){
                $(this).find('.sub-menu').toggleClass('open-sub-menu');
            }

        });

        //Open and close form reservation
        $("body").on("click", ".btn-close-form", function (e) {
            e.preventDefault();
            $('.form-main-ctn').fadeOut(600);
        });

        $("body").on("click", ".close-lightbox", function (e) {
            e.preventDefault();
            $('.form-main-ctn').fadeOut(600);
        });
        $("body").on("click", ".open-form", function (e) {
            e.preventDefault();
            $('.form-main-ctn').fadeIn(600);
        });

    });
}(jQuery));

const animation = [...document.querySelectorAll('.animate')];

const optionsAnimation = {
    rootMargin: '0px',
    threshold: 0.50
}

const callbackAnimation = (entries) => {
    entries.forEach((entry) => {
        if (entry.intersectionRatio >= optionsAnimation.threshold) {
            //var animation = entry.target.dataset.animation;
            if(animation){
              entry.target.querySelector('.css-animation').classList.add('do-animation');
            }
        }
    })
}

const observerAnimation = new IntersectionObserver(callbackAnimation, optionsAnimation)
animation.forEach((animation, index) => {
    observerAnimation.observe(animation)
})
