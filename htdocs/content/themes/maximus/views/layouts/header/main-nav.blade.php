

<div class="main-nav-outer">
    <div class="main-nav-inner">

        <div class="top-bar-outer">
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
        </div>

        <nav class="nav">
            <div class="nav-wrapper">
                <div class="bg-color" style="background-color: {{ get_field("menu_grp", "option")["top_bar_color"] }}; opacity: {{ get_field("menu_grp", "option")["top_bar_opacity"] }}"></div>
                <div class="logo-ctn">
                    <a href="{{ $home_url }}" style="width: {{ get_field("menu_grp", "option")["logo_width"] }}px"><img class="logo black" src="{{ get_field("menu_grp", "option")["logo"]["url"]  }}" alt="logo"></a>
                </div>
                @if(is_nav_menu( 'main-nav-' . pll_current_language() ))
                    {{
                        wp_nav_menu(
                        [
                            'menu' => 'main-nav-' . pll_current_language(),
                            'container' => false,
                            'walker'         => new Aria_Walker_Nav_Menu(),
                            'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
                        ])
                    }}
                @else
                    {{ 'no existing menu' }}
                @endif

                <div class="lang desktop">
                    <?php pll_the_languages( array('display_names_as'=>'slug', 'hide_current'=>1)); ?>
                </div>
            </div>
        </nav>

    </div>
</div>
