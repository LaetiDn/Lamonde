<section class="block-logo-text section-content @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif" data-section="{{ get_sub_field('section_id') }}" style="background-color: {{ get_sub_field('bg_color') }}">
    {{--<span id="{{ get_sub_field('section_id') }}" class="anchor"></span>--}}
    <div class="content-ctn css-animation {!! get_sub_field("animation")!!}">
        @if(!empty(get_sub_field("logo")))
        <div class="logo-ctn">
            <img src="{{ get_sub_field("logo")["url"] }}" alt="{{ get_sub_field("logo")["alt"] }}">
        </div>
        @endif
        @if(!empty(get_sub_field("wysywyg")))
        <div class="wysywyg-ctn">
            {!! get_sub_field("wysywyg")!!}
        </div>
        @endif
    </div>
</section>

