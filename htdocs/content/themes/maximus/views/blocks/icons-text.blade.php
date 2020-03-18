
<section id="{{ get_sub_field('section_id') }}" class="block-icons-text section-content @if($animation['content_animation'] != 'none' || get_sub_field("animation") != 'gen' ){{ 'animate' }}@endif"  style="background-color: {{ get_sub_field('bg_color') }}">
    <div class="content css-animation {{ get_sub_field("animation") != 'gen' ? get_sub_field("animation") : $animation['content_animation']  }}">
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
        @if(!empty(get_sub_field("text")))
        <div class="text wysywyg-ctn">
            {!! get_sub_field("text")!!}
        </div>
        @endif
        @if(!empty( get_sub_field("cta")))
        <div class="link-ctn">
            <a class="cta" href="{{ get_sub_field("cta")["url"] }}" target="{{ get_sub_field("cta")["target"] }}">{{ get_sub_field("cta")["title"] }}</a>
        </div>
        @endif
    </div>
</section>
