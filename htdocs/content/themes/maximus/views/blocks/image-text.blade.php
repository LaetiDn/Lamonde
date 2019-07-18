<section class="block-image-text" style="background-color: {{ get_sub_field('bg_color') }}">
    <div class="content-ctn noPadding @if(get_sub_field('reverse')) {{ 'reverse' }}@endif {{ get_sub_field('layout') }}">
        @if(!empty(get_sub_field("image")))
            <div class="image-ctn bgCover" style="background-image: url('{{ get_sub_field("image") }}')"></div>
        @endif
        @if(!empty(get_sub_field("wysywyg")))
        <div class="wysywyg-ctn section-content">
            <div class="txt">
                {!! get_sub_field("wysywyg")!!}
            </div>
        </div>
        @endif
    </div>
</section>
