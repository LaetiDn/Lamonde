@if( get_field('font_family','option')["value"] == "Poppins")
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
@elseif(get_field('font_family','option')["value"] == "Roboto")
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
@elseif(get_field('font_family','option')["value"] == "Lato")
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
@elseif(get_field('font_family','option')["value"] == "Montserrat")
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
@endif


<style>
    * {
        font-family: {{ get_field('font_family','option')["value"] }}, sans-serif!important;
    }
    h1 {
        color: {{ get_field('h1_grp','option')['color'] }};
        font-size: {{ get_field('h1_grp','option')['fz_phone'] }}px!important;
        line-height: {{ get_field('h1_grp','option')['fz_phone'] }}px!important;
    }
    h2 {
        color: {{ get_field('h2_grp','option')['color'] }};
        font-size: {{ get_field('h2_grp','option')['fz_phone'] }}px!important;
        line-height: {{ get_field('h2_grp','option')['fz_phone'] }}px!important;
    }
    h3 {
        color: {{ get_field('h3_grp','option')['color'] }};
        font-size: {{ get_field('h3_grp','option')['fz_phone'] }}px!important;
        line-height: {{ get_field('h3_grp','option')['fz_phone'] }}px!important;
    }
    p {
        color: {{ get_field('paragraph_grp','option')['color'] }};
        font-size: {{ get_field('paragraph_grp','option')['fz_phone'] }}px!important;
    }
    a {
        color: {{ get_field('link_grp','option')['color'] }};
    }

    @media(min-width: 1200px){
        h1 {
            font-size: {{ get_field('h1_grp','option')['fz_desktop'] }}px!important;
            line-height: {{ get_field('h1_grp','option')['fz_desktop'] }}px!important;
        }
        h2 {
            font-size: {{ get_field('h2_grp','option')['fz_desktop'] }}px!important;
            line-height: {{ get_field('h2_grp','option')['fz_desktop'] }}px!important;
        }
        h3 {
            font-size: {{ get_field('h3_grp','option')['fz_desktop'] }}px!important;
            line-height: {{ get_field('h3_grp','option')['fz_desktop'] }}px!important;
        }
        p {
            font-size: {{ get_field('paragraph_grp','option')['fz_desktop'] }}px!important;
        }
    }

    /*** MENU ***/
    #menu-btn span {
        background-color:{{ get_field('span_grp','option')['color'] }};
    }

    .menu a, input[type='submit'] {
        color: {{ get_field('link_grp','option')['color'] }};
        font-size: {{ get_field('link_grp','option')['fz_phone'] }}px!important;
    }

    .nav .menu-item a {
        color: {{ get_field('menu_grp','option')['color'] }};
    }

    .nav .menu-item:hover > a, a:focus {
        color: {{ get_field('link_grp','option')['color_hover'] }}!important;
    }

    .menu .current-menu-item a {
        color: {{ get_field('menu_grp','option')['color_hover'] }};
    }
    .menu .menu-item:before {
        color: {{ get_field('span_grp','option')['color'] }};
    }

    .menu .sub-menu .menu-item:first-of-type{
        border-top-color:{{ get_field('span_grp','option')['color'] }}!important;
    }
    .menu .sub-menu .menu-item:last-of-type{
        border-bottom-color:{{ get_field('span_grp','option')['color'] }}!important;
    }
    .menu-item-has-children a:after {
        border:1px solid {{ get_field('link_grp','option')['color'] }};
    }


    /** MENU STICKY **/
    .sticky .nav .menu-item a {
        color: {{ get_field('menu_grp','option')['color_sticky'] }};
    }
    .sticky .nav .menu-item:hover a {
        color: {{ get_field('menu_grp','option')['color_sticky_hover'] }}!important;
    }

    span {
        color: {{ get_field('span_grp','option')['color'] }};
        font-size: {{ get_field('span_grp','option')['fz_phone'] }}px!important;
    }


    /** FOOTER **/
    .book-bottom-sticky a{
        background-color: {{ get_field('footer_bottom_link_bg_color_lr','option') }};
    }
    .bottom-nav li:nth-child(odd) {
        background-color: {{ get_field('footer_bottom_link_bg_color_lr','option') }};
    }
    .bottom-nav li:nth-child(even) {
        background-color: {{ get_field('footer_bottom_link_bg_color_mid','option') }};
    }

    #footer p {
        color: {{ get_field('footer_text_color','option') }};
    }

    .cta, input[type="submit"] {
        color: {{ get_field('button_grp', 'option')['text_color'] }};
        background-color: {{ get_field('button_grp', 'option')['bg_color'] }};
        border: 1px solid {{ get_field('button_grp', 'option')['border_color'] }};
        transition: all 0.6s ease;
    }
    .cta:hover, input[type="submit"]:hover{
        color: {{ get_field('button_grp', 'option')['text_color_transition'] }};
        background-color: {{ get_field('button_grp', 'option')['bg_color_transition'] }};
        border: 1px solid {{ get_field('button_grp', 'option')['border_color_transition'] }};
    }

    .

    /*** HERO ***/
    .hero .overlay {
        background-color: {{ get_field('hero','option')['overlay_color'] }};
        opacity:{{ get_field('hero','option')['overlay_opacity'] }};

    }

    /*** SLIDER ***/
    .slider-progress .progress {
        background: {{ get_field('span_grp','option')['color'] }};
    }

    .slick-prev:before{
        content: url("{{ get_field('hero','option')['arrow_left']['url'] }}")!important;
    }
    .slick-next:before{
        content: url("{{ get_field('hero','option')['arrow_right']['url'] }}")!important;
    }


    /** ELEMENTS **/
    .icon {
        color: {{ get_field('span_grp','option')['color'] }};
    }
    .lang {
        border:1px solid {{ get_field('span_grp','option')['color'] }};
    }


    /** FORM **/
    .form-input {
        border-bottom: 1px solid {{ get_field('span_grp','option')['color'] }};
    }

    .form-title h2 {
        color: {{ get_field('form_title_color','option') }};
    }
    .wpcf7 label, .wpcf7-list-item-label{
        color: {{ get_field('form_label_color','option') }};
    }
    .wpcf7 input[type="text"], .wpcf7 input[type="email"], .wpcf7 textarea {
        border-color: {{ get_field('form_border_color','option') }};
    }

    [type="checkbox"]:checked + .wpcf7-list-item-label:after,
    [type="checkbox"]:not(:checked) + .wpcf7-list-item-label:after {
        background: {{ get_field('span_grp','option')['color'] }};
    }


    /** ANIMATIONS **/
    .block-background-title .title-ctn:before, .block-background-title .title-ctn:after {
        background-color: {{ get_field('span_grp','option')['color'] }};
    }



</style>
