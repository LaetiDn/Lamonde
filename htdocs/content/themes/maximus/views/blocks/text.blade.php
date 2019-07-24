<section class="block-text section-content animate" data-section="{{ get_sub_field('section_id') }}" style="background-color: {{ get_sub_field('bg_color') }}">
    {{--<span id="{{ get_sub_field('section_id') }}" class="anchor"></span>--}}
    <div class="content-ctn css-animation">
        @if(!empty(get_sub_field("wysywyg")))
        <div class="wysywyg-ctn ">
            {!! get_sub_field("wysywyg")!!}
        </div>
        @endif
    </div>
</section>
