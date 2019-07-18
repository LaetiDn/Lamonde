<section class="block-text section-content" style="background-color: {{ get_sub_field('bg_color') }}">
    <div class="content-ctn">
        @if(!empty(get_sub_field("wysywyg")))
        <div class="wysywyg-ctn ">
            {!! get_sub_field("wysywyg")!!}
        </div>
        @endif
    </div>
</section>
