<section id="{{ get_sub_field('section_id') }}" class="section-content block-discover {{ get_sub_field('section_class') }}
                                                @if($animation['content_animation'] != 'none' || get_sub_field("animation") != 'gen' ){{ 'animate' }}@endif"
                                                style="background-color: {{ get_sub_field('bg_color') }}">

    <div class="content text css-animation {{ get_sub_field("animation") != 'gen' ? get_sub_field("animation") : $animation['content_animation']  }}">
        @if(!empty(get_sub_field("logo")))
            <figure class="discover__logo logo-ctn" style="width:{{ get_sub_field("logo_width") }}px">
                <img src="{{ get_sub_field("logo")["url"] }}" alt="{{ get_sub_field("logo")["alt"] }}" >
            </figure>
        @endif

        {!! get_sub_field('text') !!}

        @if(!empty(get_sub_field('link_left')) || !empty(get_sub_field('link_right')))
            <div class="links-ctn">
                <h3 class="bold">{{ pll__('discover') }} :</h3>
                <div class="link-ctn">
                    @if(!empty(get_sub_field('link_left')))
                        @include('components.button', [
                            'style' => get_field('button_grp', 'option')['style'],
                            'url' => get_sub_field('link_left')['url'],
                            'target' => get_sub_field('link_left')['target'],
                            'text' => get_sub_field('link_left')["title"],
                        ])
                    @endif
                    @if(!empty(get_sub_field('link_right')))
                        @include('components.button', [
                            'style' => get_field('button_grp', 'option')['style'],
                            'url' => get_sub_field('link_right')['url'],
                            'target' => get_sub_field('link_right')['target'],
                            'text' => get_sub_field('link_right')["title"],
                        ])
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>
