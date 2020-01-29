<section id="{{ get_sub_field('section_id') }}" class="block-logo-text section-content @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif " style="background-color: {{ get_sub_field('bg_color') }}">

    <div class="content-ctn css-animation {!! get_sub_field("animation")!!}">
        @if(!empty(get_sub_field("logo")))
        <div class="logo-ctn">
            <img src="{{ get_sub_field("logo")["url"] }}" alt="{{ get_sub_field("logo")["alt"] }}">
        </div>
        @endif
        <div class="text">
            {!! get_sub_field("text")!!}
        </div>

    </div>
</section>
