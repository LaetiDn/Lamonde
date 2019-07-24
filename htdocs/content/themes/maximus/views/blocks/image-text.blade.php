<section class="block-image-text animate" data-section="{{ get_sub_field('section_id') }}" style="background-color: {{ get_sub_field('bg_color') }}">
    {{--<span id="{{ get_sub_field('section_id') }}" class="anchor "></span>--}}
    <div class="content-ctn noPadding @if(get_sub_field('reverse')) {{ 'reverse' }} @else {{ 'normal' }}@endif {{ get_sub_field('layout') }}">
        @if(!empty(get_sub_field("image")))
            <div class="image-ctn bgCover" style="background-image: url('{{ get_sub_field("image") }}')"></div>
        @endif
        @if(!empty(get_sub_field("wysywyg")))
        <div class="wysywyg-ctn section-content">
            <div class="txt css-animation">
                {!! get_sub_field("wysywyg")!!}
            </div>
        </div>
        @endif
    </div>
</section>

