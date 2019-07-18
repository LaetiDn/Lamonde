<?php


/*
    if(is_front_page() || get_page_template_slug( get_the_ID() ) == "about" || get_page_template_slug( get_the_ID() ) == "menu"){
        $whiteNav = false;
    }else {
        $whiteNav = true;
    }

    $homeUrl = home_url();
    if(icl_get_current_language() == 'en'){
        $homeUrl = $homeUrl.'/en';
    }
*/
?>

<div class="main-nav-outer">
    <div class="main-nav-inner">

        <div class="top-bar-outer">
            <div class="top-bar-inner default-padding">
                <div class="bg-color" style="background-color: {{ get_field("header_top_bar_color", "option") }}; opacity: {{ get_field("header_top_bar_opacity", "option") }}"></div>
                <div id="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="logo-ctn">
                    <a href="{{ home_url() }}"><img class="logo black" src="{{ get_field("header_logo", "option")["url"]  }}" alt="logo"></a>
                </div>

                <div class="lang">
                    <?php pll_the_languages( array('display_names_as'=>'slug', 'hide_current'=>1)); ?>
                </div>
            </div>
        </div>

        <nav class="nav">
            <div class="nav-wrapper">
                <div class="bg-color" style="background-color: {{ get_field("header_top_bar_color", "option") }}; opacity: {{ get_field("header_top_bar_opacity", "option") }}"></div>
                <div class="logo-h">
                    <a href="{{ home_url() }}"><img class="logo black" src="{{ get_field("header_logo", "option")["url"]  }}" alt="logo"></a>
                </div>

                @if( ICL_LANGUAGE_CODE == "en")
                    {{ wp_nav_menu(['menu' => 'main-nav']) }}
                @else
                    {{ wp_nav_menu(['menu' => 'main-nav-fr']) }}
                @endif

                <div class="lang lang-desktop">
                    <?php pll_the_languages( array('display_names_as'=>'slug', 'hide_current'=>1)); ?>
                </div>
            </div>
        </nav>

    </div>
</div>

