
(function($) {
    $(document).ready(function() {

        var screenWidth = $( window ).width();
        var heroHeight = $('.hero').outerHeight(true);

        //Force trigger animations when loading page
        $(window).scrollTop($(window).scrollTop()+1);

        if(screenWidth <= 992) {
            $('body').addClass('width-mobile');
        }else {
            $('body').removeClass('width-mobile');
        }

        function isMobileDevice() {
            return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
        };


        if(isMobileDevice()){
            $('body').addClass('is-mobile');
        }

        $( window ).resize(function() {
            var screenWidth = $( window ).width();
            if(screenWidth <= 992) {
                $('body').addClass('width-mobile');
            }else {
                $('body').removeClass('width-mobile');
            }

        });

        //Pour le page loader?
        var pageLoader = $('.loader');
        if(pageLoader.length) {
            var time = pageLoader.data('time');
            $('body').addClass('body-no-overflow');
            setTimeout(function(){
                $('body').removeClass('body-no-overflow');
                pageLoader.remove();
            }, time);
        }

        // $('body').on('click', '#open-newsletter', function (e) {
        //     console.log('plop');
        //     $('.sticky-newsletter').toggleClass('show-newsletter');
        // });


        $('#menu-btn').on('click', function () {
            $(this).toggleClass('open');
            if($('.header').hasClass('open')){
                setTimeout(function(){
                    $('.header').removeClass('open');
                }, 400);
                $('.site-navigation').removeClass('show');
            }else{
                $('.header').addClass('open');
                $('.site-navigation').addClass('show');
            }

            $('html, body').toggleClass('body-no-overflow');
        });


        //Ouvre le sous menu quand on click sur un lien parent
        $('.menu-item-has-children').on('click', function () {
            if( $('body').hasClass('width-mobile') ){
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

        $('.menu-item-has-children').on('click', function () {
            if( $('body').hasClass('is-mobile') ){
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

        $("body").on("click", ".carrousel-nav__button", function (e) {
            var index = $(this).data('index');
            $(this).parent().addClass('active').siblings().removeClass('active');
            $(this).parents('.image-ctn').find('.slide0' + index).addClass('active').siblings().removeClass('active');
        });

    });
}(jQuery));

document.querySelectorAll('.counter').forEach(item => {

    var element = item.getElementsByClassName('counter__things')[0];
    var number = element.dataset.number;

    var count = 1;
    var idInterval = setInterval(function() {
    element.innerHTML = ++count;
    count++;
    if ( count >= number) {
      clearInterval(idInterval);
    }
  }, 10);
});

document.querySelectorAll('.event-link').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();

        var index = item.dataset.index;
        removeClassFromSiblings(item.parentNode, 'active');
        removeClassFromSiblings(item.parentNode, 'selected');

        addClassFromSiblings(item.parentNode, 'no-hover')

        item.parentNode.classList.add('selected');
        setTimeout(function() {
            removeClassFromSiblings(item.parentNode, 'no-hover')
        }, 1000);
        setTimeout(function() {
            item.parentNode.classList.add('active');
        }, 1300);

        //Il faut remove tous les show-img avant
        var image = document.getElementById('img-' + index);
        removeClassFromSiblings(image, 'active');
        image.classList.add('active');
    })
});

const animation = [...document.querySelectorAll('.animate')];

const optionsAnimation = {
    rootMargin: '0px',
    threshold: 0.50
}

const callbackAnimation = (entries) => {
    entries.forEach((entry) => {
        if (entry.intersectionRatio >= optionsAnimation.threshold) {
            //var animation = entry.target.dataset.animation;
            //if(animation){
              entry.target.querySelector('.css-animation').classList.add('do-animation');
            //}
        }
    })
}

const observerAnimation = new IntersectionObserver(callbackAnimation, optionsAnimation)
animation.forEach((animation, index) => {
    observerAnimation.observe(animation)
})


//Helpers
function removeClassFromSiblings(elem, classToRemove) {
    var sibling = elem.parentNode.firstChild;
    while (sibling) {
        if (sibling.nodeType === 1 && sibling !== elem) {
            sibling.classList.remove(classToRemove);
        }
        sibling = sibling.nextSibling
    }
};

function addClassFromSiblings(elem, classToRemove) {
    var sibling = elem.parentNode.firstChild;
    while (sibling) {
        if (sibling.nodeType === 1 && sibling !== elem) {
            sibling.classList.add(classToRemove);
        }
        sibling = sibling.nextSibling
    }
};
