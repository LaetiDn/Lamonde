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
    body {
        font-family: {{ get_field('font_family','option')["value"] }}, sans-serif;
    }
    h1 {
        color: {{ get_field('h1_grp','option')['color'] }};
        font-size: {{ get_field('h1_grp','option')['fz_phone'] }}px;
        line-height: {{ get_field('h1_grp','option')['fz_phone'] }}px;
    }
    h2 {
        color: {{ get_field('h2_grp','option')['color'] }};
        font-size: {{ get_field('h2_grp','option')['fz_phone'] }}px;
        line-height: {{ get_field('h2_grp','option')['fz_phone'] }}px;
    }
    h3 {
        color: {{ get_field('h3_grp','option')['color'] }};
        font-size: {{ get_field('h3_grp','option')['fz_phone'] }}px;
        line-height: {{ get_field('h3_grp','option')['fz_phone'] }}px;
    }
    p {
        color: {{ get_field('paragraph_grp','option')['color'] }};
        font-size: {{ get_field('paragraph_grp','option')['fz_phone'] }}px;
        line-height: {{ get_field('paragraph_grp','option')['lh_phone'] }}px!important;
    }
    a {
        text-decoration: none;
        color: {{ get_field('link_grp','option')['color'] }};
        transition: color 0.6s ease;
    }

    a:not(.cta):focus, a:not(.cta):hover {
        color: {{ get_field('link_grp','option')['color_hover'] }}!important;
    }

    @media(min-width: 1200px){
        h1 {
            font-size: {{ get_field('h1_grp','option')['fz_desktop'] }}px;
            line-height: {{ get_field('h1_grp','option')['fz_desktop'] }}px;
        }
        h2 {
            font-size: {{ get_field('h2_grp','option')['fz_desktop'] }}px;
            line-height: {{ get_field('h2_grp','option')['fz_desktop'] }}px;
        }
        h3 {
            font-size: {{ get_field('h3_grp','option')['fz_desktop'] }}px;
            line-height: {{ get_field('h3_grp','option')['fz_desktop'] }}px;
        }
        p {
            font-size: {{ get_field('paragraph_grp','option')['fz_desktop'] }}px;
            line-height: {{ get_field('paragraph_grp','option')['lh_desktop'] }}px;
        }
    }

    /*** MENU ***/
    #menu-btn span {
        background-color:{{ get_field('span_grp','option')['color'] }};
    }

    .menu a{
        color: {{ get_field('link_grp','option')['color'] }};
        font-size: {{ get_field('link_grp','option')['fz_phone'] }}px;
    }

    .nav .menu-item a {
        color: {{ get_field('menu_grp','option')['color'] }}!important;
    }

    .nav .menu-item:hover > a,  a:not(.cta):focus, a:not(.cta):hover {
        color: {{ get_field('menu_grp','option')['color_hover'] }}!important;
    }

    .menu .current-menu-item a {
        color: {{ get_field('menu_grp','option')['color_hover'] }}!important;
    }
    .menu .menu-item:before {
        background-color: {{ get_field('menu_grp','option')['color_hover'] }}!important;
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


    /* SPANS */
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

    .cta{
        color: {{ get_field('button_grp', 'option')['text_color'] }};
        background-color: {{ get_field('button_grp', 'option')['bg_color'] }};
        border: 1px solid {{ get_field('button_grp', 'option')['border_color'] }};
        transition: all 0.6s ease;
    }
    .cta:hover{
        color: {{ get_field('button_grp', 'option')['text_color_transition'] }};
        background-color: {{ get_field('button_grp', 'option')['bg_color_transition'] }};
        border: 1px solid {{ get_field('button_grp', 'option')['border_color_transition'] }};
    }
    .block-discover .cta {
      background-color: {{ get_field('button_grp', 'option')['bg_color'] }};
    }
    .block-discover .cta i{
        color: {{ get_field('button_grp', 'option')['text_color'] }};
        transition: all 0.6s ease;
    }
    .block-discover .cta:hover i{
        color: {{ get_field('button_grp', 'option')['text_color_transition'] }};
    }

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
    .yikes-easy-mc-submit-button {
        color: {{ get_field('button_grp', 'option')['text_color'] }};
        background-color: {{ get_field('button_grp', 'option')['bg_color'] }};
        border: 1px solid {{ get_field('button_grp', 'option')['border_color'] }};
        transition: all 0.6s ease;
    }

    .yikes-easy-mc-submit-button:hover{
        color: {{ get_field('button_grp', 'option')['text_color_transition'] }};
        background-color: {{ get_field('button_grp', 'option')['bg_color_transition'] }};
        border: 1px solid {{ get_field('button_grp', 'option')['border_color_transition'] }};
    }

    .yikes-mailchimp-submit-button-span-text {
        color: {{ get_field('button_grp', 'option')['text_color'] }};
        transition: color 0.6s ease;
    }
    .yikes-easy-mc-submit-button:hover .yikes-mailchimp-submit-button-span-text{
        color: {{ get_field('button_grp', 'option')['text_color_transition'] }};
    }

    #contact-content .form-title h2 {
        color: {{ get_field('contact_form_grp','option')['form_title_color'] }};
    }
    #contact-content .wpcf7 label, #contact-content .wpcf7-list-item-label{
      color: {{ get_field('contact_form_grp','option')['form_label_color'] }};
    }

    #contact-content .wpcf7 input[type="text"], #contact-content .wpcf7 input[type="email"], .wpcf7 textarea {
        border-color: {{ get_field('contact_form_grp','option')['form_border_color'] }};
    }

    #contact-content input[type="submit"] {
      border:none;
      color: {{ get_field('contact_form_grp', 'option')['text_color'] }};
      background-color: {{ get_field('contact_form_grp', 'option')['bg_color'] }};
      transition: all 0.6s ease;
    }
    #contact-content input[type="submit"]:hover{
        color: {{ get_field('contact_form_grp', 'option')['text_color_transition'] }};
        background-color: {{ get_field('contact_form_grp', 'option')['bg_color_transition'] }};
    }


    #modal-form, #modal-form .form-ctn{
          background-color: {{ get_field('modal_form_grp','option')['background_color'] }};
    }

    #modal-form .form-input {
        border-bottom: 1px solid {{ get_field('modal_form_grp','option')['form_border_color'] }};
    }

    #modal-form .wpcf7 label, #modal-form .wpcf7-list-item-label{
        color: {{ get_field('modal_form_grp','option')['form_label_color'] }};
    }

    #modal-form .wpcf7 input[type="text"], #modal-form .wpcf7 input[type="email"], #modal-form .msg {
        border-color: {{ get_field('modal_form_grp','option')['form_border_color'] }};
    }
    #modal-form [type="checkbox"]:checked + .wpcf7-list-item-label:after,
    #modal-form [type="checkbox"]:not(:checked) + .wpcf7-list-item-label:after  {
        background: {{ get_field('modal_form_grp','option')['form_border_color'] }};
    }
    #modal-form [type="checkbox"]:checked + .wpcf7-list-item-label:before,
    #modal-form [type="checkbox"]:not(:checked) + .wpcf7-list-item-label:before {
      border:1px solid {{ get_field('modal_form_grp','option')['form_border_color'] }};
    }
    #modal-form svg line{
      stroke: {{ get_field('modal_form_grp','option')['form_border_color'] }}!important;
    }
    #modal-form textarea,
    #modal-form select,
    #modal-form input[type="text"],
    #modal-form input[type="email"],
    #modal-form input[type="tel"],
    #modal-form input[type="number"] {
      outline-color: {{ get_field('modal_form_grp','option')['form_border_color'] }};
    }

    #modal-form input[type="submit"] {
      border:none;
      color: {{ get_field('modal_form_grp', 'option')['text_color'] }};
      background-color: {{ get_field('modal_form_grp', 'option')['bg_color'] }};
      transition: all 0.6s ease;
  }
  #modal-form input[type="submit"]:hover{
      color: {{ get_field('modal_form_grp', 'option')['text_color_transition'] }};
      background-color: {{ get_field('modal_form_grp', 'option')['bg_color_transition'] }};
  }

  #modal-form ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
    font-size: 16px;
    color: {{ get_field('modal_form_grp','option')['placeholder_color'] }}
  }
  #modal-form ::-moz-placeholder { /* Firefox 19+ */
    font-size: 16px;
    color: {{ get_field('modal_form_grp','option')['placeholder_color'] }}
  }
  #modal-form :-ms-input-placeholder { /* IE 10+ */
    font-size: 16px;
    color: {{ get_field('modal_form_grp','option')['placeholder_color'] }}
  }
  #modal-form :-moz-placeholder { /* Firefox 18- */
    font-size: 16px;
    color: {{ get_field('modal_form_grp','option')['placeholder_color'] }}
  }
  #modal-form select { /* Firefox 18- */
    font-size: 16px;
    color: {{ get_field('modal_form_grp','option')['placeholder_color'] }}
  }


    /** ANIMATIONS **/
    .do-animation {
        transition-duration: {{ $animation['prop_duration'] }}s;
        transition-timing-function: {{ $animation['prop_easing'] }};

        animation-duration: {{ $animation['prop_duration'] }}s;
        animation-timing-function: {{ $animation['prop_easing'] }};

        animation-fill-mode: forwards;
        /*animation-iteration-count: infinite;*/
    }

    /* Content Container Animation  */
    .content-ctn.do-animation, .txt.do-animation, .content-rect-text.do-animation {
        animation-name: {{ $animation['content_animation'] }};

    }


    .block-background-title .title-ctn:before, .block-background-title .title-ctn:after {
        background-color: {{ get_field('span_grp','option')['color'] }};
    }
    .block-background-title .title-ctn.do-animation:before, .block-background-title .title-ctn.do-animation:after {
        transition-duration: {{ get_field('animation_props', 'option')['duration'] }}s;
        transition-timing-function: {{ get_field('animation_props', 'option')['easing'] }};

        animation-duration: {{ get_field('animation_props', 'option')['duration'] }}s;
        animation-timing-function: {{ get_field('animation_props', 'option')['easing'] }};
    }



</style>
