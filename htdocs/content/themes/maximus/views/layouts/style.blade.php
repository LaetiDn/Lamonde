@if( get_field('font_family','option')["value"] == "Poppins")
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
@endif


<style>
    body {
        font-family: 'Poppins', sans-serif!important;
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
        a {
            font-size: {{ get_field('link_grp','option')['fz_desktop'] }}px!important;
        }
    }

    /*** MENU ***/

    #menu-btn span {
        background-color:{{ get_field('span_grp','option')['color'] }};
    }

    a, input[type='submit'] {
        color: {{ get_field('link_grp','option')['color'] }};
        font-size: {{ get_field('link_grp','option')['fz_phone'] }}px!important;
    }
    a:hover, a:focus {
        color: {{ get_field('link_grp','option')['color_hover'] }};
    }

    .nav .menu-item a {
        color: {{ get_field('menu_grp','option')['color'] }};
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

    .nav .menu-item a:hover {
        color: {{ get_field('menu_grp','option')['color_hover'] }};
    }
    .sticky .nav .menu-item a {
        color: {{ get_field('menu_grp','option')['color_sticky'] }};
    }
    .sticky .nav .menu-item a:hover {
        color: {{ get_field('menu_grp','option')['color_sticky_hover'] }};
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

    .block-background-title .title-ctn {
        border-top: 1px solid {{ get_field('span_grp','option')['color'] }};
        border-bottom: 1px solid {{ get_field('span_grp','option')['color'] }};
    }

    /*** SLIDER ***/
    .slider-progress .progress {
        background: {{ get_field('span_grp','option')['color'] }};
    }

    .slick-prev:before{
        content: url("{{ get_field('header_slider_arrows','option')['arrow_left']['url'] }}")!important;
    }
    .slick-next:before{
        content: url("{{ get_field('header_slider_arrows','option')['arrow_right']['url'] }}")!important;
    }


    .icon {
        color: {{ get_field('span_grp','option')['color'] }};
    }
    .lang {
        border:1px solid {{ get_field('span_grp','option')['color'] }};
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


    /*
        - rond du lang switcher
        - slider progress bar
        - les lignes pour le block background title
        - fleche font awesome des discovers
        - en mobile la barre en bas

    */
</style>
