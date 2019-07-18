<header id="header">
        <div id="main-nav">
            MAIN NAV
            <div class="top-bar-main">
                <div class="top-bar-inner">
                    <!-- TODO : ajouter library des hamburger menu -->
                    <div id="menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                </div>
            </div>

            <!-- !!!! NE PAS OUBLIER DE METTRE DES TITLES AUX LIENS DU MENU POUR QUE LES SCREEN READER PUISSENT LIRE LEURS TITRES !!!!-->
            <!-- Rendre le aria label traduisible si le site est multilingues -->
            <nav role="navigation" aria-label="Main Navigation">
                    <!-- Changer le nom du menu au besoin  -->
                    @if(is_nav_menu( 'main-nav' ))
                        {{
                            wp_nav_menu(
                            [
                                'menu' => 'main-nav', /** Changer le nom du menu au besoin  **/
                                'container' => false,
                                'walker'         => new Aria_Walker_Nav_Menu(),
                                'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
                            ])
                        }}
                    @else
                        {{ 'no existing menu' }}
                    @endif
            </nav>
        </div>

    <div id="hero "class="hero @if(!get_field("use_a_slider", get_the_ID())){{ 'page' }} @endif">
        @if(get_field("use_a_slider", get_the_ID()))
            <div class="overlay">
                <img class="big-logo" src="{{ $header_logo }}" alt="logo">
            </div>
            <div class="header-slider">
                @if(!empty($sliderImg))
                    @foreach($sliderImg as $img)
                        <div class="slide" style="background-image: url('{{ $img['url'] }}')"></div>
                    @endforeach
                @endif
            </div>
            <div class="slider-progress">
                <div class="progress"></div>
            </div>
        @else
            <div class="bg-img" style="background-image: url('{{ get_field("header_image_background")["url"] }}')">
                <!-- @TODO: ajouter titre -->
            </div>
        @endif

    </div>

</header>

