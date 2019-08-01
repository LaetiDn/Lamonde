<section class="block-icons-text section-content @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif" data-section="{{ get_sub_field('section_id') }}" style="background-color: {{ get_sub_field('bg_color') }}">
    {{--<span id="{{ get_sub_field('section_id') }}" class="anchor"></span>--}}
    <div class="content-ctn css-animation {!! get_sub_field("animation")!!}">
        <div class="all-logo-ctn">
            @if(!empty(get_sub_field("icon01_grp")))
                <div class="icon-wrapper">
                    <div class="icon-ctn">
                        <img class="icon" src="{{ get_sub_field("icon01_grp")['icon']["url"] }}" alt="{{ get_sub_field("icon01")['icon']["alt"] }}">
                    </div>
                    <span>{{ get_sub_field("icon01_grp")['title'] }}</span>
                </div>
            @endif
            @if(!empty(get_sub_field("icon02_grp")))
                <div class="icon-wrapper">
                    <div class="icon-ctn">
                        <img class="icon" src="{{ get_sub_field("icon02_grp")['icon']["url"] }}" alt="{{ get_sub_field("icon02")['icon']["alt"] }}">
                    </div>
                    <span>{{ get_sub_field("icon02_grp")['title'] }}</span>
                </div>
            @endif
            @if(!empty(get_sub_field("icon03_grp")))
                <div class="icon-wrapper">
                    <div class="icon-ctn">
                        <img class="icon" src="{{ get_sub_field("icon03_grp")['icon']["url"] }}" alt="{{ get_sub_field("icon03")['icon']["alt"] }}">
                    </div>
                    <span>{{ get_sub_field("icon03_grp")['title'] }}</span>
                </div>
            @endif
            @if(!empty(get_sub_field("icon04_grp")))
                <div class="icon-wrapper">
                    <div class="icon-ctn">
                        <img class="icon" src="{{ get_sub_field("icon04_grp")['icon']["url"] }}" alt="{{ get_sub_field("icon04")['icon']["alt"] }}">
                    </div>
                    <span>{{ get_sub_field("icon04_grp")['title'] }}</span>
                </div>
            @endif
        </div>
        @if(!empty(get_sub_field("wysywyg")))
        <div class="wysywyg-ctn">
            {!! get_sub_field("wysywyg")!!}
        </div>
        @endif
        @if(!empty( get_sub_field("cta")))
        <div class="link-ctn">
            <a class="cta" href="{{ get_sub_field("cta")["url"] }}">{{ get_sub_field("cta")["title"] }}</a>
        </div>
        @endif
    </div>
</section>
