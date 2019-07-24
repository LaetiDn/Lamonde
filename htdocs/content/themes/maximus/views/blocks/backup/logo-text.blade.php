<section class="block-logo-text section-content" style="background-color: {{ get_sub_field('bg_color') }}">
    <div class="content-ctn">
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
