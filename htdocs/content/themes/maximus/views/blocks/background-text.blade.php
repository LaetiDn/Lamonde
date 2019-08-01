<section class="block-background-text @if(get_sub_field("animation") != 'none'){{ 'animate' }}@endif">
    <div class="background-ctn" style="background-image: url('{{ get_sub_field('background')['url'] }}')">
        <div class="overlay" style="background-color: {{ get_sub_field('overlay_color') }}; opacity: {{ get_sub_field('overlay_opacity') }}"></div>
        <div class="content-rect-text css-animation wysywyg-ctn">
            <p>{!! get_sub_field('wysywig') !!}</p>
        </div>
    </div>
</section>

