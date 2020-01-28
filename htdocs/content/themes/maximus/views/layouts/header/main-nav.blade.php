{{-- <div class="top-bar-outer"> --}}
    <div class="top-bar-inner default-padding">
        <div class="bg-color" style="background-color: {{ get_field("menu_grp", "option")["top_bar_color"] }}; opacity: {{ get_field("menu_grp", "option")["top_bar_opacity"] }}"></div>
        <div class="menu-btn-ctn">
            <div id="menu-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="logo-ctn">
            <a href="{{ $home_url }}" style="width: {{ get_field("menu_grp", "option")["logo_width"] }}px"><img class="logo black" src="{{ get_field("menu_grp", "option")["logo"]["url"]  }}" alt="logo"></a>
        </div>
        <div class="lang">
            <?php pll_the_languages( array('display_names_as'=>'slug', 'hide_current'=>1)); ?>
        </div>
    </div>
{{-- </div> --}}

<nav class="site-navigation nav">
    <div class="nav-wrapper">
        <div class="bg-color" style="background-color: {{ get_field("menu_grp", "option")["top_bar_color"] }}; opacity: {{ get_field("menu_grp", "option")["top_bar_opacity"] }}"></div>
        <div class="logo-ctn">
            <a href="{{ $home_url }}" style="width: {{ get_field("menu_grp", "option")["logo_width"] }}px"><img class="logo black" src="{{ get_field("menu_grp", "option")["logo"]["url"]  }}" alt="logo"></a>
        </div>
            {{
                wp_nav_menu(
                [
                    'theme_location' => 'primary',
                    'container' => false,
                    'walker'         => new Aria_Walker_Nav_Menu(),
                    'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
                ])
            }}
        <div class="lang desktop">
            <?php pll_the_languages( array('display_names_as'=>'slug', 'hide_current'=>1)); ?>
        </div>
    </div>
</nav>
