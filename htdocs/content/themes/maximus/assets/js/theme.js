(function($) {
    $(document).ready(function() {

        var screenWidth = $( window ).width();
        var heroHeight = $('.hero').outerHeight(true);


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
        if( $('body').hasClass('overflow-hidden') ) {
            setTimeout(function(){
                $('body').removeClass('overflow-hidden');
                console.log(1);
            }, 3000);
        }

        /*
        $window.scroll(function () {
            if ($window.scrollTop() >= heroHeight){
                $('#main-nav').addClass('sticky');
            }else{
                $('#main-nav').removeClass('sticky');
            }
        });
        */
        //Toggle open/close le burger menu
        //Stop le html et body de scroller
        $('#menu-btn').on('click', function () {
            $(this).toggleClass('open');
            $('#main-nav').toggleClass('open-menu');
            $('html, body').toggleClass('body-no-overflow');
        });


        $('#menu-btn').on('click', function () {
            $(this).toggleClass('open');
            $('.main-nav-outer').toggleClass('open-nav');
            $('body').toggleClass('body-no-overflow');


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
                //$('.main-nav-outer').removeClass('moveOut');
                $('.main-nav-outer').addClass('sticky');
                //$('.main-nav-outer').addClass('moveIn');
                $('.book-bottom').addClass('book-bottom-sticky');
            }else{
                $('.main-nav-outer').removeClass('sticky');
                $('.book-bottom').removeClass('book-bottom-sticky');
                //$('.main-nav-outer').removeClass('moveIn');
                //$('.main-nav-outer').addClass('moveOut');
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
        $('.btn-close-form').on('click', function (e) {
            e.preventDefault();
            $('.form-main-ctn').fadeOut(600);
        });

        $('.open-form').on('click', function (e) {
            e.preventDefault();
            $('.form-main-ctn').fadeIn(600);
        });

        //Scroll spy
        $('.animate').each(function(i) {
            var position = $(this).position();
            $(this).scrollspy({
                min: position.top - ( $( window ).height() /  2) ,
                max: position.top + $(this).height(),
                onEnter: function(element, position) {
                    $(element).find('.css-animation').addClass('do-animation');
                },
                onLeave: function(element, position) {
                }
            });
        });


    });
}(jQuery));