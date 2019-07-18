<?php



if(is_front_page() || get_page_template_slug( get_the_ID() ) == "about" || get_page_template_slug( get_the_ID() ) == "menu"){
    $whiteNav = false;
}else {
    $whiteNav = true;
}


?>



<div class="main-nav-outer @if($whiteNav){{ 'sticky' }}@endif">
    <div class="main-nav-inner">

        <div class="top-bar-outer">
            <div class="top-bar-inner default-padding">

                <div id="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="logo-ctn">
                    <a href="{{ home_url() }}"><img class="logo black" src="{{ themosis_assets() }}/images/logo-hvor-black.svg" alt="hvor logo"></a>
                    <a href="{{ home_url() }}"><img class="logo white" src="{{ themosis_assets() }}/images/logo-hvor-white.svg" alt="hvor logo"></a>
                </div>

                <div class="lang">
                    <?php pll_the_languages( array('display_names_as'=>'slug', 'hide_current'=>1)); ?>
                </div>
            </div>
        </div>

        <nav class="nav">
            <div class="nav-wrapper">

                <div class="logo-h">
                    <a href="{{ home_url() }}"><img src="{{ themosis_assets() }}/images/h-yellow.svg" alt="logo hvor"></a>
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

