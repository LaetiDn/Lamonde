<header id="header" class="header" style="background-color: {{ get_field("menu_grp", "option")["top_bar_color"] }}; opacity: {{ get_field("menu_grp", "option")["top_bar_opacity"] }}">
    <div class="header__top-bar default-padding" >
        <a class="header__logo" href="{{ $home_url }}" style="width: {{ get_field("menu_grp", "option")["logo_width"] }}px">
            <img class="logo black" src="{{ get_field("menu_grp", "option")["logo"]["url"]  }}" alt="logo">
        </a>
        <nav class="site-navigation {{ get_field("menu_grp", "option")["links_animation"] }}">
            {{
                wp_nav_menu(
                [
                    'menu' => 'main-nav-' . pll_current_language(),
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
</header>

@if(!is_single())
<div id="hero" class="hero @if(!get_field("use_a_slider", get_the_ID())){{ 'page' }} @endif">
    <div class="overlay"></div>
    @if(get_field("use_a_slider", get_the_ID()))
        <div class="logo-ctn">
            <img class="big-logo" src="{{ get_field("header_logo", get_the_ID())["url"] }}" alt="logo">
        </div>
        <div class="header-slider">
            @if(!empty( get_field("header_slider_image", get_the_ID()) ))
                @foreach( get_field("header_slider_image", get_the_ID() ) as $img)
                    <div class="slide" style="background-image: url('{{ $img['url'] }}')"></div>
                @endforeach
            @endif
        </div>
        <div class="slider-progress">
            <div class="progress"></div>
        </div>
    @else
        <div class="bg-img" style="background-image: url('{{ get_field("header_image_background")["url"] }}')">
            <h1>{{ get_field("header_image_title"), get_the_ID() }}</h1>
        </div>
    @endif
</div>
@endif
