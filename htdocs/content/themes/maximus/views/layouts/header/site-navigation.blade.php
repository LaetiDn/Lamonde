
<div class="header__top-bar default-padding" >
    <a class="header__logo" href="{{ $home_url }}" style="width: {{ get_field("menu_grp", "option")["logo_width"] }}px">
        <img class="logo black" src="{{ get_field("menu_grp", "option")["logo"]["url"]  }}" alt="logo">
    </a>
    <nav class="site-navigation">
        {{
            wp_nav_menu(
            [
                'theme_location' => 'primary',
                'container' => false,
                'walker'         => new Aria_Walker_Nav_Menu(),
                'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
            ])
        }}
    </nav>
    <div class="menu-btn-ctn">
        <div id="menu-btn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
