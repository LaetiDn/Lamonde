<section id="{{ get_sub_field('section_id') }}" class="section-content block-discover
                                                @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif"
                                                style="background-color: {{ get_sub_field('bg_color') }}">

    <div class="content text css-animation {!! get_sub_field("animation") !!}">
        @if(!empty(get_sub_field("logo")))
            <figure class="discover__logo logo-ctn" style="width:{{ get_sub_field("logo_width") }}px">
                <img src="{{ get_sub_field("logo")["url"] }}" alt="{{ get_sub_field("logo")["alt"] }}" >
            </figure>
        @endif

        {!! get_sub_field('text') !!}

        @if(!empty(get_sub_field('link_left')) || !empty(get_sub_field('link_right')))
            <div class="links-ctn">
                <span class="bold">{{ pll__('discover') }} :</span>
                <div class="link-ctn">
                    @if(!empty(get_sub_field('link_left')))
                    <a class="cta" href="{!! get_sub_field('link_left')['url'] !!}" target="{{ get_sub_field('link_left')['target'] }}">
                        {{ get_sub_field('link_left')["title"] }}
                        <i class="icon fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    @endif
                    @if(!empty(get_sub_field('link_right')))
                    <a class="cta" href="{{ get_sub_field('link_right')['url'] }}" target="{{ get_sub_field('link_right')['target'] }}">
                        {{ get_sub_field('link_right')["title"] }}
                        <i class="icon fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>
